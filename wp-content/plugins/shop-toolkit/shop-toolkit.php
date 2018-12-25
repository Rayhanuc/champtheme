<?php
/*
Plugin Name: Shop Toolkit
Plugin URI: https://theme.com/
Description: 
Version: 1.0
Author: Automattic
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: wow shop
*/

// Test Shortcode

function shop_alert_shortcode($atts, $content = null) {
    extract(shortcode_atts(
        array(
            'city' => ''
        ),
        
        $atts
    ));
    
    if ($city == 'Dhaka') {
        $message = ''.esc_html( $city ).' is the most populated city';
    } elseif ($city = 'Sylhet') {
        $message = ''.esc_html( $city ).' is the most beautiful city';
    } elseif ($city = 'Borishal') {
        $message = ''.esc_html( $city ).' is the land of river.';
    } else {
        $message = 'You do not have add your city';
    }

    return $message;
}
add_shortcode( 'alert', 'shop_alert_shortcode' );



function shop_image_shortcode($atts, $content = null) {
    extract(shortcode_atts(
        array(
            'id' => ''
        ),
        
        $atts
    ));

    $img_array = wp_get_attachment_image_src($id,'large' );
    return '<img src="'.$img_array[0].'"/>';
}
add_shortcode( 'image', 'shop_image_shortcode' );