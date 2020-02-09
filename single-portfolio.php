<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package supreme
 */

get_header();
$project_start_time   = supreme_meta( 'project_start_time' );
$project_start_date   = supreme_meta( 'project_start_date' );
$project_end_time     = supreme_meta( 'project_end_time' );
$project_end_date     = supreme_meta( 'project_end_date' );
$project_location     = supreme_meta( 'project_location' );
$project_iner_img     = supreme_meta( 'project_iner_img' );
$client_brief         = supreme_meta( 'client_brief' );
$working_process      = supreme_meta( 'working_process' );
$project_iner_img_src = wp_get_attachment_image( $project_iner_img, 'supreme_portfolio_iner_image_457x484', false, array( 'alt' => 'project iner image' ) );

?>

    <!-- project_details part start -->
    <section class="project_details section_padding">
        <div class="container">
            <?php
                if( have_posts() ) {
                    while( have_posts() ) : the_post();
            ?>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-sm-12">
                    <?php
                        if ( has_post_thumbnail() ) {
                    ?>
                        <div class="project_details_img">
                            <?php
                                the_post_thumbnail( 'supreme_portfolio_single_image_970x520', array( 'alt' => get_the_title() ) );
                            ?>
                        </div>
                    <?php
                        }
                    ?>
                </div>

                <div class="col-lg-7 col-sm-8">
                    <div class="project_details_content">
                        <h3><?php the_title()?></h3>
                        <?php the_content()?>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4">
                    <div class="project_details_widget">
                        <div class="single_project_details_widget">
                            <span class="ti-time"></span>
                            <?php 
                                echo '<h5>'. esc_html__( 'Start Time', 'supreme' ) . '</h5>';
                                
                                if( !empty( $project_start_time ) ){
                                    echo '<p>'. esc_html( $project_start_time ) . '</p>';
                                }
                                
                                if( !empty( $project_start_date ) ){
                                    echo '<h6>'. esc_html( $project_start_date ) . '</h6>';
                                }
                            ?>
                        </div>
                        <div class="single_project_details_widget">
                            <span class="ti-check-box"></span>
                            <?php 
                                echo '<h5>'. esc_html__( 'End Time', 'supreme' ) . '</h5>';
                                
                                if( !empty( $project_end_time ) ){
                                    echo '<p>'. esc_html( $project_end_time ) . '</p>';
                                }
                                
                                if( !empty( $project_end_date ) ){
                                    echo '<h6>'. esc_html( $project_end_date ) . '</h6>';
                                }
                            ?>
                        </div>
                        <div class="single_project_details_widget">
                            <span class="ti-location-pin"></span>
                            <?php 
                                echo '<h5>'. esc_html__( 'Location', 'supreme' ) . '</h5>';
                                
                                if( !empty( $project_location ) ){
                                    echo '<p>'. esc_html( $project_location ) . '</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end pt_100">
                <?php
                    $dynamic_col_class = 'col-md-11 col-xl-6';
                    if ( $project_iner_img_src ) {
                ?>
                    <div class="col-lg-11 col-xl-5">
                        <div class="single_project_details">
                            <?php
                                echo $project_iner_img_src;
                            ?>
                        </div>
                    </div>
                <?php
                    } else {
                        $dynamic_col_class = 'col-md-11 col-xl-11';
                    }
                ?>
                <div class="<?php echo $dynamic_col_class?>">
                    <div class="single_project_details_text">
                        <?php 
                            echo '<h4>'. esc_html__( 'Client Brief', 'supreme' ) . '</h4>';
                            
                            if( !empty( $client_brief ) ){
                                echo '<p>'. esc_html( $client_brief ) . '</p>';
                            }
                        ?>
                    </div>
                    <div class="single_project_details_text">
                        <?php 
                            echo '<h4>'. esc_html__( 'Working Process', 'supreme' ) . '</h4>';
                            
                            if( !empty( $working_process ) ){
                                echo '<p>'. esc_html( $working_process ) . '</p>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                }
            ?>
        </div>
    </section>
    <!-- project_details part end -->

    <?php

// Footer============
get_footer();