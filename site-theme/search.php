<?php
/**
 * File template for displaying search results pages.
 * Display a list of posts in excerpt or full-length form.
 * Choose one or the other as appropriate.
 *
 * @package Berno
 * @author Bruno The Codex Wizard
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header();
?>

<main class="search">
    <div class="content">
        <?php
        if (have_posts()) { ?>
            <?php while (have_posts()) { ?>
                <?php the_post(); ?>
            <?php } ?>
        <?php } ?>
    </div>
</main>

<?php get_footer(); ?>
