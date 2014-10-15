<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package unite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>盟约|郭向科❤李永焕</title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- favicon -->

<?php if ( of_get_option( 'custom_favicon' ) ) { ?>
<link rel="icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" />
<?php } ?>

<!--[if IE]><?php if ( of_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->

<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="http://alvarotrigo.com/fullPage/jquery.fullPage.css" />
<style>
	.navbar.navbar-default {
		background-color: #f0f0f0;
		font-weight: 200;
		/*font-family: "微软雅黑"; */
		z-index: 100;
		color: rgb(102, 102, 102); 
	}
	.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
		color: #fff;
		background-color: #e44884 !important;
	}
	.nav-pills>li>a {
		border-radius: 0px;
	}
	#menu-main-menu  li {
		float: left;
		position: relative;
		display: block;
		list-style: none;
	}
	#menu-main-menu  li a {
		position: relative;
		display: block;
		padding: 5px 8px;
	}
	li.active a ,li.active a:focus {
		color: #fff;
		background-color: #e44884 !important;
	}
	#menu-main-menu li a:hover{
		color: #fff;
		background-color: #e44884 !important;
	} 
	#menu-container{
		background-color: #f0f0f0;
		font-weight: 200;
		z-index: 100;
		color: rgb(102, 102, 102);
		position: relative;
	}
	#menu-main-menu {
		margin-bottom: 0px;
		padding-left: 0px;	
	}
	#textg{
		padding: 25px;
		padding-top: 5px;
		font-size: 16px;
		line-height: 24px;
	}
	#textg p{
		text-indent: 2em;
		margin-bottom: 5px;
	}
	#textg .text-center{
		text-align: center;
	}
	/*#s1{
		background:url("http://love.yongbuzhixi.com/psb.jpg") #1bbc9b center 70% no-repeat;
	}	*//* Defining each section background and styles
	* --------------------------------------- */
	#s1{
		background-image: url(http://love.yongbuzhixi.com/bg001.jpg);
		/*padding: 30% 0 0 0;*/
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		opacity: 0.4;
		color:#000;
	}
/*	#s2{
		background-image: url(http://love.yongbuzhixi.com/bg3.jpg);
		padding: 6% 0 0 0;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}*/
/*	#s3{
		background-image: url(http://love.yongbuzhixi.com/bg4.jpg);
		padding: 6% 0 0 0;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}*/
	.comment-form-social-connect,.simplemodal-login,.simplemodal-forgotpw {
		display: none;
	}
	#pie_register .fields {
		margin: 0;
	}
	.pageFields-email{
		display: none;
	}
	.fp-tableCell {
		display: table;
	}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
		<!-- delete nav! dale --><!-- .site-navigation -->
	 <div id='menu-container'>
		<ul id="menu-main-menu">
		    <li data-menuanchor="firstPage" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78 active"><a href="#firstPage">爱的邀约</a></li>
		    <li data-menuanchor="secondPage"><a href="#secondPage">喜宴回函</a></li>
		    <li data-menuanchor="thirdPage"><a href="#thirdPage">婚宴地图</a></li>
		    <li data-menuanchor="fourthPage"><a href="#fourthPage">婚纱相册</a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
<div id="content" class="site-content">

