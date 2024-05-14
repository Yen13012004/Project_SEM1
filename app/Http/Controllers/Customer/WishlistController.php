<?php

namespace App\Http\Controllers\customer;

use App\Helpers\Wishlist;
use App\Http\Controllers\Controller;
use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Wishlist $wishlist){
        $wishlists = $wishlist->getWishlist();
        return view('customer.wishlist.index', compact('wishlists'));
    }

    public function add_to_wishlist($id)
    {
        $product = ModelsProduct::find($id);
        $wishlist = new Wishlist();
        $wishlist->add($product);
        return redirect()->route('shop.show_Wishlist');
    }

    public function delete(Wishlist $wishlist, $id)
    {
        $product = ModelsProduct::find($id);
        $wishlist->delete($product);
        return redirect()->back();
    }

    public function clear(Wishlist $wishlist)
    {
        $wishlist->clear();
        return redirect()->route('shop.show_Wishlist');
    }
}
