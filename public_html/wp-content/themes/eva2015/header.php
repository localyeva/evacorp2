<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアのお問い合わせページです。" />
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
    </head>
    <body>
        <div id="navigation">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center navbar-collapse collapse visible-md">
                            <div class="pull-right" style="position: relative;">
                                <ul class="top-recruit-lst">
                                    <li>Recruit for</li>
                                    <li><a href="<?php echo get_site_url(2) ?>">Japanese</a></li>
                                    <li><a href="http://jobs.evolable.asia">Vietnamese</a></li>
                                </ul>
                            </div>
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo bloginfo('url') ?>">Home</a></li>
                                <li><a href="<?php echo bloginfo('url') ?>/company/">About Evolable Asia</a></li>
                                <li><a href="<?php echo bloginfo('url') ?>/company/reason">選ばれる理由</a></li>
                                <li>
                                    <a href="<?php echo bloginfo('url') ?>">
                                        <img class="img-responsives" src="<?php echo get_top_image() ?>">
                                    </a>
                                </li>
                                <li><a href="<?php echo bloginfo('url') ?>/service">サービス</a></li>
                                <li><a href="<?php echo bloginfo('url') ?>/news">ニュース</a></li>
                                <li>
                                    <a href="<?php echo bloginfo('url') ?>/contact/">お問い合わせ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 visible-xs text-center no-padding-lr">
                            <div class="navbar-header mobie-brand">
                                <a class="logo-mobie" href="#">
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