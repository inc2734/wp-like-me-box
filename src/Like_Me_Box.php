<?php
/**
 * @package inc2734/wp-like-me-box
 * @author inc2734
 * @license GPL-2.0+
 */

namespace Inc2734\WP_Like_Me_Box;

class Like_Me_Box {

	public function __construct() {
		load_textdomain( 'inc2734-wp-like-me-box', __DIR__ . '/languages/' . get_locale() . '.mo' );

		add_shortcode( 'wp_like_me_box', array( $this, '_shortcode' ) );
	}

	/**
	 * Render shortcode
	 *
	 * @param  [array]  $attributes
	 * @return [string]
	 */
	public function _shortcode( $attributes ) {
		$attributes = shortcode_atts( array(
			'facebook_page_name' => '',
		), $attributes );

		$this->_render( 'like-me-box', $attributes );
	}

	/**
	 * Load view template
	 *
	 * @param  [string] $template_name
	 * @param  [array]  $attributes
	 * @return [void]
	 */
	protected function _render( $template_name, $attributes ) {
		$path = __DIR__ . '/app/view/' . $template_name . '.php';
		if ( ! file_exists( $path ) ) {
			return;
		}

		// @todo Using setter method
		// @codingStandardsIgnoreStart
		extract( $attributes );
		// @codingStandardsIgnoreEnd
		include( $path );
	}
}
