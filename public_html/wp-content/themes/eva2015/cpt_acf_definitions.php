<?php

/*
 * This file is custom post type, custom taxonomy and custom fields
 * definition file.
 * 
 * Exported from CPT UI & Advanced Custom Fields
 */

/* ---------------------------------------------------------------------------- */
/* post type definitions */
/* ---------------------------------------------------------------------------- */
add_action('init', 'cptui_register_my_cpts');

function cptui_register_my_cpts() {
    $labels = array(
        "name" => "FAQ",
        "singular_name" => "FAQ",
        "menu_name" => "FAQs",
    );

    $args = array(
        "labels" => $labels,
        "description" => "FAQ",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "faq", "with_front" => true),
        "query_var" => true,
        "menu_position" => 7,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/faqx16.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("faq", $args);

    $labels = array(
        "name" => "Company General",
        "singular_name" => "Company General",
        "menu_name" => "会社全般",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "company-general", "with_front" => true),
        "query_var" => true,
        "menu_position" => 8,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/companyx16.png',
    );
    register_post_type("company-general", $args);

    $labels = array(
        "name" => "Company Profile",
        "singular_name" => "Company Profile",
        "menu_name" => "会社概要",
        "add_new_item" => "会社概要記事を書く",
        "edit_item" => "会社概要記事を編集",
        "new_item" => "新しい会社概要記事",
        "view_item" => "会社概要記事を見る",
        "search_items" => "会社概要記事を探す",
        "not_found" => "会社概要記事はありません",
        "not_found_in_trash" => "ゴミ箱に会社概要記事はありません",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "company-profile", "with_front" => true),
        "query_var" => true,
        "menu_position" => 9,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/company-profilex16.png',
    );
    register_post_type("company-profile", $args);

    $labels = array(
        "name" => "Company Staff",
        "singular_name" => "Company Staff",
        "menu_name" => "スタッフ紹介",
        "add_new" => "スタッフ紹介を追加",
        "add_new_item" => "スタッフ紹介記事を書く",
        "edit_item" => "スタッフ紹介記事を編集",
        "new_item" => "新しいスタッフ紹介記事",
        "view_item" => "スタッフ紹介記事を見る",
        "search_items" => "スタッフ紹介記事を探す",
        "not_found" => "スタッフ紹介記事はありません",
        "not_found_in_trash" => "ゴミ箱にスタッフ紹介記事はありません",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "company-staff", "with_front" => true),
        "query_var" => true,
        "menu_position" => 10,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/company-staffx16.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("company-staff", $args);

// End of cptui_register_my_cpts()
}

/* ---------------------------------------------------------------------------- */
/* taxonomy definitions */
/* ---------------------------------------------------------------------------- */

add_action('init', 'cptui_register_my_taxes');

function cptui_register_my_taxes() {

    $labels = array(
        "name" => "FAQ Category",
        "label" => "FAQ Category",
    );

    $args = array(
        "labels" => $labels,
        "hierarchical" => true,
//        'has_archive' => true,
        "label" => "FAQ Category",
        "show_ui" => true,
        "query_var" => true,
        "rewrite" => array('slug' => 'faqcat', 'with_front' => true),
        "show_admin_column" => false,
    );
    register_taxonomy("faqcat", array("faq"), $args);

    $labels = array(
        "name" => "staffcat",
        "label" => "Staff Category",
        "menu_name" => "カテゴリー",
    );

    $args = array(
        "labels" => $labels,
        "hierarchical" => true,
        "label" => "Staff Category",
        "show_ui" => true,
        "query_var" => true,
        "rewrite" => array('slug' => 'staffcat', 'with_front' => true),
        "show_admin_column" => false,
    );
    register_taxonomy("staffcat", array("company-staff"), $args);

// End cptui_register_my_taxes
}

/* ---------------------------------------------------------------------------- */
/* custom fields definitions */
/* ---------------------------------------------------------------------------- */

