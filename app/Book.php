<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['user_id', 'is_confirm', 'nexmo_request_id', 'services', 'date', 'time_id', 'message', 'is_done'];
    protected $table = 'bookings';
}
