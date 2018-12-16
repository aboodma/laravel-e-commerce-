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


  <div class="main-container container">
  		<ul class="breadcrumb">
  			

  		</ul>

  		<div class="row">
  			<!--Middle Part Start-->
  			<div id="content" class="col-sm-12">
  			  <h2 class="title">Uitchecken</h2>
  			  <div class="row">
  				<div class="col-sm-4">

  				</div>
          <form id="orderform">
            {{csrf_field()}}
  				<div class="col-sm-12">
  				  <div class="row">
  					<div class="col-sm-6">
  					  <div class="panel panel-default">
  						<div class="panel-heading">
  						  <h4 class="panel-title"><i class="fa fa-truck"></i> Levering methode</h4>
  						</div>
  						  <div class="panel-body">
  							<p>Selecteer de gewenste verzendmethode voor deze bestelling.</p>
                @foreach($PageData['shipping'] as $ship)
  							<div class="radio">
  							  <label>
  								<input type="radio" checked="" value="{{$ship->id}}" data-ship-fee="{{$ship->code}}" id="ship_id" onclick="changeVal('{{$ship->id}}')"  name="ship_id">
  								{{$ship->name_gr}}</label>
  							</div>
  							@endforeach
  						  </div>
  					  </div>
  					</div>
  					<div class="col-sm-6">
  					  <div class="panel panel-default">
  						<div class="panel-heading">
  						  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Betalingsmiddel</h4>
  						</div>
  						  <div class="panel-body">
  							<p>Selecteer de gewenste betaalmethode voor deze bestelling.</p>
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
  						  <h4 class="panel-title"><i class="fa fa-ticket"></i> Gebruik de couponcode</h4>
  						</div>
  						  <div class="panel-body">
  							<label for="input-coupon" class="col-sm-3 control-label">Vul couponcode in</label>
  							<div class="input-group">
  							  <input type="text" class="form-control" id="input-coupon" placeholder="Voer hier uw kortingsbon in" value="" name="coupon">
  							  <span class="input-group-btn">
  							  <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Controleren">
  							  </span></div>
  						  </div>
  					  </div>
  					</div>

  					<div class="col-sm-12">
  					  <div class="panel panel-default">
  						<div class="panel-heading">
  						  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Winkelwagen</h4>
  						</div>
  						  <div class="panel-body">
  							<div class="table-responsive">
  							  <table class="table table-bordered">
  								<thead>
  								  <tr>
  									<!-- <td class="text-center">Beeld</td> -->
                    <td class="text-left">productnaam</td>
  									<td class="text-left">Grootte</td>
  									<td class="text-left">Aantal stuks</td>
  									<td class="text-right">Eenheid prijs</td>
  									<td class="text-right">Totaal</td>
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
  										<button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="deletefromcart('{{$product->id}}')" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
  										</span></div></td>
  									<td class="text-right">{{$product->currency}}{{$product->price}}</td>
  									<td class="text-right total"  data="{{$total=$product->price*$product->quantity}}"> <input type="hidden" name="totals[]" id="totals[]" value=""> {{$product->currency}}{{$total=$product->price*$product->quantity}}</td>
  								  </tr>
                    @endforeach

  								</tbody>
  								<tfoot>
  								  <tr>
  									<td class="text-right" colspan="4"><strong>Subtotaal:</strong></td>
  									<td class="text-right">
                      <?php $sub=[]; ?>
                      @foreach($PageData['cart'] as $product)
                      <?php array_push($sub,$product->price*$product->quantity); ?>


                      @endforeach
                      {{$product->currency.'  '.array_sum($sub)}}
                    </td>
  								  </tr>
  								  <tr>
  									<td class="text-right" colspan="4"><strong> Verzendkosten:</strong></td>
  									<td class="text-right">{{$product->currency}}  <span data-subtotal="{{array_sum($sub)}}" id="shipping_fee"></span> </td>
  								  </tr>

  								  <tr>
  									<td class="text-right" colspan="4"><strong>Totaal:</strong></td>
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
  						  <h4 class="panel-title"><i class="fa fa-pencil"></i> Voeg opmerkingen toe over uw bestelling</h4>
  						</div>
  						  <div class="panel-body">
  							<textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
  							<br>
  							<label class="control-label" for="confirm_agree">
  							  <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
  							  <span>Ik heb de. Gelezen en ga ermee akkoord <a class="agree" href="#"><b>algemene &amp; voorwaarden  </b></a></span> </label>
  							<div class="buttons">
  							  <div class="pull-right">
  								<input type="submit" class="btn btn-primary" value="Bevestig bestelling">
  							  </div>
                  </form>
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
    <script>
      $(document).ready(function () {
        $('#orderform').submit(function (e) {
            e.preventDefault();
            var Data = $("#orderform").serialize();
            $.ajax({
              url:'/cart/order',
              type:"POST",
              data:Data,
              success: function (res){
                if (res == "1") {
                  $('#ignismyModal').modal('show');

                }
              }
            })
        })
      })
    </script>
@endsection
