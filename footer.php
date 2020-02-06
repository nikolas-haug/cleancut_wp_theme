<section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2><?php echo get_theme_mod( 'banner_heading', 'Follow Us!!' ); ?></h2>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-inline banner-social-buttons">
                        <?php if (get_theme_mod('facebook_url', 'https://facebook.com') != ''): ?>
                                <li class="list-inline-item">
                                <a href="<?php echo get_theme_mod('facebook_url', 'https://facebook.com'); ?>" class="btn btn-secondary btn-lg" target="_blank">
                                    <i class="fab fa-facebook-square"></i> Facebook
                                </a>
                                </li>
                            <?php endif;?>
                            <?php if (get_theme_mod('twitter_url', 'https://twitter.com') != ''): ?>
                                <li class="list-inline-item">
                                <a href="<?php echo get_theme_mod('twitter_url', 'https://twitter.com'); ?>" class="btn btn-secondary btn-lg" target="_blank">
                                    <i class="fab fa-twitter-square"></i> Twitter
                                </a>
                                </li>
                            <?php endif;?>
                            <?php if (get_theme_mod('linkedin_url', 'https://linkedin.com') != ''): ?>
                                <li class="list-inline-item">
                                <a href="<?php echo get_theme_mod('linkedin_url', 'https://linkedin.com'); ?>" class="btn btn-secondary btn-lg" target="_blank">
                                    <i class="fab fa-linkedin-in"></i> Linkedin
                                </a>
                                </li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

<footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#">About</a></li>
                            <li class="list-inline-item"><a href="#">Services</a></li>
                            <li class="list-inline-item"><a href="#">Contacts</a></li>
                        </ul>
                        <p class="copyright text-muted small">
                            Copyright &copy; Clean Cut Theme 2020. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <?php wp_footer();?>
    </body>
</html>