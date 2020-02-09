<?php
function supreme_portfolio_metabox( $meta_boxes ) {

	$supreme_prefix = '_supreme_';
	$meta_boxes[] = array(
		'id'        => 'portfolio_single_metaboxs',
		'title'     => esc_html__( 'Portfolio Single Metabox', 'supreme' ),
		'post_types'=> array( 'portfolio' ),
		'context'   => 'side',
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'         => $supreme_prefix . 'project_start_time',
				'name'       => esc_html__( 'Project Start Time', 'supreme' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $supreme_prefix . 'project_start_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project Start Date', 'supreme' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'         => $supreme_prefix . 'project_end_time',
				'name'       => esc_html__( 'Project End Time', 'supreme' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $supreme_prefix . 'project_end_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project End Date', 'supreme' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'    => $supreme_prefix . 'project_location',
				'type'  => 'text',
				'name'  => esc_html__( 'Project Location', 'supreme' ),
				'placeholder' => esc_html__( 'Project Location', 'supreme' ),
			),
			array(
				'id'    => $supreme_prefix . 'project_iner_img',
				'type'  => 'image_advanced',
				'max_file_uploads'	=> 1,
				'max_status'	=> false,
				'max_file_size'	=> '500kb',
				'name'  => esc_html__( 'Project Iner Image', 'supreme' ),
				'placeholder' => esc_html__( 'Project Iner Image', 'supreme' ),
			),
			array(
				'id'    => $supreme_prefix . 'client_brief',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Client Brief', 'supreme' ),
				'placeholder' => esc_html__( 'Client Brief', 'supreme' ),
			),
			array(
				'id'    => $supreme_prefix . 'working_process',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Working Process', 'supreme' ),
				'placeholder' => esc_html__( 'Working Process', 'supreme' ),
			),
			array(
				'name'    => esc_html__( 'Project Image Size', 'supreme' ),
				'id'      => 'portfolio_img_size',
				'type'    => 'select',
				'options' => array(
					'0' => 'Select Size',
					'1' => 'Image Size [555x587]',
					'2' => 'Image Size [555x677]',
					'3' => 'Image Size [555x607]'
				),
				'inline' => true,
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'supreme_portfolio_metabox' );