    <div class='clearfix'></div>

    <section class="bannermain innerbanner">
    <?php /* TODO: the original banner image (images/BlogsBanner) was lost in the HTTrack mirror; add an img tag for it here. */ ?>
    </section>

    <section class="blogs-view-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-8 col-lg-9">
                    <div class="all-blog" data-aos="fade-up" data-aos-duration="1500">
                        <div class="blog-veiw-section">
                            <h1><?= $post['title'] ?></h1>
                            <div class="view-abt-img">
                                <img src="<?= asset($post['image']) ?>" title="<?= e($post['image_title']) ?>" class="img-fluid">
                            </div>
<?php include ROOT . '/data/blogs/' . $post['slug'] . '.php'; ?>

                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-md-4 col-lg-3">
                    <div class="main-blogs-list" data-aos="fade-left" data-aos-duration="1500">
                        <h4>Featured Articles</h4>
                        <div class="recents-blogs-main-list">

                                <?php foreach ($featured as $s): ?>
<div class="list-wrapss">
                                    <div class="recent-blogs-main">

                                        <div class="recent-blogs-main-1">
                                            <span>
                                                <?= e(date('d-M-Y', strtotime($s['date']))) ?>
                                            </span>
                                            <a class="recent-blog-title" href="<?= url('blogs/' . $s['slug']) ?>">
                                                <?= $s['title'] ?>
                                            </a>
                                            <p class="recent-blog-description"><?= $s['excerpt'] ?></p>
                                            <a class="recent-blog-anchor" type="button" href="<?= url('blogs/' . $s['slug']) ?>">READ FULL</a>
                                        </div>
                                    </div>
                                </div>
<?php endforeach; ?>
                                                    </div>
                    </div>
    	        </div>
    	    </div>
    	    <div class="sharethis-inline-share-buttons"></div>
    	</div>
    </section>

    <section class="blogs-comments">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                                    </div>
            </div>
        </div>
    </section>

    <section class="leavereply">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <h2 class="reply">Leave Your Comments</h2>
                    <div class="leave-message">
                        <form id="save_comments" class="myform" method="post" action="<?= url('save-comment') ?>" autocomplete="off" >
                            <div class="form_message_container"></div>
                            <div class="form_error_container"></div>
                            <input type="hidden" name="_token" value="<?= e(csrf_token()) ?>">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 form-group">
                                    <input type="text" class="form-control" maxlength="150" id='inquiry_form_name' name="inquiry_form_name" placeholder="Your Name" required="">
                                </div>
                                <div class="col-md-6 col-xs-12 form-group">
                                    <input type="email" class="form-control" maxlength="100" id='inquiry_form_email' name="inquiry_form_email" placeholder="Email Address">
                                </div>
                            </div>
                            <input type="hidden" name="lp_page" value="yes">
                            <input type="hidden" name="inquiry_form_subject" value="<?= $post['subject'] ?>">
                            <input type="hidden" id='inquiry_form_product_id' name="inquiry_form_product_id" value="<?= (int) $post['product_id'] ?>">
                            <div class="form-group full">
                                <textarea id='inquiry_form_message' name="inquiry_form_message" class="form-control" maxlength="1500" rows="10" placeholder="Message" ></textarea>
                            </div>
                            <button class="btn btn-primary inquiry_form_btn herrsav-btn herrsav-btn2 form_submit_button" type="submit" title="Submit">Submit</button>
    					</form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4"></div>
            </div>
        </div>
    </section>

    
