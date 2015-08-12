<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja" xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo wp_title('|', true, 'right') ?></title>

        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
        <meta content="text/javascript" http-equiv="Content-Script-Type"/>
        <meta content="text/css" http-equiv="Content-Style-Type"/>
        <meta name="description" content="ベトナムでオフショア開発、ラボ型オフショア開発、BPOを行なうEVOLABLE ASIA(エボラブルアジア)の求人特設サイトです。「海外で働きたい！」と思っているあなた、EVAではグローバルな視点をもつ仲間を求めています。" />
        <meta name="keywords" content="ベトナム,オフショア開発,ラボ型オフショア開発,BPO,アウトソーシング,ホーチミン,エボラブルアジア,EVOLABLE ASIA,海外,求人,海外で働く,転職,インターン " />

        <link href="<?php echo get_template_directory_uri() ?>/img/ico/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
        <link href="<?php echo get_template_directory_uri() ?>/img/ico/favicon.ico" type="image/x-icon" rel="icon"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/import.css" type="text/css" media="all" />
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-47878088-1']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <script type="text/javascript">
            var _trackingid = 'LFT-10308-1';
            (function () {
                var lft = document.createElement('script');
                lft.type = 'text/javascript';
                lft.async = true;
                lft.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//track.list-finder.jp/js/ja/track.js';
                var snode = document.getElementsByTagName('script')[0];
                snode.parentNode.insertBefore(lft, snode);
            })();
        </script>
        <?php wp_head(); ?> 
    </head>
    <?php global $body_id; ?>
    <body id="<?php echo $body_id ?>">
        <div id="headerWrap"> 
            <!-- /header start -->
            <div id="headerInner" class="clearfix">
                <p class="floatL"> 
                    <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/logo.png" alt="EVOLABLE ASIA" width="156" height="51" class="opa" /></a>
                    <a href="<?php echo bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t03.jpg" alt="日本人スタッフ募集 Recruit" width="115" height="56" class="opa ml30"/></a> 
                </p>
                <p class="floatR"> <a target="_blank" href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t02.jpg" alt="EVOLABLE ASIA CORPORATE SITE" width="202" height="50" class="opa"/></a> <a href="<?php echo bloginfo('url') ?>/contact"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t01.jpg" alt="応募フォーム" width="199" height="50"  class="opa" /></a> </p>

                <!-- /social -->
                <!-- /SNS start -->
                <div class="socialWrap">
                    <div id="SNS">
                        <div id="SNStop">
                            <div class="iineBtn-g">
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
                            <div class="iineBtn-tw">
                                <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja">Tweet</a>
                                <script>!function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (!d.getElementById(id)) {
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "//platform.twitter.com/widgets.js";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }
                                    }(document, "script", "twitter-wjs");</script>
                            </div>
                            <div class="iineBtn-fb">
                                <!--<div class="fb-like" data-href="<?php echo bloginfo('url') ?>" data-send="true" data-layout="button_count" data-width="400" data-show-faces="true" data-font="arial" data-share="true"></div>-->
                                <div class="fb-like" data-href="<?php echo bloginfo('url') ?>" data-width="400" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                            </div>


                        </div>
                    </div>
                    <!-- /SNS end -->
                </div>
                <!-- /social end -->

            </div>
            <!-- /header end --> 
        </div>
        <div id="gNaviWrap"> 
            <!-- /globalNavi start -->
            <ul id="gNavi" class="clearfix">
                <li id="gNavi01"><a href="<?php echo bloginfo('url') ?>/message"></a></li>
                <li id="gNavi02"><a href="javascript:void();"></a>
                    <ul class="ul_mchil">
                        <li><a href="<?php echo bloginfo('url') ?>/voice/senpai"><span>▶  </span>先輩社員の声</a></li>
                        <li><a href="<?php echo bloginfo('url') ?>/voice/intern"><span>▶  </span>先輩インターンの声</a></li>
                    </ul>
                </li>
                <li id="gNavi03"><a href="<?php echo bloginfo('url') ?>/attractive"></a></li>
                <li id="gNavi04"><a href="<?php echo bloginfo('url') ?>/job"></a></li>
                <li id="gNavi05"><a href="<?php echo bloginfo('url') ?>/requirements"></a></li>
                <li id="gNavi06"><a href="<?php echo bloginfo('url') ?>/faq"></a></li>
                <li id="gNavi07"><a href="<?php echo bloginfo('url') ?>/contact"></a></li>
            </ul>
            <!-- /globalNavi end --> 
        </div>