<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'cnpj', 'telefone', 'created'
    ];
}
