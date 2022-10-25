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
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

        <!-- partial -->


                          <div class="col-9 grid-margin stretch-card">
                          <div class="card">
                           <div class="card-body">
                           <p class="card-description"> Edit feedback: </p>
                                <form class="forms-sample" action="{{ route('event.update' , $event->id) }}" method="get">
                                   <div class="form-group">
                                    <label for="exampleInputEmail3">Title</label>
                                   <input type="text" class="form-control" name="title" id="title" placeholder="place" value="{{ $event->title}}" >
                                     </div>
                                  <div class="form-group">
                                 <label for="exampleInputEmail3">Place</label>
                                 <input type="text" class="form-control" name="place" id="description" placeholder="place" value="{{ $event->place}}" >
                                 </div>

                                 <div class="form-group">
                                 <label for="exampleInputEmail3">Description</label>
                                 <input type="text" class="form-control" name="description" id="description" placeholder="description" value="{{ $event->description}}" >
                                 </div>
                                 <div class="form-group">
                                 <label for="exampleInputEmail3">Start date</label>
                                  <input type="date" class="form-control" name="start_date" id="start_date" placeholder="end date" value="{{ $event->start_date}}" >
                                  </div>
                                 <div class="form-group">
                                 <label for="exampleInputEmail3">End date</label>
                                  <input type="date" class="form-control" name="end_date" id="end_date" placeholder="end date" value="{{ $event->end_date}}" >
                                 </div>



                                <button type="submit"  class="btn btn-primary mr-2">update</button>
                           </form>
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


