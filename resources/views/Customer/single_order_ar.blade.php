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
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">معلومات الطلبية</a></li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">معلومات الطلبية</h2>

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left">تفاصيل الطلبية</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b>رقم الطلبية:</b> {{$PageData['data'][0]->order_id}}
								<br>
								<b>تاريخ الإضافة:</b> 20/06/2016</td>
							<td style="width: 50%;" class="text-left"> <b>وسيلة الدفع:</b>
                 @foreach($PageData['payments'] as $pay)
                 @if($PageData['data'][0]->payment_id == $pay->id)
                 {{$pay->name}}
                 @endif
                @endforeach
								<br>
                <!--  -->
								<b>وسيلة الشحن:</b>
                @foreach($PageData['shipping'] as $ship)
                @if($PageData['data'][0]->shiping_id == $ship->id)
                {{$ship->name}}
                @endif
               @endforeach


               </td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>

							<td style="width: 100%; vertical-align: top;" class="text-left">عنوان الشحن</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">{{$PageData['customer'][0]->name .' '. $PageData['customer'][0]->lname}}

								<br>{{$PageData['customer'][0]->city}}
								<br>{{$PageData['customer'][0]->address1}}
								<br>{{$PageData['customer'][0]->country_id}}</td>

						</tr>
					</tbody>
				</table>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-left">إسم المنتج</td>
                <td class="text-right">المقاس</td>
                <td class="text-right">الكمية</td>
                <td class="text-right">السعر</td>
                <td class="text-right">المجموع</td>
                <td style="width: 20px;"></td>

							</tr>
						</thead>
						<tbody>
              @foreach($PageData['data'] as $product)
              <?php $currency=$product->currency;
                      switch ($currency) {
                        case '$':
                          $price=$product->price_dolar;
                          break;
                          case '€':
                            $price=$product->price_euro;
                            break;
                            case 'kr':
                              $price=$product->price_krona;
                              break;

                        default:
                        $price=$product->price_dolar;
                          break;
                      }?>
							<tr>
								<td class="text-left">{{$product->product_name_ar}} </td>
                <td class="text-right">
                  @foreach($PageData['sizes'] as $size)
                  @if($size->product_id == $product->product_id && $size->size_id == $product->size_id)
                  {{$size->size_name}}
                  @endif
                  @endforeach
                  </td>
								<td class="text-right">{{$product->order_quan}}</td>
								<td class="text-right">{{$product->currency . $price}}</td>
								<td class="text-right">{{$product->currency . $price*$product->order_quan}}</td>
								<td style="white-space: nowrap;" class="text-right"> <a class="btn btn-primary" title="" data-toggle="tooltip" href="#" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>
									<a class="btn btn-danger" title="" data-toggle="tooltip" href="return.html" data-original-title="Return"><i class="fa fa-reply"></i></a>
								</td>
							</tr>
                @endforeach

						</tbody>
						<tfoot>
							<!-- <tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Sub-Total</b>
								</td>
								<td class="text-right">$101.00</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Flat Shipping Rate</b>
								</td>
								<td class="text-right">$5.00</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Eco Tax (-2.00)</b>
								</td>
								<td class="text-right">$6.00</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>VAT (20%)</b>
								</td>
								<td class="text-right">$21.20</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Total</b>
								</td>
								<td class="text-right">$133.20</td>
								<td></td>
							</tr> -->
						</tfoot>
					</table>
				</div>
				<!-- <h3>Order History</h3> -->
				<!-- <table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td class="text-left">Date Added</td>
							<td class="text-left">Status</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">20/06/2016</td>
							<td class="text-left">Processing</td>
						</tr>
						<tr>
							<td class="text-left">21/06/2016</td>
							<td class="text-left">Shipped</td>
						</tr>
						<tr>
							<td class="text-left">24/06/2016</td>
							<td class="text-left">Complete</td>
						</tr>
					</tbody>
				</table> -->
				<!-- <div class="buttons clearfix">
					<div class="pull-right"><a class="btn btn-primary" href="#">Continue</a>
					</div>
				</div> -->



			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">الحساب</h2>
<div class="list-group">
  <ul class="list-item">

    <li><a href="/profile">حسابي</a>
    </li>
    <li><a href="/wishlist">مفضلتي</a>
    </li>
    <li><a href="/orders">سجل الطلبيات</a>
    </li>
  </ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>

@endsection
