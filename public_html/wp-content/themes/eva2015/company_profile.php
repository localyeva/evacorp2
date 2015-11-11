<?php
/*
 * Author: KhangLe
 * Template Name: Company-Profile
 * 
 */
get_header();
?>
<div id="company-profile">
    <div class="header-com-banner">
        <div class="container text-center">
            <h2>Welcome Evolable Asia</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <ul class="breadcrumb-cp">
                <li>
                    <a href="#">HOME</a> <span class="divider">></span>
                </li>
                <li>
                    <a href="#">About EvolableAsia</a> <span class="divider">></span>
                </li>
                <li class="active">Company profile</li>
            </ul>
        </div>
    </div>

    <div class="container-fluid text-center">
        <div class="container">
            <h1>Demo Demo</h1>
            <ul class="menu-cp center-block">
                <li>
                    <span class="glyphicon glyphicon-menu-down gly-menu" aria-hidden="true"></span>
                    <a href="#">HOME</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-menu-down gly-menu" aria-hidden="true"></span>
                    <a href="#" data-goto="detail-contact">Detail Contact</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-menu-down gly-menu" aria-hidden="true"></span>
                    <a href="#" data-goto="history">History EvolableAsia</a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="container-fluid left">
    <?php
    
    $maps = array();
    $args = array(
        'hide_empty' => 0
    );
    $terms = get_terms('company-tax', $args);
    foreach ($terms as $term) {        
        if($term->slug != 'profile'){        
    ?>    
    <div class="container office-con">
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
            $i=1;
            while ($wp_query->have_posts()){
                if($i==5){                    
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
            <?php if($i>1){?>            
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
        }}?>
        </div>
        <div class="row">
            <div class="col-xs-12 full-width no-padding-lr">
                <?php echo $maps[$term->term_id];?>
                <div id="googleMap" style="width:1160px;height:400px;display: none"></div>
            </div>
        </div>
    </div>
    <?php
        }
    }
    ?>
    </div>
    <div class="container-fluid text-center" id="detail-contact">
        <div class="container detail">
            <h1>Demo Demo</h1>
            <div class="row">
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

                    <table class="table table-responsive table-striped profileTable detail-info" style="margin-bottom: 0px">
                        <tr>
                            <th>
                        <p>社名<span>Company name</span></p>
                        </th>
                        <td><?php the_field('name'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>所在地<span>Address</span></p>
                        </th>
                        <td><?php the_field('location'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>電話番号(Phone)</p>
                        </th>
                        <td><?php the_field('phone_number'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>FAX</p>
                        </th>
                        <td><?php the_field('fax'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>役員<span>Office</span></p>
                        </th>
                        <td><?php the_field('officer'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>設立<span>Date of establishment</span></p>
                        </th>
                        <td><?php the_field('establishment'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>資本金<span>Capital stock</span></p>
                        </th>
                        <td><?php the_field('Capital'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>事業内容<span>Business Description</span></p>
                        </th>
                        <td><?php the_field('desc'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>ライセンスNo.<span>License No.</span></p>
                        </th>
                        <td><?php the_field('licence'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>従業員数<span>Number of Employees</span></p>
                        </th>
                        <td><?php the_field('staff'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>主要取引銀行<span>Main Bank</span></p>
                        </th>
                        <td><?php the_field('bank'); ?></td>
                        </tr>
                        <tr>
                            <th>
                        <p>経営理念<span>Management Principles</span></p>
                        </th>
                        <td><?php the_field('principles'); ?></td>
                        </tr>
                    </table>

                    <?php
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center" id="history">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Demo Demo Demo Demo</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 no-padding-lr evol">
                    <div class="round1">
                        <p class="header-his"><span>demo demo demo demo demo</span></p>
                        <p class="img-his"><img src="<?php echo get_template_directory_uri() ?>/img/37.png" alt="" class=""></p>
                        <p class="footer-his"><span>demo demo demo demo demo demo demo demo demo demodemo demo demo demo demodemo demo demo demo demo demo demo demo demo demo</span></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 no-padding-lr soltec">
                    <div class="round2">
                        <p class="header-his"><span>demo demo demo demo demo</span></p>
                        <p class="img-his"><img src="<?php echo get_template_directory_uri() ?>/img/38.png" alt="" class=""></p>
                        <p class="footer-his"><span>demo demo demo demo demo demo demo demo demo demodemo demo demo demo demodemo demo demo demo demo demo demo demo demo demo</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid header-contact">
        <div class="container con-contact">
            <div class="row">
                <div class="col-xs-12 no-padding-lr text-center">
                    <div class="caption full-width center-block contact-info">
                        <p>
                            Demo Demo Demo <span class="yellow">Demo Demo Demo</span> Demo<br/>
                            <span class="green">Demo Demo Demo</span> Demo Demo Demo Demo Demo Demo Demo
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 no-padding-lr footer-contact">
                    <div class="container">
                        <did class="row">
                            <div class="col-xs-6 col-md-6 no-padding-lr left phone">
                                <div class="container">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/42.png" alt="" class="img-responsive phone-img">
                                    <span class="phone-text">(+84)9-3717-6251</span>
                                    <span class="detail-text">demo demo demo demo demo demo</span>
                                    <span class="detail-line"></span>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 no-padding-lr center-block mess">
                                <div class="container">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/43.png" alt="" class="img-responsive mess-img">
                                    <span class="mess-text">webdemo demo demo demo ></span>
                                    <span class="mess-border"></span>
                                </div>
                            </div>
                        </did>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>