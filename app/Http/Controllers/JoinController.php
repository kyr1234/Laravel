<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class JoinController extends Controller
{
    function index(){
DB::table('customers')
->join("users","customers.id","=","users.id")
//->select("users*")
->where("customers.id",2)
->get();        
    }
}



