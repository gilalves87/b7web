<?php
// Adicionar CSS e JS
function gp_theme_styles() {
    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');

    wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0', true);
}

// Adicionar Suporte a Menus
function gp_after_setup() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
}

// Adicionar Widgets
function gp_widgets() {
    register_sidebar(array(
        'name' => __('Meu Primeiro Sidebar', 'primeirotema'),
        'id' => 'gp_sidebar',
        'description' => __('Sidebar para o tema', 'primeirotema'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ));
}