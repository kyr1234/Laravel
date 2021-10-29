<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users; 
use App\Http\Controllers\UsersViewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//DYNAMIC DATA ROUTES

Route::get('contact/{name}',function($name){
return view('contact',['name'=>$name]);
});


//THE THING PASSED IN THE REDIRECTT IS THE ROUTE TO THE PAGE5

Route::get("/redirect",function(){
return redirect("about");
});

Route::view('about','about');

//CONTROLLERS ARE USED TO PROVIDE AN PATHWAY TO PASS DATA FROM DATABASE TO VIEW

//IT TAKES PATH , [CONTROLLER NAME::CLASS,FUNCTION NAME]

Route::get("users/{name}",[Users::class,'index']);



Route::get("userview/{name}",[UsersViewController::class,"viewfromcontroller"]);