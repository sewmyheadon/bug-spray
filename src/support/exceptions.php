<?php
/**
 * Load up Whoops
 *
 * @package     IvyCat\Support
 * @since       1.0.0
 * @author      ivycat
 * @link        https://ivycat.com
 * @license     GPL-2.0+
 */
namespace IvyCat\UpDevTools\Support;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

$whoops     = new Run();
$error_page = new PrettyPageHandler();
$error_page->setEditor( 'sublime' );
$whoops->pushHandler( $error_page );
$whoops->register();
