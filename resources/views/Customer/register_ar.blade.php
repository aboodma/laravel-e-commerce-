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

  		</ul>

  		<div class="row">
  			<div id="content" class="col-sm-12">
  				<h2 class="title">إنشاء حساب جديد</h2>
  				<p>  إذا كنتت تملك حسابا مسبقا يرجى زيارة صفحة <a href="/login">تسجيل الدخول</a>  .</p>
  				<form id="customerRegister" class="form-horizontal account-register clearfix">
            {{csrf_field()}}
  					<fieldset id="account">
  						<legend>المعلومات الشخصية</legend>

  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-firstname">الإسم </label>
  							<div class="col-sm-10">
  								<input required type="text" name="firstname" value="" placeholder="الإسم" id="input-firstname" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-lastname">اللقب (الكنية)</label>
  							<div class="col-sm-10">
  								<input required type="text" name="lastname" value="" placeholder="اللقب (الكنية)" id="input-lastname" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-email">البريد الإلكتروني</label>
  							<div class="col-sm-10">
  								<input required type="email" name="email" value="" placeholder="البريد الإلكتروني" id="input-email" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-telephone">رقم الهاتف الجوال</label>
  							<div class="col-sm-10">
  								<input required type="tel" name="telephone" value="" placeholder="رقم الهاتف الجوال" id="input-telephone" class="form-control">
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-fax">فاكس</label>
  							<div class="col-sm-10">
  								<input  type="text" name="fax" value="" placeholder="فاكس" id="input-fax" class="form-control">
  							</div>
  						</div>
  					</fieldset>
  					<fieldset id="address">
  						<legend>العنوان</legend>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-company">الشركة (المؤسسة)</label>
  							<div class="col-sm-10">
  								<input  type="text" name="company" value="" placeholder="الشركة (المؤسسة)" id="input-company" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-address-1">العنوان 1</label>
  							<div class="col-sm-10">
  								<input required type="text" name="address_1" value="" placeholder="العنوان 1" id="input-address-1" class="form-control">
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="col-sm-2 control-label" for="input-address-2">العنوان 2</label>
  							<div class="col-sm-10">
  								<input  type="text" name="address_2" value="" placeholder="العنوان 2" id="input-address-2" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-city">المدينة</label>
  							<div class="col-sm-10">
  								<input required type="text" name="city" value="" placeholder="المدينة" id="input-city" class="form-control">
  							</div>
  						</div>
  						<div class="form-group ">
  							<label class="col-sm-2 control-label" for="input-postcode">الرمز البريدي</label>
  							<div class="col-sm-10">
  								<input  type="text" name="postcode" value="" placeholder="الركز البريدي" id="input-postcode" class="form-control">
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-country">الدولة</label>
  							<div class="col-sm-10">
  								<select name="country_id" id="input-country" class="form-control">
                    <option value=""> --- يرجى إختيار الدولة--- </option>
                    @foreach($PageData['countries'] as $country)
  									<option value="{{$country->country_code}}">{{$country->country_arName}}</option>
                    @endforeach
  								</select>
  							</div>
  						</div>

  					</fieldset>
  					<fieldset>
  						<legend>كلمة السر</legend>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-password">كلمة السر</label>
  							<div class="col-sm-10">
  								<input required type="password" name="password" onchange="passwordvalidation()" value="" placeholder="كلمة السر" id="input-password" class="form-control">
                  <small id="error"></small>
  							</div>
  						</div>
  						<div class="form-group required">
  							<label class="col-sm-2 control-label" for="input-confirm">تأكيد كلمة السر</label>
  							<div class="col-sm-10">
  								<input required type="password" name="confirm" value="" onchange="confirmpass()" placeholder="تأكيد كلمة السر" id="input-confirm" class="form-control">
                  <small id="errorco"></small>

  							</div>
  						</div>
  					</fieldset>
  					<fieldset>
  						<legend></legend>
              <div class="buttons">
    						<div class="pull-right">لقد قرأت  <a href="#" class="agree"><b>الشروط والخصوصية</b></a> وأوافق عليها
    							<input required class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
    							<input  type="submit" value="متابعة" class="btn btn-primary">
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
          var msg = "يجب أن تكون كلمة السر أكثر من 6 خانات";
          $("#error").html(msg);
        }
      };
      function confirmpass() {
        var value = $("#input-password").val();
        var confirmv = $("#input-confirm").val();
        if (confirmv != value) {
          var msg="كلمة السر غير متطابقات";
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
