<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copyright Registration | Incorp Solutions</title>
    <link href="../assets/images/favicon.png" rel="icon">

    <!-- Bootstrap 3.3 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Multi Select Countries CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">

    <!-- Font Awesome 4.7 CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Sctiptop CSS -->
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <!-- Registration Form Global CSS -->
    <link rel="stylesheet" href="../assets/css/registration-form-global.css?v=1.2">

    <!-- Registration Form Custom CSS -->
    <link rel="stylesheet" href="../assets/css/registration-form.css?v=1.2">


    <!-- Dropify CSS -->
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <!--Google Font Lexand Deca-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row">
            <section>
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="What to Trademark?">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-folder-open"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Describe Usage">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Select Countries">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-globe"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step4" data-toggle="tab" aria-controls="step3" role="tab" title="Select Package">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-usd"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Checkout">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form method="post" action="#" id="form-upload" enctype="multipart/form-data">
                        <input type="hidden" name="lead_id" value="<?= $_GET['lead_id'] ?>">
                        <input type="hidden" name="source" value="https://theincorpsolutions.com/">
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <div class="p-5 md:pt-8 md:p-10 flex flex-col gap-y-8 rounded-3xl w-full section-shadow bg-white">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="WantCopyright">What You are Wanting To Copyright.</label>
                                            <select class="form-control copyright-input" id="WantCopyright" name="WantCopyright" required="">
                                                <option value="" selected="">Choose...</option>
                                                <optgroup label="Literary Work">
                                                    <option value="Written Work such as fiction, nonfiction, poetry, textbooks, refrence works or articles">Written Work such as fiction, nonfiction, poetry, textbooks, refrence works or articles</option>
                                                    <option value="Directories or Catalogs, Advertising Copy">Directories or Catalogs, Advertising Copy</option>
                                                    <option value="Computer Programs">Computer Programs</option>
                                                    <option value="Website or Online Material">Website or Online Material</option>
                                                </optgroup>

                                                <optgroup label="Work of Visual Arts">
                                                    <option value="Photograph">Photograph</option>
                                                    <option value="Art Work">Art Work</option>
                                                    <option value="Maps">Maps</option>
                                                    <option value="Technical Drawings">Technical Drawings</option>
                                                </optgroup>

                                                <optgroup label="Sound Recordings">
                                                    <option value="Recorded Performance of Music or Sound">Recorded Performance of Music or Sound</option>
                                                </optgroup>

                                                <optgroup label="Work of Performance Arts">
                                                    <option value="Written Music &amp; Lyrics">Written Music &amp; Lyrics</option>
                                                    <option value="Screenplay or Script">Screenplay or Script</option>
                                                    <option value="Choreographic Work">Choreographic Work</option>
                                                    <option value="A Recorded Score For a movie or Play">A Recorded Score For a movie or Play</option>
                                                </optgroup>

                                                <optgroup label="Motion Pictures/AV Work">
                                                    <option value="Feature Film, Documentry Film, Animated Film, Television Show, Video or Other Audi-Visual Work">Feature Film, Documentry Film, Animated Film, Television Show, Video or Other Audi-Visual Work</option>
                                                    <option value="Video Game">Video Game</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="TitleCopyright">What is the Title of the Work You Would like to Copyright?</label>
                                            <input class="form-control copyright-input" type="text" id="TitleCopyright" name="TitleCopyright" placeholder="What is the Title of the Work You Would like to Copyright?" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="CopyrightYear">What Year Did You Complete Your Work?<span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <select class="form-control copyright-input" id="CopyrightYear" name="CopyrightYear" required="">
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="SelectWorkPublish">Has the Work Been Published.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <div class="d-flex inline-block">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish1" value="Yes" name="WorkPublish" required="">
                                                <label for="Publish1">Yes</label>
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish2" value="No" name="WorkPublish" checked="" required="">
                                                <label for="Publish2">No</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="SelectWorkPeriod">Is Your Work A part of Larger Periodical (NewsPaper, Magzine) Or Serial? <span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <div class="d-flex inline-block">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish3" value="Yes" name="WorkPeriod" required="">
                                                <label for="Publish3">Yes</label>
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish4" value="No" name="WorkPeriod" checked="" required="">
                                                <label for="Publish4">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="CustomerInfo">
                                        <div class="">
                                            <h3 class="mt-20">
                                                Who is the Author of The Work?
                                            </h3>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="CustomerName">Full Name or Organization Name: <span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <input class="form-control copyright-input" type="text" id="CustomerName" name="CustomerName" placeholder="Enter Full Name or Organization Name" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="CustomerEmail">Address: <span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <input class="form-control copyright-input" type="text" id="CustomerEmail" name="CustomerEmail" placeholder="Address" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="SelectCitizenship">Country of Citizenship / Domicile<span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <select class="form-control copyright-input" id="SelectCitizenship" name="SelectCitizenship" required="">
                                                <option value="" selected="">Choose...</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland Islands">Aland Islands</option>
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
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
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
                                                <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curacao">Curacao</option>
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
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
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
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
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
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
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
                                                <option value="Puerto">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                <option value="Saint Helena">Saint Helena</option>
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
                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Sint Maarten">Sint Maarten</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="outh Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
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
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="submit" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <div class="p-5 md:pt-8 md:p-10 flex flex-col gap-y-8 rounded-3xl w-full section-shadow bg-white">
                                    <div>
                                        <div class="mt-33 enter-website-optional">
                                            <h1 class="font-semibold flex gap-x-1 mb-3">Enter your website (Optional)
                                            </h1>
                                            <div class="relative flex flex-col gap-y-1 justify-start flex-1">
                                                <h1 class="font-semibold flex items-start gap-x-1"></h1><input id="trademark_information.website" type="text" class="w-full pl-3 p-1.5 md:p-4 md:pl-5 rounded-md md:rounded-base border bb  " name="website_url" placeholder="https://" value="">
                                            </div>
                                        </div>
                                        <div class="mt-10 relative">
                                            <h1 class="font-semibold flex gap-x-1 mb-3">Describe more about what you
                                                will sell using your brand trademark.<span class="text-tm-red-required">*</span></h1>
                                            <div class="flex flex-col gap-y-1"><textarea name="brand_description" class="text-1 w-full pt-3 pb-5 px-4 rounded-2xl border min-h-[150px] undefined" placeholder="Enter a description of the products and or services that you plan to sell using your trademark."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="submit" class="btn btn-primary next-step" disabled>Save and
                                            continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <select name="to_be_trademarked_in[]" id="countries" multiple>
                                    <option value="199,United States">United States</option>
                                    <option value="999,Canada">Canada</option>
                                    <option value="199,Australia">Australia</option>
                                    <option value="22,Mexico">Mexico</option>
                                    <option value="100,European Union">European Union</option>
                                    <option value="349,China">China</option>
                                    <option value="99,South Korea">South Korea</option>
                                    <option value="99,Japan">Japan</option>
                                    <option value="249,India">India</option>
                                    <option value="99,United Kingdom">United Kingdom</option>
                                    <option value="99,Israel">Israel</option>
                                    <option value="1299,United Arab Emirates">United Arab Emirates</option>
                                    <option value="699,New Zealand">New Zealand</option>
                                    <option value="99,Brazil">Brazil</option>
                                    <option value="99,Taiwan">Taiwan</option>
                                    <option value="99,Ukraine">Ukraine</option>
                                    <option value="699,Indonesia">Indonesia</option>
                                    <option value="110,South Africa">South Africa</option>
                                    <option value="799,Singapore">Singapore</option>
                                    <option value="999,Saudi Arabia">Saudi Arabia</option>
                                    <option value="199,Afghanistan">Afghanistan</option>
                                    <option value="199,Algeria">Algeria</option>
                                    <option value="199,Argentina">Argentina</option>
                                    <option value="199,Austria">Austria</option>
                                    <option value="199,Bangladesh">Bangladesh</option>
                                    <option value="199,Belgium">Belgium</option>
                                    <option value="199,Chile">Chile</option>
                                    <option value="199,Colombia">Colombia</option>
                                    <option value="199,Czechia">Czechia</option>
                                    <option value="199,Denmark">Denmark</option>
                                    <option value="199,France">France</option>
                                    <option value="199,Germany">Germany</option>
                                    <option value="199,Italy">Italy</option>
                                    <option value="199,Russia">Russia</option>
                                    <option value="199,Spain">Spain</option>
                                    <option value="199,The United States">The United States</option>
                                </select>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="submit" class="btn btn-primary btn-info-full next-step">Save and
                                            continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step4">
                                <div class="mt-33 packages-container">
                                    <div class="rounded-[40px]">

                                        <!-- Desktop Packages Start -->
                                        <table style="box-shadow: rgba(222, 222, 222, 0.08) 0px 10px 10px, rgba(100, 106, 114, 0.12) 0px 10px 70px; width: 85%; margin: 0 auto;" class="desktop-packages-form copyright-desktop-form">
                                            <thead>
                                                <tr class="first-row">
                                                    <th class="bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] rouned-l-[40px] px-8 py-5 table-first-col">
                                                        <div class="img-container">
                                                            <img class="flag-img flag-pricing-usa flag-pricing-uk" src="../assets/images/flag-us.svg" alt="Incorp Solutions">
                                                        </div>
                                                        <h3 class="custom-heading">Compare Copyright Registration Plans</h3>
                                                    </th>
                                                    <th class="align-bottom">
                                                        <div class="flex flex-col items-center  gap-y-1 py-5 px-3 items-start border-b-2 border-b-[#E2E2E2] package-selected-pay">
                                                            <p class="font-semibold package_name">GOLD</p>
                                                            <p class="font-bold text-4xl"><span class="dollar-symbol-change">$</span>199</p>
                                                            <span class="text-base filing-fee">(Plus Federal Fee*)</span>
                                                            <!-- <strike><span class="dollar-symbol-change">$</span>78</strike> -->
                                                            <div class="flex justify-center mt-2">
                                                                <button class="custom-package-btn py-2 px-3 md:py-3.5 md:px-8 font-bold flex items-center justify-center rounded-lg md:rounded-2xl relative overflow-hidden disabled:border-tm-gray-300 disabled:bg-tm-gray-300 disabled:hover:bg-tm-gray-300 disabled:cursor-not-allowed focus-visible:outline-none !px-8 !py-2 !rounded-base border border-solid border-tm-blue bg-tm-blue hover:bg-tm-royal-blue active:bg-tm-blue-200 text-white " type="button"><span class="button_ripple__Kgdu_" style="height: 147px; width: 147px; left: 22.5px; top: -49.5px;"></span>
                                                                    <input required="" type="radio" value="199" name="package_price" data-package_name="COPYRIGHT GOLD PACKAGE" class="package-select" id="box1">
                                                                    <p class="font-bold whitespace-nowrap">
                                                                    </p>
                                                                    <p class="cursor-pointer">Select Plan</p>
                                                                    <p></p>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th class="align-bottom">
                                                        <div class="flex flex-col items-center  gap-y-1 py-5 px-3 items-start border-b-2 border-b-[#E2E2E2] package-selected-pay startup-package-col">
                                                            <div class="bestseller bgyelloe">
                                                                <small>BEST SELLER</small>
                                                            </div>
                                                            <p class="font-semibold package_name">DIAMOND</p>
                                                            <p class="font-bold text-4xl"><span class="dollar-symbol-change">$</span>298</p>
                                                            <span class="text-base filing-fee">(Plus Federal Fee*)</span>
                                                            <!-- <strike><span class="dollar-symbol-change">$</span>198</strike> -->
                                                            <div class="flex justify-center mt-2">
                                                                <button class="custom-package-btn py-2 px-3 md:py-3.5 md:px-8 font-bold flex items-center justify-center rounded-lg md:rounded-2xl relative overflow-hidden disabled:border-tm-gray-300 disabled:bg-tm-gray-300 disabled:hover:bg-tm-gray-300 disabled:cursor-not-allowed focus-visible:outline-none !px-8 !py-2 !rounded-base border border-solid border-tm-blue bg-tm-blue hover:bg-tm-royal-blue active:bg-tm-blue-200 text-white " type="button"><span class="button_ripple__Kgdu_" style="height: 147px; width: 147px; left: 22.5px; top: -49.5px;"></span>
                                                                    <input required="" type="radio" value="298" name="package_price" data-package_name="COPYRIGHT DIAMOND PACKAGE" class="package-select" id="box2">
                                                                    <p class="font-bold whitespace-nowrap">
                                                                    </p>
                                                                    <p class="cursor-pointer">Select Plan</p>
                                                                    <p></p>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p class="font-bold text-sm xl:max-w-[400px]">
                                                        <p>Professional Preparation of your federal copyright application including a review by the copyright team for accuracy, completeness and common mistakes</p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="../assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="../assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <div class="td first">
                                                            <p> Federal E-Filing Electronic filing of your application with the USPTO with no need to wait for mail or dealing with paper files</p>
                                                        </div>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="../assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="../assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>Certificate of Registration that will be mailed to you directly from the U.S. Copyright Office.</p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="../assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="../assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>Cease & Desist Letter A customer-specific form you can further customize if someone is infringing on your copyright.Avoid wasting time and money</p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/RedCross.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span> <img src="../assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span> <img src="../assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>Transfer/Assignment Custom assignment template. If you need to sell or otherwise convey your copyright, you have access to your pre-filled in template that you can further customize</p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/RedCross.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="../assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                        <p class="text-sm font-semibold">
                                                        <div class="flex flex-col justify-center">
                                                            <p class="text-sm font-semibold"> </p>

                                                        </div>
                                                        </p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="../assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                        <p class="text-sm font-semibold">
                                                        <div class="flex flex-col justify-center">
                                                            <p class="text-sm font-semibold"> </p>

                                                        </div>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>24-hour Expedited Processing of the preparation of your copyright application. Normal processing time is 5 business days in our Basic package</p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/RedCross.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span> <img src="../assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="../assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="../assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Desktop Packages Start -->

                                        <!-- Mobile Packages Start -->
                                        <div class="show-mobile mobile-packages-form copyright-mobile-form">
                                            <div class="choose-packages-box">
                                                <table cellpadding="0" cellspacing="0" class="pricing-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="first-head"></th>
                                                            <th>
                                                                <div class="package-titles">
                                                                    <div class="column second">
                                                                        <h3>GOLD</h3>
                                                                        <strong><span class="dollar-symbol-change">$</span>199</strong>
                                                                        <!-- <strike><span class="dollar-symbol-change">$</span>78</strike> -->
                                                                        <span class="filing-fee-mobile">(Plus Federal Fee*)</span>
                                                                        <button class="custom-package-btn py-2 px-3 md:py-3.5 md:px-8 font-bold flex items-center justify-center rounded-lg md:rounded-2xl relative overflow-hidden disabled:border-tm-gray-300 disabled:bg-tm-gray-300 disabled:hover:bg-tm-gray-300 disabled:cursor-not-allowed focus-visible:outline-none !px-8 !py-2 !rounded-base border border-solid border-tm-blue bg-tm-blue hover:bg-tm-royal-blue active:bg-tm-blue-200 text-white " type="button"><span class="button_ripple__Kgdu_" style="height: 147px; width: 147px; left: 22.5px; top: -49.5px;"></span>
                                                                            <input required="" type="radio" value="199" name="package_price" data-package_name="COPYRIGHT GOLD PACKAGE" class="package-select" id="box1">
                                                                            <p class="font-bold whitespace-nowrap">
                                                                            </p>
                                                                            <p class="cursor-pointer">Select Plan</p>
                                                                            <p></p>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr even">
                                                                        <div class="td first">
                                                                            <p><span>+</span> Professional Preparation of your federal copyright application including a review by the copyright team for accuracy, completeness and common mistakes</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr even">
                                                                        <div class="td second">
                                                                            <img alt="right" src="../assets/images/GreenCheck.svg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td first">
                                                                            <p><span>+</span> Federal E-Filing Electronic filing of your application with the USPTO with no need to wait for mail or dealing with paper files</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td second">
                                                                            <img alt="right" src="../assets/images/GreenCheck.svg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td first">
                                                                            <p><span>+</span> Certificate of Registration that will be mailed to you directly from the U.S. Copyright Office.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td second">
                                                                            <img alt="right" src="../assets/images/GreenCheck.svg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="choose-packages-box">
                                                <table class="pricing-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="first-head"></th>
                                                            <th>
                                                                <div class="package-titles">
                                                                    <div class="column third">
                                                                        <div class="bestseller bgyelloe">
                                                                            <small>BEST SELLER</small>
                                                                        </div>
                                                                        <h3>DIAMOND</h3>
                                                                        <strong><span class="dollar-symbol-change">$</span>298</strong>
                                                                        <!-- <strike><span class="dollar-symbol-change">$</span>198</strike> -->
                                                                        <span class="filing-fee-mobile">(Plus <span class="dollar-symbol-change">$</span>350 Filing Fee Per Class*)</span>
                                                                        <button class="custom-package-btn py-2 px-3 md:py-3.5 md:px-8 font-bold flex items-center justify-center rounded-lg md:rounded-2xl relative overflow-hidden disabled:border-tm-gray-300 disabled:bg-tm-gray-300 disabled:hover:bg-tm-gray-300 disabled:cursor-not-allowed focus-visible:outline-none !px-8 !py-2 !rounded-base border border-solid border-tm-blue bg-tm-blue hover:bg-tm-royal-blue active:bg-tm-blue-200 text-white " type="button"><span class="button_ripple__Kgdu_" style="height: 147px; width: 147px; left: 22.5px; top: -49.5px;"></span>
                                                                            <input required="" type="radio" value="298" name="package_price" data-package_name="COPYRIGHT DIAMOND PACKAGE" class="package-select" id="box2">
                                                                            <p class="font-bold whitespace-nowrap">
                                                                            </p>
                                                                            <p class="cursor-pointer">Select Plan</p>
                                                                            <p></p>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr even">
                                                                        <div class="td first">
                                                                            <p><span>+</span> Professional Preparation of your federal copyright application including a review by the copyright team for accuracy, completeness and common mistakes</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr even">
                                                                        <div class="td second">
                                                                            <img alt="right" src="../assets/images/GreenCheck.svg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td first">
                                                                            <p><span>+</span> Federal E-Filing Electronic filing of your application with the USPTO with no need to wait for mail or dealing with paper files</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td second">
                                                                            <img alt="right" src="../assets/images/GreenCheck.svg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td first">
                                                                            <p><span>+</span> Certificate of Registration that will be mailed to you directly from the U.S. Copyright Office.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td second">
                                                                            <img alt="right" src="../assets/images/GreenCheck.svg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td first">
                                                                            <p><span>+</span> Cease & Desist Letter A customer-specific form you can further customize if someone is infringing on your copyright.Avoid wasting time and money</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td second">
                                                                            <img alt="right" src="../assets/images/GreenCheck.svg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td first">
                                                                            <p><span>+</span> Transfer/Assignment Custom assignment template. If you need to sell or otherwise convey your copyright, you have access to your pre-filled in template that you can further customize</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td second">
                                                                            <img alt="right" src="../assets/images/GreenCheck.svg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td first">
                                                                            <p><span>+</span> 24-hour Expedited Processing of the preparation of your copyright application. Normal processing time is 5 business days in our Basic package</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="package-info">
                                                                    <div class="tr">
                                                                        <div class="td second">
                                                                            <img alt="right" src="../assets/images/GreenCheck.svg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <!-- Mobile Packages End -->

                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <!-- <li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
                                    <li>
                                        <button id="post_brief" type="button" name="submit" value="" class="btn btn-primary btn-info-full next-step">Save and
                                            continue</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <!-- Jquery 2.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Bootstrap 3.3 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <!-- Multi Select Countries JS -->
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>

    <!-- Registration Form Custom JS -->
    <script src="../assets/js/registration-form.js?v=1.1"></script>

    <!-- Dropify JS -->
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
</body>

