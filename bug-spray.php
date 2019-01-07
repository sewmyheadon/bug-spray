<?php
/**
 * @wordpress-plugin
 * Plugin Name:     Bug Spray
 * Plugin URI:      https://smashwp.com
 * Description:     Bug Spray is a small suite of developer tools that make WordPress development and debugging easier. Easily use Kint and Whoops to provide more helpful and attractive PHP errors and debug info. Requires Composer.
 * Author:          Eric Amundson
 * Author URI:      https://smashwp.com
 * Text Domain:     bug-spray
 * Domain Path:     /languages
 * Version:         1.0.4
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package         BugSpray
 * @author          Eric Amundson <eric@ivycat.com>
 * @copyright       2019 IvyCat, Inc.
 * @license         GPL-2.0+
 *
 */

namespace IvyCat\BugSpray;


if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheating, eh?' );
}

/**
 * Load Composer vendor packages
 */
require_once( __DIR__ . '/assets/vendor/autoload.php' );

/**
 * Launch
 */
add_action( 'init', __NAMESPACE__ . '\launch' );
function launch() {
	add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\load_admin_styles' );
	add_action( 'wp_before_admin_bar_render', __NAMESPACE__ . '\remove_comment_bubble' );
}

/**
 * Load admin-only styles
 */
function load_admin_styles() {
	wp_register_style( 'bug-spray-admin', plugins_url( 'bug-spray/assets/styles/admin-styles.css' ) );
	wp_enqueue_style( 'bug-spray-admin' );
}

/*
 * Remove the comment bubble admin bar
 */
function remove_comment_bubble() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'comments' );
}

