<?php
/*
 * Author: KhaCao
 * Template Name: Index
 * 
 */
?>
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
    </head>
    <body id="index">
        <div class="container">
            <div class="row head-cruit">
                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 center">
                    <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/logo.png" alt="EVOLABLE ASIA" width="156" height="51" /></a>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 center head-cruit-item">
                    <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t03.jpg" alt="日本人スタッフ募集 Recruit" width="115" height="56" /></a>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 center head-cruit-item">
                    <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t02.jpg" alt="EVOLABLE ASIA CORPORATE SITE" width="202" height="50" /></a>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 center head-cruit-item">
                    <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t01.jpg" alt="応募フォーム" width="199" height="50" /></a>
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
                        <li><a href="#"><span class="text-above-line">代表の想い</span><br/><span class="text-below-line">message</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="text-above-line">先輩の声</span><br/><span class="text-below-line">voice</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">先輩社員の声</a></li>
                                <li><a href="#">先輩インターンの声</a></li>
                            </ul>
                        </li>                        
                        <li><a href="#"><span class="text-above-line">EVAで働く魅力</span><br/><span class="text-below-line">attractive</span></a></li>                                                
                        <li><a href="#"><span class="text-above-line">仕事内容</span><br/><span class="text-below-line">job description</span></a></li>
                        <li><a href="#"><span class="text-above-line">募集要項</span><br/><span class="text-below-line">requiremants</span></a></li>
                        <li><a href="#"><span class="text-above-line">よくある質問</span><br/><span class="text-below-line">faq</span></a></li>                                                
                        <li><a href="#"><span class="text-above-line">代表の想い</span><br/><span class="text-below-line">contact</span></a></li>                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav> 

            <div class="row center social-cruit">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 social-cruit-content">
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
                    <!--<div class="fb-like" data-href="<?php echo bloginfo('url') ?>" data-send="true" data-layout="button_count" data-width="400" data-show-faces="true" data-font="arial" data-share="true"></div>-->
                    <div class="fb-like" data-href="<?php echo bloginfo('url') ?>" data-width="400" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                </div>
            </div>

            <div class="row title-cruit">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">
                    <h1>ベトナムが</h1>
                    <h1>あなたの<span>成長を加速</span>させる！</h1>
                </div>
            </div>

            <div class="row category-cruit">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center category-cruit-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img_t01.png" alt="代表の想い" width="287" height="289">
                        <p>代表の想い</p>
                        <span>message</span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center category-cruit-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img_t02.png" alt="毎日が感動でいっぱいです！岩淵 由香理" width="287" height="289">
                        <p>先輩社員の声</p>
                        <span>voice</span>                     
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center category-cruit-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img_t03.png" alt="EVAで働く魅力" width="287" height="289">
                        <p>EVAで働く魅力</p>
                        <span>attractive</span>                 
                    </a>
                </div>       
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center category-cruit-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img_t04.png" alt="刺激のある毎日を遅れています！伊藤 淳史" width="287" height="289">
                        <p>先輩社員の声</p>
                        <span>voice</span>             
                    </a>
                </div> 
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center category-cruit-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img_t05.png" alt="EVAでどんな仕事をするの？" width="287" height="289">
                        <p>EVAでどんな仕事をするの？</p>
                        <span>what do you do in your job?</span>                    
                    </a>
                </div> 
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center category-cruit-item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img_t06.png" alt="機会に貪欲になり、またフットワークが軽くなりました！武田 鮎美" width="287" height="289">
                        <p>インターンの声</p>
                        <span>voice</span>                   
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center category-cruit-item">     
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img_t07.png" alt="日本じゃ中々できない貴重な体験や学びがたくさんあります！藤原 文佳" width="287" height="289">
                        <p>インターンの声</p>
                        <span>voice</span>                    
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center category-cruit-item">     
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img_t08.png" alt="ベトナムは努力の結果が成功につながる国！柏木 武志" width="287" height="289">
                        <p>先輩社員の声</p>
                        <span>voice</span>                     
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center category-cruit-item">     
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/top/img_t09.png" alt="求ム！ベトナムで働く熱き人材！" width="287" height="289">
                        <p>現在の募集職種</p>
                        <span>requirements</span>                      
                    </a>
                </div>                                
            </div>
        </div>

        <div class="footer-cruit center">
            <div class="container">
                <div class="row footer-cruit-content">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 footer-cruit-content-group">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 footer-cruit-content-item">
                                <ul class="footer-cruit-content-item-ul-1">
                                    <li><span class="list-style">+</span><a href="#">トップ</a></li>
                                    <li><span class="list-style">+</span><a href="#">代表の想い</a></li>
                                    <li><span class="list-style">+</span>先輩の声
                                        <ul class="footer-cruit-content-item-ul-1-1">
                                            <li><span class="list-style-child">l</span><a href="#">社員</a></li>
                                            <li><span class="list-style-child">l</span><a href="#">インターン</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 footer-cruit-content-item">
                                <ul class="footer-cruit-content-item-ul-1">
                                    <li><span class="list-style">+</span><a href="#">仕事内容</a></li>
                                    <li><span class="list-style">+</span><a href="#">募集要項</a></li>
                                    <li><span class="list-style">+</span><a href="#">よくあるご質問</a></li>
                                    <li><span class="list-style">+</span><a href="#">お問い合せ</a></li>
                                </ul>
                            </div>                            
                        </div>                    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 footer-cruit-content-group">
                        <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t02.jpg" alt="EVOLABLE ASIA CORPORATE SITE" width="202" height="50" /></a>
                        <div class="row-gap-medium"></div>
                        <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t01.jpg" alt="応募フォーム" width="199" height="50" /></a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 footer-cruit-content-group">
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
                            <div class="fb-page" data-href="https://www.facebook.com/evolable.asia.eva" data-width="444" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/evolable.asia.eva"><a href="https://www.facebook.com/evolable.asia.eva">EVOLABLE Asia</a></blockquote></div></div>
                        </div>
                    </div>                                        
                </div>
            </div>
        </div>

        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery-ui.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.heightLine.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.sidr.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/wow.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/common.js"></script>
    </body>
</html>        