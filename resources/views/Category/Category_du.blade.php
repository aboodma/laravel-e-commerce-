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


	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			
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
