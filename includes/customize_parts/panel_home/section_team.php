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

/*************************  Mostrar Redes Sociales  *******************************/

//Setings Para Mostrar Seccion Redes Sociales
$wp_customize->add_setting('ubu_setting[show_section_team_socialmedia]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Seccion Redes Sociales
$wp_customize->add_control('show_section_team_socialmedia', array(
    'label' => __('Mostrar Redes Sociales', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[show_section_team_socialmedia]',
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

//Setings Para Red Social Facebook Persona 1
$wp_customize->add_setting('ubu_setting[link_team_socialfacebook_person1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Facebook Persona 1
$wp_customize->add_control('link_team_socialfacebook_person1', array(
    'label' => __('Link de facebook', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_socialfacebook_person1]',
    'type' => 'url'
));

//Setings Para Red Social Instagram Persona 1
$wp_customize->add_setting('ubu_setting[link_team_socialinstagram_person1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Instagram Persona 1
$wp_customize->add_control('link_team_socialinstagram_person1', array(
    'label' => __('Link de instagram', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_socialinstagram_person1]',
    'type' => 'url'
));

//Setings Para Red Social Linkedin Persona 1
$wp_customize->add_setting('ubu_setting[link_team_sociallinkedin_person1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Linkedin Persona 1
$wp_customize->add_control('link_team_sociallinkedin_person1', array(
    'label' => __('Link de linkedin', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_sociallinkedin_person1]',
    'type' => 'url'
));

//Setings Para Red Social Twitter Persona 1
$wp_customize->add_setting('ubu_setting[link_team_socialtwitter_person1]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Twitter Persona 1
$wp_customize->add_control('link_team_socialtwitter_person1', array(
    'label' => __('Link de twitter', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_socialtwitter_person1]',
    'type' => 'url',
    'input_attrs' => array(
        'style' => 'margin-bottom: 30px'
    )
));



/************************ Persona 2  ******************************/

//Setings Para titulo Persona 2
$wp_customize->add_setting('ubu_setting[title_team_person2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Persona 2
$wp_customize->add_control('title_team_person2', array(
    'label' => __('Nombre de la 2º Persona', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[title_team_person2]'
));

//Setings Para Descripcion Persona 2
$wp_customize->add_setting('ubu_setting[description_team_person2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Persona 2
$wp_customize->add_control('description_team_person2', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[description_team_person2]',
    'type' => 'textarea'
));

//Setings Para imagen persona 2
$wp_customize->add_setting('ubu_setting[img_team_person2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen persona 2
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_team_person2', array(
    'label' => __('Selecciona Una Imagen de Perfil', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 287px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[img_team_person2]'
)));


//Setings Para Red Social Facebook Persona 2
$wp_customize->add_setting('ubu_setting[link_team_socialfacebook_person2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Facebook Persona 2
$wp_customize->add_control('link_team_socialfacebook_person2', array(
    'label' => __('Link de facebook', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_socialfacebook_person2]',
    'type' => 'url'
));

//Setings Para Red Social Instagram Persona 2
$wp_customize->add_setting('ubu_setting[link_team_socialinstagram_person2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Instagram Persona 2
$wp_customize->add_control('link_team_socialinstagram_person2', array(
    'label' => __('Link de instagram', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_socialinstagram_person2]',
    'type' => 'url'
));

//Setings Para Red Social Linkedin Persona 2
$wp_customize->add_setting('ubu_setting[link_team_sociallinkedin_person2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Linkedin Persona 2
$wp_customize->add_control('link_team_sociallinkedin_person2', array(
    'label' => __('Link de linkedin', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_sociallinkedin_person2]',
    'type' => 'url'
));

//Setings Para Red Social Twitter Persona 2
$wp_customize->add_setting('ubu_setting[link_team_socialtwitter_person2]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Twitter Persona 2
$wp_customize->add_control('link_team_socialtwitter_person2', array(
    'label' => __('Link de twitter', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_socialtwitter_person2]',
    'type' => 'url',
    'input_attrs' => array(
        'style' => 'margin-bottom: 30px'
    )
));


/************************ Persona 3  ******************************/

//Setings Para titulo Persona 3
$wp_customize->add_setting('ubu_setting[title_team_person3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Persona 3
$wp_customize->add_control('title_team_person3', array(
    'label' => __('Nombre de la 3º Persona', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[title_team_person3]'
));

//Setings Para Descripcion Persona 3
$wp_customize->add_setting('ubu_setting[description_team_person3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Persona 3
$wp_customize->add_control('description_team_person3', array(
    'label' => __('Descripción', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[description_team_person3]',
    'type' => 'textarea'
));

//Setings Para imagen persona 3
$wp_customize->add_setting('ubu_setting[img_team_person3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para imagen persona 3
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_team_person3', array(
    'label' => __('Selecciona Una Imagen de Perfil', 'ubu'),
    'description' => __('la imagen debe tener el siguiente tamaño: 387px de ancho. Por 68px de alto', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[img_team_person3]'
)));


//Setings Para Red Social Facebook Persona 3
$wp_customize->add_setting('ubu_setting[link_team_socialfacebook_person3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Facebook Persona 3
$wp_customize->add_control('link_team_socialfacebook_person3', array(
    'label' => __('Link de facebook', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_socialfacebook_person3]',
    'type' => 'url'
));

//Setings Para Red Social Instagram Persona 3
$wp_customize->add_setting('ubu_setting[link_team_socialinstagram_person3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Instagram Persona 3
$wp_customize->add_control('link_team_socialinstagram_person3', array(
    'label' => __('Link de instagram', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_socialinstagram_person3]',
    'type' => 'url'
));

//Setings Para Red Social Linkedin Persona 3
$wp_customize->add_setting('ubu_setting[link_team_sociallinkedin_person3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Linkedin Persona 3
$wp_customize->add_control('link_team_sociallinkedin_person3', array(
    'label' => __('Link de linkedin', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_sociallinkedin_person3]',
    'type' => 'url'
));

//Setings Para Red Social Twitter Persona 3
$wp_customize->add_setting('ubu_setting[link_team_socialtwitter_person3]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Twitter Persona 3
$wp_customize->add_control('link_team_socialtwitter_person3', array(
    'label' => __('Link de twitter', 'ubu'),
    'section' => 'ubu_team',
    'settings' => 'ubu_setting[link_team_socialtwitter_person3]',
    'type' => 'url',
    'input_attrs' => array(
        'style' => 'margin-bottom: 30px'
    )
));

