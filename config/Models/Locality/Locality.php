<?php
namespace App\Models;
use DB;
use App\Response;
class Locality{

  public function localityAutoSuggest($request){
    $reqString = $request["request_string"];
    $response = DB::table('sz_locality')->join('sz_cities','sz_locality.city_id','=','sz_cities.id')->where('sz_locality.name','like',$reqString.'%')->get();
var_dump(json_encode($response));exit;
    if(sizeof($response)==0){
      $response = array(
        "status" => "500",
        "message" => "Database error"
      );
    }
    return json_encode($response);
  }
}
