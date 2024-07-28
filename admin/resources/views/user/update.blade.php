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
    <div class="row">
        <div class="col-lg-12">
        <h1> Add USER</h1>

         @if (session('status'))
            <div class="alert alert-sucess">
                {{session('status')}}   
            </div>
        @endif
        <!--<ul>
            @foreach ($errors->all() as $error )
                <li class="alert alert-danger">
                    {{$error}};
                </li>
            @endforeach 
        </ul>
         -->
        <form action="/update/action" method="post" >
        @csrf

            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="mb-3">
                <label for="Name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" Name="name" value="{{$user->NAME}}">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" class="form-control" Name="age" id="age" value="{{$user->AGE}}">
            </div>
            <div class="mb-3">
                <label for="Surname" class="form-label">Surmame:</label>
                <input type="text" class="form-control" id="surname" Name="surname" value="{{$user->SURNAME}}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Number:</label>
                <input type="number" class="form-control" Name="number" id="number" value="{{$user->NUMBER}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="/users" class="btn btn-danger m-5">Liste Users</a>
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
</body>
</html>