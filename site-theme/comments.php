<?php
/**
 * Template File that displays comments in your theme.
 *
 * @package Berno
 * @author Bruno The Codex Wizard
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<main class="comments">
    <div class="content">
        <?php
        //Get only the approved comments
        $args = array(
            'status' => 'approve'
        );

        // The comment Query
        $comments_query = new WP_Comment_Query;
        $comments = $comments_query->query($args);

        // Comment Loop
        if ($comments) {
            foreach ($comments as $comment) {
                echo '<p>' . $comment->comment_content . '</p>';
            }
        } else {
            echo 'No comments found.';
        }
        ?>
    </div>
</main>

<?php get_footer();?>