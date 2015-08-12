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
    $ar_body_id = explode('/', $body_id);
    $body_id = $ar_body_id[0];
}

add_action('wp_print_scripts', 'scripts');

/* ---------------------------------------------------------------------Title */

function set_wp_title($title, $sep) {
    global $page, $paged;

    if (is_feed()) {
        return $title;
    }

    // Add the site name.
    $title = get_bloginfo('name');

    if (is_front_page() || is_home()) {
        $title = "EVA求人特設サイトTOP $sep $title";
    } else {

        if (is_page()) {
            if (is_page('message')) {
                $title = "代表メッセージ・求める人材 $sep EVA求人特設サイト $sep $title";
            }

            if (is_page('senpai')) {
                $title = "ベトナムで働く先輩社員の声 $sep EVA求人特設サイト $sep $title";
            }

            if (is_page('intern')) {
                $title = "海外インターン経験者の声 $sep EVA求人特設サイト $sep $title";
            }

            if (is_page('attractive')) {
                $title = "エボラブルアジアで働く魅力 $sep EVA求人特設サイト $sep $title";
            }

            if (is_page('job')) {
                $title = "仕事内容 $sep EVA求人特設サイト $sep $title";
            }

            if (is_page('requirements')) {
                $title = "募集要項 $sep EVA求人特設サイト $sep $title";
            }

            if (is_page('faq')) {
                $title = "よくある質問 $sep EVA求人特設サイト $sep $title";
            }

            if (is_page('contact') || is_page('confirm') || is_page('thankyou')) {
                $title = "応募フォーム $sep EVA求人特設サイト $sep $title";
            }
        }
    }

    return $title;
}

add_filter('wp_title', 'set_wp_title', 10, 2);

/* --------------------------------------------------------------------- Menu */

function remove_menus_from_plugins() {

    remove_menu_page('edit.php?post_type=acf');     // ACF
    remove_menu_page('cptui_main_menu');          // CPT
    remove_menu_page('threewp_broadcast');          // Broadcast
}

add_action('admin_init', 'remove_menus_from_plugins');

function remove_menus() {

    global $user_ID;

    $user = new WP_User($user_ID);
    $roles = $user->roles;
    $role = $roles[0];
    $arr_roles = array('administrator');

    if (in_array($role, $arr_roles)) {
        remove_menu_page('edit.php');                   //Posts
        remove_menu_page('upload.php');                 //Media
        remove_menu_page('edit-comments.php');          //Comments
        remove_menu_page('plugins.php');                //Plugins
        remove_menu_page('users.php');                  //Users
        remove_menu_page('tools.php');                  //Tools
    } else {
        remove_menu_page('index.php');                  //Dashboard
        remove_menu_page('edit.php');                   //Posts
        remove_menu_page('upload.php');                 //Media
        remove_menu_page('edit.php?post_type=page');    //Pages
        remove_menu_page('edit-comments.php');          //Comments
        remove_menu_page('themes.php');                 //Appearance
        remove_menu_page('plugins.php');                //Plugins
        remove_menu_page('users.php');                  //Users
        remove_menu_page('tools.php');                  //Tools
        remove_menu_page('options-general.php');        //Settings
    }
}

add_action('admin_menu', 'remove_menus');
