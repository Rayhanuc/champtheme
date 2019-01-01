<?php

if(!defined('ABSPATH')) die('-1');

//Class started
class wowshopVCExtendAddonClass {

    function __construct() {
        function __construct() {
            //We safely integrate with VC with this hook
            add_action('init', array($this, 'wowshopIntegrateWithVC'));
        }
        public function wowshopIntegrateWithVC() {
            //Checks if Visual composer is not installed
            if(! defined('WPB_VC_VERSION')) {
                ADD_ACTION('admin_notices', array($this, 'wowshopShowVcVersionNotice'));
                return;
            }
        }
        

        // visual composer addons.
        include WOW_SHOP_ACC_PATH . '/vc-addons/vc-slides.php';
    }

    //show visual composer version
    public function wowshopShowVcVersionNotice() {
        $theme_date = wp_get_theme();
        echo '
        <div class="notice notice-warning">
            <p>'.sprintf(__('<strong>%s</strong> recommends <strong><a href="'.site_url().'/wp_admin/themes.php?page=tgmpa-install-plugins" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.','wow-shop'), $theme_date->get('Name')).'</p>
        </div>
        ';
    }
}
// Finally initialize code
new wowshopVCExtendAddonClass();