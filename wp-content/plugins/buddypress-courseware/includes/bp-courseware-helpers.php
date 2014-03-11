<?php

// function to log to debug log for development purposes
/**
 * Prints to the WordPress debug log
 * @param string|array $log
 */
function bp_courseware_write_log ( $log )  {
	if ( true === WP_DEBUG ) {
		if ( is_array( $log ) || is_object( $log ) ) {
			error_log( print_r( $log, true ) );
		} else {
			error_log( $log );
		}
	}
}