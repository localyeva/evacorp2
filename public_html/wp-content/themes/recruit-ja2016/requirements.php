<?php
/*
 * Author: KhaCao
 * Template Name: requirements
 * 
 */
get_header();
?>
<div class="container requirements-content">
    <div class="row requirements-content-1 center">
        <div class="requirements-content-1-title">
            <div class="requirements-content-1-title-row">
                <div class="requirements-content-1-title-cell">
                    <span>募集要項</span>
                </div>                             
            </div>
        </div>   
        <h2>requirement</h2>    
    </div> 

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


    <div class="row-gap-medium"></div>
    <div class="row requirements-content-2">
        <div class="col-xs-12 col-sm-8 col-dm-8 col-lg-8 no-padding-lr">
            <h1><?php echo the_title(); ?></h1>
            <hr/>
            <p>
                <?php echo get_field("value01"); ?>
            </p>
            <div class="row-gap-medium"></div>
            <div class="requirements-content-2-table">
                <?php if (get_field("employment_status") != "") { ?>
                <div class="requirements-content-2-row">
                    <div class="requirements-content-2-cell-1">
                        雇用形態
                    </div>
                    <div class="requirements-content-2-cell-2">
                        <?php echo get_field("employment_status"); ?>
                    </div>                    
                </div>  
                <?php } ?>
                <?php if (get_field("value2") != "") { ?>
                <div class="requirements-content-2-row">
                    <div class="requirements-content-2-cell-1">
                        給与
                    </div>
                    <div class="requirements-content-2-cell-2">
                        <?php echo get_field("value2"); ?>
                    </div>                    
                </div> 
                <?php } ?>
                <?php if (get_field("value_n01") != "") { ?>
                <div class="requirements-content-2-row">
                    <div class="requirements-content-2-cell-1">
                        勤務地
                    </div>
                    <div class="requirements-content-2-cell-2">
                        <?php echo get_field("value_n01"); ?>
                    </div>                    
                </div> 
                <?php } ?>
                <?php if (get_field("value03") != "") { ?>
                <div class="requirements-content-2-row">
                    <div class="requirements-content-2-cell-1">
                        仕事内容
                    </div>
                    <div class="requirements-content-2-cell-2">
                        <?php echo get_field("value03"); ?>
                    </div>                    
                </div> 
                <?php } ?>                
                <?php if (get_field("value04") != "") { ?>
                <div class="requirements-content-2-row">
                    <div class="requirements-content-2-cell-1">
                        推奨スキル
                    </div>
                    <div class="requirements-content-2-cell-2">
                        <?php echo get_field("value04"); ?>
                    </div>                    
                </div> 
                <?php } ?>
                <?php if (get_field("value04") != "") { ?>
                <div class="requirements-content-2-row">
                    <div class="requirements-content-2-cell-1 last">
                        福利厚生
                    </div>
                    <div class="requirements-content-2-cell-2 last">
                        <?php echo get_field("value05"); ?>                
                    </div>                    
                </div>  
                <?php } ?>
            </div> 
            <div class="center">
                <a href="<?php echo bloginfo('url') ?>/contact?job=<?php echo the_title(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/requirements/btn01.png" width="199" height="50"></a>                                                                                 
            </div>
        </div>         
        <div class="col-xs-12 col-sm-4 col-dm-4 col-lg-4 center no-padding-lr">
        </div>               
    </div>
            <?php
            $i++;
        endwhile;
    endif;
    ?>


    <?php
    if (function_exists('wp_pagenavi')) {
        wp_pagenavi(array($loop));
        wp_reset_postdata();
    }
    ?>
    <div class="row-gap-big"></div>                                       
</div>
<?php get_footer(); ?>