
@extends('layouts.category.app')
@section('title',$PageData['settings'][0]->site_name_en)
@section('keywords',$PageData['settings'][0]->keywords_en)
@section('description',$PageData['settings'][0]->description_en)
@section('phone',$PageData['settings'][0]->phone)
@section('address',$PageData['settings'][0]->adress_en)
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
				<h2 class="title">My Wish List</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center">Image</td>
								<td class="text-left">Product Name</td>



								<td class="text-right">Action</td>
							</tr>
						</thead>
						<tbody>
							@if(isset($PageData['products']))
						@foreach($PageData['products'] as $product)
						@foreach($PageData['productImages'] as $image)
							<tr>
								<td class="text-center">
									<a href="/product/{{$product->product_slug_en}}"><img src="{{$image->path}}" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" width="70px">
									</a>
								</td>
								<td class="text-left"><a href="{{$product->product_slug_en}}">{{$product->product_name_en}}</a>
								</td>



								<td class="text-right">
									<button class="btn btn-primary" title="" data-toggle="tooltip" onclick='window.location.href="/product/{{$product->product_slug_en}}"' type="button" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
									</button>
									<a class="btn btn-danger" onclick="removefromwish({{$product->id}})" data-original-title="Remove"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							@endforeach
							@endforeach
								@endif
								@if(!isset($PageData['products']))
								<tr>
									No Products In Your list
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
