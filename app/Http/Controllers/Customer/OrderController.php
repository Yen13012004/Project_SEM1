<?php

namespace App\Http\Controllers\customer;

use App\Helpers\Cart;
use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function checkout(Cart $cart)
    {
        $customer = Auth::user();
        return view('customer.checkout.index', compact('cart', 'customer'));
    }

    public function post_checkout(Request $request, Cart $cart)
    {
        $data = [
            // 'user_id' => Auth::user()->id,
            'full_name' => $request->name,
            'street_address' => $request->address,
            'town_city' => $request->city,
            'postcode_zip' => $request->postcode_zip,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ];

        if ($order = Order::create($data)) {
            foreach ($cart->getCart() as $item) {
                $detail = [
                    'user_id' => Auth::user()->id,
                    // 'order_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                ];
                OrderDetail::create($detail);
            }

            $email = $request->email;
            $name = $request->name;
            // Mail::to($email)->send(new OrderShipped($email, $name));
            $cart->clear();

            return redirect()->route('order.success');
        }
        return redirect()->back()->with('message', 'Please Try Again');
    }
    public function history()
    {
        $customer = Auth::user();
        return view('customers.cart.order_history', compact('customer'));
    }

    public function detail(Order $order)
    {
        $customer = Auth::user();
        return view('customers.cart.order_detail', compact('order', 'customer'));
    }

    public function order_success()
    {
        return view('customer.checkout.order_success');
    }
}
