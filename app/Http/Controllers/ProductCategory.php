<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryStoreRequest;
use Illuminate\Http\Request;
use App\Models\ProductCategory as Category;

class ProductCategory extends Controller
{
    public function index()
    {
        $categories = Category::search()->orderBy('id', 'desc')->paginate(5)->withQueryString();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(CategoryStoreRequest $request)
    {
        $form_data = $request->all('name');

        try {
            Category::create($form_data);
            return redirect()->route('admin.category.index')->with('success', 'Insert Data Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.category.index')->with('success', 'Insert Data Unsuccessfully');
        }
    }


    public function show($id)
    {
        $category = Category::find($id);
        return $category;
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $form_data = $request->all('name');

        try {
            $category->update($form_data);
            return redirect()->route('admin.category.index')->with('success', "Update Data Successfully");
        } catch (\Throwable $th) {
            return redirect()->route('admin.category.index')->with('success', "Update Data Unsuccessfully");
        }
    }

    public function destroy(Category $category)
    {
        if ($category->products->count() > 0) {
            return redirect()->route('admin.category.index')->with('success', 'Deletion failed, category has products');
        } else {
            try {
                $category->delete();
                return redirect()->route('admin.category.recycle_bin')->with('success', 'Delete Successfully');
            } catch (\Throwable $th) {
                return redirect()->route('admin.category.index')->with('success', 'Deletion failed');
            }
        }
    }
    public function recycle_bin()
    {
        $categories = Category::onlyTrashed()->paginate(10);
        return view('admin.category.trash', compact('categories'));
    }

    public function restored($id)
    {
        Category::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.category.index')->with('success', 'Restore Sucessfully');
    }
    public function force_delete($id)
    {
        Category::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('admin.category.index')->with('success', 'Delete Sucessfully');
    }
}
