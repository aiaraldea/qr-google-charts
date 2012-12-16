<?php
/*
Plugin Name: QR Code Google Charts
URI: http://yourls.org/
Description: Inline Qr codes using Google Charts API
Version: 1.0
Author: Aiaraldea
Author URI: http://aiaraldea.com/
*/

// Kick in if the loader does not recognize a valid pattern
yourls_add_action( 'html_head', 'qrcode_js' );

//insert the JS and CSS files to head.
function qrcode_js( ) {

        $qrcodejs = "<script src=\"". yourls_plugin_url( dirname( __FILE__ ) ). "/inline-qrcode.js\" type=\"text/javascript\"></script>" ;
        $customcss = "<link rel=\"stylesheet\" href=\"". yourls_plugin_url( dirname( __FILE__ ) ) . "/custom.css\" type=\"text/css\" />";

        echo $qrcodejs;
        echo $customcss;
}

