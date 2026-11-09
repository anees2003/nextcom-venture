<style>
    .review {
        display: flex;
        align-items: center;
        /* Aligns items vertically centered */
    }

    .trustpilot img {
        width: 150px;
        /* Adjust size for Trustpilot image */
        height: auto;
        /* Maintain aspect ratio */
    }

    .sitejabber img {
        width: 150px;
        /* Adjust size for Sitejabber image */
        height: auto;
        /* Maintain aspect ratio */
        margin-left: 20px;
        /* Increased space between the images */
    }
</style>
    <div id="contactSupplierModal" class="modal fade main-popup-get" role="dialog">
    <div class="modal-dialog">

<!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            <div class="popup-frm-logo">
                <img src="<?= asset('images/logo.svg') ?>" />
            </div>
            <div class="modal-header">
                <h2 class="com-title">Get Your Free </br> <span>Consultation & Quote</span></h2>
            </div>
            <div class="modal-body" id='inquiry_popup_form'>
                <div class="row">
                    <div class="quick-form">
                        <form id='form1' method="post" action="<?= url('save_contact/1') ?>">
                            <input type="hidden" name="_token" value="<?= e(csrf_token()) ?>">
                            <div id="err_msg"></div>

                            <div class="col-md-12 form-group">
                                <img src="<?= asset('images/user11.png') ?>" class="img-fluid">
                                <input id='inquiry_name' name="inquiry_name" class="form-control" placeholder="Name"
                                    type="text" required="">
                            </div>

                            <div class="col-md-12 form-group">
                                <img src="<?= asset('images/mail11.png') ?>" class="img-fluid">
                                <input id='inquiry_email' name="inquiry_email" class="form-control" placeholder="Email"
                                    type="email" required="">
                            </div>

                            <div class="col-md-12 form-group">
                                <img src="<?= asset('images/phones.png') ?>" class="img-fluid">
                                <input id='inquiry_phones' name="inquiry_phone" class="form-control" placeholder="Phone"
                                    type="text" required="">
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

                            <input type="hidden" name="inquiry_subject" value="<?= e(brand('name')) ?> Inquiry">

                            <div class="col-md-12 form-group txt-msg">
                                <img src="<?= asset('images/msg11.png') ?>" class="img-fluid">
                                <textarea id='inquiry_message' name="inquiry_message" class="form-control" placeholder="Message" rows="4"
                                    required=""></textarea>
                            </div>

                            <div class="col-md-12 form-group">
                                <label class="agree"><input type="checkbox" >
                                    <span>I agree to receive transactional SMS from <?= e(brand('name')) ?> related to my inquiry (sales updates, order status, customer support). Message frequency varies. Message & data rates may apply. Reply STOP to opt out, HELP for help. View our <a href="<?= url('terms-and-services') ?>">Terms and Conditions</a> and <a href="<?= url('privacy-policy') ?>">Privacy Policy</a>.</span></label>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="agree"><input type="checkbox" >
                                    <span>I agree to receive marketing & promotional SMS from <?= e(brand('name')) ?> (offers, new services, deals). Message frequency varies. Message & data rates may apply. Reply STOP to opt out, HELP for help. View our <a href="<?= url('terms-and-services') ?>">Terms and Conditions</a> and <a href="<?= url('privacy-policy') ?>">Privacy Policy</a>.</span></label>
                            </div>

                            <div class="col-md-12 form-group cent">
                                <button id='inquiry_popup_btn' type="submit" value='Submit'
                                    class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= asset('assets/js/jquery-3.3.1.min.js') ?>"></script>
<!--<script src="<?= site_url('assets/js/jquery.min.js') ?>"></script>-->
<script src="<?= asset('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= asset('assets/js/owl.carousel.min.js') ?>"></script>
<script src="<?= asset('assets/js/aos.js') ?>"></script>
<script src="<?= asset('assets/js/fancybox.js') ?>"></script>
<script src="<?= asset('assets/js/intlTelInput.min.js') ?>"></script>
<script>
    if ($('.search-box-outer').length) {
        $('.search-box-outer').on('click', function() {
            $('body').addClass('search-active');
        });
        $('.close-search').on('click', function() {
            $('body').removeClass('search-active');
        });
    }
</script>
<script>
    var vid = document.getElementById("myVideo");

    function playVid() {
        vid.play();
    }

    function pauseVid() {
        vid.pause();
    }
