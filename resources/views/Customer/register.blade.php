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
  			<div id="content" class="col-sm-12">
  				<h2 class="title">Register Account</h2>
  				<p>If you already have an account with us, please login at the <a href="/login">login page</a>.</p>
          <form id="customerRegister" class="form-horizontal account-register clearfix">
            {{csrf_field()}}
  					<fieldset id="account">
  						<legend>Your Personal Details</legend>
  						<div class="form-group required" style="display: none;">
  							<label class="col-sm-2 control-label">Customer Group</label>
  							<div class="col-sm-10">
  								<div class="radio">
  									<label>
  										<input required type="radio" name="customer_group_id" value="1" checked="checked"> Default
  									</label>
  								</div>
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-firstname">First Name</label>
  							<div class="col-sm-10">
  								<input required type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
  							<div class="col-sm-10">
  								<input required type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
  							<div class="col-sm-10">
  								<input required type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
  							<div class="col-sm-10">
  								<input required type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control">
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-fax">Fax</label>
  							<div class="col-sm-10">
  								<input required type="text" name="fax" value="" placeholder="Fax" id="input-fax" class="form-control">
  							</div>
  						</div>
  					</fieldset>
  					<fieldset id="address">
  						<legend>Your Address</legend>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-company">Company</label>
  							<div class="col-sm-10">
  								<input required type="text" name="company" value="" placeholder="Company" id="input-company" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
  							<div class="col-sm-10">
  								<input required type="text" name="address_1" value="" placeholder="Address 1" id="input-address-1" class="form-control">
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
  							<div class="col-sm-10">
  								<input required type="text" name="address_2" value="" placeholder="Address 2" id="input-address-2" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-city">City</label>
  							<div class="col-sm-10">
  								<input required type="text" name="city" value="" placeholder="City" id="input-city" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
  							<div class="col-sm-10">
  								<input required type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-country">Country</label>
  							<div class="col-sm-10">
  								<select name="country_id" id="input-country" class="form-control">
  									<option value=""> --- Please Select --- </option>
                    @foreach( $PageData['countries'] as $country )
  									<option value="{{$country->country_code}}">{{$country->country_enName}}</option>
                    @endforeach
  								</select>
  							</div>
  						</div>

  					</fieldset>
  					<fieldset>
  						<legend>Your Password</legend>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-password">Password</label>
  							<div class="col-sm-10">
  								<input required type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                  <small id="error"></small>

  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
  							<div class="col-sm-10">
  								<input required type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
                  <small id="errorco"></small>

  							</div>
  						</div>
  					</fieldset>
  					<fieldset>
  						<legend></legend>
              <div class="buttons">
    						<div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Terms and Privacy</b></a>
    							<input required class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
    							<input  type="submit" value="Continue" class="btn btn-primary">
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
    <script>
      function passwordvalidation() {
        var value = $("#input-password").val();
        if (value < 6) {
          var msg = "Password must be more than 6 digits";
          $("#error").html(msg);
        }
      };
      function confirmpass() {
        var value = $("#input-password").val();
        var confirmv = $("#input-confirm").val();
        if (confirmv != value) {
          var msg="Password does not match ";
  $("#errorco").html(msg);
        }
      };
      $(document).ready(function () {
        $("#customerRegister").submit(function (e) {
          var form = $("#customerRegister");
          e.preventDefault();
          var Data = $(form).serialize();
          $.ajax({
            url:"/Customer/register",
            type:"POST",
            data:Data,
            success:function (req){
              window.location.href = "/Customer/login";
            }
          })

        })
      })
    </script>
@endsection
