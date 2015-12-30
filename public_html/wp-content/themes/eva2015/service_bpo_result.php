<?php
/*
 * Author: KhangLe
 * Template Name: Service-BPO-Result
 * 
 */

get_header();
?>
<section id="bpo-profile">
    <div class="head-banner-wrap yellow">
        <div class="container text-center">
            <div class="col-md-12">
                <h2>BPO</h2>
            </div>
        </div>
    </div>
    <div class="row-gap-medium"></div>
    <div class="container-fluid">
        <div class="container">
            <ul class="breadcrumb-cp">
                <li>
                    <a href="<?php echo home_url('') ?>">HOME</a> <span class="divider">></span>
                </li>
                <li>
                    <a href="<?php echo home_url('service') ?>">サービス</a> <span class="divider">></span>
                </li>
                <li class="active">BPO</li>
            </ul>
        </div>
    </div>
    <div class="row-gap-medium"></div>
    <div class="container-fluid center bpo-1">
        <div class="container center">
            <div class="row">
                <div class="col-xs-12 col-md-12 no-padding-lr text-center">
                    <span class="text-1">Evolable Asiaは、従来とは違う</span><br>
                    <span class="text-2">全く新しい「オフショアBPO事業」を提唱します。</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row-gap-huge"></div>
    <div class="row-gap-big"></div>

    <div class="bpo-2">
    </div>
    <div class="container center bpo-2-1 text-center">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-dm-12 col-lg-12">         
                <img src="<?php echo get_template_directory_uri() ?>/img/bpo/3.png" class="img-responsive center-block">           
            </div>
            <div class="col-xs-12 col-sm-12 col-dm-12 col-lg-12">         
                <img src="<?php echo get_template_directory_uri() ?>/img/bpo/6.png" class="img-responsive center-block">           
            </div>
            <div class="col-xs-12 col-sm-12 col-dm-12 col-lg-12">         
                <img src="<?php echo get_template_directory_uri() ?>/img/bpo/7.png" class="img-responsive center-block">           
            </div> 
        </div>
    </div>   

    <div class="container-fluid center bpo-3">
        <div class="container">
            <div class="row-gap-huge"></div>
            <div class="row-gap-medium"></div>
            <div class="row" style="max-width:800px;margin:auto;">
                <div class="col-xs-12 col-md-12 no-padding-lr text-center">
                    <span class="text-1">ACTUAL CONTENTS</span>
                    <br>
                    <span class="text-3"><p><span class="text-3">BPO 実績内容</span>
                        </p>
                    </span>
                    <div class="drop-line-top center-block"></div>
                </div>
            </div>
            <div class="row-gap-big"></div>
            <div class="row">
                <div class="col-xs-12 col-md-12 no-padding-lr"><img class="img-responsive img-reason-1 center-block" src="<?php echo get_template_directory_uri() ?>/img/bpo/8.png" alt="" />
                </div>
            </div>
            <div class="row" style="max-width:800px;margin:auto;">
                <div class="col-xs-12 col-md-12 no-padding-lr">
                    <div class="bs-callout">
                        <span class="text-2">事例紹介1　旅行会社A社の場合</span>
                    </div>
                    <div class="drop-line"></div>
                    <p><img class="img-responsive img-1 center-block" src="<?php echo get_template_directory_uri() ?>/img/bpo/9.png" alt="" />
                    </p>
                </div>
            </div>
            <div class="row" style="max-width:800px;margin:auto;">
                <div class="col-xs-12 col-md-12 no-padding-lr">
                    <div class="bs-callout">
                        <span class="text-2">事例紹介2　不動産会社B社の場合</span>
                    </div>
                    <div class="drop-line"></div>
                    <p><img class="img-responsive img-1 center-block" src="<?php echo get_template_directory_uri() ?>/img/bpo/10.png" alt="" />
                    </p>
                </div>
            </div>
            <div class="row" style="max-width:800px;margin:auto;">
                <div class="col-xs-12 col-md-12 no-padding-lr">
                    <div class="bs-callout">
                        <span class="text-2">事例紹介3　金物販売会社C社の場合</span>
                    </div>
                    <div class="drop-line"></div>
                    <p><img class="img-responsive img-1 center-block" src="<?php echo get_template_directory_uri() ?>/img/bpo/11.png" alt="" />
                    </p>
                </div>
            </div>
            <div class="row-gap-huge"></div>
        </div>
    </div>

    <div class="bpo-4">
        <div class="container center bpo-4-1">
            <div class="row text-center" style="max-width:800px;margin:auto;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p>御社の業務をベトナムにアウトソーシングし、</p>
                    <p>コストの圧縮と業務の合理化を図りましょう!</p>
                </div>
            </div>
            <div class="row-gap-big"></div>
            <div class="row" style="max-width:600px;margin:auto;">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center no-padding-lr">
                    <a href="<?php echo home_url('service/bpo-real-estate') ?>" class="center-block">不動産BPO</a>
                </div>  
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center no-padding-lr bpo-4-1-xs">
                    <a href="<?php echo home_url('recomend') ?>" class="center-block">参加企業の声</a>
                </div>                         
            </div>        
        </div>
    </div>  

    <?php get_template_part('part', 'contact'); ?>
</section>
<?php get_footer(); ?>