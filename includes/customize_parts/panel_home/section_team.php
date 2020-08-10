<?php

/**************************************************************************************
 *                      Sección Team 
 *************************************************************************************/
$wp_customize->add_section('ubu_team', array(
    'title' => __('Sección Equipo', 'ubu'),
    'priority' => 50,
    'panel' => 'ubu_home_panel'
));


/*************************  Mostrar Sección  *******************************/

//Setings Para Mostrar Seccion
$wp_customize->add_setting('ubu_setting[show_section_team]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Seccion
$wp_customize->add_control('show_section_team', array(
    'label' => __('Mostrar Sección', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[show_section_team]',
    'type' => 'checkbox'
));


/**********************  Titulo  *******************************/

//Setings Para titulo Seccion
$wp_customize->add_setting('ubu_setting[title_section_team]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Seccion
$wp_customize->add_control('title_section_team', array(
    'label' => __('Titulo De La Sección', 'ubu'),
    'description' => __('Titulo que mostrarás en la sección', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[title_section_team]',
    'input_attrs' => array(
        'style' => 'margin-bottom: 20px'
    ),
));

/************************ Persona 1  ******************************/

//Setings Para titulo Persona 1
$wp_customize->add_setting('ubu_setting[title_team_person1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Persona 1
$wp_customize->add_control('title_team_person1', array(
    'label' => __('Nombre de la 1º Persona', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[title_team_person1]'
));

//Setings Para Descripcion Persona 1
$wp_customize->add_setting('ubu_setting[description_team_person1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Persona 1
$wp_customize->add_control('description_team_person1', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[description_team_person1]',
    'type' => 'textarea'
));

//Setings Para imagen persona 1
$wp_customize->add_setting('ubu_setting[img_team_person1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen persona 1
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_team_person1', array(
    'label' => __('Selecciona Una Imagen de Perfil', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[img_team_person1]'
)));