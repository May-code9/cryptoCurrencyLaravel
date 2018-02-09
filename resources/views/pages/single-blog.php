<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                                <!-- head -->
        
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Super User" />
	<meta name="description" content="Bitcoin Joomla template" />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>Single Blog</title>
	<link href="templates/bitcoin/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link href="index.php/component/search/?Itemid=119&amp;format=opensearch" rel="search" title="Search Bitcoin - Mining and Cryptocurrency Joomla Template" type="application/opensearchdescription+xml" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css" />
	<link href="templates/bitcoin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="templates/bitcoin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="templates/bitcoin/css/style.css" rel="stylesheet" type="text/css" />
	<link href="templates/bitcoin/css/legacy.css" rel="stylesheet" type="text/css" />
	<link href="templates/bitcoin/css/template.css" rel="stylesheet" type="text/css" />
	<link href="templates/bitcoin/css/presets/preset1.css" rel="stylesheet" type="text/css" class="preset" />
	<link href="templates/bitcoin/css/frontend-edit.css" rel="stylesheet" type="text/css" />
	<link href="components/com_sppagebuilder/assets/css/sppagebuilder.css" rel="stylesheet" type="text/css" />
	<link href="components/com_sppagebuilder/assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
	<link href="modules/mod_j2store_cart/css/j2store_cart.css" rel="stylesheet" type="text/css" />
	<link href="media/j2store/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
body{font-family:Open Sans, sans-serif; font-size:14px; font-weight:normal; }
h1{font-family:Open Sans, sans-serif; font-weight:800; }
h2{font-family:Open Sans, sans-serif; font-weight:600; }
h3{font-family:Open Sans, sans-serif; font-weight:normal; }
h4{font-family:Open Sans, sans-serif; font-weight:normal; }
h5{font-family:Open Sans, sans-serif; font-weight:600; }
h6{font-family:Open Sans, sans-serif; font-weight:600; }
.sp-megamenu-parent{font-family:Open Sans, sans-serif; font-size:13px; font-weight:600; }
#sp-top-bar{ background-color:#2e2e2e;color:#ffffff; }
#sp-top-bar a{color:#ffffff;}
#sp-top-bar a:hover{color:#ffb426;}
#sp-header{ color:#252525; }
#sp-bottom{ background-color:#333333;color:#fafafa;padding:100px 0px; }
#sp-bottom a{color:#fafafa;}
#sp-footer{ background-color:#2e2e2e;color:#fafafa; }
	</style>
	<script src="media/jui/js/jquery.min.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script>
	<script src="media/jui/js/jquery-noconflict.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script>
	<script src="media/jui/js/jquery-migrate.min.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script>
	<script src="media/system/js/caption.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script>
	<script src="templates/bitcoin/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="templates/bitcoin/js/jquery.sticky.js" type="text/javascript"></script>
	<script src="templates/bitcoin/js/main.js" type="text/javascript"></script>
	<script src="templates/bitcoin/js/custom.js" type="text/javascript"></script>
	<script src="templates/bitcoin/js/frontend-edit.js" type="text/javascript"></script>
	<script src="components/com_sppagebuilder/assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
	<script src="components/com_sppagebuilder/assets/js/sppagebuilder.js" type="text/javascript"></script>
	<script src="components/com_sppagebuilder/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
	<script type="text/javascript">

		var j2storeURL = '';

jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});
var sp_preloader = '0';

var sp_gotop = '0';

var sp_offanimation = 'default';

jQuery(function($){

			var addonId 				= $("#sppb-addon-1516034312136"),
					prentSectionId	= addonId.parent().closest("section");

			if($("#sppb-addon-1516034312136").find(".optintype-popup").length !== 0 && $("body:not(.layout-edit)").length !== 0){
					prentSectionId.hide();
			}

			if($("#sppb-addon-1516034312136").find(".optintype-popup").length !== 0 && $("body:not(.layout-edit)").length !== 0){
					//var parentSection 	= $("#sppb-addon-1516034312136").parent().closest("section"),
					var addonWidth 			= addonId.parent().outerWidth(),
							optin_timein		= 2000,
							optin_timeout		= 10000,
 							prentSectionId	= ".com-sppagebuilder:not(.layout-edit) #" + addonId.attr("id");

						$(window).load(function () {
						setTimeout(function(){
							$.magnificPopup.open({
					        items: {
					            src: "<div class=\"sppb-optin-form-popup-wrap\" \">"+$(addonId)[0].outerHTML + "</div>"
											//src: "<div style=\"width:+"addonWidth"+\">" + $(addonId)[0].outerHTML + "</div>"
					        },
					        type: "inline",
									mainClass: "mfp-fade",
									disableOn: function() {
							      return true;
							    },
									callbacks: {
						        open: function() {
											if(optin_timeout){
						            setTimeout(function(){
						                $("#sppb-addon-1516034312136").magnificPopup("close");
						            }, optin_timeout);
											}
						        }
						    	}
					    });
						}, optin_timein);
						}); //window
			};
		})
