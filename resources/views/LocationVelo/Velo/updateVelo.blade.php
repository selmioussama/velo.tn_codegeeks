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
            <h4 class="card-title text-center">update your Velo </h4>
            <form class="forms-sample" action="{{route("veloLs.update",$velo->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <img src="/velos/{{$velo->image}}" width="150px">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">type</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="type" id="exampleInputUsername2" value="{{$velo->type}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Etat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="etat" id="exampleInputEmail2" value="{{$velo->etat}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">prix</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="prix" id="exampleInputEmail2" value="{{$velo->prix}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">adresse</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="addresse" id="exampleInputEmail2"value="{{$velo->addresse}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Date debut</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="Date_debut"  id="exampleInputMobile" value="{{$velo->start_date}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Date fin</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control"  name="Date_fin" id="exampleInputMobile" value="{{$velo->end_date}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Date fin</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  name="Description" id="exampleInputMobile" value="{{$velo->description}}">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
<br>
@include('home.footer')

</body>
