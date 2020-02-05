<?php 

function cleancut_customize_register($wp_customize) {
    // SHOWCASE SECTION ****************************
    $wp_customize->add_section( 'showcase', 
        array(
            'title' => __('Showcase', 'cleancut'),
            'description' => sprintf(__('Options for showcase area', 'cleancut')),
            'priority' => 130
        )
    );
    // Image setting
    $wp_customize->add_setting('showcase_image',
        array(
            'default' => get_bloginfo('template_directory') . '/img/showcase.jpg', 'cleancut',
            'type' => 'theme_mod'
        )
    );
    // Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Background Image', 'cleancut'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    )));
    // Height setting
    $wp_customize->add_setting('showcase_height',
        array(
            'default' => _x(700, 'cleancut'),
            'type' => 'theme_mod'
        )
    );
    // Height control
    $wp_customize->add_control('showcase_height', 
        array(
            'label' => __('Showcase Height', 'cleancut'),
            'section' => 'showcase',
            'priority' => 2
        )
    );
    // Heading setting
    $wp_customize->add_setting('showcase_heading',
        array(
            'default' => _x('Cleancut Theme', 'cleancut'),
            'type' => 'theme_mod'
        )
    );
    // Heading control
    $wp_customize->add_control('showcase_heading', 
        array(
            'label' => __('Heading', 'cleancut'),
            'section' => 'showcase',
            'priority' => 3
        )
    );
    // Text setting
    $wp_customize->add_setting('showcase_text',
        array(
            'default' => _x('Custom Wordpress Theme by You', 'cleancut'),
            'type' => 'theme_mod'
        )
    );
    // Text control
    $wp_customize->add_control('showcase_text', 
        array(
            'label' => __('Text', 'cleancut'),
            'section' => 'showcase',
            'priority' => 4
        )
    );

    // SOCIAL SECTION ***************************************
    $wp_customize->add_section('social',
    array(
        'title' => __('Social', 'cleancut'),
        'description' => sprintf(__('Social media urls', 'cleancut')),
        'priority' => 140
    ));
    // Facebook url setting
    $wp_customize->add_setting('facebook_url',
    array(
        'default' => _x('https://facebook.com', 'cleancut'),
        'type' => 'theme_mod'
    ));
    // Facebook url control
    $wp_customize->add_control('facebook_url',
    array(
        'label' => __('Facebook URL', 'cleancut'),
        'section' => 'social',
        'priority' => 1
    ));
    // twitter url setting
    $wp_customize->add_setting('twitter_url',
    array(
        'default' => _x('https://twitter.com', 'cleancut'),
        'type' => 'theme_mod'
    ));
    // twitter url control
    $wp_customize->add_control('twitter_url',
    array(
        'label' => __('twitter URL', 'cleancut'),
        'section' => 'social',
        'priority' => 1
    ));
    // linkedin url setting
    $wp_customize->add_setting('linkedin_url',
    array(
        'default' => _x('https://linkedin.com', 'cleancut'),
        'type' => 'theme_mod'
    ));
    // linkedin url control
    $wp_customize->add_control('linkedin_url',
    array(
        'label' => __('linkedin URL', 'cleancut'),
        'section' => 'social',
        'priority' => 1
    ));

    // BOTTOM BANNER SECTION ********************************
    $wp_customize->add_section('banner', array(
        'title' => __('Bottom Banner', 'cleancut'),
        'description' => sprintf(__('Options for bottom banner area')),
        'priority' => 160
    ));
    // Image setting
    $wp_customize->add_setting('banner_image',
        array(
            'default' => get_bloginfo('template_directory') . '/img/banner.jpg', 'cleancut',
            'type' => 'theme_mod'
        )
    );
    // Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
        'label' => __('Background Image', 'cleancut'),
        'section' => 'banner',
        'settings' => 'banner_image',
        'priority' => 1
    )));
     // Heading setting
     $wp_customize->add_setting('banner_heading',
     array(
         'default' => _x('Follow us on social media', 'cleancut'),
         'type' => 'theme_mod'
     )
    );
    // Heading control
    $wp_customize->add_control('banner_heading', 
        array(
            'label' => __('Heading', 'cleancut'),
            'section' => 'banner',
            'priority' => 3
        )
    );

    // MISC OPTIONS SECTION *********************************
    $wp_customize->add_section('misc', array(
        'title' => __('Misc Options', 'cleancut'),
        'description' => sprintf(__('Misc options for theme', 'cleancut')),
        'priority' => 150
    ));

    $wp_customize->add_setting('animation', array(
        'default' => 1
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'animation', array(
        'label' => __('Enable Animation', 'cleancut'),
        'section' => 'misc',
        'settings' => 'animation',
        'type' => 'checkbox'
    )));
}
add_action( 'customize_register', 'cleancut_customize_register' );