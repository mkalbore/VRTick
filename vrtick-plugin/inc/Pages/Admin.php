<?php 

/**
 * @package  VrtickPlugin
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;
use \Inc\Api\Enqueue;
/**
* 
*/
class Admin extends BaseController
{
	public $settings;

	public $pages = array();

	public function __construct()
	{
		$this->settings = new SettingsApi();

		$this->pages = array(
			array(
				'page_title' => 'VRTick Plugin', 
				'menu_title' => 'VRTick', 
				'capability' => 'manage_options', 
				'menu_slug' => 'vrtick_plugin', 

				'callback' => function() { echo '<html>
					<head>
				
					  <script src="../wp-content/plugins/vrtick-plugin/assets/aframe.master.js"></script>
					  
					</head>
					
				<body>
					  <a-scene>
					  <a-assets>
						  <img id="sky" src="../wp-content/plugins/vrtick-plugin/assets/images/airfield.jpg">
						</a-assets>
						<a-sky src="#sky" rotation="0 -130 0"></a-sky>
				
						<a-text font="kelsonsans" value="Testowy tekst tak o :) " width="7" position="-2.5 0.25 -1.5"
							rotation="0 15 0" color = "#009900"></a-text>
					  </a-scene>
				  </body>
					
				</html>'; },

				'icon_url' => 'dashicons-store', 
				'position' => 110
				//w 'callback' w zasadzie dzieje się wszystko co jest widoczne na stronie
				// całość opiera się na js'ie aframe.master.js i wywołaniu odpowiedniej funkcji
				// w tym wypadku "<a-scene>"

			)
		);
	}
	public function register() 
	{
		$this->settings->addPages( $this->pages )->register();
	}
}