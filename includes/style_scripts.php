<?php

/******* Estilos CSS ********/
function ubu_style(){

    //registrando estilos
    wp_register_style('bootstrap', RUTATEMA . '/assets/css/bootstrap.min.css', '', '3.3.7', 'all');
    
    wp_register_style('bootstrap-theme', RUTATEMA . '/assets/css/bootstrap-theme.min.css', array('bootstrap'), '3.3.7', 'all');

    wp_register_style('owl-carousel', RUTATEMA . '/assets/css/owl.carousel.css', array('bootstrap-theme'), '1.0', 'all');

    wp_register_style('owl-carousel-theme', RUTATEMA . '/assets/css/owl.theme.default.min.css', array('owl-carousel'), '1.0', 'all');

    wp_register_style('magnific-popup', RUTATEMA . '/assets/css/magnific-popup.css', array('owl-carousel-theme'), '1.0', 'all');

    wp_register_style('style', RUTATEMA . '/style.css', array('magnific-popup'), '1.0', 'all');

    //Cargando estilos
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'ubu_style');

/******* Scripts ********/
function ubu_scripts(){

    //registrando scripts
    wp_register_script('bootstrap-js', RUTATEMA . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
    
    wp_register_script('owl-carousel-js', RUTATEMA . '/assets/js/owl.carousel.min.js', array('bootstrap-js'), '1.0', true);

    wp_register_script('magnific-popup-js', RUTATEMA . '/assets/js/jquery.magnific-popup.min.js', array('owl-carousel-js'), '1.0', true);

    wp_register_script('script', RUTATEMA . '/assets/js/script.js', array('magnific-popup-js'), '1.0', true);

    //Cargando estilos
    wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'ubu_scripts');