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
    <?php get_template_part('part-mobile-view-logo') ?>
    <div class="row-gap-big clearfix"></div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display:inline-table;margin-bottom:20px;" >
                        <div class="face" style="width:100%px; height: 150px; background: none;'">
                            <div id="fb-root"></div>
                                <script>(function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id))
                                        return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=124639054226284";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-page" data-href="https://www.facebook.com/evolable.asia.eva" data-width="444" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/evolable.asia.eva"><a href="https://www.facebook.com/evolable.asia.eva">EVOLABLE Asia</a></blockquote></div></div>
                        </div>
                    </div>   
</div>

<?php get_footer(); ?>