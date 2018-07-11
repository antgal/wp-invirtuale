<?php
/*

@copyright 2018 Antonio Gallucci

Plugin Name:  InVirtuale
Description:  Plugin per funzionalità extra di Legalità 2.0
Version:      0.1
Author:       Antonio Gallucci
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html


InVirtuale is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
InVirtuale is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with InVirtuale. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


function iv_setup_post_type() {
    // register the "evento" custom post type
    register_post_type( 'iv_evento',  
    array(
        'labels'      => array(
            'name'          => __('Eventi'),
            'singular_name' => __('Evento'),
        ),
        'public'      => true,
        'has_archive' => true,
    )
);
}
add_action( 'init', 'iv_setup_post_type' );
 

function iv_install() {
    // trigger our function that registers the custom post type
    iv_setup_post_type();
 
    // clear the permalinks after the post type has been registered
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'iv_install' );


function iv_deactivation() {
    // unregister the post type, so the rules are no longer in memory
    unregister_post_type( 'iv_evento' );
    // clear the permalinks to remove our post type's rules from the database
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'iv_deactivation' );


function iv_uninstall() {
    // unregister the post type, so the rules are no longer in memory
    unregister_post_type( 'iv_evento' );
}
register_uninstall_hook(__FILE__, 'iv_uninstall');