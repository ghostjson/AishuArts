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
                                    <select name="billing_country">
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
                                        <option>India</option>
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
                                        <option selected="selected">United Kingdom (UK)</option>
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
                                    <input type="text" name="billing_customer_name" class="form-control" placeholder="First Name" value="">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Address</label>
                                    <input name="billing_address" type="text" class="form-control" placeholder="Address" value="">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Apartment, suite, unit etc.</label>
                                    <input type="text" name="billing_address_2" class="form-control" placeholder="Apartment, suite, unit etc."
                                           value="">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Town / City</label>
                                    <input name="billing_city" type="text" class="form-control" placeholder="Town / City" value="">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">State / County</label>
                                    <input name="billing_state" type="text" class="form-control" placeholder="State / County" value="">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Postcode / Zip</label>
                                    <input name="billing_pincode" type="text" class="form-control" placeholder="Postcode / Zip" value="">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Email</label>
                                    <input name="billing_email" type="text" class="form-control" placeholder="Email" value="">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="sr-only">Phone</label>
                                    <input name="billing_phone" type="text" class="form-control" placeholder="Phone" value="">
                                </div>

                            </div>
                        </div>
                        {{--                        <div class="col-lg-6">--}}
                        {{--                            <div class="row">--}}
                        {{--                                <div class="col-lg-12">--}}
                        {{--                                    <h4 class="upper"><a href="#collapseFour" data-toggle="collapse" class="collapsed" aria-expanded="false"> Ship to a different address <i class="icon-arrow-down-circle"></i></a></h4>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="col-lg-12">--}}
                        {{--                                    <div style="height: 0px;" aria-expanded="false" id="collapseFour" class="panel-collapse collapse">--}}
                        {{--                                        <div class="panel-body">--}}
                        {{--                                            <p>If you have shopped with us before, please enter your details in the--}}
                        {{--                                                boxes below. If you are a new customer please proceed to the Billing--}}
                        {{--                                                &amp; Shipping section.</p>--}}
                        {{--                                            <div class="sep-top-xs">--}}
                        {{--                                                <div class="row">--}}
                        {{--                                                    <div class="col-lg-12 form-group">--}}
                        {{--                                                        <label class="sr-only">Country</label>--}}
                        {{--                                                        <select>--}}
                        {{--                                                            <option value="AX">Åland Islands</option>--}}
                        {{--                                                            <option value="AF">Afghanistan</option>--}}
                        {{--                                                            <option value="AL">Albania</option>--}}
                        {{--                                                            <option value="DZ">Algeria</option>--}}
                        {{--                                                            <option value="AD">Andorra</option>--}}
                        {{--                                                            <option value="AO">Angola</option>--}}
                        {{--                                                            <option value="AI">Anguilla</option>--}}
                        {{--                                                            <option value="AQ">Antarctica</option>--}}
                        {{--                                                            <option value="AG">Antigua and Barbuda</option>--}}
                        {{--                                                            <option value="AR">Argentina</option>--}}
                        {{--                                                            <option value="AM">Armenia</option>--}}
                        {{--                                                            <option value="AW">Aruba</option>--}}
                        {{--                                                            <option value="AU">Australia</option>--}}
                        {{--                                                            <option value="AT">Austria</option>--}}
                        {{--                                                            <option value="AZ">Azerbaijan</option>--}}
                        {{--                                                            <option value="BS">Bahamas</option>--}}
                        {{--                                                            <option value="BH">Bahrain</option>--}}
                        {{--                                                            <option value="BD">Bangladesh</option>--}}
                        {{--                                                            <option value="BB">Barbados</option>--}}
                        {{--                                                            <option value="BY">Belarus</option>--}}
                        {{--                                                            <option value="PW">Belau</option>--}}
                        {{--                                                            <option value="BE">Belgium</option>--}}
                        {{--                                                            <option value="BZ">Belize</option>--}}
                        {{--                                                            <option value="BJ">Benin</option>--}}
                        {{--                                                            <option value="BM">Bermuda</option>--}}
                        {{--                                                            <option value="BT">Bhutan</option>--}}
                        {{--                                                            <option value="BO">Bolivia</option>--}}
                        {{--                                                            <option value="BQ">Bonaire, Saint Eustatius and Saba--}}
                        {{--                                                            </option>--}}
                        {{--                                                            <option value="BA">Bosnia and Herzegovina</option>--}}
                        {{--                                                            <option value="BW">Botswana</option>--}}
                        {{--                                                            <option value="BV">Bouvet Island</option>--}}
                        {{--                                                            <option value="BR">Brazil</option>--}}
                        {{--                                                            <option value="IO">British Indian Ocean Territory--}}
                        {{--                                                            </option>--}}
                        {{--                                                            <option value="VG">British Virgin Islands</option>--}}
                        {{--                                                            <option value="BN">Brunei</option>--}}
                        {{--                                                            <option value="BG">Bulgaria</option>--}}
                        {{--                                                            <option value="BF">Burkina Faso</option>--}}
                        {{--                                                            <option value="BI">Burundi</option>--}}
                        {{--                                                            <option value="KH">Cambodia</option>--}}
                        {{--                                                            <option value="CM">Cameroon</option>--}}
                        {{--                                                            <option value="CA">Canada</option>--}}
                        {{--                                                            <option value="CV">Cape Verde</option>--}}
                        {{--                                                            <option value="KY">Cayman Islands</option>--}}
                        {{--                                                            <option value="CF">Central African Republic</option>--}}
                        {{--                                                            <option value="TD">Chad</option>--}}
                        {{--                                                            <option value="CL">Chile</option>--}}
                        {{--                                                            <option value="CN">China</option>--}}
                        {{--                                                            <option value="CX">Christmas Island</option>--}}
                        {{--                                                            <option value="CC">Cocos (Keeling) Islands</option>--}}
                        {{--                                                            <option value="CO">Colombia</option>--}}
                        {{--                                                            <option value="KM">Comoros</option>--}}
                        {{--                                                            <option value="CG">Congo (Brazzaville)</option>--}}
                        {{--                                                            <option value="CD">Congo (Kinshasa)</option>--}}
                        {{--                                                            <option value="CK">Cook Islands</option>--}}
                        {{--                                                            <option value="CR">Costa Rica</option>--}}
                        {{--                                                            <option value="HR">Croatia</option>--}}
                        {{--                                                            <option value="CU">Cuba</option>--}}
                        {{--                                                            <option value="CW">CuraÇao</option>--}}
                        {{--                                                            <option value="CY">Cyprus</option>--}}
                        {{--                                                            <option value="CZ">Czech Republic</option>--}}
                        {{--                                                            <option value="DK">Denmark</option>--}}
                        {{--                                                            <option value="DJ">Djibouti</option>--}}
                        {{--                                                            <option value="DM">Dominica</option>--}}
                        {{--                                                            <option value="DO">Dominican Republic</option>--}}
                        {{--                                                            <option value="EC">Ecuador</option>--}}
                        {{--                                                            <option value="EG">Egypt</option>--}}
                        {{--                                                            <option value="SV">El Salvador</option>--}}
                        {{--                                                            <option value="GQ">Equatorial Guinea</option>--}}
                        {{--                                                            <option value="ER">Eritrea</option>--}}
                        {{--                                                            <option value="EE">Estonia</option>--}}
                        {{--                                                            <option value="ET">Ethiopia</option>--}}
                        {{--                                                            <option value="FK">Falkland Islands</option>--}}
                        {{--                                                            <option value="FO">Faroe Islands</option>--}}
                        {{--                                                            <option value="FJ">Fiji</option>--}}
                        {{--                                                            <option value="FI">Finland</option>--}}
                        {{--                                                            <option value="FR">France</option>--}}
                        {{--                                                            <option value="GF">French Guiana</option>--}}
                        {{--                                                            <option value="PF">French Polynesia</option>--}}
                        {{--                                                            <option value="TF">French Southern Territories</option>--}}
                        {{--                                                            <option value="GA">Gabon</option>--}}
                        {{--                                                            <option value="GM">Gambia</option>--}}
                        {{--                                                            <option value="GE">Georgia</option>--}}
                        {{--                                                            <option value="DE">Germany</option>--}}
                        {{--                                                            <option value="GH">Ghana</option>--}}
                        {{--                                                            <option value="GI">Gibraltar</option>--}}
                        {{--                                                            <option value="GR">Greece</option>--}}
                        {{--                                                            <option value="GL">Greenland</option>--}}
                        {{--                                                            <option value="GD">Grenada</option>--}}
                        {{--                                                            <option value="GP">Guadeloupe</option>--}}
                        {{--                                                            <option value="GT">Guatemala</option>--}}
                        {{--                                                            <option value="GG">Guernsey</option>--}}
                        {{--                                                            <option value="GN">Guinea</option>--}}
                        {{--                                                            <option value="GW">Guinea-Bissau</option>--}}
                        {{--                                                            <option value="GY">Guyana</option>--}}
                        {{--                                                            <option value="HT">Haiti</option>--}}
                        {{--                                                            <option value="HM">Heard Island and McDonald Islands--}}
                        {{--                                                            </option>--}}
                        {{--                                                            <option value="HN">Honduras</option>--}}
                        {{--                                                            <option value="HK">Hong Kong</option>--}}
                        {{--                                                            <option value="HU">Hungary</option>--}}
                        {{--                                                            <option value="IS">Iceland</option>--}}
                        {{--                                                            <option value="IN">India</option>--}}
                        {{--                                                            <option value="ID">Indonesia</option>--}}
                        {{--                                                            <option value="IR">Iran</option>--}}
                        {{--                                                            <option value="IQ">Iraq</option>--}}
                        {{--                                                            <option value="IM">Isle of Man</option>--}}
                        {{--                                                            <option value="IL">Israel</option>--}}
                        {{--                                                            <option value="IT">Italy</option>--}}
                        {{--                                                            <option value="CI">Ivory Coast</option>--}}
                        {{--                                                            <option value="JM">Jamaica</option>--}}
                        {{--                                                            <option value="JP">Japan</option>--}}
                        {{--                                                            <option value="JE">Jersey</option>--}}
                        {{--                                                            <option value="JO">Jordan</option>--}}
                        {{--                                                            <option value="KZ">Kazakhstan</option>--}}
                        {{--                                                            <option value="KE">Kenya</option>--}}
                        {{--                                                            <option value="KI">Kiribati</option>--}}
                        {{--                                                            <option value="KW">Kuwait</option>--}}
                        {{--                                                            <option value="KG">Kyrgyzstan</option>--}}
                        {{--                                                            <option value="LA">Laos</option>--}}
                        {{--                                                            <option value="LV">Latvia</option>--}}
                        {{--                                                            <option value="LB">Lebanon</option>--}}
                        {{--                                                            <option value="LS">Lesotho</option>--}}
                        {{--                                                            <option value="LR">Liberia</option>--}}
                        {{--                                                            <option value="LY">Libya</option>--}}
                        {{--                                                            <option value="LI">Liechtenstein</option>--}}
                        {{--                                                            <option value="LT">Lithuania</option>--}}
                        {{--                                                            <option value="LU">Luxembourg</option>--}}
                        {{--                                                            <option value="MO">Macao S.A.R., China</option>--}}
                        {{--                                                            <option value="MK">Macedonia</option>--}}
                        {{--                                                            <option value="MG">Madagascar</option>--}}
                        {{--                                                            <option value="MW">Malawi</option>--}}
                        {{--                                                            <option value="MY">Malaysia</option>--}}
                        {{--                                                            <option value="MV">Maldives</option>--}}
                        {{--                                                            <option value="ML">Mali</option>--}}
                        {{--                                                            <option value="MT">Malta</option>--}}
                        {{--                                                            <option value="MH">Marshall Islands</option>--}}
                        {{--                                                            <option value="MQ">Martinique</option>--}}
                        {{--                                                            <option value="MR">Mauritania</option>--}}
                        {{--                                                            <option value="MU">Mauritius</option>--}}
                        {{--                                                            <option value="YT">Mayotte</option>--}}
                        {{--                                                            <option value="MX">Mexico</option>--}}
                        {{--                                                            <option value="FM">Micronesia</option>--}}
                        {{--                                                            <option value="MD">Moldova</option>--}}
                        {{--                                                            <option value="MC">Monaco</option>--}}
                        {{--                                                            <option value="MN">Mongolia</option>--}}
                        {{--                                                            <option value="ME">Montenegro</option>--}}
                        {{--                                                            <option value="MS">Montserrat</option>--}}
                        {{--                                                            <option value="MA">Morocco</option>--}}
                        {{--                                                            <option value="MZ">Mozambique</option>--}}
                        {{--                                                            <option value="MM">Myanmar</option>--}}
                        {{--                                                            <option value="NA">Namibia</option>--}}
                        {{--                                                            <option value="NR">Nauru</option>--}}
                        {{--                                                            <option value="NP">Nepal</option>--}}
                        {{--                                                            <option value="NL">Netherlands</option>--}}
                        {{--                                                            <option value="AN">Netherlands Antilles</option>--}}
                        {{--                                                            <option value="NC">New Caledonia</option>--}}
                        {{--                                                            <option value="NZ">New Zealand</option>--}}
                        {{--                                                            <option value="NI">Nicaragua</option>--}}
                        {{--                                                            <option value="NE">Niger</option>--}}
                        {{--                                                            <option value="NG">Nigeria</option>--}}
                        {{--                                                            <option value="NU">Niue</option>--}}
                        {{--                                                            <option value="NF">Norfolk Island</option>--}}
                        {{--                                                            <option value="KP">North Korea</option>--}}
                        {{--                                                            <option value="NO">Norway</option>--}}
                        {{--                                                            <option value="OM">Oman</option>--}}
                        {{--                                                            <option value="PK">Pakistan</option>--}}
                        {{--                                                            <option value="PS">Palestinian Territory</option>--}}
                        {{--                                                            <option value="PA">Panama</option>--}}
                        {{--                                                            <option value="PG">Papua New Guinea</option>--}}
                        {{--                                                            <option value="PY">Paraguay</option>--}}
                        {{--                                                            <option value="PE">Peru</option>--}}
                        {{--                                                            <option value="PH">Philippines</option>--}}
                        {{--                                                            <option value="PN">Pitcairn</option>--}}
                        {{--                                                            <option value="PL">Poland</option>--}}
                        {{--                                                            <option value="PT">Portugal</option>--}}
                        {{--                                                            <option value="QA">Qatar</option>--}}
                        {{--                                                            <option value="IE">Republic of Ireland</option>--}}
                        {{--                                                            <option value="RE">Reunion</option>--}}
                        {{--                                                            <option value="RO">Romania</option>--}}
                        {{--                                                            <option value="RU">Russia</option>--}}
                        {{--                                                            <option value="RW">Rwanda</option>--}}
                        {{--                                                            <option value="ST">São Tomé and Príncipe</option>--}}
                        {{--                                                            <option value="BL">Saint Barthélemy</option>--}}
                        {{--                                                            <option value="SH">Saint Helena</option>--}}
                        {{--                                                            <option value="KN">Saint Kitts and Nevis</option>--}}
                        {{--                                                            <option value="LC">Saint Lucia</option>--}}
                        {{--                                                            <option value="SX">Saint Martin (Dutch part)</option>--}}
                        {{--                                                            <option value="MF">Saint Martin (French part)</option>--}}
                        {{--                                                            <option value="PM">Saint Pierre and Miquelon</option>--}}
                        {{--                                                            <option value="VC">Saint Vincent and the Grenadines--}}
                        {{--                                                            </option>--}}
                        {{--                                                            <option value="SM">San Marino</option>--}}
                        {{--                                                            <option value="SA">Saudi Arabia</option>--}}
                        {{--                                                            <option value="SN">Senegal</option>--}}
                        {{--                                                            <option value="RS">Serbia</option>--}}
                        {{--                                                            <option value="SC">Seychelles</option>--}}
                        {{--                                                            <option value="SL">Sierra Leone</option>--}}
                        {{--                                                            <option value="SG">Singapore</option>--}}
                        {{--                                                            <option value="SK">Slovakia</option>--}}
                        {{--                                                            <option value="SI">Slovenia</option>--}}
                        {{--                                                            <option value="SB">Solomon Islands</option>--}}
                        {{--                                                            <option value="SO">Somalia</option>--}}
                        {{--                                                            <option value="ZA">South Africa</option>--}}
                        {{--                                                            <option value="GS">South Georgia/Sandwich Islands--}}
                        {{--                                                            </option>--}}
                        {{--                                                            <option value="KR">South Korea</option>--}}
                        {{--                                                            <option value="SS">South Sudan</option>--}}
                        {{--                                                            <option value="ES">Spain</option>--}}
                        {{--                                                            <option value="LK">Sri Lanka</option>--}}
                        {{--                                                            <option value="SD">Sudan</option>--}}
                        {{--                                                            <option value="SR">Suriname</option>--}}
                        {{--                                                            <option value="SJ">Svalbard and Jan Mayen</option>--}}
                        {{--                                                            <option value="SZ">Swaziland</option>--}}
                        {{--                                                            <option value="SE">Sweden</option>--}}
                        {{--                                                            <option value="CH">Switzerland</option>--}}
                        {{--                                                            <option value="SY">Syria</option>--}}
                        {{--                                                            <option value="TW">Taiwan</option>--}}
                        {{--                                                            <option value="TJ">Tajikistan</option>--}}
                        {{--                                                            <option value="TZ">Tanzania</option>--}}
                        {{--                                                            <option value="TH">Thailand</option>--}}
                        {{--                                                            <option value="TL">Timor-Leste</option>--}}
                        {{--                                                            <option value="TG">Togo</option>--}}
                        {{--                                                            <option value="TK">Tokelau</option>--}}
                        {{--                                                            <option value="TO">Tonga</option>--}}
                        {{--                                                            <option value="TT">Trinidad and Tobago</option>--}}
                        {{--                                                            <option value="TN">Tunisia</option>--}}
                        {{--                                                            <option value="TR">Turkey</option>--}}
                        {{--                                                            <option value="TM">Turkmenistan</option>--}}
                        {{--                                                            <option value="TC">Turks and Caicos Islands</option>--}}
                        {{--                                                            <option value="TV">Tuvalu</option>--}}
                        {{--                                                            <option value="UG">Uganda</option>--}}
                        {{--                                                            <option value="UA">Ukraine</option>--}}
                        {{--                                                            <option value="AE">United Arab Emirates</option>--}}
                        {{--                                                            <option selected="selected" value="GB">United Kingdom--}}
                        {{--                                                                (UK)</option>--}}
                        {{--                                                            <option value="US">United States (US)</option>--}}
                        {{--                                                            <option value="UY">Uruguay</option>--}}
                        {{--                                                            <option value="UZ">Uzbekistan</option>--}}
                        {{--                                                            <option value="VU">Vanuatu</option>--}}
                        {{--                                                            <option value="VA">Vatican</option>--}}
                        {{--                                                            <option value="VE">Venezuela</option>--}}
                        {{--                                                            <option value="VN">Vietnam</option>--}}
                        {{--                                                            <option value="WF">Wallis and Futuna</option>--}}
                        {{--                                                            <option value="EH">Western Sahara</option>--}}
                        {{--                                                            <option value="WS">Western Samoa</option>--}}
                        {{--                                                            <option value="YE">Yemen</option>--}}
                        {{--                                                            <option value="ZM">Zambia</option>--}}
                        {{--                                                            <option value="ZW">Zimbabwe</option>--}}
                        {{--                                                        </select>--}}
                        {{--                                                    </div>--}}
                        {{--                                                    <div class="col-lg-6 form-group">--}}
                        {{--                                                        <label class="sr-only">First Name</label>--}}
                        {{--                                                        <input type="text" class="form-control" placeholder="First Name" value="">--}}
                        {{--                                                    </div>--}}
                        {{--                                                    <div class="col-lg-6 form-group">--}}
                        {{--                                                        <label class="sr-only">Last Name</label>--}}
                        {{--                                                        <input type="text" class="form-control" placeholder="Last Name" value="">--}}
                        {{--                                                    </div>--}}
                        {{--                                                    <div class="col-lg-12 form-group">--}}
                        {{--                                                        <label class="sr-only">Company Name</label>--}}
                        {{--                                                        <input type="text" class="form-control" placeholder="Company Name" value="">--}}
                        {{--                                                    </div>--}}
                        {{--                                                    <div class="col-lg-12 form-group">--}}
                        {{--                                                        <label class="sr-only">Address</label>--}}
                        {{--                                                        <input type="text" class="form-control" placeholder="Address" value="">--}}
                        {{--                                                    </div>--}}
                        {{--                                                    <div class="col-lg-6 form-group">--}}
                        {{--                                                        <label class="sr-only">Apartment, suite, unit etc.</label>--}}
                        {{--                                                        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc." value="">--}}
                        {{--                                                    </div>--}}
                        {{--                                                    <div class="col-lg-6 form-group">--}}
                        {{--                                                        <label class="sr-only">Town / City</label>--}}
                        {{--                                                        <input type="text" class="form-control" placeholder="Town / City" value="">--}}
                        {{--                                                    </div>--}}
                        {{--                                                    <div class="col-lg-6 form-group">--}}
                        {{--                                                        <label class="sr-only">State / County</label>--}}
                        {{--                                                        <input type="text" class="form-control" placeholder="State / County" value="">--}}
                        {{--                                                    </div>--}}
                        {{--                                                    <div class="col-lg-6 form-group">--}}
                        {{--                                                        <label class="sr-only">Postcode / Zip</label>--}}
                        {{--                                                        <input type="text" class="form-control" placeholder="Postcode / Zip" value="">--}}
                        {{--                                                    </div>--}}
                        {{--                                                    <div class="col-lg-12">--}}
                        {{--                                                        <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery" rows="7"></textarea>--}}
                        {{--                                                    </div>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
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
