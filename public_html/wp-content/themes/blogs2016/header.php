<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja" xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="ベトナムでオフショア開発、ラボ型オフショア開発、BPOを行なうEVOLABLE ASIA(エボラブルアジア)の求人特設サイトです。「海外で働きたい！」と思っているあなた、EVAではグローバルな視点をもつ仲間を求めています。" />
        <meta name="keywords" content="ベトナム,オフショア開発,ラボ型オフショア開発,BPO,アウトソーシング,ホーチミン,エボラブルアジア,EVOLABLE ASIA,海外,求人,海外で働く,転職,インターン " />

        <title><?php echo wp_title('|', true, 'right') ?></title>
        <link href="<?php echo get_template_directory_uri() ?>/assets/img/ico/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
        <link href="<?php echo get_template_directory_uri() ?>/assets/img/ico/favicon.ico" type="image/x-icon" rel="icon"/>        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/jquery.sidr.dark.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css" type="text/css" media="all" />
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/animate.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/font-awesome.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->   
        <?php wp_head(); ?>                    
    </head>
    <?php global $body_id; ?>    
    <body id="<?php echo $body_id ?>">
        <div class="container">
            <div class="header-logo">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 header-logo-1">
                        <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="EVOLABLE ASIA" height="31" /></a>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 hidden-xs"></div>                    
                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 header-logo-2 hidden-xs">
                        <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/header/btn_t02.jpg" alt="EVOLABLE ASIA CORPORATE SITE" width="202" height="50"/></a>
                    </div> 
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header-logo-3 hidden-xs">
                        <h5>EVOLABLE ASIA ブログ　ベトナムでのオフショア開発の知りたい情報をお届けするエボラブルアジアの情報サイト</h5>
                    </div>                                        
                </div>
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
                    <li class="active-menu"><a href="<?php echo bloginfo('url') ?>/message">HOME</a></li>
                    <li><a href="<?php echo bloginfo('url') ?>/message">ナレッジ</a></li>
                    <li><a href="<?php echo bloginfo('url') ?>/message">お客様の声</a></li>
                    <li><a href="<?php echo bloginfo('url') ?>/message">インタビュー</a></li>
                    <li><a href="<?php echo bloginfo('url') ?>/message">ＪＬＩＣ</a></li>
                    <li><a href="<?php echo bloginfo('url') ?>/message">ベトナム生活情報</a></li>
                    <li><a href="<?php echo bloginfo('url') ?>/message">インターン</a></li>
                    <li><a href="<?php echo bloginfo('url') ?>/message">エボラブルアジアのHPへ</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>