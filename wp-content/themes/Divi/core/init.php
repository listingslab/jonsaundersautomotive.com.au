<?php
/**
 * Load Elegant Themes Core.
 *
 * @package Core
 */

// Stop here if the Core was already loaded.
if ( defined( 'ET_CORE' ) ) {
	return;
}

define( 'ET_CORE', true );

/**
 * Setup Core.
 *
 * @since 1.0.0
 *
 * @param string $url Url used to load the Core assets.
 *
 * @return bool Always return true.
 */
function et_core_setup( $url ) {
	if ( ! defined( 'ET_CORE_VERSION' ) ) {
		define( 'ET_CORE_VERSION', '1.0.0' );
	}

	define( 'ET_CORE_PATH', trailingslashit( dirname( __FILE__ ) ) );
	define( 'ET_CORE_URL', trailingslashit( $url ) . 'core/' );
	define( 'ET_CORE_TEXTDOMAIN', 'et-core' );

	load_theme_textdomain( 'et-core', ET_CORE_PATH . 'languages/' );

	require_once( ET_CORE_PATH . 'components.php' );

	if ( is_admin() ) {
		require_once( ET_CORE_PATH . 'admin/includes/assets.php' );
	}
}