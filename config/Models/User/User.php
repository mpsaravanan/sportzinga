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
	public function login(Request $request){
		$req = $request->all();
		$userName = $req->username;
		$password = $req->password;
		$ActualPass = DB::table('sz_user')->where('user_id',$username)->value('password');
		if(empty($ActualPass)){
			$response = 'User id does not exist';
		}
		else if(strcmp($password,$ActualPass->password)){
			$data = DB::table('sz_user')->where('user_id',$username)->get();
			$auth = hash('ripemd160',$data->id+$data->user_id+$data->dob);
			$suc = DB::table('sz_user')->where('user_id',$username)->update(['auth_token'=>$auth]);
			$response->userData = $data;
			$response->auth = $auth;
		}
		else{
			$response = "User and password does not match";
		}
		$response = Response::JsonResponse($response);
		return json_encode($response);
	}
	public function verifyAuth($request){
		$request = $request->all();
		$auth_token = $request->auth_token;
		$username = $request->username;
		$suc = DB::table('sz_user')->where('user_id',$username)->value('auth_token');
		if(strcmp($suc->auth_token,$auth_token)){
			$response = 'Auth_Success';
		}
		else{
			$response = 'Auth_Failure';
		}
		return $response;
	}
	public function logout(){
		$username = $_SESSION['username'];
		session_unset();
		$suc = DB::table(sz_user)->where('user_id',$username)->update(['auth_token'=>0]);
		if($suc){
			$response = 'Success';
		}
		else{
			$response = 'Failure';
		}
		return $response;
	}
}
