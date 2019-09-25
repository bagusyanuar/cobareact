<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\ProductModel;

class ProductController extends Controller
{
    //
    public function getData(){
        $products = ProductModel::query()
        ->select('id','productname', 'description', 'qty', 'price', 'imageUrl')
        ->get();

        return response()->json($products);
    }
}
