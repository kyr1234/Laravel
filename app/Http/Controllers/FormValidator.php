<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidator extends Controller
{
    function index(Request $req){
        $req->validate([
            "Username"=>"requiredma |max:10",
            "Password"=>"required |min:10"
        ]);
    return $req->input();
    }
}
