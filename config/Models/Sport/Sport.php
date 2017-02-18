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
}
