<?php
/*
 * Author: KhangLe
 *
 */
get_header();
?>           
<div class="container">
    <div class="index">
        <div class="row center index-content">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 index-left padding-lr">
                <div class="index-left-content">
                    <!--
                    <div class="bread-cum"><a href="<?php echo bloginfo('url') ?>">ホーム</a><span>></span><a href="<?php echo get_category_link($cat);?>">ナレッジ</a><span>></span></div>
                -->
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