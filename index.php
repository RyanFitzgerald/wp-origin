<?php
/**
 * Index.php
 *
 * This is the most generic template file and one of the two required files for every theme. If no other template
 * file is found, it will default to this.
 *
 * @package wp-origin
 *
 */
get_header(); ?>

<h2>Index.php</h2>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post();

        // Get post content of current post format
        get_template_part( 'template-parts/post/content', get_post_format() );

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
