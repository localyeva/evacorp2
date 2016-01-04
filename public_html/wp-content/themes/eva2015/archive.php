<?php
/*
  Template Name: Archives
 */
get_header();
?>

<h1>archive</h1>

<div id="container">

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
                    }
                    ?>
                    <div class="col-md-4 item">
                        <a href="<?php echo get_permalink(); ?>">
                            <img src="<?php echo!empty($post_image) ? $post_image : $default_img; ?>" alt="<?php the_title(); ?>">
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
            }
            ?>
        </div>
        <div class="row-gap-medium"></div>
        <?php wpbeginner_numeric_posts_nav(); ?>
        <div class="row-gap-medium"></div>

        <div class="row">
            <div class="col-md-12">
                <?php wp_get_archives('type=monthly&limit=15&show_post_count=true'); ?>
            </div>
            <div class="col-md-12">
                <?php wp_get_archives('type=alpha'); ?>
            </div>
            <div class="col-md-12">
                <?php var_dump(wp_get_archives('type=monthly')) ?>
            </div>
            <div class="col-md-12">
                <?php
                $variable = wp_get_archives(array('type' => 'monthly', 'show_post_count' => 'true'));

                $variable = str_replace('(', '<span class="cat-count">', $variable);
                $variable = str_replace(')', '</span>', $variable);
                echo $variable;
                ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>