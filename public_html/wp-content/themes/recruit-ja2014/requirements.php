<?php
/*
 * Author: KhangLe
 * Template Name: Requirements
 * 
 */
get_header();
?>

<div id="container" class="clearfix"> 
    <!-- /container start -->
    <h2 class="taC mb30"><img src="<?php echo get_template_directory_uri() ?>/img/requirements/h2.png" width="999" height="44" alt="募集要項"  /></h2>
    <!-- /mainContent start -->
    <div id="main">
  <!--    <p class="taC mb40"><img src="<?php echo get_template_directory_uri() ?>/img/requirements/banner.png" width="1000" height="275" alt=""  /></p>-->
        <ul class="recList">


            <?php
//$post_7 = get_post(1708); 
//echo $title = $post_7->post_title;
            ?> 
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => '6',
                'post_type' => 'requirement',
                'post_status' => 'publish',
                'paged' => $paged,
                'orderby' => 'post_date',
                'order' => 'DESC'
            );

            $i = 1;
            $loop = new WP_Query($args);
            if ($loop->have_posts()): while ($loop->have_posts()) : $loop->the_post();
                    $staffID = get_post_thumbnail_id($post->ID);
                    $thumb_url = wp_get_attachment_image_src($staffID, 'img_re');
                    ?>


                    <li>
                        <p class="floatR"><img src="<?php echo $thumb_url[0]; ?>" alt=""  /></p>
                        <div class="SLeft">
                            <h3><span><?php echo the_title(); ?></span></h3>
                            <div class="mb20">
                                <?php echo get_field("value01"); ?>

                            </div>
                            <div class="SText">
                                <dl>
                                    <?php if (get_field("employment_status") != "") { ?>
                                        <dt>雇用形態</dt>
                                        <dd>	<?php echo get_field("employment_status"); ?></dd>
                                    <?php } ?>

                                    <?php if (get_field("value2") != "") { ?>
                                        <dt>給与</dt>
                                        <dd>	<?php echo get_field("value2"); ?></dd>
                                    <?php } ?>

                                    <?php if (get_field("value_n01") != "") { ?>
                                        <dt>勤務地</dt>
                                        <dd>	<?php echo get_field("value_n01"); ?></dd>
                                    <?php } ?>

                                    <?php if (get_field("value03") != "") { ?>
                                        <dt>仕事内容</dt>
                                        <dd>	<?php echo get_field("value03"); ?></dd>
                                    <?php } ?>


                                    <?php if (get_field("value04") != "") { ?>
                                        <dt>推奨スキル</dt>
                                        <dd>	<?php echo get_field("value04"); ?></dd>
                                    <?php } ?>

                                    <?php if (get_field("value04") != "") { ?>
                                        <dt>福利厚生</dt>
                                        <dd>	<?php echo get_field("value05"); ?></dd>

                                    <?php } ?>
                                </dl>
                                <p class="taC"><a href="<?php echo bloginfo('url') ?>/contact?job=<?php echo the_title(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/requirements/btn01.png" width="199" height="50" class="opa" alt="応募フォーム"  /></a></p>
                            </div>
                        </div>
                    </li>

                    <?php
                    $i++;
                endwhile;
            endif;
            ?>


        </ul>

        <?php
        if (function_exists('wp_pagenavi')) {
            wp_pagenavi(array($loop));
            wp_reset_postdata();
        }
        ?>

    </div>
    <!-- /container end --> 
</div>

<?php get_footer(); ?>