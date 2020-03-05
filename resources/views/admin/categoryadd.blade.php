@extends('layouts.adminmaster')
@section('side_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
                <div id="side_links" >
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
                <li><a href="manage_customer">Manage Customer</a></li>
                <li><a href="view_customers">View Customers</a></li>
                </div>

                <h5>Orders</h5>
                <div>
                <li><a href="view_orders">View Orders</a></li>
                <li><a href="manage_orders">Manage Orders</a></li>
                </div>

                <h5>Categories</h5>
                <div>
                <li><a href="addcategory">Add Category</a></li>
                <li><a href="view_category">View Categories</a></li>
                </div>

                <h5>Discounts</h5>
                <div>
                <li><a href="add_discount">Add Discount</a></li>
                <li><a href="view_discount">View Discounts</a></li>
                </div>

                <h5>Shipping</h5>
                <div>
                <li><a href="add_shipment">Add Shipment</a></li>
                <li><a href="manage_shipment">Manage Shipments</a></li>
                </div>

                <h5>Store</h5>
                <div>
                <li><a href="add_stores"> Add To Stores</a></li>
                <li><a href="manage_stores">Manage Store</a></li>    
                </div>
                    
                </div>
            </div>
        </div>
    
            <div class="col-md-8 col-md-offset--1">
            <div class="panel panel-default">
                <div class="panel-heading" style="color:blue;">Add Category</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="addcategory" id="category">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('categoryname') ? ' has-error' : '' }}">
                            <label for="categoryname" class="col-md-4 control-label">Category Name</label>

                            <div class="col-md-6">
                                <input id="categoryname" type="text" class="form-control" name="categoryname" value="{{ old('categoryname') }}" required autofocus>

                                @if ($errors->has('categoryname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoryname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('categorydesc') ? ' has-error' : '' }}">
                            <label for="categorydesc" class="col-md-4 control-label">Category Description</label>

                            <div class="col-md-6">
                                <input id="categorydesc" type="text" class="form-control" name="categorydesc" value="{{ old('categorydesc') }}" required autofocus>

                                @if ($errors->has('categorydesc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categorydesc') }}</strong>
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
