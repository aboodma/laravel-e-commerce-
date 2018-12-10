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
            <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
            <div class="tabBlock" id="TabBlock-1">
              <ul class="top-link list-inline">
                <!-- <li class="checkout"><a href="#" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o" ></i> Checkout</a></li> -->
                <li class="signin"><a href="/login" class="top-link-checkout" title="login"><i class="fa fa-lock" ></i>Aanmelden</a></li>
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
          <div id="sosearchpro" class="col-md-offset-1 col-md-3 col-sm-12 search-pro">
            <form method="GET" action="#">
              <div id="search0" class="search input-group">
                <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
                <span class="input-group-btn">
                  <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                </span>
              </div>
              <input type="hidden" name="route" value="product/search" />
            </form>
          </div>
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







                  <li class="pull-right"><a href="#" title="Special Offer!"><strong>Speciale aanbieding!</strong></a></li>

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

  		</ul>

  		<div class="row">
  			<div id="content" class="col-sm-12">
  				<h2 class="title">Account Registreren</h2>
  				<p>Als u al een account bij ons hebt, logt u dan in op <a href="/login">login pagina</a>.</p>
  				<form action="" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
  					<fieldset id="account">
  						<legend>Jouw persoonlijke gegevens</legend>
  						<div class="form-group required" style="display: none;">
  							<label class="col-sm-2 control-label">Customer Group</label>
  							<div class="col-sm-10">
  								<div class="radio">
  									<label>
  										<input type="radio" name="customer_group_id" value="1" checked="checked"> Default
  									</label>
  								</div>
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-firstname">Voornaam</label>
  							<div class="col-sm-10">
  								<input type="text" name="firstname" value="" placeholder="Voornaam" id="input-firstname" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-lastname">Achternaam</label>
  							<div class="col-sm-10">
  								<input type="text" name="lastname" value="" placeholder="Achternaam" id="input-lastname" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
  							<div class="col-sm-10">
  								<input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-telephone">Telefoon</label>
  							<div class="col-sm-10">
  								<input type="tel" name="telephone" value="" placeholder="Telefoon" id="input-telephone" class="form-control">
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-fax">Fax</label>
  							<div class="col-sm-10">
  								<input type="text" name="fax" value="" placeholder="Fax" id="input-fax" class="form-control">
  							</div>
  						</div>
  					</fieldset>
  					<fieldset id="address">
  						<legend>Jouw adres</legend>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-company">Bedrijf</label>
  							<div class="col-sm-10">
  								<input type="text" name="company" value="" placeholder="Bedrijf" id="input-company" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-address-1">Adres 1</label>
  							<div class="col-sm-10">
  								<input type="text" name="address_1" value="" placeholder="adres 1" id="input-address-1" class="form-control">
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-address-2">Adres 2</label>
  							<div class="col-sm-10">
  								<input type="text" name="address_2" value="" placeholder="Adres 2" id="input-address-2" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-city">Stad</label>
  							<div class="col-sm-10">
  								<input type="text" name="city" value="" placeholder="stad" id="input-city" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-postcode">Postcode</label>
  							<div class="col-sm-10">
  								<input type="text" name="postcode" value="" placeholder="Postcode" id="input-postcode" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-country">Land</label>
  							<div class="col-sm-10">
  								<select name="country_id" id="input-country" class="form-control">
  									<option value=""> --- Selecteer alstublieft --- </option>
                    @foreach( $PageData['countries'] as $country )
  									<option value="{{$country->country_code}}">{{$country->country_enName}}</option>
                    @endforeach
  								</select>
  							</div>
  						</div>

  					</fieldset>
  					<fieldset>
  						<legend>Uw wachtwoord</legend>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-password">Wachtwoord</label>
  							<div class="col-sm-10">
  								<input type="password" name="password" value="" placeholder="Wachtwoord" id="input-password" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-confirm">Wachtwoord bevestigen</label>
  							<div class="col-sm-10">
  								<input type="password" name="confirm" value="" placeholder="Wachtwoord bevestigen" id="input-confirm" class="form-control">
  							</div>
  						</div>
  					</fieldset>
  					<fieldset>
  						<legend></legend>
              <div class="buttons">
    						<div class="pull-right">Ik heb de. Gelezen en ga ermee akkoord <a href="#" class="agree"><b>Voorwaarden en privacy</b></a>
    							<input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
    							<input type="submit" value="voortzetten" class="btn btn-primary">
    						</div>
    					</div>
  					</fieldset>
            <fieldset>
              <div class="">
                <br>
              </div>
            </fieldset>

  				</form>
  			</div>
  		</div>
  	</div>
    <br>
@endsection
