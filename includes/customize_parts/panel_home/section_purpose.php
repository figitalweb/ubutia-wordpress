<?php

/**************************************************************************************
 *                      Sección Purpose 
 *************************************************************************************/
$wp_customize->add_section('ubu_purpose', array(
    'title' => __('Sección Propuesta De Valor', 'ubu'),
    'priority' => 20,
    'panel' => 'ubu_home_panel'
));


/*************************  Mostrar Sección  *******************************/

//Setings Para Mostrar Seccion
$wp_customize->add_setting('ubu_setting[show_section_purpose]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Seccion
$wp_customize->add_control('show_section_purpose', array(
    'label' => __('Mostrar Sección', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[show_section_purpose]',
    'type' => 'checkbox'
));


/**********************  Titulo  *******************************/

//Setings Para titulo Seccion
$wp_customize->add_setting('ubu_setting[title_section_purpose]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Seccion
$wp_customize->add_control('title_section_purpose', array(
    'label' => __('Titulo De La Sección', 'ubu'),
    'description' => __('Titulo que mostrarás en la sección', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[title_section_purpose]',
    'input_attrs' => array(
        'style' => 'margin-bottom: 20px'
    ),
));

/************************ Propuesta 1  ******************************/

//Setings Para titulo Propuesta 1
$wp_customize->add_setting('ubu_setting[title_purpose_1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Propuesta 1
$wp_customize->add_control('title_purpose_1', array(
    'label' => __('Titulo 1º Propuesta', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[title_purpose_1]'
));

//Setings Para Descripcion Propuesta 1
$wp_customize->add_setting('ubu_setting[description_purpose_1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Propuesta 1
$wp_customize->add_control('description_purpose_1', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[description_purpose_1]'
));


//Setings Para imagen 1
$wp_customize->add_setting('ubu_setting[img_purpose_1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen 1
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_purpose_1', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[img_purpose_1]'
)));


/************************ Propuesta 2  ******************************/

//Setings Para titulo Propuesta 2
$wp_customize->add_setting('ubu_setting[title_purpose_2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Propuesta 2
$wp_customize->add_control('title_purpose_2', array(
    'label' => __('Titulo 2º Propuesta', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[title_purpose_2]'
));

//Setings Para Descripcion Propuesta 2
$wp_customize->add_setting('ubu_setting[description_purpose_2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Propuesta 2
$wp_customize->add_control('description_purpose_2', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[description_purpose_2]'
));


//Setings Para imagen 2
$wp_customize->add_setting('ubu_setting[img_purpose_2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen 2
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_purpose_2', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 287px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[img_purpose_2]'
)));


/************************ Propuesta 3  ******************************/

//Setings Para titulo Propuesta 3
$wp_customize->add_setting('ubu_setting[title_purpose_3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Propuesta 3
$wp_customize->add_control('title_purpose_3', array(
    'label' => __('Titulo 3º Propuesta', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[title_purpose_3]'
));

//Setings Para Descripcion Propuesta 3
$wp_customize->add_setting('ubu_setting[description_purpose_3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Propuesta 3
$wp_customize->add_control('description_purpose_3', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[description_purpose_3]'
));


//Setings Para imagen 3
$wp_customize->add_setting('ubu_setting[img_purpose_3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen 3
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_purpose_3', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 387px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_purpose',
    'settings' => 'ubu_setting[img_purpose_3]'
)));
