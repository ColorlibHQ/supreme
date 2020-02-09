<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php echo supreme_site_icon();?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <!--::header part start::-->
    <header class="main_menu">
        <?php
        if( supreme_opt( 'supreme_header_top_bar' ) == 1 ){
        ?>        
        <div class="sub_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <div class="sub_menu_right_content">
                            <?php
                                $header_phone = supreme_opt( 'supreme_top_phone' );
                                $header_email = supreme_opt( 'supreme_top_email' );
                            ?>
                            <a href="tel:<?php echo esc_html( $header_phone )?>"><i class="flaticon-phone-call"></i><?php echo esc_html( $header_phone )?></a> <span>|</span>
                            <a href="mailto:<?php echo esc_html( $header_email )?>"><i class="flaticon-at"></i><?php echo esc_html( $header_email )?></a>
                        </div>
                    </div>

                    <?php
                        $social_profile = supreme_opt( 'supreme_social_profile_toggle' );
                        if( $social_profile == 1 ) {
                            $social_icons = supreme_opt( 'supreme_header_social' );
                    ?> 
                    <div class="col-lg-6 col-sm-4">
                        <div class="sub_menu_social_icon">
                            <?php
                                for ( $i = 0; $i < count($social_icons); $i++ ) {
                                    $social_icon = $social_icons[$i]['social_icon'];
                                    ?>
                                    <a href="<?php echo esc_url($social_icons[$i]['social_url']);?>"><i class="<?php echo esc_html( supreme_social_icon_overwrite_by_flaticon( $social_icon ) );?>"></i></a>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <?php
                                echo supreme_theme_logo( 'navbar-brand' );
                            ?>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <?php
                                if(has_nav_menu('primary-menu')) {
                                    wp_nav_menu(array(
                                        'menu'           => 'primary-menu',
                                        'theme_location' => 'primary-menu',
                                        'menu_id'        => 'menu-main-menu',
                                        'container_class'=> 'collapse navbar-collapse main-menu-item justify-content-end',
                                        'container_id'   => 'navbarSupportedContent',
                                        'menu_class'     => 'navbar-nav',
                                        'walker'         => new supreme_bootstrap_navwalker,
                                        'depth'          => 3
                                    ));
                                }
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php
    //Page Title Bar
    if( function_exists( 'supreme_page_titlebar' ) ){
	    supreme_page_titlebar();
    }

