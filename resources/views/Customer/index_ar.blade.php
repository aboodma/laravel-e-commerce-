@extends('layouts.category.app_ar')
@section('title',$PageData['settings'][0]->site_name_ar)
@section('keywords',$PageData['settings'][0]->keywords_ar)
@section('description',$PageData['settings'][0]->description_ar)
@section('phone',$PageData['settings'][0]->phone)
@section('address',$PageData['settings'][0]->adress_ar)
@section('mail',$PageData['settings'][0]->mail)
@section('facebook',$PageData['settings'][0]->facebook)
@section('instagram',$PageData['settings'][0]->instagram)
@section('content')


<body class="res layout-subpage banners-effect-6">
    <div id="wrapper" class="wrapper-full ">
	<!-- Header Container  -->

  <!-- End Preloading Screen -->

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
            <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
            <div class="tabBlock" id="TabBlock-1">
              <ul class="top-link list-inline">
                <!-- <li class="checkout"><a href="#" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> المنتجات</a></li> -->
                <li class="signin"><a href="#" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i> تسجيل دخول</a></li>
                <li class="shopping_cart">

                  <!--Cart-->
                  <div id="cart" class=" btn-group btn-shopping-cart">
                    <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
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
            <a href="/"><img src="/image/demo/logos/logo_5.png" /></a>
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





                  <li class="pull-right"><a href="#" title="Special Offer!"><strong>عروض مميزة</strong></a></li>

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

<div class="main-container container">
  @if(isset($PageData['error']))
  <div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      If You have Account Please <strong> Login </strong>  First
      If You Dont Have Account Create Your Account Now Quickly From Here <strong> <a href="/Register">Register</a></strong>
    </div>
    @endif
		<ul class="breadcrumb">

		</ul>

		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">

					<div class="account-border">
						<div class="row">
							<div class="col-sm-6 new-customer">
								<div class="well">
									<h2><i class="fa fa-file-o" aria-hidden="true"></i> مستخدم جديد</h2>
									<p>أنشئ حسابك الأن وابدء التسوق معنا تسوق أمن ومتكامل </p>
								</div>
								<div class="bottom-form">
									<a href="/Register" class="btn btn-default pull-right">متابعة</a>
								</div>
							</div>

							<form  enctype="multipart/form-data" id="Customerlogin">
                {{csrf_field()}}
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> تسجيل دخول</h2>

										<div class="form-group">
											<label class="control-label " for="input-email">البريد الإلكتروني</label>
											<input type="text" name="email" value="" id="input-email" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">كلمة السر</label>
											<input type="password" name="password" value="" id="input-password" class="form-control" required>
										</div>
									</div>
									<div class="bottom-form">
										<a href="#" class="forgot">نسيت كلمة السر</a>
										<input type="submit" value="تسجيل دخول" class="btn btn-default pull-right">
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
  <script>
    $(document).ready(function () {
      $("#Customerlogin").submit(function (e) {
        e.preventDefault();
        var Data = $(this).serialize();
        $.ajax({
          url:"/Customer/login",
          type:"POST",
          data:Data,
          success: function (result) {
            window.location.href = "/";
          }
        })
      })
    })
  </script>
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
