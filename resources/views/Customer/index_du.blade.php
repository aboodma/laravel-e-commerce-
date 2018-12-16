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
  @if(isset($PageData['error']))
  <div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      If You have Account Please <strong> Login </strong>  First
      If You Dont Have Account Create Your Account Now Quickly From Here <strong> <a href="/Register">Register</a></strong>
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
									<h2><i class="fa fa-file-o" aria-hidden="true"></i> Nieuw account</h2>
									<p>Door een account aan te maken, kun je sneller winkelen, op de hoogte blijven van de status van een bestelling en je bestellingen die je eerder hebt gemaakt bijhouden.</p>
								</div>
								<div class="bottom-form">
									<a href="/Register" class="btn btn-default pull-right">Doorgaan met</a>
								</div>
							</div>

              <form  enctype="multipart/form-data" id="Customerlogin">
                {{csrf_field()}}
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Aanmelden</h2>

										<div class="form-group">
											<label class="control-label " for="input-email">E-mailadres</label>
											<input type="text" name="email" value="" id="input-email" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Wachtwoord</label>
											<input type="password" name="password" value="" id="input-password" class="form-control" required>
										</div>
									</div>
									<div class="bottom-form">
										<a href="#" class="forgot">vergeten wachtwoord</a>
										<input type="submit" value="Aanmelden" class="btn btn-default pull-right">
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