</script>
<script>
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    });
</script>
<script>
    $('#form1').on('submit', function(e) {
        e.preventDefault();
        document.getElementById('inquiry_popup_btn').disabled = true;
        var data = $('#form1').serialize();
        var url = "<?= url('save_contact/1') ?>";

        $.ajax({
            type: 'post',
            url: url,
            data: data,
            dataType: 'json',
            success: function(data) {
                document.getElementById('inquiry_popup_btn').disabled = false;
                document.getElementById('inquiry_popup_form').innerHTML =
                    "<div class='alert alert-success alert-dismissable'>We have received your message. Our team will get back to you soon.</div>";
                setTimeout(function() {
                    window.location.reload(1);
                }, 2000);
            },
            error: function(msg) {
                document.getElementById('err_msg').innerHTML = "";
                var err = JSON.parse(msg.responseText);

                $.each(err.errors, function(key, val) {
                    if (typeof(val[0]) !== 'undefined' && val[0] != val[0].replace(
                            'Entered_', '')) {
                        var str_arr = val[0].split("Entered_");
                        $('#err_msg').append("<div>" + str_arr[0] + "</div>");
                        document.getElementById('inq_cap_img').innerHTML = str_arr[1];
                    } else {
                        $('#err_msg').append("<div>" + val + "</div>");
                    }
                })

                $("#err_msg").removeClass();
                $('#err_msg').addClass('alert alert-danger');
                document.getElementById('err_msg').style.display = 'block';
                document.getElementById('inquiry_popup_btn').disabled = false;
            }
        });
        return false;
    });

    $('.form_submit').on('submit', function(e) {
        e.preventDefault();
        var formInstance = $(this);
        formInstance.find('.inquiry_form_btn').prop('disabled', true);
        formInstance.find('.inquiry_form_btn').html("Sending...");
        var data = formInstance.serialize();
        var url = formInstance.attr('action');

        $.ajax({
            type: 'post',
            url: url,
            data: data,
            success: function(data) {
                formInstance.trigger('reset');
                formInstance.find('.inquiry_form_btn').prop('disabled', false);
                formInstance.find('.inquiry_form_btn').html('Send');
                formInstance.find('.form_success').html(
                    "<div class='alert alert-success alert-dismissable' >Message Sent Successfully</div>"
                );
                // formInstance.find('.inquiry_popup_form').html("<div class='alert alert-success alert-dismissable'>Your Message has been Sent Successfully</div>");
                formInstance.find('.err_msg_1').html("");
                // $("#err_msg_1").removeClass();
            },
            error: function(msg) {
                formInstance.find('.err_msg_1').html("");
                var err = JSON.parse(msg.responseText);

                $.each(err.errors, function(key, val) {
                    if (typeof(val[0]) !== 'undefined' && val[0] != val[0].replace(
                            'Entered_', '')) {
                        var str_arr = val[0].split("Entered_");
                        formInstance.find('.err_msg_1').append("<div>" + str_arr[0] +
                            "</div>");
                        $('.cap_img').html(str_arr[1]);
                    } else {
                        formInstance.find('.err_msg_1').append("<div>" + val + "</div>");
                    }
                })

                formInstance.find('.err_msg_1').removeClass('alert alert-danger');
                formInstance.find('.err_msg_1').addClass('alert alert-danger');
                formInstance.find('.err_msg_1').attr('style', 'display:block;');
                formInstance.find('.inquiry_form_btn').prop('disabled', false);
                formInstance.find('.inquiry_form_btn').html("Send");
            }
        });
        return false;
    });

    $('#form2').on('submit', function(e) {
        e.preventDefault();
        var formInstance = $(this);
        formInstance.find('inquiry_form_btn').prop('disabled', true);
        formInstance.find('inquiry_form_btn').html("Sending...");
        // var data = formInstance.serialize();
        var data = $('#form2').serialize();
        var url = "<?= url('save_contact/2') ?>";

        $.ajax({
            type: 'post',
            url: url,
            data: data,
            success: function(data) {
                formInstance.trigger('reset');
                formInstance.find('inquiry_form_btn').prop('disabled', false);
                formInstance.find('inquiry_form_btn').html('Sent');
                // console.log(data);
                formInstance.find('.form_success').html(
                    "<div class='alert alert-success alert-dismissable' >Message Sent Successfully</div>"
                );
                // formInstance.find('.inquiry_popup_form').html("<div class='alert alert-success alert-dismissable'>Your Message has been Sent Successfully</div>");
                formInstance.find('.err_msg_1').html("");
                // $("#err_msg_1").removeClass();
            },
            error: function(msg) {
                formInstance.find('.err_msg_1').html("");
                var err = JSON.parse(msg.responseText);
                // 	console.log(msg);
                $.each(err.errors, function(key, val) {
                    if (typeof(val[0]) !== 'undefined' && val[0] != val[0].replace(
                            'Entered_', '')) {
                        var str_arr = val[0].split("Entered_");
                        formInstance.find('.err_msg_1').append("<div>" + str_arr[0] +
                            "</div>");
                        $('.cap_img').html(str_arr[1]);
                    } else {
                        formInstance.find('.err_msg_1').append("<div>" + val + "</div>");
                    }
                })

                formInstance.find('.err_msg_1').removeClass('alert alert-danger');
                formInstance.find('.err_msg_1').addClass('alert alert-danger');
                formInstance.find('.err_msg_1').attr('style', 'display:block;');
                formInstance.find('inquiry_form_btn').prop('disabled', false);
                formInstance.find('inquiry_form_btn').html("Send");
            }
        });
        return false;
    });

    $('#form211').on('submit', function(e) {
        e.preventDefault();
        var formInstance = $(this);
        formInstance.find('.con_form_btn').prop('disabled', true);
        formInstance.find('.con_form_btn').html("Sending...");
        var data = formInstance.serialize();
        var url = "<?= url('save_contact/4') ?>";

        $.ajax({
            type: 'post',
            url: url,
            data: data,
            success: function(data) {
                formInstance.trigger('reset');
                formInstance.find('.con_form_btn').prop('disabled', false);
                formInstance.find('.con_form_btn').html('Send');
                formInstance.find('.form_success').html(
                    "<div class='alert alert-success alert-dismissable' >Message Sent Successfully</div>"
                );
                // formInstance.find('.inquiry_popup_form').html("<div class='alert alert-success alert-dismissable'>Your Message has been Sent Successfully</div>");
                formInstance.find('.err_msg_1').html("");
                // $("#err_msg_1").removeClass();
            },
            error: function(msg) {
                formInstance.find('.err_msg_1').html("");
                var err = JSON.parse(msg.responseText);

                $.each(err.errors, function(key, val) {
                    if (typeof(val[0]) !== 'undefined' && val[0] != val[0].replace(
                            'Entered_', '')) {
                        var str_arr = val[0].split("Entered_");
                        formInstance.find('.err_msg_1').append("<div>" + str_arr[0] +
                            "</div>");
                        $('.cap_img').html(str_arr[1]);
                    } else {
                        formInstance.find('.err_msg_1').append("<div>" + val + "</div>");
                    }
                })

                formInstance.find('.err_msg_1').removeClass('alert alert-danger');
                formInstance.find('.err_msg_1').addClass('alert alert-danger');
                formInstance.find('.err_msg_1').attr('style', 'display:block;');
                formInstance.find('.con_form_btn').prop('disabled', false);
                formInstance.find('.con_form_btn').html("Send");
            }
        });
        return false;
    });

    $('#form331').on('submit', function(e) {
        e.preventDefault();
        var formInstance = $(this);
        formInstance.find('.affiliate_form_btn').prop('disabled', true);
        formInstance.find('.affiliate_form_btn').html("Sending...");
        // var data = formInstance.serialize();
        var data = $('#form331').serialize();
        var url = "<?= url('save_contact/5') ?>";

        $.ajax({
            type: 'post',
            url: url,
            data: data,
            success: function(data) {
                formInstance.trigger('reset');
                formInstance.find('.affiliate_form_btn').prop('disabled', false);
                formInstance.find('.affiliate_form_btn').html('Send');
                // console.log(data);
                formInstance.find('.form_success').html(
                    "<div class='alert alert-success alert-dismissable' >Message Sent Successfully</div>"
                );
                // formInstance.find('.inquiry_popup_form').html("<div class='alert alert-success alert-dismissable'>Your Message has been Sent Successfully</div>");
                formInstance.find('.err_msg_1').html("");
                // $("#err_msg_1").removeClass();
            },
            error: function(msg) {
                formInstance.find('.err_msg_1').html("");
                var err = JSON.parse(msg.responseText);
                // 	console.log(msg);
                $.each(err.errors, function(key, val) {
                    if (typeof(val[0]) !== 'undefined' && val[0] != val[0].replace(
                            'Entered_', '')) {
                        var str_arr = val[0].split("Entered_");
                        formInstance.find('.err_msg_1').append("<div>" + str_arr[0] +
                            "</div>");
                        $('.cap_img').html(str_arr[1]);
                    } else {
                        formInstance.find('.err_msg_1').append("<div>" + val + "</div>");
                    }
                })

                formInstance.find('.err_msg_1').removeClass('alert alert-danger');
                formInstance.find('.err_msg_1').addClass('alert alert-danger');
                formInstance.find('.err_msg_1').attr('style', 'display:block;');
                formInstance.find('.affiliate_form_btn').prop('disabled', false);
                formInstance.find('.affiliate_form_btn').html("Send");
            }
        });
        return false;
    });
