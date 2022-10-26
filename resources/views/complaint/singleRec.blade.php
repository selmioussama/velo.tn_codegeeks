
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
</head>
<body>
<div class="container-scroller">


    <!-- partial:partials/_navbar.html -->
    @include('admin.header')
    <div class="container-fluid page-body-wrapper">

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> complaint </h4>


                    </p>
                    <table class="table table-bordered">
                        <tr>
                            <th> title</th>
                            <td>{{ $rec->title }}</td>

                        </tr>

                            <tr>
                                <th> description </th>
                                <td>{{ $rec->description }}</td>
                            </tr>
                        <tr>
                            <th> user name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th> user email</th>
                            <td>{{ $user->email }}</td>


                        </tr>
                        <tr>
                            <th> velo type</th>
                            <td>{{ $velo->type }}</td>


                        </tr>
                        <tr>
                            <th> velo image</th>
                            <td >  <img src="/velos/{{$velo->image}}" style="width: 150px !important; height: 150px !important; border-radius: 0px !important;" </td>



                        </tr>

                    </table>
                </div>
            </div>
        </div>

        <!-- main-panel ends -->
    </div>
</div>
<!-- page-body-wrapper ends -->

<!-- plugins:js -->
@include('admin.javascript')
<!-- End custom js for this page -->
</body>
</html>
