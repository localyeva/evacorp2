<div id="footerWrap"> 
    <!-- /footer start -->
    <div class="footer_bg">
        <div id="footerInner" class="t10b0 clearfix">
            <ul class="ul_menu floatL">
                <li><span>＋</span><a href="<?php echo bloginfo('url') ?>">トップ</a></li>
                <li><span>＋</span><a href="<?php echo bloginfo('url') ?>/message">代表の想い</a></li>
                <li><span>＋</span><a href="<?php echo bloginfo('url') ?>/">先輩の声</a>
                    <ul class="child">
                        <li>└ <a href="<?php echo bloginfo('url') ?>/voice/senpai">社員</a></li>
                        <li>└ <a href="<?php echo bloginfo('url') ?>/voice/intern">インターン</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="ul_menu2 floatL">
                <li><span>＋</span><a href="<?php echo bloginfo('url') ?>/job">仕事内容</a></li>
                <li><span>＋</span><a href="<?php echo bloginfo('url') ?>/requirements">募集要項</a></li>
                <li><span>＋</span><a href="<?php echo bloginfo('url') ?>/contact">お問い合せ</a></li>
            </ul>
            <p class="p_top01 floatL"><a  href="<?php echo get_site_url(1) ?>"> <img src="<?php echo get_template_directory_uri() ?>/img/top/btn_04.png" alt="" class="opa" /> </a> <a href="<?php echo bloginfo('url') ?>/contact"><img src="<?php echo get_template_directory_uri() ?>/img/top/btn_05.png" alt="" class="opa" /></a> </p>
            <div class="face">
                <div class="fb-like-box" data-href="https://www.facebook.com/evolable.asia.eva" data-width="444" data-height="177" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
            </div>
        </div>
        <!-- /footer end --> </div>
    <p class="copyright fz10 taC">Copyright ©ベトナムでのラボ型オフショア開発、BPOならEVOLABLE ASIA 求人サイト. All Rights Reserved.</p>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/common.js"></script> 
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
        $("#contact-form").exValidation({
            rules: {
                item: "chkrequired",
                name: "chkrequired",
                email: "chkrequired chkemail",
                tel: "chkrequired chktel",
                add: "chkrequired",
                age: "chkrequired",
                rate: "chkrequired",
                career: "chkrequired",
                intro: "chkrequired"
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
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.gafunc.js"></script> 

<!-- Anti spam part2: clickable email address end --> 
<script type="text/javascript">
    $(function () {
        $("input:checkbox[name='check02[]']").click(function () {
            if ($("#check0203").is(":checked")) {
                $('#orther').addClass('chkrequired errPosRight');
            }
            else {
                $('#orther').removeClass('chkrequired errPosRight');
            }
        });

        if ($("#check0203").is(":checked")) {
            $('#orther').addClass('chkrequired errPosRight');
        }
        else {
            $('#orther').removeClass('chkrequired errPosRight');
        }

    });
</script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=1493350260884645&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>
</body>
</html>