@extends('layouts.footer')
@section('content')
@extends('layouts.app')

@section('content')
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome
                  <?php
                  $user = Auth::User();
                  print_r($user->name);
                  ?>
                </div>

                <div class="panel-body">
                    You are logged in!

                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
</body>
</html>
@endsection
