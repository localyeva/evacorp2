<?php
/*
 * Author: KhangLe
 *
 */
get_header();
$default_img = get_template_directory_uri() . '/assets/img/default-img.png';
?>           
<div class="container">
    <div class="detail">
        <div class="row index-content">
            <div class="col-xs-12 col-md-12">
                <?php
                $obj_category = get_the_category($post->ID);
                $id_category_obj = $obj_category[0]->term_id;
                $categories = get_the_category($post->ID);
                $cat_name = "";
                if ($categories[0]->name == 'Uncategorized'){
                    $cat_name = "";
                }else{
                    $cat_name = $categories[0]->name;
                }
                ?>
                <div class="bread-cum"><a href="<?php echo bloginfo('url') ?>">ホーム</a>
                    <?php if ($cat_name == ""): ?>  
                        <span>></span>
                        <a><?php the_title() ?></a>
                    <?php else:?>
                        <span>></span>
                        <a href="<?php echo get_category_link($id_category_obj); ?>"><?php echo $cat_name ?></a>
                        <span>></span>
                        <a><?php the_title() ?></a>
                    <?php endif; ?>
                </div>                
            </div>
        </div>

        <div class="row center index-content">

            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 index-left">
                <div class="index-left-content left clearfix">                    
                    <h3><?php the_title() ?></h3>
                    <div class="post_info">
                        <span class="glyphicon glyphicon-calendar"></span>
                        <span>
                            <?php 
                            $date=date_create($post->post_date);
                            echo date_format($date,"Y/m/d");
                            ?>
                        </span>
                        <?php if($cat_name != ""):?>
                        <p>
                            <span class="glyphicon glyphicon glyphicon-tags"></span><span><?php echo $cat_name?></span>
                        </p>
                        <?php endif?>
                    </div>
                    <div class="content-post">
                        <p>
                            <?php echo $post->post_content ?>  
                        </p>                        
                    </div>                                     

                    <!--
                    <div class="social">
                        
                        <div class="iineBtn-fb">
                            <g:plusone size="medium"></g:plusone>
                            <script type="text/javascript">
                                window.___gcfg = {lang: 'ja'};
                                (function () {
                                    var po = document.createElement('script');
                                    po.type = 'text/javascript';
                                    po.async = true;
                                    po.src = 'https://apis.google.com/js/plusone.js';
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </div>
                        
                        <div class="iineBtn-fb">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja">Tweet</a>
                            <script>!function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "//platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, "script", "twitter-wjs");
                            </script>
                        </div>
                        
                        <div class="iineBtn-fb">
                            <div class="fb-like" data-href="<?php echo bloginfo('url') ?>"  data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                        </div>
                        
                    </div>
                    -->

                    <div class="row-gap-medium"></div>

                    <div class="related-post">
                        <h4>関連記事</h4>
                        <div class="related-post-content">

                            <?php
                            $args = array(
                                'posts_per_page' => 5,
                                'offset' => 0,
                                'category' => $categories[0]->cat_ID,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'include' => '',
                                'exclude' => $post->ID,
                                'meta_key' => '',
                                'meta_value' => '',
                                'post_type' => 'post',
                                'post_mime_type' => '',
                                'post_parent' => '',
                                'author' => '',
                                'post_status' => 'publish',
                                'suppress_filters' => true
                            );
                            $posts = get_posts($args);
                            foreach ($posts as $post) {
                                $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                                ?>
                                <div class="related-post-item">
                                    <img src="<?php echo!empty($url) ? $url : $default_img; ?>" width="100px"/>                                            
                                    <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>  

                    <div class="row-gap-medium clearfix"></div>

                    <div class="face">
                        <iframe src="//www.facebook.com/plugins/likebox.php?  href=https%3A%2F%2Fwww.facebook.com%2Fevolable.asia.eva%3Ffref%3Dts&amp;width=500px&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=445550542212549" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:290px;" allowTransparency="true"></iframe>  <//ソーシャルボックス読み込み ?>
                    </div>                                                 
                </div>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</div>

<?php get_template_part('part-mobile-view-logo') ?>

<?php get_footer(); ?>