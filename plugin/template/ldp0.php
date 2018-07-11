<?php
/*
 * Plugin Name: LDP0
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: ldp0
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-ldp0.php' );
require_once( 'includes/class-ldp0-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-ldp0-admin-api.php' );
require_once( 'includes/lib/class-ldp0-post-type.php' );
require_once( 'includes/lib/class-ldp0-taxonomy.php' );

/**
 * Returns the main instance of LDP0 to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object LDP0
 */
function LDP0 () {
	$instance = LDP0::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = LDP0_Settings::instance( $instance );
	}

	return $instance;
}

LDP0();