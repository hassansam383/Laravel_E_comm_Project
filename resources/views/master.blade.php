<!doctype html>
<html lang="en">
  <head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<!--jquery cdn-->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 <title>E-com Project</title>
    
  </head>
  <body>

  {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}


  </body>
  <style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
      height: 400px !important;
    }
    .custom-product{
      height: 800px;
    }
    .panel{
      margin-top: 200px;
    }
    .slider-text{
      color: rgb(0, 92, 128);
      
    }

    .trending-img{
      height: 100px;
    }

    .trending-items{
      float: left;
      width: 20%;
    }
    .trending-wrappers{
      margin: 30px;
    }
    .detail-img{
      height: 200px;
    }
    .cart-list-devider{
      border-bottom: 1px solid rgb(238, 218, 218);
      margin-bottom: 20px;
      padding-bottom: 20px;
    }
  </style>
</html>