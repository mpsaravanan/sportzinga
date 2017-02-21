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
			$email = DB::table('sz_user_emails_phones')->where('user_id',$username)->where('type',1)->value('value');
			$phone = DB::table('sz_user_emails_phones')->where('user_id',$username)->where('type',0)->value('value');
			$auth = hash('ripemd160',$data[0]->id+$data[0]->user_id+$data[0]->dob);
			$suc = DB::table('sz_user')->where('user_id',$username)->update(['auth_token'=>$auth]);
			$data[0]->phone = $phone;
			$data[0]->email = $email;
			$data[0]->auth_token = $auth;
			unset($data[0]->password);
			$data = (object)$data;
			$response = array(
				"status" => "200",
				"data" => $data,
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
	public function logout($username){
		session_unset();
		$suc = DB::table('sz_user')->where('user_id',$username)->update(['auth_token'=>0]);
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
	public function signup($request){
		$username = $request['user_id'];
		$password = $request['password'];
		$dob = $request['dob'];
		$name = $request['name'];
		$email = $request['email'];
		$phone = $request['phone'];
		$gender = $this->mapGender($request['gender']);
		$insertUser = DB::table('sz_user')->insert([
			['user_id' => $username , 'password' => $password, 'dob' => $dob, 'name' => $name, 'gender' => $gender]
			]);
		$insertUserEmail = DB::table('sz_user_emails_phones')->insert([
			['user_id'=>$username, 'type'=>0 ,'value' => $phone, 'is_primary'=>1, 'is_verified' =>1],
			['user_id'=>$username, 'type'=>1, 'value' => $email, 'is_primary'=>1 , 'is_verified' =>1]
			]);
			if($insertUser && $insertUserEmail){
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
	public function mapGender($gen){
		if($gen == 'male'||$gen == 'm'){
			return 1;
		}
		else
			return 0;
	}
}
