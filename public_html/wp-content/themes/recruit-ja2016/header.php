<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja" xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="ベトナムでオフショア開発、ラボ型オフショア開発、BPOを行なうEVOLABLE ASIA(エボラブルアジア)の求人特設サイトです。「海外で働きたい！」と思っているあなた、EVAではグローバルな視点をもつ仲間を求めています。" />
        <meta name="keywords" content="ベトナム,オフショア開発,ラボ型オフショア開発,BPO,アウトソーシング,ホーチミン,エボラブルアジア,EVOLABLE ASIA,海外,求人,海外で働く,転職,インターン " />

        <title><?php echo wp_title('|', true, 'right') ?></title>

        <!-- Bootstrap -->
        <!--<link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">-->
        <link href="<?php echo get_template_directory_uri() ?>/img/ico/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
        <link href="<?php echo get_template_directory_uri() ?>/img/ico/favicon.ico" type="image/x-icon" rel="icon"/>        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="<?php echo get_template_directory_uri() ?>/css/jquery.sidr.dark.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css" type="text/css" media="all" />
        <link href="<?php echo get_template_directory_uri() ?>/css/animate.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->   
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
        <div class="container">
            <div class="row head-cruit">
                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 center">
                    <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/logo.png" alt="EVOLABLE ASIA" width="156" height="51" /></a>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 center head-cruit-item">
                    <a href="<?php echo bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t03.jpg" alt="日本人スタッフ募集 Recruit" width="115" height="56" /></a>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 center head-cruit-item">
                    <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t02.jpg" alt="EVOLABLE ASIA CORPORATE SITE" width="202" height="50" /></a>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 center head-cruit-item">
                    <a href="<?php echo bloginfo('url') ?>/contact"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t01.jpg" alt="応募フォーム" width="199" height="50" /></a>
                </div>                                                                
            </div>


            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo bloginfo('url') ?>/message"><span class="text-above-line">代表の想い</span><br/><span class="text-below-line">message</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="text-above-line">先輩の声</span><br/><span class="text-below-line">voice</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo bloginfo('url') ?>/voice/senpai">先輩社員の声</a></li>
                                <li><a href="<?php echo bloginfo('url') ?>/voice/intern">先輩インターンの声</a></li>
                            </ul>
                        </li>                        
                        <li><a href="<?php echo bloginfo('url') ?>/attractive"><span class="text-above-line">EVAで働く魅力</span><br/><span class="text-below-line">attractive</span></a></li>                                                
                        <li><a href="<?php echo bloginfo('url') ?>/job"><span class="text-above-line">仕事内容</span><br/><span class="text-below-line">job description</span></a></li>
                        <li><a href="<?php echo bloginfo('url') ?>/requirements"><span class="text-above-line">募集要項</span><br/><span class="text-below-line">requiremants</span></a></li>
                        <li><a href="<?php echo bloginfo('url') ?>/faq"><span class="text-above-line">よくある質問</span><br/><span class="text-below-line">faq</span></a></li>                                                
                        <li><a href="<?php echo bloginfo('url') ?>/contact"><span class="text-above-line">応募フォーム</span><br/><span class="text-below-line">contact</span></a></li>                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav> 

            <div class="row center social-cruit">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 social-cruit-content">
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
            </div>
        </div>