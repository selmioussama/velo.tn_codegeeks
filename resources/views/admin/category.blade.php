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
                    <h2 class="h2_font">ADD CATEGORY</h2>
                    <form class="font" action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <input type="text" name="category" placeholder="Write category name">
                        <input type="submit" class="btn btn-primary " id="example"  name="submit" value="Add Category">
                    </form>
                </div>

                    <div class="col-lg-12 grid-margin stretch-card" style="padding-bottom:4% ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Categories List</h4>
                                <table class="table table-striped">
                                    <thead>

                                    <tr>
                                        <th>Category Name  </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $data)
                                    <tr>

                                        <td> {{$data->category_name}} </td>
                                        <td> <a onclick="return confirm('Are u sure to delete this category!')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}"> Delete</a> </td>
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
