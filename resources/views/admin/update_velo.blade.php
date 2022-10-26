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
                    <h2 class="h2_font">EDIT VELO</h2>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update</h4>
                                <p class="card-description"> Form </p>
                                <form class="forms-sample" action="{{url('/update_velo_confirm', $velo->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="velo_name" class="name">Velo name :</label>
                                        <input type="text" class="form-control" id="velo_name" name="velo_name" placeholder="velo Name" required="" value="{{$velo->velo_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="brand" class="name">Brand :</label>
                                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand" required="" value="{{$velo->brand}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="name">Description :</label>
                                        <input rows="2" class="form-control" id="description" name="description" placeholder="description" required="" value="{{$velo->description}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category" class="name">Category :</label>
                                        <select class="form-control" id="category"  name="category" required="" >
                                            <option value="{{$velo->category}}" selected>v{{$velo->category}}</option>
                                            @foreach($category as $category)
                                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label for="image" class="name" >Current Image : </label>
                                        <img style="margin: auto" height="100" width="100" src="/velo/{{$velo->image}}">
                                    </div>

                                    <div class="form-group" >
                                        <label for="image" class="name" >Change Image here : </label>
                                        <input type="file" id="image" name="image" >
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="name">Quantity :</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required="" value="{{$velo->quantity}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="name">Price :</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Price" required="" value="{{$velo->price}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="discount_price" class="name">Price Discount (optional) :</label>
                                        <input type="number" class="form-control" id="discount_price" name="discount_price" placeholder="Discount price (optional)" value="{{$velo->discount_price}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Update</button>
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
