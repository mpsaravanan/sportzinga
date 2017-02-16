<?php
namespace App\Http\Controllers;
use App\JsonResponse;
use App\Models\User;
use Request, Auth,Input;
class UserController extends Controller {
	private $userDetails;
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
	}

	public function userDetails() {

		$response = $this->userDetails->getUserDetails();
		return 	$this->jsonData->sendJson($response);
	}

	public function login(Request $request) {

		$response = $this->userDetails->login($request);
		return $this->jsonData->sendJson($response);
		//$response = $this->userDetails->getLogin();
		//return 	$this->jsonData->sendJson($response);
	}
	public function auth(Request $request){
		$response = $this->userDetails->verifyAuth($request);
		return $this->jsonData->sendJson($response);
	}
	public function logout(){
		$response = $this->userDetails->logout();
		return $this->jsonData->sendJson($response);
	}

}
