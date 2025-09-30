<?php
/**
 * Plugin Name: Gamestore General
 * Description: core code fore Gamestore
 * Version: 1.0
 * Author: AstroQuill
 * Author Uri: #
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function gamestore_remove_dashboard_wigets(){
    global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
}
add_action('wp_dashboard_setup', 'gamestore_remove_dashboard_wigets');