<?php

//the controllers

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersViewController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormValidator;
use App\Http\Controllers\CallForm;
use Symfony\Component\Routing\Router;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\UserModelController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\FormValidation;
use App\Http\Controllers\FormSession;
use App\Http\Controllers\FlashConteoller;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\listFromDb;
use App\Http\Controllers\Deletefromdb;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\dbquery;
use App\Http\Controllers\JoinController;


//database related routes

/* Route::view('saveformdb', 'saveformdb');
Route::get('listfromdatabase', [listFromDb::class,"index"]);
Route::get('listfromdatabase', [listFromDb::class,"adduser"]);
Route::get('datafromdb/{id}', [Deletefromdb::class,"deleetefromdb"]);
Route::get('edit/{id}', UpdateController::class,"index");
Route::post('dataupdate', UpdateController::class,"update");
 */

 //dbquery

 Route::get('aggrregate',[dbquery::class,"aggregate"]);
Route::get('join',[JoinController::class,"index"]);

//JOIN WITH TABLES


/* 
//localisation
Route::get('profile/{lang}', function ($lang) {
//    App::setlocale($lang);
    return view("localisation");
});





//file upload
Route::view('upload', 'fileupload');
Route::post('fileupload', [FileUpload::class,"index"]);


Route::get('/', function () {
    return view('welcome',["name"=>"yug","age"=>10]);
});
                `   ``````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````Q````QAA1AQ1QA``` 







/// FLASH SESSION

//THIS SESSION IS USED TO STIRE THE DATA FOR A SHORT PERIOD OF TIME
Route::view('flashform', 'flashsession');
Route::post('flashsession',[FlashConteoller::class,"index"]);

//HTTP REQUEST CCONTROLLER AND ROUTES

Route::get('http', [HttpController::class],"index");
route::post("login",[FormValidation::class,"index"]);
Route::get("database",[DatabaseController::class,"index"]);
Route::get('customer', [UserModelController::class,"index"]);


//LOGIN AND LEARN OF SESSION


Route::post("loginSession",[FormSession::class,"index"]);
Route::view('session', "sessionsee");
Route::get('logout', function(){
    if(session()->has('user'))
    {
        session()->pull('user');
        return redirect("sessionsee");
    }
});

Route::get("loginSession",function(){
    if(session()->has("user"))
    {
        return redirect("sessionsee");
    }
    return redirect("FormValidateSession");
});







Route::post("users",[FormValidator::class,"index"]);
Route::get('form',CallForm::class,"FormCall");


//MIDDLEWARE

//the route middlwware takes the value of the key name in the kernal
Route::view('route', 'route')->middleware("routemiddleware"); 

//GROUP MIDDLEWARE
Route::middleware(['middleware', 'groupmiddleware'])->group(function () {
    Route::view("header","header");
    Route::view("footer","footer");
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


Route::get("aboutcontroller",[AboutController::class,"aboutpage"]);


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