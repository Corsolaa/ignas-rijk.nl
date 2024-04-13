<?php
/**
 * File Template for displaying archive pages.
 *
 * @package Berno
 * @author Bruno The Codex Wizard
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
 */

get_header();
?>

<main class="archive">
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