</script>
<script>
    // $(document).ready(function() {
    //     const phoneInputField = document.querySelector("#inquiry_form_phone");
    //     const phoneInput = window.intlTelInput(phoneInputField, {
    //         utilsScript: "<?= site_url('assets/js/intl-tel-input.utils.js') ?>",
    //     });
    // });
</script>
<script>

    // $(document).ready(function() {
    //     const phoneInputField = document.querySelector("#inquiry_phone");
    //     const phoneInput = window.intlTelInput(phoneInputField, {
    //         utilsScript: "<?= site_url('assets/js/intl-tel-input.utils.js') ?>",
    //     });
    // });

    $(document).ready(function() {
        window.onload = function() {
            setTimeout(function() {
                $('div#contactSupplierModal').modal('show');
            }, 10000);
        };
    });
</script>
<script>
    function showContent() {
        $(".content").toggleClass('content-hidden');
        if ($("#toggleBtn").text() == 'Show More') {
            $("#toggleBtn").text('Show Less');
        } else {
            $("#toggleBtn").text('Show More');
        }
    }

    $(document).ready(function() {

        $("#toggleBtn").click(function() {
            showContent();
        });

    });
</script>
<script>
    $(document).ready(function() {
        $(".parent-li .click-arrow").click(function(e) {
            e.preventDefault();
            $(this).parents('.drop-menu').find('.unactivess-p').toggleClass('open-list');
            return false;
        })
    });
