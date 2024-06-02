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
    <a class="logo text_decor_none" href="<?php echo get_home_url() ?>">
        <img src="https://ignas-rijk.nl/wp-content/uploads/2024/02/cropped-ignas-logo-23.webp" alt="">
        <p class="title is-size-1">Ignas Rijk</p>
    </a>
    <nav>
        <div class="menu-item">
            <a class="is-size-2" href="https://ignas-rijk.nl/contact/">
                <i style="margin-right: 15px" class="is-size-2 fa-solid fa-square-phone-flip"></i>
                contact</a>
        </div>
    </nav>
</header>