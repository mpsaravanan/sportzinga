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
	/*formats the values received from the post ad form
	 *
	 * @param $attr array : attribute received from from
	 * @param $isMulti boolean : whether attribute receives multiple values
	 * @return string
	 */
	public function UserSinup($data){
		return $this->curlApiCall(config('constants.SECURE_PAYMENT'), 'POST',$data,'ON', true);
	}

}

