<?php
/*
 * Author: KhangLe
 * Template Name: Index
 *
 */
get_header();
//$cat = @$wp_query->queried_object->cat_ID;

//echo $wp_query[0]->cat_ID.'text';
?>           
<div class="container">
    <div class="index">
        <div class="row center index-content">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 index-left">
                <div class="index-left-content">
                    <div class="row">
                        <?php get_template_part('part-load-blogs') ?>
                    </div>                    
                </div>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</div>

<?php get_template_part('part-mobile-view-logo') ?>

<?php get_footer(); ?>