<?php get_header(  ); ?>

        <section class="showcase animated fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="showcase-content">
                            <h1><?php echo get_theme_mod( 'showcase_heading', 'Cleancut Theme' ); ?></h1>
                            <p class="lead"><?php echo get_theme_mod( 'showcase_text', 'A Wordpress Theme by You' ); ?></p>
                            <?php if(get_theme_mod( 'facebook_url', 'https://facebook.com' ) != '') : ?>
                                <a href="<?php echo get_theme_mod( 'facebook_url', 'https://facebook.com' ); ?>" class="btn btn-secondary btn-lg" target="_blank">
                                    <i class="fab fa-facebook-square"></i> Facebook
                                </a>
                            <?php endif; ?>
                            <?php if(get_theme_mod( 'twitter_url', 'https://twitter.com' ) != '') : ?>
                                <a href="<?php echo get_theme_mod( 'twitter_url', 'https://twitter.com' ); ?>" class="btn btn-secondary btn-lg" target="_blank">
                                    <i class="fab fa-twitter-square"></i> Twitter
                                </a>
                            <?php endif; ?>
                            <?php if(get_theme_mod( 'linkedin_url', 'https://linkedin.com' ) != '') : ?>
                                <a href="<?php echo get_theme_mod( 'linkedin_url', 'https://linkedin.com' ); ?>" class="btn btn-secondary btn-lg" target="_blank">
                                    <i class="fab fa-linkedin-in"></i> Linkedin
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-a">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Section Heading</h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Incidunt in aliquid impedit sed,
                            quia voluptas perferendis odio possimus nobis
                            provident laborum velit numquam excepturi voluptatum
                            mollitia tempore rerum accusamus quas.</p>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-sm-6">
                        <img src="img/pic1.jpg" alt="" class="img-fluid
                            rounded-circle animated fadeInRight">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                        <img src="img/pic2.jpg" alt="" class="img-fluid
                            rounded-circle">
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-sm-6 animated fadeInRight">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Section Heading</h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Incidunt in aliquid impedit sed,
                            quia voluptas perferendis odio possimus nobis
                            provident laborum velit numquam excepturi voluptatum
                            mollitia tempore rerum accusamus quas.</p>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="section-a">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Section Heading</h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Incidunt in aliquid impedit sed,
                            quia voluptas perferendis odio possimus nobis
                            provident laborum velit numquam excepturi voluptatum
                            mollitia tempore rerum accusamus quas.</p>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-sm-6 animated fadeInRight">
                        <img src="img/pic3.jpg" alt="" class="img-fluid
                            rounded-circle">
                    </div>
                </div>
            </div>
        </section>

      <?php get_footer(  ); ?>