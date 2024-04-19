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

            <?php
            $img_gallery = get_field("image_gallery");
            foreach ($img_gallery as $gallery) {
                foreach (array_slice($gallery, 1) as $item) { ?>

                    <div class="column is-4">
                        <div class="container">
                            <img src="<?php echo $item ?>" alt="">
                        </div>
                    </div>

                <?php }
            }
            ?>
            
            <div class="column is-8 txt">
                <div class="container">
                    <span>
                        <strong>Ignas Rijkelijkhuizen: Allround fijnschilder en bouwkunstenaar</strong><br><br>
                        - Een toegewijd ervaren en creatief verfijnd schilder<br>
                        - Meubelmaker en gespecialiseerd in fijn timmerwerk<br>
                        - Oog voor detail en unieke oplossingen<br>
                        - Maatwerk<br><br>
                        Ik heb een grafische opleiding gehad en jarenlang gewerkt als werktekenaar bij diverse grafische bedrijven.  <br><br>
                        Ook heb ik diverse cursussen en masterclasses gevolgd op het gebied van kleur-schilder- en decortechniek. <br>
                    </span>

                </div>
            </div>
        </div>
    </main>

<?php get_footer();