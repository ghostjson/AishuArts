@extends('client.master')

@section('content')
    <style>
        .product-cart {
            border: 2px solid var(--primary);
            border-radius: 50%;
            height: 30px;
            left: 12px;
            line-height: 28px;
            position: absolute;
            text-align: center;
            top: 12px;
            width: 30px;
            z-index: 3;
        }

        .product-cart a {
            color: var(--primary) !important;
        }
    </style>

    <section>
        <div class="container">
            <div class="row m-b-20">
                <div class="col-lg-6 p-t-10 m-b-20">
                    <h3 class="m-b-20">Search Results</h3>
                </div>
            </div>
            <!--Product list-->
            @if(!$products->isEmpty())
                <div class="shop">
                    <div class="grid-layout grid-4-columns" data-item="grid-item">
                        @foreach($products as $product)
                            <div class="grid-item">
                                <div class="product" onclick="productPage({{$product->id}})">
                                    <div class="product-image">
                                        <a><img alt="{{ $product->name }}" src="{{ $product->image }}">
                                        </a>
                                        <a><img alt="{{ $product->name }}" src="{{ $product->image }}">
                                        </a>
                                        <span class="product-cart">
                                        <a href="{{ route('client.add_to_cart', $product->id) }}"><i
                                                class="fas fa-shopping-cart"></i></a>
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
                                            <ins>{{ $product->priceWithCurrency() }}</ins>
                                        </div>
                                        <div class="product-rate">
                                            @include('client.partials.product_rating')
                                        </div>
                                        <div class="product-reviews"><a href="#">{{ $product->reviews->count() }}
                                                customer reviews</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <!-- Pagination -->
                {{--                <ul class="pagination">--}}
                {{--                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>--}}
                {{--                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                {{--                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                {{--                    <li class="page-item active"><a class="page-link" href="#">3</a></li>--}}
                {{--                    <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
                {{--                    <li class="page-item"><a class="page-link" href="#">5</a></li>--}}
                {{--                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>--}}
                {{--                </ul>--}}
                <!-- end: Pagination -->
                </div>
            @else
                <div class="shop" style="min-height: 40vh">
                    <p>No matched products, <a href="{{ route('client.shop') }}">return to shop</a></p>
                </div>
            @endif
        </div>
    </section>
@endsection
