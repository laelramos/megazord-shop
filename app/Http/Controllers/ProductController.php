<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        $product = new Product();
        $product->id = '1';
        $product->description = 'Lego Harry';
        $product->category = 'Lego';
        $product->ean = '50064';
        $product->qtd = '6';
        $product->save();
    }
}
