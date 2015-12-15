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
            <?php
            $time = 0;
            $args = array(
                'post_type' => 'bpo-result',
                'posts_per_page' => -1,
                'orderby' => array('date' => 'ASC'),
            );
            $loop = new WP_Query($args);
            ?>
            <?php
            if ($loop->have_posts()):
                $num_posts = count($loop->posts);
                $count_i = 1;
                ?>
                <?php while ($loop->have_posts()): $loop->the_post(); ?>
                    <?php if($count_i == 1){?>
                    <div class="row" style="max-width:800px;margin:auto;">
                        <div class="col-xs-12 col-md-12 no-padding-lr text-center">
                            <span class="text-1"><?php the_title();?></span><br>
                            <span class="text-3"><?php the_content();?></span>
                            <div class="drop-line-top center-block"></div>
                        </div>
                    </div>
                    <div class="row-gap-big"></div>
                    <?php }elseif($count_i == 2){
                            the_content();
                        }else{
                    ?>
                    <div class="row" style="max-width:800px;margin:auto;">
                        <div class="col-xs-12 col-md-12 no-padding-lr">
                            <div class="bs-callout">
                                <span class="text-2"><?php the_title();?></span>
                            </div>
                            <div class="drop-line"></div>
                            <?php the_content();?>
                        </div>
                    </div>
                    <?php }
                        $count_i++;
                    ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>
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
                    <a href="<?php echo home_url('service/about_bpo') ?>" class="center-block">開発実績</a>
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