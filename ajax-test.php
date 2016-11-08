<?php
/**
 *
 * @link              https://programming-review.com
 * @since             1.0.0
 * @package           Ajax_Test
 *
 * @wordpress-plugin
 * Plugin Name:       Ajax Test
 * Plugin URI:        https://programming-review.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Dejan Batanjac
 * Author URI:        https://programming-review.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ajax-test
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ajax-test-activator.php
 */
function activate_ajax_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ajax-test-activator.php';
	Ajax_Test_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ajax-test-deactivator.php
 */
function deactivate_ajax_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ajax-test-deactivator.php';
	Ajax_Test_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ajax_test' );
register_deactivation_hook( __FILE__, 'deactivate_ajax_test' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ajax-test.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ajax_test() {

	$plugin = new Ajax_Test();
	$plugin->run();

}
run_ajax_test();
