<?php
/**
 * Exception handling with Whoops
 *
 * @package     IvyCat
 * @since       1.0.0
 * @author      ivycat
 * @link        https://ivycat.com
 * @license     GPL-2.0+
 */
namespace IvyCat\BugSpray\Support\Exceptions;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

add_action( 'init', __NAMESPACE__ . '\load_whoops', 1);

function load_whoops() {
	$whoops     = new Run();
	$error_page = new PrettyPageHandler();
	$error_page->setEditor( 'sublime' );
	$whoops->pushHandler( $error_page );
	$whoops->register();
}