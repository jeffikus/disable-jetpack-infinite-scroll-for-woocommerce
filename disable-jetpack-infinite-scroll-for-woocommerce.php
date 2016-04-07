<?php
/**
 * @package Disable Jetpack Infinite Scroll for WooCommerce
 * @version 0.1.0
 */
/*
Plugin Name: Disable Jetpack Infinite Scroll for WooCommerce
Plugin URI: https://github.com/jeffikus/disable-jetpack-infinite-scroll-for-woocommerce
Description: Disable Jetpack Infinite Scroll on WooCommerce pages.
Author: Jeffikus, Rynald0s
Version: 0.1.0
Author URI: http://github.com/jeffikus
*/

if ( ! function_exists( '_disable_jetpack_infinite_scroll_conditionally' ) ) {
	/**
	 * _disable_jetpack_infinite_scroll_conditionally Disables infinite scroll on WooCommerce pages
	 * Original code credit https://gist.github.com/rspublishing/6b0b2d2eabafa514bd48045d1860f24b
	 */
	function _disable_jetpack_infinite_scroll_conditionally() {
		if ( true === is_woocommerce() ) {
			remove_theme_support( 'infinite-scroll' );
		}
	}
	add_action( 'template_redirect', '_disable_jetpack_infinite_scroll_conditionally', 9 );
}
