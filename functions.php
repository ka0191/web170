<?php

/*
Theme Name: Web170
Author:Kayla Kang
Author URI: http://kaylakang.com
Description: This is the demo theme for the WEB170 class for the Spring 2017
Version:1.0
*/
    register_sidebar(array(
        'before-widget' => '<div id="%1$s" class="widget%2$s">',
        'after-widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_nav_menus();

    add_theme_support( 'post-thumbnails' );

    


?>
