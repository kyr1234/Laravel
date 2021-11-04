<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class listFromDb extends Controller
{
    //
    
    //pagination
    function index(){
        $data= Customer::paginate(5);
        return view('listfromdb',["data"=>$data]);
    }

    //this is used for the data entry 
    function adduser(Request $req){
        $newcustomer=new Customer();
        $newcustomer->name=$req->name;
        $newcustomer->email=$req->email;
        $newcustomer->save();
    }
}
