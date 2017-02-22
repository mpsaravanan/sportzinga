<?php
/**
 * @File Api.php
 * @Project quikr_prod.
 * @Author: manashk@quikr.com
 * @Date: 13/05/15
 * @Time: 6:00 PM
 */

namespace App\Models;
use App\Models\BaseModel;

class Api extends BaseModel
{
	private $apiEndpoint = "http://127.0.0.1:9004/api/";
	/*formats the values received from the post ad form
	 *
	 * @param $attr array : attribute received from from
	 * @param $isMulti boolean : whether attribute receives multiple values
	 * @return string
	 */
	public function UserSinup($data){
		return $this->curlApiCall(($this->apiEndpoint. "user/signup/"), 'POST',$data,'ON', true);
	}

	public function login($data){
		return $this->curlApiCall(($this->apiEndpoint. "user/login/"), 'POST',$data,'ON', true);
	}

	public function logOut($data){
		return $this->curlApiCall(($this->apiEndpoint. "user/logout/".$data), 'GET','ON', true);
	}

	public function session($data){
		return $this->curlApiCall(($this->apiEndpoint. "user/auth"), 'POST',$data,'ON', true);
	}

}

