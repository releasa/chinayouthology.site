<!DOCTYPE HTML>
<!--[if IE 6]><html class="ie6 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="ie7 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="ie8 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if IE 9]><html class="ie9 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9) ]><!--><html lang="en" dir="ltr" class="no-js"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>青年志 - China Youthology</title>
<link rel="shortcut icon" href="/resources/front/favicon.ico" />
<link rel="stylesheet" href="/resources/front/css/reset.css" />
<link rel="stylesheet" href="/resources/front/css/screen.css" />
<!--[if IE]>
<script src="/resources/front/js/ie/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<style type="text/css">.css3{behavior: url(/resources/front/js/ie/css3.htc);-pie-lazy-init: true; position: relative;}.ie6png{-pie-png-fix: true;}</style>
<script src="/resources/front/js/ie/ie9.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="/resources/front/js/ie/png.js"></script>
<script>DD_belatedPNG.fix('.pngfix, .pngfix img');</script>
<![endif]-->
<script src="/resources/front/js/ie/modernizr.js"></script>
<script src="/resources/front/js/jquery/jquery.js"></script>
<script>
var timeout         = 0;
var closetimer		= 0;
var ddmenuitem      = 0;
function Subnav_open()
{	Subnav_canceltimer();
	Subnav_close();
	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}
function Subnav_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}
function Subnav_timer()
{	closetimer = window.setTimeout(Subnav_close, timeout);}
function Subnav_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}
$(document).ready(function()
{	$('#nav > ul > li').bind('mouseover', Subnav_open);
	$('#nav > ul > li').bind('mouseout',  Subnav_timer);});
document.onclick = Subnav_close;
</script>
<link rel="stylesheet" href="/resources/front/js/jquery/flexslider/flexslider.css">
<script src="/resources/front/js/jquery/flexslider/jquery.flexslider.min.js"></script>
<script>

//slider
$(window).load(function() {

	// 侧栏小图轮播2
	$('#flexslider1').flexslider({
		animation: "slide",
		controlNav: true, // 是否显示小圆点
		animationLoop: true, // 是否循环轮播
		slideshow: true, // 是否自动轮播
	});	
		
});
</script>


</head>
<body>
<div class="wrap-<?php echo $css;?> wrapper cf">
	<div class="gridsystem cf">

		
		<header id="header" class="cf">
	    	<h1 id="logo">
	    		<a href="index.html">
	    			<img src="/resources/front/images/logo.png" alt="青年志 - China Youthology" title="青年志 - China Youthology" />
	    		</a>
	    	</h1>
	        <nav id="nav">
	        	<ul>
	        		<li><a <?php if($menu == 'home') echo 'class="active"';?> href="/">HOME</a></li>
					<li><a <?php if($menu == 'about') echo 'class="active"';?> href="/about">ABOUT</a></li>
	        		<li><a <?php if($menu == 'approach') echo 'class="active"';?> href="/approach">APPROACH</a></li>
					<li><a <?php if($menu == 'services') echo 'class="active"';?> href="/services">SERVICES</a>
						<ul><li><a <?php if($menu == 'cases') echo 'class="active"';?> href="/cases" style="width:61px;">CASES</a></li></ul>
					</li>
					<li><a <?php if($menu == 'insights') echo 'class="active"';?> href="/insights">INSIGHTS</a></li>
	        		<li><a <?php if($menu == 'openyouthology') echo 'class="active"';?> href="/openyouthology">OPEN YOUTHOLOGY</a></li>
	        		<li><a <?php if($menu == 'contact') echo 'class="active"';?> href="/contact">CONTACT</a>
						<ul><li><a <?php if($menu == 'careers') echo 'class="active"';?>href="/careers">CAREERS</a></li></ul>
	        		</li>
	        	</ul>
	        </nav>
	    </header><!-- //header -->


