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



<div class="main-container container">
		<ul class="breadcrumb">

		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
				<h2 class="title">قائمة مفضلتي</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center">صورة المنتج</td>
								<td class="text-left">إسم المتج</td>



								<td class="text-right">خيارات</td>
							</tr>
						</thead>
						<tbody>
							@if(isset($PageData['products']))
						@foreach($PageData['products'] as $product)
						@foreach($PageData['productImages'] as $image)
							<tr>
								<td class="text-center">
									<a href="/product/{{$product->product_slug_ar}}"><img src="{{$image->path}}" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" width="70px">
									</a>
								</td>
								<td class="text-left"><a href="{{$product->product_slug_ar}}">{{$product->product_name_ar}}</a>
								</td>



								<td class="text-right">
									<button class="btn btn-primary" title="" data-toggle="tooltip" onclick='window.location.href="/product/{{$product->product_slug_ar}}"' type="button" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
									</button>
									<a class="btn btn-danger" onclick="removefromwish({{$product->id}})" data-original-title="Remove"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							@endforeach
							@endforeach
							@endif
							@if(!isset($PageData['products']))
							<tr>
									<td>	لايوجد منتجات في قائمتك	  </td>

							</tr>

							@endif
						</tbody>
					</table>
				</div>
			</div>

			<!--Middle Part End-->

		</div>
	</div>
@endsection
