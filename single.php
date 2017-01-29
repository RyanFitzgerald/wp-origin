<?php
/**
 * Single.php
 *
 * This is the default template for single posts
 *
 * @package wp-origin
 *
 */
get_header(); ?>

<h2>Single.php</h2>

<?php
while ( have_posts() ) : the_post();

    // Get post content for current post format
    get_template_part( 'template-parts/post/content', get_post_format() );

    // Show next and previous posts
    the_post_navigation();

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile; // End of the loop.
?>

<?php
get_sidebar();
get_footer();
