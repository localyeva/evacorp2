<?php
/*
 * Author: KhangLe
 * Template Name: Company-Profile
 *
 */
get_header();
?>
<div id="company-profile">
    <div class="head-banner-wrap blue">
                <h2>会社概要</h2>
    </div>
    <div class="container-fluid">
        <div class="container">
            <ul class="breadcrumb-cp hidden-sm hidden-xs">
                <li>
                    <a href="<?php echo home_url('') ?>">HOME</a> <span class="divider">></span>
                </li>
                <li>
                    <a href="<?php echo home_url('company') ?>">About EvolableAsia</a> <span class="divider">></span>
                </li>
                <li class="active">会社概要</li>
            </ul>
        </div>
    </div>
    <div class="container-fluid text-center" id="detail-contact">
        <div class="container detail">
            <h1>会社概要</h1>
            <div class="row" style="max-width:800px;margin:auto;">
                <div class="col-xs-12 infos no-padding-lr">
                    <?php
                    $wp_query = new WP_Query();
                    $param = array(
                    'post_type' => 'company-profile',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'posts_per_page' => '1',
                    'paged' => $paged,
                    );
                    $wp_query->query($param);
                    if ($wp_query->have_posts()):
                    while ($wp_query->have_posts()) : $wp_query->the_post();
                    ?>

                    <table class="table table-responsive table-striped profileTable detail-info">
                        <tr align="left">
                            <th>
                        <p>社名</p>
                        </th>
                        <td><?php the_field('name'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>所在地</p>
                        </th>
                        <td><?php the_field('location'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>電話番号(Phone)</p>
                        </th>
                        <td><?php the_field('phone_number'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>FAX</p>
                        </th>
                        <td><?php the_field('fax'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>役員</p>
                        </th>
                        <td><?php the_field('officer'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>設立</p>
                        </th>
                        <td><?php the_field('establishment'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>資本金</p>
                        </th>
                        <td><?php the_field('Capital'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>事業内容</p>
                        </th>
                        <td><?php the_field('desc'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>ライセンスNo.</p>
                        </th>
                        <td><?php the_field('licence'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>従業員数</p>
                        </th>
                        <td><?php the_field('staff'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>主要取引銀行</p>
                        </th>
                        <td><?php the_field('bank'); ?></td>
                        </tr>
                        <tr align="left">
                            <th>
                        <p>経営理念</p>
                        </th>
                        <td><?php the_field('principles'); ?></td>
                        </tr>
                    </table>

                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center" id="detail-contact">
        <div class="container detail">
            <h1>会社概要</h1>
            <div class="row" style="max-width:50%;margin:auto;">
                <div class="col-xs-12 evol module-eva">
                                    <div class="round1">
                                        <p class="header-his"><span>株式会社エボラブルアジア</span></p>
                                        <p class="img-his"><a href="<?php echo bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/37.png" alt="" class="img-responsive"></a></p>
                <!--------------------------------------------------------------------------------------------------------
                                        <p class="footer-his"><span>当社は2007年5月11日に設立しました。「One Asia」をビジョンに掲げ、アジアの様々なチャンスやリソースを繋ぐ架け橋となることを目指しています。 
                「オンライン旅行事業―日本で一番多く、人々の想いと空の旅を繋ぐ 」,
                「オフショア開発事業―アジアの優秀な人材と企業を繋ぐ」、
                「訪日インバウンド事業―アジアの人々の心に日本での感動を届ける」 
                この3つの事業を柱に独自性が高いビジネスモデルとベンチャー企業ならではのスピード感を強みに、高成長を続けています。</span></p>
                ------------------------------------------------------------------------------------------------------------>
                                    </div>
                                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center" id="profile">
        <div class="container">           
            <div class="row">
                <div class="col-xs-12">
                    <h1>関連会社</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 no-padding-lr evol module-eva">
                    <div class="round1">
                        <p class="header-his" style="height:80px;"><span>Soltec Investments Pte. Ltd.</span></p>
                        <p class="img-his"><a href="http://soltecvn.com/"><img src="<?php echo get_template_directory_uri() ?>/img/38.png" alt="" class="img-responsive"></a></p>
<!--------------------------------------------------------------------------------------------------------
                        <p class="footer-his"><span>当社は2007年5月11日に設立しました。「One Asia」をビジョンに掲げ、アジアの様々なチャンスやリソースを繋ぐ架け橋となることを目指しています。 
「オンライン旅行事業―日本で一番多く、人々の想いと空の旅を繋ぐ 」,
「オフショア開発事業―アジアの優秀な人材と企業を繋ぐ」、
「訪日インバウンド事業―アジアの人々の心に日本での感動を届ける」 
この3つの事業を柱に独自性が高いビジネスモデルとベンチャー企業ならではのスピード感を強みに、高成長を続けています。</span></p>

------------------------------------------------------------------------------------------------------------>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 no-padding-lr soltec module-eva">
                    <div class="round2">
                        <p class="header-his" style="height:80px;"><span>EVOLABLE ASIA SOLUTION & BUSINESS CONSULTANCY COMPANY LIMITED</span></p>
                        <p class="img-his"><a href="http://sbc.evolable.asia/"><img src="<?php echo get_template_directory_uri() ?>/img/SBC-Logo1.png" alt="" class="img-responsive"></a></p>
<!--------------------------------------------------------------------------------------------------------
                        <p class="footer-his"><span>Soltec Vietnam Companyは2010年9月17日に、（株）ソルテック工業の100％出資子会社として誕生致しました。弊社は、親会社である（株）ソルテック工業の長年培った経験と技術を生かし、ベトナムにおいて日本の品質基準に準じた各種プラント設備製作・据付工事・配管工事を展開させて頂きます。また独自の教育管理ノウハウを生かして、日本品質をベトナムで実現しております。そこで培われたマネジメントノウハウの一部はEVOLABLE ASIA CO.,LTD.にも生かされています。</span></p>
------------------------------------------------------------------------------------------------------------>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid text-center">
        <div class="container">
            <h1>オフィス紹介</h1>
            <div class="row center-block" style="max-width:700px;margin:auto;background:#f5f5f5;border:solid 1px #ccc;padding:15px 0px 15px 40px;">
                <?php
                $maps = array();
                $args = array(
                    'hide_empty' => 0
                );
                $terms = get_terms('company-tax', $args);
                foreach ($terms as $term) {
                ?>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding:15px 5px;text-align:left;">
                    <span style="color:#A0D8FB !important;" class="glyphicon glyphicon-menu-down gly-menu" aria-hidden="true"></span>
                    <a style="color:black;" href="#<?php echo $term->slug?>" data-goto="<?php echo $term->slug?>" style="text-transform: uppercase"><?php echo $term->name?></a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="container-fluid left">
    <?php
    foreach ($terms as $term) {
        if($term->slug != 'profile'){
    ?>
    <div class="container office-con" id="<?php echo $term->slug?>">
        <div class="row">
            <div class="col-xs-12 full-width no-padding-lr">
                <div class="bs-callout bs-callout-danger">
                    <h2><?php echo $term->name?></h2>
                </div>
                <div class="drop-line"></div>
            </div>
        </div>
        <div class="row">
        <?php
        $wp_query = new WP_Query();
        $param = array(
            'post_type' => 'company-activities',
            'order' => 'ASC',
            'tax_query' => array(
                    array(
                        'taxonomy' => 'company-tax',
                        'field' => 'slug',
                        'terms' => array($term->slug),
                    ),
                ),
            'posts_per_page' => '5',
        );
        $wp_query->query($param);
        if ($wp_query->have_posts()){
            $num_posts = count($wp_query->posts);
            if($num_posts > 5){
                $num_posts = 5;
            }
            $i=1;
            while ($wp_query->have_posts()){
                if($i>$num_posts){
                    break;
                }
        ?>

            <?php if($i==1){
                $i++;
                $wp_query->the_post();
                $maps[$term->term_id] = get_taxonomy_info(get_the_ID());
            ?>
            <div class="col-xs-12 col-md-6 no-padding-lr">
                <img src="<?php the_field('image')?>" alt="" class="img-responsive full-width main-img">
                <div class="caption full-width left office-main-block">
                    <h2><a href="#"><?php the_title()?></a></h2>
                    <div class="info"><?php the_field('description')?></div>
                </div>
            </div>
            <?php }?>
            <div class="col-xs-12 col-md-6 list">
            <?php if($i>1 && $i <= $num_posts){?>
                <?php if($i<=3){?>
                <div class="row">
                    <?php while($i<=3 && $wp_query->have_posts()){
                        $wp_query->the_post();
                    ?>
                    <div class="col-xs-12 col-md-6 ">
                        <img src="<?php the_field('image')?>" alt="" class="img-responsive full-width">
                        <div class="caption full-width left office-main-block">
                            <h2><a href="#"><?php the_title()?></a></h2>
                            <div class="info"><?php the_field('description')?></div>
                        </div>
                    </div>
                    <?php $i++;}?>
                </div>
                <?php }else{?>
                <div class="row">
                    <?php while($i<=5 && $wp_query->have_posts()){
                        $wp_query->the_post();
                    ?>
                    <div class="col-xs-12 col-md-6">
                        <img src="<?php the_field('image')?>" alt="" class="img-responsive full-width">
                        <div class="caption full-width left office-main-block">
                            <h2><a href="#"><?php the_title()?></a></h2>
                            <div class="info"><?php the_field('description')?></div>
                        </div>
                    </div>
                    <?php $i++;}?>
                </div>
            <?php }}?>
            </div>
        <?php
        }}
        wp_reset_postdata();
        ?>
        </div>
        <div class="row">
            <div class="col-xs-12 full-width no-padding-lr">
                <?php echo isset($maps[$term->term_id])?$maps[$term->term_id]:'';?>
                <div id="googleMap" style="width:1160px;height:400px;display: none"></div>
            </div>
        </div>
    </div>
    <?php
        }
    }
    ?>
    </div>

<?php get_template_part('part', 'contact'); ?>
</div>
<?php get_footer() ?>