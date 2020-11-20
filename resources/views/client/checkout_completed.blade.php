@extends('client.master')

@section('content')
    <!-- Page title -->
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Order Completed</h1>
                <span>Congratulations! Your order is completed!</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Shop</a>
                    </li>
                    <li class="active"><a href="#">Order Completed</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- SHOP CHECKOUT COMPLETED -->
    <section id="shop-checkout-completed">
        <div class="container">
            <div class="p-t-10 m-b-20 text-center">
                <div class="text-center">
                    <h3>Congratulations! Your order is completed!</h3>
                    <p>Your order is number #123456. You can
                        <a href="" class="text-underline">
                            <mark>view your order</mark>
                        </a> on your account page, when you are logged in.</p>
                </div>
                <a href="#" class="btn icon-left m-r-10"><span>Go to login page</span></a><a class="btn icon-left" href="#"><span>Return To Shop</span></a>
            </div>
        </div>
    </section>
    <!-- end: SHOP CHECKOUT COMPLETED -->
@endsection
