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
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
                <table border="1">
                <thead>
                <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>place</th>
                <th>Start date</th>
                <th>End Date</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listEvents as $listEvents)
                <tr>
                <td>{{ $listEvents->id }}</td>
                <td>{{ $listEvents->title }}</td>
                <td>{{ $listEvents->description }}</td>
                <td>{{ $listEvents->place }}</td>
                <td>{{ $listEvents->start_date }}</td>
                <td>{{ $listEvents->end_date }}</td>
                <td>{{ $listEvents->created_at }}</td>
                <td>
                <form action="{{ route('event.delete', [$listEvents->id]) }}" method="get">
                       <button type="submit" class="btn btn-link">Supprimer</button>
                </form>
                <form action="{{ route('event.edit', [$listEvents->id]) }}" method="get">
                       <button type="submit" class="btn btn-link">Edite</button>
                </form>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
        <!-- partial -->
        @include('admin.body')
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


