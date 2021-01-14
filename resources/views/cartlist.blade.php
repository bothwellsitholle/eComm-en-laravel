@extends('master')
@section("content")
    <div class="custom-product cartlist">
      
        <div class="container cartlist">
            <div class="">
               <u> <h3>Cart List</h3> </u>
                <br>
                <div class="d-flex justify-content-end text-center"><a class="btn btn-success" href="/ordernow">Order Now</a>
                </div>
                
                <br><br>
        <table class="table table-bordered cartlist" style="clear:both; margin-bottom:100px !important">
            <tr>
                <th>Product Image</th>
                <th>Product Description</th>
            </tr>
            @foreach ($products as $item)
            <div class="row searched-item cart-list-devider">

                <tr>
                    <td>
                        <div class="col-sm-2">
                            <a href="detail/{{ $item->id }}">
                            <img class="trending-image" src="{{ $item->gallery }}" alt="Chania">
                            </a>
                        </div>
                    </td>
            
                    <td>
                        <div class="col-sm-8">
                            <h2>{{ $item->name }}</h2>
                            <h5>{{ $item->description }}</h5>
                        </div>
                    </td>
            
                    <td>
                        <div class="col-sm-2 cartlist">
                            <a href="/remove-cart-item/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a>
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


   





