<?php
function wpb_customize_register($wp_customize)
{
	// Intro Section
	$wp_customize->add_section('intro', array(
		'title'   => __('Intro', 'wpbootstrap'),
		'description' => sprintf(__('Options for intro', 'wpbootstrap')),
		'priority'    => 130
	));

	$wp_customize->add_setting('intro_image', array(
		'default'   => get_bloginfo('template_directory') . '/images/undraw_Data_trends_re_2cdy.svg',
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'intro_image', array(
		'label'   => __('Intro Image', 'wpbootstrap'),
		'section' => 'intro',
		'settings' => 'intro_image',
		'priority'  => 1
	)));


	$wp_customize->add_setting('intro_heading', array(
		'default'   => _x('Custom Bootstrap Wordpress Theme', 'wpbootstrap'),
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control('intro_heading', array(
		'label'   => __('Heading', 'wpbootstrap'),
		'section' => 'intro',
		'priority'  => 2
	));
	$wp_customize->add_setting('intro_sub_heading', array(
		'default'   => _x('Custom Theme', 'wpbootstrap'),
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control('intro_sub_heading', array(
		'label'   => __('Sub-heading', 'wpbootstrap'),
		'section' => 'intro',
		'priority'  => 2
	));

	$wp_customize->add_setting('intro_text', array(
		'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wpbootstrap'),
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control('intro_text', array(
		'label'   => __('Text', 'wpbootstrap'),
		'section' => 'intro',
		'priority'  => 3
	));

	$wp_customize->add_setting('btn_url', array(
		'default'   => _x('http://test.com', 'wpbootstrap'),
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control('btn_url', array(
		'label'   => __('Button URL', 'wpbootstrap'),
		'section' => 'intro',
		'priority'  => 4
	));

	$wp_customize->add_setting('btn_text', array(
		'default'   => _x('Read More', 'wpbootstrap'),
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control('btn_text', array(
		'label'   => __('Button Text', 'wpbootstrap'),
		'section' => 'intro',
		'priority'  => 5
	));
}

add_action('customize_register', 'wpb_customize_register');
