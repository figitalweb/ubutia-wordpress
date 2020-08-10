<?php

/**************************************************************************************
 *                      Sección Workastation 
 *************************************************************************************/
$wp_customize->add_section('ubu_work', array(
    'title' => __('Sección Tipo De Clientes', 'ubu'),
    'priority' => 40,
    'panel' => 'ubu_home_panel'
));


/*************************  Mostrar Sección  *******************************/

//Setings Para Mostrar Seccion
$wp_customize->add_setting('ubu_setting[show_section_work]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Seccion
$wp_customize->add_control('show_section_work', array(
    'label' => __('Mostrar Sección', 'ubu'),
    'description' => __('Puedes completar los 6 items, o solo los que necesites, se mostrarán los que estén completos', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[show_section_work]',
    'type' => 'checkbox'
));


/**********************  Titulo  *******************************/

//Setings Para titulo Seccion
$wp_customize->add_setting('ubu_setting[title_section_work]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Seccion
$wp_customize->add_control('title_section_work', array(
    'label' => __('Titulo De La Sección', 'ubu'),
    'description' => __('Titulo que mostrarás en la sección', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[title_section_work]',
    'input_attrs' => array(
        'style' => 'margin-bottom: 20px'
    ),
));

/************************ Item 1  ******************************/

//Setings Para titulo Item 1
$wp_customize->add_setting('ubu_setting[title_work_item1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Item 1
$wp_customize->add_control('title_work_item1', array(
    'label' => __('Titulo 1º Item', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[title_work_item1]'
));

//Setings Para Descripcion Item 1
$wp_customize->add_setting('ubu_setting[description_work_item1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Item 1
$wp_customize->add_control('description_work_item1', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[description_work_item1]',
    'type' => 'textarea'
));

//Setings Para imagen Item 1
$wp_customize->add_setting('ubu_setting[img_work_item1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen Item 1
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_work_item1', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[img_work_item1]'
)));


/************************ Item 2  ******************************/

//Setings Para titulo Item 2
$wp_customize->add_setting('ubu_setting[title_work_item2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Item 2
$wp_customize->add_control('title_work_item2', array(
    'label' => __('Titulo 2º Item', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[title_work_item2]'
));

//Setings Para Descripcion Item 2
$wp_customize->add_setting('ubu_setting[description_work_item2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Item 2
$wp_customize->add_control('description_work_item2', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[description_work_item2]',
    'type' => 'textarea'
));

//Setings Para imagen Item 2
$wp_customize->add_setting('ubu_setting[img_work_item2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen Item 2
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_work_item2', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[img_work_item2]'
)));


/************************ Item 3  ******************************/

//Setings Para titulo Item 3
$wp_customize->add_setting('ubu_setting[title_work_item3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Item 3
$wp_customize->add_control('title_work_item3', array(
    'label' => __('Titulo 3º Item', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[title_work_item3]'
));

//Setings Para Descripcion Item 3
$wp_customize->add_setting('ubu_setting[description_work_item3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Item 3
$wp_customize->add_control('description_work_item3', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[description_work_item3]',
    'type' => 'textarea'
));

//Setings Para imagen Item 3
$wp_customize->add_setting('ubu_setting[img_work_item3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen Item 3
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_work_item3', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[img_work_item3]'
)));


/************************ Item 4  ******************************/

//Setings Para titulo Item 4
$wp_customize->add_setting('ubu_setting[title_work_item4]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Item 4
$wp_customize->add_control('title_work_item4', array(
    'label' => __('Titulo 4º Item', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[title_work_item4]'
));

//Setings Para Descripcion Item 4
$wp_customize->add_setting('ubu_setting[description_work_item4]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Item 4
$wp_customize->add_control('description_work_item4', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[description_work_item4]',
    'type' => 'textarea'
));

//Setings Para imagen Item 4
$wp_customize->add_setting('ubu_setting[img_work_item4]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen Item 4
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_work_item4', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[img_work_item4]'
)));


/************************ Item 5  ******************************/

//Setings Para titulo Item 5
$wp_customize->add_setting('ubu_setting[title_work_item5]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Item 5
$wp_customize->add_control('title_work_item5', array(
    'label' => __('Titulo 5º Item', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[title_work_item5]'
));

//Setings Para Descripcion Item 5
$wp_customize->add_setting('ubu_setting[description_work_item5]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Item 5
$wp_customize->add_control('description_work_item5', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[description_work_item5]',
    'type' => 'textarea'
));

//Setings Para imagen Item 5
$wp_customize->add_setting('ubu_setting[img_work_item5]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen Item 5
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_work_item5', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[img_work_item5]'
)));

/************************ Item 6  ******************************/

//Setings Para titulo Item 6
$wp_customize->add_setting('ubu_setting[title_work_item6]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Item 6
$wp_customize->add_control('title_work_item6', array(
    'label' => __('Titulo 6º Item', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[title_work_item6]'
));

//Setings Para Descripcion Item 6
$wp_customize->add_setting('ubu_setting[description_work_item6]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Item 6
$wp_customize->add_control('description_work_item6', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[description_work_item6]',
    'type' => 'textarea'
));

//Setings Para imagen Item 6
$wp_customize->add_setting('ubu_setting[img_work_item6]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen Item 6
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_work_item6', array(
    'label' => __('Selecciona Una Imagen', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 187px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_work',
    'settings' => 'ubu_setting[img_work_item6]'
)));


