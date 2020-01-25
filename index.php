<?php
/**
 * Plugin Name: My First custom Plugin
 * Plugin URI: http://www.bugcutter.com/custom-wordpress-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Bugcutter Inc.
 * Author URI: http://www.bugcutter.com
 */
 
 add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}