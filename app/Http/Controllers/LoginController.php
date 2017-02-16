<?php 
namespace App\Http\Controllers;
use App\JsonResponse;
use App\Models\Api;
use Request, Auth,Input;
class LoginController extends Controller {
	private $userDetails;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
		$this->apiModel = new Api();		
	}

	public function singup() {
		$userDetails = Request::all();
		//$response= $this->apiModel->similarSearch(json_encode($payloadForFooter));
		var_dump($userDetails);exit;
		
	}

	public function index() {
		return view('home');
		
	}
	
	
}