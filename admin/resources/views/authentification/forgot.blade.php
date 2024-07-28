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
    <link rel="shortcut icon" href="images/EXAM.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <h4> modifiez votre mot de passe  </h4>
                <h6 class="fw-light"> veuillez entrer un nouveau mot de passe pour faciliter la mise a jour  </h6>
                <form class="pt-3" action="/update_users" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg"  placeholder="email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                  </div>
                  <div class="mt-3 d-grid gap-2">
                    <input type="submit" name="save" value="changer votre mot de passe " class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn" >
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/template.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/todolist.js"></script>
  </body>
</html>

