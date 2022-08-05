<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = array("first_name", "last_name", "phone","address1","address2","city","landmakr","post_office","pincode","country","state");

}
