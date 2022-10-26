

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


    <!--    <form action="{{ route('event.store') }}" method="get">
        <table>
        <tr>
        <td><label>Title:</label></td>
        <td><input type="text" name="title" placeholder="title" ></td>
        </tr>
        <tr>
        <td><label>Description:</label></td>
        <td><input type="text" name="description" id="description" placeholder="description" ></td>
        </tr>
        <tr>
        <td><label>Place:</label></td>
        <td><input type="text" name="place" id="place" placeholder="place" ></td>
        </tr>
        <td><label>Start date:</label></td>
        <td><input type="text" name="start_date" id="start_date" placeholder="startdate" ></td>
        </tr>
        <td><label>End date:</label></td>
        <td><input type="text" name="end_date" id="end_date" placeholder="end date" ></td>
        </tr>
        <tr>
        <td clospan="2"><button type="submit" class="btn btn-secondary">Ajouter</button></td>
        </tr>
        </table>
        </form> -->

        <div class="col-9 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <p class="card-description"> Add event </p>
                            <form class="forms-sample" action="{{ route('event.store') }}" method="get">
                              <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="title" required="" >
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail3">Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="description" required="">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword4">Place</label>
                                <input type="text" class="form-control" name="place" id="place" placeholder="place" required="">
                              </div>


                              <div class="form-group">
                                <label for="exampleInputCity1">Start Date</label>
                                <input type="date" class="form-control" name="start_date" id="start_date" placeholder="startdate" required="">
                              </div>
                               <div class="form-group">
                               <label for="exampleInputCity1">Start Date</label>
                               <input type="date" class="form-control" name="end_date" id="end_date" placeholder="end date" required="">
                                </div>
                              <button type="submit"  class="btn btn-primary mr-2">Submit</button>
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

