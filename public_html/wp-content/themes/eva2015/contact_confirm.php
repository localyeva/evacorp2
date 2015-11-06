<?php
/*
 * Author: KhangLe
 * Template Name: Contact-Confirm
 * 
 */

if (isset($_POST['submit'])) {

    //お問い合わせフォーム内容
    $reg_company = @htmlspecialchars(stripslashes($_POST['company']));
    $reg_division = @htmlspecialchars(stripslashes($_POST['division']));
    $reg_name = @htmlspecialchars(stripslashes($_POST['ur_name']));
    $reg_email = @htmlspecialchars($_POST['email']);
    $reg_tel = @htmlspecialchars($_POST['tel']);
    $reg_inq = @$_POST['inq'];
    $reg_inq_other = @htmlspecialchars(stripslashes($_POST['inq_other']));
    $reg_itemSelect = @$_POST['itemSelect'];

    $reg_content = @htmlspecialchars(stripslashes($_POST['content']));

    $reg_inq_all = NULL;
    $arr_inq = array('知人の紹介', '雑誌', '新聞', 'テレビ', 'インターネット記事', 'インターネット検索', 'Facebook', 'EVOLABLE ASIAブログ', 'その他');
    $arr_inq_checked = array('', '', '', '', '', '', '', '', '');
    if (is_array($reg_inq)) {
        foreach ($reg_inq as $value) {
            $key = array_search($value, $arr_inq);
            $arr_inq_checked[$key] = 'checked';
            //
            if ($value != 'その他') {
                $reg_inq_all[] = htmlspecialchars($value);
            } else {
                $reg_inq_all[] = htmlspecialchars($reg_inq_other);
            }
        }
    }

    $_SESSION['contact'] = array(
        'company' => $reg_company,
        'division' => $reg_division,
        'name' => $reg_name,
        'email' => $reg_email,
        'tel' => $reg_tel,
        'inq' => $reg_inq,
        'inq_other' => $reg_inq_other,
        'inq_all' => $reg_inq_all,
        'itemSelect' => $reg_itemSelect,
        'content' => $reg_content,
    );
} elseif (isset($_POST['send'])) {
    //
    $data = array(
        'entry_time' => gmdate("Y/m/d H:i:s", time() + 9 * 3600),
        'entry_host' => gethostbyaddr(getenv("REMOTE_ADDR")),
        'entry_ua' => getenv("HTTP_USER_AGENT"),
        //
        'company' => $_SESSION['contact']['company'],
        'division' => $_SESSION['contact']['division'],
        'name' => $_SESSION['contact']['name'],
        'email' => $_SESSION['contact']['email'],
        'tel' => $_SESSION['contact']['tel'],
        'inq' => $_SESSION['contact']['inq'],
        'inq_other' => $_SESSION['contact']['inq_other'],
        'inq_all' => $_SESSION['contact']['inq_all'],
        'itemSelect' => $_SESSION['contact']['itemSelect'],
        'content' => $_SESSION['contact']['content'],
    );

    $plugins_url = dirname( __FILE__ );
    $url = str_replace('themes/eva2015', 'plugins', $plugins_url);
    require_once $url . '/jobs-management/lib/includes/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_String;

    $twig = new Twig_Environment($loader);

    $from = job_get_option('wpt_job_text_from_email');
    $fromname = job_get_option('wpt_job_text_from_name');
    // Mail to Candidate
    $body_candidate = job_get_option('wpt_job_text_block_candidate');
    if (isset($body_candidate) && $body_candidate != '') {
        $body_candidate = $twig->render($body_candidate, $data);
        $subject_candidate = $twig->render(job_get_option('wpt_job_text_subject_candidate'), $data);
        $headers = 'From: ' . $fromname . ' <' . $from . '>' . '\r\n';
        //	
        wp_mail($data['email'], stripslashes($subject_candidate), stripslashes($body_candidate), $headers);
    }

    //Admin用メッセージ
    $body_admin = job_get_option('wpt_job_text_block_admin');
    if (isset($body_admin) && $body_admin != '') {
        $body_admin = $twig->render($body_admin, array_merge(
                        $data, array(
            'entry_time' => gmdate("Y/m/d H:i:s", time() + 9 * 3600),
            'entry_host' => gethostbyaddr(getenv("REMOTE_ADDR")),
            'entry_ua' => getenv("HTTP_USER_AGENT"),
        )));
        //
        $subject_admin = job_get_option('wpt_job_text_subject_admin');
        //
        $list_email = job_get_option('wpt_job_text_list_email');
        if (isset($list_email) && $list_email != '') {
            $list_email = preg_split('/\r\n|\n|\r/', $list_email);
            //
            $headers = 'From: ' . $fromname . ' <' . $from . '>' . '\r\n';
            //
            wp_mail($list_email, stripslashes($subject_admin), stripslashes($body_admin), $headers);
        }
    }

    wp_redirect(home_url() . '/contact/thankyou');
    exit();
} else {
    wp_redirect(home_url() . '/contact');
    exit();
}

get_header();
?>

<section>
    <div class="container contact">

        <p class="eva-info">
            EVOLABLE ASIA Co., Ltd<br/>
            4 Floor, Saigon Finance Center<br/>
            No 9, Dinh Tien Hoang Street, Dist.1, HCM City.<br/>
            Tel : (84.8) 39111489<br/>
            Fax : (84.8) 39118767<br/>
            Email : info@evolable.asia
        </p>

        <table class="table table-bordered">
            <colgroup>
                <col class="col-sm-2">
                <col class="col-sm-10">
            </colgroup>
            <tr>
                <td>会社名</td>
                <td><?php echo $_SESSION['contact']['company'] ?></td>
            </tr>
            <tr>
                <td>部署名</td>
                <td><?php echo $_SESSION['contact']['division'] ?></td>
            </tr>
            <tr>
                <td>お名前</td>
                <td><?php echo $_SESSION['contact']['name'] ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><?php echo $_SESSION['contact']['email'] ?></td>
            </tr>
            <tr>
                <td>Tel</td>
                <td><?php echo $_SESSION['contact']['tel'] ?></td>
            </tr>
            <tr>
                <td>どこでエボラブルアジアを知りましたか?</td>
                <td>
                    <?php if (!is_null($_SESSION['contact']['inq_all'])): ?>
                        <ul>
                            <?php foreach ($_SESSION['contact']['inq_all'] as $value): ?>
                                <li><?php echo $value ?></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>お問い合わせ項目</td>
                <td><?php echo $_SESSION['contact']['itemSelect'] ?></td>
            </tr>
            <tr>
                <td>お問い合わせ内容</td>
                <td><?php echo $_SESSION['contact']['content'] ?></td>
            </tr>
        </table>
        <table class="table table-borderless">
            <tr>
                <td>
                    <form method="POST">
                        <div class="center">
                            <a class="btn inline-block" href="<?php echo bloginfo('url') ?>/contact">
                                <button class="btn btn-warning center-block inline-block btn-confirm" type="button">
                                    戻る
                                </button>
                            </a>
                            <button class="btn btn-success center-block inline-block btn-confirm" type="submit">同意して送信</button>
                            <input type="hidden" name="send" value="send"/>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</section>

<?php get_footer(); ?>