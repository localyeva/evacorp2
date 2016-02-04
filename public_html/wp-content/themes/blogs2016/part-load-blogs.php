<?php
$default_img = get_template_directory_uri() . '/assets/img/default-img.png';
$args = array(
    'taxonomy' => 'category',
    'hide_empty' => 0,
    'orderby' => 'id',
    'exclude' => 1,
);
$categories = get_categories($args);
$class_category = array();
if (count($categories) > 0) {
    foreach ($categories as $category) {
        $category_names[] = $category->name;
    }
    //
    $c_bg_colors = array();
    $bg_colors = array('pink', 'yellow', 'blue', 'red', 'green', 'gray', 'orange', 'green', 'gray', 'orange');
    //
    for ($i = 0; $i < count($category_names); $i++) {
        $c_bg_colors[] = $bg_colors[$i];
    }
    //
    $class_category = @array_combine($category_names, $c_bg_colors);
}

$count = 1;

if ($cat != '') {

    $args = array(
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $cat,
            ),
        ),
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => $paged,
    );
    $wp_query = new WP_Query();
    $wp_query->query($args);

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
                                <span class="post-date"><?php the_time('Y/m/d'); ?></span>
                                <span class="category <?php echo $class_category[$cat_name]; ?>"><?php echo $cat_name; ?></span>
                                <h3 class="title"><?php the_title(); ?></h3>
                            </span>
                        </a>                                
                    </div>
                </div>
            <?php else: ?>
                <div class="index-left-2">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 item padding-lr">
                        <a href="<?php the_permalink() ?>" class="link">
                            <img class="img-responsive" src="<?php echo!empty($url) ? $url : $default_img; ?>">
                            <span class="info">
                                <span class="overlay"></span>
                                <span class="post-date"><?php the_time('Y/m/d'); ?></span>
                                <span class="category <?php echo isset($class_category[$cat_name]) ? $class_category[$cat_name] : ""; ?>"><?php echo $cat_name; ?></span>
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
    // get all posts
} else {

    $args = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => $paged,
    );
    $wp_query = new WP_Query();
    $wp_query->query($args);

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
                                <span class="post-date"><?php the_time('Y/m/d'); ?></span>
                                <span class="category <?php echo isset($class_category[$cats[0]->cat_name]) ? $class_category[$cats[0]->cat_name] : ""; ?>"><?php echo $cats[0]->cat_name; ?></span>
                                <h3 class="title"><?php the_title(); ?></h3>
                            </span>
                        </a>                                
                    </div>
                </div>
            <?php else: ?>
                <div class="index-left-2">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 item padding-lr">
                        <a href="<?php the_permalink() ?>" class="link">
                            <img class="img-responsive" src="<?php echo!empty($url) ? $url : $default_img; ?>">
                            <span class="info">
                                <span class="overlay"></span>
                                <span class="post-date"><?php the_time('Y/m/d'); ?></span>
                                <span class="category <?php echo isset($class_category[$cats[0]->cat_name]) ? $class_category[$cats[0]->cat_name] : ""; ?>"><?php echo ($cats[0]->cat_name != 'Uncategorized') ? $cats[0]->cat_name : '' ?></span>
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
