@extends('layouts.Category.app_du')
@section('title',$PageData['settings'][0]->site_name_gr)
@section('keywords',$PageData['settings'][0]->keywords_gr)
@section('description',$PageData['settings'][0]->description_gr)
@section('phone',$PageData['settings'][0]->phone)
@section('address',$PageData['settings'][0]->adress_gr)
@section('mail',$PageData['settings'][0]->mail)
@section('facebook',$PageData['settings'][0]->facebook)
@section('instagram',$PageData['settings'][0]->instagram)
@section('content')

<body class="res layout-subpage banners-effect-6">
    <div id="wrapper" class="wrapper-full ">
	<!-- Header Container  -->

  <!-- End Preloading Screen -->

  <!-- TopBar Container  -->
  <div class="topbar hidden-xs">
    <div class="container">
      <div class="row">
        <div class="block-policy-top ">
          <div class="policy policy1 col-sm-4 col-xs-12">
            <div class="policy-inner">
              <i class="ico-policy"></i>
              <h4>30 dagen terug</h4>
              <span>Geldteruggarantie</span>
            </div>
          </div>
          <div class="policy policy2 col-sm-4 col-xs-12">
            <div class="policy-inner">
            <i class="ico-policy"></i>
            <h4>gratis verzending voor $ 30</h4>
            <span>bij alle bestellingen van meer dan $ 99</span>
            </div>
          </div>
          <div class="policy policy3 col-sm-4 col-xs-12">
            <div class="policy-inner">
            <i class="ico-policy"></i>
            <h4>Veilig winkelen</h4>
            <span>Bespaar tot 50% nu</span>
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
                <!-- <li class="checkout"><a href="#" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li> -->
                <li class="signin"><a href="/loign" class="top-link-checkout" title="Aanmelden"><i class="fa fa-lock" ></i>Aanmelden</a></li>
                <li class="shopping_cart">

                  <!--Cart-->
                  <div id="cart" class=" btn-group btn-shopping-cart">
                    <a data-loading-text="Loading..." class="top_cart"  href="/cart/show">
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
          <button type="button" style="margin-top: 8px;top: 2px;right: -12px; padding-bottom: 3px;left: -69px;bottom: 52px;"  class="navbar-toggle" name="button">
            <img src="/image/theme/icons/icon_minicart.png" style="margin-right: -5px;margin-bottom: 0px;" />
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
                      <strong>Categorieën</strong>

                      <b class="caret"></b>
                    </a>
                    <div class="sub-menu" style="width: 100%; right: auto;">
                      <div class="content" >
                        <div class="row">
                            @foreach($PageData['categories']['menus'] as $menu)
                          <div class="col-md-3">
                            <div class="column">
                              <a href="#" class="title-submenu">{{$menu->name_gr}}</a>

                              <div>
                                <ul class="row-list">

                                  @foreach($PageData['categories']['submenu'] as $sub_menu)
                                  @if($sub_menu->category_id == $menu->id)
                                  <li><a href="/Category/{{$sub_menu->id}}">{{$sub_menu->name_gr}}</a></li>
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
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Smartphone & Tablets</a></li>
		</ul>

		<div class="row">


			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12">
				<div class="products-category">
					<div class="category-derc">
						<div class="row">
              <div class="col-sm-6">
								<div class="banners">
									<div>
										<a  href="#"><img src="/image/demo/shop/category/electronic-cat.png" alt="Apple Cinema 30&quot;"><br></a>
									</div>
								</div>

							</div>
              <div class="col-sm-6">
                <div class="banners">
                  <div>
                    <h1>Lorem ipsum</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>

              </div>
						</div>
					</div>
					<!-- Filters -->
					<div class="product-filter filters-panel">
						<div class="row">
							<div class="col-md-2 visible-lg">
								<div class="view-mode">
									<div class="list-view">
										<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
										<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
									</div>
								</div>
							</div>
							<div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12">
								<div class="form-group short-by">
									<label class="control-label" for="input-sort">Sort By:</label>
									<select id="input-sort" class="form-control"
									onchange="location = this.value;">
										<option value="" selected="selected">Default</option>
										<option value="">Name (A - Z)</option>
										<option value="">Name (Z - A)</option>
										<option value="">Price (Low &gt; High)</option>
										<option value="">Price (High &gt; Low)</option>
										<option value="">Rating (Highest)</option>
										<option value="">Rating (Lowest)</option>
										<option value="">Model (A - Z)</option>
										<option value="">Model (Z - A)</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="input-limit">Show:</label>
									<select id="input-limit" class="form-control" onchange="location = this.value;">
										<option value="" selected="selected">9</option>
										<option value="">25</option>
										<option value="">50</option>
										<option value="">75</option>
										<option value="">100</option>
									</select>
								</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
								<ul class="pagination">
									<li class="active"><span>1</span></li>
									<li><a href="">2</a></li><li><a href="">&gt;</a></li>
									<li><a href="">&gt;|</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- //end Filters -->
					<!--changed listings-->
          <div class="products-list row grid">


            @foreach($PageData['data'] as $product)
	<div class="clearfix visible-sm-block"></div><div class="clearfix visible-xs-block"></div>

	<div class="product-layout col-md-4 col-sm-6 col-xs-12 ">
		<div class="product-item-container">
			<div class="left-block">
				<div class="product-image-container  ">
					<img data-src="/{{$product->path}}" src="/{{$product->path}}"  alt="{{$product->product_slug_gr}}" class="img_0 img-responsive" />
				</div>

				<!--full quick view block-->
				<a class="quickview "   href="/product/{{$product->product_slug_gr}}"> Snelle kijk</a>
				<!--end full quick view block-->
			</div>


			<div class="right-block">
				<div class="caption">
					<h4><a href="/product/{{$product->product_slug_gr}}">{{$product->product_name_gr}}</a></h4>


					<div class="price">
          <?php   $session_currency=Session::get('session_currency'); ?>
            @if($session_currency=='$')
						<span class="price-new">${{$product->price_dolar}}</span>
						<span class="price-old">${{$product->sold_price_dolar}}</span>
						@endif
            @if($session_currency=='€')
						<span class="price-new">€ {{$product->price_euro}}</span>
						<span class="price-old">€ {{$product->sold_price_euro}}</span>
						@endif
            @if($session_currency=='kr')
						<span class="price-new">kr {{$product->price_kron}}</span>
						<span class="price-old">kr {{$product->sold_price_kron}}</span>
						@endif
					</div>

				</div>

				  <div class="button-group">
					<!-- <button class="addToCart" type="button" data-toggle="tooltip" title="Add To Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add To Cart</span></button> -->
				  </div>
			</div><!-- right block -->

		</div>
	</div>
  @endforeach

</div>					<!--// End Changed listings-->
					<!-- Filters -->
					<div class="product-filter product-filter-bottom filters-panel" >
						<div class="row">
							<div class="col-md-2 hidden-sm hidden-xs">
							</div>
						   <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
								<div class="form-group" style="margin: 7px 10px">Showing 1 to 9 of 10 (2 Pages)</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 text-right"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="#">2</a></li><li><a href="#">&gt;</a></li><li><a href="#">&gt;|</a></li></ul></div>

						 </div>
					</div>
					<!-- //end Filters -->

				</div>

			</div>


		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->

    @endsection
