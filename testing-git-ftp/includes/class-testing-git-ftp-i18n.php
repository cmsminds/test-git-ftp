<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.cmsminds.com
 * @since      1.0.0
 *
 * @package    Testing_Git_Ftp
 * @subpackage Testing_Git_Ftp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Testing_Git_Ftp
 * @subpackage Testing_Git_Ftp/includes
 * @author     Nirav Mehta <nirav@cmsminds.com>
 */
class Testing_Git_Ftp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'testing-git-ftp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
