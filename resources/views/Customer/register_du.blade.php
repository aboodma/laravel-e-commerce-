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


  <div class="main-container container">
  		<ul class="breadcrumb">

  		</ul>

  		<div class="row">
  			<div id="content" class="col-sm-12">
  				<h2 class="title">Account Registreren</h2>
  				<p>Als u al een account bij ons hebt, logt u dan in op <a href="/login">login pagina</a>.</p>
          <form id="customerRegister" class="form-horizontal account-register clearfix">
            {{csrf_field()}}
  					<fieldset id="account">
  						<legend>Jouw persoonlijke gegevens</legend>
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
  							<label class="col-sm-2 control-label" for="input-firstname">Voornaam</label>
  							<div class="col-sm-10">
  								<input required type="text" name="firstname" value="" placeholder="Voornaam" id="input-firstname" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-lastname">Achternaam</label>
  							<div class="col-sm-10">
  								<input required type="text" name="lastname" value="" placeholder="Achternaam" id="input-lastname" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
  							<div class="col-sm-10">
  								<input required type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-telephone">Telefoon</label>
  							<div class="col-sm-10">
  								<input required type="tel" name="telephone" value="" placeholder="Telefoon" id="input-telephone" class="form-control">
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
  						<legend>Jouw adres</legend>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-company">Bedrijf</label>
  							<div class="col-sm-10">
  								<input required type="text" name="company" value="" placeholder="Bedrijf" id="input-company" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-address-1">Adres 1</label>
  							<div class="col-sm-10">
  								<input required type="text" name="address_1" value="" placeholder="adres 1" id="input-address-1" class="form-control">
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-address-2">Adres 2</label>
  							<div class="col-sm-10">
  								<input required type="text" name="address_2" value="" placeholder="Adres 2" id="input-address-2" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-city">Stad</label>
  							<div class="col-sm-10">
  								<input required type="text" name="city" value="" placeholder="stad" id="input-city" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-postcode">Postcode</label>
  							<div class="col-sm-10">
  								<input required type="text" name="postcode" value="" placeholder="Postcode" id="input-postcode" class="form-control">
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
  								<input required type="password" name="password" value="" placeholder="Wachtwoord" id="input-password" class="form-control">
                  <small id="error"></small>

  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-confirm">Wachtwoord bevestigen</label>
  							<div class="col-sm-10">
  								<input required type="password" name="confirm" value="" placeholder="Wachtwoord bevestigen" id="input-confirm" class="form-control">
                  <small id="errorco"></small>

  							</div>
  						</div>
  					</fieldset>
  					<fieldset>
  						<legend></legend>
              <div class="buttons">
    						<div class="pull-right">Ik heb de. Gelezen en ga ermee akkoord <a href="#" class="agree"><b>Voorwaarden en privacy</b></a>
    							<input required class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
    							<input  type="submit" value="voortzetten" class="btn btn-primary">
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
          var msg = "Wachtwoord moet uit meer dan 6 cijfers bestaan";

          $("#error").html(msg);
        }
      };
      function confirmpass() {
        var value = $("#input-password").val();
        var confirmv = $("#input-confirm").val();
        if (confirmv != value) {
          var msg=" Wachtwoord komt niet overeen ";

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
