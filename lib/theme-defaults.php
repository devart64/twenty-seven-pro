<?php
/**
 * Twenty Seven.
 *
 * This file adds the default theme settings to the Twenty Seven Pro Theme.
 *
 * @package Twenty Seven
 * @author  Brian Gardner
 * @license GPL-2.0+
 * @link    http://briangardner.com/
 */

add_filter( 'genesis_theme_settings_defaults', 'twenty_seven_theme_defaults' );
/**
* Updates theme settings on reset.
*
* @since 2.2.3
*/
function twenty_seven_theme_defaults( $defaults ) {

	$defaults['blog_cat_num']              = 6;
	$defaults['content_archive']           = 'full';
	$defaults['content_archive_limit']     = 0;
	$defaults['content_archive_thumbnail'] = 0;
	$defaults['posts_nav']                 = 'numeric';
	$defaults['site_layout']               = 'content-sidebar';

	return $defaults;

}

add_action( 'after_switch_theme', 'twenty_seven_theme_setting_defaults' );
/**
* Updates theme settings on activation.
*
* @since 2.2.3
*/
function twenty_seven_theme_setting_defaults() {

	if ( function_exists( 'genesis_update_settings' ) ) {

		genesis_update_settings( array(
			'blog_cat_num'              => 6,	
			'content_archive'           => 'full',
			'content_archive_limit'     => 0,
			'content_archive_thumbnail' => 0,
			'posts_nav'                 => 'numeric',
			'site_layout'               => 'content-sidebar',
		) );
		
	} 

	update_option( 'posts_per_page', 6 );

}