jQuery(function($){ $(".hasTooltip").tooltip({"html": true,"container": "body"}); });

if(typeof(j2store) == 'undefined') {
	var j2store = {};
}
if(typeof(j2store.jQuery) == 'undefined') {
	j2store.jQuery = jQuery.noConflict();
}
(function($) {
	$(document).bind('after_adding_to_cart', function(element,data, type){

		var murl = '/index.php/component/j2store/carts/ajaxmini';

		$.ajax({
			url : murl,
			type : 'get',
			cache : false,
			contentType : 'application/json; charset=utf-8',
			dataType : 'json',
			success : function(json) {
				if (json != null && json['response']) {
					$.each(json['response'], function(key, value) {
						if ($('.j2store_cart_module_' + key).length) {
							$('.j2store_cart_module_' + key).each(function() {
								$(this).html(value);
							});
						}
					});
				}
			}

		});

	});
})(j2store.jQuery);

	</script>
	<meta property="og:url" content="index.php/blog/single-blog" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Why to  Investment in Bitcoin" />
	<meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm..." />
	<meta property="og:image" content="images/blog01.jpg" />
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="315" />

                                </head>
                <body class="site com-content view-article no-layout no-task itemid-119 en-gb ltr  sticky-header layout-fluid off-canvas-menu-init">

                    <div class="body-wrapper">
                        <div class="body-innerwrapper">
                            <section id="sp-top-bar"><div class="container"><div class="row"><div id="sp-top1" class="col-sm-6 col-md-6"><div class="sp-column "><ul class="social-icons"><li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li><li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li><li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li><li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li></ul></div></div><div id="sp-top2" class="col-sm-6 col-md-6"><div class="sp-column "><ul class="sp-contact-info"><li class="sp-contact-phone"><i class="fa fa-phone"></i> <a href="tel:+1(234)567-890">+1 (234) 567-890</a></li><li class="sp-contact-email"><i class="fa fa-envelope"></i> <a href="mailto:contact@yourmail.com">contact@yourmail.com</a></li><li class="sp-contact-time"><i class="fa fa-clock-o"></i>Mon - Fri: 8:00 - 17:30</li></ul></div></div></div></div></section><header id="sp-header"><div class="container"><div class="row"><div id="sp-logo" class="col-xs-8 col-sm-2 col-md-2"><div class="sp-column "><div class="logo"><a href="/"><img class="sp-default-logo hidden-xs" src="images/logo.png" alt="Bitcoin - Mining and Cryptocurrency Joomla Template"><img class="sp-default-logo visible-xs" src="images/logo.png" alt="Bitcoin - Mining and Cryptocurrency Joomla Template"></a></div></div></div><div id="sp-menu" class="col-xs-4 col-sm-8 col-md-8"><div class="sp-column ">			<div class='sp-megamenu-wrapper'>
				<a id="offcanvas-toggler" class="visible-sm visible-xs" aria-label="Menu" href="#"><i class="fa fa-bars" aria-hidden="true" title="Menu"></i></a>
				<ul class="sp-megamenu-parent menu-drop-in hidden-sm hidden-xs"><li class="sp-menu-item"><a  href="/index.php" >Home</a></li><li class="sp-menu-item"><a  href="/index.php/about-us" >About Us</a></li><li class="sp-menu-item"><a  href="/index.php/services" >Services</a></li><li class="sp-menu-item sp-has-child"><a  href="/index.php/pages" >Pages</a><div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;"><div class="sp-dropdown-inner"><ul class="sp-dropdown-items"><li class="sp-menu-item"><a  href="/index.php/pages/login" >Login</a></li><li class="sp-menu-item"><a  href="/index.php/pages/create-an-account" >Create an account</a></li><li class="sp-menu-item"><a  href="/index.php/pages/faq" >Faq</a></li></ul></div></div></li><li class="sp-menu-item"><a  href="/index.php/shop" >Shop</a></li><li class="sp-menu-item sp-has-child active"><a  href="#" >Blog</a><div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;"><div class="sp-dropdown-inner"><ul class="sp-dropdown-items"><li class="sp-menu-item"><a  href="/index.php/blog/blog-large" >Blog Large</a></li><li class="sp-menu-item current-item active"><a  href="/index.php/blog/single-blog" >Single Blog</a></li></ul></div></div></li><li class="sp-menu-item"><a  href="/index.php/contact" >Contact</a></li></ul>			</div>
		</div></div><div id="sp-search" class="col-sm-2 col-md-2 hidden-sm hidden-xs"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">			<div class="j2store_cart_module_103">
						<div class="j2store-minicart-button">
				<span class="cart-item-info">
					<a class="link" href="/index.php/component/j2store/carts">
						<i class="fa fa-shopping-cart"></i>
						<span class="cart-item-count">1</span>
					</a>
				</span>
			</div>

									</div>
			</div></div></div></div></div></div></header><section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-page-title"style="background-color: #f7f7f7;"><div class="container"><h2>BLOG</h2><h3>Single Blog</h3><div class="sp-module "><div class="sp-module-content">
