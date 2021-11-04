<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class Deletefromdb extends Controller
{
    //
    function deleetefromdb($id){
$data=Customer::find($id);
$data->delete();
return redirect("listfromdatabase");
    }
}
