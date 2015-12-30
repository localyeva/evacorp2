<?php
/*
 * Autdor: KhaCao
 * Template Name: contact
 * 
 */
get_header('contact');
?>
<div class="container contact-content">
    <div class="row-gap-medium"></div> 
    <div class="contact-content-header center">
        <a href="<?php echo get_site_url(1) ?>"><img src="<?php echo get_template_directory_uri() ?>/img/header/logo.png" alt="EVOLABLE ASIA" widtd="156" height="51" /></a>
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
        <p>
            下記の情報に御記入の上、【入力内容を確認する】ボタンをクリックしてください。<br/>
            折り返し当社よりご連絡させていただきます。 （半角カナは使用しないでください）<br/>
            <span class="color-red">※</span>印は必須項目です。
        </p>
    </div>    
    <div class="row-gap-medium"></div>
    <div class="row contact-content-2 center">
        <span class="active">step.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;入力</span>>
        <span>step.2&nbsp;&nbsp;&nbsp;&nbsp;内容確認</span>>
        <span>step.3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;完了</span>
    </div>
    <div class="row-gap-big"></div>
    <div class=" row contact-content-3">
        <form id="contact-form" method="post" class="form-1" action="<?php echo bloginfo('url') ?>/contact/confirm" name="form1" onSubmit="return check()">
            <table class="table table-bordered">
                <colgroup>
                    <col class="col-xs-12 col-sm-3 col-dm-3 col-lg-3">
                    <col class="col-xs-12 col-sm-9 col-dm-9 col-lg-9">
                </colgroup>
                <tr>
                    <td>希望職種<span class="color-red">※</span></td>
                    <td>
                        <?php $job = (isset($_GET['job'])) ? $_GET['job'] : ''; ?>
                        <select name="item" class="size02" id="itemList">
                            <option value="">希望職種を選択して下さい</option>
                            <?php
                            $args = array('posts_per_page' => 5, 'post_type' => 'requirement');
                            $myposts = get_posts($args);
                            foreach ($myposts as $post) {
                                ?>
                                <option <?php
                                if ($job == $post->post_title) {
                                    echo "selected";
                                }
                                ?> value="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></option>
                                <?php } ?>
                            <option value="その他">その他</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>お名前<span class="color-red">※</span></td>
                    <td><input type="text" size="40" name="cname" id="cname" class="size01" value="" /></td>
                </tr>
                <tr>
                    <td>メールアドレス<span class="color-red">※</span></td>
                    <td><input type="text" size="40" name="email" id="email" class="size02" value="" /></td>
                </tr>
                <tr>
                    <td>TEL<span class="color-red">※</span></td>
                    <td><input type="text" size="40" name="tel" id="tel" class="size01" value="" /></td>
                </tr>
                <tr>
                    <td>ご住所<span class="color-red">※</span></td>
                    <td><input type="text" size="40" name="add" id="add" class="size02" value="" /></td>
                </tr>
                <tr>
                    <td>年齢<span class="color-red">※</span></td>
                    <td><input type="text" size="40" name="age" id="age" class="size03" value="" /></td>
                </tr>
                <tr>
                    <td>最終学歴<span class="color-red">※</span></td>
                    <td><input type="text" size="40" name="rate" id="rate" class="size02" value="" /></td>
                </tr>
                <tr>
                    <td>職歴<span class="color-red">※</span></td>
                    <td><textarea name="career" class="size02" id="career" rows="3" cols="5"></textarea></td>
                </tr>
                <tr>
                    <td class="bd_bot">自己PR・備考<span class="color-red">※</span></td>
                    <td class="bd_bot"><textarea name="intro" class="size02" id="intro" rows="3" cols="5"></textarea></td>
                </tr>
            </table>  
            <p>【個人情報の取扱いについて】</p>
            <p>
                ・本フォームからお客様が記入・登録された個人情報は、資料送付・電子メール送信・電話連絡<br/>
                　などの目的で利用・保管します。<br/>
                ・プライバシーポリシーについてはこちらをご覧ください。<br/>
            </p>
            <input type="checkbox" name="check1" value="ok"><span><b>個人情報の取扱いに同意する</b></span>
            <div class="row-gap-medium"></div>
            <div class="center">
                <a href="#" class="submit-link"><img src="<?php echo get_template_directory_uri() ?>/img/btn_confirm.png"></a>
                <input type="hidden" name="action" value="confirm" />
                <div class="row-gap-big"></div>
                <p>
                    上記フォームで送信できない場合は、必要項目をご記入の上、<br/>
                    <a  class="back-link" id="mailContact" href="mailto:recruitmentjp@evolable.asia">recruitmentjp@evolable.asia</a>までメールをお送りください。                
                </p>
            </div>
        </form>
    </div>
    <div class="row-gap-big"></div>                                       
</div>
<?php get_footer('contact'); ?>