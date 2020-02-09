<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package
 */

    $url = 'https://colorlib.com/';
    $copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'supreme' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
    $copyRight = !empty( supreme_opt( 'supreme_footer_copyright_text' ) ) ? supreme_opt( 'supreme_footer_copyright_text' ) : $copyText;
    $footer_class = supreme_opt( 'supreme_footer_widget_toggle' ) == 1 ? 'footer-area' : 'no_widget';

    ?>


    <!--::subscribe area start::-->
    <section class="subscribe_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="subscribe_iner">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-xl-5">
                                <div class="subscribe_area_tittle">
                                    <h2>Do You Have a Question?</h2>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xl-6">
                                <div id="mc_embed_signup">
                                    <aside class="single_sidebar_widget newsletter_widget">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get">
                                            <div class="form-group">
                                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email'
                                                    required>
                                            </div>
                                            <button class="btn_2" type="submit">Subscribe</button>

                                            <div class="info"></div>
                                        </form>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe area end::-->

    <!-- footer part start-->
    
    <footer class="footer-area">
        <?php
            if( supreme_opt( 'supreme_footer_widget_toggle' ) == 1 ) {
        ?>
        <div class="container">
            <div class="row justify-content-between">
                <?php
                    // Footer Widget 1
                    if ( is_active_sidebar( 'footer-1' ) ) {
                        dynamic_sidebar( 'footer-1' );
                    }

                    // Footer Widget 2
                    if ( is_active_sidebar( 'footer-2' ) ) {
                        dynamic_sidebar( 'footer-2' );
                    }

                    // Footer Widget 3
                    if ( is_active_sidebar( 'footer-3' ) ) {
                        dynamic_sidebar( 'footer-3' );
                    }

                    // Footer Widget 4
                    if ( is_active_sidebar( 'footer-4' ) ) {
                        dynamic_sidebar( 'footer-4' );
                    }
                ?>
            </div>
        </div>
        <?php
            } 
        ?>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><?php echo wp_kses_post( $copyRight ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>
</html>