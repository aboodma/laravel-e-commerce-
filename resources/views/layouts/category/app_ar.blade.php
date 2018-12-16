

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
<style media="screen">
  .mobileShow { display: none;}
  @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 480px){
      .mobileShow {display: inline;}
  }
</style>
<body class="common-home res layout-home5 ">
	<div id="wrapper" class="wrapper-full banners-effect-7">
		<!-- Preloading Screen -->
		<div class="ip-header">
			<h1 class="ip-logo">
				<a href="/">
					<img src="/image/demo/logos/theme_logo.png" alt="SW Shoppy">
					</a>
				</h1>
				<div class="ip-loader">
					<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
						<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path>
						<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" style="stroke-dashoffset: 0; stroke-dasharray: 192.617;"></path>
					</svg>
				</div>
			</div>
			<!-- End Preloading Screen -->
			<!-- TopBar Container  -->
			<div class="topbar hidden-xs">
				<div class="container">
					<div class="row">
						<div class="block-policy-top ">
							<div class="policy policy1 col-sm-4 col-xs-12">
								<div class="policy-inner">
									<i class="ico-policy"></i>
									<h4>إسترد نقودك خلال 30 يوما</h4>
									<span>ضمان إعادة المنتح</span>
								</div>
							</div>
							<div class="policy policy2 col-sm-4 col-xs-12">
								<div class="policy-inner">
									<i class="ico-policy"></i>
									<h4>شحن مجاني</h4>
									<span>عند إتمام طلبية تزيد عن 100$</span>
								</div>
							</div>
							<div class="policy policy3 col-sm-4 col-xs-12">
								<div class="policy-inner">
									<i class="ico-policy"></i>
									<h4>شحن امن و إلى جميع انحاء العالم</h4>
									<span>يمكنك طلب منتجك من اي مكان  </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //TopBar Container  -->
			<!-- Header Container  -->
			<header id="header" class="layout-boxed variantleft type_5">
				<!-- Header Top -->
				<div class="header-top compact-hidden">
					<div class="container">
						<div class="row">
							<div class="header-top-left form-inline col-md-6 col-sm-4 col-xs-12 compact-hidden">
								<div class="form-group languages-block ">
									<form action="#" method="post" enctype="multipart/form-data" id="bt-language">
										<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
											<img src="/image/demo/flags/lb.png" alt="Arabic" title="Arabic">
												<span class="">العربية</span>
												<span class="fa fa-angle-down"></span>
											</a>
											<ul class="dropdown-menu">
												<li>
													<a onclick="ChangeLang('ar')" href="#">
														<img class="image_flag" src="/image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> العربية
													</a>
												</li>
												<li>
													<a onclick="ChangeLang('en')" href="#">
														<img class="image_flag" src="/image/demo/flags/gb.png" alt="English" title="English" /> English
													</a>
												</li>
												<li>
													<a onclick="ChangeLang('du')" href="#">
														<img class="image_flag" src="/image/demo/flags/gr.png" alt="Dutch" title="Dutch" /> Dutch
													</a>
												</li>
											</ul>
										</form>
									</div>
									<div class="form-group currencies-block">
										<form action="#" method="post" enctype="multipart/form-data" id="currency">
											<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
												<span class="icon icon-credit "></span> US Dollar
												<span class="fa fa-angle-down"></span>
											</a>
											<ul class="dropdown-menu btn-xs">
												<li>
													<a onclick="ChangeCurrency('€')" href="#">(€)&nbsp;Euro</a>
												</li>
												<li>
													<a onclick="ChangeCurrency('kr')" href="#">(kr)&nbsp;Swedish Krona	</a>
												</li>
												<li>
													<a onclick="ChangeCurrency('$')" href="#">($)&nbsp;US Dollar	</a>
												</li>
											</ul>
										</form>
									</div>
								</div>
								<div class="header-top-right collapsed-block text-right  col-md-6 col-sm-8 col-xs-12 compact-hidden">
									<div class="tabBlock" id="TabBlock-1">
										<ul class="top-link list-inline">
											<!-- <li class="checkout"><a href="#" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li> -->
                      @if(session('customer_id'))
                      <li class="wishlist"><a href="/wishlist" class="top-link-wishlist" title="Wishlist"><i class="fa fa-heart"></i> قائمة مفضلتي</a></li>
                      <li class="account" id="my_account"><a href="/profile" title="My Account" class="btn btn-xs dropdown-toggle"> <i class="fa fa-user"></i>حسابي </a></li>
                      <li class="account">
                        <form id="logout">
                          {{csrf_field()}}
                          <input type="hidden" name="customer_id" value="{{session('customer_id')}}">
                          <!-- <input type="submit"  name="" value="Logout"> <i class="fa fa-user"></i> -->
                          <button type="button" id="submitlog" name="button" class="btn btn-xs dropdown-toggle"><i class="fa fa-user"></i> تسجيل خروج</button>
                        </form>
                      </li>
                    @endif

                    @if(!session('customer_id'))
                      <li class="signin">
                        <a href="/login" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> تسجيل دخول</a>
                      </li>

                      @endif
											<li class="shopping_cart">
												<!--Cart-->
												<div id="cart" class=" btn-group btn-shopping-cart">
													<a data-loading-text="Loading..." class="top_cart" href="/cart/show">
														<div class="shopcart">
															<span class="handle pull-left"></span>
														</div>
													</a>
													<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
														<li></li>
														<li>
															<div>
																<p class="text-right">
																	<a class="btn view-cart" href="cart.html">
																		<i class="fa fa-shopping-cart"></i>View Cart
																	</a>&nbsp;&nbsp;&nbsp;
																	<a class="btn btn-mega checkout-cart" href="checkout.html">
																		<i class="fa fa-share"></i>Checkout
																	</a>
																</p>
															</div>
														</li>
													</ul>
												</div>
												<!--//cart-->
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //Header Top -->
					<!-- Header center -->
					<div class="header-center left">
						<div class="container">
							<div class="row">
								<!-- Logo -->
								<div class="navbar-logo col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
									<a href="/">
										<img src="/image/demo/logos/logo_5.png"  />
									</a>
								</div>
								<!-- //end Logo -->
								<!-- Search -->

								<!-- //end Search -->
								<!-- Secondary menu -->
							</div>
						</div>
					</div>
					<!-- //Header center -->
					<!-- Header Bottom -->
					<div class="header-bottom">
						<div class="container">
							<div class="row">
								<!-- Main menu -->
								<div class="megamenu-hori col-xs-12 ">
									<div class="responsive so-megamenu ">
										<nav class="navbar-default">
											<div class=" container-megamenu  horizontal">
												<div class="navbar-header" style="margin-left: -16px;left: 130px;bottom: 0px;top: -63px;right: 0px;">
													<button type="button" id="show-megamenu" style="right: 0px;bottom: 0px;padding-bottom: 9px;padding-top: 9px;top: 19px;margin-bottom: 0px;" data-toggle="collapse" class="navbar-toggle">
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<button type="button" onclick="Redirecter('/cart/show')" style="margin-top: 0px;margin-bottom: 0px;bottom: -17px;padding-left: 10px;margin-left: 10px;left: 71px;top: 58px;" class="navbar-toggle" name="button">
															<img src="/image/theme/icons/icon_minicart.png" style="margin-right: -5px;margin-bottom: 0px;">
															</button>
														</div>
														<div class="megamenu-wrapper">
															<span id="remove-megamenu" class="fa fa-times"></span>
															<div class="megamenu-pattern">
																<div class="container">
																	<ul class="megamenu " data-transition="slide" data-animationtime="250">
																		<li class="with-sub-menu hover">
																			<p class="close-menu"></p>
																			<a href="#" class="clearfix">
																				<strong>التصنيفات</strong>
																				<b class="caret"></b>
																			</a>
																			<div class="sub-menu" style="width: 100%; right: auto;">
																				<div class="content" >
																					<div class="row">
                            @foreach($PageData['categories']['menus'] as $menu)

																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="title-submenu">{{$menu->name_ar}}</a>
																								<div>
																									<ul class="row-list">

                                  @foreach($PageData['categories']['submenu'] as $sub_menu)
                                  @if($sub_menu->category_id == $menu->id)

																										<li>
																											<a href="/Category/{{$sub_menu->id}}">{{$sub_menu->name_ar}}</a>
																										</li>
                                  @endif
                                    @endforeach

																									</ul>
																								</div>
																							</div>
																						</div>
                          @endforeach

																					</div>
																				</div>
																			</div>
																		</li>
																		<li class="with-sub-menu hover">
																			<p class="close-menu"></p>
																			<a href="#" class="clearfix">
																				<strong>بحث</strong>
																				<i class="fa fa-search"></i>
																			</a>
																			<div class="sub-menu" style="width: 100%; right: auto;">
																				<div class="content" >
																					<div class="row">
																						<div class="col-md-3">
																							<div class="column">
																								<div id="sosearchpro" class="col-md-offset-12 col-md-12 col-sm-12 search-pro" style="padding-left: 36px;margin-left: 28px; width: 150%;">
																									<form  id="searchp"  >
                                    {{csrf_field()}}

																										<div id="search0" class="search input-group">
																											<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
																												<span class="input-group-btn">
																													<input type="submit" class="button-search btn btn-primary" name="submit" value="submit">
																														<i class="fa fa-search"></i>
																													</input>
																												</span>
																											</div>
																										</form>
																										<input type="text" class="autosearch-input form-control mobileShow" id="mobilesearchinput" name="mobilesearchinput" value="product/search" style="border: 1px solid #e5e5e5;
                                    box-shadow: none;
                                    border-radius: 15px 0 0 15px;
                                    width: 57%;"/>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="row">
																							<div class="col-md-12">
																								<div class="column">
																									<a href="#" class="title-submenu">النتائج</a>
																									<div id="Result"></div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</nav>
												</div>
											</div>
											<!-- //end Main menu -->
										</div>
									</div>
								</div>
								<!-- Navbar switcher -->
								<!-- //end Navbar switcher -->
							</header>




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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c10f2d97a79fc1bddf099cb/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/market/html_width_RTL/home5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 02:02:39 GMT -->
</html>
