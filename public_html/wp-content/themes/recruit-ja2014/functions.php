<?php

/*
 * Author: KhangLe
 * 
 * 
 */

include_once (dirname(__FILE__) . '/MyTheme_Customize.php');
include_once(dirname(__FILE__) . '/cpt_acf_definitions.php');

/* --------------------------------------------------------------------- Init */
global $body_id;

// init session id
function myStartSession() {
    if (!session_id()) {
        session_start();
    }
}

add_action('init', 'myStartSession', 1);

// add javascript
function scripts() {
    if (is_page('contact')) {
        wp_enqueue_script('js-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), '1.14.0', TRUE);
    }

    //
    global $body_id;
    $body_id = (get_page_uri('') == 'hello-world') ? 'index' : get_page_uri('');
}

add_action('wp_print_scripts', 'scripts');

/* ----------------------------------------------------------------------- Menu */

function remove_menus_from_plugins() {

    remove_menu_page('edit.php?post_type=acf');     // ACF
    remove_menu_page('cptui_main_menu');          // CPT
    remove_menu_page('threewp_broadcast');          // Broadcast
}

add_action('admin_init', 'remove_menus_from_plugins');

function remove_menus() {

//    remove_menu_page('index.php');                  //Dashboard
    remove_menu_page('edit.php');                   //Posts
    remove_menu_page('upload.php');                 //Media
//    remove_menu_page('edit.php?post_type=page');    //Pages
    remove_menu_page('edit-comments.php');          //Comments
//    remove_menu_page('themes.php');                 //Appearance
    remove_menu_page('plugins.php');                //Plugins
    remove_menu_page('users.php');                  //Users
    remove_menu_page('tools.php');                  //Tools
    remove_menu_page('options-general.php');        //Settings
}

add_action('admin_menu', 'remove_menus');
