<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
</head>
<body <?php body_class(); ?>>
<div id="loading-screen">
    <div class="spinner">
        <div class="spinner-border"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/haunted_house.png" alt="Loading">
    </div>
</div>
<div class="d-flex">
    <!-- Sidebar -->
    <aside id="sidebar" class="bg-light border-right">
    <div class="sidebar-header text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_passionbeaute.png" alt="Passion Beauté" width="150">
    </div>
    <ul class="nav flex-column">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'navbar-nav',
            'container'      => false,
        ));
        ?>
    </ul>
</aside>

    <div id="content-wrapper" class="w-100">
        <nav class="navbar">
            <span class="navbar-text">
                <?php if (is_user_logged_in()) : ?>
                    Bonjour <?php echo wp_get_current_user()->display_name; ?> 👋
                <?php else : ?>
                    Bonjour 👋
                <?php endif; ?>
                <label class="switch">
                    <input type="checkbox" id="dark-mode-toggle">
                    <span class="slider round">
                        <i class="bi bi-sun"></i>
                        <i class="bi bi-moon"></i>
                    </span>
                </label>
            </span>
            <div class="d-flex ms-auto">
                <?php get_search_form(); ?>
                <a href="<?php echo wp_logout_url(home_url()); ?>" class="btn btn-danger">Déconnexion</a>
            </div>
        </nav>