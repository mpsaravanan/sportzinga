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
	public function curlApiCall($apiEndPoint, $type, $input = '', $encryptionMethod = 'ON')
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $apiEndPoint);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
		if("POST" == strtoupper($type)){
			curl_setopt($ch, CURLOPT_POSTFIELDS, $input);
		}
		$headerPost = array(
			'Accept: application/json',
			'Content-Type: application/json'
		);
		var_dump(curl_setopt($ch, CURLOPT_HTTPHEADER, $headerPost));exit;
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headerPost);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		var_dump($response); exit();
		return array(
		 	"status" => $status,
			"response" => $response
		 );
	}
		// $ch = curl_init();
		// curl_setopt($ch, CURLOPT_URL, $apiEndPoint);
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($type));

		// if ("POST" == strtoupper($type) || "DELETE" == strtoupper($type) || "PUT" == strtoupper($type)) {
		// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $input);
		// }

		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// $response = curl_exec($ch);
		// var_dump($response);exit;
		// $information = curl_getinfo($ch);
		// // Log::info($information);
		// $status = $information['http_code'];

		// if(array_key_exists('debug', $_COOKIE) && $_COOKIE['debug']) {
		// 	Log::info('******************************DEBUG API LOG*****************************');
		// 	Log::info($apiEndPoint);
		// 	Log::info(json_encode($input));
		// 	Log::info('******************************DEBUG API LOG ENDS*****************************');
		// }
		// return array(
		// 	"status" => $status,
		// 	"response" => $response
		// );
	

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
