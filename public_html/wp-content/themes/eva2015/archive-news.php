<?php
/*
 * Author: KhangLe
 * Template Name: Arichive-News
 *
 */
get_header();
print_r($_SERVER);
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <ul class="ul_news">
                    <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'post_type' => 'news',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'posts_per_page' => '4',
                        'paged' => $paged,
                    );
                    $wp_query->query($param);
                ?>
                <?php if ($wp_query->have_posts()) { ?>
                    <?php
                    $i = 0;
                    while ($wp_query->have_posts()) { ?>
                        <?php
                            $wp_query->the_post();
                            $postId = get_the_ID();
                            $terms = get_the_terms($postId, 'news-type');
                            $categories = array();
                            if (is_array($terms) && count($terms) > 0) {
                                foreach ($terms as $term) {
                                    $categories[] = $term->name;
                                }
                            }
                            $post_image = get_field('image');
                            if (($i - 3) % 3 == 0) {
                                $color = 'pink';
                            } elseif (($i - 1) % 3 == 0) {
                                $color = 'yellow';
                            } else {
                                $color = 'sky-blue';
                            }
                        ?>
                        <div class="col-md-4 item">
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo !empty($post_image) ? $post_image : $default_img; ?>" alt="" />
                                <span class="info">
                                    <span class="overlay"></span>
                                    <span class="post-date"><?php the_time('Y.m.d'); ?></span>
                                    <?php if (count($categories) > 0) { ?>
                                    <span class="category <?php echo $color; ?>"><?php echo implode(', ', $categories); ?></span>
                                    <?php } ?>
                                    <h3 class="title"><?php the_title(); ?></h3>
                                </span>
                            </a>
                        </div>
                    <?php $i++; } ?>
                <?php } ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>