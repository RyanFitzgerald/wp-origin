<?php
/**
 * Sidebar.php
 *
 * This file contains the sidebar content
 *
 * @package wp-origin
 *
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<h2>sidebar.php</h2>

<?php dynamic_sidebar( 'sidebar-1' ); ?>