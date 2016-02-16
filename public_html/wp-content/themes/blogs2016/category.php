<?php
/*
 * Author: KhangLe
 *
 */
get_header();
$cat_name = "All";
if ($cat != '') {
    $cat_name = get_cat_name($cat);
}
?>           
<div class="container">
    <div class="index">
        <div class="row index-content">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 index-left padding-lr">
                <h4 class="head-title">
                    <div><span><?php echo $cat_name?></span></div>
                </h4>
            </div>
            
        </div>
        <div class="row center index-content">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 index-left padding-lr">
                <div class="index-left-content">
                    <div class="row">
                     	<?php get_template_part('part-load-blogs') ?>
                    </div>                    
                </div>
                <div style="clear:both;"></div>
                <div style="text-align:center;margin: 20px auto;">
                    <?php // wpbeginner_numeric_posts_nav(); ?>  
                    <?php wp_pagenavi(); ?>  
                </div>                  
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</div>

<?php get_template_part('part-mobile-view-logo') ?>

<?php get_footer(); ?>