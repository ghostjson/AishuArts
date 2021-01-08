@extends('client.master')

@section('content')


    <!-- SHOP PRODUCT PAGE -->
    <section id="product-page" class="product-page p-b-0">
        <div class="container">
            <div class="product">
                <div class="row m-b-40">
                    <div class="col-lg-5">
                        <div class="product-image">
                            <!-- Carousel slider -->
                            <div class="carousel dots-inside dots-dark arrows-visible" data-items="1" data-loop="true"
                                 data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut"
                                 data-autoplay="2500" data-lightbox="gallery">
                                @foreach($product->images as $image)
                                    <a href="{{ $image }}" data-lightbox="image" title="{{ $product->name }}"><img
                                            alt="{{ $product->name }}" src="{{ $image }}">
                                    </a>
                                @endforeach
                            </div>
                            <!-- Carousel slider -->
                        </div>
                    </div>
                    @if($product->is_active)
                        <div class=" mt-4 d-md-block d-lg-none d-xl-none">
                            <div class="col-lg-12">
                                <a class="btn" href="{{ route('client.add_to_cart', $product->id) }}"><i
                                        class="icon-shopping-cart"></i> Add to cart</a>
                                <a class="btn btn-dark" href="{{ route('client.product.buy', $product->id) }}"><i
                                        class="icon-shopping-bag"></i> Buy Now</a>
                                @if($can_user_review)
                                    <a class="btn btn-secondary"
                                       href="{{ route('client.review', $product->id) }}"><i
                                            class="fas fa-edit"></i> Write a review</a>
                                @endif
                            </div>
                        </div>
                    @endif
                    <div class="col-lg-7">
                        <div class="product-description">
                            <div class="product-category">{{ $product->category }}</div>
                            <div class="product-title">
                                <h3><a href="#">{{ $product->name }}</a>

                                </h3>
                                @if(!$product->is_active)
                                    <span class="text-danger">(Currently not available)<span>
                                @endif
                            </div>
                            <div class="product-price">
                                <ins>{{ $product->priceWithCurrency() }}</ins>
                            </div>
                            <div class="product-rate">
                                @include('client.partials.product_rating')
                            </div>
                            <div class="product-reviews">
                                <a href="#">({{ $product->reviews->count() }}) customer reviews</a>
                            </div>
                            <div class="seperator m-b-10"></div>
                            <p>{{ $product->short_description }}</p>
                            {{--                            <div class="product-meta">--}}
                            {{--                                <p>Tags: <a href="#" rel="tag">{{ $product->tags }}</a>--}}
                            {{--                                </p>--}}
                            {{--                            </div>--}}
                            <div class="seperator m-t-20 m-b-10"></div>
                        </div>
                        @if($product->is_active)
                            <div class="row d-none d-lg-block d-xl-block">
                                <div class="col-lg-12">
                                    <a class="btn" href="{{ route('client.add_to_cart', $product->id) }}"><i
                                            class="icon-shopping-cart"></i> Add to cart</a>
                                    <a class="btn btn-dark" href="{{ route('client.product.buy', $product->id) }}"><i
                                            class="icon-shopping-bag"></i> Buy Now</a>
                                    @if($can_user_review)
                                        <a class="btn btn-secondary"
                                           href="{{ route('client.review', $product->id) }}"><i
                                                class="fas fa-edit"></i> Write a review</a>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Product additional tabs -->
                <div class="tabs tabs-folder">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home3" role="tab"
                               aria-controls="home" aria-selected="false"><i class="fa fa-align-justify"></i>Description</a></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile3" role="tab"
                               aria-controls="profile" aria-selected="true"><i class="fa fa-info"></i>Additional
                                Info</a></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact3" role="tab"
                               aria-controls="contact" aria-selected="false"><i class="fa fa-star"></i>Reviews
                                ({{ $product->reviews->count() }})</a></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent3">
                        <div class="tab-pane fade active show" id="home3" role="tabpanel" aria-labelledby="home-tab">
                            {{ $product->long_description }}
                        </div>
                        <div class="tab-pane fade " id="profile3" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                <tr>
                                    <td>Size</td>
                                    <td>A4</td>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>Blank &amp; White</td>
                                </tr>
                                <tr>
                                    <td>Dimension</td>
                                    <td>160:100cm</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="comments" id="comments">
                                <div class="comment_number">
                                    Reviews <span>({{ $product->reviews->count() }})</span>
                                </div>
                                <div class="comment-list">
                                    <!-- Comment -->
                                    @foreach($product->getLatestReviews() as $review)
                                        <div class="comment" id="comment-1">
                                            <div class="image" style="height: 40px;width: 40px;"><img alt=""
                                                                                                      style="height: inherit; width: inherit"
                                                                                                      src="https://ui-avatars.com/api/?name={{ $review->user->name }}"
                                                                                                      class="avatar">
                                            </div>
                                            <div class="text">
                                                <div class="product-rate">
                                                    @for($i=0;$i<floor($review->rating);$i++)
                                                        <i class="fas fa-star"></i>
                                                    @endfor
                                                    @for($j=0;$j<5-floor($review->rating);$j++)
                                                        @if($j == 0)
                                                            @if($review->haveHalfStar())
                                                                <i class="fas fa-star-half-alt"></i>
                                                            @else
                                                                <i class="far fa-star"></i>
                                                            @endif
                                                        @else
                                                            <i class="far fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <h5 class="name">{{ $review->user->name }}</h5>
                                                <span class="comment_date">Posted at {{ $review->created_at }}</span>
                                                <div class="text_holder">
                                                    <p>{{ $review->review }}</p>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                <!-- end: Comment -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Product additional tabs -->
            </div>
        </div>
    </section>
    <!-- end: SHOP PRODUCT PAGE -->
@endsection
