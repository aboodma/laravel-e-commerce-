@extends('layouts.singleProduct.app_ar')
@section('title',$data['settings'][0]->site_name_ar)
@section('keywords',$data['settings'][0]->keywords_ar)
@section('description',$data['settings'][0]->description_ar)
@section('phone',$data['settings'][0]->phone)
@section('address',$data['settings'][0]->adress_ar)
@section('mail',$data['settings'][0]->mail)
@section('facebook',$data['settings'][0]->facebook)
@section('instagram',$data['settings'][0]->instagram)
@section('content')
<body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full ">
	<!-- Header Container  -->
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
                  <img src="/image/demo/flags/gb.png" alt="English" title="English">
                  <span class="">English</span>
                  <span class="fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu">
                  <li> <a onclick="ChangeLang('ar')" href="#"> <img class="image_flag" src="/image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> العربية </a> </li>
                  <li><a onclick="ChangeLang('en')" href="#"><img class="image_flag" src="/image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
                  <li><a onclick="ChangeLang('du')" href="#"><img class="image_flag" src="/image/demo/flags/gr.png" alt="Dutch" title="Dutch" /> Dutch </a></li>
                </ul>
              </form>
            </div>

            <div class="form-group currencies-block">
              <form action="#" method="post" enctype="multipart/form-data" id="currency">
                <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                  <span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu btn-xs">
                  <li> <a onclick="ChangeCurrency('€')" href="#">(€)&nbsp;Euro</a></li>
                  <li> <a onclick="ChangeCurrency('kr')" href="#">(kr)&nbsp;Swedish Krona	</a></li>
                  <li> <a onclick="ChangeCurrency('$')" href="#">($)&nbsp;US Dollar	</a></li>
                </ul>
              </form>
            </div>
          </div>
          <div class="header-top-right collapsed-block text-right  col-md-6 col-sm-8 col-xs-12 compact-hidden">

            <div class="tabBlock" id="TabBlock-1">
              <ul class="top-link list-inline">
                <li class="checkout"><a href="#" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> المنتجات</a></li>
                <li class="signin"><a href="#" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> تسجيل دخول</a></li>
                <li class="shopping_cart">

                  <!--Cart-->
                  <div id="cart" class=" btn-group btn-shopping-cart">
                    <a data-loading-text="Loading..." class="top_cart " href="/cart/show">

                      <div class="shopcart">
                        <span class="handle pull-left"></span>

                      </div>
                    </a>

                    <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

                      <li>
                        <table class="table table-striped">
                          <tbody>
                            <tr>
                              <td class="text-center" style="width:70px">
                                <a href="product.html"> <img src="/image/demo/shop/product/resize/2.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
                              </td>
                              <td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
                              <td class="text-center"> x1 </td>
                              <td class="text-center"> $1,202.00 </td>
                              <td class="text-right">
                                <a href="product.html" class="fa fa-edit"></a>
                              </td>
                              <td class="text-right">
                                <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center" style="width:70px">
                                <a href="product.html"> <img src="/image/demo/shop/product/resize/3.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
                              </td>
                              <td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
                              <td class="text-center"> x1 </td>
                              <td class="text-center"> $60.00 </td>
                              <td class="text-right">
                                <a href="product.html" class="fa fa-edit"></a>
                              </td>
                              <td class="text-right">
                                <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                      <li>
                        <div>
                          <table class="table table-bordered">
                            <tbody>
                              <tr>
                                <td class="text-left"><strong>Sub-Total</strong>
                                </td>
                                <td class="text-right">$1,060.00</td>
                              </tr>
                              <tr>
                                <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                </td>
                                <td class="text-right">$2.00</td>
                              </tr>
                              <tr>
                                <td class="text-left"><strong>VAT (20%)</strong>
                                </td>
                                <td class="text-right">$200.00</td>
                              </tr>
                              <tr>
                                <td class="text-left"><strong>Total</strong>
                                </td>
                                <td class="text-right">$1,262.00</td>
                              </tr>
                            </tbody>
                          </table>
                          <p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
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
            <a href="/"><img src="/image/demo/logos/logo_5.png" title="Your Store" alt="Your Store" /></a>
          </div>
          <!-- //end Logo -->

          <!-- Search -->
          <!-- <div id="sosearchpro" class="col-md-offset-1 col-md-3 col-sm-12 search-pro">
            <form method="GET" action="#">
              <div id="search0" class="search input-group">
                <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
                <span class="input-group-btn">
                  <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                </span>
              </div>
              <input type="hidden" name="route" value="product/search" />
            </form>
          </div> -->
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
          <div class="navbar-header">
            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <button type="button" style="margin-top: 8px;top: 2px;right: -12px; padding-bottom: 3px;left: -69px;bottom: 52px;"  class="navbar-toggle" name="button">
            <img src="/image/theme/icons/icon_minicart.png" style="margin-right: -5px;margin-bottom: 0px;" />
          </button>

          </div>

          <div class="megamenu-wrapper">
            <span id="remove-megamenu" class="fa fa-times"></span>
            <div class="megamenu-pattern">
              <div class="container">
                <ul class="megamenu " dir="ltr" data-transition="slide" data-animationtime="250">

                  <li class="with-sub-menu hover">
                    <p class="close-menu"></p>
                    <a href="#" class="clearfix">
                      <strong>التصنيفات</strong>

                      <b class="caret"></b>
                    </a>
                    <div class="sub-menu" style="width: 100%; right: auto;">
                      <div class="content" >
                        <div class="row">
                              @foreach($data['menus'] as $menu)
                          <div class="col-md-3">
                            <div class="column">
                              <a href="#" class="title-submenu">{{$menu->name_ar}}</a>

                              <div>
                                <ul class="row-list">

                                  @foreach($data['submenus'] as $sub_menu)
                                  @if($sub_menu->category_id == $menu->id)
                                  <li><a href="/Category/{{$sub_menu->id}}">{{$sub_menu->name_ar}}</a></li>
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
                      <strong>Search</strong>

                      <i class="fa fa-search"></i>
                    </a>
                    <div class="sub-menu" style="width: 100%; right: auto;">
                      <div class="content" >
                        <div class="row">

                          <div class="col-md-3">
                            <div class="column">

                                <div id="sosearchpro" class="col-md-offset-12 col-md-12 col-sm-12 search-pro" style="padding-left: 36px;margin-left: 28px; width: 150%;">
                                  <form method="GET" action="#">
                                    <div id="search0" class="search input-group">
                                      <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
                                      <span class="input-group-btn">
                                        <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                      </span>
                                    </div>
                                    <input type="hidden" name="route" value="product/search" style="border: 1px solid #e5e5e5;
