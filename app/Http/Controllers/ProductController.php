<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        return view('products.index',compact('products'));
    }

    public function create()
    {
         return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->save();
        return redirect()->route('products.index')->with('message','Product Added Successfully');

    }

    public function search(Request $request)
    {
        $query = trim($request->get('query'));
        
        if($query  != ''){ 
            $queryWords = explode(' ', $query);

            $products = Product::query();
            foreach ($queryWords as $word) {
                $products->where('product_name', 'LIKE', '%' . $word . '%');
            }
            $products = $products->get();
        }else{
            $products = Product::latest()->get();
        }
        return response()->json([
            'products' => $products
        ]);
        
    }
}
