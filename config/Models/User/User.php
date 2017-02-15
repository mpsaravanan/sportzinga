<?php
namespace App\Models;
use DB;
use App\Response;
class User
{
	public function getUserDetails()
	{
		$result ;
		$users = DB::table('sz_user')->get();
		$response = Response::jsonRsponse($users);
		return json_encode($response);
	}

}