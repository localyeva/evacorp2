<?php

/*
 * Author: KhangLe
 * 
 * 
 */

include_once(dirname(__FILE__) . '/lib/includes/MyFunctions.php');
include_once(dirname(__FILE__) . '/lib/includes/MyTheme_Customize.php');
include_once(dirname(__FILE__) . '/lib/includes/cpt_acf_definitions.php');
include_once(dirname(__FILE__) . '/lib/includes/my-company-taxonomy-custom.php');

//@ini_set('upload_max_size', '64M');
//@ini_set('post_max_size', '64M');
//@ini_set('max_execution_time', '300');
// アイキャッチ画像作成
add_theme_support('post-thumbnails');

// 基本サイズ
//set_post_thumbnail_size(480, 150);
// Custom Size
add_image_size('img_re', 300, 260, true);
//Recommend
add_image_size('recommend01', 265, 187, true);
add_image_size('recommend02', 265, 68, false);
add_image_size('recommend03', 150, 150, false);
add_image_size('recommend04', 75, 75, false);
add_image_size('recommend05', 75, 20, false);
add_image_size('recommend06', 265, 999);
//Gallery
add_image_size('gallery01', 600, 400, false);
add_image_size('gallery02', 100, 100, true);

//Circle
add_image_size('circle01', 264, 184, true);

//result
add_image_size('result01', 325, 192, false);

//Staff
add_image_size('staff01', 162, 162, true);
add_image_size('staff02', 124, 124, true);
add_image_size('staff03', 224, 328, true);
add_image_size('staff04', 101, 101, true);

/* --------------------------------------------------------------------- */

function get_taxonomy_info($post_id) {
    global $evacorp_settings;

    $term = get_the_terms($post_id, 'company-tax');
    $t_id = $term[0]->term_id;
    $tax_info = array();

    foreach ($evacorp_settings as $field => $data) {
        $key = $data['id'];
        $tax_id = $key . '-' . $t_id;
        $tax_meta = 'evacorp_' . $tax_id;
        //
        $info = get_option($tax_meta);
        $tax_info[$key] = stripcslashes($info[$tax_id]);
    }

    return $tax_info['google-map'] ? $tax_info['google-map'] : '';
}

/* --------------------------------------------------------------------- */

/* --------------------------------------------------------------------- Init */

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
        wp_enqueue_script('js-contact', get_template_directory_uri() . '/js/contact.js', array('js-validate'), '1', TRUE);
    }
}

add_action('wp_print_scripts', 'scripts');

/* ------------------------------------------------------------------- paging */

$option_posts_per_page = get_option('posts_per_page');
add_action('init', 'my_modify_posts_per_page', 0);

function my_modify_posts_per_page() {
    //add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}

/* ---------------------------------------------------------------------Title */

function set_wp_title($title, $sep) {
    global $page, $paged;

    if (is_feed()) {
        return $title;
    }

    // Add the site name.
//    $title .= get_bloginfo('name');
    $title = 'ベトナムでのオフショア開発ならエボラブルアジア';

    if (is_front_page() || is_home()) {
        $title = "$title";
    } else {

        if (is_archive()) {
            if (is_post_type_archive('news')) {
                $title = "News $sep $title";
            }

            if (is_post_type_archive('recomend')) {
                $title = "参加企業の声 $sep $title";
            }

            if (is_post_type_archive('faq')) {
                $title = "FAQ $sep $title";
            }
        }

        if (is_page()) {
            if (is_page('company')) {
                $title = "About EVOLABLE ASIA $sep $title";
            }

            if (is_page('greeting')) {
                $title = "代表挨拶 $sep $title";
            }
            
            if (is_page('reason')) {
                $title = "選ばれる理由 $sep $title";
            }
            
            if (is_page('profile')) {
                $title = "代表挨拶 $sep $title";
            }
            
            if (is_page('staff')) {
                $title = "スタッフ紹介 $sep $title";
            }
            
            if (is_page('history')) {
                $title = "沿革 $sep $title";
            }
            
            if (is_page('circle')) {
                $title = "取り組み紹介 $sep $title";
            }
            
            if (is_page('recomend')) {
                $title = "参加企業の声 $sep $title";
            }
            
            if (is_page('service')) {
                $title = "サービス $sep $title";
            }
            
            if (is_page('about_labo')) {
                $title = "ラボ型オフショア開発 $sep $title";
            }
            
            if (is_page('about_bpo')) {
                $title = "BPO $sep $title";
            }
            
            if (is_page('game-secondary-plan')) {
                $title = "ゲームセカンダリープラン $sep $title";
            }
            
            if (is_page('bpo-real-estate')) {
                $title = "不動産BPO $sep $title";
            }
            
            if (is_page('vietnam')) {
                $title = "なぜベトナムか? $sep $title";
            }

            if (is_page('contact') || is_page('confirm') || is_page('thankyou')) {
                $title = "お問い合わせ $sep $title";
            }
        }
    }

    return $title;
}

add_filter('wp_title', 'set_wp_title', 10, 2);

/* ----------------------------------------------------------------------- Menu */

function remove_menus() {

    global $user_ID;

    $user = new WP_User($user_ID);
    $roles = $user->roles;
    $role = $roles[0];
    $arr_roles = array('administrator');

    if (in_array($role, $arr_roles)) {
        remove_menu_page('edit.php');                   //Posts
//        remove_menu_page('upload.php');                 //Media
        remove_menu_page('edit-comments.php');          //Comments
//        remove_menu_page('plugins.php');                //Plugins
//        remove_menu_page('users.php');                  //Users
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

//add_action('admin_menu', 'remove_menus');