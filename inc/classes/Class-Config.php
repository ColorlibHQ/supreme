<?php 
/**
 * @Packge 	   : Supreme
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	// Final Class
	final class Supreme{

		
		// Theme Version
		private $supreme_version = '1.0';

		// Minimum WordPress Version required
		private $min_wp = '4.0';

		// Minimum PHP version required 
		private $min_php = '5.6.25';

		function __construct(){
			// Theme Support
			add_action( 'after_setup_theme', array( $this, 'support' ) );
			// 
			$this->init();
		}

		// Theme init
		public function init(){
			//
			$this->setup();

			// customizer init Instantiate
			$this->customizer_init();
			
		}

		// Theme setup
		private function setup(){
			
			// Create enqueue class instance
			$enqueu = new supreme_Enqueue();
			$enqueu->scripts = $this->enqueue() ;
			$enqueu->supreme_scripts_enqueue_init() ;

		}
		// Theme Support
		public function support(){
			// content width
	        $GLOBALS['content_width'] = apply_filters( 'supreme_content_width', 751 );

	        
	        // text domain for translation.
	        load_theme_textdomain( 'supreme', SUPREME_DIR_PATH . '/languages' );
	        
	        // support title tage
	        add_theme_support( 'title-tag' );
	        
	        // support logo
			add_theme_support( 'custom-logo', array(
				'height'      => 62,
				'width'       => 233,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			) );

			//Custom Hreader
			add_theme_support( 'custom-header', array(
				'flex-width'    => true,
				'width'         => 1920,
				'flex-height'   => true,
				'height'        => 424,
				'default-image' => get_template_directory_uri() . '/assets/img/banner.jpg'
			) );

			//Custom background
			add_theme_support( 'custom-background', array(
				'default-color' => 'ffffff'
			) );

	        //  support post format
	        add_theme_support( 'post-formats', array( 'video','audio' ) );
	        
	        // support post-thumbnails
	        add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );
			
			// Site logo size
			add_image_size( 'supreme_logo_233x62', 233, 62, true );
			add_image_size( 'supreme_footer_logo_234x61', 234, 61, true );
					
			// About section image size
			add_image_size( 'supreme_about1_section_555x450', 555, 450, true );
			
			// Our industries image size
			add_image_size( 'supreme_our_industries_360x440', 360, 440, true );
						
			// Portfolio image size
			add_image_size( 'supreme_portfolio_1_image_555x587', 555, 587, true );
			add_image_size( 'supreme_portfolio_2_image_555x677', 555, 677, true );
			add_image_size( 'supreme_portfolio_3_image_555x607', 555, 607, true );
			add_image_size( 'supreme_portfolio_single_image_970x520', 970, 520, true );
			add_image_size( 'supreme_portfolio_iner_image_457x484', 457, 484, true );

			// Team member image size
			add_image_size( 'supreme_team_img_263x320', 263, 320, true );

			// Home blog post image size
			add_image_size( 'supreme_latest_blog_360x366', 360, 366, true );

			// Latest post thumbnail Widget thumbnail size
			add_image_size( 'supreme_widget_post_thumb', 80, 80, true );

			// Single blog post image size
			add_image_size( 'supreme_single_blog_750x375', 750, 375, true );
			add_image_size( 'supreme_np_thumb', 60, 60, true );
	        	        
	        // support automatic feed links
	        add_theme_support( 'automatic-feed-links' );
	        
	        // support html5
	        add_theme_support( 'html5' );
			
			// Add theme support for selective refresh for widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );
						    
	        // register nav menu
	        register_nav_menus( array(
	            'primary-menu'   => esc_html__( 'Primary Menu', 'supreme' ),
				'best-services'  => esc_html__( 'Best Services', 'supreme' )
	        ) );

	        // editor style
	        add_editor_style('assets/css/editor-style.css');

		} // end support method

		// enqueue theme style and script
		private function enqueue(){

			$cssPath = SUPREME_DIR_CSS_URI;
			$jsPath  = SUPREME_DIR_JS_URI;

			$scripts = array(
				'style' => array(
					array(
						'handler'		=> 'supreme-theme-google-font',
						'file' 			=> $this->google_font(),
					),
					array(
						'handler'		=> 'supreme-theme-bootstrap',
						'file' 			=> $cssPath.'bootstrap.min.css',
						'dependency' 	=> array(),
						'version' 		=> '5.3.8-5',
					),
					array(
						'handler'		=> 'supreme-theme-animate',
						'file' 			=> $cssPath.'animate.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'supreme-theme-owl-carousel',
						'file' 			=> $cssPath.'owl.carousel.min.css',
						'dependency' 	=> array(),
						'version' 		=> '2.3.4',
					),
					array(
						'handler'		=> 'supreme-theme-font-awesome',
						'file' 			=> $cssPath.'font-awesome.min.css',
						'dependency' 	=> array(),
						'version' 		=> '7.3.1-1',
					),
					array(
						'handler'		=> 'supreme-theme-themify',
						'file' 			=> $cssPath.'themify-icons.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'supreme-theme-flaticon',
						'file' 			=> $cssPath.'flaticon.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'supreme-theme-magnific-popup-css',
						'file' 			=> $cssPath.'magnific-popup.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'supreme-theme-slick-css',
						'file' 			=> $cssPath.'slick.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'supreme-theme-default-css',
						'file' 			=> $cssPath.'default.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'supreme-theme-style-css',
						'file' 			=> $cssPath.'style.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					
					array(
						'handler'		=> 'supreme-theme-supreme-style',
						'file' 			=> get_stylesheet_uri(),
					),
				),
				
				'scripts' => array(
					array(
						'handler'		=> 'supreme-theme-bootstrap',
						'file' 			=> $jsPath.'bootstrap.min.js',
						'dependency' 	=> array(),
						'version' 		=> '5.3.8-4',
						'in_footer' 	=> true
					),

					array(
						'handler'		=> 'supreme-ui-js',
						'file' 			=> $jsPath . ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? 'colorlib-ui.js' : 'colorlib-ui.min.js' ),
						'dependency' 	=> array(),
						'version' 		=> '3.0.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'supreme-theme-supreme-custom',
						'file' 			=> $jsPath.'custom.js',
						'dependency' 	=> array( 'supreme-ui-js' ),
						'version' 		=> $this->supreme_version . '-s2',
						'in_footer' 	=> true
					),

				)
			);

			return $scripts;

		} // end enqueu method 

		// Google Font  
		private function google_font(){
			$font_url = '';

			/*
			 * The families this theme uses are bundled under
			 * assets/fonts/google, so nothing is fetched from Google and
			 * no request leaves the visitor's browser for a third party.
			 *
			 * Translators can still turn the fonts off for scripts these
			 * families do not cover.
			 */
			if ( 'off' !== _x( 'on', 'Google font: on or off', 'supreme' ) ) {
				$font_url = get_template_directory_uri() . '/assets/css/google-fonts.css';
			}

			return esc_url_raw( $font_url );
		} //End google_font method

		private function customizer_init(){

		
			

			
			// Instantiate supreme theme customizer
			$supreme_theme_customizer = new supreme_theme_customizer();
		}
	} // End Supreme Class

?>