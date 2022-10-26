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
</head>
<body>
@include('home.header')
<br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">

        <div class="card-body">
            <h4 class="card-title text-center">Post a reclamation </h4>
            <form class="forms-sample" action="{{route("reclamations.store")}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title" id="exampleInputUsername2" placeholder="title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">description</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="description" id="exampleInputEmail2" placeholder="description">
                    </div>
                </div>

                <button  class="btn btn-info"> send</button>
            </form>
        </div>
    </div>
</div>


<br>
@include('home.footer')

</body>
