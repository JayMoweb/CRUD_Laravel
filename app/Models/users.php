<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;


class users extends Model
{
    use HasFactory;
    use softDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [

    	'name',
    	'email',
    	'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

  
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';


}
