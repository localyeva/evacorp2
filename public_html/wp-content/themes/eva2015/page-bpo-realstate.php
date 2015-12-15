<?php
/*
 * Author: Kha
 * Template Name: BPO Real State
 * 
 */
get_header();
?>

<div id="realestate">
    <div class="head-banner-wrap blue">
        <div class="container text-center">
            <div class="col-md-12">
                <h2>不動産BPO</h2>
            </div>
        </div>
    </div>   	
	<div class="row-gap-medium"></div>
	<div class="container-fluid">
	    <div class="container">
	        <ul class="breadcrumb-cp">
	            <li>
	                    <a href="<?php echo home_url('') ?>">HOME</a> <span class="divider">></span>
	                </li>
	                <li>
	                    <a href="<?php echo home_url('service') ?>">サービス</a> <span class="divider">></span>
	                </li>
	                <li class="active">不動産BPO</li>
	        </ul>
	    </div>
	</div>
	<div class="row-gap-medium"></div>

	<div class="container center realastate-1">
	    <div class="row">
	        <div class="col-xs-12 col-md-12 no-padding-lr text-center">
	                <span class="text-1">不動産のサイト更新には、</span>
	                <span class="text-2">不動産に特化したBPO</span>
	                <span class="text-1">を 。</span>
	        </div>
	    </div>
	</div>

	<div class="row-gap-big"></div>

	<div class="container center realastate-2">    
	    <div class="row">
	        <div class="col-xs-12 col-md-12 text-pos">            
	            <h2>なぜ不動産」BPOなのか?</h2>
	            <div class="row-gap-medium"></div>
	            <h3>Why “Real-Estate BPO” ?</h3>          
	        </div>
	    </div>    
	</div>

	<div class="container center realastate-3">    
	    <div class="row">
	        <div class="col-xs-12 col-sm-12 col-dm-12 col-lg-12 text-pos">         
	            <img src="<?php echo get_template_directory_uri() ?>/img/realestate/3.png" class="img-responsive center-block">           
	        </div>
	        <div class="col-xs-12 col-sm-12 col-dm-12 col-lg-12 text-pos">         
	            <img src="<?php echo get_template_directory_uri() ?>/img/realestate/4.png" class="img-responsive center-block">           
	        </div>
	        <div class="col-xs-12 col-sm-12 col-dm-12 col-lg-12 text-pos">         
	            <img src="<?php echo get_template_directory_uri() ?>/img/realestate/5.png" class="img-responsive center-block">           
	        </div>                
	    </div>    
	</div>

	<div class="realastate-4">
	    <div class="container center realastate-4-1 text-center">
	        <div class="row">
	            <div class="col-xs-12 col-sm-12 col-dm-12 col-lg-12">
	                <p>不動産に特化した実績から得た<span>ノウハウ</span>と<span>対応力。</span></p>
	                <p>こんなパターンにも臨機応変に。</p>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="container center realastate-5"></div>

	<div class="container center realastate-6">
	    <div class="row text-center">
	        <div class="col-xs-12 col-sm-12 col-dm-12 col-lg-12">
	            <p>1.サイト入力</p>
	            <img src="<?php echo get_template_directory_uri() ?>/img/realestate/8.png" class="img-responsive center-block">
	            <p>2.サイトへの入力+掲載確認</p>
	            <img src="<?php echo get_template_directory_uri() ?>/img/realestate/9.png" class="img-responsive center-block">
	            <p>3.空室確認+サイト更新</p>
	            <img src="<?php echo get_template_directory_uri() ?>/img/realestate/10.png" class="img-responsive center-block">                        
	        </div>
	    </div>
	</div>

	<div class="row-gap-huge"></div>

	<div class="realastate-7">
	    <div class="container center realastate-7-1">
	        <div class="row" style="max-width:800px;margin:auto;">
	            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                <p>事例紹介 不動産会社A社の場合</p>
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                <img src="<?php echo get_template_directory_uri() ?>/img/realestate/12.png" class="img-responsive center-block realastate-7-1-1">
	            </div>
	        </div>
	    </div>
	</div>

	<div class="realastate-8">
	    <div class="container center realastate-8-1">
	        <div class="row text-center" style="max-width:800px;margin:auto;">
	            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                <p>御社の業務をベトナムにアウトソーシングし、</p>
	                <p>コストの圧縮と業務の合理化を 図りましょう!</p>
	            </div>
	        </div>
	        <div class="row-gap-big"></div>
	        <div class="row" style="max-width:600px;margin:auto;">
	            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center no-padding-lr">
	                <a href="<?php echo home_url('service/about_bpo') ?>" class="center-block">BPOについて</a>
	            </div>  
	            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center no-padding-lr realastate-8-1-xs">
	                <a href="<?php echo home_url('recomend') ?>" class="center-block">参加企業の声</a>
	            </div>                         
	        </div>        
	    </div>
	</div>	

<?php get_template_part('part', 'contact'); ?>
</div>

<?php get_footer(); ?>