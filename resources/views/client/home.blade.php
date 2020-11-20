@extends('client.master')

@section('content')


    <!-- SECTION HOME  -->
    <section class="fullscreen" style="background: url('images/parallax/13.jpg')">
        <div class="container">
            <div class="text-left">
                <h1 class="text-uppercase">
						<span class="text-md font-weight-800 counter">
							<span data-speed="2000" data-refresh-interval="80" data-to="70" data-from="0"
                                  data-seperator="true"></span>% OFF</span>
                    <br>
                    <span class="m-t-20">Summer collection 2015</span>
                </h1>
                <div class="text-seperator text-seperator-small"></div>
                <p class="lead">New Arrivals from $19,99</p>
                <a href="#" class="btn btn-red">View Collection</a>
            </div>
        </div>
    </section>
    <!-- end: SECTION HOME -->

    @include('client.partials.featured')

    @include('client.partials.sale')

    @include('client.partials.category_browse')

    <!-- DELIVERY INFO -->
    <section class="background-grey p-t-40 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-gift"></i></a>
                        </div>
                        <h3>Free shipping on orders $60+</h3>
                        <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plane"></i></a>
                        </div>
                        <h3>Worldwide delivery</h3>
                        <p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-history"></i></a>
                        </div>
                        <h3>60 days money back guranty!</h3>
                        <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: DELIVERY INFO -->


@endsection
