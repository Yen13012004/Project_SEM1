@extends('layouts.customer')

@section('title', 'Checkout')

@section('main')
<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Orders</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index-2.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Orders</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="kaycee">
                        <nav class="kaycee-MyAccount-navigation">
                            <ul>
                                <li class="kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--dashboard">
                                    <a href="dashboard.html">Dashboard</a>
                                </li>
                                <li class="kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--orders is-active">
                                    <a href="orders.html">Orders</a>
                                </li>
                                <li class="kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--downloads">
                                    <a href="downloads.html">Downloads</a>
                                </li>
                                <li class="kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--edit-address">
                                    <a href="edit-address.html">Addresses</a>
                                </li>
                                <li class="kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--edit-account">
                                    <a href="edit-account.html">Account details</a>
                                </li>
                                <li class="kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--customer-logout">
                                    <a href="#">Logout</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="kaycee-MyAccount-content">
                            <div class="kaycee-notices-wrapper"></div>
                            <table class="kaycee-orders-table kaycee-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
                                <thead>
                                <tr>
                                    <th class="kaycee-orders-table__header kaycee-orders-table__header-order-number"><span class="nobr">Order</span></th>
                                    <th class="kaycee-orders-table__header kaycee-orders-table__header-order-date"><span class="nobr">Date</span></th>
                                    <th class="kaycee-orders-table__header kaycee-orders-table__header-order-status"><span class="nobr">Status</span></th>
                                    <th class="kaycee-orders-table__header kaycee-orders-table__header-order-total"><span class="nobr">Total</span></th>
                                    <th class="kaycee-orders-table__header kaycee-orders-table__header-order-actions"><span class="nobr">Actions</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="kaycee-orders-table__row kaycee-orders-table__row--status-on-hold order">
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-number" data-title="Order">
                                        <a href="#">#764</a>
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-date" data-title="Date">
                                        <time datetime="2020-01-21T16:35:44+00:00">January 21, 2020</time>
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-status" data-title="Status">
                                        On hold
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-total" data-title="Total">
                                        <span class="kaycee-Price-amount amount"><span class="kaycee-Price-currencySymbol">£</span>159.00</span> for 2 items
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-actions" data-title="Actions">
                                        <a href="#" class="kaycee-button button view">View</a>
                                    </td>
                                </tr>
                                <tr class="kaycee-orders-table__row kaycee-orders-table__row--status-on-hold order">
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-number" data-title="Order">
                                        <a href="#">#763</a>
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-date" data-title="Date">
                                        <time datetime="2020-01-21T14:57:29+00:00">January 21, 2020</time>

                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-status" data-title="Status">
                                        On hold
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-total" data-title="Total">
                                        <span class="kaycee-Price-amount amount"><span class="kaycee-Price-currencySymbol">£</span>1,862.00</span> for 18 items
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-actions" data-title="Actions">
                                        <a href="#" class="kaycee-button button view">View</a>
                                    </td>
                                </tr>
                                <tr class="kaycee-orders-table__row kaycee-orders-table__row--status-on-hold order">
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-number" data-title="Order">
                                        <a href="#">#431</a>
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-date" data-title="Date">
                                        <time datetime="2020-01-01T14:27:46+00:00">January 1, 2020</time>
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-status" data-title="Status">
                                        On hold
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-total" data-title="Total">
                                        <span class="kaycee-Price-amount amount"><span class="kaycee-Price-currencySymbol">£</span>6,643.00</span> for 57 items
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-actions" data-title="Actions">
                                        <a href="#" class="kaycee-button button view">View</a>
                                    </td>
                                </tr>
                                <tr class="kaycee-orders-table__row kaycee-orders-table__row--status-on-hold order">
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-number" data-title="Order">
                                        <a href="#">#430</a>
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-date" data-title="Date">
                                        <time datetime="2020-01-01T14:15:57+00:00">January 1, 2020</time>
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-status" data-title="Status">
                                        On hold
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-total" data-title="Total">
                                        <span class="kaycee-Price-amount amount"><span class="kaycee-Price-currencySymbol">£</span>256.00</span> for 4 items
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-actions" data-title="Actions">
                                        <a href="#" class="kaycee-button button view">View</a>
                                    </td>
                                </tr>
                                <tr class="kaycee-orders-table__row kaycee-orders-table__row--status-on-hold order">
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-number" data-title="Order">
                                        <a href="#">#281</a>

                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-date" data-title="Date">
                                        <time datetime="2018-12-25T13:46:40+00:00">December 25, 2018</time>
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-status" data-title="Status">
                                        On hold
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-total" data-title="Total">
                                        <span class="kaycee-Price-amount amount"><span class="kaycee-Price-currencySymbol">£</span>56.00</span> for 1 item
                                    </td>
                                    <td class="kaycee-orders-table__cell kaycee-orders-table__cell-order-actions" data-title="Actions">
                                        <a href="#" class="kaycee-button button view">View</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
