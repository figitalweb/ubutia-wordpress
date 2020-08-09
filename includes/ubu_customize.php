<?php

/**
 * Personalizar el tema, agregando paneles, secciones, settings y controles
 */

function ubu_customize_theme($wp_customize)
{

    /**************************************************************************************
     *                              Panel Home
     *************************************************************************************/
    $wp_customize->add_panel('ubu_home_panel', array(
        'title' => __('Personalizar Home', 'ubu'),
        'description' => __('Secciones de Página', 'ubu'),
        'priority' => 20
    ));

    // Sección Header
    include_once('customize_parts/panel_home/section_header.php');

    // Sección About
    include_once('customize_parts/panel_home/section_about.php');

    // Sección Purpose
    include_once('customize_parts/panel_home/section_purpose.php');

}

add_action('customize_register', 'ubu_customize_theme');
