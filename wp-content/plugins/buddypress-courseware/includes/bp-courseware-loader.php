<?php

if ( !defined( 'ABSPATH' ) ) exit;

// include helpers
require_once( \BP_COURSEWARE_PLUGIN_DIR . '/includes/bp-courseware-helpers.php' );

/* Translations */
if( file_exists( BP_COURSEWARE_PLUGIN_DIR . '/languages/' . get_locale() . 'mo' ) ) {
    load_textdomain( 'bp-courseware', BP_COURSEWARE_PLUGIN_DIR . '/languages/' . get_locale() . 'mo' );
}

/* Courseware component implementing BP_Component */
class BP_Courseware_Component extends BP_Component {
    /**
     * Constructor method
     */
    function __construct() {
        global $bp;

        parent::start(
            'course',
            'Course',
            BP_COURSEWARE_PLUGIN_DIR
        );

        $this->includes();

        $bp->active_components[$this->id] = '1';

        add_action( 'init', array( &$this, 'register_post_types' ) );

        // parent calls next steps
    }

    /**
     * Includes
     */
    function includes() {
        $includes = array(
            'includes/bp-courseware-actions.php',
            'includes/bp-courseware-screens.php',
            'includes/bp-courseware-filters.php',
            'includes/bp-courseware-classes.php',
            'includes/bp-courseware-activity.php',
            'includes/bp-courseware-template.php',
            'includes/bp-courseware-functions.php',
            'includes/bp-courseware-notifications.php',
            'includes/bp-courseware-widgets.php',
            'includes/bp-courseware-cssjs.php',
            'includes/bp-courseware-ajax.php',
        );

        parent::includes( $includes );

        if( is_admin() || is_network_admin() ) {
            include( BP_COURSEWARE_PLUGIN_DIR . '/includes/bp-courseware-admin.php' );
        }
    }

    /**
     * Custom Post Types
     */
    function register_post_types() {

    }
}
