<?php
/*
 * Author: KhangLe
 * Template Name: Contact-Confirm
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
    // send
    require_once 'lib/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem(__DIR__ . '/mail_temp');

    $twig = new Twig_Environment($loader);

    //お問い合わせメッセージ送信
    $template_admin = $twig->loadTemplate('contact-admin.html');

    $subject_admin = 'ホームページからお問い合わせがありました';
    $body_admin = $template_admin->render(array(
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
    ));

    //お客様用メッセージ
    $template_client = $twig->loadTemplate('contact-client.html');

    $subject_client = 'お問い合わせありがとうございました';
    $body_client = $template_client->render(array(
        'item' => $reg_item,
        'name' => $reg_name,
        'email' => $reg_email,
        'tel' => $reg_tel,
        'add' => $reg_add,
        'age' => $reg_age,
        'rate' => $reg_rate,
        'career' => $reg_career,
        'intro' => $reg_intro,
    ));


    // メール送信
    require_once 'lib/Mail.php';
    mb_language("ja");
    mb_internal_encoding("UTF-8");

    $to = "recruitmentjp@evolable.asia";
    $from = "recruitmentjp@evolable.asia";
    $fromname = "Evolable Asia 求人お問い合わせ";

    //メール送信
    $email_info = new Mail();
    $email_info->from = $from;
    $email_info->fromName = $fromname;
    $email_info->to = array(
        'ayako@evolable.asia',
        'fujikawa@evolable.asia',
        'ito@evolable.asia',
        'kashiwagi@evolable.asia',
        'nagai@evolable.asia',
        'nakagawa@evolable.asia',
        'sul@evolable.asia',
        'umezawa@evolable.asia',
        'y_nakamura@evolable.asia',
        'yoshizako@evolable.asia',
    );
    $email_info->title = $subject_admin;
    $email_info->body = nl2br($body_admin);
    $email_info->send();

    //お客様受け取りメール送信
    $email1 = new Mail();
    $email1->from = $from;
    $email1->fromName = $fromname;
    $email1->to = $reg_email;
    $email1->title = $subject_client;
    $email1->body = nl2br($body_client);
    $email1->send();
    
    unset($email_info, $email1);
    
    wp_redirect(home_url() . '/contact/thankyou');
    exit;
} else {
    wp_redirect(home_url() . '/contact');
    exit();
}

get_header('contact');
?>

<div id="container" class="clearfix">
    <div class="wrapContetn">
        <p class="taC t20b0"><img src="<?php echo get_template_directory_uri() ?>/img/img_step02.png" alt="" width="528" height="28" /></p>
        <form method="post" class="form-1" action="<?php echo bloginfo('url') ?>/contact/confirm" >
            <div class="t20b0">
                <table class="tableContact" cellspacing="0" >
                    <tr>
                        <th>希望職種</th>
                        <td><?php echo $reg_item ?></td>
                    </tr>
                    <tr>
                        <th>お名前</th>
                        <td><?php echo $reg_name ?></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><?php echo $reg_email ?></td>
                    </tr>
                    <tr>
                        <th>TEL</th>
                        <td><?php echo $reg_tel ?></td>
                    </tr>
                    <tr>
                        <th>ご住所</th>
                        <td><?php echo $reg_add ?></td>
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <td><?php echo $reg_age ?></td>
                    </tr>
                    <tr>
                        <th>最終学歴</th>
                        <td><?php echo $reg_rate ?></td>
                    </tr>
                    <tr>
                        <th>職歴</th>
                        <td><?php echo nl2br($reg_career) ?></td>
                    </tr>
                    <tr>
                        <th class="bd_bot">自己PR・備考</th>
                        <td class="bd_bot"><?php echo nl2br($reg_intro) ?></td>
                    </tr>
                </table>
            </div>
            <input type="hidden" name="cname" value="<?php echo $reg_name ?>" />
            <input type="hidden" name="email" value="<?php echo $reg_email ?>" />
            <input type="hidden" name="tel" value="<?php echo $reg_tel ?>" />
            <input type="hidden" name="item" value="<?php echo $reg_item ?>" />
            <input type="hidden" name="add" value="<?php echo $reg_add ?>" />
            <input type="hidden" name="age" value="<?php echo $reg_age ?>" />
            <input type="hidden" name="rate" value="<?php echo $reg_rate ?>" />
            <input type="hidden" name="career" value="<?php echo $reg_career ?>" />
            <input type="hidden" name="intro" value="<?php echo $reg_intro ?>" />

            <p style="text-align:right;"><a href="javascript:history.back()">入力内容を修正する</a></p>
            <p align="center">
                <input type="image" src="<?php echo get_template_directory_uri() ?>/img//btn_send.png" onMouseOver="this.src = '<?php echo get_template_directory_uri() ?>/img/btn_send.png'" onMouseOut="this.src = '<?php echo get_template_directory_uri() ?>/img/btn_send.png'"  class="t20b20"/>
                <input type="hidden" name="action" value="send" />
            </p>
            <p class="taC fz12">上記フォームで送信できない場合は、必要項目をご記入の上、<br />
                <a id="mailContact" href="#"></a>までメールをお送りください。</p>
            <!-- Anti spam part2: clickable email address -->

        </form>
    </div>
</div>

<?php get_footer('contact'); ?>