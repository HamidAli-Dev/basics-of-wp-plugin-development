<?php
function ha_plugin_admin_scripts(){
    wp_enqueue_style( "ha-plugin-admin-css", HA_PLUGIN_DIR_URL . "admin/css/admin.css", HA_PLUGIN_VERSION);
    wp_enqueue_script( "ha-plugin-admin-js", HA_PLUGIN_DIR_URL . "admin/js/admin.js", "", HA_PLUGIN_VERSION, true);
}

add_action( "admin_enqueue_scripts", "ha_plugin_admin_scripts");


function ha_plugin_public_scripts(){
    wp_enqueue_style( "ha-plugin-public-css", HA_PLUGIN_DIR_URL . "public/css/public.css", HA_PLUGIN_VERSION);
    wp_enqueue_script( "ha-plugin-public-js", HA_PLUGIN_DIR_URL . "public/js/public.js", "", HA_PLUGIN_VERSION, true);
}

add_action( "wp_enqueue_scripts", "ha_plugin_public_scripts");