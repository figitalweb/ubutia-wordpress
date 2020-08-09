<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>" />

    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo RUTATEMA; ?>/assets/images/logo-icon.png" />

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
                <a href="elements.html">
                    <li>Elements</li>
                </a>
            </ul>
        </div>
    </div>
    <div class="main">
        <header class="bg-img header">
            <nav class="navbar navbar-default navbar-ubutia">
                <div class="container">
                    <div class="navigation-bar">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="logo">
                                    <a href="index.html"><span class="ubutia-icon"></span></a>
                                </div>
                            </div>
                            <div class="col-xs-6 text-right">
                                <div class="menu m">
                                    <a href="#"><span class="ion-navicon _ion-android-menu"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="intro-box">
                        <div class="intro">
                            <h1>We are ubutia agency</h1>
                            <p>Creative digital agency based in US</p>
                            <a class="btn ubutia-btn" href="#">Explore us</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>