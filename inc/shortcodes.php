<?php

// Simple Shortcode Example
function my_shortcode(){
    $db_value = get_option( "ha_setting_field_txt_1" );
    // return "<h2>This is simple shortcode output</h2>";
}
add_shortcode( "HA_TEST", "my_shortcode" );
// usage: [HA_TEST]

// Enclosing shortcode
function my_enclosing_shortcode( $atts, $content){
    $html = "<a href='#' target='_blank' class='ha-enclosing-shortcode'>";
    $html .= $content;
    $html .= "</a>";
    return $html;
}

add_shortcode( "HA_ENCLOSING", "my_enclosing_shortcode" );
// usage: [HA_ENCLOSING] Click Here [/HA_ENCLOSING]


// Shortcode with attributes
function my_attribute_shortcode($atts = array()){
    $attrs = shortcode_atts( 
        array(
        "label" => "Button Label",
        "link"  => "https://itactivities.com/"
    ), $atts,
    );

    $html = "<a href='".$attrs["link"]."'>";
    $html .= $attrs["label"];
    $html .= "</a>";
    return $html;
}
add_shortcode( "HA_ATTR", "my_attribute_shortcode" );
// usage: [HA_ATTR label="Visit IT Activities" link="https://itactivities.com



// Project: Display Meta on Frontend using Shortcode

function ha_project_meta_shortcode($atts) {
    // Extract and merge attributes with defaults
    $attrs = shortcode_atts(array(
        'id' => get_the_ID( ),
    ), $atts, 'ha_project_meta');

    $project_url = get_post_meta( $attrs['id'], 'project_url', true );
    $project_completion = get_post_meta( $attrs['id'], 'project_completion_duration', true );
    $project_cost = get_post_meta( $attrs['id'], 'project_estimated_cost', true );

    $output = "<div class='ha-project-meta'>"
        . "<p><strong>Project URL:</strong> <a href='" . esc_url( $project_url ) . "' target='_blank'>Here is Project URL</a></p>"
        . "<p><strong>Completed In:</strong> " . esc_html( $project_completion ) . "</p>"
        . "<p><strong>Development Cost:</strong> " . esc_html( $project_cost ) . "</p>"
        . "</div>";
    return $output;
}
add_shortcode('ha_project_meta', 'ha_project_meta_shortcode');