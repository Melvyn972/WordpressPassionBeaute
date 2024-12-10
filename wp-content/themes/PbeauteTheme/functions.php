<?php

function passion_beaute_enqueue_styles() {
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_style('bootstrap-icons', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('dark-mode', get_stylesheet_directory_uri() . '/js/dark-mode.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'passion_beaute_enqueue_styles');
function passion_beaute_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'passion-beaute'),
    ));
}
add_action('init', 'passion_beaute_register_menus');

function passion_beaute_widgets_init() {
    register_sidebar(array(
        'name'          => 'Primary Sidebar',
        'id'            => 'primary-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'passion_beaute_widgets_init');

function passion_beaute_menu_classes($classes, $item, $args) {
    if ($args->theme_location == 'primary') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'passion_beaute_menu_classes', 1, 3);

function passion_beaute_menu_link_attributes($atts, $item, $args) {
    if ($args->theme_location == 'primary') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'passion_beaute_menu_link_attributes', 1, 3);

function restrict_access() {
    if (!is_user_logged_in() && !is_admin()) {
        wp_redirect(wp_login_url());
        exit();
    }
}
add_action('template_redirect', 'restrict_access');

function custom_enqueue_menu_scripts() {
    wp_enqueue_script('custom-menu-toggle', get_stylesheet_directory_uri() . '/js/menu-toggle.js', array(), null, true);
    wp_enqueue_script('loading-screen', get_stylesheet_directory_uri() . '/js/loading-screen.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'custom_enqueue_menu_scripts');

function pasion_beauter_admin_color_scheme() {
    wp_admin_css_color(
        'Passion-Beaute',
        __('Passion Beaute', 'textdomain'),
        get_template_directory_uri() . '/css/passion-beaute-admin.css',
        array('#e9436f', '#cc375d', '#f5f5f5', '#333', '#4b2e2e')
    );
}
add_action('admin_init', 'pasion_beauter_admin_color_scheme');

