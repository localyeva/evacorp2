<?php
/*
 * Author: KhangLe
 * Template Name: Service
 * 
 */

get_header();
?>

<div class="page-wrap">
    <div class="head-banner-wrap blue">
        <div class="container text-center">
            <h2>サービス</h2>
        </div>
    </div>

    <div class="container service-info">
        <div class="row">
            <!--<div class="col-xs-12 col-md-12">-->
            <?php
            $args = array(
                'post_type' => 'top-service',
                'posts_per_page' => -1,
                'orderby' => array('date' => 'ASC'),
            );
            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()): ?>
                <?php while ($loop->have_posts()): $loop->the_post(); ?>
                    <div class="col-xs-12 col-md-4">
                        <article class="module wow fadeInDown">
                            <a class="alnk" href="<?php echo home_url(get_field('redirect_url')) ?>">

                                <figure>
                                    <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                                </figure>
                                <div class="caption">
                                    <h2 class="sv-title">
                                        <?php the_title() ?>
                                        <div class="intro"><?php echo get_field('short_description') ?></div>
                                    </h2>
                                </div>
                                <div class="excerpt">
                                    <?php the_excerpt() ?>
                                </div>
                            </a>
                        </article>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>
            <!--</div>-->
        </div>

    </div>
    <div class="gap-big"></div>
    
    <?php get_template_part('part-contact') ?>
</div>

<?php get_footer(); ?>