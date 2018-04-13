<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML> 
<html>
	<head>
		<title>Spike shoes Website Template | Home :: w3layouts</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-alert-scroller---->
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
		</script>
		<!----start-alert-scroller---->
		<!-- start menu -->
		<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/menu_jquery.js"></script>
		<!-- //End menu -->
		<!---slider---->
		<link rel="stylesheet" href="css/slippry.css">
		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
		<script>
			  jQuery('#jquery-demo').slippry({
			  // general elements & wrapper
			  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
			  // options
			  adaptiveHeight: false, // height of the sliders adapts to current slide
			  useCSS: false, // true, false -> fallback to js if no browser support
			  autoHover: false,
			  transition: 'fade'
			});
		</script>
		<!----start-pricerage-seletion---->
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
		<script type='text/javascript'>//<![CDATA[ 
			$(window).load(function(){
			 $( "#slider-range" ).slider({
			            range: true,
			            min: 0,
			            max: 500,
			            values: [ 100, 400 ],
			            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			            }
			 });
			$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			
			});//]]>  
		</script>
		<!----//End-pricerage-seletion---->
		<!---move-top-top---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<!---//move-top-top---->
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<?php require_once('header/header.php');?>
				<!----//End-bottom-header---->
			<!---//End-header---->
		<!----start-image-slider---->
		<?php require_once('slider/slider.php');?>
		<!----//End-image-slider---->
		<!----start-price-rage--->
		<div class="wrap">
			<div class="price-rage">
				<h3>Weekly selection:</h3>
				<div id="slider-range">
				</div>
			</div>
		</div>
		<!----//End-price-rage--->
		<!--- start-content---->
		<div class="content">
			<div class="wrap">
				<div class="content-left">
						<div class="content-left-top-grid">
							<div class="content-left-price-selection">
								<h4>Select Price:</h4>
								<div class="price-selection-tree">
									<span class="col_checkbox">
										<input id="10" class="css-checkbox10" type="checkbox">
										<label class="normal"><i for="10" name="demo_lbl_10"  class="css-label10"> </i> 400</label>
									</span>
									<span class="col_checkbox">
										<input id="11" class="css-checkbox11" type="checkbox">
										<label class="active1"><i for="11" name="demo_lbl_11"  class="css-label11"> </i>350</label>
									</span>
									<span class="col_checkbox">
										<input id="12" class="css-checkbox12" type="checkbox">
										<label class="normal"><i for="12" name="demo_lbl_12"  class="css-label12"> </i> 300</label>
									</span>
									<span class="col_checkbox">
										<input id="13" class="css-checkbox13" type="checkbox">
										<label class="normal"><i for="13" name="demo_lbl_13"  class="css-label13"> </i>250</label>
									</span>
									<span class="col_checkbox">
										<input id="14" class="css-checkbox14" type="checkbox">
										<label class="normal"><i for="14" name="demo_lbl_14"  class="css-label14"> </i> 200</label>
									</span>
									<span class="col_checkbox">
										<input id="15" class="css-checkbox15" type="checkbox">
										<label class="normal"><i for="15" name="demo_lbl_15"  class="css-label15"> </i>150</label>
									</span>
								</div>
								
						</div>
						</div>
						<div class="content-left-bottom-grid">
							<h4>Boys Football:</h4>
							<div class="content-left-bottom-grids">
								<div class="content-left-bottom-grid1">
									<img src="images/foot-ball.jpg" title="football" />
									<h5><a href="details.html">Nike Strike PL Hi-Vis</a></h5>
									<span> Football</span>
									<label>&#163; 375</label>
								</div>
								<div class="content-left-bottom-grid1">
									<img src="images/jarse.jpg" title="jarse" />
									<h5><a href="details.html">Nike Strike PL Hi-Vis</a></h5>
									<span> Football</span>
									<label>&#163; 375</label>
								</div>
							</div>
						</div>
				</div>
				<div class="content-right">
					<div class="product-grids">
						<!--- start-rate---->
							<script src="js/jstarbox.js"></script>
							<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
							<script type="text/javascript">
								jQuery(function() {
									jQuery('.starbox').each(function() {
										var starbox = jQuery(this);
										starbox.starbox({
											average: starbox.attr('data-start-value'),
											changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
											ghosting: starbox.hasClass('ghosting'),
											autoUpdateAverage: starbox.hasClass('autoupdate'),
											buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
											stars: starbox.attr('data-star-count') || 5
										}).bind('starbox-value-changed', function(event, value) {
											if(starbox.hasClass('random')) {
												var val = Math.random();
												starbox.next().text(' '+val);
												return val;
											} 
										})
									});
								});
							</script>
							<!---//End-rate---->
							<!---caption-script---->
							<!---//caption-script---->
						<div onclick="location.href='details.html';" class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/product2.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 380</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details.html';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/product1.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 375</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details.html';"  class="product-grid fade last-grid">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/product3.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 350</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details.html';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/product4.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 370</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details.html';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/product5.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 355</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onclick="location.href='details.html';"  class="product-grid fade last-grid">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="images/product6.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 390</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---- start-bottom-grids---->
		<?php require_once('footer/footer-bottom-grid.php');?>
		<!---- //End-bottom-grids---->
		<!--- //End-content---->
		<!---start-footer---->
		<?php require_once('footer/footer.php');?>
		<!---//End-footer---->
		<!---//End-wrap---->
	</body>
</html>

