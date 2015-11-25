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
                <ul>
                    <li><a href="/company">company</a>
                        <ul>
                            <li><a href="/company/greeting">greeting</a></li>
                            <li><a href="/company/circle">circle</a></li>
                            <li><a href="/company/reason">reason</a></li>
                            <li><a href="/company/history">history</a></li>
                            <li><a href="/company/profile">profile</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact">contact</a></li>
                    <li><a href="/service-2/bpo-result/">BPO</a></li>
                    <li><a href="/company">company</a></li>
                </ul>
            </div>
        </div>
        <div class="row-gap-huge"></div>
    </div>    
</section>

<?php get_footer(); ?>