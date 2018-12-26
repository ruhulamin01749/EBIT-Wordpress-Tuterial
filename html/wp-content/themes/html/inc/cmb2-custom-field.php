<?php

if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}
add_action('cmb2_admin_init','office_master_smb2');

function office_master_smb2(){

	$prefix = '_office-master_';
// Regular text field For slider
	$slider_item = new_cmb2_box( array(
		'id'            => 'slider_metabox',
		'title'         => __( 'Sliders Metabox', 'office_master' ),
		'object_types'  => array('slider'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$slider_item->add_field( array(
		'name'       => __( 'Slider Caption', 'office_master' ),
		'desc'       => __( 'Write Slider Caption here', 'office_master' ),
		'id'         => $prefix.'slider_caption',
		'type'       => 'text',
	) );

// Regular text field for Services
	$service_item = new_cmb2_box( array(
		'id'            => 'service_metabox',
		'title'         => __( 'Service Metabox', 'office_master' ),
		'object_types'  => array( 'services'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	
	$service_item->add_field( array(
		'name'       => __( 'Sevice Icon', 'office_master' ),
		'desc'       => __( 'Write service Icon Fontawsome name', 'office_master' ),
		'id'         => $prefix.'service_icon',
		'type'       => 'text',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Sevice Desc', 'office_master' ),
		'desc'       => __( 'Write service Discription', 'office_master' ),
		'id'         => $prefix.'service_desc',
		'type'       => 'textarea',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Sevice Tile Button Link', 'office_master' ),
		'desc'       => __( 'Write service Button Diacription', 'office_master' ),
		'id'         => $prefix.'service_link',
		'type'       => 'text',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Service link title', 'office_master' ),
		'desc'       => __( 'Write service Button Text', 'office_master' ),
		'id'         => $prefix.'service_link_title',
		'type'       => 'text',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Sevice animation class', 'office_master' ),
		'desc'       => __( 'Write service Div Animation', 'office_master' ),
		'id'         => $prefix.'animation_class',
		'type'       => 'text',
	) );

	//Text field for team member

	$team_member = new_cmb2_box( array(
		'id'            => 'team_metabox',
		'title'         => __( 'Team Nember Metabox', 'office_master' ),
		'object_types'  => array('team'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$team_member->add_field( array(
		'name'       => __( 'Team Member Designation', 'office_master' ),
		'desc'       => __( 'Team Member Designation', 'office_master' ),
		'id'         => $prefix.'team_member_designation',
		'type'       => 'text',
	) );
	$team_member->add_field( array(
		'name'       => __( 'BlockQuote Color', 'office_master' ),
		'desc'       => __( 'BlockQuote Color Class', 'office_master' ),
		'id'         => $prefix.'blockquote_class',
		'type'       => 'text',
	) );
	$team_member->add_field( array(
		'name'       => __( 'Animatin Class', 'office_master' ),
		'desc'       => __( 'Animation Class', 'office_master' ),
		'id'         => $prefix.'animation_class',
		'type'       => 'text',
	) );
		//Text field for Blog post

	$post = new_cmb2_box( array(
		'id'            => 'post_metabox',
		'title'         => __( 'Post Metabox', 'office_master' ),
		'object_types'  => array('post'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
	) );
	$post->add_field( array(
		'name'       => __( 'Post Icon', 'office_master' ),
		'desc'       => __( 'Post Icon', 'office_master' ),
		'id'         => $prefix.'post_icon',
		'type'       => 'text',
	) );

	//Text group for About page
	$about_page_group = new_cmb2_box( array(
		'id'            => 'about_page_metabox',
		'title'         => __( 'About Page Metabox', 'office_master' ),
		'object_types'  => array('page'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
		'show_on'		=>array(
			'key' => 'id',
			'value'=>10
			)
	) );
	$about_group_id = $about_page_group->add_field( array(
		'name'       => __( 'About Groupable Field', 'office_master' ),
		'id'         => $prefix.'about_group_meta_field',
		'type'       => 'group',
	) );
	$about_page_group->add_group_field($about_group_id, array(
		'name'       => __( 'Heading', 'office_master' ),
		'id'         => $prefix.'heading',
		'type'       => 'text',
	) );
	$about_page_group->add_group_field($about_group_id, array(
		'name'       => __( 'About Desc', 'office_master' ),
		'id'         => $prefix.'about_desc',
		'type'       => 'textarea_small',
	) );
	$about_page_group->add_group_field($about_group_id, array(
		'name'       => __( 'About Hash Tag Link', 'office_master' ),
		'id'         => $prefix.'hash_link',
		'type'       => 'text',
		'repeatable' => true
	) );
	$about_page_group->add_group_field($about_group_id, array(
		'name'       => __( 'About Hash Link Title', 'office_master' ),
		'id'         => $prefix.'hash_link_title',
		'type'       => 'text',
		'repeatable' => true
	) );

}