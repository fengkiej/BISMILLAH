<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BalanceDetail extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'balance'
    ];
}
