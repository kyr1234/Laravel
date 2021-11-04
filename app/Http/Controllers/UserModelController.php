<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class UserModelController extends Controller
{
    function index(){

        return Customer::all();
    }
}
