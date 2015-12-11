<?php
/*
 * Author: KhangLe
 * Template Name: Company-History
 * 
 */
get_header();
?>
<section id="history-profile">
    <div class="header-circle-banner">
        <div class="container text-center">
            <h2>沿革</h2>
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
                <li class="active">History</li>
            </ul>
        </div>
    </div>
    <div class="row-gap-big"></div>
    <div class="container-fluid left">
        <div class="container office-con">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="container custom-containter">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <h2 class="text-center">HISTORY</h2>
                                <div class="drop-line-top center-block"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row-gap-big"></div>
            <?php
            $time = 0;
            $args = array(
                'post_type' => 'company-profile',
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
                    <?php if (have_rows('history')): ?>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="container custom-containter">
                                    <div class="row">
                                        <?php while (have_rows('history')): the_row(); ?>
                                            <div class="col-xs-12 col-md-12">
                                                <div class="drop-line"></div>
                                                <div class="row-gap-medium"></div>
                                                <span class="glyphicon glyphicon-minus"></span>
                                                <span class="text-year"><?php echo the_sub_field('title'); ?></span>
                                                <span class="text-des"><?php echo the_sub_field('description'); ?></span>
                                                <div class="row-gap-medium"></div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="row-gap-huge"></div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="container custom-containter">

                                <?php if (have_rows('images')): ?>
                                    <div class="row">
                                        <?php while (have_rows('images')): the_row(); ?>
                                            <div class="col-xs-12 col-md-4">
                                                <img src="<?php echo the_sub_field('image'); ?>" alt="<?php echo the_sub_field('title'); ?>" class="img-responsive">
                                                <div class="row-gap-medium"></div>
                                                <span class=""><?php echo the_sub_field('title'); ?></span>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="row-gap-medium"></div>
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