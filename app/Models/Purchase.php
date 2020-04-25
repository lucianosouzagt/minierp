<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'custom_number','provider_id','desc', 'input_document', 'date_purchase', 'created'
    ];
}
