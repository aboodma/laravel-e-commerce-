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
									<h2><i class="fa fa-file-o" aria-hidden="true"></i> مستخدم جديد</h2>
									<p>أنشئ حسابك الأن وابدء التسوق معنا تسوق أمن ومتكامل </p>
								</div>
								<div class="bottom-form">
									<a href="/Register" class="btn btn-default pull-right">متابعة</a>
								</div>
							</div>

							<form  enctype="multipart/form-data" id="Customerlogin">
                {{csrf_field()}}
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> تسجيل دخول</h2>

										<div class="form-group">
											<label class="control-label " for="input-email">البريد الإلكتروني</label>
											<input type="text" name="email" value="" id="input-email" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">كلمة السر</label>
											<input type="password" name="password" value="" id="input-password" class="form-control" required>
										</div>
									</div>
									<div class="bottom-form">
										<a href="#" class="forgot">نسيت كلمة السر</a>
										<input type="submit" value="تسجيل دخول" class="btn btn-default pull-right">
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
  <script>
  $(document).ready(function () {
  	$("#searchp").submit(function (e) {
  		e.preventDefault();
  		var data = $("#searchp").serialize();
  		$.ajax({
  			url:"/search",
  			type:"POST",
  			data:data,
  			success : function (come) {
          // console.log(come[0]);
          if (come.length  === 0) {
          var  msg = "no products Similar";
          $("#Result").html(msg);

          }
          if (come.length  !== 0) {
            console.log(come.length);
            for (var i = 0; i < come.length; i++) {
              var path=come[i]['path'];
              var name=come[i]['product_name_ar'];
              var slug=come[i]['product_slug_ar'];
              $("#Result").append('<ul class="row-list"><a href="/product/'+slug+'"> <img src="'+path+'" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview">'+name+'</a></ul>');

            }

          }


  			}
  		})
  	})
  })


  </script>
@endsection
