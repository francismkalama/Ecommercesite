@extends('layouts.defaultapp')
@section('content')
<div>
<div class="container" style="float: left;margin-left: 20%;padding: 0%;">
    <div class="row">
        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="color:blue;">Change Password</div>
                <div class="panel-body">
                	 @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('change.Password') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('oldpassword') ? ' has-error' : '' }}">
                            <label for="oldpassword" class="col-md-4 control-label">Old Password</label>

                            <div class="col-md-6">
                                <input id="oldpassword" type="password" class="form-control" name="oldpassword" required autofocus>


                                @if ($errors->has('oldpassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldpassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('newpassword') ? ' has-error' : '' }}">
                            <label for="newpassword" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="newpassword" type="password" class="form-control" name="newpassword" required>

                                @if ($errors->has('newpassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newpassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('confirmpassword') ? ' has-error' : '' }}">
                            <label for="confirmpassword" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="confirmpassword" type="password" class="form-control" name="confirmpassword" required>

                                @if ($errors->has('confirmpassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirmpassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                   

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                                <button type="submit" class="btn btn-primary">
                                   Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection