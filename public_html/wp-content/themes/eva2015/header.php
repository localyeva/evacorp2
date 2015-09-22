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
        <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?> 
    </head>
    <body>
        <div id="mobile-header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a id="responsive-menu-button" class="btn btn-orange navbar-btn" href="#">Menu</a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="navigation">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About EvolableAsia</a></li>
                            <li><a href="#">開発ならエボ</a></li>
                            <li>
                                <a href="#">
                                    <img class="img-responsives" src="<?php echo get_top_image(); ?>">
                                </a>
                            </li>
                            <li><a href="#">サービス</a></li>
                            <li><a href="#">ニュース</a></li>
                            <li><a href="#">Recruit</a></li>
                            <li>
                                <a href="#" class="active">お問い合わせ</a>
                            </li>
                            <!-- <li class="navbar-bars">
                                <a href="#"><span class="fa fa-bars fa-lg"></span></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#navigation li button.navbar-btn').click(function () {
                    location.href = $(this).data('url');
                });
            })
        </script>
        <div class="header-banner">
            <p><?php echo get_slide_text() ?></p>
        </div>