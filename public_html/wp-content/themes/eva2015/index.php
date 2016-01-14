<?php
/*
 * Author: KhangLe
 * Template Name: Index
 *
 */
get_header();
?>

<?php
$args = array(
    'post_type' => 'home-slider',
    'posts_per_page' => 1,
    'orderby' => array('date' => 'DESC'),
);
$loop = new WP_Query($args);
$home_slider = array();
if ($loop->have_posts()) {
    while ($loop->have_posts()) {
        $loop->the_post();
        while (have_rows('images')) {
            the_row();
            $home_slider[]['image'] = get_sub_field('image');
        }
    }
}
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <div class="overlay"></div>
    
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < count($home_slider); $i++): ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class="<?php echo ($i == 0) ? 'active' : '' ?>"></li>
        <?php endfor; ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php for ($i = 0; $i < count($home_slider); $i++): ?>
            <div class="item <?php echo ($i == 0) ? 'active' : '' ?>">                
                <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $home_slider[$i]['image'] ?>"></div>
            </div>
        <?php endfor; ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    <div class="carousel-caption">
        <div><h2><?php echo get_slide_text() ?></h2></div>
    </div>
</div>
<!--//slide End-->
<!--//Why-->
<?php
$available_why = get_why_div();
if ($available_why == 1) {
    ?>
    <div class="container-fluid header-why">
        <div class="row">
            <div class="container">
                <div class="col-md-4 hidden-xs hidden-sm why-text-left text-left">
                    <div class="row-gap-big"></div>
                    <h2>Why is<br> EVOLABLE ASIA 12<br> chosen<br> in Vietnam?</h2>
                    <div class="text-small">
                        なぜエボラブルアジアが<br/>ベトナムのラボ型開発で<br/>選ばれるのか？
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 visible-xs visible-sm why-text-left text-center">
                    <h2>Why is EVOLABLE ASIA 34<br> chosen in Vietnam?</h2>
                    <div class="text">
                        なぜエボラブルアジアが<br/>ベトナムのラボ型開発で<br/>選ばれるのか？
                    </div>
                </div>
                <div class="col-md-8 hidden-xs hidden-sm why-text-right">
                    <div class="row-gap-big"></div>
                    <h3>私たちは経験豊富なエンジニアの採用に自信があります。<br/>御社の開発チームを迅速に構築します。</h3>
                    <div class="row-gap-small"></div>
                    <div class="text-small">2012年の設立以降、今では東南アジア地域で日系最大規模のラボ型オフショア開発企業としてさらに成長を続けるEVOLABLE ASIA CO., LTD。その成長の背景には、「高品質な人材の提供」と「安心のサポートシステム」があります。EVOLABLE ASIA CO., LTDでは質が高く幅広い技術者を豊富に確保し、最適な環境で終業してもらえるノウハウと実績を持っています。また日本人ラボマネージャーが常駐し、初めてベトナム進出する企業も、より安心して業務をスタートできるようなサポートシステムが整っています。詳しくはこちらのページをご覧ください。
                    </div>
                    <div class="">
                        <a href="<?php echo home_url('company/reason/') ?>" class="btn btn-slim">
                            <i class="fa fa-angle-right"></i>エボラブルアジアが選ばれる理由
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 visible-xs visible-sm why-text-right text-center">
                    <div class="row-gap-big"></div>
                    <h2>私たちは経験豊富なエンジニアの採用に自信があります。<br/>御社の開発チームを迅速に構築します。</h2>
                    <div class="row-gap-small"></div>
                    <div class="text-small">2012年の設立以降、今では東南アジア地域で日系最大規模のラボ型オフショア開発としてさらに成長を続けるEVOLABLE ASIA CO., LTD。その成長の背景には、「高品質な人材の提供」と「安心のサポートシステム」があります。EVOLABLE ASIA CO., LTDでは質が高く幅広い技術者を豊富に確保し、最適な環境で終業してもらえるノウハウと実績を持っています。また日本人ラボマネージャーが常駐し、初めてベトナム進出する企業も、より安心して業務をスタートできるようなサポートシステムが整っています。詳しくはこちらのページをご覧ください。
                    </div>
                    <div class="text-center">
                        <a href="<?php echo home_url('company/reason/') ?>" class="btn btn-slim">
                            <i class="fa fa-angle-right"></i>エボラブルアジアが選ばれる理由
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-gap-medium"></div>
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
    <div id="header-service" class="container-fluid header-service">
        <div class="row service-bg">
            <div class="col-xs-12">
                <h1 class="text-center"><?php echo get_intro_text_1() ?></h1>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'top-service',
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
                        <a class="alnk" href="<?php echo home_url(get_field('redirect_url')) ?>">
                            <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                            <div class="caption-eva" ></div>
                            <div class="caption full-width center">
                                <h2 class="sv-title">
                                    <?php the_title() ?>
                                    <div class="intro"><?php echo get_field('short_description') ?></div>
                                </h2>
                            </div>
                        </a>                                        
                    </div> 

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>
            <div class="col-xs-12 col-md-6 list">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'top-service',
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
                                    <a class="alnk" href="<?php echo home_url(get_field('redirect_url')) ?>">
                                        <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                                        <div class="caption-eva" ></div>
                                        <div class="caption full-width center">
                                            <h2 class="sv-title">
                                                <?php the_title() ?>
                                                <div class="intro"><?php echo get_field('short_description') ?></div>
                                            </h2>
                                        </div>
                                    </a>                                        
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
                        'post_type' => 'top-service',
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
                                    <a class="alnk" href="<?php echo home_url(get_field('redirect_url')) ?>">
                                        <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                                        <div class="caption-eva" ></div>
                                        <div class="caption full-width center">
                                            <h2 class="sv-title">
                                                <?php the_title() ?>
                                                <div class="intro"><?php echo get_field('short_description') ?></div>
                                            </h2>
                                        </div>
                                    </a>                                        
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
    <div class="container-fluid header-partners">
        <div class="container content wow fadeInRight">
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
        <div class="row about-bg">
            <div class="col-xs-12">
                <h1 class="text-center"><?php echo get_about_text(); ?></h1>
            </div>
        </div>
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
                    <?php
                    if ($time == 2) {
                        $time = 0;
                    }
                    ?>
                    <div class="col-xs-12 col-md-3 no-padding-lr about-main-block wow fadeInUp" data-wow-delay="<?php echo $time; ?>s">
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
                    <?php $time+= 0.5; ?>
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
    <div class="container-fluid block-center header-news home-news-bg">
        <h1 class="text-center"><?php echo get_new_text(); ?></h1>
        <div class="container">
            <div class="row">
                <?php
                $terms = get_terms('news-type', 'hide_empty=0');
                foreach ($terms as $term) {
                    $all_terms[] = $term->name;
                }
                $bg_color = array('categories-pink', 'categories-yellow', 'categories-blue');
                $class_category = array_combine($all_terms, $bg_color);
                //
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
                    <?php
                    while ($loop->have_posts()): $loop->the_post();
                        $postId = get_the_ID();
                        $terms = get_the_terms($postId, 'news-type');
                        $categories = array();
                        if (is_array($terms) && count($terms) > 0) {
                            foreach ($terms as $term) {
                                $categories[] = $term->name;
                            }
                        }
                        ?>
                        <div class="col-xs-12 col-md-4 news-main-block wow fadeInUp" data-wow-delay="<?php echo $time2; ?>s">
                            <a class="news-hover" href="<?php the_permalink() ?>">
                                <img src="<?php echo get_field('image') ?>" alt="" style="width:100%; height:auto;">
                                <div class="caption-eva" ></div>
                                <span class="overlay"></span>
                                <div class="caption left">
                                    <div class="news-main-title">
                                        <span class="date-text"><?php the_date('Y.m.d'); ?></span>
                                        <?php if (count($categories) > 0) { ?>
                                            <span class="categories-text <?php echo $class_category[$term->name] ?>"><?php echo implode(', ', $categories); ?></span>
                                        <?php } ?>
                                    </div>
                                    <h2 class="intro more"><?php the_title(); ?></h2>
                                </div>
                            </a>
                        </div>
                        <?php $time2+= 0.5; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata() ?>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center">
                    <a href="<?php echo home_url('news') ?>">
                        <button class="btn btn-slim "><span class="glyphicon glyphicon-plus"></span>View All</button>
                    </a>
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
    <div class="container-fluid block-center header-news home-blog-bg" style="display:none">
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
    ?>
    <?php
    if ($loop->have_posts()):
        $num_posts = count($loop->posts);
        ?>
        <?php while ($loop->have_posts()): $loop->the_post(); ?>
                                    <div class="col-xs-12 col-md-4 no-padding-lr news-main-block wow fadeInUp" data-wow-delay="<?php echo $time3; ?>s">
                                        <a class="news-hover" href="<?php echo get_field('link') ?>">
                                            <img src="<?php echo get_field('image') ?>" alt="" class="img-responsive full-width">
                                            <div class="caption-eva" ></div>
                                            <span class="overlay"></span>
                                            <div class="caption full-width left">
                                                <div class="news-main-title">
                                                    <span class="date-text"><?php the_date('Y.m.d'); ?></span><span class="categories-text">demo</span>
                                                </div>
                                                <h2 class="intro more"><?php the_title(); ?></h2>
                                            </div>
                                        </a>
                                    </div>
            <?php $time3+= 0.5; ?>
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

<div class="container-fluid block-center vff-bg">
    <div class="container">
        <div class="row-gap-big"></div>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="row-gap-medium"></div>
                <h3>EVOLABLE ASIAはサッカーベトナム代表の公式スポンサーです。</h3>
                <p>サッカーベトナム代表(VFF)とスポンサー契約を結んだ経緯について詳しくはこちらから。</p>
            </div>
            <div class="col-xs-12 col-md-4">
                <a href="<?php echo home_url('vff') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/top-vff-team.png" alt="" class="img-responsive"></a>
            </div>

        </div>
        <div class="row-gap-big"></div>
    </div>
</div>
<!--//Articles-->
<?php
$available_article = get_article_div();
if ($available_article == 1) {
    ?>
    <div class="container-fluid header-articles">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <img src="<?php echo get_template_directory_uri() ?>/img/b-news-1.png" alt="" class="img-responsive full-width">
                </div>
                <div class="col-xs-12 col-md-8">
                    <h3>高度成長を遂げるベトナムでのラボ型開発・BPOの魅力</h3>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="small">ポストチャイナとして注目を浴びているベトナムは、この数年間5〜10％前後の高い水準で高度経済成長を遂げています。また、その中でベトナムが国を挙げてIT技術者の育成をし、豊富なベトナム人IT技術者がいることもあり、オフショア開発拠点としてベトナムへ進出するIT企業が急増しています。ただし、従来のオフショア開発だと安価な労働力で開発することができても、品質や納期などで問題が起こることがありました。しかし、エボラブルアジアが提案する「ラボ型オフショア開発」であれば、その問題を解決することができます。</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <p class="small">ラボ型オフショア開発とは、日本側からマネージャーを一人ベトナムに在中してもらい、ベトナム人スタッフをマネジメントするスタイルのことを言います。また、同じスタイルでBPO（ビジネスプロセスアウトソーシング／業務請負）としてもベトナムは魅力的です。若く勤勉なベトナム人労働力が、情報入力や画像加工、Webサイトの更新などを行うことにより、長期的に安定した運用およびコストダウンが可能になります。現在エボラブルアジアでは、約500名のベトナム人技術者や日本語を理解出来るスタッフがラボ型オフショア開発、BPOでさまざまな会社のビジネスに貢献しています。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-gap-medium"></div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <h3>親日国であり、勤勉で有名なベトナム</h3>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="small">ベトナム人は他のアジアの国と比べて親日で勤勉と言われています。人気の高い就業先としても、日系企業は上位にランクインされます。親日であるので、日本語を勉強しているベトナム人スタッフも多く、日本企業がベトナムに進出したとしても、ベトナム人スタッフと比較的早く密接なコミュニケーションを取ることが可能です。また、仕事に対する姿勢は真面目で、言われてから動くのではなく、自発的に仕事をするベトナム人スタッフも少なくはありません。</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <p class="small">技術や知識の習得にも意欲があり、仕事が終わってから、新しい技術を学ぶためにスクールを通うスタッフもいます。海外進出の第一歩としてベトナムを選ぶことは、決して間違った選択ではなく、御社の海外進出をスムーズに進めることが可能になります。エボラブルアジアがラボ型オフショア開発、BPO拠点としてベトナムを選んでいる理由は明確で、「他の国と検証した結果、ベトナムが拠点として最適だと判断した」からです。</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <img src="<?php echo get_template_directory_uri() ?>/img/b-news-2.png" alt="" class="img-responsive full-width">
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<!--//Articles End-->
<?php get_footer(); ?>