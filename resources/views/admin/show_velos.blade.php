<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
    <style type="text/css">
        .center{
            margin: auto;
            width: 50px;
            height: 20px;
            text-align: center;
            padding: 30px;
        }
        table,th,td
        {

            border: 1px solid grey;
        }
        .th_deg{
            font-size: 30px;
            padding: 5px;
            background: skyblue;
        }
        .img_deg
        {
            height: 200px;
            width: 200px;
        }
        .total_deg{
            font-size: 20px;
            padding: 40px;
            text-align: center;
        }

    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">x</button>
                        {{session()->get('message')}}

                    </div>
                @endif
                <div class="col-lg-12 grid-margin stretch-card" >
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Velos table</h4>
                            <table class="center">
                                <tr>
                                    <th class="th_deg">Image</th>
                                    <th class="th_deg">Nom de Velo</th>
                                    <th class="th_deg">Marque</th>
                                    <th class="th_deg">Description</th>
                                    <th class="th_deg">Categorie</th>
                                    <th> Quantité </th>
                                    <th> Prix </th>
                                    <th> Discount Price </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>


                                @foreach($velos as $velo)
                                    <tr>
                                        <td>
                                        <img class="img_size" src="/velo/{{$velo->image}}">
                                        </td>
                                        <td>  {{$velo->velo_name}} </td>
                                        <td> {{$velo->brand}} </td>
                                        <td> {{$velo->description}} </td>
                                        <td> {{$velo->category}} </td>
                                        <td> {{$velo->quantity}} </td>
                                        <td> {{$velo->price}} </td>
                                        <td> {{$velo->discount_price}} </td>

                                        <td> <a href="{{url('update_velo',$velo->id)}}"><div class="btn btn-success" >  <i class="icon-note" ></i> Edit</div></a> </td>
                                        <td ><a href="{{url('delete_velo',$velo->id)}}"><div class="btn btn-danger" onclick=" return confirm('Are u sure to delete this Velo')"> <i class="icon-trash" ></i> Delete</div></a></td>

                                    </tr>

                                @endforeach

                            </table>

                            <table class="table table-dark" >
                                <thead>
                                <tr>
                                    <th> Image </th>
                                    <th> Nom de Velo </th>
                                    <th> Marque </th>
                                    <th> Description </th>
                                    <th> Categorie </th>
                                    <th> Quantité </th>
                                    <th> Prix </th>
                                    <th> Discount Price </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($velos as $velo)
                                <tr>
                                    <td>

                                        <img class="img_size" src="/velo/{{$velo->image}}">
                                    </td>
                                    <td>  {{$velo->velo_name}} </td>
                                    <td> {{$velo->brand}} </td>
                                    <td> {{$velo->description}} </td>
                                    <td> {{$velo->category}} </td>
                                    <td> {{$velo->quantity}} </td>
                                    <td> {{$velo->price}} </td>
                                    <td> {{$velo->discount_price}} </td>

                                    <td> <a href="{{url('update_velo',$velo->id)}}"><div class="btn btn-success" >  <i class="icon-note" ></i> Edit</div></a> </td>
                                    <td ><a href="{{url('delete_velo',$velo->id)}}"><div class="btn btn-danger" onclick=" return confirm('Are u sure to delete this Velo')"> <i class="icon-trash" ></i> Delete</div></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.javascript')
<!-- End custom js for this page -->
</body>
</html>
