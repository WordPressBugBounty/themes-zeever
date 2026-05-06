<?php
/**
 * Theme Functions
 *
 * @author  Jegstudio
 * @package zeever
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'ZEEVER_VERSION' ) || define( 'ZEEVER_VERSION', '1.2.1' );
defined( 'ZEEVER_DIR' ) || define( 'ZEEVER_DIR', trailingslashit( get_template_directory() ) );

defined( 'GUTENVERSE_COMPANION_REQUIRED_VERSION' ) || define( 'GUTENVERSE_COMPANION_REQUIRED_VERSION', '2.3.2' );
defined( 'GUTENVERSE_LIBRARY_SERVER' ) || define( 'GUTENVERSE_LIBRARY_SERVER', 'https://gutenverse.com' );

require get_parent_theme_file_path( 'inc/autoload.php' );

Zeever\Init::instance();
