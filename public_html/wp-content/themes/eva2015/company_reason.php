<?php
/*
 * Author: KhangLe
 * Template Name: Company-Reason
 * 
 */
get_header();
?>
<section id="reason-profile">
    <div class="head-banner-wrap purple">
        <div class="container text-center">
            <div class="col-md-12">
                <h2>選ばれる理由</h2>
            </div>
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
                <li class="active">Reason</li>
            </ul>
        </div>
    </div>
    <div class="row-gap-huge"></div>
    <?php
    $time = 1;
    $args = array(
        'post_type' => 'company-reason',
        'posts_per_page' => -1,
        'orderby' => array('date' => 'ASC'),
    );
    $loop = new WP_Query($args);
    ?>
    <?php
    if ($loop->have_posts()):
        $num_posts = count($loop->posts);
        ?>
        <?php while ($loop->have_posts()): $loop->the_post(); ?>
            <div class="container-fluid center reason-why-<?php echo $time; ?>">
                <div class="container">
                    <div class="row">
                    <?php if($time != 1){echo('<div class="row-gap-huge"></div>');}?>
                    <div class="col-xs-12 col-md-12">
                        <div class="container custom-containter">
                            <div class="row">
                                <div class="col-xs-12 col-md-12 no-padding-lr text-center">
                                    <span class="text-1"><?php the_title();?></span><br>
                                    <?php echo get_field('header');?>
                                    <div class="drop-line-top center-block"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row-gap-big"></div>
                    </div>                    
                    <div class="col-xs-12 col-md-12">
                        <div class="container custom-containter">
                        <?php remove_filter ('content', 'wpautop'); ?>
                        <?php echo get_field('content');?>
                        </div>
                        <div class="row-gap-huge"></div>
                    </div>
                    
                    </div>
                </div>
            </div>
        <?php $time++; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata() ?>
    <?php get_template_part('part', 'contact'); ?>
</section>
<?php get_footer(); ?>