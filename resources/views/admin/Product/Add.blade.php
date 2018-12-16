@extends('layouts.Admin.app')
@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
 <!-- BREADCRUMB-->
 <section class="au-breadcrumb2">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="au-breadcrumb-content">
                     <div class="au-breadcrumb-left">
                         <span class="au-breadcrumb-span">You are here:</span>
                         <ul class="list-unstyled list-inline au-breadcrumb__list">
                             <li class="list-inline-item active">
                                 <a href="#">Home</a>
                             </li>
                             <li class="list-inline-item seprate">
                                 <span>/</span>
                             </li>
                             <li class="list-inline-item">Dashboard</li>
                         </ul>
                     </div>
                     <form class="au-form-icon--sm" action="" method="post">
                         <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                         <button class="au-btn--submit2" type="submit">
                             <i class="zmdi zmdi-search"></i>
                         </button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- END BREADCRUMB-->

 <!-- WELCOME-->
 <section class="welcome p-t-10">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="title-4">New Product Page
                 </h1>
                 <hr class="line-seprate">
             </div>
         </div>
     </div>
 </section>
 <!-- END WELCOME-->
 <div class="main-content">
                 <div class="section__content section__content--p30">
                     <div class="container-fluid">
                         <div class="row">
                           <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-header">
                                      <strong>Product Add Form</strong>
                                  </div>
                                  <div class="card-body card-block">
                                      <form action="" method="post" enctype="multipart/form-data" id="newproduct" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Product Name ARABIC</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="name_ar" name="name_ar"  class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Product Name ENGLISH</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="name_en" name="name_en"  class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Product Name DUTCH</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="name_gr" name="name_gr"  class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Product Description ARABIC</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="desc_ar" id="desc_ar" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label">Product Description ENGLISH</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="desc_en" id="desc_en" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="textarea-input" class=" form-control-label">Product Description DUTCH</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="desc_gr" id="desc_gr" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="textarea-input" class=" form-control-label">Price In Dolar</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                              <input type="number" id="price_dolar" name="price_dolar"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label for="textarea-input" class=" form-control-label">Sold Price In Dolar</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                  <input type="number" id="sold_price_dolar" name="sold_price_dolar"  class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="textarea-input" class=" form-control-label">Price In Euro</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                      <input type="number" id="price_euro" name="price_euro"  class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                        <div class="col col-md-3">
                                                                            <label for="textarea-input" class=" form-control-label">Sold Price In Euro</label>
                                                                        </div>
                                                                        <div class="col-12 col-md-9">
                                                                          <input type="number" id="sold_price_euro" name="sold_price_euro"  class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="textarea-input" class=" form-control-label">Price In Krona</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                              <input type="number" id="price_kron" name="price_kron"  class="form-control">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                                <div class="col col-md-3">
                                                                                    <label for="textarea-input" class=" form-control-label">Sold Price In Krona</label>
                                                                                </div>
                                                                                <div class="col-12 col-md-9">
                                                                                  <input type="number" id="sold_price_kron" name="sold_price_kron"  class="form-control">
                                                                                </div>
                                                                            </div>
                                                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="select" class=" form-control-label">Select Main Catagory</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <select name="category" id="category" class="form-control">
                                                                    <option value="0">Please select</option>
                                                                    @foreach($data['MainCategories'] as $Categories)
                                                                    <option value="{{$Categories->id}}">{{$Categories->name_ar}}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="select" class=" form-control-label">Select Sub Catagory</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="subCategory" id="subCategory" class="form-control">
                                                            <option value="0">Please select</option>
                                                            @foreach($data['SubCategories'] as $SubCategories)
                                                            <option value="{{$SubCategories->id}}">{{$SubCategories->name_ar}}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                  <div class="card-footer">
                                      <button type="submit" id="newproductbtn" class="btn btn-primary btn-sm">
                                          <i class="fa fa-dot-circle-o"></i> Submit
                                      </button>
                                      <button type="reset" class="btn btn-danger btn-sm">
                                          <i class="fa fa-ban"></i> Reset
                                      </button>
                                  </div>
                                </form>

                                <form action="/GrAdmin/Product/image" enctype="multipart/form-data" class="dropzone" id="dropzone" style="display:none">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" id="product_id" name="product_id" value="">
                                                    <div class="fallback">
                                                <input name="file" type="file" multiple />
                                                </div>
                                                </form>
                                                <div class="done" id="done" style="display:none">
                                                  <button type="button" id="btndone" class="btn btn-primary btn-sm" name="button">Done</button>
                                                </div>
                                                <form id="sizes"  style="display:none">
                                                  {{csrf_field()}}
                                                  <input type="hidden" id="product_ids" name="product_ids" value="">
                                                  <div class="row form-group">
                                                          <div class="col col-md-2">
                                                              <label for="textarea-input" class=" form-control-label">sizes</label>
                                                              <button type="button" id="addcol" class="btn btn-primary btn-sm" name="button"> <i class="fa fa-plus"></i> </button>
                                                          </div>
                                                          <div class="col-12" id="apan">


                                                          <div class="col-12 col-md-4">
                                                            <label for="">Size name</label>
                                                            <input type="text" id="sizename" name="sizename[]"  class="form-control">


                                                          </div>
                                                          <div class="col-12 col-md-4">
                                                            <label>Size Count</label>
                                                            <input type="number" id="sizecount" name="sizecount[]"  class="form-control">


                                                          </div>
                                                          </div>
                                                          <div class="col-12" id="repo">

                                                          </div>
                                                      </div>
                                                      <div class="card-footer">
                                                          <button type="submit" id="sizesAdd" class="btn btn-primary btn-sm">
                                                              <i class="fa fa-dot-circle-o"></i> Submit
                                                          </button>
                                                          <button type="reset" class="btn btn-danger btn-sm">
                                                              <i class="fa fa-ban"></i> Reset
                                                          </button>
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
                 $("#newproductbtn").on('click',function(e){
                   e.preventDefault();
                   var data = $("#newproduct").serialize();
                   $.ajax({
                     url:"/GrAdmin/Product/Create",
                     type:"POST",
                     data:data,
                     success: function(req){
                       $("#newproduct").css('display','none');
                       $("#product_id").val(req);
                       $("#dropzone").css('display','block');
                       $("#done").css('display','block');
                     },
                   })
                 })
                 $("#btndone").on("click",function () {
                   $("#dropzone").css('display','none');
                   $("#done").css('display','none');
                  var product_id =   $("#product_id").val();
                   $("#product_ids").val(product_id);
                   $("#sizes").css('display','block');

                 })
                 $("#addcol").on("click",function () {
                    var rep = '<div class="col-12 col-md-4"><label for="">Size name</label><input type="text" id="sizename" name="sizename[]"  class="form-control"></div><div class="col-12 col-md-4"><label>Size Count</label><input type="number" id="sizecount" name="sizecount[]"  class="form-control"></div>';
                    $(rep).appendTo("#repo");
                 })

                 $("#sizesAdd").on('click',function (e) {
                   e.preventDefault();
                   var data = $("#sizes").serialize();
                   $.ajax({
                     url:"/GrAdmin/Product/Sizes",
                     type:"POST",
                     data:data,
                     success:function (req) {
                       alert("New Product Added Successfully");

                       window.location.reload();
                     }
                   })
                 })
               })
             </script>

@endsection