<!-- CRM Service -->
<script>
    var api_base_url = "https://dashboard.theincorpsolutions.com/dynamic_form/api/"
    var form = $('#form-upload')

    $(document).ready(function() {

        $(document).on('click', '#post_brief', function(e) {
            e.preventDefault();
            submitBrief();
        })
    })

    async function getApiToken() {
        let endpoint = "token";

        let response = await $.get(api_base_url + endpoint);
        return JSON.parse(response);
    }

    async function submitBrief() {
        let selected_package = $('input[name="package_price"]:checked');

        let package_name = selected_package.data('package_name');
        let package_price = selected_package.val();
        // let api_token = await getApiToken();
        var formData = new FormData(form[0]);
        formData.append("package_name", package_name);
        await $.ajax({
            url: api_base_url + "post/1/", // here 1 is form ID which represents type of form
            cache: false,
            type: "post",
            dataType: 'json',
            contentType: false,
            processData: false,
            data: formData,
            success: function(response) {
                if (response.status == true) {
                    // let payment_page_url = "../checkout.php?lead_id=" + <?= $_GET['lead_id'] ?> + "&package=<?= urlencode($_GET['package']) ?>" + "&price=<?= urlencode($_GET['price']) ?>";
                    let payment_page_url = "../checkout.php?lead_id=" + <?= $_GET['lead_id'] ?> + "&package=" + package_name + "&price=" + package_price;
                    window.location = payment_page_url;
                } else {
                    alert(response.message);
                }
            }
        });
    }


    $('.wrapper').before('<h2 class="country-orign">Select Country of Origin <span class="text-tm-red-required">*</span></h2>');

    $('.mt-3').eq(1).hide();
    $('.mt-3').eq(2).hide();
    $('.mt-3').eq(3).hide();
    $('.mt-3').eq(4).hide();

    $('input[type="checkbox"]').change(function() {
        if ($('input[type="checkbox"]').eq(0).is(':checked')) {
            $('input[type="checkbox"]').eq(0).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(1).show();

        } else {
            $('input[type="checkbox"]').eq(0).parent().css('background', '#fff');
            $('.mt-3').eq(1).hide();
        }

        if ($('input[type="checkbox"]').eq(1).is(':checked')) {
            $('input[type="checkbox"]').eq(1).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(2).show();

        } else {
            $('input[type="checkbox"]').eq(1).parent().css('background', '#fff');
            $('.mt-3').eq(2).hide();

        }

        if ($('input[type="checkbox"]').eq(2).is(':checked')) {
            $('input[type="checkbox"]').eq(2).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(3).show();
        } else {
            $('input[type="checkbox"]').eq(2).parent().css('background', '#fff');
            $('.mt-3').eq(3).hide();
        }

        if ($('input[type="checkbox"]').eq(3).is(':checked')) {
            $('input[type="checkbox"]').eq(3).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(4).show();
        } else {
            $('input[type="checkbox"]').eq(3).parent().css('background', '#fff');
            $('.mt-3').eq(4).hide();
        }
    })


    $('input[type="file"]').change(function() {
        var logoUpload = $('input[type="file"]').eq(0).val().split('\\')[2]
        $('.brandlogo').text(logoUpload)
    })

    $('input[type="file"]').change(function() {
        var logoUpload = $('input[type="file"]').eq(1).val().split('\\')[2]
        $('.brandaudio').text(logoUpload)
    })