box-shadow: none;
border-radius: 15px 0 0 15px;
width: 57%;"/>
                                  </form>
                                </div>




                            </div>
                          </div>


                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="column">
                              <a href="#" class="title-submenu">Result</a>

                              <div>
                                <ul class="row-list">

                                  <a href="product.html">
                                    Product Name
                                     <img src="image/demo/shop/product/resize/2.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview">
                                    </a>

                                </ul>
                                <ul class="row-list">

                                  <a href="product.html">
                                    Product Name
                                     <img src="image/demo/shop/product/resize/2.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview">
                                    </a>

                                </ul>
                                <ul class="row-list">

                                  <a href="product.html">
                                    Product Name
                                     <img src="image/demo/shop/product/resize/2.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview">
                                    </a>

                                </ul>
                              </div>

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
	<!-- //Header Container  -->
	<!-- Main Container  -->
  <div class="main-container container">
		<ul class="breadcrumb">

		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12">

				<div class="product-view row">
					<div class="left-content-product col-lg-10 col-xs-12">
						<div class="row">

              <div class="left-content-product col-lg-10 col-xs-12">
						<div class="row">
							<div class="content-product-left class-honizol col-sm-6 col-xs-12 ">
								<div class="large-image  ">
									<img itemprop="image" class="product-image-zoom" src="/{{$data['images'][1]->path}}" data-zoom-image="/{{$data['images'][1]->path}}" title="Bint Beef" alt="Bint Beef">
								</div>

								<div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
                  <?php $index=0; ?>
                  @foreach($data['images'] as $image)
									<a data-index="{{$index++}}" class="img thumbnail " data-image="/{{$image->path}}" title="{{$data['productd'][0]->product_slug_ar}}">
										<img src="/{{$image->path}}" title="{{$data['productd'][0]->product_slug_ar}}" alt="{{$data['productd'][0]->product_slug_ar}}">
									</a>
                  @endforeach


								</div>

							</div>

							<div class="content-product-right col-sm-5 col-xs-12">
								<div class="title-product">
									<h1>{{$data['productd'][0]->product_name_ar}}</h1>
								</div>
								<!-- Review ---->
                <?php $session_currency=Session::get('session_currency');
                switch ($session_currency) {
                  case '$':
                    $pricetype='$';
                    $price=$data['productd'][0]->price_dolar;

                    break;
                    case '€':
                      $pricetype='€';
                      $price=$data['productd'][0]->price_euro;

                      break;
                      case 'kr':
                        $pricetype='kr';
                        $price=$data['productd'][0]->price_kron;

                        break;

                  default:
                  $pricetype='$';
                  $price=$data['productd'][0]->price_dolar;

                    break;
                } ?>

								<div class="product-label form-group">
									<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
										<span class="price-new" itemprop="price">{{$pricetype}}{{$price}}</span>
										<!-- <span class="price-old">$122.00</span> -->
									</div>
									<div class="stock"><span>الحالة:</span> <span class="status-stock">متوفر</span></div>
								</div>

								<div class="product-box-desc">
									<div class="inner-box-desc">


										<div class="model"><span>  معلومات المنتج </span>
                			{!!$data['productd'][0]->product_info_ar!!}


                		</div>

									</div>
								</div>


								<div id="product">


