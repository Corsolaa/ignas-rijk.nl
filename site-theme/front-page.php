<?php
/**
 * If there is a front-page.php file in the theme, this template is always used for the start page.
 * Without the template file, either home.php (blog index) or page.php (static start page) is loaded as normal.
 *
 * @package Berno
 * @author Bruno The Codex Wizard
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
 */
get_header();
?>
    <main>
        <div class="categories columns p_2">
            <?php
            $args = array(
                'post_type' => 'categories',
                'posts_per_page' => -1,
            );

            $cpt_query = new WP_Query($args);

            if ($cpt_query->have_posts()) :
                while ($cpt_query->have_posts()) :
                    $cpt_query->the_post();
                    // Output your post data here
                    the_title(); // Example output: Post Title
                    the_content(); // Example output: Post Content ?>
                    <div class="column is-4">
                        <a class="img_container" href="">
                            <img src="https://www.brunobouwman.nl/images/src/ignas_chairs-25.webp" alt="">
                            <i class="bg-w is-size-1 fa-solid fa-square-up-right"></i>
                        </a>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo 'No posts found';
            endif;
            ?>
        </div>
    </main>

<?php get_footer();