</script>

<!-- File Upload -->
<script type="application/javascript">
    let ajaxConfig = {
        ajaxRequester: function(config, uploadFile, pCall, sCall, eCall) {
            let progress = 0
            let interval = setInterval(() => {
                progress += 10;
                pCall(progress)
                if (progress >= 100) {
                    clearInterval(interval)
                    const windowURL = window.URL || window.webkitURL;
                    sCall({
                        data: windowURL.createObjectURL(uploadFile.file)
                    })
                    // eCall("上传异常")
                }
            }, 300)
        }
    }
    $("#demo1").uploader({
        multiple: true,
        ajaxConfig: ajaxConfig,
        autoUpload: false
    })
    $("#demo2").uploader({
        ajaxConfig: ajaxConfig
    })
    $("#demo3").uploader({
        multiple: true,
        defaultValue: [{
            name: "jQuery",
            url: "https://www.jqueryscript.net/dummy/5.jpg"
        }, {
            name: "script",
            url: "https://www.jqueryscript.net/dummy/6.jpg"
        }],
        ajaxConfig: ajaxConfig
    })
</script>

<!-- Onclick Field Show -->
<script>
    $('input[name="trademark_name"]').on('change', function() {
        const displayBlock = $('.mt-3').eq(1);
        let validate = displayBlock.children().find('input.protect')
        // Check if the display block element is currently active
        const isActive = displayBlock.css('display') === 'block';

        // If active, remove the "active" class, otherwise add it
        if (isActive) {
            displayBlock.addClass('active');
            validate.addClass('validate')
        } else {
            displayBlock.removeClass('active');
            validate.removeClass('validate')
        }
    })

    $('input[name="trademark_logo"]').on('change', function() {
        const displayBlock = $('.mt-3').eq(2);
        let validate = displayBlock.children().find('input.protect')
        // Check if the display block element is currently active
        const isActive = displayBlock.css('display') === 'block';

        // If active, remove the "active" class, otherwise add it
        if (isActive) {
            displayBlock.addClass('active');
            validate.addClass('validate')
        } else {
            displayBlock.removeClass('active');
            validate.removeClass('validate')
        }
    })

    $('input[name="trademark_slogan"]').on('change', function() {
        const displayBlock = $('.mt-3').eq(3);
        let validate = displayBlock.children().find('input.protect')
        // Check if the display block element is currently active
        const isActive = displayBlock.css('display') === 'block';

        // If active, remove the "active" class, otherwise add it
        if (isActive) {
            displayBlock.addClass('active');
            validate.addClass('validate')
        } else {
            displayBlock.removeClass('active');
            validate.removeClass('validate')
        }
    })

    $('input[name="trademark_information.is_sound_protected"]').on('change', function() {
        const displayBlock = $('.mt-3').eq(4);
        let validate = displayBlock.children().find('input.protect')
        // Check if the display block element is currently active
        const isActive = displayBlock.css('display') === 'block';

        // If active, remove the "active" class, otherwise add it
        if (isActive) {
            displayBlock.addClass('active');
            validate.addClass('validate')
        } else {
            displayBlock.removeClass('active');
            validate.removeClass('validate')
        }
    })

    $('#demo2').change(function() {
        var logoUpload = $('#demo2').eq(0).val().split('\\')[2]
        $('.brandlogo').text(logoUpload)

    })


    $(document).ready(function() {

        $('textarea[name="brand_description"]').on('keyup change', function() {
            if ($('textarea[name="brand_description"]').val() === '') {
                $('#step2 .next-step').attr('disabled', 'true');
            } else {
                $('#step2 .next-step').removeAttr('disabled');
            }
        })

        $('.drawer.rounded ul').on('DOMSubtreeModified', function() {
            if ($('.input-container').is(':empty')) {
                $('div#step3 .next-step').attr('disabled', 'true')
            } else {
                $('div#step3 .next-step').removeAttr('disabled')
            }
        })


        $('.protect').on("change keyup", async function() {
            let disable = 1;
            var fields = $(document).find('.validate')
            await $(fields).each(function(i, field) {
                console.log($(field).val())
                if ($(field).val() != "" || $(field).val() == null) {
                    disable = 0;
                } else {
                    disable = 1;
                }
            })
            if (disable == 0) {
                $('#step1 .next-step').removeAttr('disabled');
            } else {
                $('#step1 .next-step').attr('disabled', 'true');
            }
        })


        $('#demo2').change(function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result);
                $('#imagePreview').show();
            }
            reader.readAsDataURL(this.files[0]);
        });
    });


    $(document).ready(function() {

        $("#demo2").change(async function() {

            var fd = new FormData();

            var files = $('#demo2')[0].files;

            // Check file selected or not
            if (files.length > 0) {

                fd.append('file', files[0]);
                $('#step1 .next-step').attr('disabled', 'true');

                await $.ajax({
                    url: 'upload.php',
                    type: 'post',
                    data: fd,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 1) {
                            var extension = response.extension;
                            var path = response.path;

                            $('.prevel').hide();
                            if (extension == 'pdf' || extension == 'docx') {
                                $("#fileprev").attr("href", path);
                                $("#fileprev").show();
                                $('#step1 .next-step').removeAttr('disabled');
                            } else {
                                $("#imgprev").attr("src", path);
                                $("#imgprev").show();
                            }

                        } else {

                            $('.prev-step').click()

                            alert('The file type must be in jpeg and png');

                        }
                    }
                });
            }
        });
    });
