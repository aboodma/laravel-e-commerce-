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
                 <h1 class="title-4">Update Product Page
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
                               <strong> <i class="fa fa-image"></i> Edit Product Images</strong>


                             </div>
                             <div class="card-body">
                               <button type="button" id="ImageForm" class="btn btn-primary" name="button"> Edit Images</button>
                               <form id="formimage" class="" action="index.html" method="post">
                                 <div class="row form-group">
                                   @foreach($data['images'] as $image)

                                     <div class="col col-sm-3">
                                       <a href="#">
                                         <img src="/{{$image->path}}" alt="" >
                                         </a>
                                     </div>
                                     @endforeach

                                 </div>




                               </form>
                              </div>
                              <div class="card-footer">

                              </div>
                           </div>

                         </div>
                          <hr>
                       </div>
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
                                                <input type="text" value="{{$data['products'][0]->product_name_ar}}" id="name_ar" name="name_ar"  class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Product Name ENGLISH</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" value="{{$data['products'][0]->product_name_en}}" id="name_en" name="name_en"  class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Product Name DUTCH</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" value="{{$data['products'][0]->product_name_gr}}" id="name_gr" name="name_gr"  class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Product Description ARABIC</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="desc_ar" value="" id="desc_ar" rows="9" placeholder="Content..." class="form-control">{{$data['products'][0]->product_info_ar}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label">Product Description ENGLISH</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="desc_en" value="" id="desc_en" rows="9" placeholder="Content..." class="form-control">{{$data['products'][0]->product_info_en}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="textarea-input" class=" form-control-label">Product Description DUTCH</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="desc_gr" value="" id="desc_gr" rows="9" placeholder="Content..." class="form-control">{{$data['products'][0]->product_info_gr}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="textarea-input" class=" form-control-label">Price In Dolar</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                              <input value="{{$data['products'][0]->price_dolar}}" type="number" id="price_dolar" name="price_dolar"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label for="textarea-input" class=" form-control-label">Sold Price In Dolar</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                  <input value="{{$data['products'][0]->sold_price_dolar}}" type="number" id="sold_price_dolar" name="sold_price_dolar"  class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="textarea-input" class=" form-control-label">Price In Euro</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                      <input value="{{$data['products'][0]->price_euro}}" type="number" id="price_euro" name="price_euro"  class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                        <div class="col col-md-3">
                                                                            <label for="textarea-input" class=" form-control-label">Sold Price In Euro</label>
                                                                        </div>
                                                                        <div class="col-12 col-md-9">
                                                                          <input value="{{$data['products'][0]->sold_price_euro}}" type="number" id="sold_price_euro" name="sold_price_euro"  class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                            <div class="col col-md-3">
                                                                                <label for="textarea-input" class=" form-control-label">Price In Krona</label>
                                                                            </div>
                                                                            <div class="col-12 col-md-9">
                                                                              <input value="{{$data['products'][0]->price_kron}}" type="number" id="price_kron" name="price_kron"  class="form-control">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                                <div class="col col-md-3">
                                                                                    <label for="textarea-input" class=" form-control-label">Sold Price In Krona</label>
                                                                                </div>
                                                                                <div class="col-12 col-md-9">
                                                                                  <input value="{{$data['products'][0]->sold_price_kron}}" type="number" id="sold_price_kron" name="sold_price_kron"  class="form-control">
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
                                                     url:"/GrAdmin/Product/update",
                                                     type:"POST",
                                                     data:data,
                                                     success: function(req){
                                                       // $("#newproduct").css('display','none');
                                                       // $("#dropzone").css('display','block');
                                                     },
                                                   })
                                                 })
                                               })
                                               $("#ImageForm").on("click",function(){
                                                 $( "#formimage" ).toggle( "slow", function() {
                                                              // Animation complete.
                                                            });
                                               })
                                             </script>

                                @endsection
