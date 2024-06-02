<?php
/**
 * file template for displaying single categories post type;
 *
 * @package Berno
 * @author Bruno The Codex Wizard
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 */

get_header();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

    <main class="category">
        <div class="columns p_2">

            <div class="column is-4">
                <div class="container">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                </div>
            </div>
            <div class="column is-4 dis_non_mobile">
                <div class="container">
                    <img src="<?php echo get_field("image_1") ?>" alt="">
                </div>
            </div>
            <div class="column is-4 dis_non_tablet">
                <div class="container">
                    <img src="<?php echo get_field("image_2") ?>" alt="">
                </div>
            </div>

            <div class="column is-12 txt">
                <div class="container">
                    <h1><em><?php the_title();?></em></h1>
                    <?php echo get_the_content();?>
                </div>
            </div>

            <div class="column is-4 hide_mobile">
                <div class="container">
                    <img src="<?php echo get_field("image_1") ?>" alt="">
                </div>
            </div>

            <div class="column is-4 hide_tablet">
                <div class="container">
                    <img src="<?php echo get_field("image_2") ?>" alt="">
                </div>
            </div>

            <?php
            $img_gallery = get_field("image_gallery");

            if ($img_gallery) {
                foreach ($img_gallery as $gallery) {
                    foreach (array_slice($gallery, 1) as $item) { ?>

                        <div class="column is-4">
                            <div class="container">
                                <img src="<?php echo $item ?>" alt="">
                            </div>
                        </div>

                    <?php }
                }
            }
            ?>
        </div>
    </main>

<?php get_footer();