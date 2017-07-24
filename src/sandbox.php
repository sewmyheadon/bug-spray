<?php
/**
* Playground
*
* @package     IvyCat
* @since       1.0.0
* @author      ivycat
* @link        https://ivycat.com
* @license     GPL-2.0+
*/
namespace IvyCat\BugSpray\Sandbox;

//add_action( 'loop_start', __NAMESPACE__ . '\demo' );
/**
 * Demo for testing only
 *
 * @since 1.0.0
 *
 * @return void
 */
function demo() {
	d( get_the_ID() );
}