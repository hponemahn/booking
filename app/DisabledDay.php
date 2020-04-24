<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisabledDay extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'disabled_days';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
}
