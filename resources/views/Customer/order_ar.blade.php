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
  			<li><a href="#">سجل الطلبيات</a></li>
  		</ul>

  		<div class="row">
  			<!--Middle Part Start-->
  			<div id="content" class="col-sm-9">
  				<h2 class="title">سجل الطلبيات</h2>
  				<div class="table-responsive">
  					<table class="table table-bordered table-hover">
  						<thead>
  							<tr>
  								<td class="text-center">صورة</td>
  								<td class="text-left">إسم المنتج</td>
  								<td class="text-center">رقم الطلبية</td>

  								<td class="text-center">الحالة</td>
  								<td class="text-center">تاريخ الإنشاء</td>
  								<td class="text-right">المجموع</td>
  								<td></td>
  							</tr>
  						</thead>
  						<tbody>
                @foreach($PageData['orders'] as $order)
                @if($order->is_delete =='0')
  							<tr>
  								<td class="text-center">
  									<a href=""><img class="img-thumbnail" title="" alt="" src="{{$order->path}}" width="85">
  									</a>
  								</td>
  								<td class="text-left"><a href="product.html">{{$order->product_name_ar}}</a>
  								</td>
  								<td class="text-center">{{$order->order_id}}</td>

  								<td class="text-center">
                    @if($order->is_complete == '0' && $order->is_canceled == '0')
                    قيد المعالجة
                    @endif
                    @if($order->is_complete == '1'&& $order->is_canceled == '0')
                    مكتملة
                    @endif
                    @if($order->is_canceled == '1' && $order->is_complete == '0')
                    ملغي
                    @endif

                  </td>
  								<td class="text-center">{{$order->created_at}}</td>
                  <?php $currency=$order->currency;
                          switch ($currency) {
                            case '$':
                              $price=$order->price_dolar;
                              break;
                              case '€':
                                $price=$order->price_euro;
                                break;
                                case 'kr':
                                  $price=$order->price_krona;
                                  break;

                            default:
                            $price=$order->price_dolar;
                              break;
                          }?>
  								<td class="text-right">{{$order->currency . $price*$order->order_quan  }}</td>
  								<td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="/order/{{$order->order_id}}" data-original-title="View"><i class="fa fa-eye"></i></a>
  								</td>
  							</tr>
                @endif
  							       @endforeach
  						</tbody>
  					</table>
  				</div>

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
