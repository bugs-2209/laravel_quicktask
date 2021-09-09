<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $cate = new Category();
        $rq = $request->status;
        if ($rq == config('common.rq_status.on')) {
            $status = config('common.status.active');
        }else {
            $status = config('common.status.deactive');
        }
        $data = [
            $cate->name = $request->name,
            $cate->slug = Str::slug($request->name),
            $cate->status = $status,
        ];
        $cate->save($data);
        return redirect()->route('category.index')->with('notification', trans('quicktask.notification.category.create'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        $rq = $request->status;
        if ($rq == config('common.rq_status.on')) {
            $status = config('common.status.active');
        }else {
            $status = config('common.status.deactive');
        }
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $status,
        ];
        Category::where('id', $id)->update($data);
        return redirect()->route('category.index')->with('notification', trans('quicktask.notification.category.update'));
    }

    public function delete($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('category.index')->with('notification', trans('quicktask.notification.category.delete'));
    }
}
