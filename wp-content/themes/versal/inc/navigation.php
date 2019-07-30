<?php
/**
 * Template part for displaying main navigation
 */

if ( has_nav_menu('main-menu') ) {
	wp_nav_menu( array( 'depth' => 4, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_class' => 'nav tmnf_custom_menu', 'menu_id' => 'main-nav' , 'theme_location' => 'main-menu' ) );
} else {
    wp_page_menu('show_home=1&menu_id=default-nav&menu_class=nav&sort_column=menu_order'); 
} ?>