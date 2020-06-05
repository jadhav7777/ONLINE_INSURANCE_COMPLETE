@extends('layouts.footer')
@section('content')
@extends('layouts.app')

@section('content')
<style>
p.pd {
  padding-top: 6px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name:</label>
                              <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Dob:</label>
                              <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob"value="{{ old('dob') }}">
                                   @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address:</label>
                               <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobno') ? ' has-error' : '' }}">
                            <label for="mobno" class="col-md-4 control-label">Mobile No.:</label>
                              <div class="col-md-6">
                                <input id="mobno" type="numeric" class="form-control" name="mobno" value="{{ old('mobno') }}">
                                   @if ($errors->has('mobno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('aadharno') ? ' has-error' : '' }}">
                            <label for="aadharno" class="col-md-4 control-label">Aadhar No.:</label>
                              <div class="col-md-6">
                                <input id="aadharno" type="text" class="form-control" name="aadharno" value="{{ old('aadharno') }}">
                                   @if ($errors->has('aadharno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aadharno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">

                              <label for="gender" class="col-md-4 control-label">Gender:</label>
                                    <div class="col-md-6">
                              <p class="pd">
                                  Male<input  type="radio" name="gender" value="Male">
                                  Female <input type="radio" name="gender" value="Female">
                                 Others <input type="radio" name="gender" value="Others"></p>
                                  @if ($errors->has('gender'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                  @endif
                          </div>
                       </div>




                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address:</label>
                              <div class="col-md-6">
                               <textarea id="address" type="text" name="address" rows="4" cols="30"></textarea>
                                   @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('pincode') ? ' has-error' : '' }}">
                            <label for="pindcode" class="col-md-4 control-label">Pin Code:</label>
                              <div class="col-md-6">
                                <input id="pincode" type="numeric" class="form-control" name="pincode" value="{{ old('pincode') }}">
                                   @if ($errors->has('pincode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pincode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City:</label>
                              <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}">
                                   @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State:</label>
                              <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{ old('state') }}">
                                   @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country:</label>
                              <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}">
                                   @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('uploadfile') ? ' has-error' : '' }}">
                            <label for="uploadfile" class="col-md-4 control-label">Uploadfile:</label>
                              <div class="col-md-6">
                                  <p class="pd">
                                <input id="uploadfile" type="file" name="uploadfile"></p>
                                   @if ($errors->has('uploadfile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('uploadfile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
