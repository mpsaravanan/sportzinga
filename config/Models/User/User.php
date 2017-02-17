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
	public function login($req){
		$username = $req['username'];
		$password = $req['password'];
		$ActualPass = DB::table('sz_user')->where('user_id',$username)->value('password');
		if(empty($ActualPass)){
			$response = array(
					"status" => "500",
					"message" => 'User id does not exist'
			);
		}
		else if(strcmp($password,$ActualPass)==0){
			$data = DB::table('sz_user')->where('user_id',$username)->get();
			$auth = hash('ripemd160',$data[0]->id+$data[0]->user_id+$data[0]->dob);
			$suc = DB::table('sz_user')->where('user_id',$username)->update(['auth_token'=>$auth]);
			$response = array(
				"status" => "200",
				"data" => $data,
				"auth_token" => $auth
			);
		}
		else{
			$response = array(
					"status" => "500",
					"message" => "User and password does not match"
			);
		}
		return json_encode($response);
	}
	public function verifyAuth($request){
		$auth_token = $request['auth_token'];
		$username = $request['username'];
		$suc = DB::table('sz_user')->where('user_id',$username)->value('auth_token');
		if(strcmp($suc,$auth_token)==0){
			$response = array(
				"status" => "200",
				"message" => "AUTH_SUCCESS"
			);
		}
		else{
			$response = array(
				"status" => "500",
				"message" => "AUTH_FAILURE"
			);
		}
		return $response;
	}
	public function logout(){
		$username = $_SESSION['username'];
		session_unset();
		$suc = DB::table(sz_user)->where('user_id',$username)->update(['auth_token'=>0]);
		if($suc){
			$response = array(
				"status" => "200",
				"message" => "SUCCESS"
			);
		}
		else{
			$response = array(
				"status" => "500",
				"message" => "FAILURE"
			);
		}
		return $response;
	}
}
