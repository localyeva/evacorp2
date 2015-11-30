<?php
/*
 * Author: KhangLe
 * Template Name: Link
 * 
 */
get_header();
?>
<div class="header-banner">
    <div class="container text-center">
        <h2><?php echo get_slide_text() ?></h2>
    </div>
</div>
<div class="row-gap-huge"></div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                This is site map!!!
                <?php get_sidebar();?>
            </div>
        </div>
        <div class="row-gap-huge"></div>
    </div>    
</section>

<?php get_footer(); ?>