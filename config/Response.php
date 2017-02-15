<?php
namespace App;

class Response
{
	public static function jsonRsponse($data)
	{
		if($data){
			$payload = array(
            "statusCode" => 200,
            "message"=>'success',
            "data" => $data
            );
		}else {
			$payload = array(
            "statusCode" => 500,
            "message"=>'success',
            "data" => 'error fetching MySql Query'
            );
		}	
		return $payload;
	}

}