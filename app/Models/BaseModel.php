<?php
/**
 * @File BaseModel.php
 * @Project quikr_prod.
 * @Author: atiwari@quikr.com
 * @Date: 13/5/15
 * @Time: 1:03 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Log;
use Illuminate\Http\Response;
use Quikr\Services\Metering;

class BaseModel extends Model
{
	/* make a curl call to APIs for post requests
	 *
	 * @param endpoint string : API's url.
	 * @param type string : post/get
	 * @param input json
	 * @param encryptionMethod string
	 * @return array
	 *  0 => status int : http response code
	 *  1 => response json
	 */
	public function curlApiCall($apiEndPoint, $type, $input = '', $encryptionMethod = 'ON', $securePayment = false,$metering=true)
	{
		if ($metering) {
			$meter = new Metering($apiEndPoint);
			$meter->start();
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $apiEndPoint);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($type));

		$env = getenv('APP_ENV');

		if ($env == 'local' || $env == 'staging') {
			curl_setopt($ch,CURLOPT_TIMEOUT,1000);
			curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,50);
		} else {
			curl_setopt($ch,CURLOPT_TIMEOUT,1000);
			curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,50);
		}

		if ("POST" == strtoupper($type) || "DELETE" == strtoupper($type) || "PUT" == strtoupper($type)) {
			curl_setopt($ch, CURLOPT_POSTFIELDS, $input);
			if(true === $securePayment) {
				$headerPost = array(
					'X-Quikr-Client: RealEstate.Desktop'
				);
			} else {
				$headerPost = array(
					'Accept: application/json',
					'Content-Type: application/json',
					'Content-Length: ' . strlen($input),
					'X-Quikr-Client: RealEstate.Desktop'
				);
			}

			if ('ON' == $encryptionMethod) {
				array_push($headerPost, 'Accept-Encoding: gzip, deflate');
			}
			/*if (!empty($specialHeader)) {
				array_push($headerPost, $specialHeader);
			}*/

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headerPost);
		} else {
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Quikr-Client: RealEstate.Desktop'));
		}
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		$information = curl_getinfo($ch);
		// Log::info($information);
		$status = $information['http_code'];

		if(array_key_exists('debug', $_COOKIE) && $_COOKIE['debug']) {
			Log::info('******************************DEBUG API LOG*****************************');
			Log::info($apiEndPoint);
			Log::info(json_encode($input));
			Log::info('******************************DEBUG API LOG ENDS*****************************');
		}
		if ($metering) {
			$meter->stop();
		}
		return array(
			"status" => $status,
			"response" => $response
		);
	}

	/*
	 * return json to the client/browser
	 *
	 * @param output array
	 * @return response
	 */
	public function sendJson($output){
		return response()->json($output)->header("Cache-Control","max-age=300");
	}
}
