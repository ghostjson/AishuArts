@extends('client.master')

@section('content')
    <!-- SHOP CHECKOUT -->
    <section id="shop-checkout">
        <form method="post" action="{{ route('client.order.place') }}" class="sep-top-md">

            <div class="container">
                <div class="shop-cart">
                    <div class="row">
                        <div class="col-lg-6 no-padding">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="upper">Billing & Shipping Address</h4>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Country</label>
                                    <select disabled name="billing_country"  value="India">
                                        <option >Åland Islands</option>
                                        <option >Afghanistan</option>
                                        <option >Albania</option>
                                        <option >Algeria</option>
                                        <option >Andorra</option>
                                        <option >Angola</option>
                                        <option >Anguilla</option>
                                        <option >Antarctica</option>
                                        <option >Antigua and Barbuda</option>
                                        <option >Argentina</option>
                                        <option >Armenia</option>
                                        <option >Aruba</option>
                                        <option >Australia</option>
                                        <option>Austria</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                        <option>Belarus</option>
                                        <option>Belau</option>
                                        <option>Belgium</option>
                                        <option>Belize</option>
                                        <option>Benin</option>
                                        <option>Bermuda</option>
                                        <option>Bhutan</option>
                                        <option>Bolivia</option>
                                        <option>Bonaire, Saint Eustatius and Saba</option>
                                        <option>Bosnia and Herzegovina</option>
                                        <option>Botswana</option>
                                        <option>Bouvet Island</option>
                                        <option>Brazil</option>
                                        <option>British Indian Ocean Territory</option>
                                        <option>British Virgin Islands</option>
                                        <option>Brunei</option>
                                        <option>Bulgaria</option>
                                        <option>Burkina Faso</option>
                                        <option>Burundi</option>
                                        <option>Cambodia</option>
                                        <option>Cameroon</option>
                                        <option>Canada</option>
                                        <option>Cape Verde</option>
                                        <option>Cayman Islands</option>
                                        <option>Central African Republic</option>
                                        <option>Chad</option>
                                        <option>Chile</option>
                                        <option>China</option>
                                        <option>Christmas Island</option>
                                        <option>Cocos (Keeling) Islands</option>
                                        <option>Colombia</option>
                                        <option>Comoros</option>
                                        <option>Congo (Brazzaville)</option>
                                        <option>Congo (Kinshasa)</option>
                                        <option>Cook Islands</option>
                                        <option>Costa Rica</option>
                                        <option>Croatia</option>
                                        <option>Cuba</option>
                                        <option>CuraÇao</option>
                                        <option>Cyprus</option>
                                        <option>Czech Republic</option>
                                        <option>Denmark</option>
                                        <option>Djibouti</option>
                                        <option>Dominica</option>
                                        <option>Dominican Republic</option>
                                        <option>Ecuador</option>
                                        <option>Egypt</option>
                                        <option>El Salvador</option>
                                        <option>Equatorial Guinea</option>
                                        <option>Eritrea</option>
                                        <option>Estonia</option>
                                        <option>Ethiopia</option>
                                        <option>Falkland Islands</option>
                                        <option>Faroe Islands</option>
                                        <option>Fiji</option>
                                        <option>Finland</option>
                                        <option>France</option>
                                        <option>French Guiana</option>
                                        <option>French Polynesia</option>
                                        <option>French Southern Territories</option>
                                        <option>Gabon</option>
                                        <option>Gambia</option>
                                        <option>Georgia</option>
                                        <option>Germany</option>
                                        <option>Ghana</option>
                                        <option>Gibraltar</option>
                                        <option>Greece</option>
                                        <option>Greenland</option>
                                        <option>Grenada</option>
                                        <option>Guadeloupe</option>
                                        <option>Guatemala</option>
                                        <option>Guernsey</option>
                                        <option>Guinea</option>
                                        <option>Guinea-Bissau</option>
                                        <option>Guyana</option>
                                        <option>Haiti</option>
                                        <option>Heard Island and McDonald Islands</option>
                                        <option>Honduras</option>
                                        <option>Hong Kong</option>
                                        <option>Hungary</option>
                                        <option>Iceland</option>
                                        <option selected>India</option>
                                        <option>Indonesia</option>
                                        <option>Iran</option>
                                        <option>Iraq</option>
                                        <option>Isle of Man</option>
                                        <option>Israel</option>
                                        <option>Italy</option>
                                        <option>Ivory Coast</option>
                                        <option>Jamaica</option>
                                        <option>Japan</option>
                                        <option>Jersey</option>
                                        <option>Jordan</option>
                                        <option>Kazakhstan</option>
                                        <option>Kenya</option>
                                        <option>Kiribati</option>
                                        <option>Kuwait</option>
                                        <option>Kyrgyzstan</option>
                                        <option>Laos</option>
                                        <option>Latvia</option>
                                        <option>Lebanon</option>
                                        <option>Lesotho</option>
                                        <option>Liberia</option>
                                        <option>Libya</option>
                                        <option>Liechtenstein</option>
                                        <option>Lithuania</option>
                                        <option>Luxembourg</option>
                                        <option>Macao S.A.R., China</option>
                                        <option>Macedonia</option>
                                        <option>Madagascar</option>
                                        <option>Malawi</option>
                                        <option>Malaysia</option>
                                        <option>Maldives</option>
                                        <option>Mali</option>
                                        <option>Malta</option>
                                        <option>Marshall Islands</option>
                                        <option>Martinique</option>
                                        <option>Mauritania</option>
                                        <option>Mauritius</option>
                                        <option>Mayotte</option>
                                        <option>Mexico</option>
                                        <option>Micronesia</option>
                                        <option>Moldova</option>
                                        <option>Monaco</option>
                                        <option>Mongolia</option>
                                        <option>Montenegro</option>
                                        <option>Montserrat</option>
                                        <option>Morocco</option>
                                        <option>Mozambique</option>
                                        <option>Myanmar</option>
                                        <option>Namibia</option>
                                        <option>Nauru</option>
                                        <option>Nepal</option>
                                        <option>Netherlands</option>
                                        <option>Netherlands Antilles</option>
                                        <option>New Caledonia</option>
                                        <option>New Zealand</option>
                                        <option>Nicaragua</option>
                                        <option>Niger</option>
                                        <option>Nigeria</option>
                                        <option>Niue</option>
                                        <option>Norfolk Island</option>
                                        <option>North Korea</option>
                                        <option>Norway</option>
                                        <option>Oman</option>
                                        <option>Pakistan</option>
                                        <option>Palestinian Territory</option>
                                        <option>Panama</option>
                                        <option>Papua New Guinea</option>
                                        <option>Paraguay</option>
                                        <option>Peru</option>
                                        <option>Philippines</option>
                                        <option>Pitcairn</option>
                                        <option>Poland</option>
                                        <option>Portugal</option>
                                        <option>Qatar</option>
                                        <option>Republic of Ireland</option>
                                        <option>Reunion</option>
                                        <option>Romania</option>
                                        <option>Russia</option>
                                        <option>Rwanda</option>
                                        <option>São Tomé and Príncipe</option>
                                        <option>Saint Barthélemy</option>
                                        <option>Saint Helena</option>
                                        <option>Saint Kitts and Nevis</option>
                                        <option>Saint Lucia</option>
                                        <option>Saint Martin (Dutch part)</option>
                                        <option>Saint Martin (French part)</option>
                                        <option>Saint Pierre and Miquelon</option>
                                        <option>Saint Vincent and the Grenadines</option>
                                        <option>San Marino</option>
                                        <option>Saudi Arabia</option>
                                        <option>Senegal</option>
                                        <option>Serbia</option>
                                        <option>Seychelles</option>
                                        <option>Sierra Leone</option>
                                        <option>Singapore</option>
                                        <option>Slovakia</option>
                                        <option>Slovenia</option>
                                        <option>Solomon Islands</option>
                                        <option>Somalia</option>
                                        <option>South Africa</option>
                                        <option>South Georgia/Sandwich Islands</option>
                                        <option>South Korea</option>
                                        <option>South Sudan</option>
                                        <option>Spain</option>
                                        <option>Sri Lanka</option>
                                        <option>Sudan</option>
                                        <option>Suriname</option>
                                        <option>Svalbard and Jan Mayen</option>
                                        <option>Swaziland</option>
                                        <option>Sweden</option>
                                        <option>Switzerland</option>
                                        <option>Syria</option>
                                        <option>Taiwan</option>
                                        <option>Tajikistan</option>
                                        <option>Tanzania</option>
                                        <option>Thailand</option>
                                        <option>Timor-Leste</option>
                                        <option>Togo</option>
                                        <option>Tokelau</option>
                                        <option>Tonga</option>
                                        <option>Trinidad and Tobago</option>
                                        <option>Tunisia</option>
                                        <option>Turkey</option>
                                        <option>Turkmenistan</option>
                                        <option>Turks and Caicos Islands</option>
                                        <option>Tuvalu</option>
                                        <option>Uganda</option>
                                        <option>Ukraine</option>
                                        <option>United Arab Emirates</option>
                                        <option>United Kingdom (UK)</option>
                                        <option>United States (US)</option>
                                        <option>Uruguay</option>
                                        <option>Uzbekistan</option>
                                        <option>Vanuatu</option>
                                        <option>Vatican</option>
                                        <option>Venezuela</option>
                                        <option>Vietnam</option>
                                        <option>Wallis and Futuna</option>
                                        <option>Western Sahara</option>
                                        <option>Western Samoa</option>
                                        <option>Yemen</option>
                                        <option>Zambia</option>
                                        <option>Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Name</label>
                                    <input type="text" name="billing_customer_name" class="form-control" placeholder="Full Name" value="{{ auth()->user()->name }}">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Address</label>
                                    <input name="billing_address" type="text" class="form-control" placeholder="Address" value="{{ auth()->user()->address1 }}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Apartment, suite, unit etc.</label>
                                    <input type="text" name="billing_address_2" class="form-control" placeholder="Apartment, suite, unit etc."
                                           value="{{ auth()->user()->address2 }}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Town / City</label>
                                    <input name="billing_city" type="text" class="form-control" placeholder="Town / City"  value="{{ auth()->user()->city }}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">State / County</label>
                                    <input name="billing_state" type="text" class="form-control" placeholder="State / County"  value="{{ auth()->user()->city }}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Postcode / Zip</label>
                                    <input name="billing_pincode" type="text" class="form-control" placeholder="Postcode / Zip"  value="{{ auth()->user()->zip }}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Email</label>
                                    <input name="billing_email" type="text" class="form-control" placeholder="Email"  value="{{ auth()->user()->email }}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Phone</label>
                                    <input name="billing_phone" type="text" class="form-control" placeholder="Phone"  value="{{ auth()->user()->phone }}">
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="seperator"><i class="fa fa-credit-card"></i>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="upper">Your Order</h4>
                            <div
                                class="table table-sm table-striped table-responsive table table-bordered table-responsive">
                                <table class="table m-b-0">
                                    <thead>
                                    <tr>
                                        <th class="cart-product-thumbnail">Product</th>
                                        <th class="cart-product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="cart-product-thumbnail">
                                                <div class="cart-product-thumbnail-name">{{ $product->name }}</div>
                                            </td>

                                            <td class="cart-product-subtotal">
                                                <span class="amount">{{ $product->price }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <h4>Order Total</h4>
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="cart-product-name">
                                                    <strong>Order Subtotal</strong>
                                                </td>
                                                <td class="cart-product-name text-right">
                                                    <span class="amount">{{ $products->sum('price') }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cart-product-name">
                                                    <strong>Shipping</strong>
                                                </td>
                                                <td class="cart-product-name  text-right">
                                                    <span class="amount">Free Shipping</span>
                                                </td>
                                            </tr>
                                            {{--                                        <tr>--}}
                                            {{--                                            <td class="cart-product-name">--}}
                                            {{--                                                <strong>Coupon</strong>--}}
                                            {{--                                            </td>--}}
                                            {{--                                            <td class="cart-product-name  text-right">--}}
                                            {{--                                                <span class="amount">-20%</span>--}}
                                            {{--                                            </td>--}}
                                            {{--                                        </tr>--}}
                                            <tr>
                                                <td class="cart-product-name">
                                                    <strong>Total</strong>
                                                </td>
                                                <td class="cart-product-name text-right">
                                                    <span
                                                        class="amount color lead"><strong>{{ $products->sum('price') }}</strong></span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h4 class="upper">Payment Method</h4>
                                    <div class="list-group">
                                        <input name="payment_method" type="radio" value="Prepaid" id="Prepaid"/>
                                        <label class="list-group-item" for="Prepaid">Pay Now</label>
                                        <input name="payment_method" type="radio" value="COD" id="COD"/>
                                        <label class="list-group-item" for="COD">Cash on delivery</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn icon-left float-right mt-3" href="#"><span>Confirm Order</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @csrf
        </form>
    </section>
    <!-- end: SHOP CHECKOUT -->
@endsection
