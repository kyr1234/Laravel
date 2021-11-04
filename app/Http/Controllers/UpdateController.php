<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class UpdateController extends Controller
{
    //
    function index($id){
        $data=Customer::find($id);
        return view("updateform",["data"=>$data]);
    }

    function update(Request $req){
        $data=Customer::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->save();
        return redirect("listfromdb");
    }

}
