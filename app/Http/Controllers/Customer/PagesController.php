<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostComment;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductComment;
use App\Models\ProductComment as ModelsPostComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    // start Home Page
    public function homePage()
    {
        $allProducts = Product::limit(8)->get();
        $blogs = Blog::orderBy('id', 'ASC')->limit(3)->get();
        $trendingProducts = Product::orderBy('discount', 'DESC')->limit(8)->get();
        return view('customer.home.index', compact('trendingProducts', 'blogs', 'allProducts'));
    }

    // end Home Page



    // start contactPage
    public function contactPage()
    {
        return view('customer.contact.index');
    }
    public function postContact(PostComment $request)
    {
        $form_data = $request->all();

        dd($form_data);
        // localStorage.setItem ('contact', $form_data);
        // session(['contact' => $form_data]);
        return redirect()->route('contact');
    }
    // end contactPage


    // start aboutPage
    public function aboutPage()
    {
        return view('customer.about.index');
    }
    public function postAbout(Request $request)
    {
        dd($request->all());
    }
    // end aboutPage



    // start shopPage
    public function shopPage()
    {
        $products = Product::all();
        $brands = Brand::all();
        $categories = ProductCategory::all();
        $allProducts = Product::search()->filter()->paginate(9)->withQueryString();
        return view('customer.product.shop', compact('products', 'allProducts', 'categories', 'brands'));
    }

    public function product($id)
    {
        $products = Product::all();
        $categories = ProductCategory::all();
        $brands = Brand::all();
        $cate = ProductCategory::find($id);
        $brand = Brand::find($id);
        $allProducts = $cate->products()->paginate(9)->withQueryString();
        // $allProducts = $brand->products()->paginate(9)->withQueryString();
        return view('customer.product.shop', compact('allProducts', 'categories','products', 'brands'));
    }
    // end shopPage


    public function blog()
    {
        $blogs = Blog::search()->orderBy('id', 'desc')->paginate(3)->withQueryString();
        return view('customer.blog.index', compact('blogs'));
    }


    // start blogDetail
    public function blogDetail($id)
    {
        // $blog = Blog::find($id);
        // $blogComments = $blog->blogComments;
        // return view('customer.blogDetail.index', compact('blogComments', 'blog'));
        return view('customer.blogDetail.index');
    }

    public function postBlogCmt(PostComment $request, string $blog_id)
    {
        $user_id = Auth::user()->id;
        BlogComment::create([
            'blog_id' => $blog_id,
            'user_id' => $user_id,
            'email' => $request->email,
            'messages' => $request->message
        ]);

        return redirect()->route('blogDetail', $blog_id);
    }
    // end blogDetail



    public function cartPage()
    {
        return view('customer.cart.index');
    }


    // start wishlistPage
    public function wishlistPage()
    {
        return view('customer.wishlist.index');
    }
    // end wishlistPage


    // start product Detail
    public function productDetail($id)
    {
        $product = Product::find($id);
        $RelatedProducts = Product::orderBy('id', 'DESC')->where('product_category_id', $product->id)->limit(4)->get();
        $comments = $product->productComments;
        return view('customer.product.detail', compact('product', 'comments', 'RelatedProducts'));
    }
    public function postComment(PostComment $request, $id)
    {
        $user_id = Auth::user()->id;
        ModelsPostComment::create([
            'product_id' => $id,
            'user_id' => $user_id,
            'email' => $request->email,
            'messages' => $request->comment,
        ]);

        return redirect()->route('shop.detail', $id)->with('success', 'Insert Data Successfully');
    }
    // end product Detail



    public function pageNotFound()
    {
        return view('customer.404.index');
    }
}
