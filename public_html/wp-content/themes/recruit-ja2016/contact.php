<?php
/*
 * Author: KhangLe
 * Template Name: Contact
 * 
 */

get_header('contact');
?>

<div id="container" class="clearfix">
    <div class="wrapContetn">
        <p class="txtContact">下記の情報に御記入の上、【入力内容を確認する】ボタンをクリックしてください。<br />
            折り返し当社よりご連絡させていただきます。 （半角カナは使用しないでください）<br />
            <span>※</span>印は必須項目です。</p>
        <p class="taC t20b0"><img src="<?php echo get_template_directory_uri() ?>/img/img_step01.png" alt="" width="528" height="28" /></p>
        <form id="contact-form" method="post" class="form-1" action="<?php echo bloginfo('url') ?>/contact/confirm" name="form1" onSubmit="return check()">
            <table class="tableContact" cellspacing="0" >
                <tr>
                    <th>希望職種<em>※</em></th>
                    <td>
                        <?php $job = (isset($_GET['job'])) ? $_GET['job'] : ''; ?>
                        <select name="item" class="chkselect" id="itemList">
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
                        </select></td>
                </tr>
                <tr>
                    <th>お名前<em>※</em></th>
                    <td><input type="text" size="40" name="cname" id="cname" class="writingBox size01" value="" /></td>
                </tr>
                <tr>
                    <th>メールアドレス<em>※</em></th>
                    <td><input type="text" size="40" name="email" id="email" class="writingBox size02" value="" /></td>
                </tr>
                <tr>
                    <th>TEL<em>※</em></th>
                    <td><input type="text" size="40" name="tel" id="tel" class="writingBox size01" value="" /></td>
                </tr>
                <tr>
                    <th>ご住所<em>※</em></th>
                    <td><input type="text" size="40" name="add" id="add" class="writingBox size02" value="" /></td>
                </tr>
                <tr>
                    <th>年齢<em>※</em></th>
                    <td><input type="text" size="40" name="age" id="age" class="writingBox size03" value="" /></td>
                </tr>
                <tr>
                    <th>最終学歴<em>※</em></th>
                    <td><input type="text" size="40" name="rate" id="rate" class="writingBox size02" value="" /></td>
                </tr>
                <tr>
                    <th>職歴<em>※</em></th>
                    <td><textarea name="career" class="textarea01" id="career" rows="3" cols="5"></textarea></td>
                </tr>
                <tr>
                    <th class="bd_bot">自己PR・備考<em>※</em></th>
                    <td class="bd_bot"><textarea name="intro" class="textarea02" id="intro" rows="3" cols="5"></textarea></td>
                </tr>
            </table>
            <p class="t0b10 fz12">【個人情報の取扱いについて】</p>
            <ul class="t0b20 fz12">
                <li>・本フォームからお客様が記入・登録された個人情報は、資料送付・電子メール送信・電話連絡<br />
        　などの目的で利用・保管します。</li>
                <li>・プライバシーポリシーについては<a href="<?php echo get_site_url(1) ?>/privacypolicy/" target="_blank">こちら</a>をご覧ください。</li>
            </ul>
            <div>
                <label>
                    <input type="checkbox" name="check1" value="ok">
                    <span style="font-size:12px;"><b>個人情報の取扱いに同意する</b></span></label>
                <br>
                <br>
                <p class="taC">
                    <input type="image" src="<?php echo get_template_directory_uri() ?>/img/btn_confirm.png" onMouseOver="this.src = '<?php echo get_template_directory_uri() ?>/img/btn_confirm_on.png'" onMouseOut="this.src = '<?php echo get_template_directory_uri() ?>/img/btn_confirm.png'"  class="t20b20"/>
                </p>
                <input type="hidden" name="action" value="confirm" />
                <br />
            </div>
            </center>
            <p class="taC fz12">上記フォームで送信できない場合は、必要項目をご記入の上、<br />
                <a id="mailContact" href="mailto:recruitmentjp@evolable.asia">recruitmentjp@evolable.asia</a>までメールをお送りください。</p>
        </form>
    </div>
</div>

<?php get_footer('contact'); ?>