<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    //
    protected $table = 'products';
    protected $fillable = ['productname', 'description', 'qty', 'price', 'imageUrl'];
}
