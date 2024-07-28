@include('header')
          <div class="main-panel">
            <div class="content-wrapper home1">
              <div class="row">
                <div class="col-sm-12">
                  <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                      <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                        <div class="row">
                          <div class="col-lg-8 d-flex flex-column">
                            <div class="row flex-grow">
                              <div class="col-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                  <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                      <div>
                                        <h4 class="card-title card-title-dash"> Mon Compte   </h4>
                                        <p class="card-subtitle card-subtitle-dash"> Mes Informations Personnelles </p>
                                      </div>
                                    </div>
                                    <div class="table-responsive  mt-1">
                                        <table class="table select-table">
                                            <thead>
                                                <tr>
                                                    <th>N.inscrip</th>
                                                    <th>profil (nom/email)</th>
                                                    <th>images</th>
                                                    <th>contact</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($infos as $inf)
                                                <tr>
                                                    <td>
                                                        <h6>{{$inf->id}}</h6>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex ">
                                                            <div>
                                                                <h6>{{$inf->nom}}</h6>
                                                                <h6>{{$inf->email}}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <img src="images/{{$inf->image}}" alt="Profile image">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6>{{$inf->contact}}</h6>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger" data-id="{{$inf->id}}" data-nom="{{$inf->nom}}" data-email="{{$inf->email}}" data-contact="{{$inf->contact}}" data-image="{{$inf->image}}" onclick="openEditModal(this)"> Modifier </button>
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
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @include('footer')
          </div>
        </div>
      </div>
    <div class="modal fade" id="editeModal" tabindex="-1" aria-labelledby="editeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editeModalLabel"> profil modifié avec succès </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="mdi mdi-check-circle-outline mdi-36px text-success"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel"> Modifier les informations : </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="editForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="EditNom" class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control" id="EditNom" placeholder="Nom">
                        </div>
                        <div class="mb-3">
                            <label for="EditEmail" class="form-label">Email</label>
                            <input type="email" name="email" id="EditEmail" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="EditContact" class="form-label">Contact</label>
                            <input type="tel" name="contact" id="EditContact" class="form-control" placeholder="Contact">
                        </div>
                        <div>
                            <label for="EditImage" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="EditImage">
                            <img id="EditImagePreview" height="45px" height="45px" width="55px" src="" alt="Image du gestionnaire" class="img-fluid mt-2">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <input type="submit" class="btn btn-primary" value="Modifier" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      <script src="vendors/js/vendor.bundle.base.js"></script>
      <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <script src="vendors/chart.js/chart.umd.js"></script>
      <script src="vendors/progressbar.js/progressbar.min.js"></script>
      <script src="js/off-canvas.js"></script>
      <script src="js/template.js"></script>
      <script src="js/settings.js"></script>
      <script src="js/hoverable-collapse.js"></script>
      <script src="js/todolist.js"></script>
      <script src="js/jquery.cookie.js" type="text/javascript"></script>
      <script src="js/dashboard.js"></script>
     <script>
        function openEditModal(button) {

            var id = button.getAttribute('data-id');
            var nom = button.getAttribute('data-nom');
            var email = button.getAttribute('data-email');
            var contact = button.getAttribute('data-contact');
            var image = button.getAttribute('data-image');

            document.getElementById('editModalLabel').textContent = 'Modifier mon profil ';
            document.getElementById('editForm').action = '/gestionnaire_edit/' + id;
            document.getElementById('EditNom').value = nom;
            document.getElementById('EditEmail').value = email;
            document.getElementById('EditContact').value = contact;
            document.getElementById('EditImagePreview').src = 'images/' + image;

            var editModal = new bootstrap.Modal(document.getElementById('editModal'));
            editModal.show();
        }

     </script>
     <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Si le message de succès existe dans la session
        @if(session('status'))
            var editeModal = new bootstrap.Modal(document.getElementById('editeModal'));
                editeModal.show();
        @endif
        });
     </script>
    </body>
  </html>

