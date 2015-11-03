<?php
/*
 * Author: KhangLe
 * Template Name: Company-Circle
 * 
 */
get_header();
?>
<section id="circle-profile">
    <div class="header-circle-banner">
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
                <li class="active">Company profile</li>
            </ul>
        </div>
    </div>
    <div class="row-gap-huge"></div>
        <?php
        $time = 0;
        $args = array(
            'post_type' => 'company-circle',
            'posts_per_page' => -1,
            'orderby' => array('date' => 'DESC'),
        );
        $loop = new WP_Query($args);
        ?>
        <?php
        if ($loop->have_posts()):
            $num_posts = count($loop->posts);
            ?>
            <?php while ($loop->have_posts()): $loop->the_post(); ?>
                <div class="container office-con">
                    <div class="row">
                        <div class="col-xs-12 full-width no-padding-lr">
                            <div class="bs-callout bs-callout-danger">
                                <h2><?php the_title() ?></h2>
                            </div>
                            <div class="drop-line"></div>
                        </div>
                    </div>
                    <div class="row-gap-big"></div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 no-padding-lr">
                            <img src="<?php echo get_field('img'); ?>" alt="" class="img-responsive full-width main-img">
                        </div>
                    </div>
                    <div class="row-gap-big"></div>
                    <div class="row">
                        <div class="container no-padding-lr">
                            <div class="row">
                                <div class="col-xs-12 col-md-4">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/7.png" alt="" class="img-responsive full-width">
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/8.png" alt="" class="img-responsive full-width">
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/8.png" alt="" class="img-responsive full-width">
                                </div>
                            </div>
                            <div class="row-gap-medium"></div>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <span class="text-circle">
                                        <?php the_content(); ?> 
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-gap-huge"></div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata() ?>
    </div>
    <?php get_template_part('part', 'contact'); ?>
</section>
<?php get_footer(); ?>