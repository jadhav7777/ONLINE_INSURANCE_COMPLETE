<html>
    <head> </head>
    <title> </title>
    <body>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

            <div class="container">

                <div class="row">

                        <div class="col-md-12">

                            <div class="card">

                                <div class="card-header">
                                    <h3>Edit Role for Registered User.</h3>
                                </div>

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6">


                                    <form action="{{url('/subrole-register-update')}}/{{ $users->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                    <div class="form-group">
                                                  <label>Name</label>
                                        <input type="text" value="{{ $users->name }}" name="username" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Give Role</label>
                                            <select name="usertype" class="form-control" >
                                                <option value="admin">Admin</option>
                                                <option value="subadmin">SubAdmin</option>
                                                    <option value="user">User</option>
                                                                 </select>
                                    </div>
                                        <button type="submit" class="btn btn-success">Update</button>
                                            <a href="{{url('/subrole-register')}}" class="btn btn-danger">Cancel</a>
                                    </form>



                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                </div>

            </div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


     </body>
</html>
