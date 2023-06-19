<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nata Craft Cacao</title>
    <?php wp_head(); ?>
</head>



<body>
    <?php wp_body_open(); ?>

    <div id="page" class="site">

        <header id="masthead" class="site-header">

            <nav id="site-navigation" class="main-navigation">
                <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> <span class="material-symbols-rounded"> sort </span> </button> -->

                <div class="main-navigation__container">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary-menu',
                        )
                    );
                    ?>
                </div>

            </nav><!-- #site-navigation -->
            <div class="logo">
                <h3>nata</h3>
            </div>
            <div class="second-navigation">
                <a href="#">
                    <span class="material-symbols-rounded"> shopping_cart </span>
                </a>
                <a href="">
                    <span class="material-symbols-rounded"> person </span>
                </a>
            </div>

        </header><!-- #masthead -->