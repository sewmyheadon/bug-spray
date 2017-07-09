<?php
/**
 *
 * @package     IvyCat
 * @author      Eric Amundson <eric@ivycat.com>
 * @copyright   2017 IvyCat, Inc.
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Bug Spray
 * Plugin URI:  https://ivycat.com/wordpress-plugins/
 * Description: Easily use Kint and Whoops to provide more helpful and attractive PHP errors and debug info. Requires Composer.
 * Version:     1.0.1
 * Author:      IvyCat
 * Author URI:  https://ivycat.com
 * Text Domain: ivycat-plugin-name
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace IvyCat;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheating, eh?' );
}

require_once( __DIR__ . '/assets/vendor/autoload.php' );

add_action( 'init', __NAMESPACE__ . '\launch' );
function launch() {

}

