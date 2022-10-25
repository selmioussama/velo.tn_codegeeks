<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
    <style type="text/css">
        .img_size
        {
            width: 200px;
            height: 200px;
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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Velos table</h4>

                            <table class="table table-dark">
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
                                    <td ><div class="btn btn-danger" style="width: 50%"> <i class="icon-trash" ></i> Delete</div></td>
                                    <td> {{$velo->discount_price}} </td>
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