<ol class="breadcrumb">
	<li><i class="fa fa-home"></i></li><li><a href="/index.php" class="pathway">Home</a></li><li><a href="#" class="pathway">Blog</a></li><li class="active">Single Blog</li></ol>
</div></div></div></div></div></div></div></section><section id="sp-breadc"><div class="container"><div class="row"><div id="sp-breadcrumb" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">
<ol class="breadcrumb">
	<li><i class="fa fa-home"></i></li><li><a href="/index.php" class="pathway">Home</a></li><li><a href="#" class="pathway">Blog</a></li><li class="active">Single Blog</li></ol>
</div></div></div></div></div></div></section><section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-9 col-md-9"><div class="sp-column "><div id="system-message-container">
	</div>
<article class="item item-page" itemscope itemtype="http://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB" />


		<div class="entry-image full-image"> <img
			 src="images/blog01.jpg" alt="" itemprop="image"/> </div>

	<div class="entry-header">


					<h2 itemprop="name">
									Why to  Investment in Bitcoin							</h2>
												</div>





			<div itemprop="articleBody">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>	</div>




<ul class="pager pagenav">
	<li class="next">
		<a class="hasTooltip" title="How do bitcoin transactions work?" aria-label="Next article: How do bitcoin transactions work?" href="/index.php/blog/blog-large/2-how-do-bitcoin-transactions-work" rel="next">
			<span aria-hidden="true">Next</span> <span class="icon-chevron-right" aria-hidden="true"></span>		</a>
	</li>
</ul>



			<div class="article-footer-wrap">
			<div class="article-footer-top">
									<div class="helix-social-share">
		<div class="helix-social-share-icon">
			<ul>

				<li>
					<div class="facebook" data-toggle="tooltip" data-placement="top" title="Share On Facebook">

						<a class="facebook" onClick="window.open('http://www.facebook.com/sharer.php?u=index.php/blog/single-blog','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://www.facebook.com/sharer.php?u=index.php/blog/single-blog">

							<i class="fa fa-facebook"></i>
						</a>

					</div>
				</li>
				<li>
					<div class="twitter"  data-toggle="tooltip" data-placement="top" title="Share On Twitter">

						<a class="twitter" onClick="window.open('http://twitter.com/share?url=index.php/blog/single-blog&amp;text=Why%20to%20%20Investment%20in%20Bitcoin','Twitter share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://twitter.com/share?url=index.php/blog/single-blog&amp;text=Why%20to%20%20Investment%20in%20Bitcoin">
							<i class="fa fa-twitter"></i>
						</a>

					</div>
				</li>
				<li>
					<div class="google-plus">
						<a class="gplus" data-toggle="tooltip" data-placement="top" title="Share On Google Plus" onClick="window.open('https://plus.google.com/share?url=index.php/blog/single-blog','Google plus','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;" href="https://plus.google.com/share?url=index.php/blog/single-blog" >
						<i class="fa fa-google-plus"></i></a>
					</div>
				</li>

				<li>
					<div class="linkedin">
						<a class="linkedin" data-toggle="tooltip" data-placement="top" title="Share On Linkedin" onClick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=index.php/blog/single-blog','Linkedin','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;" href="http://www.linkedin.com/shareArticle?mini=true&url=index.php/blog/single-blog" >

						<i class="fa fa-linkedin-square"></i></a>
					</div>
				</li>
			</ul>
		</div>
	</div> <!-- /.helix-social-share -->














			</div>
					</div>

