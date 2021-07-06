<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.cmsminds.com
 * @since             1.0.0
 * @package           Testing_Git_Ftp
 *
 * @wordpress-plugin
 * Plugin Name:       Testing Git FTP
 * Plugin URI:        www.cmsminds.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Nirav Mehta
 * Author URI:        www.cmsminds.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       testing-git-ftp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TESTING_GIT_FTP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-testing-git-ftp-activator.php
 */
function activate_testing_git_ftp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-testing-git-ftp-activator.php';
	Testing_Git_Ftp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-testing-git-ftp-deactivator.php
 */
function deactivate_testing_git_ftp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-testing-git-ftp-deactivator.php';
	Testing_Git_Ftp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_testing_git_ftp' );
register_deactivation_hook( __FILE__, 'deactivate_testing_git_ftp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-testing-git-ftp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_testing_git_ftp() {

	$plugin = new Testing_Git_Ftp();
	$plugin->run();

}
run_testing_git_ftp();
