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
                 <h1 class="title-4">Shipping Companies Page
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
                                               <th>Company Name Ar</th>
                                               <th>Company Name En</th>
                                               <th>Company Name Du</th>
                                               <th>Price Dolar</th>
                                               <th>Price Euor</th>
                                               <th>Price Krona</th>

                                               <th>Option</th>

                                           </tr>
                                       </thead>
                                       <tbody>
                           @foreach($shipping as $ship)
                                           <tr>

                                               <td>{{$ship->id}}</td>
                                               <td>{{$ship->name_ar}}</td>
                                               <td>{{$ship->name}}</td>
                                               <td>{{$ship->name_gr}}</td>
                                               <td>{{$ship->price_dolar}}</td>
                                               <td>{{$ship->price_euro}}</td>
                                               <td>{{$ship->price_kron}}</td>

                                               <td>
                                                 <button type="button" name="button" class="btn btn-primary">Edit</button>
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