<div id="fullpage">
	<div class="section" id="s1">
		<div id="textg">
	尊敬的<?php echo isset($_GET['i'])?$_GET['i']:'亲朋好友'; ?>：
	<p style="text-align: left;"><b>郭向科</b>和<strong>李永焕</strong>的结婚典礼将于2014年11月08日（周六）上午 10：00在食平方饭店举行。在我们携手步入婚姻殿堂之际，诚挚的邀请您：
	</p><p class="text-center"><b>见证我们的爱情，分享我们的喜悦！</b>
	</p>

	<p style="text-indent: 0em;text-align: left;">新郎：郭向科<br/>新娘：李永焕</p>
	</div></div>

	<div class="section" id="s2">
		<?php echo do_shortcode("[pie_register_form]");?>
	</div>

	<div class="section" id="">

    <div class="slide"> <img src="http://love.yongbuzhixi.com/map100.jpg" alt=""> </div>
    <div class="slide"> <img src="http://love.yongbuzhixi.com/map02.jpg" alt=""> </div>
    <div class="slide"> <img src="http://love.yongbuzhixi.com/map03.jpg" alt=""> </div>
		<!-- <div class="slide"  data-anchor="slide1"  id="slide1">食平方学院路店：海淀区学清路逸成东苑9号楼3楼，(010)82429425,(010)82429592，点击：http://j.map.baidu.com/4Dkao </div> -->
	</div>

	<div class="section" id="s4">
	<?php //echo do_shortcode("[image-carousel]");?>
		<div id="Gallery">
			<div class="gallery-row">
				<div class="gallery-item"><a href="http://love.yongbuzhixi.com/001.jpg"><img src="http://love.yongbuzhixi.com/0s1.png" alt="Image 01" /></a></div>
				<div class="gallery-item"><a href="http://love.yongbuzhixi.com/002.jpg"><img src="http://love.yongbuzhixi.com/0s2.png" alt="Image 02" /></a></div>
				<div class="gallery-item"><a href="http://love.yongbuzhixi.com/003.jpg"><img src="http://love.yongbuzhixi.com/0s3.png" alt="Image 03" /></a></div>
			</div>
			<div class="gallery-row">
				<div class="gallery-item"><a href="http://love.yongbuzhixi.com/004.jpg"><img src="http://love.yongbuzhixi.com/0s4.png" alt="Image 04" /></a></div>
				<div class="gallery-item"><a href="http://love.yongbuzhixi.com/008.jpg"><img src="http://love.yongbuzhixi.com/0s8.png" alt="Image 08" /></a></div>
				<div class="gallery-item"><a href="http://love.yongbuzhixi.com/005.jpg"><img src="http://love.yongbuzhixi.com/0s5.png" alt="Image 05" /></a></div>
			</div>
			<div class="gallery-row">
				<div class="gallery-item"><a href="http://love.yongbuzhixi.com/007.jpg"><img src="http://love.yongbuzhixi.com/0s7.png" alt="Image 07" /></a></div>
				<div class="gallery-item"><a href="http://love.yongbuzhixi.com/006.jpg"><img src="http://love.yongbuzhixi.com/0s6.png" alt="Image 06" /></a></div>				
				<div class="gallery-item"><a href="http://love.yongbuzhixi.com/009.jpg"><img src="http://love.yongbuzhixi.com/0s9.png" alt="Image 09" /></a></div>
			</div>
		</div>
		<style type="text/css">
			div.gallery-row:after { clear: both; content: "."; display: block; height: 0; visibility: hidden; }
			div.gallery-item { float: left; width: 33.33333333%; }
			div.gallery-item a { display: block; margin: 5px; border: 1px solid #3c3c3c; }
			div.gallery-item img { display: block; width: 100%; height: auto; }
		</style>
		
		<!-- <link href="1.0.11/photoswipe.css" type="text/css" rel="stylesheet" />
		
		<script type="text/javascript" src="1.0.11/lib/simple-inheritance.min.js"></script>
		<script type="text/javascript" src="1.0.11/code-photoswipe-1.0.11.min.js"></script>
		 -->
		<script type="text/javascript">
	
			$(document).ready(function() {
			    $('#fullpage').fullpage({
			    anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage'],

				// sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke'],
			    menu: '#menu-main-menu',
			    // paddingTop: 356,
			    // paddingBottom: 56,
			    resize : false,
				});
			});
			$('#description').attr('rows',3);
		</script>
		<script type="text/javascript">
			
			// Set up PhotoSwipe with all anchor tags in the Gallery container 
			document.addEventListener('DOMContentLoaded', function(){
				
				Code.photoSwipe('a', '#Gallery');
			}, false);
			
			
			/* 
				Overview: 
				---------
				
				Code.photoSwipe(thumbnail-elements, container-element, options);
					
				When you specify a container-element, the helper uses event delegation
				to handle the click event, i.e. rather than having 50 click event listeners
				for each thumbnail, we have one for the container then try and deduce which
				thumbnail was clicked. If you omit a container, an event listener will be placed 
				on each individual thumbnail found.
				
				
				With options:
				-------------
				Code.photoSwipe('a', '#Gallery', { loop: false } );
				
				
				Using preselected elements:
				---------------------------
				var galleryEl = document.getElementById('Gallery');
				var thumbEls = galleryEl.querySelectorAll('a');
				
				Code.photoSwipe(thumbEls, galleryEl);
			
			*/
			document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
				WeixinJSBridge.call('hideOptionMenu');
			});		
				
		</script>
	</div>
</div>
