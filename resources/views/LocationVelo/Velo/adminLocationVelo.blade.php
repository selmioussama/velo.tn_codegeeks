
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
                <h4 class="card-title">All Velo </h4>


                </p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> Id </th>
                        <th> type</th>
                        <th> etat </th>
                        <th> address </th>
                        <th> prix </th>
                        <th> start_date</th>
                        <th>end_date</th>
                        <th> Delete </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($velos as $v)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->type }}</td>
                            <td>{{ $v->etat }}</td>
                            <td>{{ $v->addresse }}</td>
                            <td>{{ $v->prix }}</td>
                            <td>{{ $v->start_date }}</td>
                            <td>{{ $v->end_date }}</td>

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
