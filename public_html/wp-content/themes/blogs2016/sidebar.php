<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 hidden-xs index-right padding-lr">

    <?php
    $args = array(
        'post_type' => 'banner',
        'posts_per_page' => 1,
        'orderby' => array('date' => 'DESC'),
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()):
        while ($loop->have_posts()):
            $loop->the_post();
            while (have_rows('images')):
                the_row();
                $size = 'large';
                $image = get_sub_field('image');
                $alt = $image['alt'];
                $title = $image['title'];
                ?>
                <a href="<?php echo get_sub_field('url') ?>"><img src="<?php echo $image['sizes'][$size] ?>" alt="<?php echo $alt ?>" title="<?php echo $title ?>" class="img-responsive" /></a>
                    <?php
                endwhile;
            endwhile;
        endif;
        ?>

    <!--
    <h5>週間人気の記事ランキング</h5>
    <div class="index-right-table">
        <div class="index-right-row">
            <div class="index-right-cell-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2">
                <a href="#">ベトナム人スタッフが紹介する、ハノイの美味しくて安い料理</a><br/>
                <span>90 views | under </span><a href="#" class="link">ナレッジ</a>
            </div>
        </div>
        <div class="index-right-row">
            <div class="index-right-cell-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2">
                <a href="#">ベトナム人スタッフが紹介する、ハノイの美味しくて安い料理</a><br/>
                <span>90 views | under </span><a href="#" class="link">ナレッジ</a>
            </div>
        </div> 
        <div class="index-right-row">
            <div class="index-right-cell-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2">
                <a href="#">ベトナム人スタッフが紹介する、ハノイの美味しくて安い料理</a><br/>
                <span>90 views | under </span><a href="#" class="link">ナレッジ</a>
            </div>
        </div>
        <div class="index-right-row">
            <div class="index-right-cell-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2">
                <a href="#">ベトナム人スタッフが紹介する、ハノイの美味しくて安い料理</a><br/>
                <span>90 views | under </span><a href="#" class="link">ナレッジ</a>
            </div>
        </div>
        <div class="index-right-row">
            <div class="index-right-cell-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2">
                <a href="#">ベトナム人スタッフが紹介する、ハノイの美味しくて安い料理</a><br/>
                <span>90 views | under </span><a href="#" class="link">ナレッジ</a>
            </div>
        </div>  
        <div class="index-right-row">
            <div class="index-right-cell-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2">
                <a href="#">ベトナム人スタッフが紹介する、ハノイの美味しくて安い料理</a><br/>
                <span>90 views | under </span><a href="#" class="link">ナレッジ</a>
            </div>
        </div>
        <div class="index-right-row">
            <div class="index-right-cell-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2">
                <a href="#">ベトナム人スタッフが紹介する、ハノイの美味しくて安い料理</a><br/>
                <span>90 views | under </span><a href="#" class="link">ナレッジ</a>
            </div>
        </div> 
        <div class="index-right-row">
            <div class="index-right-cell-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2">
                <a href="#">ベトナム人スタッフが紹介する、ハノイの美味しくて安い料理</a><br/>
                <span>90 views | under </span><a href="#" class="link">ナレッジ</a>
            </div>
        </div>
        <div class="index-right-row">
            <div class="index-right-cell-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2">
                <a href="#">ベトナム人スタッフが紹介する、ハノイの美味しくて安い料理</a><br/>
                <span>90 views | under </span><a href="#" class="link">ナレッジ</a>
            </div>
        </div>
        <div class="index-right-row">
            <div class="index-right-cell-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2">
                <a href="#">ベトナム人スタッフが紹介する、ハノイの美味しくて安い料理</a><br/>
                <span>90 views | under </span><a href="#" class="link">ナレッジ</a>
            </div>
        </div>                                                                                                                                         
    </div>
    <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/JLIT.jpg" alt="EVOLABLE ASIA" class="img-responsive" width="100%"/></a>
    <h5>週間人気の記事ランキング</h5>
    <ul>
        <li><a href="#">Uncategorized</a> (2)</a></li>
        <li><a href="#">お客様の声</a> (14)</li>
        <li><a href="#">インタビュー</a> (14)</li>
        <li><a href="#">インターン</a> (18)</li>
        <li><a href="#">ナレッジ </a> (2)</li>
        <li><a href="#">ニュース </a> (5)</li>
        <li><a href="#">ベトナム生活情報</a> (20)</li>
        <li><a href="#">ＪＬＩＣ</a> (7)</li>
    </ul>
    <h5>新しい記事</h5>
    <div class="index-right-table">
        <div class="index-right-row">
            <div class="index-right-cell-1-border"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2-border">
                <a href="#" class="link-bold">社長が教える「ラボ型」オフショア開発を選ぶ際に見るべき5つのポイント</a><br/>
            </div>
        </div>
        <div class="index-right-row">
            <div class="index-right-cell-1-border"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2-border">
                <a href="#" class="link-bold">社長が教える「ラボ型」オフショア開発を選ぶ際に見るべき5つのポイント</a><br/>
            </div>
        </div>
        <div class="index-right-row">
            <div class="index-right-cell-1-border"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2-border">
                <a href="#" class="link-bold">社長が教える「ラボ型」オフショア開発を選ぶ際に見るべき5つのポイント</a><br/>
            </div>
        </div>
        <div class="index-right-row">
            <div class="index-right-cell-1-border"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2-border">
                <a href="#" class="link-bold">社長が教える「ラボ型」オフショア開発を選ぶ際に見るべき5つのポイント</a><br/>
            </div>
        </div>
        <div class="index-right-row">
            <div class="index-right-cell-1-border"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pho2-100x100.png" alt="EVOLABLE ASIA" class="img-responsive" width="90%"/></div>
            <div class="index-right-cell-2-border">
                <a href="#" class="link-bold">社長が教える「ラボ型」オフショア開発を選ぶ際に見るべき5つのポイント</a><br/>
            </div>
        </div>                                                                                    
    </div> 
    -->                       
</div>  