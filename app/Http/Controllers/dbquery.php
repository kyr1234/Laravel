<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dbquery extends Controller
{
    function index(){
//return DB::table('customers')->get();
return DB::table('customers')->where("id",4)->get();

return DB::table('customers')->count();

return (array)DB::table('customers')->find(6);


//insert
return DB::table('customers')
->insert([
'name'=>"KYR",
'email'=>"yugkhokhar18@gmail.com"
]);

//update
return DB::table('customers')
->where("id",10)
->update([
'name'=>"KYR",
'email'=>"yugkhokhar18@gmail.com"
]);

    }


function aggregate(){

return DB::table('customers')->sum("id");
return DB::table('customers')->min("id");
return DB::table('customers')->max("id");



}





}
