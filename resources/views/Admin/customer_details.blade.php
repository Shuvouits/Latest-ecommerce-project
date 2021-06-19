<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags and other links -->
    @include('Admin.link')
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
       
        <!--sidebar start---> 
        @include('Admin.sidebar')
        <!-- sidebar end -->
        <!-- navbar-wrapper start -->
         @include('Admin.navbar')
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="row align-items-center mb-30 justify-content-between">
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Customer Detail</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                    </div>
                </div>

                <div class="row mb-none-30">
                    <div class="col-xl-3 col-lg-5 col-md-5 mb-30">

                        <div class="card b-radius--10 overflow-hidden box--shadow1">
                            <div class="card-body">
                                <div class="mb-3">
                                    @if($image !='')
                                    <img src="{{asset('images/'.$image)}}" alt="profile-image" class="b-radius--10 w-100">
                                    @else 
                                    <img src="{{asset('images/avater.png')}}" alt="profile-image" class="b-radius--10 w-100"> 
                                    @endif
                                </div>
                            </div>
                        </div>

                        

                        <div class="card b-radius--10 overflow-hidden mt-30 box--shadow1">
                            <div class="card-body">
                                <h5 class="mb-20 text-muted">Customer Action</h5>

                                <a href="/admin/dashboard/customer/login_history/{{$user_name}}" class="btn btn--primary btn--shadow btn-block btn-lg">
                                    Login Logs </a>
                                <a href="/admin/dashboard/customer/send_email/{{$user_name}}" class="btn btn--danger btn--shadow btn-block btn-lg">
                                    Send Email </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-7 col-md-7 mb-30">

                        <div class="row mb-none-30">
                            <div class="col-xl-4 col-md-12 col-sm-12 mb-30">
                                <div class="widget bb--3 border--cyan b-radius--10 bg--white p-4 box--shadow2 has--link">
                                    <a href="https://script.viserlab.com/visermart/admin/customer/payments/122" class="item--link"></a>
                                    <div class="widget__icon b-radius--rounded bg--cyan"><i class="fa fa-credit-card"></i></div>
                                    <div class="widget__content">
                                        <p class="text-uppercase text-muted">Total Shopping</p>
                                        <h2 class="text--cyan font-weight-bold">{{$sum}} TK.</h2>

                                    </div>
                                    <div class="widget__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12 col-sm-12 mb-30">
                                <div class="widget bb--3 border--info b-radius--10 bg--white p-4 box--shadow2 has--link">
                                    <a href="https://script.viserlab.com/visermart/admin/customer/transactions/122" class="item--link"></a>
                                    <div class="widget__icon b-radius--rounded bg--info"><i class="la la-exchange-alt"></i></div>
                                    <div class="widget__content">
                                        <p class="text-uppercase text-muted">Total Transactions</p>
                                        <h2 class="text--info font-weight-bold">{{$sum}} TK.</h2>

                                    </div>
                                    <div class="widget__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-12 col-sm-12 mb-30">
                                <div class="widget bb--3 border--indigo b-radius--10 bg--white p-4 box--shadow2 has--link">
                                    <a href="https://script.viserlab.com/visermart/admin/report/user_order/122" class="item--link"></a>
                                    <div class="widget__icon b-radius--rounded bg--indigo"><i class="la la-shopping-basket"></i></div>
                                    <div class="widget__content">
                                        <p class="text-uppercase text-muted">Total Orders</p>
                                        <h2 class="text--indigo font-weight-bold">{{$order_count}}</h2>

                                    </div>
                                    <div class="widget__arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-30">
                            <div class="card-body">
                                <h5 class="card-title mb--20 border-bottom pb-2">{{$first_name}} {{$last_name}} Information</h5>
                                <form action="https://script.viserlab.com/visermart/admin/customer/update/122" method="POST" enctype="multipart/form-data" class="mt-4">
                                    <input type="hidden" name="_token" value="VHS93PamtGaZ62OHgI2kBQtqXiXGGtatA4uthFDQ">
                                    <div class="form-group row">
                                        <div class="col-md-12 col-lg-3 col-xl-2">
                                            <label class="form-control-label font-weight-bold">First Name </label>
                                        </div>
                                        <div class="col-md-12 col-lg-9 col-xl-10">
                                            <input class="form-control" type="text" name="firstname" value="{{$first_name}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 col-lg-3 col-xl-2">
                                            <label class="form-control-label  font-weight-bold">Last Name</label>
                                        </div>
                                        <div class="col-md-12 col-lg-9 col-xl-10">
                                            <input class="form-control" type="text" name="lastname" value="{{$last_name}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 col-lg-3 col-xl-2">
                                            <label class="form-control-label font-weight-bold">Email</label>
                                        </div>
                                        <div class="col-md-12 col-lg-9 col-xl-10">
                                            <input class="form-control" type="email" name="email" value="{{$email}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 col-lg-3 col-xl-2">
                                            <label class="form-control-label font-weight-bold">Mobile</label>
                                        </div>
                                        <div class="col-md-12 col-lg-9 col-xl-10">
                                            <input class="form-control" type="text" name="mobile" value="{{$mobile}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 col-lg-3 col-xl-2">
                                            <label class="form-control-label font-weight-bold">Address </label>
                                        </div>
                                        <div class="col-md-12 col-lg-9 col-xl-10">
                                            <input class="form-control" type="text" name="address" value="{{$address}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 col-lg-3 col-xl-2">
                                            <label class="form-control-label font-weight-bold">City </label>
                                        </div>
                                        <div class="col-md-12 col-lg-9 col-xl-10">
                                            <input class="form-control" type="text" name="city" value="{{$city}}">
                                        </div>
                                    </div>

                                    <dv class="form-group row">
                                        <div class="col-md-12 col-lg-3 col-xl-2">
                                            <label class="form-control-label font-weight-bold">State </label>
                                        </div>
                                        <div class="col-md-12 col-lg-9 col-xl-10">
                                            <input class="form-control" type="text" name="state" value="{{$state}}">
                                        </div>
                                    </dv>

                                    <div class="form-group row">
                                        <div class="col-md-12 col-lg-3 col-xl-2">
                                            <label class="form-control-label font-weight-bold">Zip/Post Code </label>
                                        </div>
                                        <div class="col-md-12 col-lg-9 col-xl-10">
                                            <input class="form-control" type="text" name="zip" value="{{$zip}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 col-lg-3 col-xl-2">
                                            <label class="form-control-label font-weight-bold">Country </label>
                                        </div>
                                        <div class="col-md-12 col-lg-9 col-xl-10">
                                            <select name="country" class="form-control">
                                                <option value="{{$country}}">{{$country}}</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia, Plurinational State of bolivia">Bolivia, Plurinational State of bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of the Congo">Congo, The Democratic Republic of the Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of Persian Gulf">Iran, Islamic Republic of Persian Gulf</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of Korea">Korea, Democratic People's Republic of Korea</option>
                                                <option value="Korea, Republic of South Korea">Korea, Republic of South Korea</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of Micronesia">Micronesia, Federated States of Micronesia</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                <option value="Saint Helena, Ascension and Tristan Da Cunha">Saint Helena, Ascension and Tristan Da Cunha</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Martin">Saint Martin</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of Tanzania">Tanzania, United Republic of Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela, Bolivarian Republic of Venezuela">Venezuela, Bolivarian Republic of Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row justify-content-end">
                                       

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn--primary btn-block btn-lg">Save Changes </button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>






  @include('Admin.script')

  <script>
    @if(Session::has('message'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.warning("{{ session('warning') }}");
    @endif
  </script>


</body>

</html>