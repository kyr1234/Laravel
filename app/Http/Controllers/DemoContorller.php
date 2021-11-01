<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoContorller extends Controller
{
  function index(){
   // let data=["yug","aagna","papa","mom"];
    return view("welcome");
  }
}
