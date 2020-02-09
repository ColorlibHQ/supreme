<?php 
/**
 * @Packge     : Supreme
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'supreme_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'supreme' ),
        'description' => esc_html__( 'Select the theme color.', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_general_section',
        'default'     => '#fe5c24',
    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'supreme_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'supreme' ),
        'description' => esc_html__( 'Select the header background color.', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_header_section',
        'default'     => '#fff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'supreme_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_header_section',
        'default'     => '#000',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'supreme_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_header_section',
        'default'     => '#fe5c24',
    )
);

// Header dropdown menu bg color field
Epsilon_Customizer::add_field(
    'supreme_header_drop_menu_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu BG color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_header_section',
        'default'     => '#fafafa',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'supreme_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_header_section',
        'default'     => '#000',
    )
);

// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'supreme_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_header_section',
        'default'     => '#000',
    )
);


// Header top bar section
Epsilon_Customizer::add_field(
    'supreme_header_top_section_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header top bar Section', 'supreme' ),
        'section'     => 'supreme_header_section',

    )
);

// Header top bar toggle
Epsilon_Customizer::add_field(
	'supreme_header_top_bar',
	array(
		'type'        => 'epsilon-toggle',
		'label'       => esc_html__( 'Header top bar show/hide', 'supreme' ),
		'section'     => 'supreme_header_section',
		'default'     => true
	)
);

// Header top phone number
Epsilon_Customizer::add_field(
    'supreme_top_phone',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Phone Number', 'supreme' ),
        'description' => esc_html__( 'Empty field would be display none', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_header_section',
        'default'     => esc_html__( '+02 89 365 3652', 'supreme' ),
    )
);

// Header top email
Epsilon_Customizer::add_field(
    'supreme_top_email',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Email Address', 'supreme' ),
        'description' => esc_html__( 'Empty field would be display none', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_header_section',
        'default'     => esc_html__( 'Info@example.com', 'supreme' ),
    )
);


Epsilon_Customizer::add_field(
    'social_pro_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile', 'supreme' ),
        'section'     => 'supreme_header_section',

    )
);

// Social Profile Show/Hide
Epsilon_Customizer::add_field(
    'supreme_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'supreme' ),
        'section'     => 'supreme_header_section',
        'default'     => true,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'supreme_header_social',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'supreme_header_section',
		'label'        => esc_html__( 'Social Profile Links', 'supreme' ),
		'button_label' => esc_html__( 'Add new social link', 'supreme' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'supreme' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Twitter',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'supreme' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => 'https://twitter.com',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'supreme' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-twitter',
			),
			
		),
	)
);

// Header top background color
Epsilon_Customizer::add_field(
    'supreme_top_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Top Background Color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_header_section',
        'default'     => '#191d34',
    )
);


/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'supreme_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'supreme' ),
        'description' => esc_html__( 'Set post excerpt length.', 'supreme' ),
        'section'     => 'supreme_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'supreme_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'supreme' ),
        'section'     => 'supreme_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'supreme_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'supreme' ),
        'section'     => 'supreme_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'supreme_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'supreme' ),
        'section'     => 'supreme_blog_section',
        'default'     => true
    )
);

/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'supreme_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'supreme' ),
        'section'           => 'supreme_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'supreme_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'supreme' ),
        'section'           => 'supreme_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'supreme_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'supreme_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'supreme_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'supreme' ),
        'section'     => 'supreme_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'supreme_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'supreme' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'supreme' ),
        'section'     => 'supreme_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'supreme_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'supreme' ),
        'section'     => 'supreme_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'supreme' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'supreme_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'supreme' ),
        'section'     => 'supreme_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Epsilon_Customizer::add_field(
    'supreme_footer_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_footer_section',
        'default'     => '#162b45',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'supreme_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_footer_section',
        'default'     => '#777',
    )
);

// Footer widget title color field
Epsilon_Customizer::add_field(
    'supreme_footer_widget_title_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'supreme_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_footer_section',
        'default'     => '#fe5c24',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'supreme_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'supreme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'supreme_footer_section',
        'default'     => '#fe5c24',
    )
);

