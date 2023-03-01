<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = ['vehicles','fleetsize','lookingfor','vehicletracking','mobilenumber','email','date','status'];
}
