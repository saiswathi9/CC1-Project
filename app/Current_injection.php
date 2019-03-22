<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Current_injection extends Model
{
     protected $fillable = array(
        'delay',
        'duration',
        'amplitude'
);
}
