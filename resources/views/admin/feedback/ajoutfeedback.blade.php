
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
     <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
     <script src="{{URL::asset('js/main.js')}}"></script>
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

        <div class="col-9 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <p class="card-description"> Add feedback </p>
                            <form class="forms-sample" action="{{ route('feedback.store') }}" method="get">

                              <div class="form-group">
                                <label for="exampleInputEmail3">Feedback</label>
                                <input required="" required="" type="text" class="form-control" id="description" name="description" placeholder="feedback">
                             </div>
                                   <div class="form-group">
                                                      <label for="exampleSelectGender">ID Event</label>
                                                      <select class="form-control" id="exampleSelectGender" name="event_id">
                                                      @foreach($listEvents as $event)
                                                        <option>{{ $event->id }}</option>
                                                       @endforeach
                                                      </select>
                                                    </div>
                              <button type="submit"  class="btn btn-primary mr-2">Submit</button>
                            </form>

                                                                          <div class="card">

                                                                              <table class="table table-bordered">
                                                                                <thead>
                                                                                  <tr>
                                                                                    <th> EVENT_ID </th>
                                                                                    <th> Feedbacks</th>
                                                                                    <th> Created at </th>
                                                                                    <th> Edit </th>
                                                                                    <th> Delete </th>
                                                                                  </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                 @foreach($listFeedbacks as $feedback)
                                                                                         <tr>
                                                                                         <td>{{ $feedback->event_id }}</td>
                                                                                         <td>{{ $feedback->description }}</td>
                                                                                         <td>{{ $event->created_at }}</td>

                                                                                         <td>
                                                                                          <form action="{{ route('feedback.edit', [$feedback->id]) }}" method="get">
                                                                                            <button type="submit" class="btn btn-warning ">Edit</button>
                                                                                           </form>
                                                                                          </td>
                                                                                          <td>
                                                                                             <form action="{{ route('feedback.delete', [$feedback->id]) }}" method="get">
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



