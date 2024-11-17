<?php

add_action( 'after_setup_theme', 'title_my_theme' );

function title_my_theme() {
	add_theme_support( 'title-tag' );
}

if(!function_exists('_wp_render_title_tag')){
    ?>
    <title> <?php wp_title('|', true, right);?> </title>
    
    <?php
    add_action( 'wp_head', '_wp_render_title_tag' );

}

//include get_parent_theme_file_path( 'inc/helpers.php' );