<?php
/*
Plugin Name: Top bar
Plugin URI: http://localhost/plug/wordpress
Description:  It is a plugin that adds a welcome bar at  the top of your page.
Author: Me
Author URI: http://localhost/plug/wordpress
Version: 1.0
Text Domain: myplug


*/
add_action('wp_body_open','head');
function get_names()
{
    if( !is_user_logged_in() )
    {
        return ' to ' . get_bloginfo('name');
    }
    else
    {
        $current_user = wp_get_current_user();
        return $current_user -> user_login;   
    }
}
function head()
{
    echo '<h3 class="head"> Welcome ' . get_names() . '</h3>';
}
add_action('wp_print_styles', 'head_css');

function head_css()
{
    echo '
        <style>
		h3.head {margin: 0; padding: 30px; text-align: center;}
        </style>
    ';
}