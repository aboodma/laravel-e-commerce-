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
                     <!-- <form class="au-form-icon--sm" action="" method="post">
                         <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                         <button class="au-btn--submit2" type="submit">
                             <i class="zmdi zmdi-search"></i>
                         </button>
                     </form> -->
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
                 <h1 class="title-4">New Settings  Page
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
                                      <strong>Settings Add Form</strong>
                                  </div>
                                  <div class="card-body card-block">
                                      <form id="shipadd" enctype="multipart/form-data" class="form-horizontal">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$data[0]->id}}">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Site Name (Dutch)</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" value="{{$data[0]->site_name_gr}}" id="text-input" name="site_name_gr" placeholder="Code" class="form-control">

                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Site Name (Arabic)</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->site_name_ar}}" name="site_name_ar" placeholder="count" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Site Name (English)</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->site_name_en}}" name="site_name_en" placeholder="count" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Site Key Words (Arabic)</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->keywords_ar}}" name="keywords_ar" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Site Keywords (Dutch)</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->keywords_gr}}" name="keywords_gr" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Site Keywords (English)</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->keywords_en}}" name="keywords_en" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Site description (Arabic)</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->description_ar}}" name="description_ar" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label"> Site description (English) </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->description_en}}" name="description_en" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label"> Site description (Dutch) </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->description_gr}}" name="description_gr" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label"> Site Address (Arabic) </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->adress_ar}}" name="adress_ar" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">  Site Address (English) </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->adress_en}}" name="adress_en" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">  Site Address (Dutch) </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->adress_gr}}" name="adress_gr" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">  Site Mail </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->mail}}" name="mail" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">  Site Phone </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->phone}}" name="phone" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">  Site Facebook </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->facebook}}" name="facebook" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">  Site Instagram </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="{{$data[0]->instagram}}" name="instagram" placeholder="sold_value" class="form-control">

                                            </div>
                                        </div>









                                  <div class="card-footer">
                                      <button id="shipbtn" type="submit" class="btn btn-primary btn-sm">
                                          <i class="fa fa-dot-circle-o"></i> Submit
                                      </button>
                                      <button type="reset" class="btn btn-danger btn-sm">
                                          <i class="fa fa-ban"></i> Reset
                                      </button>
                                  </div>
                              </div>
                          </div>
                         </div>

                     </div>
                 </div>
             </div>
             <script>
               $(document).ready(function () {
                 $("#shipbtn").on("click",function (e) {
                   e.preventDefault();
                   var data = $("#shipadd").serialize();
                   $.ajax({
                     url:"/GrAdmin/Setting/update",
                     type:"POST",
                     data:data,
                     success: function (req) {
                       alert(" Update Complete Successfully");

                       location.reload();
                     }
                   })
                 })
               })
             </script>

@endsection
