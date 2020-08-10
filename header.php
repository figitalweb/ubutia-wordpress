<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>" />

    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div id="menu-item" class="menu-item hide-menu">
        <div class="container">
            <ul>
                <a href="index.html">
                    <li>home</li>
                </a>
                <a href="#about">
                    <li>about</li>
                </a>
                <a href="#expertise">
                    <li>expertise</li>
                </a>
                <a href="#workstation">
                    <li>workstation</li>
                </a>
                <a href="#team">
                    <li>team</li>
                </a>
                <a href="#contact">
                    <li>contact</li>
                </a>
                <a href="">
                    <li></li>
                </a>
            </ul>
        </div>
    </div>
    <div class="main">
        