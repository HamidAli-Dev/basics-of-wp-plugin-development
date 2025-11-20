<?php

// actions
function ha_plugin_add_footer_text(){
    echo "Copyright &copy; 2025 Hamid Ali";
}

add_action( "wp_footer", "ha_plugin_add_footer_text", 20 );



function ha_meta_info(){
  	if ( is_singular( 'post' ) ) {
		echo '<meta property="og:title" content="'  . esc_attr( get_the_title() )   . "\" />\n";
		echo '<meta property="og:description" content="' . esc_attr( get_the_excerpt() ) . "\" />\n";
	}  
}

add_action( "wp_head", "ha_meta_info", 999 );


// filters
function ha_post_title ($title){
    $emoji = '😎';
    if(is_singular( "post" )){
        return $emoji . $title;
    }
    return $title;
}

add_filter("the_title", "ha_post_title");