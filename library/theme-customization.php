<?php
/*
This file handles exposing theme-specific content
values to the user via the Theme Customizer.

The code here was built on a post by Samuel Wood,
aka Otto - @otto42 - http://ottopress.com
http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/

*/

$wp_customize->add_section( 'si_footer_content', array(
    'title'          => __( 'Footer Content', 'bonestheme' ),
    'priority'       => 35,
) );

$wp_customize->add_setting( 'si_footer_blurb[color_scheme]', array(
    'default'        => 'Default Footer Blurb',
    'type'           => 'option',
    'capability'     => 'edit_theme_options',
) );

$wp_customize->add_control( 'display_header_text', array(
    'settings' => 'si_footer_blurb',
    'label'    => __( 'Display Footer Blurb' ),
    'section'  => 'header',
    'type'     => 'checkbox',
) );