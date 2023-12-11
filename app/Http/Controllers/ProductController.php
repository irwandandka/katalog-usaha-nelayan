<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'Code' => $product->code,
            'Description' => $product->description,
            'isBestSeller' => $product->isBestSeller ? true : false,
            'Image' => $product->image,
            'Price' => $product->price,
            'Stock' => $product->stock,
            'Rating' => $product->rating,
            'Seller' => $product->seller->name,
            'SellerContact' => $product->seller->phone_number,
        ];

        return response()->json($result);
    }

    public function productCategory(Category $category)
    {
        $products = $category->products;
        $results = [];
        foreach($products as $product) {
            $results[] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'code' => $product->code,
                'description' => $product->description,
                'rating' => $product->rating,
                'seller' => $product->seller->name,
                'category' => $product->category->name,
                'stock' => $product->stock,
                // 'created_at' => Carbon::parse($product->created_at)->format('Y-m-d'),
                // 'updated_at' => Carbon::parse($product->updated_at)->format('Y-m-d'),
                'isBestSeller' => $product->isBestSeller,
            ];
        }
        return response()->json($results);
    }

    public function getFile()
    {
        $file = Storage::disk('s3')->get('lobster-2.png');
        dd(123, $file);
        return response()->json($file);
    }
}
