<?php
namespace App\Http\Controllers;
use App\JsonResponse;
use App\Models\Locality;
use Request, Auth,Input;
use App\Validator;
class LocalityController extends Controller {
  private $localityDetails;

  public function __construct()
	{
		$this->middleware('guest');
		$this->jsonData = new JsonResponse();
		$this->localityDetails = new Locality();
		//$this->validate = new LocalityRequestVaidator();
	}
  public function localityAutoSuggest(){
    $req = Request::all();
    $response = $this->localityDetails->localityAutoSuggest($req);
    return $this->jsonData->sendJson($response);
  }
}
