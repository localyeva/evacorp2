<?php
/*
 * Author: KhangLe
 * Template Name: Archive-FAQ
 * 
 */
get_header();
?>
<div id="faq">
    <div class="head-banner-wrap purple">
        <div class="container text-center">
            <div class="col-md-12">
                <h2>FAQ</h2>
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
                <li class="active">FAQ</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="faq" style="max-width:800px;margin:auto;">
            <?php
            $args = array('hide_empty=0');
            $terms = get_terms('faqcat', $args);

            if (count($terms) > 0):
                ?>
                <!-- /FAQ container start -->
                <ul class="ul_faq02">
                    <?php foreach ($terms as $term): ?>
                        <li id="faqCat<?php echo $term->term_id ?>">
                            <h3><span><?php echo $term->name ?></span></h3>
                            <ul class="ul_faq03">
                                <?php
                                $args = array(
                                    'post_type' => 'faq',
                                    'posts_per_page' => '-1',
                                    'order' => 'DESC',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'faqcat',
                                            'field' => $term->slug,
                                            'terms' => array($term->term_id)
                                        )
                                    )
                                );
                                $loop = new WP_Query($args);
                                $i = 0;

                                while ($loop->have_posts()): $loop->the_post();
                                    ?>
                                    <li id="faq<?php the_ID(); ?>">
                                        <h4 id="<?php the_ID(); ?>" <?php echo $i==0?"style='border-top:0px'":""?>><?php the_title(); ?></h4>
                                        <?php the_content(); ?>
                                    </li>
                                <?php $i++; endwhile; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <!-- /FAQ container end -->

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    
    <?php get_template_part('part-contact') ?>
</div>


<?php
get_footer();
?>