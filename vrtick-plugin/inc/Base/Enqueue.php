<?php 

/**
 * @package  VrtickPlugin
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

/**
* 
*/
class Enqueue extends BaseController
{
	public function register() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    function enqueue(){
        // enqueue all our scripts
        wp_enqueue_script( 'aframeplugin', $this->plugin_url .  'assets/aframe.min.js');
        wp_enqueue_script( 'aframemasterplugin', $this->plugin_url .  'assets/aframe.master.js');

      // te dwa są nie używane na razie || To są stare js, które probowałem. Niestety nie działały :P.
      // wp_enqueue_script( 'panolensplugin', $this->plugin_url .  'assets/panolens.min.js');
      // wp_enqueue_script( 'threejsplugin', $this->plugin_url .  'assets/three.min.js');
      // wp_enqueue_script( 'vrtickcsript', 'https://aframe.io/releases/1.1.0/aframe.min.js');
    }
}
