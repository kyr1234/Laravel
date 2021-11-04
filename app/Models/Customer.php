<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
public $timestamps=false;
    //this is used to extract table data from the database from different tables rather then the model name
   // public $table="users";
}
