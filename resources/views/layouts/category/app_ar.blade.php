

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <!-- Basic page needs
	============================================ -->
  <title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
        <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->
    <link rel="shortcut icon" href="ico/favicon.png">

	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/css/bootstrap.min.css')}}">
	<link href="{{ asset('/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{ asset('/js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{ asset('/css/themecss/lib.css')}}" rel="stylesheet">
	<link href="{{ asset('/js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('/js/jquery-2.2.4.min.js')}}"></script>

	<!-- Theme CSS
	============================================ -->
   	<link href="{{ asset('/css/themecss/so_megamenu.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/themecss/so-categories.css')}}" rel="stylesheet">
	<link href="{{ asset('/css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
	<link href="{{ asset('/css/header5.css')}}" rel="stylesheet">
	<link href="{{ asset('/css/footer2.css')}}" rel="stylesheet">
	<link id="color_scheme" href="{{ asset('/css/home5.css')}}" rel="stylesheet">
	<link href="{{ asset('/css/responsive.css')}}" rel="stylesheet">


</head>





@yield('content')
<!-- footer -->
<script type="text/javascript"><!--
	var $typeheader = 'header-home1';
	//-->
</script>
  <br>
	<!-- Footer Container -->
  <footer class="footer-container type_footer2">
		<!-- Footer Top Container -->
		<section class="footer-top">
			<div class="container content">
				<div class="row">
					<div class="col-sm-12 collapsed-block footer-links">
						<div class="module clearfix">
							<div class="modcontent">

								<div class="icons-social">
										<h3 class="modtitle">تابعنا</h3>
										<div class="list-inline">
											<a title="Facebook" href="@yield('facebook')" target="_blank">
												<span class="fa fa-facebook icon-circled icon-color"></span>
											</a>

											<a title="instagram" href="@yield('instagram')" target="_blank">
												<span class="fa fa-instagram icon-circled icon-color"></span>
											</a>

											<!-- <a title="Google+" href="https://plus.google.com/u/0/+Smartaddons" target="_blank">
												<span class="fa fa-google-plus icon-circled icon-color"></span>
											</a>

											<a title="Linkedin" href="#" target="_blank">
												<span class="fa fa-linkedin icon-circled icon-color"></span>
											</a>

											<a title="Pinterest" href="#" target="_blank">
												<span class="fa fa-instagram icon-circled icon-color"></span>
											</a>

											<a title="Pinterest" href="#" target="_blank">
												<span class="fa fa-youtube icon-circled icon-color"></span>
											</a> -->
										</div>

								</div>
								<hr class="footer-lines">
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 box-information">
						<div class="module clearfix">
							<h3 class="modtitle">المعلومات</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="about-us.html">حولنا</a></li>
									<li><a href="faq.html">الأسئلة الأكثر شيوعا</a></li>
									<!-- <li><a href="order-history.html">Order history</a></li> -->
									<!-- <li><a href="order-information.html">Order information</a></li> -->
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 box-service">
						<div class="module clearfix">
							<h3 class="modtitle">خدمة العملاء</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="contact.html">تواصل معنا</a></li>
									<li><a href="return.html">الإعادة</a></li>
									<!-- <li><a href="sitemap.html">Site Map</a></li> -->
									<!-- <li><a href="my-account.html">My Account</a></li> -->
								</ul>
							</div>
						</div>
					</div>

					<!-- <div class="col-sm-6 col-md-3 box-account">
						<div class="module clearfix">
							<h3 class="modtitle">My Account</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="#">Brands</a></li>
									<li><a href="gift-voucher.html">Gift Vouchers</a></li>
									<li><a href="#">Affiliates</a></li>
									<li><a href="#">Specials</a></li>
									<li><a href="#" target="_blank">Our Blog</a></li>
								</ul>
							</div>
						</div>
					</div> -->

					<div class="col-sm-6 col-md-3 collapsed-block ">
						<div class="module clearfix">
							<h3 class="modtitle">تواصل معنا	</h3>
							<div class="modcontent">
								<ul class="contact-address">
									<li><span class="fa fa-map-marker"></span>  @yield('address') </li>
									<li><span class="fa fa-envelope-o"></span> البريد الإلكتروني: <a href="#">  @yield('mail') </a></li>
									<li><span class="fa fa-phone">&nbsp;</span> الهاتف : @yield('phone') </li>
								</ul>
							</div>
						</div>
					</div>


				</div>
			</div>
		</section>
		<!-- /Footer Top Container -->

		<!-- Footer Bottom Container -->
		<div class="footer-bottom-block ">
			<div class=" container">
				<div class="row">
					<div class="col-sm-5 copyright-text">جميع الحقوق محفوظة ©</div>
					<div class="col-sm-7">
						<div class="block-payment text-right"><img src="image/demo/content/payment.png" alt="payment" title="payment" ></div>
					</div>
					<!--Back To Top-->
					<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>

				</div>
			</div>
		</div>
		<!-- /Footer Bottom Container -->


	</footer>
	<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->
	<section class="social-widgets visible-lg">
	<ul class="items">
		<li class="item item-01 facebook"> <a href="php/facebook8859.html?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>FACEBOOK</h5>
				</div>
				<div class="loading">
					<img src="/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
				</div>
			</div>
		</li>
		<li class="item item-02 twitter"> <a href="php/twitterfdaa.html?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>TWITTER FEEDS</h5>
				</div>
				<div class="loading">
					<img src="/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
				</div>
			</div>
		</li>
		<li class="item item-03 youtube"> <a href="php/youtubevideo2de8.html?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
			<div class="tab-content">
				<div class="title">
					<h5>YouTube</h5>
				</div>
				<div class="loading"> <img src="/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
			</div>
		</li>
	</ul>
</section>	<!-- End Social widgets -->


<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />

<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/js/themejs/libs.js"></script>
<script type="text/javascript" src="/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/modernizr/modernizr-2.6.2.min.js"></script>


<!-- Theme files
============================================ -->
<script type="text/javascript" src="{{ asset('/js/themejs/application.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/themejs/homepage.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/themejs/so_megamenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/themejs/addtocart.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/themejs/pathLoader.js') }}"></script>
<!--<script type="text/javascript" src="/js/themejs/toppanel.js"></script>-->
<script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/themejs/cpanel.js') }}"></script>
<script type="text/javascript">
<!--
var $typeheader = 'header-home5';
//-->
</script>
</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/market/html_width_RTL/home5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 02:02:39 GMT -->
</html>
