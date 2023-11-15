<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarListing extends Model
{
    protected $table = 'carlisting';
    protected $fillable = ['carmodel', 'color', 'mileage', 'year', 'photo'];


}
