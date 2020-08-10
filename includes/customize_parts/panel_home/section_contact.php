<?php

/**************************************************************************************
 *                      Sección Contact 
 *************************************************************************************/
$wp_customize->add_section('ubu_contact', array(
    'title' => __('Sección Contacto', 'ubu'),
    'priority' => 50,
    'panel' => 'ubu_home_panel'
));

/**********************  Titulo de Sección  *******************************/

//Setings Para titulo Seccion
$wp_customize->add_setting('ubu_setting[title_section_contact]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Seccion
$wp_customize->add_control('title_section_contact', array(
    'label' => __('Titulo de Sección', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[title_section_contact]',
    'input_attrs' => array(
        'style' => 'margin-bottom: 20px'
    ),
));


/********************** Dirección *******************************/

//Setings Para titulo direccion
$wp_customize->add_setting('ubu_setting[title_contact_address]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo direccion
$wp_customize->add_control('title_contact_address', array(
    'label' => __('Titulo para Dirección', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[title_contact_address]'
));

//Setings Para descripción direccion
$wp_customize->add_setting('ubu_setting[description_contact_address]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para descripción direccion
$wp_customize->add_control('description_contact_address', array(
    'label' => __('Dirección', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[description_contact_address]',
    'input_attrs' => array(
        'style' => 'margin-bottom: 20px'
    )
));


/********************** Telefono *******************************/

//Setings Para titulo telefono
$wp_customize->add_setting('ubu_setting[title_contact_phone]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo telefono
$wp_customize->add_control('title_contact_phone', array(
    'label' => __('Titulo para Telefono', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[title_contact_phone]'
));

//Setings Para descripción telefono
$wp_customize->add_setting('ubu_setting[description_contact_phone]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para descripción telefono
$wp_customize->add_control('description_contact_phone', array(
    'label' => __('Teléfono', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[description_contact_phone]',
    'type' => 'number',
    'input_attrs' => array(
        'style' => 'margin-bottom: 20px'
    )
));


/********************** Email *******************************/

//Setings Para titulo mail
$wp_customize->add_setting('ubu_setting[title_contact_mail]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo mail
$wp_customize->add_control('title_contact_mail', array(
    'label' => __('Titulo para Email', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[title_contact_mail]'
));

//Setings Para descripción mail
$wp_customize->add_setting('ubu_setting[description_contact_mail]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para descripción mail
$wp_customize->add_control('description_contact_mail', array(
    'label' => __('Email', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[description_contact_mail]',
    'type' => 'email',
    'input_attrs' => array(
        'style' => 'margin-bottom: 20px'
    )
));

/*************************  Mostrar Redes Sociales  *******************************/

//Setings Para Mostrar Seccion Redes Sociales
$wp_customize->add_setting('ubu_setting[show_section_contact_socialmedia]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Seccion Redes Sociales
$wp_customize->add_control('show_section_contact_socialmedia', array(
    'label' => __('Mostrar Redes Sociales', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[show_section_contact_socialmedia]',
    'type' => 'checkbox'
));

/*************************  Redes Sociales  *******************************/

//Setings Para Red Social Facebook
$wp_customize->add_setting('ubu_setting[link_contact_socialfacebook]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Facebook
$wp_customize->add_control('link_contact_socialfacebook', array(
    'label' => __('Link de facebook', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[link_contact_socialfacebook]',
    'type' => 'url'
));

//Setings Para Red Social Instagram
$wp_customize->add_setting('ubu_setting[link_contact_socialinstagram]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Instagram
$wp_customize->add_control('link_contact_socialinstagram', array(
    'label' => __('Link de instagram', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[link_contact_socialinstagram]',
    'type' => 'url'
));

//Setings Para Red Social Linkedin
$wp_customize->add_setting('ubu_setting[link_contact_sociallinkedin]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Linkedin
$wp_customize->add_control('link_contact_sociallinkedin', array(
    'label' => __('Link de linkedin', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[link_contact_sociallinkedin]',
    'type' => 'url'
));

//Setings Para Red Social Twitter
$wp_customize->add_setting('ubu_setting[link_contact_socialtwitter]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Red Social Twitter
$wp_customize->add_control('link_contact_socialtwitter', array(
    'label' => __('Link de twitter', 'ubu'),
    'section' => 'ubu_contact',
    'settings' => 'ubu_setting[link_contact_socialtwitter]',
    'type' => 'url'
));

