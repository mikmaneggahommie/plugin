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
function head()
{
    echo '<h3 class="head">welcome to my site</h3>';
}