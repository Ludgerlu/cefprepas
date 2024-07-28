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
<body>
    
<div class="container text-center">
@include('share.sidebar')
    <div class="row">
        <div class="col-lg-12">
            <h1>filiere</h1>
            <hr>
            <a href="/filiere/add" class="btn btn-primary"> Add filiere</a>
            <hr>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Objectif</th>
                    <th>Description</th>
                    <th>Nombre de REUSSITE</th>
                    <th>Horaire</th>
                    <th>Date_debut</th>
                    <th>Creation_date</th>
                    <th>Action</th>

                </thead>
                <tbody>
                    @php
                    $i=1
                    @endphp
                    @foreach ($filieres as $filiere )
                    <tr>
                        <td>{{$i}}</td>
                        <td><img src="{{asset('images_filiere/' . $filiere->CHEMIN_IMAGE) }}" alt="{{ $filiere->TITRE }}" style="height: 100px;width: 100px;"></td>
                        <td>{{$filiere->TITLE}}</td>
                        <td>{{$filiere->OBJECTIF}}</td>
                        <td>{{$filiere->DESCRIPTION}}</td>
                        <td>{{$filiere->REUSSITE}}</td>
                        <td>{{$filiere->HORAIRE}}</td>
                        <td>{{$filiere->RENTREE}}</td>
                        <td>{{$filiere->created_at}}</td>
                        

                        
                        <td>
                            <a href="/filiere/update/{{{$filiere->id}}}" class="btn btn-info">Update</a>
                            <a href="/filiere/delete/{{{$filiere->id}}}" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                    @php
                    $i++
                    @endphp
                    @endforeach
                   
                    
                </tbody>
            </table>
            {{ $filieres->links() }}
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
    function getLocation() {
        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
        console.log("Geolocation is not supported by this browser.");
        }
    }

  function showPosition(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    console.log("Latitude: " + latitude);
    console.log("Longitude: " + longitude);
  }
</script>
</body>
</html>