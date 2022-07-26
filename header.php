<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <nav class="menu-principal navbar navbar-expand-lg navbar-light bg-dark w-100">
        <a class="navbar-brand" href="<?= home_url('/') ?>" style="width: 3.4rem;">
            <img class="img-responsive w-100 h-100" src="<?= get_template_directory_uri() . '/LogoSIGIF_540x540.png'; ?>" alt="logo" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => 'false',
                'menu_class' => 'navbar-nav mr-auto',
            ]); ?>
            <?php get_search_form(); ?>
        </div>
    </nav>
    <div class="row" style="height: 5px">
        <div class="green col-4 h-100" style="background: green;"></div>
        <div class="red col-4 h-100" style="background: red;"></div>
        <div class="yellow col-4 h-100" style="background: yellow;"></div>
    </div>

    