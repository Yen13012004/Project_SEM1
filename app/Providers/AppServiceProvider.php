<?php

namespace App\Providers;

use App\Helpers\Cart;
use App\Helpers\Wishlist;
use App\Models\ProductCategory as ModelsProductCategory;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();

        view()->composer(['layouts.customer', 'customer.product.shop','customer.checkout.index'], function ($view) {
            $cats = ModelsProductCategory::get();
            $wishlists = new Wishlist();
            $carts = new Cart();
            $cartss = $carts->getCart();
            $view->with(compact('cats', 'cartss', 'carts', 'wishlists'));
        });
    }
}
