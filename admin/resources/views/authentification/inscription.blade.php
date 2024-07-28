<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> App Examen </title>
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="images/logo.svg" alt="logo">
                </div>
                <h4>Nouveau ici ?</h4>
                <h6 class="fw-light"> inscris-toi en remplissant les cases etape par etape </h6>
                <form class="pt-3" action="/inscription_traitement" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group" >
                    <input type="text" name="nom" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                  </div>
                  @error('nom')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group" >
                    <input type="text" name="contact" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="numero telephone">
                  </div>
                  @error('contact')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  </div>
                   @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <input type="file" name="image" class="form-control form-control-lg" id="exampleInputPassword1" alt="image">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="type" value="admin" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="type">
                  </div>
                  <div class="mt-3 d-grid gap-2">
                    <input type="submit" name="save" value="s'inscrire" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn" >
                  </div>
                  <div class="text-center mt-4 fw-light"> deja inscrit(e)? <a href="connexion" class="text-primary">connectez-vous</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/todolist.js"></script>
  </body>
</html>
