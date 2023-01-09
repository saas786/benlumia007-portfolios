<?php 
/**
 * Boot the framework.
 * 
 * Container classes should be used for storing, retrieving, and resolving
 * classes/objects passed into them.
 *
 * @package   Backdrop Post Types
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Create a new framework instance
 *
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$portfolios = Hybrid\booted() ? Hybrid\app() : new Hybrid\Core\Application();

/**
 * Register default providers
 */
$portfolios->provider( Benlumia007\Backdrop\PostTypes\Portfolio\Provider::class );

/**
 * Boot the Framework
 */
$portfolios->boot();