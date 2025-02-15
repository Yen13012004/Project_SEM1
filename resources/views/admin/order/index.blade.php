@extends('layouts.admin')

@section('title', 'Order')

@section('main')
    <!-- Main -->
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        Order
                        <div class="page-title-subheading">
                            View, create, update, delete and manage.
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">

                    <div class="card-header">

                        <form>
                            <div class="input-group">
                                <input type="search" name="keyword" id="search" placeholder="Search everything"
                                    class="form-control">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-search"></i>&nbsp;
                                        Search
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th>Customer / Products</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orders as $item)
                                    <tr>
                                        <td class="text-center text-muted">#{{ $item->id }}</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img style="height: 60px;" data-toggle="tooltip" title="Image"
                                                                data-placement="bottom"
                                                                src="/uploads/product/{{ $item->image }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">
                                                            {{ $item->full_name }}</div>
                                                        <div class="widget-subheading opacity-7">
                                                            {{-- {{ $item->orderDetails[0]->product->name }} --}}
                                                            name
                                                            {{-- @if (count($orders->orderDetails) > 1)
                                                                (and {{ count($orders->orderDetails) }} other products)
                                                            @endif --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            {{ $item->street_address . ' - ' . $item->town_city }}
                                        </td>
                                        <td class="text-center">
                                            {{-- ${{ array_sum(array_column($item->orderDetails->toArray(), 'total')) }} --}}
                                        </td>
                                        <td class="text-center">
                                            <div class="badge badge-dark">
                                                {{-- {{ \App\Utilities\Constant::$order_status($item->status) }} --}}
                                                Finish
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.order.show', $item->id) }}"
                                                class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                Details
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <div class="container">
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
@endsection
