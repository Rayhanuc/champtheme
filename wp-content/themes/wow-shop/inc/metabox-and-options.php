<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

function wow_shop_theme_metabox( $options ) {

$options = array(); //remove old options

// Options 1 start

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
    'id'        => 'wow_shop_page_options',
    'title'     => esc_html__('Page Options', 'wow-shop'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
  
      // begin: a section
      array(
        'name'  => 'wow_shop_page_options_meta',
        'icon'  => 'fa fa-cog',
  
        // begin: fields
        'fields' => array(
  
          // begin: a field
          array(
            'id'    => 'enable_title',
            'type'  => 'switcher',
            'title' => esc_html__('Enable title?', 'wow-shop'),
            'default' => true,
            'desc'  => esc_html__('If you want to enable title, select yes.', 'wow-shop'),
          ),
          array(
            'id'    => 'enable_content',
            'type'  => 'switcher',
            'title' => 'Enable content?',
            'default' => false,
            'desc'  => esc_html__('If you want to enable content, select yes.', 'wow-shop'),
          ),
          // end: a field  
        ), // end: fields
      ), // end: a section
    ),
  ); // Options 1 end

    return $options;
}
add_filter( 'cs_metabox_options', 'wow_shop_theme_metabox' );