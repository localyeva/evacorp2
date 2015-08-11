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
        "name" => "Requirement",
        "singular_name" => "Requirement",
        "menu_name" => "Requirements",
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
        "rewrite" => array("slug" => "requirements", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h1.png',
        "supports" => array("title", "editor", "excerpt"),
    );
    register_post_type("requirement", $args);

    $labels = array(
        "name" => "FAQ Recruit",
        "singular_name" => "FAQ Recruit",
        "menu_name" => "FAQ JA Recruit",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "faqrecruit", "with_front" => true),
        "query_var" => true,
        "menu_position" => 27,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h2.png',
        "supports" => array("title", "editor", "excerpt"),
    );
    register_post_type("faqrecruit", $args);

// End of cptui_register_my_cpts()
}

/* ---------------------------------------------------------------------------- */
/* taxonomy definitions */
/* ---------------------------------------------------------------------------- */

add_action('init', 'cptui_register_my_taxes');

function cptui_register_my_taxes() {

    $labels = array(
        "name" => "faqcat2",
        "label" => "FAQ Cat 2",
        "menu_name" => "FAQ Category",
    );

    $args = array(
        "labels" => $labels,
        "hierarchical" => true,
        "label" => "FAQ Cat 2",
        "show_ui" => true,
        "query_var" => true,
        "rewrite" => array('slug' => 'faqcat2', 'with_front' => true),
        "show_admin_column" => false,
    );
    register_taxonomy("faqcat2", array("faqrecruit"), $args);

// End cptui_register_my_taxes
}

/* ---------------------------------------------------------------------------- */
/* custom fields definitions */
/* ---------------------------------------------------------------------------- */
if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_requirement',
        'title' => 'Requirement',
        'fields' => array(
            array(
                'key' => 'field_55c466937d746',
                'label' => '雇用形態',
                'name' => 'employment_status',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c465de7d740',
                'label' => '説明',
                'name' => 'value01',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c466027d741',
                'label' => '勤務地',
                'name' => 'value_n01',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c466197d742',
                'label' => '給与',
                'name' => 'value2',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_55c4662b7d743',
                'label' => '仕事内容',
                'name' => 'value03',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c4664f7d744',
                'label' => '推奨スキル',
                'name' => 'value04',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55c4666f7d745',
                'label' => '福利厚生',
                'name' => 'value05',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'requirement',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));
}
