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
                 <h1 class="title-4">Orders Page

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
                                               <th>customer Name </th>
                                               <th>Payment Name</th>
                                               <th>Shipping Company</th>
                                               <th class="text-right">Coupon Code</th>
                                               <th class="text-right">Is Paied</th>
                                               <th class="text-right">Is Complete</th>
                                               <th class="text-right">Is Canceled</th>
                                               <th>Option</th>

                                           </tr>
                                       </thead>
                                       <tbody>
                           @foreach($data as $order)
                                           <tr>

                                               <td>{{$order->id}}</td>
                                               <td>{{$order->custname.' '.$order->custlname}}</td>
                                               <td>{{$order->payname}}</td>
                                               <td>{{$order->shname}}</td>
                                               <td class="text-right">{{$order->coupon_id }}</td>
                                               <td class="text-right">
                                                 @if($order->is_paied=='1')
                                                 <i class="fa fa-check" style="color:green"></i>
                                                 @endif
                                                 @if($order->is_paied=='0')

                                                 <i class="fa fa-exclamation-circle" style="color:red;"></i>
                                                 @endif

                                              </td>
                                               <td class="text-right">
                                                 @if($order->is_complete=='1')
                                                 <i class="fa fa-check" style="color:green"></i>
                                                 @endif
                                                 @if($order->is_complete=='0')

                                                 <i class="fa fa-exclamation-circle" style="color:red;"></i>
                                                 @endif

                                                 </td>
                                               <td class="text-right">
                                                 @if($order->is_canceled=='1')
                                                 <i class="fa fa-check" style="color:green"></i>
                                                 @endif
                                                @if($order->is_canceled=='0')
                                                 <i class="fa fa-exclamation-circle" style="color:red;"></i>
                                                    @endif
                                            </td>
                                               <td>  <div class="dropdown">
                                                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Edit
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu">
                                                    <li><button onclick="asComplete({{$order->id}})" class="btn btn-success" type="button">Is Complete</button></li>
                                                    <li><button onclick="asCanceled({{$order->id}})" class="btn btn-warning" type="button">Is Canceled</button></li>
                                                    <li><button onclick="asDelete({{$order->id}})" class="btn btn-danger" type="button">Is Delete</button></li>
                                                  </ul>
                                                </div>
                                                  <button type="button" class="btn btn-success" name="button">View</button>
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
             <script>
               function asCanceled(id) {
                 $.get('/GrAdmin/order/status/cancel/'+id,function () {
                   alert("Statu Cahnged As Canceled");
                   window.location.reload();
                 })
               }
               function asComplete(id) {
                 $.get('/GrAdmin/order/status/complete/'+id,function () {
                   alert("Statu Cahnged As Completed");
                   window.location.reload();
                 })
               }
               function asDelete(id) {
                 $.get('/GrAdmin/order/status/delete/'+id,function () {
                   alert("Statu Cahnged As Deleted");
                   window.location.reload();
                 })
               }
             </script>
@endsection
