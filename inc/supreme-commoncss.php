<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge     : SUPREME
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
// enqueue css
function supreme_common_custom_css(){
    
    wp_enqueue_style( 'supreme-common', get_template_directory_uri().'/assets/css/dynamic.css' );
		$header_bg         		  = esc_url( get_header_image() );
		$header_bg_img 			  = !empty( $header_bg ) ? 'background-image: url('.esc_url( $header_bg ).')' : '';

		$themeColor     		  = supreme_opt( 'supreme_theme_color' );

		$buttonBorderColor     	  = supreme_opt( 'supreme_button_border_color' );
		$hoverColor     	  	  = supreme_opt( 'supreme_hover_color');

		$headerTop_bg     		  = supreme_opt( 'supreme_top_header_bg_color' );
		$headerTop_col     		  = supreme_opt( 'supreme_top_header_color' );

		$headerTopBg      		  = supreme_opt( 'supreme_top_header_bg_color');
		$headerBg          		  = supreme_opt( 'supreme_header_bg_color');
		$menuColor          	  = supreme_opt( 'supreme_header_menu_color' );
		$menuHoverColor           = supreme_opt( 'supreme_header_menu_hover_color' ) != '#fe5c24' ? supreme_opt('supreme_header_menu_hover_color') : $themeColor;
		$dropMenuBgColor          = supreme_opt( 'supreme_header_drop_menu_bg_color' ) != '#ab7636' ? supreme_opt('supreme_header_drop_menu_bg_color') : $themeColor;
		$dropMenuColor            = supreme_opt( 'supreme_header_drop_menu_color' );
		$dropMenuHovColor         = supreme_opt( 'supreme_header_drop_menu_hover_color' );

		$footerwbgColor     	  = supreme_opt('supreme_footer_bg_color') != '#162b45' ? supreme_opt('supreme_footer_bg_color') : '';
		$footerwTextColor   	  = supreme_opt('supreme_footer_widget_text_color');
		$widgettitlecolor  		  = supreme_opt('supreme_footer_widget_title_color');
		$footerwanchorcolor 	  = supreme_opt('supreme_footer_widget_anchor_color') != '#fe5c24' ? supreme_opt('supreme_footer_widget_anchor_color') : '';
		$footerwanchorhovcolor    = supreme_opt('supreme_footer_widget_anchor_hover_color');
		
		$fofbg					  = supreme_opt('supreme_fof_bg_color');
		$foftonecolor			  = supreme_opt('supreme_fof_textone_color');
		$fofttwocolor			  = supreme_opt('supreme_fof_texttwo_color');

		$gradientBgColor 		  = $themeColor != '#ab7636' ? $themeColor : '';
		$footerAncDefColor 		  = $footerwanchorcolor != '#999999' ? $footerwanchorcolor : $themeColor;
		$footerAncDefHovColor 	  = $footerwanchorhovcolor != '#fe5c24' ? $footerwanchorhovcolor : $themeColor;

		$customcss ="
			.hero-banner{
				{$header_bg_img}
			}
			
			.sub_menu
			{
				background-color: {$headerTopBg};
			}
			
			.dropdown .dropdown-menu
			{
				background-color: {$dropMenuBgColor};
			}

			.banner_part .banner_text .btn_1{
				background: {$gradientBgColor};
			}

			.cta_part .cta_part_iner .cta_part_text p, .about_part .about_text h5, .our_latest_work .single_work_demo h5, .blog_part .single-home-blog .card h5:hover, .blog_part .single-home-blog .card ul li i, .review_part .slick_right:hover, .review_part .slick_left:hover, .blog_part .single-home-blog a, .blog_part .single-home-blog .time, .blog_part .single-home-blog li span, .single_single_service span.fa, section.cta_area a.cta_btn:hover, .sub_menu .sub_menu_right_content i, .sub_menu .sub_menu_social_icon a:hover, .banner-breadcrumb .breadcrumb-item a, .banner_part .banner_text h5 span, .banner_part .banner_text .btn_1:hover, .service_part .single_service_part i, .about_part .about_text h4, .our_industries .single_industries h3 a:hover, .portfolio_part .card-columns .portfolio_btn, .see_more_project .btn_1:hover, .post_2 .post_text_1 h3:hover, .post_2 .category_post_img .category_btn, .footer-area .copyright_part_text a, .subscribe_area .subscribe_iner .btn_2:hover, .sl-button span:hover, .blog_right_sidebar .widget_supreme_recent_widget .post_item .media-body h3:hover, .project_details .project_details_widget .single_project_details_widget span, .blog_right_sidebar .widget_supreme_newsletter .btn_1, .blog_right_sidebar .single_sidebar_widget.widget_supreme_newsletter .btn:hover
			{
				color: {$themeColor}
			}			
			.portfolio_part .card-columns .portfolio_btn path{
				fill: {$themeColor}
			}
			.our_latest_work .single_work_demo .btn_3:hover, .team_member_section .single_team_member .single_team_text h3 a:hover, .team_member_section .single_team_member .team_member_social_icon a:hover, .blog_part .single-home-blog .card .card-body a:hover, .pre_icon a:hover, .next_icon a:hover, .review_part .section_tittle p, .banner-breadcrumb > ol > li.breadcrumb-item > a.bread-link:hover, .review_part .section_tittle p, .banner-breadcrumb .breadcrumb-item a:hover, .blog_details a:hover, .blog_right_sidebar .widget_categories ul li:hover, .blog_right_sidebar .widget_categories ul li:hover a, .blog_right_sidebar .widget_categories ul li a:hover, .blog_area a h2:hover, .main_menu .main-menu-item ul li a:not(.dropdown-item):hover, .post_2 .category_post_img .category_btn:hover, .footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover, .button:hover{
				color: {$themeColor}!important;
			}

			.review_part .intro_video_bg .video-play-button, .review_part .owl-prev span:after, .review_part .owl-next span:after, .review_part .intro_video_bg .video-play-button:after, .review_part .intro_video_bg .video-play-button:before, .review_part .intro_video_bg .video-play-button:hover:after, .blog_item_img .blog_item_date, .single_sidebar_widget .tagcloud a:hover, .blog_right_sidebar .single_sidebar_widget.widget_supreme_newsletter .btn, .pre_icon :after, .next_icon :after, section.cta_area, .service_part .single_service_part .line:after, .service_part .single_service_part:hover, .about_part .about_text .btn_2:hover, .section_tittle h2:after, .our_industries .single_industries h3:after, .faq_part .faq_content .active .accordion-header h2:before, .portfolio_part .card-columns .blockquote h2:after, .see_more_project .btn_1, .contact-section .btn_2:hover
			{
				background: {$themeColor}
			}

			.btn_4, .our_Professional .single_industries_text:hover, .button:not(.wpcf7-submit){
				border-color: {$themeColor};
				background-color: {$themeColor};
			}
			.btn_4:hover{
				color: {$themeColor}!important;
			}

			.service_part .single_service_part:hover .single_service_part_iner span
			{
				background: {$themeColor}!important;
			}

			.btn_2:hover,
			.copyright_part .footer-social a:hover
			{
				background: {$hoverColor}!important;
			}

			.blog_part .single-home-blog .card h5:hover
			{
				color: {$hoverColor};
			}

			.about_part .about_img h2:after, .copyright_part .footer-social a
			{
				border-color: {$themeColor}
			}
			
			.sub_header{
				background: {$headerTop_bg}
			}
			.sub_header .sub_header_social_icon a,
			.sub_header .sub_header_social_icon .register_icon
			{
				color: {$headerTop_col}
			}

			.main_menu_iner.menu_fixed
			{
				background: {$headerBg};
			}
			.main_menu .main-menu-item ul li a
			{
			   color: {$menuColor}!important;
			}
			.main_menu .main-menu-item ul li a:not(.dropdown-item):hover
			{
			   color: {$menuHoverColor}!important;
			}
			
			.dropdown .dropdown-menu .dropdown-item
			{
			   color: {$dropMenuColor}!important;
			}
			.dropdown .dropdown-menu .dropdown-item:hover
			{
			   color: {$dropMenuHovColor}!important;
			}

			.footer-area {
				background: {$footerwbgColor};
			}

			.footer-area .single-footer-widget p, .footer-area .widget_supreme_newsletter .input-group input, .footer-area .copyright_part_text p, .footer-area .footer_2 .social_icon a
			{
				color: {$footerwTextColor}
			}
			.footer-area .widget_supreme_newsletter .input-group, .footer-area .copyright_part_text {
				border-color: {$footerwTextColor}
			}
			.footer-area .single-footer-widget h4
			{
				color: {$widgettitlecolor}
			}

			.footer-area .copyright_part_text a, .footer-area .social_icon a, .footer-area .single-footer-widget ul li a
			{
			   color: {$footerwanchorcolor};
			}
			.footer-area .copyright_part_text .footer-text > a
			{
			   color: {$footerAncDefColor};
			}


			.footer-area .btn{
				background: {$footerwanchorcolor};
			}
			.footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover
			{
			   color: {$footerAncDefHovColor};
			}
			.footer-area .copyright_part_text a:hover, .footer-area .footer_2 .social_icon a:hover
			{
			   color: {$footerAncDefHovColor}!important;
			}

			#f0f {
				background-color: {$fofbg};
			}
			.f0f-content .h1 {
				color: {$foftonecolor};
			}
			.f0f-content p {
				color: {$fofttwocolor};
			}

			.blog_right_sidebar .single_sidebar_widget .btn_1:hover, .comment_form .btn_1.button:hover, .search-page .button.button-contactForm:hover, .f0f-content .button.button-contactForm:hover{
				background: #fff;
			}

        ";
       
    wp_add_inline_style( 'supreme-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'supreme_common_custom_css', 50 );