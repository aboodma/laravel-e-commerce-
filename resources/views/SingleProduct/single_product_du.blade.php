@extends('layouts.singleProduct.app_du')
@section('title',$data['settings'][0]->site_name_gr)
@section('keywords',$data['settings'][0]->keywords_gr)
@section('description',$data['settings'][0]->description_gr)
@section('phone',$data['settings'][0]->phone)
@section('address',$data['settings'][0]->adress_gr)
@section('mail',$data['settings'][0]->mail)
@section('facebook',$data['settings'][0]->facebook)
@section('instagram',$data['settings'][0]->instagram)
@section('content')

	<!-- //Header Container  -->
	<!-- Main Container  -->
  <div class="main-container container">


		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12" style="margin-top: 27px;">

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
									<a data-index="{{$index++}}" class="img thumbnail " data-image="/{{$image->path}}" title="{{$data['productd'][0]->product_slug_gr}}">
										<img src="/{{$image->path}}" title="{{$data['productd'][0]->product_slug_gr}}" alt="{{$data['productd'][0]->product_slug_gr}}">
									</a>
                  @endforeach


								</div>

							</div>

							<div class="content-product-right col-sm-5 col-xs-12">
								<div class="title-product">
									<h1>{{$data['productd'][0]->product_name_gr}}</h1>
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
									<div class="stock"><span>Status:</span> <span class="status-stock">Beschikbaar</span></div>
								</div>

								<div class="product-box-desc">
									<div class="inner-box-desc">


										<div class="model"><span> Productomschrijving </span>
                			{!!$data['productd'][0]->product_info_gr!!}


                		</div>

									</div>
								</div>


								<div id="product">


<div class="box p-left col-12 variantWrapper tooltipWrapper">
<div class="row variantLine">
<div class="col col-md-12 variantBox subTwo" id="ddVari" data-order="2">
  <div id="error_gr">

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
											<input type="button" data-toggle="tooltip" title="" value="Voeg toe aan winkelmandje" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg"
onclick="cart.addpro({{$data['productd'][0]->id}}, '1','/{{$data['images'][1]->path}}','{{$data['productd'][0]->product_name_gr}}','{{$price}}');"
                       data-original-title="Voeg toe aan winkelmandje">

                    </div>
                    <div class="add-to-links wish_comp">
											<ul class="blank list-inline">
												<li class="wishlist">
													<a class="icon" data-toggle="tooltip" title="" onclick="addtowish({{$data['productd'][0]->id}}, '1','/{{$data['images'][1]->path}}','{{$data['productd'][0]->product_name_gr}}','{{$price}}');" data-original-title="Zur Wunschliste hinzufügen"><i class="fa fa-heart"></i>
													</a>
												</li>

											</ul>
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
			<li class="active"><a data-toggle="tab" href="#tab-1">Productomschrijving</a></li>

		</ul>
		<div class="tab-content col-xs-12">
			<div id="tab-1" class="tab-pane fade active in">
			{!!$data['productd'][0]->product_info_gr!!}


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
