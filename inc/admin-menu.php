<?php

function ha_menu() {
    add_menu_page( "HA Plugin", "HA", "manage_options", "haplugin", "ha_plugin_page", "dashicons-superhero", 20 );

    add_submenu_page( "haplugin", "HA Plugin Sub-Page", "HA Sub-Page", "manage_options", "sub-menu", "ha_plugin_sub_page");
}

add_action( "admin_menu", "ha_menu" );