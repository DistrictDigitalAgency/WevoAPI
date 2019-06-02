<?php

namespace wevo\Http\Controllers\Api\Auth;

use wevo\Http\Controllers\Controller;
use wevo\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;
class RegisterController extends Controller
{


  use IssueTokenTrait ;
  private $client;


  public function __construct()
  {

    $this->client = Client::findOrFail(1);
  }


  public function register(Request $request)
  {
  	$this->validate($request, [
	'name' => 'required', 
	'email' => 'required|email|unique:users,email',
	'password' => 'required|min:8',
  'c_password'=>'required|same:password',
  'phone' => 'required|digits:8|unique:users',
  'date_of_birth' => 'required',
  'sexe'=> 'required|in:male,female,autre',


  

  	]);

  	$user = User::create([
    'name'=>request('name'),
    'email'=>request('email'),
    'password'=>bcrypt(request('password')),
    'phone'=> request('phone'),
    'date_of_birth'=>request('date_of_birth'),
    'sexe'=> request('sexe'),


  	]);
	
    return $this->issueToken($request, 'password');
    {
         /* $params = [
        'grant_type' => 'password',
        'client_id' => $this->client->id,
        'client_secret' => $this->client->secret,   
        'username'=> request('phone'),
        'password'=> request('password'),
        'date_of_birth'=>request('date_of_birth'),
        'sexe'=> request('sexe'),
        'scope'=>'*' 
      ];
      $request->request->add($params);

      $proxy = Request::create('oauth/token', 'POST');

      return Route::dispatch($proxy);*/
    }
  }

}
