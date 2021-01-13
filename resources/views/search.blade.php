@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-4">
            <h4><a href="">Filter</a></h4>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h3 class="m-2">Search Results</h3>
            @foreach ($products as $item)
            <div class="searched-item">
                <a href="detail/{{ $item->id }}">
                    <img class="trending-image" src="{{ $item->gallery }}" alt="Chania">
                    <div class="">
                </a>
                  <h2>{{ $item->name }}</h2>
                  <h5>{{ $item->description }}</h5>
                </div>
                <br> <br>
              </div>
              @endforeach
            </div>
        </div>
   </div>
@endsection
