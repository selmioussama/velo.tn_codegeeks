
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
            <form class="forms-sample" action="{{ route('feedback.update' , $feedback->id) }}" method="get">
            <div class="form-group">
            <label for="exampleInputEmail3">Feedback</label>
            <input required="" type="text" class="form-control" name="description" placeholder="description" value="{{ $feedback->description}}">
            </div>

             <button type="submit"  class="btn btn-primary mr-2">Update</button>
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


