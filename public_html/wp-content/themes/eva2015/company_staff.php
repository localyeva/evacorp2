<?php
/*
 * Author: KhangLe
 * Template Name: Company-Staff
 * 
 */
get_header();
?>

<div id="company-staff">
    <div class="head-banner-wrap blue">
        <div class="container text-center">
            <div class="col-md-12">
                <h2>スタッフ紹介</h2>
            </div>
        </div>
    </div>       
    <div class="row-gap-medium"></div>
    <div class="container-fluid">
        <div class="container">
            <ul class="breadcrumb-cp hidden-sm hidden-xs">
                <li>
                    <a href="<?php echo home_url('') ?>">HOME</a> <span class="divider">></span>
                </li>
                <li>
                    <a href="<?php echo home_url('company') ?>">About EvolableAsia</a> <span class="divider">></span>
                </li>
                <li class="active">スタッフ紹介</li>
            </ul>
        </div>
    </div>
    <?php
        $wp_query = new WP_Query();
        $param = array(
            'post_type' => 'company-staff',
            'order' => 'ASC',
            'orderby' => 'meta_value',
            'meta_key' => 'staff_number',
            'posts_per_page' => '-1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'staffcat',
                    'field' => 'slug',
                    'terms' => 'manager'
                )
            )
        );
        $wp_query->query($param);
        $count = 0;
        if ($wp_query->have_posts()):
            $num_posts = count($wp_query->posts);
            while ($wp_query->have_posts()) : 
                $wp_query->the_post();
                $count += 1;
    ?>
                    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="container custom-containter">
                    <div class="row">
                        <div class="row-gap-medium"></div>
                        <div class="col-xs-6 col-md-6">
                            <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive">
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <h3><?php the_title(); ?></h3>
                            <h4><i style="color: #93D1FA;font-size: 30px">-</i>&nbsp;&nbsp;<?php the_field('staff_role'); ?></h4>
                            <div class="row-gap-small"></div>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                    <?php
                        while (have_rows('faq')) {
                        the_row();
                    ?>
                    <div class="row">
                        <div class="col-xs-12 col-md-12"><hr></div>
                        <div class="col-xs-12 col-md-12">
                            <h4 class="blue-text"><?php echo get_sub_field('question');?></h4>
                            <p><?php echo get_sub_field('answer');?></p>
                        </div>
                    </div>                    
                    <?php }?>
                </div>
            </div>
        </div>
    </div>        
    <?php if($count < $num_posts):?>
    <div class="container">
        <div class="row-gap-small"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="container custom-containter">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <hr class="staff-divider">
                        </div>                                
                    </div>                            
                </div>                        
            </div>                    
        </div>                
    </div>            
    <?php
    endif;
    endwhile;
    endif;
    ?>

    <?php
        /*
        $wp_query = new WP_Query();
        $param = array(
            'post_type' => 'company-staff',
            'order' => 'ASC',
            'orderby' => 'meta_value',
            'meta_key' => 'staff_number',
            'posts_per_page' => '-1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'staffcat',
                    'field' => 'slug',
                    'terms' => 'staff-works'
                )
            )
        );
        
        $wp_query = new WP_Query();
        $param = array(
            'post_type' => 'company-staff',
            'order' => 'ASC',
            'orderby' => 'meta_value',
            'meta_key' => 'staff_number',
            'posts_per_page' => '-1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'staffcat',
                    'field' => 'slug',
                    'terms' => 'other-staff'
                )
            )
        );
        */
    ?>
    <div class="row-gap-huge"></div>
</div>

<?php get_template_part('part-contact') ?>
</div>


<?php
get_footer();
?>