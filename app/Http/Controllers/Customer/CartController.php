<?php

namespace App\Http\Controllers\customer;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\AddToCartRequest;
use App\Http\Requests\Product\UpdateCartRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Cart $cart){
        $carts_view = $cart->getCart();
        $totalPrice = $cart->getTotalPrice();
        return view('customer.cart.index', compact('carts_view', 'totalPrice'));
    }
    public function add_to_cart(AddToCartRequest $request, $id)
    {
        $product = Product::find($id);
        $cart = new Cart();
        $cart->add($product, $request->quantity);
        return redirect()->route('shop.show_cart');
    }

    public function update_cart(UpdateCartRequest $req, Cart $cart, $id)
    {
        $product = Product::find($id);
        $cart->update($req->quantity, $product);
        return redirect()->back();
    }

    public function delete(Cart $cart, $id)
    {
        $product = Product::find($id);
        $cart->delete($product);
        return redirect()->back();
    }

    public function clear(Cart $cart)
    {
        $cart->clear();
        return redirect()->route('shop.show_cart');
    }
}