</script>

<!-- Dropify -->
<script>
    jQuery('.dropify').dropify();
</script>

<!--Package Select Form Button Script-->
<script>
    // Disable the button by default
    document.getElementById("post_brief").disabled = true;

    // Add event listener to elements with class "package-select"
    var packageSelectInputs = document.getElementsByClassName("package-select");
    for (var i = 0; i < packageSelectInputs.length; i++) {
        packageSelectInputs[i].addEventListener("click", function() {
            // Enable the button when any element with class "package-select" is clicked
            document.getElementById("post_brief").disabled = false;
        });
    }
</script>

<!-- For Uk Symbol Change -->

<script>
    document.addEventListener("DOMContentLoaded", async function() {
        try {
            const response = await fetch("https://ipapi.co/json/");
            const data = await response.json();
            if (data.country_code === "GB") {
                changeSymbolToGBP();
                changeImagesToUK();
            }
        } catch (error) {
            console.error("Error fetching location:", error);
        }

        // Function to change "$" to "£" inside elements with the class "dollar-symbol-change"
        function changeSymbolToGBP() {
            document.querySelectorAll(".dollar-symbol-change").forEach((element) => {
                element.innerHTML = element.innerHTML.replace(/\$/g, "£");
            });
        }

        // Function to change USA flags to UK flags
        function changeImagesToUK() {
            document.querySelectorAll(".flag-home-usa").forEach((img) => {
                img.src = img.src.replace("flag-home-usa", "flag-home-uk").replace("usa-round-flag.webp", "uk-round-flag.webp");
            });
            document.querySelectorAll(".flag-about-usa").forEach((img) => {
                img.src = img.src.replace("flag-about-usa", "flag-about-uk").replace("usa-flag-about.webp", "uk-flag-about.webp");
            });
            document.querySelectorAll(".flag-pricing-usa").forEach((img) => {
                img.src = img.src.replace("flag-pricing-usa", "flag-pricing-uk").replace("flag-us.svg", "flag-uk.webp");
            });
        }
    });
</script>

</html>