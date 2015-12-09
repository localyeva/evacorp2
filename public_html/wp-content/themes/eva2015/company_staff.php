<?php
/*
 * Author: KhangLe
 * Template Name: Company-Staff
 * 
 */
get_header();
?>
<div id="company-staff">
    <div class="header-vff-banner">
        <div class="container text-center">
            <h2>STAFF HEADLINE</h2>
        </div>
    </div>
    <div class="row-gap-medium"></div>
    <div class="container-fluid">
        <div class="container">
            <ul class="breadcrumb-cp">
                <li>
                    <a href="#">HOME</a> <span class="divider">></span>
                </li>
                <li>
                    <a href="#">About EvolableAsia</a> <span class="divider">></span>
                </li>
                <li class="active">サッカーベ</li>
            </ul>
        </div>
    </div>
    <?php
        $wp_query = new WP_Query();
        $param = array(
            'post_type' => 'company-staff',
            'order' => 'ASC',
            'orderby' => 'meta_value',
            'meta_key' => 'staff_number',
            'posts_per_page' => '-1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'staffcat',
                    'field' => 'slug',
                    'terms' => 'manager'
                )
            )
        );
        $wp_query->query($param);
        $count = "";
        if ($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
                    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="container custom-containter">
                    <div class="row">
                        <div class="row-gap-medium"></div>
                        <div class="col-xs-3 col-md-3">
                            <img src="<?php echo get_template_directory_uri() ?>/img/vff-logo.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h3><?php the_title(); ?></h3>
                            <h4><i style="color: #93D1FA;font-size: 30px">-</i>&nbsp;&nbsp;<?php the_field('staff_role'); ?></h4>
                            <div class="row-gap-medium"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12"><hr></div>
                        <div class="col-xs-12 col-md-12">
                            <h4 class="blue-text">Q のスポンサー契約を結 1</h4><br>
                            <p>Evolable Asiaは2015年8月5日サッカーベトナム代表
                                (Vietnam Football Federation、
                                以下VFF)
                                のスポンサー契約を結
                                びました。
                                私たちのように一般消費者向けの商材を持たない企業がスポンサー契約をするというのは非常に珍しいことだと
                                思います。 to Bでたくさんのお客様に支えられながら事業を行う立場として、
                                B
                                今回のスポンサー契約に至った理由をご紹介
                                させて頂きます。</p>
                            <p>まずはベトナムにおけるサッカーの立ち位置から説明いたします。</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12"><hr></div>
                        <div class="col-xs-12 col-md-12">
                            <h4 class="blue-text">Q のスポンサー契約を結</h4><br>
                            <p>Evolable Asiaは2015年8月5日サッカーベトナム代表
                                (Vietnam Football Federation、
                                以下VFF)
                                のスポンサー契約を結
                                びました。
                                私たちのように一般消費者向けの商材を持たない企業がスポンサー契約をするというのは非常に珍しいことだと
                                思います。 to Bでたくさんのお客様に支えられながら事業を行う立場として、
                                B
                                今回のスポンサー契約に至った理由をご紹介
                                させて頂きます。</p>
                            <p>まずはベトナムにおけるサッカーの立ち位置から説明いたします。</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>        

    <div class="container">
        <div class="row-gap-medium"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="container custom-containter">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <hr class="staff-divider">
                        </div>                                
                    </div>                            
                </div>                        
            </div>                    
        </div>                
    </div>            
    <?php
           
        endwhile;
    endif;
    ?>
    
    
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="container custom-containter">
                    <div class="row">
                        <div class="row-gap-medium"></div>
                        <div class="col-xs-3 col-md-3">
                            <img src="<?php echo get_template_directory_uri() ?>/img/vff-logo.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h3>サッカ Name</h3>
                            <h4><i style="color: #93D1FA;font-size: 30px">-</i>&nbsp;&nbsp;サッカーベトナム代表</h4>
                            <div class="row-gap-medium"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12"><hr></div>
                        <div class="col-xs-12 col-md-12">
                            <h4 class="blue-text">Q のスポンサー契約を結 1</h4><br>
                            <p>Evolable Asiaは2015年8月5日サッカーベトナム代表
                                (Vietnam Football Federation、
                                以下VFF)
                                のスポンサー契約を結
                                びました。
                                私たちのように一般消費者向けの商材を持たない企業がスポンサー契約をするというのは非常に珍しいことだと
                                思います。 to Bでたくさんのお客様に支えられながら事業を行う立場として、
                                B
                                今回のスポンサー契約に至った理由をご紹介
                                させて頂きます。</p>
                            <p>まずはベトナムにおけるサッカーの立ち位置から説明いたします。</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12"><hr></div>
                        <div class="col-xs-12 col-md-12">
                            <h4 class="blue-text">Q のスポンサー契約を結</h4><br>
                            <p>Evolable Asiaは2015年8月5日サッカーベトナム代表
                                (Vietnam Football Federation、
                                以下VFF)
                                のスポンサー契約を結
                                びました。
                                私たちのように一般消費者向けの商材を持たない企業がスポンサー契約をするというのは非常に珍しいことだと
                                思います。 to Bでたくさんのお客様に支えられながら事業を行う立場として、
                                B
                                今回のスポンサー契約に至った理由をご紹介
                                させて頂きます。</p>
                            <p>まずはベトナムにおけるサッカーの立ち位置から説明いたします。</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row-gap-big"></div>
</div>

<?php get_template_part('part-contact') ?>
</div>

<section>
    <div class="container company-staff">
        <div class="row">
            <div class="col-md-12">

                <ul class="inline-block ul_staff01">
                    <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'post_type' => 'company-staff',
                        'order' => 'ASC',
                        'orderby' => 'meta_value',
                        'meta_key' => 'staff_number',
                        'posts_per_page' => '-1',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'staffcat',
                                'field' => 'slug',
                                'terms' => 'manager'
                            )
                        )
                    );
                    $wp_query->query($param);
                    $count = "";
                    if ($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post();
                            $count++;
                            $img_url01 = wp_get_attachment_image_src(get_field('image'), 'staff01');
                            $img_url012 = wp_get_attachment_image_src(get_field('image02'), 'staff01');
                            ?>
                            <li  class="inline-block">
                                <p class="photoStaff"><a href="<?php echo get_permalink(get_the_ID()) ?>">

                                        <?php if ($img_url01) { ?>
                                            <img src="<?php echo $img_url01[0]; ?>" width="<?php echo $img_url01[1]; ?>" height="<?php echo $img_url01[2]; ?>" alt="" <?php if ($img_url012) { ?> onMouseOver="this.src = '<?php echo $img_url012[0]; ?>'" onMouseOut="this.src = '<?php echo $img_url01[0]; ?>'" <?php } ?>/>

                                            <?php
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/img/company/staff/img_noPhoto01.png" width="162 height="162" alt=""/>';
                                        }
                                        ?>


                                    </a></p>
                                <?php the_title(); ?><br />
                                <a href="<?php echo get_permalink(get_the_ID()) ?>"><?php the_field('staff_role'); ?></a>
                            </li>
                            <?php
                            if ($count % 4 == 0) {
                                echo '</ul><ul class="clearfix ul_staff01">';
                            }
                        endwhile;
                    endif;
                    ?>
                </ul>

                <ul class="">
                    <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'post_type' => 'company-staff',
                        'order' => 'ASC',
                        'orderby' => 'meta_value',
                        'meta_key' => 'staff_number',
                        'posts_per_page' => '-1',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'staffcat',
                                'field' => 'slug',
                                'terms' => 'staff-works'
                            )
                        )
                    );
                    $wp_query->query($param);
                    $count = "";
                    if ($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post();
                            $count++;
                            $img_url02 = wp_get_attachment_image_src(get_field('image'), 'staff02');
                            $img_url022 = wp_get_attachment_image_src(get_field('image02'), 'staff02');
                            ?>
                            <li class="inline-block">
                                <p class="photoStaff">


                                    <?php if ($img_url02) { ?>
                                        <img src="<?php echo $img_url02[0]; ?>" width="<?php echo $img_url02[1]; ?>" height="<?php echo $img_url02[2]; ?>" alt="" <?php if ($img_url022) { ?>onMouseOver="this.src = '<?php echo $img_url022[0]; ?>'" onMouseOut="this.src = '<?php echo $img_url02[0]; ?>'" <?php } ?>/>

                                        <?php
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/img/company/staff/img_noPhoto02.png" width="124" height="124" alt=""/>';
                                    }
                                    ?>


                                </p>
                                <?php the_title(); ?><br />

                                <?php
                                $find[] = '<br />';
                                $replace[] = '';
                                $title = str_replace($find, $replace, get_field('staff_role'));
                                print_r($title);
                                //the_field('staff_role');
                                ?>
                            </li>
                            <?php
                            if ($count % 5 == 0) {
                                echo '</ul><ul class="clearfix ul_staff02">';
                            }
                        endwhile;
                    endif;
                    ?>
                </ul>

                <ul class="">
                    <?php
                    $wp_query = new WP_Query();
                    $param = array(
                        'post_type' => 'company-staff',
                        'order' => 'ASC',
                        'orderby' => 'meta_value',
                        'meta_key' => 'staff_number',
                        'posts_per_page' => '-1',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'staffcat',
                                'field' => 'slug',
                                'terms' => 'other-staff'
                            )
                        )
                    );
                    $wp_query->query($param);
                    $count = "";
                    if ($wp_query->have_posts()):while ($wp_query->have_posts()) : $wp_query->the_post();
                            $count++;
                            $img_url03 = wp_get_attachment_image_src(get_field('image'), 'staff04');
                            $img_url032 = wp_get_attachment_image_src(get_field('image02'), 'staff04');
                            ?>
                            <li class="inline-block">
                                <p class="photoStaff">

                                    <?php if ($img_url03) { ?>
                                        <img src="<?php echo $img_url03[0]; ?>" width="<?php echo $img_url03[1]; ?>" height="<?php echo $img_url03[2]; ?>" alt="" <?php if ($img_url032) { ?>onMouseOver="this.src = '<?php echo $img_url032[0]; ?>'" onMouseOut="this.src = '<?php echo $img_url03[0]; ?>'" <?php } ?>/>

                                        <?php
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/img/company/staff/img_noPhoto02.png" width="101" height="101" alt=""/>';
                                    }
                                    ?>

                                </p>
                                <?php the_title(); ?><br />

                                <?php
                                $find[] = '<br />';
                                $replace[] = '';
                                $title = str_replace($find, $replace, get_field('staff_role'));
                                print_r($title);
                                //the_field('staff_role');
                                ?>
                            </li>
                            <?php
                            if ($count % 6 == 0) {
                                echo '</ul><ul class="clearfix ul_staff02 ul_staff03">';
                            }
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>

            <!-- /maincontent end -->
        </div>

        <!-- /container end -->
    </div>

</section>

<?php
get_footer();
?>