<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop eCommerce HTML CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{url('/public')}}/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/public')}}/assets/img/favicon.ico">

    <link rel="stylesheet" href="{{url('/public')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/public')}}/assets/css/templatemo.css">
    <link rel="stylesheet" href="{{url('/public')}}/assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{url('/public')}}/assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="{{url('/public')}}/assets/css/produk.css">
    
</head>

<body>
   


  @include('navbar')
   


   


    <!-- Start Categories of The Month -->
    <div class="gallery">
      <div class="content">
        <img src="{{url('/public')}}/assets/img/cepatu1.jpg">
        <h3>Shoes</h3>
        <h6>$100.00</h6>
        
        <button class="buy-1"> <a href="" class="fw-bold text-decoration-none text-white">View Details</a></button>
      </div>
      <div class="content">
        <img src="{{url('/public')}}/assets/img/cepatu2.jpg">
        <h3>Shoes</h3>
        <h6>$100.00</h6>
        <button class="buy-1"> <a href="" class="fw-bold text-decoration-none text-white">View Details</a></button>
      </div>
      <div class="content">
        <img src="{{url('/public')}}/assets/img/sepatu3.jpg">
        <h3>Shoes</h3>
        <h6>$100.00</h6>
        <button class="buy-1"> <a href="" class="fw-bold text-decoration-none text-white">View Details</a></button>
      </div>

      <div class="content">
        <img src="{{url('/public')}}/assets/img/cepatu4.jpg">
        <h3>Shoes</h3>
        <h6>$100.00</h6>
        <button class="buy-1"> <a href="" class="fw-bold text-decoration-none text-white">View Details</a></button>
      </div>
      <div class="content">
        <img src="{{url('/public')}}/assets/img/cepatu5.jpg">
        <h3>Shoes</h3>
        <h6>$100.00</h6>
        <button class="buy-1"> <a href="" class="fw-bold text-decoration-none text-white">View Details</a></button>
      </div>
      <div class="content">
      <img src="{{url('/public')}}/assets/img/sepatu6.jpg">
        <h3>Shoes</h3>
        <h6>$100.00</h6>
        <button class="buy-1"> <a href="" class="fw-bold text-decoration-none text-white">View Details</a></button>
      </div>
    </div>
    <!-- End Categories of The Month -->


   


    <!-- Start Footer -->
    @include('footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{url('/public')}}/assets/js/jquery-1.11.0.min.js"></script>
    <script src="{{url('/public')}}/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{url('/public')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/public')}}/assets/js/templatemo.js"></script>
    <script src="{{url('/public')}}/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>