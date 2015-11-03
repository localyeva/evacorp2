<?php
/*
 * Author: KhangLe
 * Template Name: Company
 * 
 */
get_header();
?>
<section id="about-profile">
    <div class="header-about-banner">
        <div class="container text-center">
            <h2>Welcome Evolable Asia</h2>
        </div>
    </div>
    <div class="row-gap-big"></div>
    <div class="container-fluid">
        <div class="container">
            <ul class="breadcrumb-cp">
                <li>
                    <a href="#">HOME</a> <span class="divider">></span>
                </li>
                <li>
                    <a href="#">About EvolableAsia</a> <span class="divider">></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid text-center" id="history">
        <div class="container">
            <div class="row">
                <?php
                $time = 0;
                $args = array(
                    'post_type' => 'company-general',
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
                        <div class="col-xs-12 col-md-4 no-padding-lr evol">
                            <div class="round1">
                                <img src="<?php echo get_field('image') ?>" alt="">
                                <div class="footer-his">
                                    <span class="title-about"><?php the_title() ?></span></br></br>
                                    <span class="content-about"><?php echo get_field('description') ?></span>
                                </div>
                                <div id="triangle"></div>
                            </div>
                            <div class="row-gap-huge"></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata() ?>
            </div>
        </div>
    </div>
    <?php get_template_part('part', 'contact'); ?>
</section>
<?php get_footer(); ?>