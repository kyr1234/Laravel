<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallForm extends Controller
{
    function FormCall(){
        return view("form");
    }
}
