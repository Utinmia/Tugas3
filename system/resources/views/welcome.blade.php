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
   


    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{url('/public')}}/assets/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Zay</b> Store</h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{url('/public')}}/assets/img//banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{url('/public')}}/assets/img//banner_img_01.jpg " alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


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
        <button class="buy-1">View Details</button>
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