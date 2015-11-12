<?php
/*
 * Author: KhangLe
 * Template Name: FAQ
 * 
 */
get_header();
?>

<div id="container" class="clearfix"> 
    <!-- /container start -->
    <h2 class="mb30"><img src="<?php echo get_template_directory_uri() ?>/img/faq/h2_faq.png" width="990" height="43" alt="よくある質問" /></h2>
    <p class="mb30"><img src="<?php echo get_template_directory_uri() ?>/img/faq/img_demo.png" width="1000" height="275" alt="よくある質問" /></p>
    <div class="clearfix mb70">	
        <?php
        $args = array(
            'post_type' => 'faqrecruit',
            'orderby' => 'id',
            'order' => 'ASC',
            'hide_empty' => 0,
            'taxonomy' => 'faqcat2',
            'pad_counts' => false);

        $categories = get_categories($args);
        $i = 1;
        foreach ($categories as $cat) {
            //var_dump($cat);
            ?>	
            <?php
            if ($i % 2 == 0) {
                echo "<div class='rightFaq'>";
            } else {
                echo "<div class='leftFaq'>";
            }
            ?>
            <h3 class="h3_faq"><a href="#anchor<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></a></h3>
            <ul class="lstFaq">

                <?php
                $wp_query = new WP_Query();
                $param = array(
                    'post_type' => 'faqrecruit',
                    'order' => 'DESC',
                    'posts_per_page' => '-1',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faqcat2',
                            'field' => 'term_id',
                            'terms' => $cat->term_id
                        )
                    )
                );


                $wp_query->query($param);
                if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post();
                        ?>

                        <li><a href="#<?php echo $post->ID; ?>"><?php
                                if (mb_strlen($post->post_title) > 30) {
                                    $cont = mb_substr($post->post_title, 0, 30);
                                    echo strip_tags($cont . '･･･');
                                } else {
                                    echo strip_tags($post->post_title);
                                }
                                ?></a></li>

                        <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>
            </ul>
        </div><?php
        if ($i % 2 == 0) {
            echo "<div style='clear:both;'></div>";
        }
        ?>
        <?php
        $i ++;
    }
    ?>

</div>
<?php
$args = array(
    'post_type' => 'faqrecruit',
    'orderby' => 'id',
    'order' => 'ASC',
    'hide_empty' => 0,
    'taxonomy' => 'faqcat2',
    'pad_counts' => false);

$categories = get_categories($args);
$i = 1;
foreach ($categories as $cat) {
    ?>	

    <h4 class="h4_faq" id="anchor<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></h4>
    <ul class="lstFaq02">

        <?php
        $wp_query = new WP_Query();
        $param = array(
            'post_type' => 'faqrecruit',
            'order' => 'DESC',
            'posts_per_page' => '-1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'faqcat2',
                    'field' => 'term_id',
                    'terms' => $cat->term_id
                )
            )
        );


        $wp_query->query($param);
        if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>

                <li id="<?php echo $post->ID; ?>">
                    <div class="wrapQues">
                        <p class="question"><?php the_title(); ?></p>
                    </div>
                    <div class="answer">
                        <p><?php the_content(); ?></p>
                    </div>
                </li>


                <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>	

    </ul>
    <?php
    $i ++;
}
?>

<?php get_template_part('contact_box') ?>

<!-- /container end --> 
</div>

<?php get_footer(); ?>