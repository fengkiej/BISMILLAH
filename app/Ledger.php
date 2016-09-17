<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from', 'to', 'nominal', 'status'
    ];
}
