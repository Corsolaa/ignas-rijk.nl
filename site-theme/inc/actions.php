<?php
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );
add_action( 'after_setup_theme', 'bruno_setup' );

add_action( 'init', 'tt3child_register_acf_blocks' );
