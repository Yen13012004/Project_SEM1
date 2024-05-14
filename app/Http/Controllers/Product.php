<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductCreateRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Product as ModelsProduct;
use App\Models\Brand;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Product extends Controller
{
    public function index()
    {
        $products = ModelsProduct::search()->orderBy('id', 'desc')->paginate(5)->withQueryString();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = ProductCategory::all();
        return view('admin.product.create', compact('brands', 'categories'));
    }


    public function store(ProductCreateRequest $request)
    {
        $request->validated();
        $file_name = time() . $request->image->getClientOriginalName();
        $request->image->move(public_path('uploads/product'), $file_name);

        ModelsProduct::create([
            'image' => $file_name,
            'product_category_id' => $request->product_category_id,
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'content' => $request->content,
            'price' => $request->price,
            'qty' => 0,
            'discount' => $request->discount,
            'featured' => $request->featured,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Insert Data Successfully');
    }


    public function show($id)
    {
        $product = ModelsProduct::find($id);
        return view('admin.product.detail', compact('product'));
    }


    public function edit($id)
    {
        $brands = Brand::all();
        $categories = ProductCategory::all();
        $product = ModelsProduct::find($id);
        return view('admin.product.edit', compact('brands', 'categories', 'product'));
    }


    public function update(ProductUpdateRequest $request, $id)
    {
        $prod = ModelsProduct::find($id);
        $request->validated();

        if ($request->has('image')) {
            $file_name = time() . $request->image->getClientOriginalName();
            unlink('uploads/product/' . $prod->image);
            $request->image->move(public_path('uploads/product'), $file_name);
        } else {
            $file_name = $prod->image;
        }

        ModelsProduct::find($id)->update([
            'image' => $file_name,
            'product_category_id' => $request->product_category_id,
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'content' => $request->content,
            'price' => $request->price,
            'qty' => 0,
            'discount' => $request->discount,
            'featured' => $request->featured,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Insert Data Successfully');
    }

    public function destroy($id)
    {
        ModelsProduct::find($id)->delete();
        return redirect()->route('admin.product.index')->with('success', 'Delete Data Successfully');
    }

    public function recycle_bin()
    {
        $products = ModelsProduct::onlyTrashed()->paginate(10);
        return view('admin.product.trash', compact('products'));
    }
    public function restored($id)
    {
        ModelsProduct::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.product.index')->with('success', 'Restore Sucessfully');
    }

    public function force_delete($id)
    {
        ModelsProduct::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('admin.product.index')->with('success', 'Delete Sucessfully');
    }
}
