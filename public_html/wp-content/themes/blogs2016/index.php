<?php
/*
 * Author: KhangLe
 * Template Name: Index
 *
 */
get_header();
//$cat = @$wp_query->queried_object->cat_ID;

//echo $wp_query[0]->cat_ID.'text';
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
    <?php get_template_part('part-mobile-view-logo') ?>
    <div class="row-gap-big clearfix"></div>

    <div class="face">
        <iframe src="//www.facebook.com/plugins/likebox.php?  href=https%3A%2F%2Fwww.facebook.com%2Fevolable.asia.eva%3Ffref%3Dts&amp;width=500px&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=445550542212549" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:290px;" allowTransparency="true"></iframe>  <//ソーシャルボックス読み込み ?>
    </div>     
</div>

<?php get_footer(); ?>