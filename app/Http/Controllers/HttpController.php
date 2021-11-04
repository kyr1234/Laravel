<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

//THIS IS USEDD TO OBTAIN DATA FROM THE API SERVER AS DATA

class HttpController extends Controller
{
function index(){
  $collection=Http::get("https://www.google.com");
  return view("Http",["collection"=>$collection["data"]]);
}
}
