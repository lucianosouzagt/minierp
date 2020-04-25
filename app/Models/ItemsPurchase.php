<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemsPurchase extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'purchase_id','product_id', 'quantity', 'created'
    ];
}
