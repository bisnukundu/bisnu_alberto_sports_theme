<?php
if ( !function_exists( "bisnu_alberto_style" ) ):
    function bisnu_alberto_style() {
        wp_enqueue_style( "tailwindCss", get_parent_theme_file_uri( 'dist/style.css' ), [], time() );
    };
endif;
add_action( "init", "bisnu_alberto_style" );