<div class="box p-left col-12 variantWrapper tooltipWrapper">
<div class="row variantLine">
<div class="col col-md-12 variantBox subTwo" id="ddVari" data-order="2">
  <div id="error_ar">

  </div>
<div class="fl col-12 ease variantList">
  @foreach($data['sizes'] as $size)
<a id="{{$size->size_name}}" data-group-id="{{$size->size_id}}" data-target="7922" class="col box-border  " onclick="change('{{$size->size_name}}')">
<p id="bdnz">{{$size->size_name}}</p>
</a>
@endforeach


</div>
</div>
</div>
</div>

									<div class="form-group box-info-product">

										<div class="cart">
											<input type="button" data-toggle="tooltip" title="" value="إضافة إلى السلة" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg"
onclick="cart.addpro({{$data['productd'][0]->id}}, '1','/{{$data['images'][1]->path}}','{{$data['productd'][0]->product_name_ar}}','{{$price}}');"
                       data-original-title="إضافة إلى السلة">
										</div>


									</div>

								</div>
								<!-- end box info product -->

							</div>
						</div>
					</div>


				</div>

				<!-- Product Tabs -->
				<div class="producttab ">
	<div class="tabsslider  col-xs-12">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#tab-1">معلومات المنتج</a></li>

		</ul>
		<div class="tab-content col-xs-12">
			<div id="tab-1" class="tab-pane fade active in">
			{!!$data['productd'][0]->product_info_ar!!}


			</div>



		</div>
	</div>
</div>
				<!-- //Product Tabs -->

				<!-- Related Products -->


				<script type="text/javascript">
					$(document).ready(function() {
						var zoomCollection = '.large-image img';
						$( zoomCollection ).elevateZoom({
							zoomType    : "inner",
							lensSize    :"200",
							easing:true,
							gallery:'thumb-slider-vertical',
							cursor: 'pointer',
							galleryActiveClass: "active"
						});
						$('.large-image').magnificPopup({
							items: [
                <?php foreach ($data['images'] as $image): ?>
								{src: '<?=$image->path  ?>' },
								<?php endforeach; ?>
							],
							gallery: { enabled: true, preload: [0,2] },
							type: 'image',
							mainClass: 'mfp-fade',
							callbacks: {
								open: function() {

									var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
									var magnificPopup = $.magnificPopup.instance;
									magnificPopup.goTo(activeIndex);
								}
							}
						});
						$("#thumb-slider-vertical .owl2-item").each(function() {
							$(this).find("[data-index='1']").addClass('active');
						});

						$('.thumb-video').magnificPopup({
						  type: 'iframe',
						  iframe: {
							patterns: {
							   youtube: {
								  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
								  id: 'v=', // String that splits URL in a two parts, second part should be %id%
								  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
									},
								}
							}
						});

						$('.product-options li.radio').click(function(){
							$(this).addClass(function() {
								if($(this).hasClass("active")) return "";
								return "active";
							});

							$(this).siblings("li").removeClass("active");
							$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
						});

						var _isMobile = {
						  iOS: function() {
						   return navigator.userAgent.match(/iPhone/i);
						  },
						  any: function() {
						   return (_isMobile.iOS());
						  }
						};

						$(".thumb-vertical-outer .next-thumb").click(function () {
							$( ".thumb-vertical-outer .lSNext" ).trigger( "click" );
						});

						$(".thumb-vertical-outer .prev-thumb").click(function () {
							$( ".thumb-vertical-outer .lSPrev" ).trigger( "click" );
						});

						$(".thumb-vertical-outer .thumb-vertical").lightSlider({
							item: 3,
							autoWidth: false,
							vertical:true,
							slideMargin: 15,
							verticalHeight:340,
				            pager: false,
							controls: true,
				            prevHtml: '<i class="fa fa-angle-up"></i>',
				            nextHtml: '<i class="fa fa-angle-down"></i>',
							responsive: [
								{
									breakpoint: 1199,
									settings: {
										verticalHeight: 330,
										item: 3,
									}
								},
								{
									breakpoint: 1024,
									settings: {
										verticalHeight: 235,
										item: 2,
										slideMargin: 5,
									}
								},
								{
									breakpoint: 768,
									settings: {
										verticalHeight: 340,
										item: 3,
									}
								}
								,
								{
									breakpoint: 480,
									settings: {
										verticalHeight: 100,
										item: 1,
									}
								}

							]

				        });



						// Product detial reviews button
						$(".reviews_button,.write_review_button").click(function (){
							var tabTop = $(".producttab").offset().top;
							$("html, body").animate({ scrollTop:tabTop }, 1000);
						});
					});

				</script>


			</div>


		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->


    @endsection
