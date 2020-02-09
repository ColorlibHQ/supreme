<?php
namespace Supremeelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * elementor projects section widget.
 *
 * @since 1.0
 */
class Supreme_Projects extends Widget_Base {

	public function get_name() {
		return 'supreme-projects';
	}

	public function get_title() {
		return __( 'Recent Works', 'supreme' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'supreme-elements' ];
	}

	protected function _register_controls() {

        $this->start_controls_section(
			'section_heading',
			[
				'label' => __( 'Section Heading', 'supreme' ),
			]
        );
        
        $this->add_control(
            'sec_heading',
            [
                'label'         => esc_html__( 'Heading Text', 'supreme' ),
                'type'          => Controls_Manager::WYSIWYG,
                'default'       => __( '<h2>Recent Completed <br>Project</h2>', 'supreme' )
            ]
        );
		$this->end_controls_section(); 


        // ----------------------------------------  Projects Content ------------------------------
        $this->start_controls_section(
            'menu_tab_sec',
            [
                'label' => __( 'Projects', 'supreme' ),
            ]
        );
		$this->add_control(
			'excerpt_limit', [
				'label'         => esc_html__( 'Excerpt Limit', 'supreme' ),
				'type'          => Controls_Manager::NUMBER,
				'min'           => 10,
                'default'       => 14,
                'max'           => 30
			]
		);
		$this->add_control(
			'portfolio_number', [
				'label'         => esc_html__( 'Project Number', 'supreme' ),
				'type'          => Controls_Manager::NUMBER,
				'max'           => 4,
				'min'           => 1,
				'step'          => 1,
				'default'       => 4

			]
		);
		$this->add_control(
			'read_more_txt', [
				'label'         => esc_html__( 'Read More Text', 'supreme' ),
				'type'          => Controls_Manager::TEXT,
				'default'       => __( 'read more', 'supreme' )

			]
		);

        $this->end_controls_section(); // End projects content

        //------------------------------ Color Settings ------------------------------
        $this->start_controls_section(
            'color_settings', [
                'label' => __( 'Color Settings', 'supreme' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_title_color', [
                'label'     => __( 'Section Title Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#191d34',
                'selectors' => [
                    '{{WRAPPER}} .portfolio_part .card-columns .blockquote h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_holder_bg_color', [
                'label'     => __( 'Button Holder BG Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#191d34',
                'selectors' => [
                    '{{WRAPPER}} .portfolio_part .card-columns .card.see_more_project' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();


        // Button Style ==============================
        $this->start_controls_section(
            'btn_styles', [
                'label' => __( 'Button Styles', 'supreme' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'btn_bg_color', [
                'label'     => __( 'Button BG Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fe5c24',
                'selectors' => [
                    '{{WRAPPER}} .see_more_project .btn_1' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_color', [
                'label'     => __( 'Button Text Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .see_more_project .btn_1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_txt_color', [
                'label'     => __( 'Button Hover Text Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fe5c24',
                'selectors' => [
                    '{{WRAPPER}} .see_more_project .btn_1:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_bg_color', [
                'label'     => __( 'Button Hover BG Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .see_more_project .btn_1:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();


        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'supreme' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'supreme' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .portfolio_part',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings       = $this->get_settings();
    $sec_heading    = !empty( $settings['sec_heading'] ) ? $settings['sec_heading'] : '';
    $excerpt_limit  = $settings['excerpt_limit'];
    $pNumber        = $settings['portfolio_number'];
    $read_more_txt  = !empty( $settings['read_more_txt'] ) ? $settings['read_more_txt'] : '';
    ?>


    <!-- portfolio_part start-->
    <section class="portfolio_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-columns">
                        <div class="card tittle bg-transparent">
                            <blockquote class="blockquote mb-0">
                                <?php
                                    //Section heading ==============
                                    if( $sec_heading ){
                                        echo wp_kses_post( wpautop( $sec_heading ) );
                                    }
                                ?>
                            </blockquote>
                        </div>

                        <?php
                            //Load Portfolios ==============
                            supreme_portfolio_section( $pNumber, $excerpt_limit, $read_more_txt );
                        ?>

                        <div class="card see_more_project">
                            <blockquote class="blockquote mb-0">
                                <a href="<?php echo get_permalink(get_page_by_title('Projects'));?>" class="btn_1"><?php echo esc_html__( 'more project', 'supreme' )?></a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio_part end-->
    <?php

    }
}
