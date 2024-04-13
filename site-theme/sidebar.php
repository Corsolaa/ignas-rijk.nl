<?php
/**
 * A sidebar is any widgetized area of your theme.
 *
 * get_sidebar();
 * If you make a custom sidebar, please do so like this: sibebar-404.php > get_sidebar('404').
 *
 * @package Berno
 * @author Bruno The Codex Wizard
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 */
?>

<div class="sidebar">
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar' ); ?>
	<?php endif; ?>
</div>
?>