@extends('client.master')

@section('content')

    <div class="container " style="min-height: 80vh;">
        <div class="row">
            <div class="col">
                <div class="card mt-4" style="min-height: 50vh">
                    <div class="card-header">
                        Orders
                    </div>
                    <div class="card-body">

                        <ul class="nav nav-tabs mb-4">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Current Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('client.orders.history') }}">Order History</a>
                            </li>
                        </ul>

                        <div class="body">

                            @include('client.partials.order_tracking_card')

{{--                            <p>Oh no!, You've no orders, <a href="{{ route('client.shop') }}">shop</a> now!</p>--}}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
