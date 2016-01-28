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
        <div class="row center index-content">

            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 index-left">
                <div class="index-left-content left clearfix">
                    <?php
                        $obj_category = get_the_category($post->ID);
                        $id_category_obj = $obj_category[0]->term_id;

                    ?>
                    <div class="bread-cum"><a href="<?php echo bloginfo('url') ?>">ホーム</a><span>></span><a href="<?php echo get_category_link($id_category_obj);?>">ナレッジ</a><span>></span></div>
                    <h3><?php the_title() ?></h3>
                    <div class="post_info">
                        <span class="glyphicon glyphicon-calendar"></span><span>2015/05/28</span><span class="glyphicon glyphicon-refresh"></span><span>2015/05/28</span>
                        <p>
                            <span class="glyphicon glyphicon glyphicon-tags"></span><span>-</span><a href="#">お客様の声</a>
                        </p>
                    </div>
                    <div class="content-post">
                        <p>
                            <?php echo $post->post_content ?>  
                        </p>                        
                    </div>                                     
                           
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
                    <div class="call-to-action">
                        <p>ベトナムでのオフショア開発、BPOに興味を持った方、もっと詳しい内容を知りたい方はEVOLABLE ASIAのホームページをご覧ください。</p>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner342534-2.jpg" alt="EVOLABLE ASIA" class="img-responsive" width="100%"/>
                    </div>
                    <div class="row-gap-medium"></div>
                    <ul id = "myTab" class = "nav nav-tabs">
                        <li class = "active">
                            <a href = "#home" data-toggle = "tab">この記事を書いた人</a>
                        </li>
                        <li>
                            <a href = "#ios" data-toggle = "tab">最近の記事</a>
                        </li>
                    </ul>

                    <div id = "myTabContent" class = "tab-content">
                        <div class = "tab-pane fade in active" id = "home">
                            <div class="row abh-content">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 center">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo924.png" alt="EVOLABLE ASIA" width="80px"/>                                            
                                </div>
                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 left">
                                    <h5>EVAブログ編集部</h5>
                                    <span>blog Editor at <a href="#">EVOLABLE ASIA</a></span>
                                    <p>エボラブルアジアのニュース/ビジネス/ベトナム生活情報などのお役立ち記事を配信しています。</p>
                                </div>                                        
                            </div>
                       </div>
                       
                       <div class = "tab-pane fade" id = "ios">
                            <div class="row abh-content">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 center">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo924.png" alt="EVOLABLE ASIA" width="80px"/>                                            
                                </div>
                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 left">
                                    <h5>Latest posts by EVAブログ編集部 <span>(<a href="#">see all</a>)</span></h5>
                                    <span><a href="#">ベトナム駐在者の方からよく耳にするオフショア開発における２つの悩み事</a> - November 23, 2015</span><br/>
                                    <span><a href="#">JLIC（エボラブルアジア日本語ITカレッジ ）学生へインタビュー </a> - November 16, 2015</span><br/>
                                    <span><a href="#">2015年社員旅行リポート</a> - November 9, 2015</span>
                                </div>                                        
                            </div>
                       </div>
                    </div>    
                    <div class="row-gap-medium"></div>
                    <div class="related-post">
                        <h4>関連記事</h4>
                        <div class="related-post-content">
                            
                            <?php
                            $categories = get_the_category($post->ID);
                            $args = array(
                                'posts_per_page'   => 5,
                                'offset'           => 0,
                                'category'         => $categories[0]->cat_ID,
                                'orderby'          => 'date',
                                'order'            => 'DESC',
                                'include'          => '',
                                'exclude'          => $post->ID,
                                'meta_key'         => '',
                                'meta_value'       => '',
                                'post_type'        => 'post',
                                'post_mime_type'   => '',
                                'post_parent'      => '',
                                'author'       => '',
                                'post_status'      => 'publish',
                                'suppress_filters' => true 
                            );
                            $posts = get_posts( $args );   
                            foreach ($posts as $post) { 
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>
                            <div class="related-post-item">
                                <img src="<?php echo !empty($url) ? $url : $default_img; ?>" width="100px"/>                                            
                                <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>  
                    <div style="clear:both;"></div> 
                    <div class="face" style="width:100%; height: 150px; background: none;'">
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
                        <div class="fb-page" data-href="https://www.facebook.com/evolable.asia.eva" data-width="444" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/evolable.asia.eva"><a href="https://www.facebook.com/evolable.asia.eva">EVOLABLE Asia</a></blockquote></div></div>
                    </div>                                                 
                </div>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</div>

<?php get_template_part('part-mobile-view-logo') ?>

<?php get_footer(); ?>