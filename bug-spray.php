<?php
/**
 *
 * @package     IvyCat
 * @author      Eric Amundson <eric@ivycat.com>
 * @copyright   2018 IvyCat, Inc.
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Bug Spray
 * Plugin URI:  https://ivycat.com/wordpress-plugins/
 * Description: Easily use Kint and Whoops to provide more helpful and attractive PHP errors and debug info. Requires Composer.
 * Version:     1.0.3
 * Author:      IvyCat
 * Author URI:  https://ivycat.com
 * Text Domain: ivycat-bug-spray
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
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

