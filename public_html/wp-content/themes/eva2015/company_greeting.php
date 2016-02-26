<?php
/*
 * Author: KhangLe
 * Template Name: Company-Greeting
 * 
 */
get_header();
?>
<section id="greeting-profile">
    <div class="head-banner-wrap red">
                <h2>代表挨拶</h2>
    </div>     
    <div class="row-gap-medium"></div>
    <div class="container-fluid">
        <div class="container">
            <ul class="breadcrumb-cp hidden-sm hidden-xs">
                <li>
                    <a href="<?php echo home_url('') ?>">HOME</a> <span class="divider">></span>
                </li>
                <li>
                    <a href="<?php echo home_url('company') ?>">About EvolableAsia</a> <span class="divider">></span>
                </li>
                <li class="active">Greeting</li>
            </ul>
        </div>
    </div>
    <div class="container-fluid left">
        <div class="container office-con">
            <div class="row-gap-big"></div>
            <?php
            $time = 0;
            $args = array(
                'post_type' => 'company-greeting',
                'posts_per_page' => 1,
                'orderby' => array('date' => 'DESC'),
            );
            $loop = new WP_Query($args);
            ?>
            <?php
            if ($loop->have_posts()):
                $num_posts = count($loop->posts);
                ?>
                <?php while ($loop->have_posts()): $loop->the_post(); ?>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="container custom-containter">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 no-padding-lr">
                                        <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width main-img">
                                    </div>
                                </div></div></div>
                    </div>
                    <div class="row-gap-big"></div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 ">
                            <div class="container custom-containter">                            
                                <div class="row-gap-medium"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <span class="text-gree">
                                            <?php echo get_field('header') ?>
                                        </span>
                                    </div>
                                    <div class="row-gap-medium"></div>
                                    <div class="col-xs-12 col-md-12">
                                        <span class="text-gree2">
                                            <?php echo get_field('content') ?>
                                        </span>
                                        <div class="row-gap-big"></div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="bs-callout bs-callout-danger">
                                            <h2>略歴</h2>
                                        </div>
                                        <div class="drop-line"></div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="row-gap-medium"></div>
                                        <?php if (have_rows('history')): ?>
                                            <table class="tb-gree2">
                                                <?php while (have_rows('history')): the_row(); ?>
                                                    <tr>
                                                        <th><?php echo the_sub_field('title'); ?></th>
                                                        <td><?php echo the_sub_field('description'); ?></td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            </table>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row-gap-big"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 col-xs-padding">
                                        <div class="bs-callout bs-callout-danger">
                                            <h2>Mission Statement</h2>
                                        </div>
                                        <div class="drop-line"></div>
                                        <span class="text-gree2">
                                            <?php echo get_field('mission') ?>
                                        </span>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="bs-callout bs-callout-danger">
                                            <h2>Core Value</h2>
                                        </div>
                                        <div class="drop-line"></div>
                                        <?php if (have_rows('core_value')): ?>
                                            <ul class="text-gree3">
                                                <?php while (have_rows('core_value')): the_row(); ?>
                                                    <li><?php echo the_sub_field('description'); ?></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>
        </div>
        <div class="row-gap-huge"></div>
    </div>
    <?php get_template_part('part', 'contact'); ?>
</section>
<?php get_footer(); ?>
