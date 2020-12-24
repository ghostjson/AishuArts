<!-- Shop products -->
<style>
    .product-cart{
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
    .product-cart a{
        color: var(--primary) !important;
    }
</style>

<section>
    <div class="container">

        <div class="heading m-b-40">
            <h4>Featured products</h4>
        </div>

        <!--Product list-->
        <div class="shop">
            <div class="row">
                @foreach($featured as $product)
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{ $product->image }}">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="{{ $product->image }}">
                                </a>
                                <span class="product-cart">
                                        <a href="{{ route('client.add_to_cart', $product->id) }}"><i class="fas fa-shopping-cart"></i></a>
                                    </span>
                                <div class="product-overlay">
                                    <a href="{{ route('client.product', $product->id) }}">Quick View</a>
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
                                <div class="product-reviews"><a href="#">{{ $product->reviews->count() }} customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- end: Shop products -->
