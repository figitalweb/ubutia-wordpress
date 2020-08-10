<?php

/**************************************************************************************
 *                      Sección Watch 
 *************************************************************************************/
$wp_customize->add_section('ubu_watch', array(
    'title' => __('Sección Video', 'ubu'),
    'priority' => 45,
    'panel' => 'ubu_home_panel'
));

/*************************  Mostrar Sección  *******************************/

//Setings Para Mostrar Seccion
$wp_customize->add_setting('ubu_setting[show_section_watch]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Seccion
$wp_customize->add_control('show_section_watch', array(
    'label' => __('Mostrar Sección', 'ubu'),
    'section' => 'ubu_watch',
    'settings' => 'ubu_setting[show_section_watch]',
    'type' => 'checkbox'
));


/**********************  Titulo  *******************************/

//Setings Para titulo Seccion
$wp_customize->add_setting('ubu_setting[title_section_watch]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Seccion
$wp_customize->add_control('title_section_watch', array(
    'label' => __('Titulo De La Sección', 'ubu'),
    'description' => __('Titulo que mostrarás en la sección', 'ubu'),
    'section' => 'ubu_watch',
    'settings' => 'ubu_setting[title_section_watch]',
    'input_attrs' => array(
        'style' => 'margin-bottom: 20px'
    ),
));

/************************ URL del Video  ******************************/

//Setings Para URL
$wp_customize->add_setting('ubu_setting[url_watch]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para URL
$wp_customize->add_control('url_watch', array(
    'label' => __('Link Del Vídeo a Mostrar', 'ubu'),
    'section' => 'ubu_watch',
    'settings' => 'ubu_setting[url_watch]',
    'type' => 'url'
));

/************************ Imagen de fondo  ******************************/

//Setings Para imagen 
$wp_customize->add_setting('ubu_setting[img_watch]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen 
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_watch', array(
    'label' => __('Imagen De Fondo', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_watch',
    'settings' => 'ubu_setting[img_watch]'
)));