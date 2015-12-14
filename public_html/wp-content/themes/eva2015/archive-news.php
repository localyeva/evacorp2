<?php
/*
 * Author: KhangLe
 * Template Name: Arichive-News
 *
 */
get_header();
$post_type = get_post_type_object('news');
$default_img = get_template_directory_uri() . '/img/default-img.jpg';
?>
<div id="news">
    <div class="header-reason-banner">
        <div class="container text-center">
            <h2><?php echo $post_type->label; ?></h2>
        </div>
    </div>
    <div class="row-gap-medium"></div>
    <?php custom_breadcrumbs('news'); ?>
    <div class="row-gap-medium"></div>
    <div class="container center bpo-1">
        <?php // get_sidebar('news') ?>
        <div class="content col-md-12">
            <div class="row">
                <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'post_type' => 'news',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'posts_per_page' => '9',
                        'paged' => $paged,
                    );
                    $wp_query->query($param);
                ?>
                <?php
                if ($wp_query->have_posts()) {
                    $i = 0;
                    while ($wp_query->have_posts()) {
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
                        } ?>
                        <div class="col-md-4 item">
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo !empty($post_image) ? $post_image : $default_img; ?>" alt="<?php the_title(); ?>">
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
                        <?php
                        $i++;
                    }
                    wp_reset_postdata();
                } ?>
            </div>
            <div class="row-gap-medium"></div>
            <?php wpbeginner_numeric_posts_nav(); ?>
            <div class="row-gap-medium"></div>
        </div>
    </div>
</div>
<?php get_template_part('part-contact'); ?>
<?php get_footer(); ?>