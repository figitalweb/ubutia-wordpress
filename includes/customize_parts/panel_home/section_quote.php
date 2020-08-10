<?php

/**************************************************************************************
 *                      Sección Quote 
 *************************************************************************************/
$wp_customize->add_section('ubu_quote', array(
    'title' => __('Sección Frase', 'ubu'),
    'priority' => 30,
    'panel' => 'ubu_home_panel'
));


/*************************  Mostrar Sección  *******************************/

//Setings Para Mostrar Seccion
$wp_customize->add_setting('ubu_setting[show_section_quote]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Seccion
$wp_customize->add_control('show_section_quote', array(
    'label' => __('Mostrar Sección', 'ubu'),
    'section' => 'ubu_quote',
    'settings' => 'ubu_setting[show_section_quote]',
    'type' => 'checkbox'
));


/**********************  Texto Destacado  *******************************/

//Setings Para texto Seccion
$wp_customize->add_setting('ubu_setting[text_section_quote]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para texto Seccion
$wp_customize->add_control('text_section_quote', array(
    'label' => __('Texto Destacado', 'ubu'),
    'section' => 'ubu_quote',
    'settings' => 'ubu_setting[text_section_quote]',
    'type' => 'textarea'
));

/**********************  Autor Frase  *******************************/

//Setings Para Autor frase
$wp_customize->add_setting('ubu_setting[sign_quote]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Autor frase
$wp_customize->add_control('sign_quote', array(
    'label' => __('Firma de Frase', 'ubu'),
    'section' => 'ubu_quote',
    'settings' => 'ubu_setting[sign_quote]'
));


/************************ Seleccionar Imagen  ******************************/

//Setings Para imagen
$wp_customize->add_setting('ubu_setting[img_quote]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_quote', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_quote',
    'settings' => 'ubu_setting[img_quote]'
)));
