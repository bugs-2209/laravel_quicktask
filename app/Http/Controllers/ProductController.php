<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::with('categories')->get();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $prod = new Product();
        if ($request->status == "on") {
            $status = Product::PRODUCT_ONL;
        }else{
            $status = Product::PRODUCT_OFF;
        }
        $data = [
            $prod->name = $request->name,
            $prod->slug = Str::slug($request->name),
            $prod->description = $request->description,
            $prod->qty = $request->qty,
            $prod->status = $status,
        ];
        $prod->save($data);
        $prod->categories()->attach($request->category_id);
        return redirect()->route('product.index')->with('success', 'Create Product Success');
    }
}