</script>
<!-- email subscribe  ajax-->
<script>
    $("#form3").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function() {
                $("#success-newsletter").show();
                $("#error-newsletter").hide();
                $(this).trigger('reset');
            },
            error: function() {
                $("#success-newsletter").hide();
                $("#error-newsletter").show();
                $(this).trigger('reset');
            }
        })
        return false;
    });
</script>
<script>
    $(document).ready(function() {
        $('.sub-dropdown-parent').hover(
            function() {
                $(this).find('.sub-dropdown-menu').addClass('show');
            },
            function() {
                $(this).find('.sub-dropdown-menu').removeClass('show');
            }
        );
    });
</script>
<script>
    $('.owl-carousel1').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 2000,
        slideSpeed: 2000,
        // smartSpeed: 2000,
        // 	animateOut: "fadeOut",
        //     animateIn: "fadeIn",
        // navText: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
</script>
<script>
    $('.owl-carousel-m-product').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
</script>
<script>
    $('.owl-carousel-success1').owlCarousel({
        loop: true,
        margin: 0,
        // center: true,
        // autoplay: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
</script>
<script>
    $('.owl-carousel-success2').owlCarousel({
        loop: true,
        margin: 0,
        // center: true,
        // autoplay: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
</script>
<script>
    $('.owl-carousel-success3').owlCarousel({
        loop: true,
        margin: 0,
        // center: true,
        // autoplay: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
</script>
<script>
    $('.owl-carousel-success4').owlCarousel({
        loop: true,
        margin: 0,
        // center: true,
        // autoplay: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
</script>
<script>
    $('.owl-carousel-partners').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    });
</script>
<script>
    $('.owl-carousel-sell').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 2000,
        slideSpeed: 2000,
        // animateOut: 'fadeOut',
        // autoplayTimeout: 1000,
        // smartSpeed: 2000,
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    });
</script>
<script>
    $(document).ready(function() {
        $('.owl-carousel-ppp').owlCarousel({
            loop: true,
            autoplayHoverPause: true,
            animateOut: "slideOutUp",
            animateIn: "fadeIn",
            autoplaySpeed: 4000,
            margin: 0,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                300: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });

        $('.owl-carousel-ppp-v2s').owlCarousel({
            loop: true,
            autoplayHoverPause: true,
            animateOut: "slideOutUp",
            animateIn: "fadeIn",
            autoplaySpeed: 2000,
            margin: 0,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                300: {
                    items: 2
                },
                600: {
                    items: 3
                },
                800: {
                    items: 4
                },
                1000: {
                    items: 5
                }
            }
        });
    });
</script>
<?php include ROOT . '/templates/partials/chat.php'; ?>
<?php if (!empty($page['scripts'])) { include ROOT . '/templates/page-scripts/' . $page['page'] . '.php'; } ?>
</body>
</html>
