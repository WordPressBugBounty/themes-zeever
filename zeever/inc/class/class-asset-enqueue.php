<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package zeever
 */
namespace Zeever;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package zeever
 */
class Asset_Enqueue {
	/**
	 * Class constructor.
	 */
	public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 20 );
		add_action( 'enqueue_block_assets', array( $this, 'enqueue_scripts' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ), 20 );
	}

    /**
	 * Enqueue scripts and styles.
	 */
	public function enqueue_scripts() {
		wp_enqueue_style( 'zeever-style', get_stylesheet_uri(), array(), ZEEVER_VERSION );

				wp_enqueue_style( 'zeever-preset', trailingslashit( get_template_directory_uri() ) . '/assets/css/zeever-preset.css', array(), ZEEVER_VERSION );
		wp_enqueue_style( 'zeever-custom-styling', trailingslashit( get_template_directory_uri() ) . '/assets/css/zeever-custom-styling.css', array(), ZEEVER_VERSION );
		wp_enqueue_script( 'zeever-animation-script', trailingslashit( get_template_directory_uri() ) . '/assets/js/zeever-animation-script.js', array(), ZEEVER_VERSION, true );


        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
    }

	/**
	 * Enqueue admin scripts and styles.
	 */
	public function admin_scripts() {
		
    }
}
