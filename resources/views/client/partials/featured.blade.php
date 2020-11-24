<!-- Shop products -->
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
                                <span class="product-wishlist">
{{--										<a href="#"><i class="fa fa-heart"></i></a>--}}
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
                                    <ins>{{ $product->price }}</ins>
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
