<?php

function ha_settings_init() {
	// register a new setting for "haplugin" page
	register_setting('haplugin', 'ha_setting_field_txt');
    register_setting('sub-menu', 'ha_setting_field_checkbox');

	// register a new section in the "haplugin" page
	add_settings_section(
		'ha_settings_section_general',
		'General Settings Section', 
        'ha_settings_section_general_callback',
		'haplugin'
	);

	add_settings_section(
		'ha_settings_section_misc',
		'Misc Setting', 
        'ha_settings_misc_callback',
		'sub-menu',
	);

    // register a new field in the "haplugin" page
    add_settings_field(
        'ha_setting_field_txt_1',
        'Text Field',
        'ha_text_settings_field_callback',
        'haplugin',
        'ha_settings_section_general'
    );

    // register a new field in the "sub-menu" page
    add_settings_field(
        'ha_setting_field_checkbox_1',
        'Checkbox Field',
        'ha_checkbox_settings_field_callback',
        'sub-menu',
        'ha_settings_section_misc'
    );
}

/**
 * register ha_settings_init to the admin_init action hook
 */
add_action('admin_init', 'ha_settings_init');

/**
 * callback functions
 */

// section content cb
function ha_settings_section_general_callback() {
	echo '<p>Manage Main Plugin Settings.</p>';
}

function ha_settings_misc_callback() {
	echo '<p>Manage Main Plugin Settings.</p>';
}

// field text cb
function ha_text_settings_field_callback() {
	// get the value of the setting we've registered with register_setting()
	$setting = get_option('ha_setting_field_txt');
	// output the field
	?>
<input type="text" name="ha_setting_field_txt" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
<?php
}

// field checkbox cb
function ha_checkbox_settings_field_callback() {
	$setting = get_option('ha_setting_field_checkbox');
	?>
<input type="checkbox" name="ha_setting_field_checkbox" value="1" <?php checked( $setting ); ?>>
<?php
}