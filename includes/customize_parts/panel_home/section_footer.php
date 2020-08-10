<?php

/**************************************************************************************
 *                      Sección Footer 
 *************************************************************************************/
$wp_customize->add_section('ubu_footer', array(
    'title' => __('Sección Pie De Página', 'ubu'),
    'priority' => 100,
    'panel' => 'ubu_home_panel'
));

/**********************  Texto  *******************************/

//Setings Para texto Seccion
$wp_customize->add_setting('ubu_setting[text_section_footer]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para texto Seccion
$wp_customize->add_control('text_section_footer', array(
    'label' => __('Texto de pie de página', 'ubu'),
    'section' => 'ubu_footer',
    'settings' => 'ubu_setting[text_section_footer]',
    'input_attrs' => array(
        'style' => 'margin-bottom: 20px'
    ),
));