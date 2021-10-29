<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index($name){
        echo $name;
        echo "WELCOME FROM CONTROLLER";
    }
}
