<?php
/**
 * Front-page.php
 *
 * The website landing / front page. If you don't want to force a given front-page, simply delete this file
 * and work with index.php. Alternatively, you may also create a home.php.
 *
 * @package wp-origin
 *
 */
get_header(); ?>

<h2>front-page.php</h2>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post();

        // Get the front page post content
        get_template_part( 'template-parts/page/content', 'front-page' );

    endwhile; ?>

    <?php
        the_posts_pagination( array(
            'prev_text' => 'Older',
            'next_text' => 'Newer'
        ));
    ?>

<?php else : ?>

    <?php get_template_part( 'template-parts/post/content', 'none' ); ?>

<?php endif; ?>


<?php
get_sidebar();
get_footer();
