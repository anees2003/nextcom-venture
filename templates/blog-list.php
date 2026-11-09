    <div class='clearfix'></div>

    <section class="blog-page about-banner-section bannermain innerbanner" style="background:url('<?= asset('images/blog-banner.jpg') ?>')">
       <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="blog-banner-caption">
                        <h2 class="abt-text3">Blogs</h2>
                        <p class="text23">Discover Expert Insights, Tips, and Trends in E-Commerce!</br> Let's Navigate the World of Online Business Together!</p>
                    </div>
                </div>
           </div>
        </div>
    </section>

    <section class="blog-page-section">
    	<div class="container">
    	    <div class="row">

        	    <div class="col-sm-7 col-md-8 col-lg-9">
            	    <div class="all-blog">
                                                <?php foreach ($page_posts as $p): ?>
<div class="single-blog" data-aos="fade-up" data-aos-duration="1500">
                            <div class="main-blogs-img">
                                <a href="<?= url('blogs/' . $p['slug']) ?>" >
                                    <div class="blog-bg-img" style="background:url('<?= asset($p['listing_image']) ?>')"></div>
                                </a>
                            </div>
                            <div class="blo-til-new">
                                <a href="<?= url('blogs/' . $p['slug']) ?>" class="blo-titles-new">
                                    <h4><?= $p['title'] ?></h4>
                                </a>
                             </div>
                            <div class=" blog-pge-btn">
                                <span class="date-formatt-new"><img src="<?= asset('images/date-blog.png') ?>" class="img-fluid" alt=""> <?= e(date('M d, Y', strtotime($p['date']))) ?> </span>
                            </div>
                            <div class="blg-pg">
                                 <p class="blog-description"><?= $p['excerpt'] ?></p>
                            </div>
                            <div class=" blog-pge-btn">
                                <div class="main-clicks">
                                    <a class="blog-anchors" type="button" href="<?= url('blogs/' . $p['slug']) ?>">Read more</a>
                                </div>
                            </div>
                        </div>