</article>
</div></div><div id="sp-right" class="col-sm-3 col-md-3"><div class="sp-column class2"><div class="sp-module "><h3 class="sp-module-title">Categories</h3><div class="sp-module-content"><ul class="categories-module">
	<li >
		<a href="/index.php/blog/blog-large/9-bitcoin-investment">
		Bitcoin Investment					</a>

					</li>
	<li >
		<a href="/index.php/blog/blog-large/10-bitcoin-mining">
		Bitcoin Mining					</a>

					</li>
	<li >
		<a href="/index.php/blog/blog-large/11-bitcoin-transaction">
		Bitcoin Transaction					</a>

					</li>
	<li >
		<a href="/index.php/blog/blog-large/12-bitcoin-exchange">
		Bitcoin Exchange					</a>

					</li>
	<li >
		<a href="/index.php/blog/blog-large/13-safety-wallet">
		Safety Wallet					</a>

					</li>
</ul>
</div></div><div class="sp-module "><div class="sp-module-content"><div class="search">
	<form action="/index.php/blog/single-blog" method="post">
		<input name="searchword" id="mod-search-searchword" maxlength="200"  class="inputbox search-query" type="text" size="0" placeholder="Search ..." />		<input type="hidden" name="task" value="search" />
		<input type="hidden" name="option" value="com_search" />
		<input type="hidden" name="Itemid" value="119" />
	</form>
</div>
</div></div><div class="sp-module "><h3 class="sp-module-title">Recent Posts</h3><div class="sp-module-content"><div class="latestnews">
	<div itemscope itemtype="http://schema.org/Article">
		<a href="/index.php/blog/single-blog" itemprop="url">
			<span itemprop="name">
				Why to  Investment in Bitcoin			</span>
		</a>
		<small>14 January 2018</small>
	</div>
	<div itemscope itemtype="http://schema.org/Article">
		<a href="/index.php/blog/blog-large/2-how-do-bitcoin-transactions-work" itemprop="url">
			<span itemprop="name">
				How do bitcoin transactions work?			</span>
		</a>
		<small>14 January 2018</small>
	</div>
	<div itemscope itemtype="http://schema.org/Article">
		<a href="/index.php/blog/blog-large/3-bitcoin-transaction-fees" itemprop="url">
			<span itemprop="name">
				Bitcoin transaction fees			</span>
		</a>
		<small>14 January 2018</small>
	</div>
	<div itemscope itemtype="http://schema.org/Article">
		<a href="/index.php/blog/blog-large/4-3-things-to-know-about-bitcoin" itemprop="url">
			<span itemprop="name">
				3 Things to Know about Bitcoin			</span>
		</a>
		<small>14 January 2018</small>
	</div>
	<div itemscope itemtype="http://schema.org/Article">
		<a href="/index.php/blog/blog-large/5-why-bitcoin-transaction-taking-so-long" itemprop="url">
			<span itemprop="name">
				Why Bitcoin Transaction Taking So Long			</span>
		</a>
		<small>14 January 2018</small>
	</div>
</div>
</div></div><div class="sp-module "><h3 class="sp-module-title">Tags</h3><div class="sp-module-content"><div class="tagspopular tagscloud">
		<a class="tag-name" href="/index.php/component/tags/tag/bitcoin">
			bitcoin					</a>
			<a class="tag-name" href="/index.php/component/tags/tag/currency">
			currency					</a>
			<a class="tag-name" href="/index.php/component/tags/tag/coin">
			coin					</a>
			<a class="tag-name" href="/index.php/component/tags/tag/money">
			money					</a>
			<a class="tag-name" href="/index.php/component/tags/tag/insurance">
			insurance					</a>
	</div>
