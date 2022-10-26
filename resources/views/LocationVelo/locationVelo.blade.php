<html>

<head>
    <!-- Basic -->
    <base href="/public">

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
@include('home.header')

<br>
<section class="cycle_section ">
    <div class="container">
        <div class="cycle_heading">
            <h2>
                All velo for location
            </h2>
        </div>
        <div>
        <div class="cycle_container">
            @foreach($velos as $v)

                <div class="box">
                    <div class="box-content">
                        <div class="img-box">
                            <img src="/velos/{{$v->image}}" width="150px">
                        </div>
                        <div class="detail-box">
                            <div class="text">
                                <h6>
                                    {{$v->type}}
                                </h6>
                                <h5>
                                    {{$v->prix}} <span> $</span>
                                </h5>
                            </div>
                            <div class="like">
                                <h6>
                                     {{$v->addresse}}
                                </h6>
                                <h6>{{$v->etat}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href="{{route("veloLs.show",$v->id)}}">
                            More info
                        </a>
                    </div>
                </div>
    @endforeach

</section>
@if (Route::has('login'))

    @auth
        <div class="cycle_heading">
        </div>
        <h2>
            <a href="http://127.0.0.1:8000/veloLs/create" class="btn btn-success" > Add a velo </a>
        </h2>
        </div>
        <br>

    @endauth
@endif

@include('home.footer')

</body>
