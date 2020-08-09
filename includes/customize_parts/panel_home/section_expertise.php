<?php
/**************************************************************************************
 *                      Sección Expertise 
 *************************************************************************************/
$wp_customize->add_section('ubu_expertise', array(
    'title' => __('Sección Habilidades', 'ubu'),
    'priority' => 25,
    'panel' => 'ubu_home_panel'
));


/*************************  Mostrar Sección  *******************************/

//Setings Para Mostrar Seccion
$wp_customize->add_setting('ubu_setting[show_section_expertise]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Seccion
$wp_customize->add_control('show_section_expertise', array(
    'label' => __('Mostrar Sección', 'ubu'),
    'section' => 'ubu_expertise',
    'settings' => 'ubu_setting[show_section_expertise]',
    'type' => 'checkbox'
));


/**********************  Titulo  *******************************/

//Setings Para titulo Seccion
$wp_customize->add_setting('ubu_setting[title_section_expertise]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Seccion
$wp_customize->add_control('title_section_expertise', array(
    'label' => __('Titulo De La Sección', 'ubu'),
    'description' => __('Titulo que mostrarás en la sección', 'ubu'),
    'section' => 'ubu_expertise',
    'settings' => 'ubu_setting[title_section_expertise]'
));

/**********************  Texto de Primer Slide  *******************************/

//Setings Para texto primer slide
$wp_customize->add_setting('ubu_setting[text_slide_expertise_1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para texto primer slide
$wp_customize->add_control('text_slide_expertise_1', array(
    'label' => __('Texto del Primer Slide', 'ubu'),
    'section' => 'ubu_expertise',
    'settings' => 'ubu_setting[text_slide_expertise_1]',
    'type' => 'textarea'
));


/**********************  Texto de Segundo Slide  *******************************/

//Setings Para texto segundo slide
$wp_customize->add_setting('ubu_setting[text_slide_expertise_2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para texto segundo slide
$wp_customize->add_control('text_slide_expertise_2', array(
    'label' => __('Texto del Segundo Slide', 'ubu'),
    'section' => 'ubu_expertise',
    'settings' => 'ubu_setting[text_slide_expertise_2]',
    'type' => 'textarea'
));

/************************ Seleccionar Imagen  ******************************/

//Setings Para imagen
$wp_customize->add_setting('ubu_setting[img_expertise]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_expertise', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_expertise',
    'settings' => 'ubu_setting[img_expertise]'
)));