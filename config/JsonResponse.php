<?php
namespace App;

class JsonResponse
{
	public function sendJson($response)
	{
		return response($response)
            ->header('Content-Type', 'json');
	}

}