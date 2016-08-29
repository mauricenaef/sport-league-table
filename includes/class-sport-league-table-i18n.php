<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mauricenaef.ch
 * @since      1.0.0
 *
 * @package    Sport_League_Table
 * @subpackage Sport_League_Table/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sport_League_Table
 * @subpackage Sport_League_Table/includes
 * @author     MAURICE NAEF webdesigner <me@mauricenaef.ch>
 */
class Sport_League_Table_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sport-league-table',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
