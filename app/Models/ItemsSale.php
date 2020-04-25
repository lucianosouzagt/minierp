<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemsSale extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'sale_id','product_id', 'quantity','unit_price','amount', 'created'
    ];
}
