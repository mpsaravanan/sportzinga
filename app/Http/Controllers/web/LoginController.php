<?php 
namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use App\JsonResponse;
use App\Models\Api;
use Request, Auth,Input,Response;
use Illuminate\Support\Facades\Crypt;
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

	public function login() {
		$userDetails = Request::all();
		$response = $this->apiModel->login(json_encode($userDetails));
		$response = json_decode($response['response']);
		if($response->status == 200 && $response->data){
			$response = $response->data[0];
			$encrypted_user_id = Crypt::encrypt($response->id);
			$encrypted_name = Crypt::encrypt($response->user_id);
			setcookie('__uid',$encrypted_user_id,time() + (86400 * 30));
			setcookie('__at',$response->auth_token,time() + (86400 * 30));
			setcookie('__usr',$encrypted_name,time() + (86400 * 30));
			return Response::json($response);
			//return $response;
		}else{
			return array('status'=>$response->status,'message'=>$response->message);
		}		
	}

	public function logOut() {
		if(isset($_COOKIE['__usr']) && isset($_COOKIE['__at'])){
			$username = Crypt::decrypt($_COOKIE['__usr']);
			$response = $this->apiModel->logOut($username);
			$response = json_decode($response['response']);
			if($response->message == 'SUCCESS'){
				setcookie("__uid", "", time() - 10);
				setcookie("__at", "", time() - 10);
				setcookie("__usr", "", time() - 10);
				return array('status'=>$response->status,'mesage'=>$response->message);
			}
		}
	}

	public function auth() {
		if(isset($_COOKIE['__usr']) && isset($_COOKIE['__at'])){
			$payload = array(
			'auth_token'=>$_COOKIE['__at'],
			'username'=>Crypt::decrypt($_COOKIE['__usr'])
			);
			$response = $this->apiModel->session(json_encode($payload));
			$response = json_decode($response['response']);
			return array('status'=>$response->status,'message'=>$response->message,'userName'=>Crypt::decrypt($_COOKIE['__usr']));
		}
	}


	public function index() {
		// var_dump($this->apiModel->check());
		// exit;
		return view('home');
		
	}
	
	
}