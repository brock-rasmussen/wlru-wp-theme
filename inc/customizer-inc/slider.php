<?php
$wp_customize->add_setting( 'slider-1-img', array(
  'default'     => '',
) );
$wp_customize->add_control( new WP_Customize_Background_Image_Control( $wp_customize, 'wallarooster_gray_darker', array(
  'label'       => __( 'Gray Darker', 'wallarooster' ),
  'section'     => 'colors',
  'settings'    => 'gray-darker',
) ) );