</div></div></div></div></div></div></section><section id="sp-bottom"><div class="container"><div class="row"><div id="sp-bottom1" class="col-sm-6 col-md-4"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">FOOTER MENU</h3><div class="sp-module-content"><div class="mod-sppagebuilder  sp-page-builder" >
	<div class="page-content">
		<div id="section-id-1516037004857" class="sppb-section "  ><div class="sppb-container-inner"><div class="sppb-row"><div class="sppb-col-md-6"><div id="column-id-1516037004855" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1516037004863" class="clearfix" ><div class="sppb-addon sppb-addon-text-block 0  "><div class="sppb-addon-content"><ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Pages</a></li>
<li><a href="#">Shop</a></li>
</ul></div></div></div></div></div></div><div class="sppb-col-md-6"><div id="column-id-1516037004856" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1516037004860" class="clearfix" ><div class="sppb-addon sppb-addon-text-block 0  "><div class="sppb-addon-content"><ul>
<li><a href="#">Login</a></li>
<li><a href="#">New account</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Blog</a></li>
</ul></div></div></div></div></div></div></div></div></div><style type="text/css">.sp-page-builder .page-content #section-id-1516035640162{padding-top:8px;padding-right:0px;padding-bottom:8px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516035640161{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516035640165 {color:#fafafa;}.sp-page-builder .page-content #section-id-1516034312127{padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516034312126{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516034312130 {color:#fafafa;}#sppb-addon-1516034312133 .sppb-empty-space {height:20px;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1516034312133 .sppb-empty-space {height:30px;}}@media (max-width:767px) {#sppb-addon-1516034312133 .sppb-empty-space {height:20px;}}#sppb-addon-1516034312136 .sppb-optin-form-icon {font-size:82px;}.sppb-optin-form-popup-wrap > #sppb-addon-1516034312136 {width:600px;}#sppb-addon-1516036908476 {color:#fafafa;}.sp-page-builder .page-content #section-id-1516037004857{padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516037004855{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516037004863 {color:#fafafa;}#column-id-1516037004856{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516037004860 {color:#fafafa;}</style>	</div>
</div>
</div></div></div></div><div id="sp-bottom2" class="col-sm-6 col-md-5"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">NEWSLETTER SIGNUP</h3><div class="sp-module-content"><div class="mod-sppagebuilder  sp-page-builder" >
	<div class="page-content">
		<div id="section-id-1516034312127" class="sppb-section "  ><div class="sppb-container-inner"><div class="sppb-row"><div class="sppb-col-md-12"><div id="column-id-1516034312126" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1516034312130" class="clearfix" ><div class="sppb-addon sppb-addon-text-block 0 sppb-text-left "><div class="sppb-addon-content">By subscribing to our mailing list you will always be update with the latest news from us.</div></div></div><div id="sppb-addon-1516034312133" class="clearfix" ><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1516034312136" class="clearfix" ><div class="sppb-addon sppb-addon-optin-forms optintype-normal newsletter sppb-text-left grid"><div class="sppb-optin-form-box sppb-row "><div class="sppb-optin-form-info-wrap media-position-top sppb-col-sm-12"><div class="sppb-optin-form-img-wrap  sppb-optin-form-icon"></div><div class="sppb-optin-form-details-wrap"></div></div><div class="sppb-optin-form-content sppb-col-sm-12"><form class="sppb-optin-form form-inline"><div class="sppb-form-group email-wrap"><input type="email" name="email" class="sppb-form-control" placeholder="Email" required="required"></div><input type="hidden" name="platform" value="mailchimp"><input type="hidden" name="hidename" value="1"><input type="hidden" name="pageid" value="1"><input type="hidden" name="addonId" value="1516034312136"><div class="button-wrap "><button type="submit" id="btn-1516034312136" class="sppb-btn sppb-btn-primary sppb-btn-rounded sppb-btn-flat"><i class="fa"></i> JOIN</button></div></form><div style="display:none;margin-top:10px;" class="sppb-optin-form-status"></div></div></div></div></div><div id="sppb-addon-1516036908476" class="clearfix" ><div class="sppb-addon sppb-addon-text-block 0 sppb-text-left "><div class="sppb-addon-content">We don't spam.</div></div></div></div></div></div></div></div></div><style type="text/css">.sp-page-builder .page-content #section-id-1516035640162{padding-top:8px;padding-right:0px;padding-bottom:8px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516035640161{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516035640165 {color:#fafafa;}.sp-page-builder .page-content #section-id-1516034312127{padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516034312126{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516034312130 {color:#fafafa;}#sppb-addon-1516034312133 .sppb-empty-space {height:20px;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1516034312133 .sppb-empty-space {height:30px;}}@media (max-width:767px) {#sppb-addon-1516034312133 .sppb-empty-space {height:20px;}}#sppb-addon-1516034312136 .sppb-optin-form-icon {font-size:82px;}.sppb-optin-form-popup-wrap > #sppb-addon-1516034312136 {width:600px;}#sppb-addon-1516036908476 {color:#fafafa;}</style>	</div>
