<?php
function mi_theme_estilos() {
    wp_enqueue_style('mi-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_theme_estilos');