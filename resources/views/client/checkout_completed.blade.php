@extends('client.master')

@section('content')
    <!-- SHOP CHECKOUT COMPLETED -->
    <section id="shop-checkout-completed" style="height: 80vh; display: flex; align-items: center">
        <div class="container">
            <div class="p-t-10 m-b-20 text-center">
                <div class="text-center">
                    <h3>Congratulations! Your order is completed!</h3>
                    <p>Your order is number #{{ $order->id }}. You can
                        <a href="" class="text-underline">
                            <mark>view your order</mark>
                        </a> when you are logged in.</p>
                </div>
                <a href="{{ route('client.orders.current') }}" class="btn icon-left m-r-10"><span>Go to Order Page</span></a><a class="btn icon-left" href="{{ route('client.shop') }}"><span>Return To Shop</span></a>
            </div>
        </div>
    </section>
    <!-- end: SHOP CHECKOUT COMPLETED -->
@endsection
