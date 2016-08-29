<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mauricenaef.ch
 * @since             1.0.0
 * @package           Sport_League_Table
 *
 * @wordpress-plugin
 * Plugin Name:       Sport League Table
 * Plugin URI:        https://github.com/mauricenaef/sport-league-table
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            MAURICE NAEF webdesigner
 * Author URI:        https://mauricenaef.ch
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sport-league-table
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sport-league-table-activator.php
 */
function activate_sport_league_table() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sport-league-table-activator.php';
	Sport_League_Table_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sport-league-table-deactivator.php
 */
function deactivate_sport_league_table() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sport-league-table-deactivator.php';
	Sport_League_Table_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sport_league_table' );
register_deactivation_hook( __FILE__, 'deactivate_sport_league_table' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sport-league-table.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sport_league_table() {

	$plugin = new Sport_League_Table();
	$plugin->run();

}
run_sport_league_table();
