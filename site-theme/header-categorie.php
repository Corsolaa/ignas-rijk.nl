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
<header class="categories">
    <div class="logo">
        <img src="https://www.brunobouwman.nl/images/src/ignas-logo-23.webp" alt="">
        <p class="title is-size-1">Ignas Rijk</p>
        <p class="sub is-size-4">Daar waar twee artistieke rechterhanden gevraagd worden!</p>
    </div>

    <div class="text">
        <p></p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cum deleniti, doloremque fugit, laudantium
            mollitia natus non quia reprehenderit, sint vero voluptatem. Animi asperiores autem commodi ipsam iusto
            maiores nihil nobis sapiente sint vitae. Aliquam asperiores dolores ducimus laboriosam molestias numquam
            quis vero! Aspernatur, consequuntur doloremque eaque hic quam sit!
        </p>
    </div>
</header>