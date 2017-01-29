<?php
/**
 * Search.php
 *
 * This is the template for the search results page
 *
 * @package wp-origin
 *
 */
get_header(); ?>

<h2>search.php</h2>

<?php if ( have_posts() ) : ?>

    <?php printf( esc_html__( 'Search Results for: %s', 'citadelthemes' ), '<span>' . get_search_query() . '</span>' ); ?>

    <?php while ( have_posts() ) : the_post();

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
