<?php
/**
* Plugin Name: Very First Plugin
* Plugin URI: https://www.yourwebsiteurl.com/
* Description: This is the very first (second) plugin I ever created.
* Version: 1.0
* Author: Your Name Here
* Author URI: http://yourwebsiteurl.com/
**/

function dh_modify_read_more_link () {

    return '<a class="more-link" href="'. get_permalink().'"> Kliknij, aby przeczytać! </a>';

}

add_filter ('the_content_more_link', 'dh_modify_read_more_link');
?>