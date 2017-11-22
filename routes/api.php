<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Router::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Router::get('test',function(){
   return response([1,2,3,4],200); 
});

Router::get('users',function(Request $request){
   $user = new User();
   $users = $user->getAllUsers();
   return response($users,200);
});
