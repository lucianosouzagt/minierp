<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'client_id', 'title', 'address', 'number','district','city','state',
    ];
}
