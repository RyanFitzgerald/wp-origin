<?php
/**
 * archive.php
 *
 * Basic template for displaying archive pages. To edit the content, edit the associated template-part or create
 * your own and edit them here.
 *
 * @package wp-origin
 *
 */
get_header(); ?>

<h2>archive.php</h2>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post();

        // Get the excerpt post content template
        get_template_part( 'template-parts/post/content', 'excerpt' );

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
