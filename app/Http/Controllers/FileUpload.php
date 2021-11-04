<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUpload extends Controller
{
    function index(Request $req){
        //the file takes the name of the html tag and the store takes the name of folder the data want to store
        return $req->file('file')->store('files');
    }
}
