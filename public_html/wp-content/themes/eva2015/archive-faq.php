<?php
/*
 * Author: KhangLe
 * 
 */
get_header();
?>
<section>

    <div class="head-banner-wrap purple">
        <div class="container text-center">
            <div class="col-md-12">
                <h2>Contact</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="faq">
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

                                while ($loop->have_posts()): $loop->the_post();
                                    ?>
                                    <li id="faq<?php the_ID(); ?>">
                                        <h4 id="<?php the_ID(); ?>"><?php the_title(); ?></h4>
                                        <?php the_content(); ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <!-- /FAQ container end -->

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>