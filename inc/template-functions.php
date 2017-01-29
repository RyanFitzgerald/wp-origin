<?php
/**
 * Template-functions.php
 *
 * This file contains additional functions (helpers) used throughout. If you want to create a function that
 * can be accessible and reusable anywhere, here is the place to do so.
 *
 * @package wp-origin
 *
 */

/**
 * Checks to see if current page is the home page
 */
function barren_is_frontpage() {
    return ( is_front_page() && ! is_home() );
}