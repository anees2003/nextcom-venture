    <div class='clearfix'></div>

    <section class="our-story-page about-banner-section bannermain innerbanner" style="background:url('<?= asset('images/contact-us-banner.jpg') ?>')">
       <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="abt-banner-caption">
                        <h2 class="abt-text3">Contact Us</h2>
                        <p class="text23">Contact Us now to learn more about our services and how we help brands grow in today’s highly competitive yet profitable E-Commerce market.</p>
                    </div>
                </div>
           </div>
        </div>
    </section>

    <section class="contact-page-section">
        <div class="testi-quick">
            <div class="container">
                <div class="row align-items-center t">
                    <div class="col-lg-6 col-md-6  col-sm-6">
                        <div class="contact-page-headings all-default-ccontent">
                            <div class="defalt-heading">
                                <h2>Inquire <span>Now!</span></h2>
                            </div>
                            <div class="deflt-p">
                                <p>To ensure every client gets the attention they deserve, we only onboard a select number of clients each month. Schedule a call with us to learn more about our automation services. Our aim is to be your ultimate automation partner, helping you achieve your passive income goals hassle-free.</p>
                            </div>
                            <div class="cont-demo-page-btn about-btn btn-bnnr">
                                <a class="btn1-main scroll-to" href="#demoCall" data-ref="#demoCall" type="button">Schedule a Call</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <div class="quick-contact">
                                <div class="all-default-ccontent abttt">
                                    <div class="sub-heading">
                                        <h3>Get Your Free</h3>
                                    </div>
                                    <div class="defalt-heading">
                                        <h2>Consultation & Quote</h2>
                                    </div>
                                </div>
                                <div class="quick-form">
                                    <form class="form_submit" id='form21' method="post" action="<?= url('save_contact/2') ?>" autocomplete="off">
                                        <div class="col-md-12">
                                            <div id="form_success" class="form_success"></div>
                                            <div id="err_msg_1" class="err_msg_1"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div role="form" class="wpcf7" id="wpcf7-f264-o2" lang="en-US" dir="ltr">
                                                <input type="hidden" name="_token" value="<?= e(csrf_token()) ?>">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <img src="<?= asset('images/user11.png') ?>" class="img-fluid">
                                                        <input type="text" class="form-control" maxlength="150" id='inquiry_form_name' name="inquiry_form_name" placeholder="NAME" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <img src="<?= asset('images/mail11.png') ?>" class="img-fluid">
                                                        <input type="email" class="form-control" maxlength="100" id='inquiry_form_email' name="inquiry_form_email" placeholder="EMAIL" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <img src="<?= asset('images/phones.png') ?>" class="img-fluid">
                                                        <input id='inquiry_form_phones' name="inquiry_form_phone" class="form-control" value="" type="tel" placeholder="Phone" required="">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 form-group">
                                                    <img src="<?= asset('images/world.png') ?>" class="img-fluid">

                                                                                                        <select name="inquiry_country" id="country" class="form-control">
                                                        <option value="">Select Country</option>
                                                                                                                <option value="Andorra">Andorra</option>
                                                                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                                                                <option value="Afghanistan">Afghanistan</option>
                                                                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                                                                <option value="Anguilla">Anguilla</option>
                                                                                                                <option value="Albania">Albania</option>
                                                                                                                <option value="Armenia">Armenia</option>
                                                                                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                                                                <option value="Angola">Angola</option>
                                                                                                                <option value="Argentina">Argentina</option>
                                                                                                                <option value="Austria">Austria</option>
                                                                                                                <option value="Australia">Australia</option>
                                                                                                                <option value="Aruba">Aruba</option>
                                                                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                                                                <option value="Barbados">Barbados</option>
                                                                                                                <option value="Bangladesh">Bangladesh</option>
                                                                                                                <option value="Belgium">Belgium</option>
                                                                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                                                                <option value="Bulgaria">Bulgaria</option>
                                                                                                                <option value="Bahrain">Bahrain</option>
                                                                                                                <option value="Burundi">Burundi</option>
                                                                                                                <option value="Benin">Benin</option>
                                                                                                                <option value="Bermuda">Bermuda</option>
                                                                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                                                                <option value="Bolivia">Bolivia</option>
                                                                                                                <option value="Brazil">Brazil</option>
                                                                                                                <option value="Bahamas">Bahamas</option>
                                                                                                                <option value="Bhutan">Bhutan</option>
                                                                                                                <option value="Botswana">Botswana</option>
                                                                                                                <option value="Belarus">Belarus</option>
                                                                                                                <option value="Belize">Belize</option>
                                                                                                                <option value="Canada">Canada</option>
                                                                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                                                                <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                                                                                                <option value="Central African Republic">Central African Republic</option>
                                                                                                                <option value="Congo">Congo</option>
                                                                                                                <option value="Switzerland">Switzerland</option>
                                                                                                                <option value="Cote D&#039;Ivoire (Ivory Coast)">Cote D&#039;Ivoire (Ivory Coast)</option>
                                                                                                                <option value="Cook Islands">Cook Islands</option>
                                                                                                                <option value="Chile">Chile</option>
                                                                                                                <option value="Cameroon">Cameroon</option>
                                                                                                                <option value="China">China</option>
                                                                                                                <option value="Colombia">Colombia</option>
                                                                                                                <option value="Costa Rica">Costa Rica</option>
                                                                                                                <option value="Cuba">Cuba</option>
                                                                                                                <option value="Cape Verde">Cape Verde</option>
                                                                                                                <option value="Christmas Island">Christmas Island</option>
                                                                                                                <option value="Cyprus">Cyprus</option>
                                                                                                                <option value="Czech Republic">Czech Republic</option>
                                                                                                                <option value="Germany">Germany</option>
                                                                                                                <option value="Djibouti">Djibouti</option>
                                                                                                                <option value="Denmark">Denmark</option>
                                                                                                                <option value="Dominica">Dominica</option>
                                                                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                                                                <option value="Algeria">Algeria</option>
                                                                                                                <option value="Ecuador">Ecuador</option>
                                                                                                                <option value="Estonia">Estonia</option>
                                                                                                                <option value="Egypt">Egypt</option>
                                                                                                                <option value="Western Sahara">Western Sahara</option>
                                                                                                                <option value="Eritrea">Eritrea</option>
                                                                                                                <option value="Spain">Spain</option>
                                                                                                                <option value="Ethiopia">Ethiopia</option>
                                                                                                                <option value="Finland">Finland</option>
                                                                                                                <option value="Fiji">Fiji</option>
                                                                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                                                                <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                                                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                                                                <option value="France">France</option>
                                                                                                                <option value="Gabon">Gabon</option>
                                                                                                                <option value="United Kingdom">United Kingdom</option>
                                                                                                                <option value="Grenada">Grenada</option>
                                                                                                                <option value="Georgia">Georgia</option>
                                                                                                                <option value="French Guiana">French Guiana</option>
                                                                                                                <option value="Ghana">Ghana</option>
                                                                                                                <option value="Gibraltar">Gibraltar</option>
                                                                                                                <option value="Greenland">Greenland</option>
                                                                                                                <option value="Gambia">Gambia</option>
                                                                                                                <option value="Guinea">Guinea</option>
                                                                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                                                                <option value="Greece">Greece</option>
                                                                                                                <option value="S. Georgia and S. Sandwich Islands">S. Georgia and S. Sandwich Islands</option>
                                                                                                                <option value="Guatemala">Guatemala</option>
                                                                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                                                                <option value="Guyana">Guyana</option>
                                                                                                                <option value="Hong Kong">Hong Kong</option>
                                                                                                                <option value="Honduras">Honduras</option>
                                                                                                                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                                                                                <option value="Haiti">Haiti</option>
                                                                                                                <option value="Hungary">Hungary</option>
                                                                                                                <option value="Indonesia">Indonesia</option>
                                                                                                                <option value="Ireland">Ireland</option>
                                                                                                                <option value="Israel">Israel</option>
                                                                                                                <option value="India">India</option>
                                                                                                                <option value="Iraq">Iraq</option>
                                                                                                                <option value="Iran">Iran</option>
                                                                                                                <option value="Iceland">Iceland</option>
                                                                                                                <option value="Italy">Italy</option>
                                                                                                                <option value="Jamaica">Jamaica</option>
                                                                                                                <option value="Jordan">Jordan</option>
                                                                                                                <option value="Japan">Japan</option>
                                                                                                                <option value="Kenya">Kenya</option>
                                                                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                                                                <option value="Cambodia">Cambodia</option>
                                                                                                                <option value="Kiribati">Kiribati</option>
                                                                                                                <option value="Comoros">Comoros</option>
                                                                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                                                                <option value="Korea (North)">Korea (North)</option>
                                                                                                                <option value="South Korea">South Korea</option>
                                                                                                                <option value="Kuwait">Kuwait</option>
                                                                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                                                                <option value="Laos">Laos</option>
                                                                                                                <option value="Lebanon">Lebanon</option>
                                                                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                                                                <option value="Liberia">Liberia</option>
                                                                                                                <option value="Lesotho">Lesotho</option>
                                                                                                                <option value="Lithuania">Lithuania</option>
                                                                                                                <option value="Luxembourg">Luxembourg</option>
                                                                                                                <option value="Latvia">Latvia</option>
                                                                                                                <option value="Libya">Libya</option>
                                                                                                                <option value="Morocco">Morocco</option>
                                                                                                                <option value="Monaco">Monaco</option>
                                                                                                                <option value="Moldova">Moldova</option>
                                                                                                                <option value="Madagascar">Madagascar</option>
                                                                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                                                                <option value="Macedonia">Macedonia</option>
                                                                                                                <option value="Mali">Mali</option>
                                                                                                                <option value="Myanmar">Myanmar</option>
                                                                                                                <option value="Mongolia">Mongolia</option>
                                                                                                                <option value="Macao">Macao</option>
                                                                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                                                                <option value="Martinique">Martinique</option>
                                                                                                                <option value="Mauritania">Mauritania</option>
                                                                                                                <option value="Montserrat">Montserrat</option>
                                                                                                                <option value="Malta">Malta</option>
                                                                                                                <option value="Mauritius">Mauritius</option>
                                                                                                                <option value="Maldives">Maldives</option>
                                                                                                                <option value="Malawi">Malawi</option>
                                                                                                                <option value="Mexico">Mexico</option>
                                                                                                                <option value="Malaysia">Malaysia</option>
                                                                                                                <option value="Mozambique">Mozambique</option>
                                                                                                                <option value="Namibia">Namibia</option>
                                                                                                                <option value="New Caledonia">New Caledonia</option>
                                                                                                                <option value="Niger">Niger</option>
                                                                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                                                                <option value="Nigeria">Nigeria</option>
                                                                                                                <option value="Nicaragua">Nicaragua</option>
                                                                                                                <option value="Netherlands">Netherlands</option>
                                                                                                                <option value="Norway">Norway</option>
                                                                                                                <option value="Nepal">Nepal</option>
                                                                                                                <option value="Nauru">Nauru</option>
                                                                                                                <option value="Niue">Niue</option>
                                                                                                                <option value="New Zealand">New Zealand</option>
                                                                                                                <option value="Oman">Oman</option>
                                                                                                                <option value="Panama">Panama</option>
                                                                                                                <option value="Peru">Peru</option>
                                                                                                                <option value="French Polynesia">French Polynesia</option>
                                                                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                                                                <option value="Philippines">Philippines</option>
                                                                                                                <option value="Pakistan">Pakistan</option>
                                                                                                                <option value="Poland">Poland</option>
                                                                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                                                                <option value="Pitcairn">Pitcairn</option>
                                                                                                                <option value="Palestinian Territory">Palestinian Territory</option>
                                                                                                                <option value="Portugal">Portugal</option>
                                                                                                                <option value="Palau">Palau</option>
                                                                                                                <option value="Paraguay">Paraguay</option>
                                                                                                                <option value="Qatar">Qatar</option>
                                                                                                                <option value="Reunion">Reunion</option>
                                                                                                                <option value="Romania">Romania</option>
                                                                                                                <option value="Russia">Russia</option>
                                                                                                                <option value="Rwanda">Rwanda</option>
                                                                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                                                                <option value="Seychelles">Seychelles</option>
                                                                                                                <option value="Sudan">Sudan</option>
                                                                                                                <option value="Sweden">Sweden</option>
                                                                                                                <option value="Singapore">Singapore</option>
                                                                                                                <option value="Saint Helena">Saint Helena</option>
                                                                                                                <option value="Slovenia">Slovenia</option>
                                                                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                                                                <option value="Slovakia">Slovakia</option>
                                                                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                                                                <option value="San Marino">San Marino</option>
                                                                                                                <option value="Senegal">Senegal</option>
                                                                                                                <option value="Somalia">Somalia</option>
                                                                                                                <option value="Suriname">Suriname</option>
                                                                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                                                                <option value="El Salvador">El Salvador</option>
                                                                                                                <option value="Syria">Syria</option>
                                                                                                                <option value="Swaziland">Swaziland</option>
                                                                                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                                                                <option value="Chad">Chad</option>
                                                                                                                <option value="French Southern Territories">French Southern Territories</option>
                                                                                                                <option value="Togo">Togo</option>
                                                                                                                <option value="Thailand">Thailand</option>
                                                                                                                <option value="Tajikistan">Tajikistan</option>
                                                                                                                <option value="Tokelau">Tokelau</option>
                                                                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                                                                <option value="Tunisia">Tunisia</option>
                                                                                                                <option value="Tonga">Tonga</option>
                                                                                                                <option value="Republic of Türkiye">Republic of Türkiye</option>
                                                                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                                                                <option value="Tuvalu">Tuvalu</option>
                                                                                                                <option value="Taiwan">Taiwan</option>
                                                                                                                <option value="Tanzania">Tanzania</option>
                                                                                                                <option value="Ukraine">Ukraine</option>
                                                                                                                <option value="Uganda">Uganda</option>
                                                                                                                <option value="Uruguay">Uruguay</option>
                                                                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                                                                <option value="Venezuela">Venezuela</option>
                                                                                                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                                                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                                                                                <option value="Vietnam">Vietnam</option>
                                                                                                                <option value="Vanuatu">Vanuatu</option>
                                                                                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                                                                <option value="Samoa">Samoa</option>
                                                                                                                <option value="Yemen">Yemen</option>
                                                                                                                <option value="Mayotte">Mayotte</option>
                                                                                                                <option value="South Africa">South Africa</option>
                                                                                                                <option value="Zambia">Zambia</option>
                                                                                                                <option value="Zaire (former)">Zaire (former)</option>
                                                                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                                                                                <option value="USA">USA</option>
                                                                                                                <option value="American Samoa">American Samoa</option>
                                                                                                                <option value="Antarctica">Antarctica</option>
                                                                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                                                                <option value="Curacao">Curacao</option>
                                                                                                                <option value="East Timor">East Timor</option>
                                                                                                                <option value="Guam">Guam</option>
                                                                                                                <option value="Isle of Man">Isle of Man</option>
                                                                                                                <option value="Jersey">Jersey</option>
                                                                                                                <option value="Kosovo">Kosovo</option>
                                                                                                                <option value="Montenegro">Montenegro</option>
                                                                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                                                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                                                                                <option value="Saint Martin">Saint Martin</option>
                                                                                                                <option value="Serbia">Serbia</option>
                                                                                                                <option value="Sint Maarten">Sint Maarten</option>
                                                                                                                <option value="South Sudan">South Sudan</option>
                                                                                                                <option value="Vatican">Vatican</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group full msg-quick-c">
                                                    <img src="<?= asset('images/msg11.png') ?>" class="img-fluid">
                                                    <textarea id='inquiry_form_message' name="inquiry_form_message" class="form-control" maxlength="1500" rows="5" placeholder="WRITE YOUR MESSAGE WE WILL HELP YOU" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group check-agree-c">
                                                    <label class="agree"><input type="checkbox" >
                                                    <span>I agree to receive transactional SMS from <?= e(brand('name')) ?> related to my inquiry (sales updates, order status, customer support). Message frequency varies. Message & data rates may apply. Reply STOP to opt out, HELP for help. View our <a href="<?= url('terms-and-services') ?>">Terms and Conditions</a> and <a href="<?= url('privacy-policy') ?>">Privacy Policy</a>.</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group check-agree-c">
                                                    <label class="agree"><input type="checkbox" >
                                                        <span><span>I agree to receive marketing & promotional SMS from <?= e(brand('name')) ?> (offers, new services, deals). Message frequency varies. Message & data rates may apply. Reply STOP to opt out, HELP for help. View our <a href="<?= url('terms-and-services') ?>">Terms and Conditions</a> and <a href="<?= url('privacy-policy') ?>">Privacy Policy</a>.</span></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row align-items-center">
                                            <div class="col-md-12 col-sm-12 col-xs-6 col-12 cap_codee">
                                                <button id='inquiry_form_btn' class="btn btn-primary inquiry_form_btn" type="submit" title="Submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="global-maps-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="contact-page-headings all-default-ccontent">
                            <div class="defalt-heading">
                                <h2>Global <span>Operations</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                    <div class="contact-page-map">
                        <img src="<?= asset('images/contact-maps.png') ?>" class="img-fluid" alt="">
                        <div class="img-globl-mpp">
                            <span class="map-flg4 all-flags">
                                <img src="<?= asset('images/flag4.png') ?>" class="img-fluid" alt="">
                            </span>
                            <span class="map-flg3 all-flags">
                                <img src="<?= asset('images/flag3.png') ?>" class="img-fluid" alt="">
                            </span>
                            <span class="map-flg1 all-flags">
                                <img src="<?= asset('images/flag1.png') ?>" class="img-fluid" alt="">
                            </span>
                            <span class="map-flg2 all-flags">
                                <img src="<?= asset('images/flag2.png') ?>" class="img-fluid" alt="">
                            </span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            </section>

    <section class="maintestimonials-new" style="background:url('<?= asset('images/testi-bgg.jpg') ?>')">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-8">
                    <div class="testimonial-heading-bg all-default-ccontent">
                        <div class="defalt-heading">
                            <h2>Our <span>Customer</span> Feedback.</h2>
                        </div>
                        <div class="deflt-p">
                            <p>Experience the power of customer satisfaction firsthand.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feedback-btn btn-bnnr">
                        <a class="btn1-main" href="<?= url('success-story') ?>" type="button">View All <img src="<?= asset('images/arrow2.png') ?>" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="main-testi-wrapper">
                    <div class="owl-carousel owl-theme owl-carousel-ppp">
                        <div class="item">
        <div class="cust-cust">
            <div class="inner-testimonial" style="background:url('<?= asset('uploads/images/videothumbnail/0109179001715937594-pd-department.png') ?>')">
                <div class="testi-user">
                    <div class="testy">
                        <h4>Mike</h4>
                    </div>
                    <span>
                        <a data-fancybox="gallery" href="https://youtu.be/dpHStjd0k-I">
                            <img src="<?= asset('images/video-icon.png') ?>" class="img-fluid" alt=""
                                style="width: auto !important;">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="cust-cust">
            <div class="inner-testimonial" style="background:url('<?= asset('uploads/images/videothumbnail/0110869001715249858-pd-department.png') ?>')">
                <div class="testi-user">
                    <div class="testy">
                        <h4>Julia</h4>
                    </div>
                    <span>
                        <a data-fancybox="gallery" href="https://youtu.be/eCuij2F71fc">
                            <img src="<?= asset('images/video-icon.png') ?>" class="img-fluid" alt=""
                                style="width: auto !important;">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="cust-cust">
            <div class="inner-testimonial" style="background:url('<?= asset('uploads/images/videothumbnail/0574650001715249741-pd-department.png') ?>')">
                <div class="testi-user">
                    <div class="testy">
                        <h4>Ava James</h4>
                    </div>
                    <span>
                        <a data-fancybox="gallery" href="https://youtu.be/zTlUecCf2gY">
                            <img src="<?= asset('images/video-icon.png') ?>" class="img-fluid" alt=""
                                style="width: auto !important;">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="cust-cust">
            <div class="inner-testimonial" style="background:url('<?= asset('uploads/images/videothumbnail/0681660001715249487-pd-department.png') ?>')">
                <div class="testi-user">
                    <div class="testy">
                        <h4>Michael S</h4>
                    </div>
                    <span>
                        <a data-fancybox="gallery" href="https://youtu.be/sjam52yr234">
                            <img src="<?= asset('images/video-icon.png') ?>" class="img-fluid" alt=""
                                style="width: auto !important;">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="cust-cust">
            <div class="inner-testimonial" style="background:url('<?= asset('uploads/images/videothumbnail/0728055001715249422-pd-department.png') ?>')">
                <div class="testi-user">
                    <div class="testy">
                        <h4>Sarah Oscar</h4>
                    </div>
                    <span>
                        <a data-fancybox="gallery" href="https://youtu.be/DGK4PN-4YwQ">
                            <img src="<?= asset('images/video-icon.png') ?>" class="img-fluid" alt=""
                                style="width: auto !important;">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="cust-cust">
            <div class="inner-testimonial" style="background:url('<?= asset('uploads/images/videothumbnail/0078898001715249258-pd-department.png') ?>')">
                <div class="testi-user">
                    <div class="testy">
                        <h4>Eric</h4>
                    </div>
                    <span>
                        <a data-fancybox="gallery" href="https://youtu.be/ZFu_R8LIA8A">
                            <img src="<?= asset('images/video-icon.png') ?>" class="img-fluid" alt=""
                                style="width: auto !important;">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="successs-section">
        <div class="container">
            <div class="successs-heading-bg all-default-ccontent" data-aos="fade-down" data-aos-duration="1500">
                <div class="defalt-heading">
                    <h2>SUCCESS STORIES</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="success-tabs">
                    <ul class="nav md-pills flex-wrap" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-bs-toggle="tab" href="#amazon" role="tab"><img src="<?= asset('images/success1.png') ?>" class="img-fluid" alt=""> Amazon</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="tab" href="#shopify" role="tab"><img src="<?= asset('images/success2.png') ?>" class="img-fluid" alt=""> Shopify</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="tab" href="#tiktok" role="tab"><img src="<?= asset('images/success3.png') ?>" class="img-fluid" alt=""> Tiktok shop</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="tab" href="#walmart" role="tab"><img src="<?= asset('images/success4.png') ?>" class="img-fluid" alt=""> Walmart</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div  class="success-main-div">
                <div class="tab-content">
                    <div class="tab-pane fade show in active" id="amazon" role="tabpanel">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs1">
                                    <img class="img-fluid" src="<?= asset('images/screen1.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs2">
                                    <img class="img-fluid" src="<?= asset('images/screen2.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs3">
                                    <img class="img-fluid" src="<?= asset('images/screen3.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs3">
                                    <img class="img-fluid" src="<?= asset('images/screen4.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show in" id="shopify" role="tabpanel">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="success-img1 successs1">
                                    <img class="img-fluid" src="<?= asset('images/shopify1.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="success-img1 successs3">
                                    <img class="img-fluid" src="<?= asset('images/shopify2.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="success-img1 successs3">
                                    <img class="img-fluid" src="<?= asset('images/shopify3.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show in" id="tiktok" role="tabpanel">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs1">
                                    <img class="img-fluid" src="<?= asset('images/tiktok1.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs2">
                                    <img class="img-fluid" src="<?= asset('images/tiktok2.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs3">
                                    <img class="img-fluid" src="<?= asset('images/tiktok3.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs3">
                                    <img class="img-fluid" src="<?= asset('images/tiktok4.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show in" id="walmart" role="tabpanel">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs1">
                                    <img class="img-fluid" src="<?= asset('images/w11.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs2">
                                    <img class="img-fluid" src="<?= asset('images/w2.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs2">
                                    <img class="img-fluid" src="<?= asset('images/w3.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="success-img1 successs2">
                                    <img class="img-fluid" src="<?= asset('images/w4.jpg') ?>" alt="<?= e(brand('name')) ?>" title="<?= e(brand('name')) ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="schedule-section" id="demoCall">
        <div class="container">
            <div class="successs-heading-bg all-default-ccontent" data-aos="fade-down" data-aos-duration="1500">
                <div class="defalt-heading">
                    <h2>Schedule a demo call to learn more</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="demo-call-content">
                        <div class="demo-call-logo">
                            <img src="<?= asset('images/demo-call-logo.png') ?>" class="img-fluid" alt="">
                        </div>
                        <div class="deflt-p">
                            <p>Hi there, </br>I'm excited to connect with you! Before our call, please take some time to review the materials I'll be sending over to your email. It would be great if you could set aside at least 30 minutes for our discussion. </br>Looking forward to our conversation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">

                    <div class="schedule-demo-call scrollbar-package scrollbar d-none">
                        <div class="schedule-back-arrow">
                            <img src="<?= asset('images/arrow1.png') ?>" class="img-fluid">
                        </div>
                        <div class="demo-call-form">
                            <form class="form_submits" id='form211' method="post" action="<?= url('save_contact/4') ?>" autocomplete="off">
                                <div class="col-md-12">
                                    <div id="form_success" class="form_success"></div>
                                    <div id="err_msg_1" class="err_msg_1"></div>
                                </div>
                                <div class="col-md-12">
                                    <div role="form" class="wpcf7" id="wpcf7-f264-o2" lang="en-US" dir="ltr">
                                        <input type="hidden" name="_token" value="<?= e(csrf_token()) ?>">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" maxlength="150" id='con_name' name="con_name" placeholder="Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" maxlength="150" id='con_email' name="con_email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="phone" class="form-control" id='con_phone' name="con_phone"  value=""  required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group select-opt">
                                            <label>What services are you interested in?</label>
                                            <select id="con_interested" name="con_interested" class="form-control">
                                                <option>Select Services</option>
                                                <option value="Amazon (PL/FB)">Amazon (PL/FB)</option>
                                                <option value="Shopify (DS/PL)">Shopify (DS/PL)</option>
                                                <option value="Walmart ">Walmart </option>
                                                <option value="TikTok Shop">TikTok Shop</option>
                                                <option value="Amazon 2 step Dropshipping">Amazon 2 step Dropshipping</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Will you prefer or consider to launch multi store? If yes, What platforms will you consider?</label>
                                            <textarea id='con_multi_store' name="con_multi_store" class="form-control" rows="2" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>What is the your level of interest investing into an automated e-commerce asset? 1-10 *</label>
                                            <input type="number" class="form-control" id='con_level_interest' name="con_level_interest" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Where do you live? just the state *</label>
                                            <input type="text" class="form-control" id='con_live' name="con_live" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Have you ever heard of <?= e(brand('name')) ?>? yes or no *</label>
                                            <input type="text" class="form-control" id='con_amazon_auto' name="con_amazon_auto" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group check-agree-c">
                                            <!--<label class="agree"><input type="checkbox" required="">-->
                                            <!--<input type="hidden" name="datetime" value="">-->
                                            <input  id="final_date" name="datetime" type="text">
                                            <!--<span>I have read and accept  the privacy policy.</span></label>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row row align-items-center">
                                    <div class="col-md-12 col-sm-12 col-xs-6 col-12 cap_codee">
                                        <button id='con_form_btn' class="btn btn-primary con_form_btns" type="submit" title="Submit">Schedule Meeting</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="demo-date-time show">
                        <div class="set-date-head">
                            <h5>Select Date & Time</h5>
                        </div>

                        <div class="calender-container">
                            <div id="datepicker"></div>
                            <p style="display:none">Date: <input type="text" id="datepicker2" disabled></p>
                            <ul class="widgets-time-slots scrollbar-package scrollbar">
                                <li data-time="07:00" class="widgets-time-slot"><span>07:00 AM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="07:30" class="widgets-time-slot"><span>07:30 AM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="08:00" class="widgets-time-slot"><span>08:00 AM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="08:30" class="widgets-time-slot"><span>08:30 AM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="09:00" class="widgets-time-slot"><span>09:00 AM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="09:30" class="widgets-time-slot"><span>09:30 AM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="10:00" class="widgets-time-slot"><span>10:00 AM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="10:30" class="widgets-time-slot"><span>10:30 AM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="11:00" class="widgets-time-slot"><span>11:00 AM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="11:30" class="widgets-time-slot"><span>11:30 AM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="12:00" class="widgets-time-slot"><span>12:00 PM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="12:30" class="widgets-time-slot"><span>12:30 PM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="13:00" class="widgets-time-slot"><span>01:00 PM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="13:30" class="widgets-time-slot"><span>01:30 PM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="14:00" class="widgets-time-slot"><span>02:00 PM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="14:30" class="widgets-time-slot"><span>02:30 PM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="15:00" class="widgets-time-slot"><span>03:00 PM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="15:30" class="widgets-time-slot"><span>03:30 PM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="14:00" class="widgets-time-slot"><span>04:00 PM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                                <li data-time="14:30" class="widgets-time-slot"><span>04:30 PM </span> <button class="widgets-time-slot-btn btn btn-primary">Select</button> </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-1">
                    <div class="demo-year">
                        <h2>2024</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
