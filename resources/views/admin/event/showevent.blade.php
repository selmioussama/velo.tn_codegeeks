
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

        <!-- partial -->
   <!--     <table border="1">
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
       @foreach($listEvents as $event)
                                              <tr>
                                              <td>{{ $event->id }}</td>
                                              <td>{{ $event->title }}</td>
                                              <td>{{ $event->description }}</td>
                                              <td>{{ $event->place }}</td>
                                              <td>{{ $event->start_date }}</td>
                                              <td>{{ $event->end_date }}</td>
                                              <td>{{ $event->created_at }}</td>
                                              <td>
                                              <form action="{{ route('event.delete', [$event->id]) }}" method="get">
                                                     <button type="submit" class="btn btn-link">Supprimer</button>
                                              </form>
                                              <form action="{{ route('event.edit', [$event->id]) }}" method="get">
                                                     <button type="submit" class="btn btn-link">Edite</button>
                                              </form>
                                              </td>
                                              </tr>
                                      @endforeach
        </tbody>
        </table> -->

        <div class="col-lg-10 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Add event</h4>
                              <form action="{{ route('event.create') }}" method="get">
                              <button type="submit" class="btn btn-success btn-fw">Add event</button>
                             </form>

                            </p>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th> Id </th>
                                  <th> Title</th>
                                  <th> Description </th>
                                  <th> Place </th>
                                  <th> Created at </th>
                                  <th> Start Date </th>
                                  <th> End Date </th>
                                  <th> Add Feedback</th>
                                  <th> Edit </th>
                                  <th> Delete </th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($listEvents as $event)
                                       <tr>
                                       <td>{{ $event->id }}</td>
                                       <td>{{ $event->title }}</td>
                                       <td>{{ $event->description }}</td>
                                       <td>{{ $event->place }}</td>
                                       <td>{{ $event->created_at }}</td>
                                       <td>{{ $event->start_date }}</td>
                                       <td>{{ $event->end_date }}</td>
                                        <td>
                                         <form action="{{ route('feedback.create') }}" method="get">
                                         <button type="submit" class="btn btn-info btn-fw">Add Feedback</button>
                                        </form>
                                        </td>

                                       <td>
                                        <form action="{{ route('event.edit', [$event->id]) }}" method="get">
                                          <button type="submit" class="btn btn-warning ">Edit</button>
                                         </form>
                                        </td>
                                        <td>
                                           <form action="{{ route('event.delete', [$event->id]) }}" method="get">
                                         <button type="submit" class="btn btn-danger ">Delete</button>
                                         </form>
                                      </td>
                                       </tr>
                               @endforeach
                              </tbody>
                            </table>
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
