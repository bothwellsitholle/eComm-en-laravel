@extends('master')
@section("content")
    <div class="container custom-detail">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $products->gallery }}" alt="...">
            </div>
            <div class="col-sm-6 back-button">
                <a href="/">&laquo; &nbsp; Go Back</a>
                <h2>{{ $products->name }}</h2>
                <h3><strong>Price:</strong> ${{ $products->price }}</h3>
                <br>
                <h4><strong>DESCRIPTION:</strong> {{$products->description }}</h4>
                <h4><strong>CATEGORY:</strong> {{ $products->category }}</h4>
                <hr>
                <br><br>
                
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                    <button class="btn btn-primary button-block">Add to Cart</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-success button-block" type="submit">Buy Now</button>
                </form>

                
                
            </div>
        </div>  <strong></strong>
   </div>
@endsection