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
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>                       
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
                    <div class="row-gap-big"></div>
                    <div class="sns">
                        <ul class="snsb clearfix">

                            <li>
                                <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>"onClick="window.open(encodeURI(decodeURI(this.href)), 'sharewindow', 'width=0, height=0, personalbar=0, toolbar=0, scrollbars=1, resizable=!'); return false;">
                                    <img src="http://eva-blog.evolable.asia/wp-content/uploads/2014/11/share.jpg" alt="share" >
                                </a>
                            </li>

                            <li>
                                <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;layout=box_count&amp;show_faces=false&amp;width=50&amp;action=like&amp;colorscheme=light&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:62px;" allowTransparency="true"></iframe>
                            </li>
                            <li>
                                <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script> 
                            </li>

                            <li><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                                <g:plusone size="tall" href="<?php the_permalink(); ?>"></g:plusone>
                            </li>
                            <li>
                                <a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>｜<?php bloginfo('name'); ?>" data-hatena-bookmark-layout="vertical" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script> 
                            </li>
                        </ul>
                    </div>
                    <div class="row-gap-big"></div>
                    <div class="call-to-action">
                        <p>ベトナムでのオフショア開発、BPOに興味を持った方、もっと詳しい内容を知りたい方はEVOLABLE ASIAのホームページをご覧ください。</p>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner342534-2.jpg" alt="EVOLABLE ASIA" class="img-responsive" width="100%"/>
                    </div>                    

                    <div class="row-gap-medium"></div>
                    <?php echo do_shortcode("[starbox]"); ?>
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
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</div>

<?php get_template_part('part-mobile-view-logo') ?>

<?php get_footer(); ?>