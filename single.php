<?php get_header(  ); ?>

    <?php while(have_posts()) : the_post(); ?>
        <section class="title-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
                        </div>
                        <div class="meta">
                            Posted on 
                            <?php the_time( 'F j, Y g:i a' ); ?>
                            by 
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author( ); ?></a>
                        </div>
                        <?php the_content( ); ?>
                        <?php comments_template( ); ?>
                    </div>
                    <div class="col-md-4">
                        <?php if(is_active_sidebar( 'sidebar' )) : ?>
                            <?php dynamic_sidebar('sidebar'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>

<?php get_footer( ); ?>