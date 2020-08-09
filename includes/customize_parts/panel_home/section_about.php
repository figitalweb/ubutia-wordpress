<?php

/**************************************************************************************
 *                      Sección About 
 *************************************************************************************/
$wp_customize->add_section('ubu_about', array(
    'title' => __('Sección Sobre Nosotros', 'ubu'),
    'priority' => 15,
    'panel' => 'ubu_home_panel'
));


/*************************  Mostrar Sección  *******************************/

//Setings Para Mostrar Seccion
$wp_customize->add_setting('ubu_setting[show_section_about]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Seccion
$wp_customize->add_control('show_section_about', array(
    'label' => __('Mostrar Sección', 'ubu'),
    'section' => 'ubu_about',
    'settings' => 'ubu_setting[show_section_about]',
    'type' => 'checkbox'
));


/**********************  Titulo, descripción y Firma *******************************/

//Setings Para titulo Seccion
$wp_customize->add_setting('ubu_setting[title_section_about]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Seccion
$wp_customize->add_control('title_section_about', array(
    'label' => __('Titulo De La Sección', 'ubu'),
    'description' => __('Titulo que mostrarás en la sección', 'ubu'),
    'section' => 'ubu_about',
    'settings' => 'ubu_setting[title_section_about]'
));

//Setings Para Descripción Seccion
$wp_customize->add_setting('ubu_setting[description_section_about]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripción Seccion
$wp_customize->add_control('description_section_about', array(
    'label' => __('Descripción De La Sección', 'ubu'),
    'description' => __('Descripción que mostrarás debajo del título de sección', 'ubu'),
    'section' => 'ubu_about',
    'settings' => 'ubu_setting[description_section_about]'
));

//Setings Para Firma Seccion
$wp_customize->add_setting('ubu_setting[sign_section_about]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Firma Seccion
$wp_customize->add_control('sign_section_about', array(
    'label' => __('Firma De La Sección', 'ubu'),
    'description' => __('Firma que mostrarás debajo de descripción', 'ubu'),
    'section' => 'ubu_about',
    'settings' => 'ubu_setting[sign_section_about]'
));