<?php
/*
 * Author: KhangLe
 * Template Name: Service-BPO-Result
 * 
 */

get_header();
?>
<section id="bpo-profile">
    <div class="header-reason-banner">
        <div class="container text-center">
            <h2>Welcome Evolable Asia</h2>
        </div>
    </div>
    <div class="row-gap-medium"></div>
    <div class="container-fluid">
        <div class="container">
            <ul class="breadcrumb-cp">
                <li>
                    <a href="#">HOME</a> <span class="divider">></span>
                </li>
                <li>
                    <a href="#">About EvolableAsia</a> <span class="divider">></span>
                </li>
                <li class="active">BPO</li>
            </ul>
        </div>
    </div>
    <div class="row-gap-huge"></div>
    <div class="container-fluid center bpo-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 no-padding-lr text-center">
                    <span class="text-1">Evolable Asia demo demo demo demo</span><br>
                    <span class="text-2">Demo Demo Demo Demo Demo Demo Demo</span>
                </div>
            </div>
            <div class="row-gap-huge"></div>
            <div class="row">
                <div class="col-xs-12 col-md-12 no-padding-lr">
                    <div class="col-xs-12 col-md-12 no-padding-lr">
                        <img src="<?php echo get_template_directory_uri() ?>/img/57.jpg" alt="" class="img-responsive img-reason-1 center-block">
                    </div>
                </div>
            </div>
            <div class="row-gap-huge"></div>
        </div>
    </div>
    <div class="container-fluid center bpo-2">
        <div class="container">
            <div class="row-gap-huge"></div>
            <div class="row-gap-huge"></div>
            <div class="row-gap-huge"></div>
            <div class="row-gap-huge"></div>
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
                    <div class="row">
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
                    <div class="row">
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
    <div class="container-fluid center bpo-4">
        <div class="row-gap-giant"></div>
        <div class="row">
            <div class="col-xs-12 col-md-3 no-padding-lr left-1"></div>
            <div class="col-xs-12 col-md-3 no-padding-lr border-reason-3">
                <div class="glyphicon glyphicon-menu-right text-left"></div>
                <div class="text-1 text-center">
                    Lorem ipsum.
                </div>
            </div>
            <div class="col-xs-12 col-md-1 no-padding-lr middle-1"></div>
            <div class="col-xs-12 col-md-3 no-padding-lr border-reason-3">
                <div class="glyphicon glyphicon-menu-right text-left"></div>
                <div class="text-1 text-center">
                    Lorem ipsum ipsum.
                </div>
            </div>
            <div class="col-xs-12 col-md-2 no-padding-lr"></div>
        </div>
    </div>
    <?php get_template_part('part', 'contact'); ?>
</section>
<?php get_footer(); ?>