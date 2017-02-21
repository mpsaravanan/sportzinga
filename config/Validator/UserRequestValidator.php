<?php
namespace App\Http\Controllers;
use App\JsonResponse;
use App\Models\User;
use Request, Auth,Input;
use DB;
class UserRequestValidator{
  public $validationError;

  public function isValidLogin($request){
    $username = $request['username'];
    $password = $request['password'];
    if(sizeof($request)>2){
      $this->validationError = "Invalid tags in request. Send only username and password";
      return false;
    }
    if(empty($username)||empty($password)){
      $this->validationError = "Username or password cannot be empty";
      return false;
    }
    return true;
  }
  public function isValidAuthCall($request){
    $username = $request['username'];
    $auth_token = $request['auth_token'];
    if(sizeof($request)>2){
      $this->validationError = "Invalid tags in request. Send only username and auth token";
      return false;
    }
    if(empty($username)||empty($auth_token)){
      $this->validationError = "Username or auth_token cannot be empty";
      return false;
    }
    return true;
  }
  public function isValidSignupReq($request){
    if(sizeof($request)>7){
      $this->validationError = "Too many tags in request.";
      return false;
    }
    if(sizeof($request)<7){
      $this->validationError = "Too few tags in request.";
      return false;
    }
    if(!$this->validateUserId($request['user_id'])){
      $this->validationError = "User_id already present.";
      return false;
    }
    if(!$this->validateDOB($request['dob'])){
      $this->validationError = "DOB is wrong. Please correct it.";
      return false;
    }
    if(!$this->validatePhone($request['phone'])){
      $this->validationError = "Phone is wrong or already registered. ";
      return false;
    }
    if(!$this->validateEmail($request['email'])){
      $this->validationError = "Email is wrong or already registered.";
      return false;
    }
    return true;
  }
  public function validateUserId($userid){
    $user = DB::table('sz_user')->where('user_id',$userid)->get();
    if(sizeof($user)>0){
      return false;
    }
    return true;
  }
  public function validateDOB($dob){
    $arr = explode("-",$dob);
    if(strlen($arr[0])!= 4){
      return false;
    }
    if(strlen($arr[1] > 12)){
      return false;
    }
    if(strlen($arr[2] > 31)){
      return false;
    }
    return true;
  }
  public function validatePhone($phone){
    if(strlen($phone) != 10 ){
      return false;
    }
    $already = DB::table('sz_user_emails_phones')->where('value',$phone)->get();
    if(sizeof($already)>0){
      return false;
    }
    return true;
  }
  public function validateEmail($email){
    if(!strpos($email,'@')){
      return false;
    }
    $already = DB::table('sz_user_emails_phones')->where('value',$email)->get();
    if(sizeof($already)>0){
      return false;
    }
    return true;
  }
  public function getValidationError(){
    return $this->validationError;
  }
}
