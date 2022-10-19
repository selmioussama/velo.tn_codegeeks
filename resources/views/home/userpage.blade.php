<!DOCTYPE html>
<html>

<head>
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
@include('home.about')
<!-- end about section -->

<!-- cycle section -->

@include('home.topsales')

<!-- end cycle section -->


<!-- cycle section -->

@include('home.velos')

<!-- end cycle section -->


<!-- cycle section -->

@include('home.newvelos')


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
