<?php
/*
 * Author: KhangLe
 * Template Name: Index
 * 
 */
get_header();
?>
<!--//slide-->
<div class="header-banner">
    <div class="container text-center">
        <h2><?php echo get_slide_text() ?></h2>
    </div>
</div>
<!--//slide End-->
<!--//Why-->
<?php
$available_why = get_why_div();
if ($available_why == 1) {
    ?>
    <div class="container-fluid header-why">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 why-text-left">
                    <div class="row-gap-big"></div>
                    <h2>Why is<br> Evolable Asia<br> chosen<br> in Vietnam</h2>
                    <div class="text">
                        Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit,<br> sed do eiusmod
                    </div>
                </div>
                <div class="col-xs-12 col-md-9 why-text-right">
                    <div class="row-gap-big"></div>
                    <h3></h3>
                    <div class="text2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="text-left">
                        <button class="btn btn-slim ">Demo test</button>
                    </div>
                </div>
            </div>
            <div class="row-gap-medium"></div>
        </div>
    </div>
    <?php
}
?>
<!--//Why End-->
<!--//Services-->
<?php
$available_service = get_services_div();
if ($available_service == 1) {
    ?>
    <div class="container-fluid header-service">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center"><?php echo get_intro_text_1() ?></h1>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => 1,
                'orderby' => array('date' => 'ASC'),
            );
            $loop = new WP_Query($args);
            ?>
            <?php
            if ($loop->have_posts()):
                $num_posts = count($loop->posts);
                ?>
                <?php while ($loop->have_posts()): $loop->the_post(); ?>
                    <div class="col-xs-12 col-md-6 no-padding-lr sv-main-block wow fadeInRight">
                        <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                        <div class="caption full-width center">
                            <h2 class="sv-main-title">
                                <a class="alnk" href="<?php echo get_field('redirect_url') ?>"><?php the_title() ?></a>
                                <div class="intro"><?php echo get_field('short_description') ?></div>
                            </h2>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>
            <div class="col-xs-12 col-md-6 list">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'service',
                        'posts_per_page' => 5,
                        'orderby' => array('date' => 'ASC'),
                    );
                    $loop = new WP_Query($args);
                    $i = 1;
                    ?>
                    <?php
                    if ($loop->have_posts()):
                        $num_posts = count($loop->posts);
                        ?>
                        <?php while ($loop->have_posts()): $loop->the_post(); ?>
                            <?php if ($i > 1 AND $i < 4) { ?>
                                <div class="col-xs-12 col-md-6 no-padding-lr wow fadeInDown">
                                    <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                                    <div class="caption full-width center">
                                        <h2 class="sv-title">
                                            <a class="alnk" href="<?php echo get_field('redirect_url') ?>"><?php the_title() ?></a>
                                            <div class="intro"><?php echo get_field('short_description') ?></div>
                                        </h2>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php $i++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata() ?>
                </div>
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'service',
                        'posts_per_page' => 5,
                        'orderby' => array('date' => 'ASC'),
                    );
                    $loop = new WP_Query($args);
                    $j = 1;
                    ?>
                    <?php
                    if ($loop->have_posts()):
                        $num_posts = count($loop->posts);
                        ?>
                        <?php while ($loop->have_posts()): $loop->the_post(); ?>
                            <?php if ($j >= 4 AND $j < 6) { ?>
                                <div class="col-xs-12 col-md-6 no-padding-lr wow fadeInUp">
                                    <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                                    <div class="caption full-width center">
                                        <h2 class="sv-title">
                                            <a class="alnk" href="<?php echo get_field('redirect_url') ?>"><?php the_title() ?></a>
                                            <div class="intro"><?php echo get_field('short_description') ?></div>
                                        </h2>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php $j++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata() ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<!--//Services End-->
<!--//Partner-->
<?php
$available_partner = get_partner_div();
if ($available_partner == 1) {
    ?>
    <div class="container-fluid header-partners wow fadeInRight">
        <div class="container content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="partners">
                        <div class="row">
                            <?php
                            $args = array(
                                'post_type' => 'recommend',
                                'posts_per_page' => -1,
                                'orderby' => array('date' => 'DESC'),
                            );
                            $loop = new WP_Query($args);

                            $recommend_body = '';
                            if ($loop->have_posts()) {
                                $i = 1;
                                $group = 0;
                                $row = 0;
                                $num_posts = count($loop->posts);

                                while ($loop->have_posts()) {
                                    $loop->the_post();
                                    $recommend_gap = '';
                                    $recommend_gap .= '<div class="row-gap-small"></div>';

                                    if ($i % 8 == 1) {
                                        $recommend_body .= '<div class="row">';
                                        $row++;
                                    }

                                    if ($i % 4 == 1) {
                                        $recommend_body .= '<div class="col-xs-12 col-md-6 first-group">';
                                        $group++;
                                    }

                                    $recommend_body .= '<div class="col-xs-3">';
                                    $recommend_body .= '<img src="' . get_field('comp_logo') . '" alt="" class="img-responsive full-width">';
//                            $recommend_body .= '<p>' . get_the_ID() . '</p>';
                                    $recommend_body .= '</div>';

                                    if ($i % 4 == 0) {
                                        $recommend_body .= '</div>';
                                        $recommend_body .= '<div class="row-gap-small"></div>';
                                    }

                                    if ($i % 8 == 0) {
                                        $recommend_body .= '</div>';
                                    }

                                    if ($i == $num_posts) {
                                        $recommend_body .= '</div>';
                                        $recommend_body .= '</div>';
                                    }
                                    $i++;
                                }
                            }
                            ?>
                            <?php wp_reset_postdata() ?>
                            <?php echo $recommend_body; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<!--//Partner End-->
<!--//About-->
<?php
$available_about = get_about_div();
if ($available_about == 1) {
    ?>
    <div class="container-fluid text-center header-about">
        <h1><?php echo get_about_text(); ?></h1>
        <div class="row effects">
            <?php
            $time = 0;
            $args = array(
                'post_type' => 'company-general',
                'posts_per_page' => -1,
                'orderby' => array('date' => 'DESC'),
            );
            $loop = new WP_Query($args);
            ?>
            <?php
            if ($loop->have_posts()):
                $num_posts = count($loop->posts);
                ?>
                <?php while ($loop->have_posts()): $loop->the_post(); ?>
                <?php if($time == 2){$time = 0;}?>
                    <div class="col-xs-6 col-md-3 no-padding-lr about-main-block wow fadeInUp" data-wow-delay="<?php echo $time;?>s">
                        <a class="about-hover" href="<?php echo get_field('link') ?>">
                            <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                            <div class="caption full-width left">
                                <h2 class="about-main-title">
                                    <p class="alnk"><?php the_title() ?></p>
                                    <div class="intro"><?php echo get_field('description') ?></div>
                                </h2>
                            </div>
                        </a>
                    </div>
                <?php $time+= 0.5;?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>
        </div>
    </div>
    <?php
}
?>
<!--//About End-->
<!--//News-->
<?php
$available_new = get_new_div();
if ($available_new == 1) {
    ?>
    <div class="container-fluid block-center header-news">
        <h1 class="text-center"><?php echo get_new_text(); ?></h1>
        <div class="container">
            <div class="row">
                <?php
                $time2 = 0;
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 3,
                    'orderby' => array('date' => 'DESC'),
                );
                $loop = new WP_Query($args);
                ?>
                <?php
                if ($loop->have_posts()):
                    $num_posts = count($loop->posts);
                    ?>
                    <?php while ($loop->have_posts()): $loop->the_post(); ?>
                        <div class="col-xs-12 col-md-4 news-main-block wow fadeInUp" data-wow-delay="<?php echo $time2;?>s">
                            <a class="news-hover" href="<?php echo get_field('link') ?>">
                                <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                                <div class="caption full-width left">
                                    <div class="news-main-title">
                                        <span class="date-text"><?php the_date('Y.m.d'); ?></span><span class="categories-text">demo</span>
                                    </div>
                                    <h2 class="intro more"><?php the_title(); ?></h2>
                                </div>
                            </a>
                        </div>
                    <?php $time2+= 0.5;?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata() ?>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center">
                    <button class="btn btn-slim "><span class="glyphicon glyphicon-plus"></span>View All</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<!--//News End-->
<!--//Blog-->
<?php
$available_blog = get_blog_div();
if ($available_blog == 1) {
    ?>
    <div class="container-fluid block-center header-news">
        <h1 class="text-center"><?php echo get_blog_text(); ?></h1>
        <div class="container">
            <div class="row">
                <?php
                $time3 = 0;
                $args = array(
                    'post_type' => 'blog',
                    'posts_per_page' => 3,
                    'orderby' => array('date' => 'DESC'),
                );
                $loop = new WP_Query($args);
//                var_dump($loop);exit;
                ?>
                <?php
                if ($loop->have_posts()):
                    $num_posts = count($loop->posts);
                    ?>
                    <?php while ($loop->have_posts()): $loop->the_post(); ?>
                        <div class="col-xs-12 col-md-4 news-main-block wow fadeInUp" data-wow-delay="<?php echo $time3;?>s">
                            <a class="news-hover" href="<?php echo get_field('link') ?>">
                                <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                                <div class="caption full-width left">
                                    <div class="news-main-title">
                                        <span class="date-text"><?php the_date('Y.m.d'); ?></span><span class="categories-text">demo</span>
                                    </div>
                                    <h2 class="intro more"><?php the_title(); ?></h2>
                                </div>
                            </a>
                        </div>
                    <?php $time3+= 0.5;?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata() ?>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center">
                    <button class="btn btn-slim "><span class="glyphicon glyphicon-plus"></span>View All</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<!--//Blog End-->
<!--//Articles-->
<?php
$available_article = get_article_div();
if ($available_article == 1) {
    ?>
    <div class="container-fluid header-articles">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <img src="<?php echo get_template_directory_uri() ?>/img/26.png" alt="" class="img-responsive full-width">
                </div>
                <div class="col-xs-12 col-md-8">
                    <h3>高度成長を遂げるベトナムでのラボ型開発・BPOの魅力</h3>
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="small">ポストチャイナとして注目を浴びているベトナムは、この数年間5〜10％前後の高い水準で高度経済成長を遂げています。また、その中でベトナムが国を挙げてIT技術者の育成をし、豊富なベトナム人IT技術者がいることもあり、オフショア開発拠点としてベトナムへ進出するIT企業が急増しています。ただし、従来のオフショア開発だと安価な労働力で開発することができても、品質や納期などで問題が起こることがありました。しかし、エボラブルアジアが提案する「ラボ型オフショア開発」であれば、その問題を解決することができます。</p>
                        </div>
                        <div class="col-xs-6">
                            <p class="small">ラボ型オフショア開発とは、日本側からマネージャーを一人ベトナムに在中してもらい、ベトナム人スタッフをマネジメントするスタイルのことを言います。また、同じスタイルでBPO（ビジネスプロセスアウトソーシング／業務請負）としてもベトナムは魅力的です。安価で勤勉なベトナム人労働力が、情報入力や画像加工、Webサイトの更新などを行うことにより、大幅なコストダウンが可能になります。現在エボラブルアジアでは、400名のベトナム人技術者や日本語を理解出来るスタッフがラボ型オフショア開発、BPOでさまざなな会社のビジネスに貢献しています。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-gap-medium"></div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <h3>高度成長を遂げるベトナムでのラボ型開発・BPOの魅力</h3>
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="small">ポストチャイナとして注目を浴びているベトナムは、この数年間5〜10％前後の高い水準で高度経済成長を遂げています。また、その中でベトナムが国を挙げてIT技術者の育成をし、豊富なベトナム人IT技術者がいることもあり、オフショア開発拠点としてベトナムへ進出するIT企業が急増しています。ただし、従来のオフショア開発だと安価な労働力で開発することができても、品質や納期などで問題が起こることがありました。しかし、エボラブルアジアが提案する「ラボ型オフショア開発」であれば、その問題を解決することができます。</p>
                        </div>
                        <div class="col-xs-6">
                            <p class="small">ラボ型オフショア開発とは、日本側からマネージャーを一人ベトナムに在中してもらい、ベトナム人スタッフをマネジメントするスタイルのことを言います。また、同じスタイルでBPO（ビジネスプロセスアウトソーシング／業務請負）としてもベトナムは魅力的です。安価で勤勉なベトナム人労働力が、情報入力や画像加工、Webサイトの更新などを行うことにより、大幅なコストダウンが可能になります。現在エボラブルアジアでは、400名のベトナム人技術者や日本語を理解出来るスタッフがラボ型オフショア開発、BPOでさまざなな会社のビジネスに貢献しています。</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <img src="<?php echo get_template_directory_uri() ?>/img/26.png" alt="" class="img-responsive full-width">
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<!--//Articles End-->
<?php get_footer(); ?>