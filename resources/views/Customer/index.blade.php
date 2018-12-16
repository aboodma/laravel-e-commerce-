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
  @if(isset($PageData['error']))
  <div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      If You have Account Please <strong> Login </strong>  First
      If You Don't Have Account Create Your Account Now Quickly From Here <strong> <a href="/Register">Register</a></strong>
    </div>
    @endif
		<ul class="breadcrumb">

		</ul>

		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">

					<div class="account-border">
						<div class="row">
							<div class="col-sm-6 new-customer">
								<div class="well">
									<h2><i class="fa fa-file-o" aria-hidden="true"></i> New Customer</h2>
									<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
								</div>
								<div class="bottom-form">
									<a href="/Register" class="btn btn-default pull-right">Continue</a>
								</div>
							</div>

              <form  enctype="multipart/form-data" id="Customerlogin">
                {{csrf_field()}}
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
										<p><strong>I am a returning customer</strong></p>
										<div class="form-group">
											<label class="control-label " for="input-email">E-Mail Address</label>
											<input type="text" name="email" value="" id="input-email" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password" name="password" value="" id="input-password" class="form-control" required>
										</div>
									</div>
									<div class="bottom-form">
										<a href="#" class="forgot">Forgotten Password</a>
										<input type="submit" value="Login" class="btn btn-default pull-right">
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
  <script>
    $(document).ready(function () {
      $("#Customerlogin").submit(function (e) {
        e.preventDefault();
        var Data = $(this).serialize();
        $.ajax({
          url:"/Customer/login",
          type:"POST",
          data:Data,
          success: function (result) {
            window.location.href = "/";
          }
        })
      })
    })
  </script>
@endsection
