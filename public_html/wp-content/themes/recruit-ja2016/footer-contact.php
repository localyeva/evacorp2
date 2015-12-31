        <div class="footer-cruit center">
            <div class="container">
                <div class="row footer-cruit-content">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 footer-cruit-content-group">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 footer-cruit-content-item">
                                <ul class="footer-cruit-content-item-ul-1">
                                    <li><span class="list-style">+</span><a href="<?php echo bloginfo('url') ?>">トップ</a></li>
                                    <li><span class="list-style">+</span><a href="<?php echo bloginfo('url') ?>/message">代表の想い</a></li>
                                    <li><span class="list-style">+</span>先輩の声
                                        <ul class="footer-cruit-content-item-ul-1-1">
                                            <li><span class="list-style-child">l</span><a href="<?php echo bloginfo('url') ?>/voice/senpai">社員</a></li>
                                            <li><span class="list-style-child">l</span><a href="<?php echo bloginfo('url') ?>/voice/intern">インターン</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 footer-cruit-content-item">
                                <ul class="footer-cruit-content-item-ul-1">
                                    <li><span class="list-style">+</span><a href="<?php echo bloginfo('url') ?>/job">仕事内容</a></li>
                                    <li><span class="list-style">+</span><a href="<?php echo bloginfo('url') ?>/requirements">募集要項</a></li>
                                    <li><span class="list-style">+</span><a href="<?php echo bloginfo('url') ?>/faq">よくあるご質問</a></li>
                                    <li><span class="list-style">+</span><a href="<?php echo bloginfo('url') ?>/contact">お問い合せ</a></li>
                                </ul>
                            </div>                            
                        </div>                    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 footer-cruit-content-group">
                        <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t02.jpg" alt="EVOLABLE ASIA CORPORATE SITE" width="202" height="50" /></a>
                        <div class="row-gap-medium"></div>
                        <a href="<?php echo bloginfo('url') ?>/contact"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t01.jpg" alt="応募フォーム" width="199" height="50" /></a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 footer-cruit-content-group">
                        <div class="face" style="width:100%px; height: 150px; background: none;'">
                            <div id="fb-root"></div>
                            <script>(function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id))
                                        return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=124639054226284";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-page" data-href="https://www.facebook.com/evolable.asia.eva" data-width="444" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/evolable.asia.eva"><a href="https://www.facebook.com/evolable.asia.eva">EVOLABLE Asia</a></blockquote></div></div>
                        </div>
                    </div>                                        
                </div>
            </div>
        </div>
        <div class="copyright center">
            Copyright ©ベトナムでのラボ型オフショア開発、BPOならEVOLABLE ASIA 求人サイト. All Rights Reserved.
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
        <!--[if lte IE 10]><script src="<?php echo get_template_directory_uri() ?>/js/PIE.js" type="text/javascript"></script><![endif]--> 
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/ajaxzip3.js" charset="UTF-8"></script> 
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.cookie.js"></script> 
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.infieldlabel.js"></script> 
        <script type="text/javascript" charset="utf-8">
            $(function () {
                $("label").inFieldLabels();
            });
        </script> 
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/exvalidation.js"></script> 
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/exchecker-ja.js"></script> 
        <script type="text/javascript">
            $(function () {

                $('form .submit-link').on({
                    click: function (event) {
                        event.preventDefault();
                        $(this).closest('form').submit();
                    }
                });

                $("#contact-form").exValidation({
                    rules: {
                        item: "chkrequired",
                        cname: "chkrequired",
                        email: "chkrequired chkemail",
                        tel: "chkrequired chktel",
                        add: "chkrequired",
                        age: "chkrequired",
                        rate: "chkrequired",
                        career: "chkrequired",
                        intro: "chkrequired"
                    },
                    submitHandler: function (form) {
                        this.submit();
                        return false;
                    },
                    stepValidation: true,
                    scrollToErr: true,
                    errHoverHide: true
                });
            });
        </script> 
        <script type="text/javascript">
            <!--
                function check() {
                var flag = 0;
                if (!document.form1.check1.checked) {
                    flag = 1;
                }
                if (flag) {
                    window.alert('「個人情報の取扱いに同意する」にチェックを入れて下さい');
                    return false;
                }
                else {
                    return true;
                }
            }
            // -->
        </script> 
        <?php wp_footer(); ?> 
    </body>
</html>