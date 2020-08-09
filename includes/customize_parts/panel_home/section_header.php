<?php

/**************************************************************************************
 *                      Sección Header 
 *************************************************************************************/
$wp_customize->add_section('ubu_header', array(
    'title' => __('Sección Cabecera', 'ubu'),
    'priority' => 10,
    'panel' => 'ubu_home_panel'
));


/************************ Seleccionar Logotipo  ******************************/

//Setings Para Logo
$wp_customize->add_setting('ubu_setting[img_logo]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Logo
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_logo', array(
    'label' => __('Selecciona Un Logo', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_header',
    'settings' => 'ubu_setting[img_logo]'
)));


/************************ Seleccionar Imagen Hero  ******************************/

//Setings Para Logo
$wp_customize->add_setting('ubu_setting[img_hero]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Logo
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_hero', array(
    'label' => __('Selecciona una imagen para la sección', 'ubu'),
    'description' => __('la imagen aparecerá debajo del menú y el titulo', 'ubu'),
    'section' => 'ubu_header',
    'settings' => 'ubu_setting[img_hero]'
)));
