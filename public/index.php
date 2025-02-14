<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */


define('WP_USE_THEMES', true);

$env = !empty(getenv("ENVIRONMENT")) ? getenv("ENVIRONMENT") : "production";
define("ENVIRONMENT", $env);

if (ENVIRONMENT === "development") {
    define('WP_DEBUG', true);
}else{
    define('WP_DEBUG', false);
}



/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
