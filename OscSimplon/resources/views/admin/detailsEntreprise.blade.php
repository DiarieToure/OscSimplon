<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="app/public/admin.css">
    <!-- Plugin css for this page -->
    @include('admin.admincss')
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
  </head>




  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
     @include('admin.navbar')
      <!-- partial -->
      <section class="row" style="max-width: 70%">
        <div class="col-lg-12 mt-5 ms-5 fw-wrap " >
            <div class="card" style="width: 18rem; height:10rem">
                <div class="card-header">
                  {{$data->nameEntreprise}}
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">localite : {{$data->localite}}</li>
                  <li class="list-group-item">Ninea : {{$data->ninea}}</li>
                  <li class="list-group-item">Registre : {{$data->registre}}</li>
                </ul>
            </div>
        </div>

    
         
        </div>

      </section>
    
      <!-- page-body-wrapper ends -->
   

    </div>


    





    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
  @include('admin.adminjs')
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    {{-- Jquery --}}

   

  </body>
</html>

