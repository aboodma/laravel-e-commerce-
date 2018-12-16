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
  				<p class="lead">Hello, <strong>{{$name.' '.$lname}}</strong> - To update your account information.</p>
  				<form>
  					<div class="row">
  						<div class="col-sm-6">
  							<fieldset id="personal-details">
  								<legend>Personal Details</legend>
  								<div class="form-group required">
  									<label for="input-firstname" class="control-label">First Name</label>
  									<input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="{{$name}}" name="firstname">
  								</div>
  								<div class="form-group required">
  									<label for="input-lastname" class="control-label">Last Name</label>
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
  								<legend>Change Password</legend>
  								<div class="form-group required">
  									<label for="input-password" class="control-label">Old Password</label>
  									<input type="password" class="form-control" id="input-password" placeholder="Old Password" value="{{$password}}" name="old-password">
  								</div>
  								<div class="form-group required">
  									<label for="input-password" class="control-label">New Password</label>
  									<input type="password" class="form-control" id="input-password" placeholder="New Password" value="" name="new-password">
  								</div>
  								<div class="form-group required">
  									<label for="input-confirm" class="control-label">New Password Confirm</label>
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
  								<legend> Address</legend>
  								<div class="form-group">
  									<label for="input-company" class="control-label">Company</label>

  									<input type="text" class="form-control" id="input-company" placeholder="Company" value="{{$company}}" name="company">

  								</div>
  								<div class="form-group required">
  									<label for="input-address-1" class="control-label">Address 1</label>
  									<input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="{{$address1}}" name="address_1">
  								</div>
  								<div class="form-group required">
  									<label for="input-city" class="control-label">City</label>
  									<input type="text" class="form-control" id="input-city" placeholder="City" value="{{$city}}" name="city">
  								</div>
  								<div class="form-group required">
  									<label for="input-postcode" class="control-label">Post Code</label>
  									<input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="{{$postcode}}" name="postcode">
  								</div>
  								<div class="form-group required">
  									<label for="input-country" class="control-label">Country</label>
                    <input disabled type="text" class="form-control" id="input-country" placeholder="" value="{{$country}}" name="country_id">

  								</div>

  							</fieldset>
  						</div>

  					</div>



  					<div class="buttons clearfix">
  						<div class="pull-right">
  							<input type="submit" class="btn btn-md btn-primary" value="Save Changes">
  						</div>
  					</div>
  				</form>
  			</div>
        <br>
  			<!--Middle Part End-->
  			<!--Right Part Start -->
  			<aside class="col-sm-3 hidden-xs" id="column-right">
  				<h2 class="subtitle">Account</h2>
  				<div class="list-group">
  					<ul class="list-item">

  						<li><a href="/profile">My Account</a>
  						</li>
  						<li><a href="/wishlist">Wish List</a>
  						</li>
  						<li><a href="/orders">Order History</a>
  						</li>
  					</ul>
  				</div>
  			</aside>
  			<!--Right Part End -->
  		</div>
    </div>
    <br>

  	</div>

@endsection
