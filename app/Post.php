<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'monitor';
    protected $fillable = ['job_id',
        'job_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
