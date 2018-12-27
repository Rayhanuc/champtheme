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

add_action( 'init', 'wow_theme_custom_post' );
function wow_theme_custom_post() {
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'testimonials' ),
                'singular_name' => __( 'testimonial' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
}


// Shortcode inside custom post wordpress from --- http://wpcheatsheet.net

function post_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => -1,
        'type' => 'post',
        'color' => '#7C3677',
        'icon' => '',
    ), $atts) );
     
    $q = new WP_Query(
        array(
            'posts_per_page' => $count,
            'post_type' => $type,
        )
    );      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $post_content = get_the_content();
        $list .= '<li><a style="color:'.$color.'" href="'.get_permalink( ).'">';
        if (!empty($icon)) {
            $list .= '<i class="'.$icon.'"></i>';
        }
        $list .= ''.get_the_title().'</a></li>';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('post_list', 'post_list_shortcode');  


function wow_shop_vc_post_list_addon() {

    vc_map( array(
        "name" => __( "Post list", "wow-shop" ),
        "base" => "post_list",
        "category" => __( "Wow Shop", "wow-shop"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => __( "Post type", "wow-shop" ),
                "param_name" => "type",
                "value" => __( "post", "wow-shop" ),
                "description" => __( "Type post type here.", "wow-shop" )
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Post count", "wow-shop" ),
                "param_name" => "count",
                "value" => __( "-1", "wow-shop" ),
                "description" => __( "Type how many item you want to show. Number only. Type -1 for unlimited item.", "wow-shop" )
            ),
            array(
                "type" => "colorpicker",
                "heading" => __( "Link color", "wow-shop" ),
                "param_name" => "color",
                "value" => __( "#7C3677", "wow-shop" ),
                "description" => __( "Select color link.", "wow-shop" )
            ),
            array(
                "type" => "iconpicker",
                "heading" => __( "Icon", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
        )
    ));

}
add_action( 'vc_before_init', 'wow_shop_vc_post_list_addon' );