<?php

namespace ecommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id', 'sku', 'price'];
}
