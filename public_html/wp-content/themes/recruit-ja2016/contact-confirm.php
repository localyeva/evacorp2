<?php
/*
 * Autdor: KhaCao
 * Template Name: contact-confirm
 * 
 */
//お問い合わせフォーム内容
$reg_item = @htmlspecialchars($_POST['item']);
$reg_name = @htmlspecialchars($_POST['cname']);
$reg_email = @htmlspecialchars($_POST['email']);
$reg_tel = @htmlspecialchars($_POST['tel']);
$reg_add = @htmlspecialchars($_POST['add']);
$reg_age = @htmlspecialchars($_POST['age']);
$reg_rate = @htmlspecialchars($_POST['rate']);
$reg_career = @htmlspecialchars($_POST['career']);
$reg_intro = @htmlspecialchars($_POST['intro']);
$reg_orther = @htmlspecialchars($_POST['orther']);

//// 処理分岐
if (isset($_POST['action']) && $_POST['action'] == 'confirm') {
    // confirm
} elseif (isset($_POST['action']) && $_POST['action'] == 'send') {
    
    $data = array(
        'entry_time' => gmdate("Y/m/d H:i:s", time() + 9 * 3600),
        'entry_host' => gethostbyaddr(getenv("REMOTE_ADDR")),
        'entry_ua' => getenv("HTTP_USER_AGENT"),
        //
        'item' => $reg_item,
        'name' => $reg_name,
        'email' => $reg_email,
        'tel' => $reg_tel,
        'add' => $reg_add,
        'age' => $reg_age,
        'rate' => $reg_rate,
        'career' => $reg_career,
        'intro' => $reg_intro,
    );
    
    // メール送信
    
    require_once WP_PLUGIN_DIR . '/eva-contact/lib/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_String;
    
    $twig = new Twig_Environment($loader);
    
    $from = omw_get_option('wpt_omw_text_from_email');
    $fromname = omw_get_option('wpt_omw_text_from_name');

    //お客様用メッセージ
    $body_client = omw_get_option('wpt_omw_text_block_client');
    if (isset($body_client) && $body_client != '') {
        $body_client = $twig->render($body_client, $data);
        $subject_client = $twig->render(omw_get_option('wpt_omw_text_subject_client'), $data);
        $headers = 'From: ' . $fromname . ' <' . $from . '>' . '\r\n';
        //
        wp_mail($data['email'], stripslashes($subject_client), stripslashes($body_client), $headers);
    }
    
    //お問い合わせメッセージ送信
    $body_admin = omw_get_option('wpt_omw_text_block_admin');
    if (isset($body_admin) && $body_admin != '') {
        $body_admin = $twig->render($body_admin, $data);
        $subject_admin = omw_get_option('wpt_omw_text_subject_admin');
        //
        $list_email = omw_get_option('wpt_omw_text_list_email');
        if (isset($list_email) && $list_email != '') {
            $list_email = preg_split('/\r\n|\n|\r/', $list_email);
            //
            $headers = 'From: ' . $fromname . ' <' . $from . '>' . '\r\n';
            //
            wp_mail($list_email, stripslashes($subject_admin), stripslashes($body_admin), $headers);
        }
    }

//    ayako@evolable.asia
//    fujikawa@evolable.asia
//    ito@evolable.asia
//    kashiwagi@evolable.asia
//    nagai@evolable.asia
//    nakagawa@evolable.asia
//    sul@evolable.asia
//    umezawa@evolable.asia
//    y_nakamura@evolable.asia
//    yoshizako@evolable.asia
    
    wp_redirect(home_url() . '/contact/thankyou');
    exit;
} else {
    wp_redirect(home_url() . '/contact');
    exit();
}

get_header('contact');
?>
<div class="container contact-content">
    <div class="row-gap-medium"></div> 
    <div class="contact-content-header center">
        <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/logo.png" alt="EVOLABLE ASIA" widtd="156" height="51" class="margin-img"/></a>
        <a href="<?php echo bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/btn_t03.jpg" alt="日本人スタッフ募集 Recruit" widtd="115" height="56" /></a>
    </div>
    <div class="row-gap-big"></div> 
    <div class="row contact-content-1 center">
        <div class="contact-content-1-title">
            <div class="contact-content-1-title-row">
                <div class="contact-content-1-title-cell">
                    <span>応募フォーム</span>
                </div>                             
            </div>
        </div>   
        <h2>contact</h2>   
        <div class="row-gap-big"></div>  
    </div>    
    <div class="row contact-content-2 center">
        <span class="active">step.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;入力</span>>
        <span>step.2&nbsp;&nbsp;&nbsp;&nbsp;内容確認</span>>
        <span>step.3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;完了</span>
    </div>
    <div class="row-gap-big"></div>
    <div class=" row contact-content-3">
        <form method="post" class="form-1" action="<?php echo bloginfo('url') ?>/contact/confirm" >
            <table class="table table-bordered">
                <colgroup>
                    <col class="col-xs-12 col-sm-3 col-dm-3 col-lg-3">
                    <col class="col-xs-12 col-sm-9 col-dm-9 col-lg-9">
                </colgroup>
                <tr>
                    <td>希望職種</td>
                    <td><?php echo $reg_item ?></td>
                </tr>
                <tr>
                    <td>お名前</td>
                    <td><?php echo $reg_name ?></td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td><?php echo $reg_email ?></td>
                </tr>
                <tr>
                    <td>TEL</td>
                    <td><?php echo $reg_tel ?></td>
                </tr>
                <tr>
                    <td>ご住所</td>
                    <td><?php echo $reg_add ?></td>
                </tr>
                <tr>
                    <td>年齢</td>
                    <td><?php echo $reg_age ?></td>
                </tr>
                <tr>
                    <td>最終学歴</td>
                    <td><?php echo $reg_rate ?></td>
                </tr>
                <tr>
                    <td>職歴</td>
                    <td><?php echo nl2br($reg_career) ?></td>
                </tr>
                <tr>
                    <td class="bd_bot">自己PR・備考</td>
                    <td><?php echo nl2br($reg_intro) ?></td>
                </tr>
            </table>  
            <input type="hidden" name="cname" value="<?php echo $reg_name ?>" />
            <input type="hidden" name="email" value="<?php echo $reg_email ?>" />
            <input type="hidden" name="tel" value="<?php echo $reg_tel ?>" />
            <input type="hidden" name="item" value="<?php echo $reg_item ?>" />
            <input type="hidden" name="add" value="<?php echo $reg_add ?>" />
            <input type="hidden" name="age" value="<?php echo $reg_age ?>" />
            <input type="hidden" name="rate" value="<?php echo $reg_rate ?>" />
            <input type="hidden" name="career" value="<?php echo $reg_career ?>" />
            <input type="hidden" name="intro" value="<?php echo $reg_intro ?>" />            
            <p style="text-align:right;"><a href="javascript:history.back()" class="back-link">入力内容を修正する</a></p>
            <div class="row-gap-medium"></div>
            <div class="center">
                <a href="#" class="submit-link"><img src="<?php echo get_template_directory_uri() ?>/img/btn_send.png"></a>
                <input type="hidden" name="action" value="send" />
                <div class="row-gap-big"></div>
                <p>
                    上記フォームで送信できない場合は、必要項目をご記入の上、<br/>
                    までメールをお送りください。                
                </p>
            </div>
        </form>
    </div>
    <div class="row-gap-big"></div>                                       
</div>
<?php get_footer('contact'); ?>