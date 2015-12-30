<?php
/*
 * Author: KhaCao
 * Template Name: faq
 * 
 */
get_header();
?>
<div class="container faq-content">
    <div class="row faq-content-1 center">
        <div class="faq-content-1-title">
            <div class="faq-content-1-title-row">
                <div class="faq-content-1-title-cell">
                    <span>よくある</span><span class="color-red">質問</span>
                </div>                             
            </div>
        </div>   
        <h2>faq</h2>    
    </div> 
    <div class="row-gap-medium"></div>

    <div class="row faq-content-2 center"></div> 
    <div class="row faq-content-3 left">

        <?php
        $args = array(
            'post_type' => 'faqrecruit',
            'orderby' => 'id',
            'order' => 'ASC',
            'hide_empty' => 0,
            'taxonomy' => 'faqcat2',
            'pad_counts' => false);

        $categories = get_categories($args);
        $i = 0;
        foreach ($categories as $cat) {
            //var_dump($cat);
            ?>  
            <?php
            if ($i % 2 == 0) {
                echo "<div style='clear:both;'></div>";
            }
            ?>        
        
        <div class="col-xs-12 col-sm-6 col-dm-6 col-lg-6">
            <h1><span>+</span><a href="#anchor<?php echo $cat->term_id; ?>">インターンについて</a></h1>
            <ul>

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

                <li>
                    <span class="glyphicon glyphicon-triangle-right padding-r" aria-hidden="true"></span>
                    <a href="#<?php echo $post->ID; ?>">
                        <?php
                        if (mb_strlen($post->post_title) > 30) {
                            $cont = mb_substr($post->post_title, 0, 30);
                            echo strip_tags($cont . '･･･');
                        } else {
                            echo strip_tags($post->post_title);
                        }
                        ?>                        
                    </a>
                </li>
                        <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>
            </ul>                                     
        </div>
        <?php
        $i ++;
    }
    ?>
             
    </div> 
    <div class="row faq-content-4 left">
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
        <h1 id="anchor<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></h1>
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
        <h2 id="<?php echo $post->ID; ?>"><?php the_title(); ?></h2>
        <p>
            <?php the_content(); ?>
        </p>
        
<?php
            endwhile;
        endif;
        wp_reset_query();
        ?>  
    <?php
    $i ++;
}
?>                                                                
    </div>
    <div class="row-gap-big"></div>                                       
</div>
<?php get_template_part('contact_box') ?>
<?php get_footer(); ?>