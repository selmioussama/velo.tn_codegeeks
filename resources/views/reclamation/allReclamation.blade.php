
<!DOCTYPE html>
<html lang="en">
<head>
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
                    <h4 class="card-title">All reclamations </h4>


                    </p>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> Id </th>
                            <th> title</th>
                            <th> description </th>
                            <th> more info </th>
                            <th> Delete </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reclamation as $r)
                            <tr>
                                <td>{{ $r->id }}</td>
                                <td>{{ $r->title }}</td>
                                <td>{{ $r->description }}</td>

                               <td>
                                    <a class="btn btn-info" href="{{route("reclamations.show",$r->id)}}">
                                       View info
                                    </a>
                               </td>                                <td> <form action="{{route("reclamations.destroy",$r->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"> delete</button>
                                    </form></td>
                            </tr>
                        @endforeach
                        </tbody>
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
