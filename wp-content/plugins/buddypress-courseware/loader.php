<?php
/*
Plugin Name: BuddyPress Courseware Component
Plugin URI: http://example.org/my/awesome/bp/component
Description: This is an LMS system that uses BuddyPress and bbPress for main functionality. It provides all addon components required. Additional functionality comes through plugin addons.
Version: 1.9.2
Revision Date: 2014 11, 2014
Requires at least: WP 3.8.1, BuddyPress 1.9.2, bbPress 2.5.3
Tested up to: WP 3.8.1, BuddyPress 1.9.2, bbPress 2.5.3
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
Author: Madalin Ignisca
Author URI: http://www.imadalin.ro/
Network: true
*/

// Define a constant that can be checked to see if the component is installed or not.
define( 'BP_COURSEWARE_IS_INSTALLED', 1 );

// Define a constant that will hold the current version number of the component
// @todo: this section will be changed to follow the new BuddyPress implementation, but still this way is safe and would work forever; great to work on PHP :)
define( 'BP_COURSEWARE_VERSION', '1.9.2' );

// Define a constant that we can use to construct file paths throughout the component
// @todo: I don't find this way good, WordPress has some new stuff to work with file paths better now
define( 'BP_COURSEWARE_PLUGIN_DIR', dirname( __FILE__ ) );

// Define a constant that will hold the database version number that can be used for upgrading the DB
define( 'BP_COURSEWARE_DB_VERSION', '0.1' );



/* Only load the component if BuddyPress is loaded and initialized. */
function bp_courseware_init() {
	if ( version_compare( BP_VERSION, '1.5', '>=' ) ) {
		require_once( BP_COURSEWARE_PLUGIN_DIR . '/includes/bp-courseware-loader.php');
	}
}
add_action( 'bp_include', 'bp_courseware_init' );

/* Activation hook. Runs when you activate the plugin */
function bp_courseware_activate() {
	
}
register_activation_hook( __FILE__, 'bp_courseware_activate' );

/* On deacativation, clean up anything your component has added. This runs if you delete the plugin from the Dashboard!!! */
function bp_courseware_deactivate() {
	// @todo improve the cool WordPress way in separate files and prepare the database.
	// @todo make migration script from old version 0.9.7 based on communities requirements
}
register_uninstall_hook( __FILE__, 'bp_courseware_deactivate' );