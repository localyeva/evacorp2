<?php
/*
 * Autdor: KhaCao
 * Template Name: contact-thankyou
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
                    <span>よくある</span>
                </div>                             
            </div>
        </div>   
        <h2>contact</h2>   
        <div class="row-gap-big"></div>  
    </div>    
    <div class=" row contact-content-3">
        <!--<h2 class="blue fz30 fwB">お問い合わせフォーム</h2>-->
        <p class="center">お問い合わせありがとうございます。</p>
        <p>送信が完了いたしました。<br />
            弊社で確認後、折り返しご連絡させていただきます。<br />
            2営業日以上経ってもご連絡がない場合は、お電話にてお問い合わせください。<br />
        </p>
        <p><a class="link-top" href="<?php echo bloginfo('url') ?>">TOPへ戻る</a></p>

        <p class="center">
            上記フォームで送信できない場合は、必要項目をご記入の上、<br />
            <a class="back-link" id="mailContact" href="mailto:recruitmentjp@evolable.asia">recruitmentjp@evolable.asia</a>までメールをお送りください。
        </p>        
    </div>
    <div class="row-gap-big"></div>                                       
</div>
<?php get_footer('contact'); ?>