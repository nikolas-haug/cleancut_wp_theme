<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?> | <?php is_front_page(  ) ? bloginfo('description') : wp_title( ); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fontawesome.css">

        <?php if(get_theme_mod( 'animation', 1 )) : ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
        <?php endif; ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(  ); ?>
        <style>
            .showcase {
                height: <?php echo get_theme_mod( 'showcase_height', 700 ) ?>px;
                background: url(<?php echo get_theme_mod( 'showcase_image', get_bloginfo('template_url') . '/img/showcase.jpg' ); ?>);
            }
            .banner {
                background: url(<?php echo get_theme_mod( 'banner_image', get_bloginfo('template_url') . '/img/banner.jpg' ); ?>) no-repeat center center;
            }
        </style>

    </head>

    <body <?php body_class(); ?>>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url(site_url('/')); ?>"><?php bloginfo('name'); ?></a>
                <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse"
                    id="navbarsExampleDefault">
                    <?php 
                        wp_nav_menu( 
                            array(
                                'theme_location' => 'primary',
                                'depth' => 2,
                                'container' => false,
                                'menu_class' => 'nav navbar-nav ml-auto',
                                'fallback_cb' => 'wp_bootstrap_navbar::fallback',
                                'walker' => new WP_Bootstrap_Navwalker()
                            )
                        );
                    ?>
                </div>
            </div>
        </nav>