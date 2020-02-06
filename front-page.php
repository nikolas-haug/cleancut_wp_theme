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

        <?php $latest_blog_posts = new WP_Query(array(
            'posts_per_page' => 3
        )); ?>

        <?php 
            $i = 0; // Counter
            $secton = 'section-a' // Section class
        ?>

        <?php if($latest_blog_posts->have_posts()) : ?>
            <?php while($latest_blog_posts->have_posts()) : $latest_blog_posts->the_post(); ?>

                <?php 
                    $i++;
                    if($i % 2 != 0) {
                        // Odd post
                        $section_class = 'section-a';
                        $left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
                        $right_class = 'col-lg-5 offset-lg-2 col-sm-6';
                        $img_class = 'img-fluid rounded-circle animated fadeInRight';
                    } else {
                        // Even post
                        $section_class = 'section-b';
                        $left_class = 'col-lg-5 order-1 offset-lg-2 col-sm-6 animated fadeInRight';
                        $right_class = 'col-lg-5 col-sm-6';
                        $img_class = 'img-fluid rounded-circle animated fadeInLeft';
                    }
                ?>

                <section class="<?php echo $section_class; ?>">
                    <div class="container">
                        <div class="row">
                            <div class="<?php echo $left_class; ?>">
                                <hr class="section-heading-spacer">
                                <div class="clearfix"></div>
                                <h2 class="section-heading"><?php the_title( ); ?></h2>
                                <div class="excerpt">
                                    <?php the_excerpt(  ); ?>
                                </div>
                            </div>
                            <div class="<?php echo $right_class; ?>">
                                <?php the_post_thumbnail( 'full', array( 'class' => $img_class ) ); ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>

        

        <!-- <section class="section-b">
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
        </section> -->

      <?php get_footer(  ); ?>