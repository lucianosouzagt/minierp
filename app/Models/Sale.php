<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'custom_number','client_id','type', 'input_document', 'date_sale', 'created'
    ];
}
