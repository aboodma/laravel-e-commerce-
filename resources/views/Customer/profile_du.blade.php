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
  			<!--Middle Part Start-->
  			<div class="col-sm-9" id="content">
  				<h2 class="title">My Account</h2>
          @foreach($PageData['customer'] as $info)
          <?php
          $name=$info->name;
           $lname=$info->lname;
           $email=$info->email;
           $phone=$info->phone;
           $address1=$info->address1;
           $address2=$info->address1;
           $company=$info->company;
           $postcode=$info->postcode;
           $country=$info->country_id;
           $city=$info->city;
           $password=$info->password;


           ?>
          @endforeach
  				<p class="lead">Hallo, <strong>{{$name.' '.$lname}}</strong> - So aktualisieren Sie Ihre Kontoinformationen.</p>
  				<form>
  					<div class="row">
  						<div class="col-sm-6">
  							<fieldset id="personal-details">
  								<legend>Persönliche Details</legend>
  								<div class="form-group required">
  									<label for="input-firstname" class="control-label">Vorname</label>
  									<input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="{{$name}}" name="firstname">
  								</div>
  								<div class="form-group required">
  									<label for="input-lastname" class="control-label">Nachname</label>
  									<input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="{{$lname}}" name="lastname">
  								</div>
  								<div class="form-group required">
  									<label for="input-email" class="control-label">E-Mail</label>
  									<input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="{{$email}}" name="email">
  								</div>
  								<div class="form-group required">
  									<label for="input-telephone" class="control-label">Telephone</label>
  									<input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="{{$phone}}" name="telephone">
  								</div>
  								<div class="form-group">
  									<label for="input-fax" class="control-label">Fax</label>
  									<input type="text" class="form-control" id="input-fax" placeholder="Fax" value="" name="fax">
  								</div>
  							</fieldset>
  							<br>
  						</div>
  						<div class="col-sm-6">
  							<fieldset>
  								<legend>Ändere das Passwort</legend>
  								<div class="form-group required">
  									<label for="input-password" class="control-label">Altes Passwort</label>
  									<input type="password" class="form-control" id="input-password" placeholder="Old Password" value="{{$password}}" name="old-password">
  								</div>
  								<div class="form-group required">
  									<label for="input-password" class="control-label">Neues Kennwort</label>
  									<input type="password" class="form-control" id="input-password" placeholder="New Password" value="" name="new-password">
  								</div>
  								<div class="form-group required">
  									<label for="input-confirm" class="control-label">Neues Passwort bestätigen</label>
  									<input type="password" class="form-control" id="input-confirm" placeholder="New Password Confirm" value="" name="new-confirm">
  								</div>
  							</fieldset>
  							<fieldset>
  								<legend></legend>

  							</fieldset>
  						</div>
  					</div>
  					<div class="row">
  						<div class="col-sm-12">
  							<fieldset id="address">
  								<legend> Adresse</legend>
  								<div class="form-group">
  									<label for="input-company" class="control-label">Unternehmen</label>

  									<input type="text" class="form-control" id="input-company" placeholder="Company" value="{{$company}}" name="company">

  								</div>
  								<div class="form-group required">
  									<label for="input-address-1" class="control-label">Adresse 1</label>
  									<input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="{{$address1}}" name="address_1">
  								</div>
  								<div class="form-group required">
  									<label for="input-city" class="control-label">Stadt</label>
  									<input type="text" class="form-control" id="input-city" placeholder="City" value="{{$city}}" name="city">
  								</div>
  								<div class="form-group required">
  									<label for="input-postcode" class="control-label">Postleitzahl</label>
  									<input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="{{$postcode}}" name="postcode">
  								</div>
  								<div class="form-group required">
  									<label for="input-country" class="control-label">Land</label>
                    <input disabled type="text" class="form-control" id="input-country" placeholder="" value="{{$country}}" name="country_id">

  								</div>

  							</fieldset>
  						</div>

  					</div>



  					<div class="buttons clearfix">
  						<div class="pull-right">
  							<input type="submit" class="btn btn-md btn-primary" value="Änderungen speichern">
  						</div>
  					</div>
  				</form>
  			</div>
        <br>
  			<!--Middle Part End-->
  			<!--Right Part Start -->
        <aside class="col-sm-3 hidden-xs" id="column-right">
          <h2 class="subtitle">Konto</h2>
    <div class="list-group">
    <ul class="list-item">

      <li><a href="/profile">Mein Konto</a>
      </li>
      <li><a href="/wishlist">Liebling</a>
      </li>
      <li><a href="/orders">Bestellverlauf</a>
      </li>
    </ul>
    </div>			</aside>
  			<!--Right Part End -->
  		</div>
    </div>
    <br>

  	</div>
@endsection
