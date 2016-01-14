<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="EVOLABLE ASIA(エボラブルアジア)は、開発コストや管理業務の
              コスト高に悩んでいる企業の課題を解決いたします。400人以上のベトナム人スタッフと海外でのオフショア開発、BPOノウハウを基に、ハイクオリティながらも安価なコストを実現。" />
        <meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />

        <title><?php echo wp_title('|', true, 'right') ?></title>

        <!-- Bootstrap -->
        <!--<link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="<?php echo get_template_directory_uri() ?>/css/jquery.sidr.dark.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/animate.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- FACE BOOK start -->
        <meta property="og:title" content="オフショア ベトナム｜ベトナムでのBPO、オフショアならエボラブルアジア" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://evolable.asia/" />
        <meta property="og:image" content="" />
        <!-- //FACE BOOK end -->

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

        <script type="text/javascript">
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=142180302543361";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <script type="text/javascript">
            window._pt_lt = new Date().getTime();
            window._pt_sp_2 = [];
            _pt_sp_2.push('setAccount,3c6dc9b3');
            var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            (function () {
                var atag = document.createElement('script');
                atag.type = 'text/javascript';
                atag.async = true;
                atag.src = _protocol + 'js.ptengine.jp/pta.js';
                var stag = document.createElement('script');
                stag.type = 'text/javascript';
                stag.async = true;
                stag.src = _protocol + 'js.ptengine.jp/pts.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(atag, s);
                s.parentNode.insertBefore(stag, s);
            })();
        </script>

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="fb-root"></div>
        <div id="navigation">
            <nav class="navbar navbar-default nav-desktop">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 text-center navbar-collapse collapse visible-md">

                            <div class="pull-right" style="position: relative;">
                                <ul class="top-recruit-lst">
                                    <li>Recruit for</li>
                                    <li><a href="<?php echo get_site_url(2) ?>">Japanese</a></li>
                                    <li><a href="http://jobs.evolable.asia">Vietnamese</a></li>
                                </ul>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="left-width-1"><a href="<?php echo bloginfo('url') ?>">Home</a></li>
                                <li class="left-width-2"><a href="<?php echo bloginfo('url') ?>/company/">About EVOLABLE ASIA</a></li>
                                <li class="left-width-3"><a href="<?php echo bloginfo('url') ?>/company/reason">選ばれる理由</a></li>
                                <li class="center-width">
                                    <a href="<?php echo bloginfo('url') ?>">
                                        <img class="img-responsive center-block" src="<?php echo get_top_image() ?>">
                                    </a>
                                </li>
                                <li class="right-width-1"><a href="<?php echo bloginfo('url') ?>/service">サービス</a></li>
                                <li class="right-width-2"><a href="<?php echo bloginfo('url') ?>/news">ニュース</a></li>
                                <li class="right-width-3">
                                    <a href="<?php echo bloginfo('url') ?>/contact/">お問い合わせ</a>
                                </li>
                            </ul>
                                           
                    </div>
                </div>
                </div>
            </nav>
            
            <nav class="navbar navbar-default nav-sp">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xs-12 visible-xs text-center no-padding-lr">
                            <div class="navbar-header mobie-brand">
                                <a class="logo-mobie" href="<?php echo bloginfo('url') ?>">
                                    <img alt="Brand" src="<?php echo get_template_directory_uri() ?>/img/29.png">
                                </a>
                                <a id="responsive-menu-button" class="btn btn-toggle navbar-btn pull-right" href="#">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="fa fa-bars fa-lg"></span>
                                </a>
                            </div>
                            <div class="row mobile-menu" id="sidr">
                                <div class="col-xs-12">
                                    <ul class="nav navbar-nav">
                                        <li><a href="<?php echo bloginfo('url') ?>">Home</a></li>
                                        <li><a href="<?php echo bloginfo('url') ?>/company/">About EvolableAsia</a></li>
                                        <li><a href="<?php echo bloginfo('url') ?>/company/reason">選ばれる理由</a></li>
                                        <li><a href="<?php echo bloginfo('url') ?>/service">サービス</a></li>
                                        <li><a href="<?php echo bloginfo('url') ?>/news">ニュース</a></li>
                                        <li>Recruit for</li>
                                        <li><a href="<?php echo get_site_url(2) ?>">Japanese</a></li>
                                        <li><a href="http://jobs.evolable.asia">Vietnamese</a></li>
                                        <li><a href="<?php echo bloginfo('url') ?>/contact/">お問い合わせ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>                
        