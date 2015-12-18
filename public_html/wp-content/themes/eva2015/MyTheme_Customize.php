<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function theme_customize_register($wp_customize) {

    /* HOME PAGE SECTION */
    $wp_customize->add_section('home', array(
        'title' => __('HOME PAGE'),
        'priority' => 20,
    ));

    $wp_customize->add_setting('top_image', array(
        'default' => '',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'top_image_c', array(
        'label' => __('Top Image'),
        'section' => 'home',
        'settings' => 'top_image',
        'priority' => 1,
    )));
    
    $wp_customize->add_setting('slide_image', array(
        'default' => '',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slide_image_c', array(
        'label' => __('Slide Image'),
        'section' => 'home',
        'settings' => 'slide_image',
        'priority' => 1,
    )));
    
    $wp_customize->add_setting('slide_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('slide_text_c', array(
        'label' => __('Slide Text'),
        'section' => 'home',
        'settings' => 'slide_text',
        'priority' => 1,
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('why_div', array(
        'default' => '',
    ));
    $wp_customize->add_control('why_div_c', array(
        'label' => __('Why Show/Hide'),
        'section' => 'home',
        'settings' => 'why_div',
        'priority' => 1,
        'type' => 'checkbox',
    ));
    
    $wp_customize->add_setting('intro_text_1', array(
        'default' => '',
    ));
    $wp_customize->add_control('intro_text_1_c', array(
        'label' => __('Intro Text 1'),
        'section' => 'home',
        'settings' => 'intro_text_1',
        'priority' => 1,
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('services_div', array(
        'default' => '',
    ));
    $wp_customize->add_control('services_div_c', array(
        'label' => __('Servives Show/Hide'),
        'section' => 'home',
        'settings' => 'services_div',
        'priority' => 1,
        'type' => 'checkbox',
    ));
    
    $wp_customize->add_setting('partner_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('partner_text_c', array(
        'label' => __('Partner text'),
        'section' => 'home',
        'settings' => 'partner_text',
        'priority' => 1,
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('partner_div', array(
        'default' => '',
    ));
    $wp_customize->add_control('partner_div_c', array(
        'label' => __('Partner Show/Hide'),
        'section' => 'home',
        'settings' => 'partner_div',
        'priority' => 1,
        'type' => 'checkbox',
    ));
    
    $wp_customize->add_setting('about_div', array(
        'default' => '',
    ));
    $wp_customize->add_control('about_div_c', array(
        'label' => __('About Show/Hide'),
        'section' => 'home',
        'settings' => 'about_div',
        'priority' => 1,
        'type' => 'checkbox',
    ));
    
    $wp_customize->add_setting('about_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('about_text_c', array(
        'label' => __('About Text 1'),
        'section' => 'home',
        'settings' => 'about_text',
        'priority' => 1,
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('new_div', array(
        'default' => '',
    ));
    $wp_customize->add_control('new_div_c', array(
        'label' => __('New Show/Hide'),
        'section' => 'home',
        'settings' => 'new_div',
        'priority' => 1,
        'type' => 'checkbox',
    ));
    
    $wp_customize->add_setting('new_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('new_text_c', array(
        'label' => __('New Text'),
        'section' => 'home',
        'settings' => 'new_text',
        'priority' => 1,
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('blog_div', array(
        'default' => '',
    ));
    $wp_customize->add_control('blog_div_c', array(
        'label' => __('Blog Show/Hide'),
        'section' => 'home',
        'settings' => 'blog_div',
        'priority' => 1,
        'type' => 'checkbox',
    ));
    
    $wp_customize->add_setting('blog_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('blog_text_c', array(
        'label' => __('Blog Text'),
        'section' => 'home',
        'settings' => 'blog_text',
        'priority' => 1,
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('article_div', array(
        'default' => '',
    ));
    $wp_customize->add_control('article_div_c', array(
        'label' => __('Article Show/Hide'),
        'section' => 'home',
        'settings' => 'article_div',
        'priority' => 1,
        'type' => 'checkbox',
    ));
    
    /* ADD SECTION */
    /* COMPANY */
    $wp_customize->add_section('company', array(
        'title' => __('COMPANY'),
        'priority' => 20,
    ));
    
    /* CONTACT */
    $wp_customize->add_section('contact', array(
        'title' => __('CONTACT'),
        'priority' => 21,
    ));
    
    /* GREETING */
    $wp_customize->add_section('greeting', array(
        'title' => __('GREETING'),
        'priority' => 22,
    ));
    

    /* ADD SETTING & CONTROL */
    /* CONTACT */
    $contact_text = array();
    $contact_text[] = array(
        'slug' => 'contact_text_1',
        'default' => '',
        'label' => __('Top Line 1'),
    );
    $contact_text[] = array(
        'slug' => 'contact_text_2',
        'default' => '',
        'label' => __('Top Line 2'),
    );
    foreach($contact_text as $text){
        $wp_customize->add_setting($text['slug'], array(
            'default' => $text['default'],
            'capability' => 'edit_theme_options',
        ));
        $wp_customize->add_control($text['slug'] . '_c', array(
            'label' => $text['label'],
            'section' => 'contact',
            'settings' => $text['slug'],
            'type' => 'text',
            'priority' => 1,
        ));
    }
    
    $wp_customize->add_setting('contact_top_pc_bg', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_top_pc_bg_c', array(
        'label' => __('[PC] Top Image Background'),
        'section' => 'contact',
        'settings' => 'contact_top_pc_bg',
        'priority' => 1,
    )));
    
    /* GREETING */
    $wp_customize->add_setting('greeting_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'greeting_image_c', array(
        'label' => __('Greeting Image'),
        'section' => 'greeting',
        'settings' => 'greeting_image',
        'priority' => 1,
    )));
    
    /* COMPANY */
    $wp_customize->add_setting('company_video', array(
        'default' => '',        
    ));
    $wp_customize->add_control('company_video_c', array(
        'label' => __('Embed Video'),
        'section' => 'company',
        'settings' => 'company_video',
        'priority' => 1,
        'type' => 'textarea',
    ));
    
}

add_action('customize_register', 'theme_customize_register');


//css generate
function eva2015_generate_css() {
    ?>
    <style>
    </style>
    <?php
}

add_action('wp_head', 'eva2015_generate_css');

/* COMPANY */
function get_company_video(){
    return get_theme_mod('company_video');
}


/* CONTACT */

function get_contact_text_1(){
    return get_theme_mod('contact_text_1');
}

function get_contact_text_2(){
    return get_theme_mod('contact_text_2');
}

function get_contact_top_pc_bg() {
    if (esc_url(get_theme_mod('contact_top_pc_bg')) != '') {
        return esc_url(get_theme_mod('contact_top_pc_bg'));
    } else {
        return get_template_directory_uri() . '/img/keyvisual_contact_pc.jpg';
    }
}

/* GREETING */

function get_greeting_image(){
    return esc_url(get_theme_mod('greeting_image'));
}

/* HOME PAGE SECTION */
function get_top_image() {
    return get_theme_mod('top_image');
}

function get_slide_image() {
    if (esc_url(get_theme_mod('slide_image')) != '') {
        return esc_url(get_theme_mod('slide_image'));
    } else {
        return get_template_directory_uri() . '/img/10.png';
    }
}

function get_slide_text() {
    return get_theme_mod('slide_text');
}

function get_intro_text_1() {
    return get_theme_mod('intro_text_1');
}

function get_why_div() {
    return get_theme_mod('why_div');
}

function get_services_div() {
    return get_theme_mod('services_div');
}

function get_partner_div() {
    return get_theme_mod('partner_div');
}

function get_about_div() {
    return get_theme_mod('about_div');
}

function get_partner_text() {
    return get_theme_mod('partner_text');
}

function get_about_text() {
    return get_theme_mod('about_text');
}

function get_new_div() {
    return get_theme_mod('new_div');
}

function get_new_text() {
    return get_theme_mod('new_text');
}

function get_blog_div() {
    return get_theme_mod('blog_div');
}

function get_blog_text() {
    return get_theme_mod('blog_text');
}

function get_article_div() {
    return get_theme_mod('article_div');
}