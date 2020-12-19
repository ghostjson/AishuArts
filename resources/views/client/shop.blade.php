@extends('client.master')

@section('content')
    <!-- Shop products -->
    <section>
        <div class="container">
            <div class="row m-b-20">
                <div class="col-lg-6 p-t-10 m-b-20">
                    <h3 class="m-b-20">A Monochromatic Spring ’15</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, sit, exercitationem,
                        consequuntur, assumenda iusto eos commodi alias.</p>
                </div>
                <div class="col-lg-3">
                    <div class="order-select">
                        <h6>Sort by</h6>
                        <p>Showing 1&ndash;12 of 25 results</p>
                        <form method="get">
                            <select class="form-control">
                                <option value="order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="order-select">
                        <h6>Sort by Price</h6>
                        <p>From 0 - 190$</p>
                        <form method="get">
                            <select class="form-control">
                                <option value="" selected="selected">0$ - 50$</option>
                                <option value="">51$ - 90$</option>
                                <option value="">91$ - 120$</option>
                                <option value="">121$ - 200$</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <!--Product list-->
            <div class="shop">
                <div class="grid-layout grid-4-columns" data-item="grid-item">
                    @foreach($products as $product)
                        <div class="grid-item">
                            <div class="product" onclick="productPage({{$product->id}})">
                                <div class="product-image">
                                    <a><img alt="Shop product image!" src="{{ $product->image }}">
                                    </a>
                                    <a><img alt="Shop product image!" src="{{ $product->image }}">
                                    </a>
                                    <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                                    <div class="product-overlay">
                                        <a>Quick View</a>
                                    </div>
                                </div>
                                <div class="product-description">
                                    <div class="product-category">{{ $product->category }}</div>
                                    <div class="product-title">
                                        <h3><a href="#">{{ $product->name }}</a></h3>
                                    </div>
                                    <div class="product-price">
                                        <ins>{{ $product->price }}</ins>
                                    </div>
                                    <div class="product-rate">
                                        @include('client.partials.product_rating')
                                    </div>
                                    <div class="product-reviews"><a href="#">{{ $product->reviews->count() }} customer reviews</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr>
                <!-- Pagination -->
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- end: Pagination -->
            </div>
        </div>
    </section>
    <!-- end: Shop products -->
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

@section('scripts')
    <script>
        function productPage(id){
            location.replace(
                '{{ \Illuminate\Support\Facades\URL::to('/product') }}/' + id)
        }
    </script>
@endsection
