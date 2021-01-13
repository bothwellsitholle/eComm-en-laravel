<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

{{-- JQuery CDN --}}

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <title id="titl1">E-commerce Project</title>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height:500px ;
        padding-top: 100px;
        /* margin:20px; */
    }
    img.slider-img{
        height: 400px !important;
    }
    .custom-product{
        height: 600px;
        margin: 20px;
        padding-top: 20px;
        padding-right: 20px;
    }
    .custom-nav{
        margin-bottom: 0px;
    }
    .slide-text{
        background-color: #4f654f3b;
    }
    .trending-image{
        height: 100px ;
    }
    .trending-item{
        float: left;
        width: 16.6%;
    }
    .trending-wrapper{
        margin: 30px;
        text-align: center;
    }
    .detail-img{
        margin-top: 20px 
        padding-top: 50px;
       
    }
    .back-button{
        margin-top: 20px; 
    }
    .search-box{
        width: 500px !important;
        margin-left: 80px !important;
    }
    .searched-item{
        
    }
    .button-block{
        margin-bottom: 20px;
    }

</style>
</html>