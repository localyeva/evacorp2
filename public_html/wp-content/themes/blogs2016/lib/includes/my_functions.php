<?php

global $active_category;

add_action('wp_head', 'blog_active_category');

function blog_active_category(){

	global $post;
        global $cat;
        global $active_category;
        
        if(empty($cat)){
            if(is_front_page()){
                return "All";
            } else{
                $categories = get_the_category($post->ID);
                $active_category = $categories[0]->cat_name;
            }
            
        } else {
            $active_category = get_cat_name($cat);
        }
        return $active_category;
            

        


}