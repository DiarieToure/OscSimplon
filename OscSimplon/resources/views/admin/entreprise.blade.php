<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    @include('admin.admincss')
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>




  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
     @include('admin.navbar')
      <!-- partial -->
        <div class="col-lg-6 mt-5 ms-5" >
            <h2>Ajouter une entreprise</h2>
            <form>
                <div class="form-row">
                  <div class="col">
                    <input type="text" class="form-control mt-3" placeholder="Nom entreprise">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control mt-3" placeholder="localite entreprise">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control mt-3" placeholder="ninea entreprise">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control mt-3" placeholder="registre entreprise">
                  </div>

                  <button type="submit" class="btn btn-primary mt-5">Ajouter</button>
                </div>
              </form>
        </div>
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
  </body>
</html>