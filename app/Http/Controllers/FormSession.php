<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormSession extends Controller
{
    //
function index(Request $req)
{
 $data=$req->input();

 //   THE FIRST PARAMETER TAKES THE NAME OF THE key of session INPUT PARAMTER  THE  SECOND Parameter TAKES THE NAME OF THE INPUT VARIABLE
                //session variable
 $req->session()->put("user",$data["user"]);
echo session('user');
return redirect("session");

}
}








