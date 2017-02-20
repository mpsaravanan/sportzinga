<?php
namespace App\Http\Controllers;
use App\JsonResponse;
use App\Models\User;
use Request, Auth,Input;
use App\Validator;
class UserController extends Controller {
	private $userDetails;
	private $validate;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
		$this->jsonData = new JsonResponse();
		$this->userDetails = new User();
		$this->validate = new UserRequestValidator();
	}

	public function userDetails() {

		if($this->validate->isValid()){
			$response = $this->userDetails->getUserDetails();
			return 	$this->jsonData->sendJson($response);
		}
		else{
			$response = array(
				"status"=>"500",
				"message"=>$this->validate->getValidationError()
			);
			return json_encode($response);
		}
	}

	public function login() {
		$req = Request::all();
		if($this->validate->isValidLogin($req)){
			$response = $this->userDetails->login($req);
			return $this->jsonData->sendJson($response);
		}
		else{
			$response = array(
				"status"=>"500",
				"message"=>$this->validate->getValidationError()
			);
			return json_encode($response);
		}
		//$response = $this->userDetails->getLogin();
		//return 	$this->jsonData->sendJson($response);
	}
	public function auth(){
		$req= Request::all();
		if($this->validate->isValidAuthCall($req)){
			$response = $this->userDetails->verifyAuth($req);
		}
		else{
			$response = array(
				"status" => "500",
				"message" => $this->validate->getValidationError()
			);
		}
		return $this->jsonData->sendJson($response);
	}
	public function logout($username){
		$response = $this->userDetails->logout($username);
		return $this->jsonData->sendJson($response);
	}
	public function signup(){
		$req= Request::all();
		if($this->validate->isValidSignupReq($req)){
			$response = $this->userDetails->signup($req);
		}
		else{
			$response = array(
				"status" => "500",
				"message" => $this->validate->getValidationError()
			);
		}
		return $this->jsonData->sendJson($response);
	}

}
