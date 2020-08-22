<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillabel = [
        'product_name', 'product_code', 'details','logo'
    ];
}
