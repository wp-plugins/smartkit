<?php
/*
  Plugin Name: Smartkit
  Plugin URI: http://smartcatdesign.net/downloads/smartkit
  Description: Essential tools for every website! Power up your site with Smartkit
  Version: 1.0
  Author: SmartCat
  Author URI: http://smartcatdesign.net
  License: GPL v2
  Text Domain: smartkit
 * 
 * @author          Bilal Hassan <bilal@smartcat.ca>
 * @copyright       Smartcat Design <http://smartcatdesign.net>
 */


// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    die;
}
if (!defined('SMARTCAT_KIT_PATH'))
    define('SMARTCAT_KIT_PATH', plugin_dir_path(__FILE__));
if (!defined('SMARTCAT_KIT_URL'))
    define('SMARTCAT_KIT_URL', plugin_dir_url(__FILE__));


require_once ( plugin_dir_path( __FILE__ ) . 'inc/class/class.smartcat-kit.php' );


// activation and de-activation hooks

register_activation_hook( __FILE__, array( 'SmartcatKitPlugin', 'activate' ) );
register_deactivation_hook( __FILE__, array('SmartcatKitPlugin', 'deactivate')  );

SmartcatKitPlugin::instance();



