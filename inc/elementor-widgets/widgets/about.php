<?php
namespace Supremeelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
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
 * Supreme elementor section widget.
 *
 * @since 1.0
 */
class Supreme_About extends Widget_Base {

	public function get_name() {
		return 'supreme-about';
	}

	public function get_title() {
		return __( 'About', 'supreme' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-half';
	}

	public function get_categories() {
		return [ 'supreme-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  About content ------------------------------
		$this->start_controls_section(
			'about_content',
			[
				'label' => __( 'About Section', 'supreme' ),
			]
		);

        $this->add_control(
			'img_left',
			[
				'label'         => esc_html__( 'Image Left', 'supreme' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
        );
        
        $this->add_control(
            'about_btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'supreme' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'read more', 'supreme' )
            ]
        );
        $this->add_control(
            'about_btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'supreme' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );

        $this->add_control(
            'content',
            [
                'label'         => esc_html__( 'About Text', 'supreme' ),
                'description'   => esc_html__('Use <br> tag for line break', 'supreme'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>We Are Committed <br> To Customer Satisfaction</h2><h4>Their be void upon image lights you fifth seed wherein for very mud the winged his days fruitful. Stars fruit fourth.</h4><p>Fifth darkness lights after sixth first Firmament morning and the Green saying greatn forth behold open said First she\'d saying have any question availbla now their void upon image lights. You fifth seed for very the</p>', 'supreme' )
            ]
        );
        
        $this->end_controls_section(); // End about content
        

        /**
         * Style Tab
         * ------------------------------ About Settings ------------------------------
         *
         */

        // Pattern Settings ==============================
        $this->start_controls_section(
            'pattern_bg', [
                'label' => __( 'Style Pattern Background', 'supreme' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'pattern_img_1_sep',
            [
                'label'     => __( 'Pattern Image1', 'supreme' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_img_1',
                'label' => __( 'Background', 'supreme' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_part .about_img:after',
            ]
        );

        $this->add_control(
            'pattern_img_2_sep',
            [
                'label'     => __( 'Pattern Image2', 'supreme' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_img_2',
                'label' => __( 'Background', 'supreme' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_part .about_text:after',
            ]
        );

        $this->end_controls_section();


        // Color Settings ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Color Settings', 'supreme' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_control(
			'big_title_color', [
				'label'     => __( 'Big Title Color', 'supreme' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#191d34',
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text h2' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'sub_title_color', [
				'label'     => __( 'Sub Title Color', 'supreme' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#fe5c24',
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text h4' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'text_color', [
				'label'     => __( 'Text Color', 'supreme' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#777',
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text p' => 'color: {{VALUE}};',
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
                'default'   => '#191d34',
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_2' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_color', [
                'label'     => __( 'Button Text Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_txt_color', [
                'label'     => __( 'Button Hover Text Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_2:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_bg_color', [
                'label'     => __( 'Button Hover BG Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fe5c24',
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_2:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        

        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'supreme' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'supreme' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'supreme' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_part',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {
        $settings     = $this->get_settings();
        $left_img     = !empty( $settings['img_left']['id'] ) ? wp_get_attachment_image( $settings['img_left']['id'], 'supreme_about1_section_555x450', false, array( 'alt' => 'about image left' ) ) : '';
        $content      = !empty( $settings['content'] ) ? $settings['content'] : '';		
        $button_label = !empty( $settings['about_btnlabel'] ) ? $settings['about_btnlabel'] : '';
        $button_url   = !empty( $settings['about_btnurl']['url'] ) ? $settings['about_btnurl']['url'] : '';
        ?>

    <!-- about part start-->
    <section class="about_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_img">
                        <?php
                            if( $left_img ){
                                echo wp_kses_post( $left_img );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="about_text">
                        <?php
                            //Right Content ==============
                            if( $content ){
                                echo wp_kses_post( wpautop( $content ) );
                            }

                            // Button =============
                            if( $button_label ){
                                echo '<a class="btn_2" href="'. esc_url( $button_url ) .'">'. esc_html( $button_label ) .'</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part start-->
    <?php

    }

}
