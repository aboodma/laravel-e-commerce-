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
                 <h1 class="title-4">New Main Category Page
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
                                      <strong>Main Category Add Form</strong>
                                  </div>
                                  <div class="card-body card-block">
                                      <form id="catform" enctype="multipart/form-data" class="form-horizontal">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$data[0]->id}}">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Main Category Name ARABIC</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" value="{{$data[0]->name_ar}}" id="name_ar" name="name_ar" placeholder="Text" class="form-control">
                                                <small class="form-text text-muted">This is a help text</small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Main Category Name ENGLISH</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" value="{{$data[0]->name_en}}"  id="name_en" name="name_en" placeholder="Text" class="form-control">
                                                <small class="form-text text-muted">This is a help text</small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Main Category Name DUTCH</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="name_gr" value="{{$data[0]->name_gr}}" name="name_gr" placeholder="Text" class="form-control">
                                                <small class="form-text text-muted">This is a help text</small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Main Category Description ARABIC</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="info_ar" id="info_ar" value="{{$data[0]->info_ar}}" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label">Main Category Description ENGLISH</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="info_en" id="info_en" value="{{$data[0]->info_en}}" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="textarea-input" class=" form-control-label">Main Category Description DUTCH</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="info_gr" id="info_gr" value="{{$data[0]->info_gr}}" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                        </div>
                                                    </div>





                                  <div class="card-footer">
                                      <button type="submit" id="catinsert" class="btn btn-primary btn-sm">
                                          <i class="fa fa-dot-circle-o"></i> Submit
                                      </button>
                                      <button type="reset" class="btn btn-danger btn-sm">
                                          <i class="fa fa-ban"></i> Reset
                                      </button>
                                  </div>
                                </form>
                                <div class="card">


                                <div class="card-header">

                                </div>
                                <div class="card-body">

                                                                                      <form action="/GrAdmin/subCategory/image" enctype="multipart/form-data" class="dropzone" id="dropzone" >
                                                                                                          {{ csrf_field() }}
                                                                                                          <input type="hidden"  name="categoryid" id="catid" value="{{$data[0]->id}}">
                                                                                                          <div class="fallback">
                                                                                                      <input name="file" type="file" multiple />
                                                                                                      </div>
                                                                                                      </form>

                                </div>
                                    </div>
                              </div>
                          </div>
                         </div>

                     </div>
                 </div>
             </div>
             <script>
               $(document).ready(function () {
                 $("#catinsert").on("click",function (e) {
                   e.preventDefault();
                   var data = $("#catform").serialize();
                   $.ajax({
                     url:"/GrAdmin/subCategory/update",
                     type:"POST",
                     data:data,
                     success:function (req) {
                       alert("Update Complete Successfully");
                       window.location.reload();
                     }
                   })
                 })
               })
             </script>
@endsection
