<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisabledCount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'disabled_count';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['day', 'time_id', 'count'];
}
