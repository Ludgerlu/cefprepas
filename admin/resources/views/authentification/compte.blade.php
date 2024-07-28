<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> EXAM APP </title>
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/EXAM.png" />
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <!--div>
            <a class="navbar-brand brand-logo" href="index.html">
              <img src="images/logo.svg" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
              <img src="images/logo-mini.svg" alt="logo" />
            </a>
          </div-->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <form class="search-form" method="GET" action="/search_matieres">
                <i class="icon-search"></i>
                <input type="search" name="search" class="form-control" placeholder="Search Here" title="Search here">
              </form>
            </li>

            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="images/{{ session('utilisateur')->image }}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" width="45px" height="45px" src="images/{{ session('utilisateur')->image }}" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">{{session('utilisateur')->nom}}</p>
                  <p class="fw-light text-muted mb-0">{{session('utilisateur')->email}}</p>
                </div>
                <a class="dropdown-item" href="profil"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Mon Profil</a>
                <a class="dropdown-item" href="compte"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Compte Office </a>
                <a class="dropdown-item" href="deconnexion"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Deconnexion</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="accueil">
                  <i class="menu-icon mdi mdi-home"></i>
                  <span class="menu-title"> Accueil </span>
                </a>
              </li>
              <li class="nav-item nav-category"> Pages </li>

              <li class="nav-item">
                  <a class="nav-link" href="matieres">
                    <i class="menu-icon mdi mdi-book"></i>
                    <span class="menu-title"> matieres </span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="paiements">
                    <i class="menu-icon mdi mdi-wallet"></i>
                    <span class="menu-title"> paiements  </span>
                  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <i class="menu-icon mdi mdi-book"></i>
                  <span class="menu-title"> notes </span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add_notes">Ajouter une note </a></li>
                    <li class="nav-item"> <a class="nav-link" href="liste_notes"> liste des resultats </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                    <i class="menu-icon mdi mdi-account"></i>
                    <span class="menu-title"> Gestionnaires </span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="tables">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="gestionnaire_notes"> Gestionnaires de notes </a></li>
                      <li class="nav-item"> <a class="nav-link" href="gestionnaire_matieres"> Gestionnaires de matieres </a></li>
                      <li class="nav-item"> <a class="nav-link" href="gestionnaire_eleves"> Gestionnaires d'élèves </a></li>
                      <li class="nav-item"> <a class="nav-link" href="gestionnaire_inscription"> Gestionnaires d'inscription </a></li>
                    </ul>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                  <i class="menu-icon mdi mdi-card-text-outline"></i>
                  <span class="menu-title"> Candidats </span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"><a class="nav-link" href="candidats"> Ajouter un Candidat </a></li>
                      <li class="nav-item"><a class="nav-link" href="liste_candidats"> Liste des candidats </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="statistiques">
                    <i class="menu-icon mdi mdi-chart-line"></i>
                    <span class="menu-title"> statistiques </span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="centre">
                    <i class="menu-icon mdi mdi-school"></i>
                    <span class="menu-title"> centres </span>
                  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="series">
                  <i class="menu-icon mdi mdi-school"></i>
                  <span class="menu-title"> series </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/liste_resultats">
                  <i class="menu-icon mdi mdi-school"></i>
                  <span class="menu-title"> resultats candidats  </span>
                </a>
            </li>
            </ul>
          </nav>
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
                                        <h4 class="card-title card-title-dash"> Tables Matières  </h4>
                                        <p class="card-subtitle card-subtitle-dash"> Effectuez vos Operations sur les Matières  </p>
                                      </div>
                                      <div>
                                        <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="mdi mdi-plus"></i> Ajouter une nouvelle matière
                                        </button>
                                      </div>
                                    </div>
                                    <div class="table-responsive  mt-1">
                                        <table class="table select-table">
                                            <thead>
                                              <tr>
                                                <th>Num </th>
                                                <th> Nom matiere </th>
                                                <th> coef </th>
                                                <th> Actions </th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($liste as $list)
                                                  <tr>
                                                    <td>
                                                      <h6>{{$list->id}}</h6>
                                                    </td>
                                                    <td>
                                                      <h6>{{$list->nom}}</h6>
                                                    </td>
                                                    <td>
                                                        <h6>{{$list->coef}}</h6>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger" data-id="{{$list->id}}" data-nom="{{$list->nom}}" data-coef="{{$list->coef}}" onclick="openEditModal(this)">Editer</button>
                                                        <button type="button" class="btn btn-warning" data-id="{{$list->id}}" onclick="openDeleteModal(this)">Supprimer</button>
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
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une matière </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/matiere_adding">
                        @csrf
                        <div class="mb-3">
                            <label for="centreName" class="form-label">Nom Office </label>
                            <input type="text" name="nom_entreprise" class="form-control" id="centreName" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="centreName" class="form-label"> telephone  </label>
                            <input type="text" name="fax" class="form-control" id="centreName" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="centreName" class="form-label"> telephone  </label>
                            <input type="text" name="fax" class="form-control" id="centreName" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="centreName" class="form-label"> telephone  </label>
                            <input type="text" name="fax" class="form-control" id="centreName" placeholder="">
                        </div>

                        <div class="mb-3">
                            <input type="text" value="{{session('utilisateur')->id}}" name="id_gestionnaire" class="form-control" id="centreName" placeholder="">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <input type="submit"  class="btn btn-primary" value="Enregistrer" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel"> matiere ajoutée avec succès </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="mdi mdi-check-circle-outline mdi-36px text-success"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleterModal" tabindex="-1" aria-labelledby="deleterModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleterModalLabel"> matiere supprimée avec succès. </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="mdi mdi-check-circle-outline mdi-36px text-success"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editeModal" tabindex="-1" aria-labelledby="editeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editeModalLabel"> matiere modifiée avec succès </h5>
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
              <h5 class="modal-title" id="editModalLabel">Editer une matière</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" id="editForm">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="editNomMatiere" class="form-label">Nom matière</label>
                  <input type="text" name="nom_matiere" class="form-control" id="editNomMatiere">
                </div>
                <div class="mb-3">
                  <label for="editCoefMatiere" class="form-label">Coef matière</label>
                  <input type="text" name="coef_matiere" class="form-control" id="editCoefMatiere">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="edit_id" class="form-control" id="editId">
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                  <input type="submit" class="btn btn-primary" value="Modifier">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Supprimer la matière</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Êtes-vous sûr de vouloir supprimer cette matière ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
              <form method="POST" id="deleteForm">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Oui</button>
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
        function openDeleteModal(button) {
          var id = button.getAttribute('data-id');
          document.getElementById('deleteForm').action = '/matiere_delete/' + id;

          var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
          deleteModal.show();
        }
      </script>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Si le message de succès existe dans la session
        @if(session('succeed'))
            var deleterModal = new bootstrap.Modal(document.getElementById('deleterModal'));
            deleterModal.show();
        @endif
        });
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
                    // Si le message de succès existe dans la session
        @if(session('success'))
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
        @endif
    });
    </script>
    <script>
        function openEditModal(button) {
          var id = button.getAttribute('data-id');
          var nom = button.getAttribute('data-nom');
          var coef = button.getAttribute('data-coef');

          document.getElementById('editModalLabel').textContent = 'Editer une matière';
          document.getElementById('editForm').action = '/matiere_edit/' + id;
          document.getElementById('editNomMatiere').value = nom;
          document.getElementById('editCoefMatiere').value = coef;
          document.getElementById('editId').value = id;

          var editModal = new bootstrap.Modal(document.getElementById('editModal'));
          editModal.show();
        }
    </script>

    </body>
  </html>



