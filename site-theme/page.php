<?php
/**
 * File Template for displaying single pages.
 *
 * @package Berno
 * @author Bruno The Codex Wizard
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 */

get_header();?>

<main class="page">
    <div class="content">
        <div class="inside">
            <h1>
                <?php echo get_the_title();?>
            </h1>

            <?php echo apply_filters('the_content', get_the_content());?>
        </div>
    </div>
</main>

<?php get_footer();