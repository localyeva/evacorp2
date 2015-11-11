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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo bloginfo('url') ?>">Home</a></li>
                                <li><a href="<?php echo bloginfo('url') ?>/company/">About EvolableAsia</a></li>
                                <li><a href="<?php echo bloginfo('url') ?>/company/greeting">開発ならエボ</a></li>
                                <li>
                                    <a href="<?php echo bloginfo('url') ?>/company/circle">
                                        <img class="img-responsives" src="<?php echo get_top_image() ?>">
                                    </a>
                                </li>
                                <li><a href="<?php echo bloginfo('url') ?>/company/greeting">サービス</a></li>
                                <li><a href="<?php echo bloginfo('url') ?>/contact/">ニュース</a></li>
                                <li><a href="#">Recruit</a></li>
                                <li>
                                    <a href="#" class="active">お問い合わせ</a>
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
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About EvolableAsia</a></li>
                                        <li><a href="#">開発ならエボ</a></li>
                                        <li><a href="#">サービス</a></li>
                                        <li><a href="#">ニュース</a></li>
                                        <li><a href="#">Recruit</a></li>
                                        <li><a href="#" class="active">お問い合わせ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>