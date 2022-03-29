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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
  </head>




  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
     @include('admin.navbar')
      <!-- partial -->

     
      <section class="row" style="max-width: 70%">
        <div class="col-lg-12 mt-5 ms-5 fw-wrap " >
          <h3>Ajouter une entreprise</h3>
          <form action="{{url('/updateEntreprise')}}" method="POST">
              @csrf
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control mt-3" placeholder="Nom entreprise" name="nameEntreprise">
                </div>
                <div class="col">
                  <input type="text" class="form-control mt-3" placeholder="localite entreprise" name="localite">
                </div>
                <div class="col">
                  <input type="text" class="form-control mt-3" placeholder="ninea entreprise" name="ninea">
                </div>
                <div class="col">
                  <input type="text" class="form-control mt-3" placeholder="registre entreprise" name="registre">
                </div>

                <button type="submit" class="btn btn-primary mt-5">Ajouter</button>
              </div>
          </form>
        </div>

        <div class="container-fluid col-lg-12 mt-5 ms-5 ">
         
          <table class="table table-striped text-light " style="background-color: rgb(85, 85, 88)">
            <thead  style="background-color: rgb(0, 0, 163)">
              <tr>
                <th scope="col">Entreprise</th>
                <th scope="col">localite</th>
                <th scope="col">details</th>
                <th scope="col">Suppression</th>
                <th scope="col">Modification</th>
              
              </tr>
            </thead>

            @foreach ($data as $data)
            <tbody >
              <tr>
                {{-- <th scope="row">1</th> --}}
                <td class="text-light">{{$data->nameEntreprise}}</td>
                <td class="text-light">{{$data->localite}}</td>
                <td><a class="text-primary" href="">Voir plus</a></td>
                <td><a class="text-danger" href="{{url('/deleteEntreprise',$data->id)}}">Supprimer</a></td>
                <td><a class="text-light" href="" id="updating">Modifier</a></td>
                <form action="{{url('/updateEntreprise')}}" method="POST">
                  @csrf
                  <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control mt-3" placeholder="Nom entreprise" name="nameEntreprise">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control mt-3" placeholder="localite entreprise" name="localite">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control mt-3" placeholder="ninea entreprise" name="ninea">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control mt-3" placeholder="registre entreprise" name="registre">
                    </div>
    
                    <button type="submit" class="btn btn-primary mt-5">Ajouter</button>
                  </div>
              </form>
              </tr>
            </tbody>
            @endforeach

          </table>
          </div>

          {{-- <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><span class="text-danger text-center" > Entreprise :{{$data->nameEntreprise}}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div> --}}
         
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