if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_faq',
        'title' => 'FAQ',
        'fields' => array(
            array(
                'key' => 'field_55b8829ab0834',
                'label' => 'Question',
                'name' => 'question',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55b8833bb0835',
                'label' => 'Answer',
                'name' => 'answer',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'faq',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'the_content',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_company-general',
        'title' => 'Company General',
        'fields' => array(
            array(
                'key' => 'field_55b9d2928b020',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55b9d2b18b021',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55b9d34c8b022',
                'label' => 'Link',
                'name' => 'link',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'company-general',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_company-profile',
        'title' => 'Company Profile',
        'fields' => array(
            array(
                'key' => 'field_55c0283510150',
                'label' => '社名',
                'name' => 'name',
                'type' => 'text',
                'instructions' => '社名をいれてください',
                'required' => 1,
                'default_value' => 'EVOLABLE ASIA Co., Ltd',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c02a5d361f8',
                'label' => '所在地',
                'name' => 'location',
                'type' => 'textarea',
                'instructions' => '所在地をいれてください',
                'required' => 1,
                'default_value' => 'ホーチミン本社：4F Saigon Finance Center, 9 Dinh Tien Hoang Street, District 1, HCMC
	ホーチミン支店：14F GOLDEN TOWER, 6 Nguyen Thi Minh Khai Street,District1, HCMC
	ハ　ノ　イ支店：9F Viet A Building, Duy Tan Street, Cau Giay District, Ha Noi',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02a83361f9',
                'label' => '電話番号',
                'name' => 'phone_number',
                'type' => 'textarea',
                'instructions' => '電話番号をいれてください',
                'required' => 1,
                'default_value' => 'ホーチミン本社：+84-8(39111489)
	ハ　ノ　イ支店：+84-4(37957577), +84-4(37957578), +84-4(37957579)',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02aa6361fa',
                'label' => 'FAX',
                'name' => 'fax',
                'type' => 'textarea',
                'instructions' => 'FAX番号をいれてください',
                'required' => 1,
                'default_value' => 'ホーチミン本社：+84-8(39118767)
	ハ　ノ　イ支店：+84-4(37957580)',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02ad2361fb',
                'label' => '役員',
                'name' => 'officer',
                'type' => 'textarea',
                'instructions' => '役員をいれてください',
                'required' => 1,
                'default_value' => '代表取締役社長　薛 悠司',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02ba4361fc',
                'label' => '設立',
                'name' => 'establishment',
                'type' => 'text',
                'instructions' => '設立年月日をいれてください',
                'required' => 1,
                'default_value' => '2012年3月15日',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c02be63b6ca',
                'label' => '資本金',
                'name' => 'Capital',
                'type' => 'text',
                'instructions' => '資本金をいれてください',
                'required' => 1,
                'default_value' => '20万米ドル',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c02c063b6cb',
                'label' => '事業内容',
                'name' => 'desc',
                'type' => 'text',
                'instructions' => '事業内容をいれてください',
                'required' => 1,
                'default_value' => 'ITオフショア開発事業・BPO（ビジネスプロセスアウトソーシング）事業',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c02c303b6cc',
                'label' => 'ライセンスNo.',
                'name' => 'licence',
                'type' => 'textarea',
                'instructions' => 'ライセンスナンバーをいれてください',
                'required' => 1,
                'default_value' => 412023000388,
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02f0478ff5',
                'label' => '従業員数',
                'name' => 'staff',
                'type' => 'text',
                'instructions' => '従業員数をいれてください',
                'required' => 1,
                'default_value' => '496名（ホーチミン450名+ハノイ46名　※2015年05月04日現在）',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c02f3278ff6',
                'label' => '主要取引銀行',
                'name' => 'bank',
                'type' => 'textarea',
                'instructions' => '主要取引銀行を入力してください',
                'required' => 1,
                'default_value' => 'みずほ銀行
	Bangkok bank',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c02f5778ff7',
                'label' => '経営理念',
                'name' => 'principles',
                'type' => 'text',
                'instructions' => '経営理念をいれてください',
                'required' => 1,
                'default_value' => 'アジアを代表する開発・運用チームをつくる',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'company-profile',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_company-staff',
        'title' => 'Company Staff',
        'fields' => array(
            array(
                'key' => 'field_55c042da61d5b',
                'label' => 'スタッフ役職',
                'name' => 'staff_role',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c0539061d5c',
                'label' => 'スタッフ画像',
                'name' => 'image',
                'type' => 'image',
                'instructions' => 'スタッフ画像をアップロードしてください',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55c0541861d5d',
                'label' => 'スタッフ画像 02',
                'name' => 'image02',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55c0543161d5e',
                'label' => '社員番号',
                'name' => 'staff_number',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'company-staff',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'excerpt',
                1 => 'custom_fields',
                2 => 'discussion',
                3 => 'comments',
                4 => 'revisions',
                5 => 'slug',
                6 => 'author',
                7 => 'format',
                8 => 'featured_image',
                9 => 'categories',
                10 => 'tags',
                11 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
}
