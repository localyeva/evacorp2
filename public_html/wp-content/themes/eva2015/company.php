<?php
/*
 * Author: KhangLe
 * Template Name: Company
 * 
 */
get_header();
?>
<section id="about-profile">
    <div class="head-banner-wrap red">
                <h2>About Evolable Asia</h2>
    </div>    
    <div class="row-gap-big"></div>
    <div class="container-fluid">
        <div class="container">
            <ul class="breadcrumb-cp hidden-sm hidden-xs">
                <li>
                    <a href="<?php echo home_url('') ?>">HOME</a> <span class="divider">></span>
                </li>
                <li>
                    <a href="<?php echo home_url('company') ?>">About EvolableAsia</a> <span class="divider">></span>
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
                        <div class="col-xs-12 col-md-4 evol">
                            <div class="round1 center-block">
                                <a href="<?php echo bloginfo('url') . '/' . get_field('link'); ?>">
                                    <img class="img-responsive" src="<?php echo get_field('image') ?>" alt="<?php the_title()  ?>">
                                    <div class="footer-his">
                                        <span class="title-about"><?php the_title() ?></span></br></br>
                                        <span class="content-about"><?php echo get_field('description') ?></span>
                                    </div>
                                </a>
                                <div id="triangle"></div>
                            </div>
                            <div class="row-gap-medium"></div>
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