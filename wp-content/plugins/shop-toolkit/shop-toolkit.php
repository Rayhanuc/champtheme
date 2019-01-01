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

// Exit if accessed directly
if(! defined ( 'ABSPATH' ) ){
    exit;
}


// Define
define( 'WOW_SHOP_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename (dirname(__FILE__)) . '/' );
define( 'WOW_SHOP_ACC_PATH', plugin_dir_path(__FILE__) );

add_action( 'init', 'wow_shop_theme_custom_post' );
function wow_shop_theme_custom_post() {
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => __( 'Slides' ),
                'singular_name' => __( 'Slide' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
}

// Print shorcodes in widgets
//add_filter('widget_text', 'do_shotcode');

// Loading VC addons
// require_once( WOW_SHOP_ACC_PATH . 'vc-addons/vc-blocks-load.php' );

// Theme shortcodes
// require_once( WOW_SHOP_ACC_PATH . 'theme-shortcodes/slides-shortcode.php' );


// Shortcodes depended on Visual Composer
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
// if (if_plugin_active('js_composer/js_composer.php')) {
//     require_once ( WOW_SHOP_ACC_PATH . 'theme-shortcodes/staff-shortcode.php' );
// }


// Regisering stock foolkit files
function wow_shop_toolkit_files() {
    wp_enqueue_style('owl-carousel', plugin_dir_url( __FILE__ ) . 'assets/css/owl-carousel.css');
    wp_enqueue_script('owl-carousel', plugin_dir_url( __FILE__ ) . 'assets/js/owl-carousel.min.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_script', 'wow_shop_toolkit_files' );


// Toolkit files





// Theme shortcodes
































// // Shortcode inside custom post wordpress from --- http://wpcheatsheet.net

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
                "type" => "dropdown",
                "heading" => __( "Post type", "wow-shop" ),
                "param_name" => "type",
                "std" => "post",
                "value" => array(
                    //"Lavel" => "value",
                    "Page" => "page",
                    "Post" => "post"
                ),
                "description" => __( "Type post type here.", "wow-shop" )
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Post count", "wow-shop" ),
                "param_name" => "count",
                "value" => __( "-1", "wow-shop" ),
                "description" => __( "Type how many item you want to show. Number only. Type -1 for unlimited item.", "wow-shop" ),
                "dependency" => array(
                    "element" => "type",
                    "value" => "post"
                )
            ),
            array(
                "type" => "vc_link",
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
            //type test start
            array(
                "type" => "textarea_html",
                "heading" => __( "Textarea html", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Textfield", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "textarea",
                "heading" => __( "Text area", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Dropdown", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "attach_image	",
                "heading" => __( "Attach image", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "attach_images",
                "heading" => __( "Attach Images", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "posttypes",
                "heading" => __( "Post types", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "iconpicker",
                "heading" => __( "Icon", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "exploded_textarea",
                "heading" => __( "Exploded textarea", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "widgetised_sidebars",
                "heading" => __( "Widgetised sidebars", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "textarea_raw_html",
                "heading" => __( "Textarea raw html", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "vc_link",
                "heading" => __( "Vc link", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "checkbox",
                "heading" => __( "Checkbox", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "loop",
                "heading" => __( "Loop", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            array(
                "type" => "css",
                "heading" => __( "CSS", "wow-shop" ),
                "param_name" => "icon",
                "value" => __( "fa fa-link", "wow-shop" ),
                "description" => __( "Select link icon.", "wow-shop" )
            ),
            //type test end
        )
    ));

}
add_action( 'vc_before_init', 'wow_shop_vc_post_list_addon' );