</div>
</div></div></div></div><div id="sp-bottom3" class="col-sm-6 col-md-3"><div class="sp-column "><div class="sp-module "><h3 class="sp-module-title">GET IN TOUCH</h3><div class="sp-module-content"><div class="mod-sppagebuilder  sp-page-builder" >
	<div class="page-content">
		<div id="section-id-1516035640162" class="sppb-section "  ><div class="sppb-container-inner"><div class="sppb-row"><div class="sppb-col-md-12"><div id="column-id-1516035640161" class="sppb-column" ><div class="sppb-column-addons"><div id="sppb-addon-1516035640165" class="clearfix" ><div class="sppb-addon sppb-addon-text-block 0 sppb-text-left "><div class="sppb-addon-content"><strong>Phone</strong>: +1 (234) 567-890<br /><strong>Email:</strong> contact@yourmail.com<br /><br />228 Park Ave SNew York, NY 10003-1502US<br /><br /><a title="Google Map" href="https://www.google.com/maps/place/228+Park+Ave,+New+York,+NY+10017,+USA/@40.7543298,-73.9783973,17z/data=!3m1!4b1!4m5!3m4!1s0x89c258fdf71d54cd:0x824fb82f415fb12f!8m2!3d40.7543258!4d-73.9762086?hl=en" target="_blank" rel="noopener noreferrer">Open In Google Map</a></div></div></div></div></div></div></div></div></div><style type="text/css">.sp-page-builder .page-content #section-id-1516035640162{padding-top:8px;padding-right:0px;padding-bottom:8px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516035640161{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516035640165 {color:#fafafa;}</style>	</div>
</div>
</div></div></div></div></div></div></section><footer id="sp-footer"><div class="container"><div class="row"><div id="sp-footer1" class="col-sm-12 col-md-12"><div class="sp-column "><span class="sp-copyright">© 2018</span></div></div></div></div></footer>                        </div> <!-- /.body-innerwrapper -->
                    </div> <!-- /.body-innerwrapper -->

                    <!-- Off Canvas Menu -->
                    <div class="offcanvas-menu">
                        <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
                        <div class="offcanvas-inner">
                                                          <div class="sp-module _menu"><div class="sp-module-content"><ul class="nav menu">
<li class="item-101"><a href="/index.php" > Home</a></li><li class="item-103"><a href="/index.php/about-us" > About Us</a></li><li class="item-104"><a href="/index.php/services" > Services</a></li><li class="item-105  deeper parent"><a href="/index.php/pages" > Pages</a><span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-105"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-105"><li class="item-109"><a href="/index.php/pages/login" > Login</a></li><li class="item-110"><a href="/index.php/pages/create-an-account" > Create an account</a></li><li class="item-111"><a href="/index.php/pages/faq" > Faq</a></li></ul></li><li class="item-106"><a href="/index.php/shop" > Shop</a></li><li class="item-107  active deeper parent"><a href="#" > Blog</a><span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-107"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-107"><li class="item-120"><a href="/index.php/blog/blog-large" > Blog Large</a></li><li class="item-119  current active"><a href="/index.php/blog/single-blog" > Single Blog</a></li></ul></li><li class="item-108"><a href="/index.php/contact" > Contact</a></li></ul>
</div></div>
                                                    </div> <!-- /.offcanvas-inner -->
                    </div> <!-- /.offcanvas-menu -->



                    <!-- Preloader -->

                    <!-- Go to top -->

                </body>
                </html>
