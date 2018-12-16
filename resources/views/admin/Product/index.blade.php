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
                 <h1 class="title-4">Product Page

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
                             <div class="table-responsive table--no-card m-b-30">
                                   <table class="table table-borderless table-striped table-earning">
                                       <thead>
                                           <tr>
                                               <th>id</th>
                                               <th>Product Name Ar</th>
                                               <th>Product Name En</th>
                                               <th>Product Name Du</th>
                                               <th class="text-right">Price Dolar</th>
                                               <th class="text-right">Price Euro</th>
                                               <th class="text-right">Price Krona</th>
                                               <th class="text-right">quantity</th>
                                               <th>Option</th>

                                           </tr>
                                       </thead>
                                       <tbody>
                           @foreach($products as $product)
                                           <tr>

                                               <td>{{$product->id}}</td>
                                               <td>{{$product->product_name_ar}}</td>
                                               <td>{{$product->product_name_en}}</td>
                                               <td>{{$product->product_name_gr}}</td>
                                               <td class="text-right">{{$product->price_dolar}}</td>
                                               <td class="text-right">{{$product->price_euro}}</td>
                                               <td class="text-right">{{$product->price_kron}}</td>
                                               <td class="text-right">{{$product->quantity}}</td>
                                               <td> <button type="button" onclick="Redirecter('/GrAdmin/Product/Edit/{{$product->id}}')" name="button" class="btn btn-primary">Edit</button>
                                                    <button type="button" name="button" class="btn btn-danger">Delete</button> </td>
                                           </tr>
                                               @endforeach
                                       </tbody>
                                   </table>
                               </div>
                         </div>

                     </div>
                 </div>
             </div>

@endsection
