<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersViewController extends Controller
{
    //
    function viewfromcontroller($name){
        return view("welcome",["name"=>$name,"age"=>25]);
    }
}
