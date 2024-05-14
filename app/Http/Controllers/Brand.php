<?php

namespace App\Http\Controllers;

use App\Http\Requests\Brand\BrandStoreRequest;
use App\Http\Requests\Brand\BrandUpdateRequest;
use App\Models\Brand as ModelsBrand;

class Brand extends Controller
{
    public function index()
    {
        $brands = ModelsBrand::search()->orderBy('id', 'desc')->paginate(5)->withQueryString();
        return view('admin.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }


    public function store(BrandStoreRequest $request)
    {
        $form_data = $request->all('name');

        try {
            ModelsBrand::create($form_data);
            return redirect()->route('admin.brand.index')->with('success', 'Insert Data Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.brand.index')->with('success', 'Insert Data Unsuccessfully');
        }
    }


    public function show($id)
    {
        $brand = ModelsBrand::find($id);
        return $brand;
    }


    public function edit($id)
    {
        $brand = ModelsBrand::find($id);
        return view('admin.brand.edit', compact('brand'));
    }


    public function update(BrandUpdateRequest $request, ModelsBrand $brand)
    {
        $form_data = $request->all('name');

        try {
            $brand->update($form_data);
            return redirect()->route('admin.brand.index')->with('success', "Update Data Successfully");
        } catch (\Throwable $th) {
            return redirect()->route('admin.brand.index')->with('success', "Update Data Unsuccessfully");
        }
    }

    public function destroy(ModelsBrand $brand)
    {
        if ($brand->products->count() > 0) {
            return redirect()->route('admin.brand.index')->with('success', 'Deletion failed, category has products');
        } else {
            try {
                $brand->delete();
                return redirect()->route('admin.brand.restore')->with('success', 'Delete Successfully');
            } catch (\Throwable $th) {
                return redirect()->route('admin.brand.index')->with('success', 'Deletion failed');
            }
        }
    }

    public function recycle_bin()
    {
        $brands = ModelsBrand::onlyTrashed()->paginate(10);
        return view('admin.brand.trash', compact('brands'));
    }

    public function restored($id)
    {
        ModelsBrand::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.brand.index')->with('success', 'Restore Sucessfully');
    }

    public function force_delete($id)
    {
        ModelsBrand::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('admin.brand.index')->with('success', 'Delete Sucessfully');
    }
}
