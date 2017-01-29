<?php
/**
 * Page.php
 *
 * This is the generic template for all pages
 *
 * @package wp-origin
 *
 */
get_header(); ?>

<h2>page.php</h2>

<?php
while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/page/content', 'page' );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile; // End of the loop.
?>

<?php
get_sidebar();
get_footer();
