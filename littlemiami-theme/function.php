<?php
function littlemiami_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'littlemiami_theme_setup');

function littlemiami_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'littlemiami_enqueue_styles');
