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
        .div_center{
            text-align: center;
            padding-top: 1%;
        }
        .name{

            text-align: left;
            float: left;
        }
        .h2_font{
            font-size: 200%;
            padding-bottom: 5%;
        }
        .font{
            font-size: 200%;
            padding-bottom: 5%;
        }
        #tab{
            font-size: 200%;
            padding-bottom: 40%;
        }
        #example {
            color: black;
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
                <div class="div_center">
                    <h2 class="h2_font">ADD VELO</h2>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ajout</h4>
                                <p class="card-description"> Form </p>
                                <form class="forms-sample" action="{{url('/add_velo')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="velo_name" class="name">Velo name :</label>
                                        <input type="text" class="form-control" id="velo_name" name="velo_name" placeholder="velo Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="brand" class="name">Brand :</label>
                                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="name">Description :</label>
                                        <textarea rows="2" class="form-control" id="description" name="description" placeholder="description" required=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="category" class="name">Category :</label>
                                        <select class="form-control" id="category"  name="category" required="">
                                            <option value="" selected>Choose Category</option>
                                            @foreach($data as $data)
                                            <option value="{{$data->category_name}}">{{$data->category_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group" >
                                        <label for="image" class="name" >Upload Image here : </label>
                                        <input type="file" id="image" name="image" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="name">Quantity :</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="name">Price :</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Price" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="discount_price" class="name">Price Discount (optional) :</label>
                                        <input type="number" class="form-control" id="discount_price" name="discount_price" placeholder="Discount price (optional)">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
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
