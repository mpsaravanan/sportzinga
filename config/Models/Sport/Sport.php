<?php
namespace App\Models;
use DB;
use App\Response;
class Sport{
  public function getList(){
    $sport = DB::table('sz_sports')->get();
    $response = Response::jsonRsponse($sport);
    return $response;
  }
  public function getSportById($id){
    $sport = DB::table('sz_sports')->where('id',$id)->value('name');
    if(sizeof($sport)>0){
      $response = array(
        "status" => "200",
        "data" => array(
          "id" => $id,
          "sport" => $sport
        )
      );
    }
    else{
      $response= array(
        "status" => "500",
        "message" => "Sport not found"
      );
    }
    return json_encode($response);
  }
}
