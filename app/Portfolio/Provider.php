<?php
/**
 * Portfolio service provider..
 *
 * @package   Backdrop Post Types
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/backdrop-post-types
 */

namespace Benlumia007\Backdrop\PostTypes\Portfolio;

use Hybrid\Core\ServiceProvider;

/**
 * Sidebar Provider.
 *
 * @since  2.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds the implementation of the attributes contract to the container.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->singleton( 'backdrop/post/type/portfolio', Component::class );

    }
    
	/**
	 * Boots the implementation of the attributes contract to the container.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
    public function boot() {
        $this->app->resolve( 'backdrop/post/type/portfolio' )->boot();
    }
}