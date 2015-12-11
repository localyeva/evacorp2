<?php
/*
  Template Name: Archives
 */
get_header();
?>

<div id="container">
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