<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['user_id', 'services', 'date', 'time', 'message'];
    protected $table = 'bookings';
}
