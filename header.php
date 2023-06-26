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


            <div class="logo">
                <a href="http://nata-craft-cacao.local/">
                    <img src="<?php echo get_template_directory_uri(); ?>./images/natalogo.png" alt="logo">
                </a>

            </div>

            <nav id=" site-navigation" class="main-navigation">
                <div class="main-navigation__container">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary-menu',
                        )
                    );
                    ?>
                </div>
            </nav>

            <!-- <div class="menu-toggle">
                <span class="material-symbol-rounded">sort</span>
            </div> -->

        </header><!-- #masthead -->