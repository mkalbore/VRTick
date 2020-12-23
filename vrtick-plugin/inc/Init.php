<?php

/**
 * @package  VrtickPlugin
 */
namespace Inc;

////////////////////////////////////////////////////
//'final' znaczy ze PHP nie może roszerzyć tej klasy

final class Init
{
    /**
     * Store all the classes inside an array
     * @return array Full list of classes
     */

    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];
    }

    /**
     * Loop through the classes, initialize them, 
     * and call the register() method if it exists
     * @return 
     */


    public static function register_services() 
    {
        foreach ( self::get_services() as $class)  {
            $service = self::instantiate( $class );
            if ( method_exists( $service, 'register' ) ){
                $service ->register();
            }
        }          
    }

    ////////////////////////////////////////////////////////////////////////////////////
    //Obydwie metody 'register_services' i 'instantiate' automatyzują wszystko
    // Za każdym razem gdy tworzymy nową classę, instację oraz chcę wywołać metodę 'register' 
    // Dodaję nową nazwę classy do wartości 'return'
    ////////////////////////////////////////////////////////////////////////////////////


    /**
     * Initialize the class
     * @param class   $class class from the services array
     * @return class  instance new instasnce of the class
     */

    private static function instantiate( $class ) 
    {
        //To co tutaj jest to wsumie to samo co 'Pages\Admin::class'
        $service = new $class();

        return $service;
    }
}


















///////////////// __ S T A R Y ___ K O D __ /////////////////


// //////////////////////////////////////////////////////////////////////////
// //Nastepnie za pomoca Globalnego namespace o nazwie 'Inc' wywojuję Classy

// use Inc\Activate;
// use Inc\Deactivate;
// use Inc\Admin\AdminPages;


// class VrtickPlugin
// {
// 	public $plugin;

// 	function __construct() {
// 		$this->plugin = plugin_basename( __FILE__ );
// 	}
	
// 	function register(){
		
// 		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );

// 		add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );

// 		add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
// 		//To jest jako backend. Jesli chcesz zamienic to na element fromtendu
// 		//to zmien 'admin_enqueue_scripts' na 'wp_enqueue_scripts' 
// 	}

// 	public function settings_link( $links ) {
// 		$settings_link = '<a href="admin.php?page=vrtick_plugin">Settings</a>';
// 		array_push( $links, $settings_link );
// 		return $links;
// 	}
// 	////////////////////////////////////////////////////////
// 	//Przeniesione do Adminpages.php
// 	///////////////////////////////////////

// 	// public function add_admin_pages() {
// 	// 	add_menu_page( 'VRTick Plugin', 'vrtick', 'manage_options', 'vrtick_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
// 	// }
// 	// public function admin_index() {
// 	// 	require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
// 	// }

// 	//////////////////// NIEWIEM PO CO MI TO /////////////////////////////////
// 	protected function create_post_type() {
// 		add_action( 'init', array( $this, 'custom_post_type' ) );
// 	}
// 	function custom_post_type() {
// 		register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
// 	}
// 	//Chyba tylko do sprawdzenia czy coś się dzieje 
// 	////////////////////////////////////////////////////////////////

// 	function activate() {
// 		// generated a CPT
// 		Activate::activate();
// 	}
	
// 	function deactivate(){
// 		// flush rewrite rules
// 		flush_rewrite_rules();
// 	}
	
// //	function uninstall(){
// 		// delete CPT
// 		// delete all the plugin data from the db
// //	}

// 	function enqueue(){
// 		// enqueue all our scripts
// 		wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ) );
// 		wp_enqueue_script( 'mypluginscsript', plugins_url( '/assets/myscript.js', __FILE__ ) );
// 	}
// }




// ///////////////////////////////////////////////////////////////////
// // HOOOKI

// if (class_exists( 'VrtickPlugin' ) )
// {
// 	$vrtickPlugin = new VrtickPlugin();
// 	$vrtickPlugin->register();
// }
 
// // activation
// register_activation_hook( __FILE__, array( $vrtickPlugin, 'activate' ) );

// // deactivation
// register_deactivation_hook( __FILE__, array( 'Deactivate', 'deactivate' ) );


