<?php
/**
 * File Template for displaying single posts
 *
 * @package Berno
 * @author Bruno The Codex Wizard
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();?>

<main class="post">
    <div class="content">
        <?php while(have_posts()) {
            the_post();?>
        <?php } ?>
    </div>
</main>

<?php get_footer();?>