<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://dannyho.io/
 * @since      1.0.0
 *
 * @package    Ghtk_Woocommere
 * @subpackage Ghtk_Woocommere/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ghtk_Woocommere
 * @subpackage Ghtk_Woocommere/includes
 * @author     Danny Ho <me@hoquocdat.com>
 */
class Ghtk_Woocommere_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ghtk-woocommere',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
