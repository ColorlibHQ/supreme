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
 * Supreme elementor Team Member section widget.
 *
 * @since 1.0
 */
class Supreme_Services extends Widget_Base {

	public function get_name() {
		return 'supreme-services';
	}

	public function get_title() {
		return __( 'Services', 'supreme' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'supreme-elements' ];
	}

	protected function _register_controls() {
        
		// ----------------------------------------   Services content ------------------------------
		$this->start_controls_section(
			'services_block',
			[
				'label' => __( 'Services', 'supreme' ),
			]
        );

        $this->add_control(
			'show_sec_title',
			[
				'label'         => esc_html__( 'Show/Hide Section Title', 'supreme' ),
				'type'          => Controls_Manager::SWITCHER,
				'label_block'   => false,
				'label_on'      => 'YES',
				'label_off'     => 'NO',
                'default'       => 'yes',
                'options'       => [
                    'no'        => 'NO',
                    'yes'       => 'YES'
                ]
			]
		);

        $this->add_control(
			'section_title', [
				'label'         => esc_html__( 'Section Title', 'supreme' ),
				'type'          => Controls_Manager::TEXTAREA,
				'default'       => __( 'Our Special Feature', 'supreme' )

			]
		);
        
		$this->add_control(
            'services_content', [
                'label' => __( 'Create Service', 'supreme' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'      => 'icon',
                        'label'     => __( 'Select Icon', 'supreme' ),
                        'type'      => Controls_Manager::ICON,
                        'default'   => 'flaticon-chip',
                        'options'   => supreme_themify_icon()
                    ],
                    [
                        'name'  => 'label',
                        'label' => __( 'Title', 'supreme' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Advance Technology', 'supreme' )
                    ],
                    [
                        'name'      => 'desc',
                        'label'     => __( 'Descriptions', 'supreme' ),
                        'type'      => Controls_Manager::TEXTAREA,
                        'default'   => __( 'All fish day af emale very appear moved seas above Fifth them grass gathere above male moveth whose life rule she gathering seas of is sea night', 'supreme' )
                    ],
                ],
            ]
        );

		$this->end_controls_section(); // End Services content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Single Service Color Settings ==============================
        $this->start_controls_section(
            'single_serv_color_sett', [
                'label' => __( 'Single Service Color Settings', 'supreme' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'item_bg_color', [
                'label'     => __( 'Item BG Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 
 
        $this->add_control(
            'icon_border_color', [
                'label'     => __( 'Icon & Border Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fe5c24',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .service_part .single_service_part .line:after' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 

        $this->add_control(
            'item_title_color', [
                'label'     => __( 'Item Title Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#191d34',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part h3' => 'color: {{VALUE}};',
                ],
            ]
        ); 

        $this->add_control(
            'item_txt_color', [
                'label'     => __( 'Item Text Color', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part p' => 'color: {{VALUE}};',
                ],
            ]
        ); 

        
        $this->add_control(
            'hover_styles_separator',
            [
                'label'     => __( 'Hover Styles', 'supreme' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 

        $this->add_control(
            'item_bg_color_hover', [
                'label'     => __( 'Item BG Color on Hover', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fe5c24',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 
 
        $this->add_control(
            'icon_border_color_hover', [
                'label'     => __( 'Icon & Border Color on Hover', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part:hover i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .service_part .single_service_part:hover .line:after' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 

        $this->add_control(
            'item_title_color_hover', [
                'label'     => __( 'Item Title Color on Hover', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part:hover h3' => 'color: {{VALUE}};',
                ],
            ]
        ); 

        $this->add_control(
            'item_txt_color_hover', [
                'label'     => __( 'Item Text Color on Hover', 'supreme' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part:hover p' => 'color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .service_part, .single_service',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

    $settings    = $this->get_settings();
    $sec_title = !empty( $settings['show_sec_title'] ) ? $settings['show_sec_title'] : '';
    $sec_title = $sec_title == 'yes' ? 'YES' : 'NO';
    $section_title = !empty( $settings['section_title'] ) ? $settings['section_title'] : '';
    $services  = !empty( $settings['services_content'] ) ? $settings['services_content'] : '';
    ?>

    <!-- service part start-->
    <section class="service_part section_padding">
        <div class="container">
            <?php
                if( $sec_title == 'YES' ){
            ?>
            <div class="row">
                <div class="col-xl-3">
                    <div class="section_tittle">
                        <h2><?php echo esc_html( $section_title )?></h2>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row align-items-center">
                <?php
                if( is_array( $services ) && count( $services ) > 0 ){
                    foreach ( $services as $service ) {
                        $fontIcon      = !empty( $service['icon'] ) ? $service['icon'] : '';
                        $service_title = !empty( $service['label'] ) ? $service['label'] : '';
                        $service_desc  = !empty( $service['desc'] ) ? $service['desc'] : '';
                ?>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single_service_part">
                        <?php
                            if( $fontIcon ){
                                echo '<i class="'. esc_attr( $fontIcon ) .'"></i>';
                            }
                        ?>
                        <span class="line"></span>
                        <h3><?php echo esc_html( $service_title );?></h3>
                        <p><?php echo esc_html( $service_desc );?></p>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- service part end-->
    <?php
    }
}
