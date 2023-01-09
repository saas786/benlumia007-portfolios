<?php
/**
 * 
 */
namespace Benlumia007\Backdrop\PostTypes\Portfolio;

use Hybrid\Contracts\Bootable;

class Component implements Bootable {

	public function portfolio_labels() {
		$labels = [
			'name'               => sprintf( esc_html__( '%s',                   'backdrop-custom-portfolio' ), 'Portfolios' ),
			'singular_name'      => sprintf( esc_html__( '%s',                   'backdrop-custom-portfolio' ), 'Portfolio' ),
			'name_admin_bar'     => sprintf( esc_html__( '%s',                   'backdrop-custom-portfolio' ), 'Portfolio' ),
			'add_new'            => sprintf( esc_html__( 'New %s',               'backdrop-custom-portfolio' ), 'Portfolio' ),
			'add_new_item'       => sprintf( esc_html__( 'Add New %s',           'backdrop-custom-portfolio' ), 'Portfolio' ),
			'edit_item'          => sprintf( esc_html__( 'Edit %s',              'backdrop-custom-portfolio' ), 'Portfolio' ),
			'new_item'           => sprintf( esc_html__( 'New %s',               'backdrop-custom-portfolio' ), 'Portfolio' ),
			'view_item'          => sprintf( esc_html__( 'View %s',              'backdrop-custom-portfolio' ), 'Portfolio' ),
			'search_items'       => sprintf( esc_html__( 'Search %s',            'backdrop-custom-portfolio' ), 'Portfolios' ),
			'not_found'          => sprintf( esc_html__( 'No %s Found',          'backdrop-custom-portfolio' ), 'Portfolios' ),
			'not_found_in_trash' => sprintf( esc_html__( 'No %s Found in Trash', 'backdrop-custom-portfolio' ), 'Portfolios' ),
		];

		return apply_filters( 'backdrop/custom/portfolio/labels', $labels );
	}

    public function create_post_type_portfolio() {

        $args = [
			'labels' => $this->portfolio_labels(),
			'public' => true,
			'has_archive'  => true,
			'menu_icon'    => 'dashicons-category',
			'show_ui'      => true,
			'show_in_rest' => true,
			'supports'     => [ 'title', 'editor', 'thumbnail' ],
			'taxonomies'   => [ 'porfolio-subject' ],
			'rewrite'      => [ 'with_front' => false, 'slug' => 'portfolio' ]
		];

        register_post_type( 'backdrop-portfolio', $args );
    }

    public function boot() : void {
        add_action( 'init', [ $this, 'create_post_type_portfolio' ] );	
    }
}