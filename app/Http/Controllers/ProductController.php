<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get()
    {
        $products = Product::get();

        $result = [];
        foreach($products as $product) {
            $result[] = [
                'Id' => $product->id,
                'Name' => $product->name,
                'Description' => $product->description,
                'Price' => $product->price,
                'Image' => $product->image,
                'Seller' => $product->seller->name,
            ];
        }
        return response()->json($result);
    }

    public function productDetail(Product $product)
    {
        $result = [
            'Id' => $product->id,
            'Name' => $product->name,
            'Description' => $product->description,
            'Image' => $product->image,
            'Price' => $product->price,
            'Stock' => $product->stock,
            'Seller' => $product->seller->name,
        ];

        return response()->json($result);
    }
}
