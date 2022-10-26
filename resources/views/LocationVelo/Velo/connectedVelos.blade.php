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
<h1 class="text-center"> Mes velo </h1>
<br>
<div  class="container">
<table class="table">
    <thead>
    <tr>

        <th scope="col">type</th>
        <th scope="col">etat</th>
        <th scope="col">prix</th>
        <th scope="col">start_date</th>
        <th scope="col">end_date</th>
        <th scope="col">action</th>

    </tr>
    </thead>
    <tbody>
    @foreach($velos as $v)
        <tr>
        <td>{{$v->type}}</td>
        <td>{{$v->etat}}</td>
        <td>{{$v->prix}}</td>
            <td>{{$v->start_date}}</td>
            <td>{{$v->end_date}}</td>
            <td><a href="{{route("veloLs.edit",$v->id)}}" class="btn btn-info">update</a>
           <td> <form action="{{route("veloLs.destroy",$v->id)}}" method="post">
                   @method('DELETE')
                   @csrf
                   <button type="submit" class="btn btn-warning"> delete</button>
               </form></td>

        </tr>
    @endforeach
    </tbody>
</table>
</div>
<br>
@include('home.footer')

</body>
