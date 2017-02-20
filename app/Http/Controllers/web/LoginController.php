<?php 
namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use App\JsonResponse;
use App\Models\Api;
use Request, Auth,Input;
class LoginController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->apiModel = new Api();		
	}

	public function singup() {
		$userDetails = Request::all();
		$response= $this->apiModel->similarSearch(json_encode($payloadForFooter));
		var_dump($userDetails);exit;
		
	}

	public function index() {
		var_dump($this->apiModel->check());
		exit;
		return view('home');
		
	}
	
	
}