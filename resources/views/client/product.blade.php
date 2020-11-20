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
                            <div class="carousel dots-inside dots-dark arrows-visible" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="2500" data-lightbox="gallery">
                                <a href="images/shop/products/product-large.jpg" data-lightbox="image" title="Shop product image!"><img alt="Shop product image!" src="images/shop/products/1.jpg">
                                </a>
                                <a href="images/shop/products/product-large.jpg" data-lightbox="image" title="Shop product image!"><img alt="Shop product image!" src="images/shop/products/2.jpg">
                                </a>
                            </div>
                            <!-- Carousel slider -->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-description">
                            <div class="product-category">Women</div>
                            <div class="product-title">
                                <h3><a href="#">Consume Tshirt</a></h3>
                            </div>
                            <div class="product-price"><ins>$39.00</ins>
                            </div>
                            <div class="product-rate">
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star-half-o"></i>--}}
                            </div>
                            <div class="product-reviews">
{{--                                <a href="#">3 customer reviews</a>--}}
                            </div>
                            <div class="seperator m-b-10"></div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                                going through the cites of the word in</p>
                            <div class="product-meta">
                                <p>Tags: <a href="#" rel="tag">Clothing</a>, <a rel="tag" href="#">T-shirts</a>
                                </p>
                            </div>
                            <div class="seperator m-t-20 m-b-10"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h6>Add to Cart</h6>
                                <a class="btn" href="#"><i class="icon-shopping-cart"></i> Add to cart</a>
                                <a class="btn btn-dark" href="#"><i class="icon-shopping-bag"></i> Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product additional tabs -->
                <div class="tabs tabs-folder">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="false"><i class="fa fa-align-justify"></i>Description</a></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="true"><i class="fa fa-info"></i>Additional
                                Info</a></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent3">
                        <div class="tab-pane fade active show" id="home3" role="tabpanel" aria-labelledby="home-tab">
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis
                                dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                                recusandae. </p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                expedita distinctio.</p>
                        </div>
                        <div class="tab-pane fade " id="profile3" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                <tr>
                                    <td>Size</td>
                                    <td>Small, Medium &amp; Large</td>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>Pink &amp; White</td>
                                </tr>
                                <tr>
                                    <td>Waist</td>
                                    <td>26 cm</td>
                                </tr>
                                <tr>
                                    <td>Length</td>
                                    <td>40 cm</td>
                                </tr>
                                <tr>
                                    <td>Chest</td>
                                    <td>33 inches</td>
                                </tr>
                                <tr>
                                    <td>Fabric</td>
                                    <td>Cotton, Silk &amp; Synthetic</td>
                                </tr>
                                <tr>
                                    <td>Warranty</td>
                                    <td>3 Months</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end: Product additional tabs -->
            </div>
        </div>
    </section>
    <!-- end: SHOP PRODUCT PAGE -->
@endsection
