<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'SUPREME_DIR_URI' ) )
		define( 'SUPREME_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'SUPREME_DIR_ASSETS_URI' ) )
		define( 'SUPREME_DIR_ASSETS_URI', SUPREME_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'SUPREME_DIR_CSS_URI' ) )
		define( 'SUPREME_DIR_CSS_URI', SUPREME_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'SUPREME_DIR_JS_URI' ) )
		define( 'SUPREME_DIR_JS_URI', SUPREME_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('SUPREME_DIR_ICON_IMG_URI') )
		define( 'SUPREME_DIR_ICON_IMG_URI', SUPREME_DIR_ASSETS_URI.'img/icon/' );
	
	//DIR inc
	if( !defined( 'SUPREME_DIR_INC' ) )
		define( 'SUPREME_DIR_INC', SUPREME_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'SUPREME_DIR_ELEMENTOR' ) )
		define( 'SUPREME_DIR_ELEMENTOR', SUPREME_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'SUPREME_DIR_PATH' ) )
		define( 'SUPREME_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'SUPREME_DIR_PATH_INC' ) )
		define( 'SUPREME_DIR_PATH_INC', SUPREME_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'SUPREME_DIR_PATH_LIB' ) )
		define( 'SUPREME_DIR_PATH_LIB', SUPREME_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'SUPREME_DIR_PATH_CLASSES' ) )
		define( 'SUPREME_DIR_PATH_CLASSES', SUPREME_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'SUPREME_DIR_PATH_WIDGET' ) )
		define( 'SUPREME_DIR_PATH_WIDGET', SUPREME_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'SUPREME_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'SUPREME_DIR_PATH_ELEMENTOR_WIDGETS', SUPREME_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( SUPREME_DIR_PATH_INC . 'supreme-breadcrumbs.php' );
	// Sidebar register file include
	require_once( SUPREME_DIR_PATH_INC . 'widgets/supreme-widgets-reg.php' );
	// Post widget file include
	require_once( SUPREME_DIR_PATH_INC . 'widgets/supreme-recent-post-thumb.php' );
	// News letter widget file include
	require_once( SUPREME_DIR_PATH_INC . 'widgets/supreme-newsletter-widget.php' );
	//Social Links
	require_once( SUPREME_DIR_PATH_INC . 'widgets/supreme-social-links.php' );
	// Instagram Widget
	require_once( SUPREME_DIR_PATH_INC . 'widgets/supreme-instagram.php' );
	// Nav walker file include
	require_once( SUPREME_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( SUPREME_DIR_PATH_INC . 'supreme-functions.php' );

	// Theme Demo file include
	require_once( SUPREME_DIR_PATH_INC . 'demo/demo-import.php' );

	// Post Like
	require_once( SUPREME_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( SUPREME_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( SUPREME_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( SUPREME_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( SUPREME_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( SUPREME_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( SUPREME_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( SUPREME_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( SUPREME_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class supreme dashboard
	require_once( SUPREME_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	// Common css
	require_once( SUPREME_DIR_PATH_INC . 'supreme-commoncss.php' );


	if( class_exists( 'RW_Meta_Box' ) ){
		// Metabox Function
		require_once( SUPREME_DIR_PATH_INC . 'supreme-metabox.php' );
	}


	// Admin Enqueue Script
	function supreme_admin_script(){
		wp_enqueue_style( 'supreme-admin', get_template_directory_uri().'/assets/css/supreme_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'supreme_admin', get_template_directory_uri().'/assets/js/supreme_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'supreme_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Supreme object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Supreme Dashboard .
	 *
	 */
	
	$Supreme = new Supreme();
	
