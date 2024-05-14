<?php

namespace App\Http\Controllers;

use App\Models\Blog as ModelsBlog;
use Illuminate\Http\Request;
use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\Auth;

class Blog extends Controller
{
    public function index()
    {
        $blogs = ModelsBlog::search()->orderBy('id', 'desc')->paginate(5)->withQueryString();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }


    public function store(Request $request)
    {
        $user_id =  Auth::check() ? Auth::user()->id : '0';
        $file_name = time() . $request->image->getClientOriginalName();
        $request->image->move(public_path('uploads/blogs'), $file_name);

        ModelsBlog::create([
            'user_id' => $user_id,
            'image' => $file_name,
            'title' => $request->title,
            'subtitle' => $request->sub_title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Insert Data Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $blog = ModelsBlog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $user_id =  Auth::check() ? Auth::user()->id : '0';
        $blog = ModelsBlog::find($id);
        $file_name = $blog->image;

        if ($request->has('image')) {
            $file_name = time() . $request->image->getClientOriginalName();
            unlink('uploads/blog/' . $blog->image);
            $request->image->move(public_path('uploads/blog'), $file_name);
        } else {
            $file_name = $blog->image;
        }

        ModelsBlog::find($id)->update([
            'user_id' => $user_id,
            'image' => $file_name,
            'title' => $request->title,
            'subtitle' => $request->sub_title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Insert Data Successfully');
    }

    public function destroy($id)
    {
        ModelsBlog::find($id)->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Delete Data Successfully');
    }
}
