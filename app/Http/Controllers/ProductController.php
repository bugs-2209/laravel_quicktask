<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
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

    public function store(StoreProductRequest $request)
    {
        $prod = new Product();
        if ($request->status == config('common.rq_status.on')) {
            $status = config('common.status.active');
        }else{
            $status = config('common.status.deactive');
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

        return redirect()->route('product.index')->with('success', trans('quicktask.notification.product.create'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $arrIdCate = $product->categories()->get()->pluck('id')->toArray();
        $categories = Category::all();
        
        return view('product.edit', compact('product', 'categories', 'arrIdCate'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        
        if ($request->status == config('common.rq_status.on')) {
            $status = config('common.status.active');
        }else{
            $status = config('common.status.deactive');
        }
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'qty' => $request->qty,
            'status' => $status,
        ];
        $prod = Product::find($id);
        $prod->update($data);
        $prod->categories()->sync($request->category_id);

        return redirect()->route('product.index')->with('success', trans('quicktask.notification.product.update'));
    }

    public function delete($id)
    {
        Product::where('id', $id)->delete();
        
        return redirect()->route('product.index')->with('success', trans('quicktask.notification.product.delete'));
    }
}