<?php endforeach; ?>
                                            </div>
               </div>

                <div class="col-sm-5 col-md-4 col-lg-3">
                    <div class="main-blogs-list" data-aos="fade-left" data-aos-duration="1500">
                        <h4>Recent Posts</h4>
                        <div class="recents-blogs-main-list">

                                <div class="list-wrapss">
                                    <div class="recent-blogs-main">
                                                                                <div class="recent-blogs-main-2">
                                            <a href="<?= url('blogs/how-automation-improves-efficiency-in-dropshipping') ?>" >
                                                <img src="<?= asset('uploads/images/blogs/0762735001729289226-how-automation-impro.jpg') ?>" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="recent-blogs-main-1">
                                            <a class="recent-blog-title" href="<?= url('blogs/how-automation-improves-efficiency-in-dropshipping') ?>">
                                                How Automation Improves Efficiency In Dropshipping
                                            </a>
                                            <span><img src="<?= asset('images/date-blog1.png') ?>" class="img-fluid" alt=""> Oct 18, 2024 </span>
                                                                                    </div>
                                    </div>
                                </div>

                                <div class="list-wrapss">
                                    <div class="recent-blogs-main">
                                                                                <div class="recent-blogs-main-2">
                                            <a href="<?= url('blogs/strategies-for-scaling-a-dropshipping-business') ?>" >
                                                <img src="<?= asset('uploads/images/blogs/0530588001729293430-strategies-for-scali.jpg') ?>" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="recent-blogs-main-1">
                                            <a class="recent-blog-title" href="<?= url('blogs/strategies-for-scaling-a-dropshipping-business') ?>">
                                                Strategies For Scaling a Dropshipping Business
                                            </a>
                                            <span><img src="<?= asset('images/date-blog1.png') ?>" class="img-fluid" alt=""> Oct 18, 2024 </span>
                                                                                    </div>
                                    </div>
                                </div>

                                <div class="list-wrapss">
                                    <div class="recent-blogs-main">
                                                                                <div class="recent-blogs-main-2">
                                            <a href="<?= url('blogs/exploring-the-hardest-aspects-of-dropshipping') ?>" >
                                                <img src="<?= asset('uploads/images/blogs/0244764001715577996-exploring-the-hardes.png') ?>" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="recent-blogs-main-1">
                                            <a class="recent-blog-title" href="<?= url('blogs/exploring-the-hardest-aspects-of-dropshipping') ?>">
                                                Exploring the Hardest Aspects of Dropshipping
                                            </a>
                                            <span><img src="<?= asset('images/date-blog1.png') ?>" class="img-fluid" alt=""> May 13, 2024 </span>
                                                                                    </div>
                                    </div>
                                </div>

                                <div class="list-wrapss">
                                    <div class="recent-blogs-main">
                                                                                <div class="recent-blogs-main-2">
                                            <a href="<?= url('blogs/2024-insights-is-shopify-still-a-profitable-platform') ?>" >
                                                <img src="<?= asset('uploads/images/blogs/0284618001715575707-2024-insights-is-sh.jpg') ?>" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="recent-blogs-main-1">
                                            <a class="recent-blog-title" href="<?= url('blogs/2024-insights-is-shopify-still-a-profitable-platform') ?>">
                                                2024 Insights: Is Shopify Still a Profitable Platform?
                                            </a>
                                            <span><img src="<?= asset('images/date-blog1.png') ?>" class="img-fluid" alt=""> May 13, 2024 </span>
                                                                                    </div>
                                    </div>
                                </div>

                                <div class="list-wrapss">
                                    <div class="recent-blogs-main">
                                                                                <div class="recent-blogs-main-2">
                                            <a href="<?= url('blogs/the-power-of-e-commerce-the-power-of-2-step-dropshipping') ?>" >
                                                <img src="<?= asset('uploads/images/blogs/0458467001729292327-the-power-of-e-comme.jpg') ?>" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="recent-blogs-main-1">
                                            <a class="recent-blog-title" href="<?= url('blogs/the-power-of-e-commerce-the-power-of-2-step-dropshipping') ?>">
                                                The Power of E-commerce: The Power of 2-Step Dropshipping
                                            </a>
                                            <span><img src="<?= asset('images/date-blog1.png') ?>" class="img-fluid" alt=""> Oct 18, 2024 </span>
                                                                                    </div>
                                    </div>
                                </div>

                                <div class="list-wrapss">
                                    <div class="recent-blogs-main">
                                                                                <div class="recent-blogs-main-2">
                                            <a href="<?= url('blogs/choosing-your-path-private-label-vs-fba-in-e-commerce') ?>" >
                                                <img src="<?= asset('uploads/images/blogs/0988620001714735572-choosing-your-path.png') ?>" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="recent-blogs-main-1">
                                            <a class="recent-blog-title" href="<?= url('blogs/choosing-your-path-private-label-vs-fba-in-e-commerce') ?>">
                                                Choosing Your Path: Private Label vs. FBA in E-Commerce
                                            </a>
                                            <span><img src="<?= asset('images/date-blog1.png') ?>" class="img-fluid" alt=""> May 03, 2024 </span>
                                                                                    </div>
                                    </div>
                                </div>
                                                    </div>
                    </div>
                    <div class="blog-social-side">
                        <div class="footer-heading">
                            <h4>FOLLOW  US</h4>
                        </div>
                        <ul class="main-social-list">
                            <li><a href="<?= e(brand('facebook')) ?>"><img src="<?= asset('images/fb.png') ?>" class="img-fluid"></a></li>
                            <li><a href="<?= e(brand('instagram')) ?>"><img src="<?= asset('images/insta.png') ?>" class="img-fluid"></a></li>
                            <li><a href="<?= e(brand('linkedin')) ?>"><img src="<?= asset('images/linked.png') ?>" class="img-fluid"></a></li>
                        </ul>
                    </div>
                </div>
    	    </div>
            <div class="row">
				<div class="col-md-12">
					<?php include ROOT . '/templates/partials/pagination.php'; ?>
				</div>
		    </div>
    	</div>
	</section>

	<section class="contact-section" style="background:url('<?= asset('images/contact-bg.jpg') ?>')">
        <div class="testi-quick">
            <div class="container">
                <div class="row align-items-center t">
                    <div class="col-lg-5 col-md-5  col-sm-6">
                        <div class="contact-headings all-default-ccontent">
                            <div class="sub-heading">
                                <h3>Let’s Get <img src="<?= asset('images/cant-sub.png') ?>" class="img-fluid" alt=""></h3>
                            </div>
                            <div class="defalt-heading">
                                <h2>Started</h2>
                            </div>
                            <div class="deflt-p">
                                <p>Unlock quality and effective e-commerce solutions with just a click! Experience a business venture that not only delivers impressive returns on investment but also thrives on standardized trading platforms across social networks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-6">
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
                                                        <!--<img src="<?= asset('images/phone11.png') ?>" class="img-fluid">-->
                                                        <input id='inquiry_form_phone' name="inquiry_form_phone" class="form-control" value=""  type="tel" required="">
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
                                                        <span><span>I agree to receive transactional SMS from Nextcom Automation related to my inquiry (sales updates, order status, customer support). Message frequency varies. Message & data rates may apply. Reply STOP to opt out, HELP for help. View our <a href="<?= url('terms-and-services') ?>">Terms and Conditions</a> and <a href="<?= url('privacy-policy') ?>">Privacy Policy</a>.</span></span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group check-agree-c">
                                                    <label class="agree"><input type="checkbox" >
                                                        <span><span>I agree to receive marketing & promotional SMS from Nextcom Automation (offers, new services, deals). Message frequency varies. Message & data rates may apply. Reply STOP to opt out, HELP for help. View our <a href="<?= url('terms-and-services') ?>">Terms and Conditions</a> and <a href="<?= url('privacy-policy') ?>">Privacy Policy</a>.</span></span></label>
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
    </section>

    
