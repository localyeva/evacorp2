<div class="container-fluid header-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 center-block page-top">
                <img src="<?php echo get_template_directory_uri() ?>/img/28.png" alt="" class="img-responsive img-top hand" id="img-back-top">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="row">
                            <div class="col-xs-12">
                                <img src="<?php echo get_template_directory_uri() ?>/img/30.png" alt="" class="img-responsive center-block">
                            </div>
                        </div>
                        <div class="row-gap-small"></div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="btn btn-slim ev-mobie-footer center-block"><a class="alnk" href="<?php echo home_url('contact') ?>">お問い合わせ</a></div>
                            </div>
                        </div>
                        <div class="row-gap-small"></div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="btn btn-slim fb-mobie-footer center-block"><a class="alnk" href="https://www.facebook.com/evolable.asia.eva">Facebook</a></div>
                            </div>
                        </div>
                        <div class="row-gap-small .visible-xs-*"></div>
                    </div>
                    <div class="col-xs-12 no-padding-lr menu-footer-mobi">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Home <span class="glyphicon glyphicon-menu-right right-icon" aria-hidden="true"></span></a></li>
                            <li><a href="#">About EvolableAsia <span class="glyphicon glyphicon-menu-right right-icon" aria-hidden="true"></span></a></li>
                            <li><a href="#">選ばれる理由<span class="glyphicon glyphicon-menu-right right-icon" aria-hidden="true"></span></a></li>
                            <li><a href="#">サービス <span class="glyphicon glyphicon-menu-right right-icon" aria-hidden="true"></span></a></li>
                            <li><a href="#">ニュース <span class="glyphicon glyphicon-menu-right right-icon" aria-hidden="true"></span></a></li>
                            <li><a href="#">Recruit <span class="glyphicon glyphicon-menu-right right-icon" aria-hidden="true"></span></a></li>
                            <li><a href="#" class="active">お問い合わせ <span class="glyphicon glyphicon-menu-right right-icon" aria-hidden="true"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-4 col-md-4 hidden-xs">
                        <label>ホーチミン本社</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="small">4F Saigon Finance Center, 9 Dinh Tien Hoang Street, District 1, HCMC</p>
                                <p class="small">TEL +84-8(39111489)</p>
                                <p class="small">FAX +84-8(39118767)</p>
                            </div>
                        </div>
                        <div class="row-gap-medium"></div>
                        <label>ホーチミン支店</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <small>14F GOLDEN TOWER, 6 Nguyen Thi Minh Khai Street,District1, HCMC</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-md-4 hidden-xs">
                        <label>ハノイ支店</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="small">9F Viet A Building, Duy Tan Street, Cau Giay District, Ha Noi</p>
                                <p class="small">TEL +84-4(37957577)</p>
                                <p class="small">FAX +84-4(37957580)</p>
                            </div>
                        </div>
                        <div class="row-gap-medium"></div>
                        <label>ダナン支店</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <small>A/H Zone 1F Danang Software Park - 02 Quang Trung,Hai Chau District, Da Nang</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		

            <div class="col-xs-12 col-md-6 hidden-xs">
                <div class="row">
                    <div class="col-xs-4 col-md-4">
                        <label>HOME</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="small"><a class="alnk" href="<?php echo home_url('company/reason/') ?>">選ばれる理由</a></p>
                                <p class="small"><a class="alnk" data-goto="header-service" href="javascript:void(0);">サービス</a></p>
                                <?php
                                $args = array(
                                    'post_type' => 'top-service',
                                    'posts_per_page' => -1,
                                    'orderby' => array('date' => 'ASC'),
                                );
                                $loop = new WP_Query($args);
                                ?>
                                <?php if ($loop->have_posts()): ?>
                                    <?php while ($loop->have_posts()): $loop->the_post(); ?>
                                        <p class="small"><a class="alnk" href="<?php echo get_field('redirect_url') ?>"><i class="fa fa-angle-right"></i> <?php the_title() ?></a></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_postdata() ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-md-4">
                        <label>About EvolableAsia</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <?php
                                $args = array(
                                    'post_type' => 'company-general',
                                    'posts_per_page' => -1,
                                    'orderby' => array('date' => 'ASC'),
                                );
                                $loop = new WP_Query($args);
                                ?>
                                <?php if ($loop->have_posts()): ?>
                                    <?php while ($loop->have_posts()): $loop->the_post(); ?>
                                        <p class="small"><a class="alnk" href="<?php echo get_field('redirect_url') ?>"><i class="fa fa-angle-right"></i> <?php the_title() ?></a></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_postdata() ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-md-4">
                        <label>ニュース</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="small">Recruit</p>
                                <p class="small"><a class="alnk" href="http://jobs.evolable.asia"><i class="fa fa-angle-right"></i> Vietnamese</a></p>
                                <p class="small"><a class="alnk" href="<?php echo get_site_url(2) ?>"><i class="fa fa-angle-right"></i> Japanese</a></p>
                            </div>
                        </div>
                        <label><a class="alnk" href="<?php echo home_url('contact') ?>">お問い合わせ</a></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.heightLine.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.sidr.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/parallax/parallax.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/common.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/contact.js"></script>
<?php wp_footer(); ?>
</body>
</html>
