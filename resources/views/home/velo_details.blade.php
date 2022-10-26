<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Jetcycle</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        body{
            background-color: #edf1f5;
            margin-top:20px;
        }
        .card {
            margin-bottom: 30px;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: 0;
        }
        .card .card-subtitle {
            font-weight: 300;
            margin-bottom: 10px;
            color: #8898aa;
        }
        .table-product.table-striped tbody tr:nth-of-type(odd) {
            background-color: #f3f8fa!important
        }
        .table-product td{
            border-top: 0px solid #dee2e6 !important;
            color: #728299!important;
        }
    </style>
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    @include('home.slider')
    <!-- end slider section -->
</div>

<!-- about section -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <br>
            <br>
            <h3 class="card-title" style="text-align: center"><strong>{{$velo->velo_name}}</strong></h3>
            <br>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img src="velo/{{$velo->image}}" class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5">Velo description</h4>
                    <p>{{$velo->description}}</p>
                    <h2 class="mt-5">
                        {{$velo->price}}DT<small class="text-success" style="text-decoration: line-through;color: blue">({{$velo->discount_price}}DT)</small>
                    </h2>
                    <form  action="{{url('add_cart', $velo->id)}}" method="Post">
                        @csrf

                        <div class="col-md-4">
                            <input type="number"name="quantity" value="1" min="1" style="width: 100%">
                            <input class="btn btn-primary btn-rounded" type="submit" value="ADD TO CART" >
                        </div>


                    </form>                        <i class="fa fa-shopping-cart"></i>


                    <h3 class="box-title mt-5">Key Highlights</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i>Sturdy structure</li>
                        <li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li>
                        <li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful collectibles</li>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="box-title mt-5">General Info</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-product">
                            <tbody>
                            <tr>
                                <td>Velo Full Name</td>
                                <td>{{$velo->velo_name}}</td>
                            </tr>

                            <tr>
                                <td width="390">Brand</td>
                                <td>{{$velo->brand}}</td>
                            </tr>
                            <tr>
                                <td>Velo Cateogry</td>
                                <td>{{$velo->category}}</td>
                            </tr>
                            <tr>
                                <td>Avaible Quantity</td>
                                <td>{{$velo->quantity}}</td>
                            </tr>
                            <tr>
                                <td>Price before Discount</td>
                                <td>{{$velo->price}}DT</td>
                            </tr>
                            <tr>
                                <td>Price After Discount</td>
                                <td>{{$velo->discount_prie}}DT</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about section -->

<!-- cycle section -->



<!-- end cycle section -->


<!-- cycle section -->



<!-- end cycle section -->


<!-- cycle section -->




<!-- end cycle section -->



<!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container ">
            <h2>
                What is says our clients
            </h2>
        </div>
        <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
                <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="client_container layout_padding2">
                        <div class="client_detail">
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in
                                some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <div class="client_box ">
                            <div class="img-box">
                                <img src="images/client.png " alt="">
                            </div>
                            <div class="name">
                                <h5>
                                    Randomised
                                </h5>
                                <h6>
                    <span>
                      Lorem Ipsum
                    </span>
                                    <img src="images/quote.png" alt="">
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="client_container layout_padding2">
                        <div class="client_detail">
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in
                                some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <div class="client_box ">
                            <div class="img-box">
                                <img src="images/client.png " alt="">
                            </div>
                            <div class="name">
                                <h5>
                                    Randomised
                                </h5>
                                <h6>
                    <span>
                      Lorem Ipsum
                    </span>
                                    <img src="images/quote.png" alt="">
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="client_container layout_padding2">
                        <div class="client_detail">
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look
                            </p>
                        </div>
                        <div class="client_box ">
                            <div class="img-box">
                                <img src="images/client.png " alt="">
                            </div>
                            <div class="name">
                                <h5>
                                    Randomised
                                </h5>
                                <h6>
                    <span>
                      Lorem Ipsum
                    </span>
                                    <img src="images/quote.png" alt="">
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end client section -->

<!-- contact section -->

<section class="contact_section">
    <div class="contact_container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_form layout_padding">
                        <div class="heading_container">
                            <h2>
                                Get in touch
                            </h2>
                        </div>
                        <form action="">
                            <input type="text" placeholder="Full name ">
                            <div class="top_input">
                                <input type="email" placeholder="Email">
                                <input type="text" placeholder="Phone Number">
                            </div>

                            <input type="text" placeholder="Message" class="message_input">
                            <button>
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->

<!-- subscribe section -->

<section class="subscribe_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="subscribe_form ">
                    <div class="heading_container">
                        <h2>
                            subscribe our newsletter
                        </h2>
                    </div>
                    <form action="">
                        <input type="email" placeholder="Enter your email">
                        <button>
                            subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end subscribe section -->



<!-- info section -->
@include('home.footer')
<!-- footer section -->

<script type="text/javascript" src="home/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="home/js/bootstrap.js"></script>
<script>
    $('.carousel').on('slid.bs.carousel', function () {
        $(".indicator-2 li").removeClass("active");
        indicators = $(".carousel-indicators li.active").data("slide-to");
        a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
        console.log(indicators);

    })
</script>

</body>

</html>
