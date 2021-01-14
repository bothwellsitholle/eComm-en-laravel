<?php
use App\Http\Controllers\ProductController;
?>
@extends('master')
@section("content")
    <div class="custom-product cartlist">
      
        <div class="container cartlist">
            <div class="">
               <u> <h3>My Orders List</h3> </u>
                <br>
                <div class="d-flex justify-content-end text-center"><a class="" href="/ordernow">&laquo; Home</a>
                </div>
                
                <br><br>
        <table class="table table-bordered cartlist" style="clear:both; margin-bottom:100px !important">
            <tr>
                <th>Product Image</th>
                <th>Product Description</th>
                <th>Payment Status</th>
                <th>Payment Method</th>
                <th>Address</th>
                <th>Status</th>
            </tr>
            @foreach ($products as $item)
            <div class="row searched-item cart-list-devider">

                <tr>
                    <td>
                        <div class="col-sm-1">
                            <a href="detail/{{ $item->id }}">
                            <img class="trending-image" src="{{ $item->gallery }}" alt="Chania">
                            </a>
                        </div>
                    </td>
            
                    <td>
                        <div class="col-sm-6">
                            <h2>{{ $item->name }}</h2>
                            <h5>{{ $item->description }}</h5>
                        </div>
                    </td>
            
                    <td>
                        <div class="col-sm-1">
                            <h5>{{ $item->payment_status }}</h5>
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-1">
                            <h5>{{ $item->payment_method }}</h5>
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-4">
                            <h5>{{ $item->address }}</h5>
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-1">
                            <h5>{{ $item->status }}</h5>
                        </div>
                    </td>
                </tr>
                </div>
              
              @endforeach
            </table>
            </div>
            </div>
          </div>
   </div>
@endsection


   





