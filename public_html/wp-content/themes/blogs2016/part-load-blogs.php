<?php
$default_img = get_template_directory_uri() . '/assets/img/default-img.png';
$args = array(
    'taxonomy' => 'category',
    'hide_empty' => 0,
    'orderby' => 'id',
    'exclude' => 1,
);
$categories = get_categories($args);
foreach ($categories as $category) {
    $category_names[] = $category->name;
}
$bg_color = array('pink', 'yellow', 'blue', 'red', 'green', 'gray', 'orange');
$class_category = array_combine($category_names, $bg_color);

$args = array(
    'category' => $cat,
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => '',
    'exclude' => '',
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'post_mime_type' => '',
    'post_parent' => '',
    'author' => '',
    'post_status' => 'publish',
    'paged' => $paged,
    'suppress_filters' => true
);
$wp_query = new WP_Query();
$wp_query->query($args);

$count = 1;

if ($cat != '') {

    $cat_name = get_cat_name($cat);

    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()):
            $wp_query->the_post();
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            ?>

            <?php if ($count == 1): ?>
                <div class="index-left-1">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item">
                        <a href="<?php the_permalink() ?>" class="link">
                            <img class="img-responsive" src="<?php echo!empty($url) ? $url : $default_img; ?>">
                            <span class="info">
                                <span class="overlay"></span>
                                <span class="post-date"><?php the_time('Y.m.d'); ?></span>
                                <span class="category <?php echo $class_category[$cat_name]; ?>"><?php echo $cat_name; ?></span>
                                <h3 class="title"><?php the_title(); ?></h3>
                            </span>
                        </a>                                
                    </div>
                </div>
            <?php else: ?>
                <div class="index-left-2">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 item">
                        <a href="<?php the_permalink() ?>" class="link">
                            <img class="img-responsive" src="<?php echo!empty($url) ? $url : $default_img; ?>">
                            <span class="info">
                                <span class="overlay"></span>
                                <span class="post-date"><?php the_time('Y.m.d'); ?></span>
                                <span class="category <?php echo $class_category[$cat_name]; ?>"><?php echo $cat_name; ?></span>
                                <h3 class="title"><?php the_title(); ?></h3>
                            </span>
                        </a>                                  
                    </div>
                </div>
            <?php endif; ?>

            <?php
            $count++;
        endwhile;
    endif;
} else {

    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()):
            $wp_query->the_post();
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $cats = get_the_category($post->ID);
            ?>

            <?php if ($count == 1): ?>
                <div class="index-left-1">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item">
                        <a href="<?php the_permalink() ?>" class="link">
                            <img class="img-responsive" src="<?php echo!empty($url) ? $url : $default_img; ?>">
                            <span class="info">
                                <span class="overlay"></span>
                                <span class="post-date"><?php the_time('Y.m.d'); ?></span>
                                <span class="category <?php echo $class_category[$cats[0]->cat_name]; ?>"><?php echo $cats[0]->cat_name; ?></span>
                                <h3 class="title"><?php the_title(); ?></h3>
                            </span>
                        </a>                                
                    </div>
                </div>
            <?php else: ?>
                <div class="index-left-2">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 item">
                        <a href="<?php the_permalink() ?>" class="link">
                            <img class="img-responsive" src="<?php echo!empty($url) ? $url : $default_img; ?>">
                            <span class="info">
                                <span class="overlay"></span>
                                <span class="post-date"><?php the_time('Y.m.d'); ?></span>
                                <span class="category <?php echo $class_category[$cats[0]->cat_name]; ?>"><?php echo $cats[0]->cat_name; ?></span>
                                <h3 class="title"><?php the_title(); ?></h3>
                            </span>
                        </a>                                  
                    </div>
                </div>
            <?php endif; ?>

            <?php
            $count++;
        endwhile;
    endif;
}
?>

<div style="clear:both;"></div>
<div style="text-align:center;margin: 20px auto;">
    <?php wpbeginner_numeric_posts_nav(); ?>  
</div>