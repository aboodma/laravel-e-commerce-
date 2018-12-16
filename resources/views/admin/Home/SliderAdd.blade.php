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
                 <h1 class="title-4">New Home Slider Page
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
                                      <strong>Home Slider Add Form</strong>
                                  </div>
                                  <div class="card-body card-block">
                                    <h3>Upload Sliders Here </h3>
                                    <hr>
                                    <small>Click And Select Image Or Just Drop It Here</small>
                                    <form action="/GrAdmin/Home/saveimage" enctype="multipart/form-data" class="dropzone" id="dropzone">
                                                        {{ csrf_field() }}
                                                        <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
                                                    </form>
                                                    <hr>
                                                    <br>
                                      <form  id="sliders" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <input type="hidden" id="id" name="id" value="">
                                              <div class="row form-group">
                                                      <div class="col col-md-3">
                                                          <label for="select" class=" form-control-label">Category</label>
                                                      </div>
                                                      <div class="col-12 col-md-9">
                                                          <select name="link" id="link" class="form-control">
                                                              <option value="0">Please select</option>
                                                              @foreach($categories as $category)
                                                              <option value="/Category/{{$category->id}}">{{$category->name_ar}}</option>
                                                              @endforeach

                                                          </select>
                                                      </div>
                                                  </div>




                                                </form>




                                  <div class="card-footer">
                                      <button type="submit" id="sliderSubmit" class="btn btn-primary btn-sm">
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
             <script >

             Dropzone.options.dropzone = { maxFilesize: 2,maxFiles:1, // Size in MB
                addRemoveLinks: true, removedfile: function(file) {
                     // var name = file.name;        var fileRef;
          return (fileRef = file.previewElement) != null ?
                  fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },

success: function(file, response) {
              //alert(response);
              alert(response);
                $("#id").val(response);

            },

error: function(file, response) {
                  alert(response);
       }};
             </script>
             <script>
             $(document).ready(function(){
               $("#sliderSubmit").on('click',function(e){
                 e.preventDefault();
                 var data = $("#sliders").serialize();
                 $.ajax({
                   url:"/GrAdmin/Home/createSlider",
                   type:"POST",
                   data:data,
                   success: function (req) {
                     alert("New Slider Added Successfully");

                    // window.location.reload()
                   },
                   error: function (req) {

                   }
                 })
               })
               })
             </script>

@endsection
