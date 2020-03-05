@extends('layouts.adminmaster')
@section('side_content')
<div id="side_links" style=" width: 20%;float: left;margin-top: 2%;margin-left: 2%;padding-right: 1%;">
<!-- <div> -->

<h5>Admin Home</h5>
<div>
<li><a href="change_password">Change Password</a></li>
</div>

<h5>Products</h5>
<div>
<li><a href="addproduct">Add Products</a></li>
<li><a href="viewproducts">View Products</a></li>
</div>

<h5>Customer</h5>
<div>
<li><a href="viewcustomers">View Customers</a></li>
</div>

<h5>Orders</h5>
<div>
<li><a href="vieworder">View Orders</a></li>
<li><a href="manageorder">Manage Orders</a></li>
</div>

<h5>Categories</h5>
<div>
<li><a href="add_category">Add Category</a></li>
<li><a href="view_category">View Categories</a></li>
</div>

<h5>Discounts</h5>
<div>
<li><a href="">Add Discount</a></li>
<li><a href="">View Discounts</a></li>
</div>

<h5>Shipping</h5>
<div>
<li><a href="">Add Shipment</a></li>
<li><a href="">Manage Shipments</a></li>
</div>

<h5>Store</h5>
<div>
<li><a href=""> Add To Stores</a></li>
<li><a href="">Manage Store</a></li>    
</div>
<!-- </div> -->	
</div>
@endsection
@section('main_content')
<div>
<div class="container" style="float: left;margin: 2%;padding: 0%;">
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
@section('footer')
    <div class="container-fluid" style="  background-color: #3385ff;position: absolute;width:100%; height:10%;bottom: 0;

    ">
    <div class="row">
              <p align="center" style="padding-top:2%;">&copy; MaeroTechnology <?php echo date('Y');?></p>
        </div>
    </div>
</div>
@endsection
@section('javascript')
 <script type="text/javascript">
  var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
        $("#side_links").accordion({
    icons: icons
           } );
    </script>
@endsection
