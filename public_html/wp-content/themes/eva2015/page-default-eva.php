<?php
/*
 * Author: KhangLe
 * Template Name: Default Eva
 * 
 */
get_header();
?>
<style>
    .video-container {
        height: 0;
        overflow: hidden;
        padding-bottom: 56.25%;
        padding-top: 30px;
        position: relative;
    }
    .video-container iframe, .video-container object, .video-container embed {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
</style>
<div class="page-wrap">

    <?php echo $post->post_content; ?>

    <?php get_template_part('part', 'contact'); ?>

</div>
<?php get_footer() ?>