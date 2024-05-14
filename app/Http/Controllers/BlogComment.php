<?php

namespace App\Http\Controllers;

use App\Models\BlogComment as ModelsBlogComment;
use Illuminate\Http\Request;

class BlogComment extends Controller
{
    public function index()
    {
        $blog_comments = ModelsBlogComment::search()->orderBy('id', 'desc')->paginate(5)->withQueryString();
        return view('admin.blog_comment.index', compact('blog_comments'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        ModelsBlogComment::find($id)->delete();
        return redirect()->route('admin.blog_comment.index')->with('success', 'Delete Data Successfully');
    }
}
