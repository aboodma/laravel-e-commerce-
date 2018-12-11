@extends('layouts.app_ar')
@section('title',$data['settings'][0]->site_name_ar)
@section('keywords',$data['settings'][0]->keywords_ar)
@section('description',$data['settings'][0]->description_ar)
@section('phone',$data['settings'][0]->phone)
@section('address',$data['settings'][0]->adress_ar)
@section('mail',$data['settings'][0]->mail)
@section('facebook',$data['settings'][0]->facebook)
@section('instagram',$data['settings'][0]->instagram)
@section('content')
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
        <img src="image/demo/logos/theme_logo.png" alt="SW Shoppy">
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
                  <img src="image/demo/flags/gb.png" alt="English" title="English">
                  <span class="">English</span>
                  <span class="fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu">
                  <li> <a onclick="ChangeLang('ar')" href="#"> <img class="image_flag" src="image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> العربية </a> </li>
                  <li><a onclick="ChangeLang('en')" href="#"><img class="image_flag" src="image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
                  <li><a onclick="ChangeLang('du')" href="#"><img class="image_flag" src="image/demo/flags/gr.png" alt="Dutch" title="Dutch" /> Dutch </a></li>
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
                <!-- <li class="checkout"><a href="#" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li> -->
                <li class="signin"><a href="/login" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> تسجيل دخول</a></li>
                <li class="shopping_cart">

                  <!--Cart-->
                  <div id="cart" class=" btn-group btn-shopping-cart">
                    <a data-loading-text="Loading..." class="top_cart" href="/cart/show">
                      <div class="shopcart">
                        <span class="handle pull-left"></span>

                      </div>
                    </a>

                    <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

                      <li>

                      </li>
                      <li>
                        <div>

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
            <a href="/"><img src="image/demo/logos/logo_5.png"  /></a>
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
          <div class="navbar-header" style="margin-left: -16px;left: 130px;bottom: 0px;top: -63px;right: 0px;">
            <button type="button" id="show-megamenu" style="right: 0px;bottom: 0px;padding-bottom: 9px;padding-top: 9px;top: 19px;margin-bottom: 0px;" data-toggle="collapse" class="navbar-toggle">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <button type="button" style="margin-top: 0px;margin-bottom: 0px;bottom: -17px;" class="navbar-toggle" name="button">
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
                            @foreach($data['menus'] as $menu)
                          <div class="col-md-3">
                            <div class="column">
                              <a href="#" class="title-submenu">{{$menu->name_ar}}</a>

                              <div>
                                <ul class="row-list">

                                  @foreach($data['submenu'] as $sub_menu)
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
                                        <input type="submit" class="button-search btn btn-primary" name="submit" value="submit"><i class="fa fa-search"></i></input>
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

                              <div id="Result">



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
  <div class="main-container  layout-boxed">
    <div class="container">
    <div class="row">
      <div id="content-top" class="clearfix" >
        <div id="so-slideshow" class="col-lg-9 col-md-9 home-slidershow">
          <div class="module slideshow no-margin">
            <div class="yt-content-slider yt-content-slider--arrow1"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
              @foreach($data['sliders'] as $slider)
              <div class="yt-content-slide">
                <a href="{{$slider->link}}"><img src="{{$slider->content}}" alt="slider1" class="img-responsive"></a>
              </div>
              @endforeach
            </div>
            <div class="loadeding"></div>
          </div>

        </div>

        <div class="col-lg-3 col-md-3">
          <div class="module  hidden-sm hidden-xs">
            <div class="modcontent clearfix">
              <ul class="htmlcontent-home">

                @foreach($data['banners'] as $banner)
                @if($banner->place =='0')
                <li class="marginbottom__3x">
                  <div class="banners">
                    <div>
                      <a href="{{$banner->link}}"><img src="{{$banner->content}}" alt="banner1"></a>
                    </div>
                  </div>
                </li>
                @endif
                @endforeach
              </ul>

            </div>
          </div>
        </div>

        <div class="module extraslider-home5 titleLine">
          <h3 class="modtitle">التصنيفات</h3>
          <div id="so_extraslider_1" >
            <!-- Begin extraslider-inner -->
            <div class="so-extraslider products-list grid product-style__5"  data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="4" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
              <!--Begin Items-->

              @foreach($data['menus'] as $menu)
              <div class="ltabs-item product-layout">
                <div class="product-item-container">
                  <div class="left-block">
                    <div class="product-image-container second_img ">
                      <img src="image/demo/cms/home5/banner4.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                    </div>
                    <!--Sale Label-->
                    <!--full quick view block-->
                    <a class="quickview  visible-lg" href="{{$menu->name_ar}}">مشاهدة التصنيف</a>
                    <!--end full quick view block-->
                  </div>
                  <div class="right-block">
                    <div class="caption">
                      <h4><a href="{{$menu->name_ar}}">{{ucfirst($menu->name_ar)}}</a></h4>
                    </div>
                  </div><!-- right block -->
                </div>
              </div>
              @endforeach
              <!--End Items-->
            </div>
            <!--End extraslider-inner -->
          </div>
        </div>

        <div class="banner2-id10 clearfix">
          <div class="module clearfix">
            <ul class="blank">

              @foreach($data['banners'] as $banner)
              @if($banner->place =='1')
              <li class="col-md-4 col-sm-4 hidden-xs">
                <div class="banners">
                  <div>
                    <a title="Static Image" href="{{$banner->link}}"><img src="{{$banner->content}}" alt="Image"></a>
                  </div>
                </div>
              </li>
              @endif
              @endforeach

            </ul>
          </div>
        </div>
      </div>


      <div id="content" class="clearfix">
        <div class="col-xs-12 clearfix">
          <div class="module extraslider-home5 titleLine">
            <h3 class="modtitle">المنتجات الجديدة</h3>
            <div id="so_extraslider_1" >
              <!-- Begin extraslider-inner -->
              <div class="so-extraslider products-list grid product-style__5"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="4" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                <!--Begin Items-->




                @foreach($data['products'] as $product)


                <div class="ltabs-item product-layout">
                  <div class="product-item-container">
                    <div class="left-block">
                      <div class="product-image-container second_img ">
                        <img src="{{$product->path}}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                      </div>
                      <!--Sale Label-->
                      <span class="label label-new">new</span>
                      <!--full quick view block-->
                      <a class="quickview  visible-lg" href="/product/{{$product->product_slug_ar}}">  مشاهدة المنتج</a>
                      <!--end full quick view block-->
                    </div>
                    <div class="right-block">
                      <div class="caption">
                        <h4><a href="/product/{{$product->product_slug_ar}}">{{$product->product_name_ar}}</a></h4>
                        <?php $session_currency=Session::get('session_currency');
                        switch ($session_currency) {
                          case '$':
                            $pricetype='$';
                            $price=$product->price_dolar;

                            break;
                            case '€':
                              $pricetype='€';
                              $price=$product->price_euro;

                              break;
                              case 'kr':
                                $pricetype='kr';
                                $price=$product->price_kron;

                                break;

                          default:
                          $pricetype='$';
                          $price=$product->price_dolar;

                            break;
                        } ?>

                        <div class="price">

                          <span class="price-new">{{$pricetype}}{{$price}}</span>


                        </div>
                      </div>


                    </div><!-- right block -->
                  </div>
                </div>

                @endforeach
                <!--End Items-->


              </div>
              <!--End extraslider-inner -->
            </div>
          </div>

          <div class="banner2-id10 clearfix">
            <div class="module clearfix">
              <ul class="blank">
                @foreach($data['banners'] as $banner)
                @if($banner->place =='2')
                <li class="col-md-4 col-sm-4 hidden-xs">
                  <div class="banners">
                    <div>
                      <a title="Static Image" href="{{$banner->link}}"><img src="{{$banner->content}}" alt="Image"></a>
                    </div>
                  </div>
                </li>
                @endif
                @endforeach
              </ul>
            </div>
          </div>
          </div>




        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- //Main Container -->
  <!-- Block Spotlight2  -->

  <!-- //Block Spotlight3  -->
<script>
$(document).ready(function () {
	$("#searchp").submit(function (e) {
		e.preventDefault();
		var data = $("#searchp").serialize();
		$.ajax({
			url:"/search",
			type:"POST",
			data:data,
			success : function (come) {
        // console.log(come[0]);
        if (come.length  === 0) {
        var  msg = "no products Similar";
        $("#Result").html(msg);

        }
        if (come.length  !== 0) {
          console.log(come.length);
          for (var i = 0; i < come.length; i++) {
            var path=come[i]['path'];
            var name=come[i]['product_name_ar'];
            var slug=come[i]['product_slug_ar'];
            $("#Result").append('<ul class="row-list"><a href="/product/'+slug+'"> <img src="'+path+'" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview">'+name+'</a></ul>');

          }

        }


			}
		})
	})
})


</script>
@endsection
