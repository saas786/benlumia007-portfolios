<?php
/**
 * Plugin Name: Portfolio
 * Plugin URI:  https://luthemes.com/plugins/backdrop-post-types
 * Description: A simple way to create custom post type of your choice.
 * Author:      Benjamin Lu
 * Author URI:  https://luthemes.com
 * Text Domain: portfolios
 * Domain Path: /languages
 * Version:     2.0.4
 *
 * @package   Backdrop Post Types
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\PostTypes;

/**
 * Table of Content
 *
 * 1.0 - Forbidden Access
 * 2.0 - Required Files
 * 3.0 - Register Default Post Type
 * 4.0 - Plugin Text Domain
 */

/**
 * 1.0 - Forbidden Access
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 2.0 - Required Files
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';
}

require_once plugin_dir_path( __FILE__ ) . '/app/framework.php';
