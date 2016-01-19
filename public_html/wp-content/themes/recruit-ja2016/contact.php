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
        <p>
            下記の情報に御記入の上、【入力内容を確認する】ボタンをクリックしてください。<br/>
            折り返し当社よりご連絡させていただきます。 （半角カナは使用しないでください）<br/>
            <span class="color-red">※</span>印は必須項目です。
        </p>
    </div>    
    <div class="row-gap-medium"></div>
    <div class="row contact-content-2 center">
        <span class="active">step.1</span>>
        <span>step.2</span>>
        <span>step.3</span>
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
            <div class="box">
                <strong>【個人情報の取り扱いについて】</strong>
                <ul style="margin-top: 15px;max-height: 150px;overflow-y: auto;padding-left: 20px;">
                    <li>
                        <strong>EVOLABLE ASIA CO., Ltd</strong>（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。
                    </li>
                    <li>
                        <strong>個人情報の管理</strong><br>
                        当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
                    </li>
                    <li>
                        <strong>個人情報の利用目的</strong><br>
                        お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
                        <p><strong>個人情報の第三者への開示・提供の禁止</strong><br>
                            当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。
                            ・お客さまの同意がある場合
                            ・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合
                            ・法令に基づき開示することが必要である場合
                        </p>
                    </li>
                    <li>
                        <strong>個人情報の安全対策</strong><br>
                        当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
                        <p><strong>ご本人の照会</strong><br>
                            お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
                        <p><strong>法令、規範の遵守と見直し</strong><br>
                            当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
                        <p><strong>お問い合せ</strong><br>
                            当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。<br>
                            EVOLABLE ASIA Co.,Ltd <br>
                            4rd Fl, SaiGon Financial Center<br>
                            No. 9 Dinh Tien Hoang, District 1, HCMC<br>
                            Tel: 08-39111489 Fax: 08-39118767<br>
                            Mail: <a href="mailto:info@evolable.asia">info@evolable.asia</a>
                        </p>
                    </li>
                </ul>
            </div>
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