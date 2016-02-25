<?php
/*
 * Author: KhangLe
 * Template Name: Link
 * 
 */
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php wp_list_pages();?>
        </div>
    </div>
</div>

<?php get_footer(); ?>