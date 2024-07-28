
<!DOCTYPE html>
<html lang="fr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/img/ico/logo.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/dragula.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
</head>
<body data-col="2-columns" class=" 2-columns">
    
<div class="container text-center wrapper clearfix">
    @include('share.sidebar')

    
    <div class="row">
        <div class="col-lg-12">
        <h1> Add TEMOIN</h1>

        @if (session('status'))
            <div id="stats" class="alert alert-sucess">
                {{session('status')}}   
            </div>
        @endif
        <script>
            setTimeout(function() {
                document.getElementById('stats').fadeOut();
            }, 300);
        </script>
        <ul>
            @foreach ($errors->all() as $error )
                <li class="alert alert-danger">
                    {{$error}};
                </li>
            @endforeach 
        </ul>
        
        <form id="form_partenaire" action="/partenaire/update/action" method="POST" enctype="multipart/form-data">	
        @csrf
            <input type="hidden" name="partner_id" id="partner_id" value="{{$partenaire->id}}">
			<div class="row">
				<div class="col-sm-12 col-xs-12 col-md-7 ">		
					<div class="row">
						<div class="col-sm-6 col-xs-12 col-md-6">		
							<div class="form-group">
								<label for="nom_partenaire"><font> Nom:</font>
								<span class="form-required" style="color:#E10430" title="Ce champ est requis.">*</span></label>									
								<input type="text" placeholder="Entrez un nom" class="form-control" name="nom_partenaire" id="nom_partenaire" value="{{$partenaire->TITLE}}"/>
								<span id="msg_nom_partenaire"></span>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 col-md-6">		
							<div class="form-group">
								<label for="lien_partenaire"><font> Lien:</font>
								<span class="form-required" style="color:#E10430" title="Ce champ est requis.">*</span></label>									
								<input type="text" placeholder="Entrez une fonction" class="form-control" name="lien_partenaire" id="lien_partenaire" value="{{$partenaire->LINK}}"/>
								<span id="msg_lien_partenaire"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-5">	
					<div style="margin-top:25px;">
						<div class="form-group">
							<label for="photo_utilisateur">Photo [Preference: 628x628 px ] :<span class="form-required" style="color:#E10430" title="Ce champ est requis.">*</span></label>
							<input type="file" accept="image/*" name="photo_utilisateur" id="photo_utilisateur" onchange="Apercu_image_utilisateur_js();" class="btn btn-primary btn-file"/>
							<span id="msg_photo_utilisateur"></span>
						</div>
						<div class="form-group">
							<img  src="{{ asset('images_partner/' . $partenaire->CHEMIN_IMAGE)}}" class="img-thumbnail" id="apercu_photo_utilisateur"  width="300" height="300"/>
						</div>
					</div>
				</div>
			</div>
			<div class=" col-xs-12 col-sm-12 col-md-12 " style="margin-top:55px;" align = "center">
				<strong><input id="input_control" name="input_control" value="ENREGISTRER" type="submit" class="btn btn-success"/></strong>
				<strong><input id="empty_input" name="empty_input" onclick="reinitialiser_formulaire_js();" value="ANNULER" type="reset" class="btn btn-danger"/></strong>
			</div>		
        </div>
    </div>
</div>

<script src="{{asset('assets/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/prism.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>
   
    <script src="{{asset('assets/vendors/js/dragula.min.j')}}s" type="text/javascript"></script>
    <script src="{{asset('assets/js/app-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/notification-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/customizer.js')}}" type="text/javascript"></script>

    <script>
        			
function Apercu_image_utilisateur_js() {
	
	var oFReader = new FileReader();

	if(document.getElementById("photo_utilisateur").value ==""){
		document.getElementById("apercu_photo_utilisateur").src = "assets/img/aucun.jpg";
		return;
	}

	oFReader.readAsDataURL(document.getElementById("photo_utilisateur").files[0]);

	oFReader.onload = function(oFREvent) {
	  document.getElementById("apercu_photo_utilisateur").src = oFREvent.target.result;	  
	}
}

    </script>
</body>
</html>