<?php

function ha_plugin_page() {
    ?>
<div class="wrap">
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
    <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "wporg_options"
        settings_fields( 'haplugin' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'haplugin' );
        // output save settings button
        submit_button( __( 'Save Settings', 'ha-plugin' ) );
        ?>
    </form>
</div>
<?php
}

function ha_plugin_sub_page(){
    ?>
<div class="wrap">
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
    <p>This is a sub page under HA Plugin menu.</p>
    <form action="options.php" method="post">
        <?php

        // output security fields for the registered setting "wporg_options"
        settings_fields( 'sub-menu' );

        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'sub-menu' );

        // output save settings button
        submit_button( __( 'Save Settings', 'ha-plugin' ) );
        ?>
    </form>
</div>
<?php
}