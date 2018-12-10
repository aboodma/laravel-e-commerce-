@extends('layouts.Category.app_ar')
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
  <style>
  /*--thank you pop starts here--*/
  .thank-you-pop{
  width:100%;
  padding:20px;
  text-align:center;
  }
  .thank-you-pop img{
  width:76px;
  height:auto;
  margin:0 auto;
  display:block;
  margin-bottom:25px;
  }

  .thank-you-pop h1{
  font-size: 42px;
    margin-bottom: 25px;
  color:#5C5C5C;
  }
  .thank-you-pop p{
  font-size: 20px;
    margin-bottom: 27px;
  color:#5C5C5C;
  }
  .thank-you-pop h3.cupon-pop{
  font-size: 25px;
    margin-bottom: 40px;
  color:#222;
  display:inline-block;
  text-align:center;
  padding:10px 20px;
  border:2px dashed #222;
  clear:both;
  font-weight:normal;
  }
  .thank-you-pop h3.cupon-pop span{
  color:#03A9F4;
  }
  .thank-you-pop a{
  display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
  }
  .thank-you-pop a i{
  margin-right:5px;
  color:#fff;
  }
  #ignismyModal .modal-header{
    border:0px;
  }
  /*--thank you pop ends here--*/

  </style>

    <div class="modal fade" id="ignismyModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                 </div>

                <div class="modal-body">

        <div class="thank-you-pop">
          <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
          <h1>Thank You!</h1>
          <p>Your submission is received and we will contact you soon</p>
          <h3 class="cupon-pop">Your Id: <span>12345</span></h3>

        </div>

                </div>

            </div>
        </div>
    </div>
  <!-- End Preloading Screen -->

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
  		<ul class="breadcrumb">
  			<!-- <li><a href="#"><i class="fa fa-home"></i></a></li>
  			<li><a href="#">Checkout</a></li> -->

  		</ul>

  		<div class="row">
  			<!--Middle Part Start-->
  			<div id="content" class="col-sm-12">
  			  <h2 class="title">إتمام عملية الشراء</h2>
  			  <div class="row">
  				<div class="col-sm-4">

  				</div>
  				<div class="col-sm-12">
  				  <div class="row">
  					<div class="col-sm-6">
  					  <div class="panel panel-default">
  						<div class="panel-heading">
  						  <h4 class="panel-title"><i class="fa fa-truck"></i> شركات الشحن</h4>
  						</div>
  						  <div class="panel-body">
  							<p>يرجى إختيار شركة الشحن .</p>
                @foreach($PageData['shipping'] as $ship)
  							<div class="radio">
  							  <label>
  								<input type="radio" checked="" value="{{$ship->id}}" data-ship-fee="{{$ship->code}}" id="ship_id" onclick="changeVal('{{$ship->id}}')"  name="ship_id">
  								{{$ship->name_ar}}</label>
  							</div>
  							@endforeach
  						  </div>
  					  </div>
  					</div>
  					<div class="col-sm-6">
  					  <div class="panel panel-default">
  						<div class="panel-heading">
  						  <h4 class="panel-title"><i class="fa fa-credit-card"></i> وسائط الدفع</h4>
  						</div>
  						  <div class="panel-body">
  							<p>يرجي إختيار طريقة الدفع التي تريد.</p>
                @foreach($PageData['payments'] as $payment)
  							<div class="radio">
  							  <label>
  								<input type="radio" checked="" value="{{$payment->id}}" onclick="changeValP('{{$payment->code}}')" data-payment-fee="{{$payment->code}}" name="payment_id">{{$payment->name}}</label>
  							</div>
                @endforeach

  						  </div>
  					  </div>
  					</div>
  					<div class="col-sm-12">
  					  <div class="panel panel-default">
  						<div class="panel-heading">
  						  <h4 class="panel-title"><i class="fa fa-ticket"></i> إستخدام كرت تخفيضات</h4>
  						</div>
  						  <div class="panel-body">
  							<label for="input-coupon" class="col-sm-3 control-label">كود بطاقة التخفيضات</label>
  							<div class="input-group">
  							  <input type="text" class="form-control" id="input-coupon" placeholder="أدخل كود البطاقة هنا" value="" name="coupon">
  							  <span class="input-group-btn">
  							  <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="تحقق">
  							  </span></div>
  						  </div>
  					  </div>
  					</div>

  					<div class="col-sm-12">
  					  <div class="panel panel-default">
  						<div class="panel-heading">
  						  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i>سلة المشتريات</h4>
  						</div>
  						  <div class="panel-body">
  							<div class="table-responsive">
  							  <table class="table table-bordered">
  								<thead>
  								  <tr>
  									<!-- <td class="text-center">صورة المنتج</td> -->
                    <td class="text-left">إسم المنتج</td>
  									<td class="text-left">المقاس</td>
  									<td class="text-left">الكمية</td>
  									<td class="text-right">سعر القطعة</td>
  									<td class="text-right">السعر الإجمالي</td>
  								  </tr>
  								</thead>
  								<tbody>
          @if(count($PageData['cart'])!=0)


                    @foreach($PageData['cart'] as $product)

  								  <tr>
  									<!-- <td class="text-center"><a href="/"><img src="/assets/images/pro3/jacket-leather.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-thumbnail" width="60px"></a></td> -->
                    <td class="text-left"><a href="/">{{$product->name}}</a></td>
  									<td class="text-left"><a href="/">{{$product->size}}</a></td>
  									<td class="text-left"><div class="input-group btn-block" style="min-width: 100px;">
  										<input type="text" name="quantity" value="{{$product->quantity}}" size="1" class="form-control">
  										<span class="input-group-btn">
  										<button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
  										<button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
  										</span></div></td>
  									<td class="text-right">{{$product->currency}}{{$product->price}}</td>
  									<td class="text-right total"  data="{{$total=$product->price*$product->quantity}}"> <input type="hidden" name="totals[]" id="totals[]" value=""> {{$product->currency}}{{$total=$product->price*$product->quantity}}</td>
  								  </tr>
                    @endforeach

  								</tbody>
  								<tfoot>
  								  <tr>
  									<td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
  									<td class="text-right">
                      <?php $sub=[]; ?>
                      @foreach($PageData['cart'] as $product)
                      <?php array_push($sub,$product->price*$product->quantity); ?>


                      @endforeach
                      {{$product->currency.'  '.array_sum($sub)}}
                    </td>
  								  </tr>
  								  <tr>
  									<td class="text-right" colspan="4"><strong> Shipping Price:</strong></td>
  									<td class="text-right">{{$product->currency}}  <span data-subtotal="{{array_sum($sub)}}" id="shipping_fee"></span> </td>
  								  </tr>

  								  <tr>
  									<td class="text-right" colspan="4"><strong>Total:</strong></td>
  									<td class="text-right">{{$product->currency}} <span id="totalprice"></span> </td>
  								  </tr>
                      @endif
  								</tfoot>
  							  </table>

  							</div>
  						  </div>
  					  </div>
  					</div>
  					<div class="col-sm-12">
  					  <div class="panel panel-default">
  						<div class="panel-heading">
  						  <h4 class="panel-title"><i class="fa fa-pencil"></i>يمكنك ترك ملاحظتك حول الطلبية هنا</h4>
  						</div>
  						  <div class="panel-body">
  							<textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
  							<br>
  							<label class="control-label" for="confirm_agree">
  							  <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                  <!-- <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label> -->
                  <span>لقد فرأت<a class="agree" href="#"><b>الشروط والقوانين</b></a>و أوافق عليه  </span> </label>

  							<div class="buttons">
  							  <div class="pull-right">
  								<input type="button" class="btn btn-primary" data-toggle="modal" href="#ignismyModal"value="إتمام الشراء ">
  							  </div>
  							</div>
  						  </div>
  					  </div>
  					</div>
  				  </div>
  				</div>
  			  </div>
  			</div>
  			<!--Middle Part End -->

  		</div>
  	</div>
@endsection
