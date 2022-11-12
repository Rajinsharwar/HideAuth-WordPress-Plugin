<?php
/**
 * Plugin Name: HideAuth | Hide Author and Date for blog posts
 * Description: Hide the Author information, and Date published from your blogs pots with one click. Clean-up your blogs and make them look more fresh.
 * Author: Rajin Sharwar
 * Author URI: https://linkedin.com/in/raiinsharwar
 * Version: 1.0.0
 */

function hideauth_enqueue_styles() {
    $file_url = plugins_url('/css/stylesheet.css', __FILE__);
    wp_enqueue_style( 'hideauth_sytlesheet', $file_url);
}

add_action('wp_enqueue_scripts', 'hideauth_enqueue_styles' );