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
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- favicon -->

<?php if ( of_get_option( 'custom_favicon' ) ) { ?>
<link rel="icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" />
<?php } ?>

<!--[if IE]><?php if ( of_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->

<?php wp_head(); ?>
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
	.nav>li>a:hover,.nav>li>a:focus{
		text-decoration:none;
		background-color:#e44884;
		color: #fff;
	}
	nav.navbar{
		min-height: 45px;
	}
	nav.nav>li>a {
		padding: 15px 15px;
	}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="container">
		<?php do_action( 'before' ); ?>
		<!-- delete head！！dale #masthead -->
	</div>
		<!-- delete nav! dale --><!-- .site-navigation -->

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="">
			<ul id="menu-main-menu" class="nav nav-pills">
			    <li data-menuanchor="firstPage" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78 active"><a href="#firstPage">爱的邀约</a></li>
			    <li data-menuanchor="secondPage"><a href="#secondPage">喜宴回函</a></li>
			    <li data-menuanchor="thirdPage"><a href="#thirdPage">婚宴地图</a></li>
			    <li data-menuanchor="fourthPage"><a href="#fourthPage">婚纱相册</a></li>
			</ul>
		</div>
	</div>
</nav>
<div id="content" class="site-content container">

<div id="fullpage">
	<div class="section">
	尊敬的亲朋好友：
	<p style="text-align: left;"><b>       郭向科</b>弟兄与<strong>李永焕</strong>姊妹的结婚典礼将于2014年11月08日（周六）上午 9：30在十平方（北京海淀区学清路逸城东苑9号楼3层）举行。
	感谢上帝的恩典和弟兄妹妹们的一路的陪伴，期待大家前来观礼！
	婚礼依基督教仪式举行。
	愿与大家一起见证这神圣而美好的时刻！</p>

	<p style="text-align: right;">爱你们的：郭向科+李永焕</p>
	</div>

	<div class="section">
		<?php echo do_shortcode("[pie_register_form]");?>
	</div>

	<div class="section">
		<p style="text-align: center;"><strong>This is a regular Page</strong> and you can add any content here.</p>
		<p style="text-align: center;"><strong> Slider is optional</strong> and can be disabled.</p>
	</div>

	<div class="section">
	<?php //echo do_shortcode("[image-carousel]");?>
		<div id="Gallery">
			<div class="gallery-row">
				<div class="gallery-item"><a href="http://photoswipe.com/latest/examples/images/full/001.jpg"><img src="http://photoswipe.com/latest/examples/images/thumb/001.jpg" alt="Image 01" /></a></div>
				<div class="gallery-item"><a href="http://photoswipe.com/latest/examples/images/full/002.jpg"><img src="http://photoswipe.com/latest/examples/images/thumb/002.jpg" alt="Image 02" /></a></div>
				<div class="gallery-item"><a href="http://photoswipe.com/latest/examples/images/full/003.jpg"><img src="http://photoswipe.com/latest/examples/images/thumb/003.jpg" alt="Image 03" /></a></div>
			</div>
			<div class="gallery-row">
				<div class="gallery-item"><a href="http://photoswipe.com/latest/examples/images/full/004.jpg"><img src="http://photoswipe.com/latest/examples/images/thumb/004.jpg" alt="Image 04" /></a></div>
				<div class="gallery-item"><a href="http://photoswipe.com/latest/examples/images/full/005.jpg"><img src="http://photoswipe.com/latest/examples/images/thumb/005.jpg" alt="Image 05" /></a></div>
				<div class="gallery-item"><a href="http://photoswipe.com/latest/examples/images/full/006.jpg"><img src="http://photoswipe.com/latest/examples/images/thumb/006.jpg" alt="Image 06" /></a></div>
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
						
			
		</script>
	</div>
</div>
