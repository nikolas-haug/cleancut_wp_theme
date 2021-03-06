<?php get_header(  ); ?>

    <section class="title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>
                        <?php 
                            if(is_category( )) {
                                single_cat_title();
                            } else if(is_author( )) {
                                the_post();
                                echo 'Archives by Author: ' . get_the_author( );
                            } else if(is_tag( )) {
                                single_tag_title();
                            } else if(is_day(  )) {
                                echo 'Archives by Day: ' . get_the_date( );
                            } else if(is_month(  )) {
                                echo 'Archives by Month: ' . get_the_date( 'F Y' );
                            } else if(is_year(  )) {
                                echo 'Archives by Year: ' . get_the_date( 'Y' ); 
                            } else {
                                echo 'Archives';
                            }
                        ?>
                    </h1>
                </div>
                <div class="col-md-8">
                    <?php if(is_active_sidebar( 'subnav' )) : ?>
                        <?php dynamic_sidebar('subnav'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php 
        $i = 0;
    ?>     

    <?php while(have_posts()) : the_post(); ?>
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

        <?php if(has_post_format($format, $post_id) && get_post_format( $post_id ) == 'aside') : ?>
            <!-- Aside content -->
            <?php 
                include (locate_template('content-aside.php', false, false));
            ?>
        <?php elseif(has_post_format($format, $post_id) && get_post_format( $post_id ) == 'gallery') : ?>
            <!-- Gallery content -->
            <?php 
                include (locate_template('content-gallery.php', false, false));
            ?>
        <?php else : ?>
            <!-- Standard content -->
            <?php 
                include (locate_template('content.php', false, false));
            ?>
        <?php endif; ?>
    <?php endwhile; ?>

<?php get_footer(  ); ?>