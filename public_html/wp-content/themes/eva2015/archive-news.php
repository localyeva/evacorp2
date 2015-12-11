<?php
/*
 * Author: KhangLe
 * Template Name: Arichive-News
 *
 */
get_header();
$post_type = get_post_type_object('news');
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
        <div class="sidebar col-md-3">
            <ul class="vertical-menu">
                <?php
                $taxonomies = array('news-type');

                $args = array(
                    'orderby'           => 'name',
                    'order'             => 'ASC',
                    'hide_empty'        => true,
                    'exclude'           => array(),
                    'exclude_tree'      => array(),
                    'include'           => array(),
                    'number'            => '',
                    'fields'            => 'all',
                    'slug'              => '',
                    'parent'            => '',
                    'hierarchical'      => true,
                    'child_of'          => 0,
                    'childless'         => false,
                    'get'               => '',
                    'name__like'        => '',
                    'description__like' => '',
                    'pad_counts'        => false,
                    'offset'            => '',
                    'search'            => '',
                    'cache_domain'      => 'core'
                );

                $terms = get_terms($taxonomies, $args);

                if (count($terms) > 0) { ?>
                <li>
                    <span>Category</span>
                    <ul>
                        <?php foreach ($terms as $term) { ?>
                        <li><a href="<?php echo $term->taxonomy . '/' . $term->slug ?>"><?php echo $term->name . '&nbsp;(' . $term->count . ')'; ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
                <li>
                    <span>Archive</span>
                    <ul>
                        <?php getArchivesByPostType('news'); ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="content col-md-9">
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
                                <img src="<?php echo !empty($post_image) ? $post_image : $default_img; ?>" alt="">
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
<?php get_footer(); ?>