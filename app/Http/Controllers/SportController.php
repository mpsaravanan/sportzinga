<?php
namespace App\Http\Controllers;
use App\JsonResponse;
use App\Models\Sport;
use Request, Auth,Input;

class SportController extends Controller{
  private $sportDetails;
  /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
   public function __construct(){
     $this->middleware('guest');
     $this->jsonData = new JsonResponse();
 		 $this->sportDetails = new Sport();
   }
   public function getList(){
     $response = $this->sportDetails->getList();
 		 return 	$this->jsonData->sendJson($response);
   }
   public function getSportById($id){
     $response = $this->sportDetails->getSportById($id);
     return $this->jsonData->sendJson($response);
   }
}
