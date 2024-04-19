<?php
function bruno_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

function my_theme_styles()
{
    $style_dir_url = get_template_directory_uri() . "/assets/css/";

    wp_enqueue_style('standard', $style_dir_url . "standard.css");
    wp_enqueue_style('main', $style_dir_url . "main.css");
    wp_enqueue_style('box_model', $style_dir_url . "box_model.css");
    wp_enqueue_style('columns', $style_dir_url . "columns.css");
    wp_enqueue_style('display', $style_dir_url . "display.css");
    wp_enqueue_style('styling', $style_dir_url . "styling.css");

    wp_enqueue_style('img_container', $style_dir_url . "img_container.css");
    wp_enqueue_style('header', $style_dir_url . "header.css");

    wp_enqueue_style('category', $style_dir_url . "category.css");
}

function tt3child_register_acf_blocks()
{
    /**
     * We register our block's with WordPress's handy
     * register_block_type();
     *
     * @link https://developer.wordpress.org/reference/functions/register_block_type/
     */
    register_block_type(__DIR__ . '../blocks/gallery-3-image');
}