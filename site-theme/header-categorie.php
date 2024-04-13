<?php
/**
 * This is the template that displays all the <head> section and everything up until main.
 *
 * @package Berno
 * @author Bruno The Codex Wizard
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="logo">
        <img src="https://www.brunobouwman.nl/images/src/ignas-logo-23.webp" alt="">
        <p class="title is-size-1">Ignas Rijkssss</p>
    </div>
    <nav class="dis_non_tablet">
        <?php
        echo wp_nav_menu("Primary Menu");
        ?>
    </nav>
</header>