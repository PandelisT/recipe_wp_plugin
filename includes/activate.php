<?php

function r_activate_plugin(){
    if( version_compare( get_bloginfo('version'), '5.0', '<' )){
        wp_die("You must update your WordPress version to at least 5.0", 'recipe');
    }
}