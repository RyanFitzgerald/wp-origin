<?php
/**
 * Comments.php
 *
 * Basic template for comments
 *
 * @package wp-origin
 *
 */

if ( post_password_required() ) {
    return;
}
?>

<p>Comments.php</p>

<?php if ( have_comments() ) : ?>

    <?php
        wp_list_comments( array(
            'style'      => 'ol',
            'short_ping' => true,
        ) );
    ?>

<?php endif; ?>

<?php if (! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' )) : ?>

    <p>No comments</p>

<?php endif; ?>

<?php comment_form(); ?>
