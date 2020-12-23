<?php
/**
 * @package  VrtickPlugin
 */
namespace Inc\Base;

class BaseController
{
    public $plugin_path;

    public $plugin_url;

    public $plugin;

    public function __construct(){
        $this->plugin_path = plugin_dir_path( dirname( __FILE__, 2 ) );
        $this->plugin_url = plugin_dir_url( dirname( __FILE__, 2 ) );
        $this->plugin = plugin_basename( dirname( __FILE__, 3 ) ) . '/vrtick-plugin.php';
        // Dopiero Poziom 3 "( __FILE__, 3 )" jest właściwy ponieważ 2 poziom "( __FILE__, 2 )"
        //nie wskazywał właściwej lokacji podczas wywoływania 'settings' w menu Wordpressa

    }
}   

// Define Constants
define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN', plugin_basename( __FILE__ ) );