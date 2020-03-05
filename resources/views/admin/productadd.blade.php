@extends('layouts.adminmaster')
@section('side_content')
<div class="container-fluid" style="margin-top: 1%;">
    <div class="row">
        <div class="col-md-3" style="width: 20%;">
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
    
            <div class="col-md-8 col-md-offset--1" style="width: 75%;">
            <div class="panel panel-default">
                <div class="panel-heading" style="color:blue;font-weight: bold;">Add Products</div>
                <div class="panel-body">
                 <form class="form-horizontal" role="form" method="POST" action="addproduct" name="productimage" id="product" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('productname') ? ' has-error' : '' }}">
                            <label for="productname" class="col-md-4 control-label">product Name</label>

                            <div class="col-md-6">
                                <input id="productname" type="text" class="form-control" name="productname" value="{{ old('productname') }}" required autofocus>

                                @if ($errors->has('productname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('productname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                           <div class="form-group{{ $errors->has('productname') ? ' has-error' : '' }}">
                            <label for="productname" class="col-md-4 control-label">Product Category</label>

                            <div class="col-md-6">
                            <select name="category" required >
                            <?php 
                            foreach ($category as $categ) {
                              ?>
                            <option value="<?php echo $categ->id;?>"><?php echo $categ->category_name;?></option>
                            <?php
                            }

                            ?>
                            
                            
                                
                            </select>                            
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('productdesc') ? ' has-error' : '' }}">
                            <label for="productdesc" class="col-md-4 control-label">Product Description</label>

                            <div class="col-md-6">
                                <input id="productdesc" type="text" class="form-control" name="productdesc" value="{{ old('productdesc') }}" required autofocus>

                                @if ($errors->has('productdesc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('productdesc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('productprice') ? ' has-error' : '' }}">
                            <label for="productprice" class="col-md-4 control-label">Product Price</label>

                            <div class="col-md-6">
                                <input id="productprice" type="text" class="form-control" name="productprice" value="{{ old('productprice') }}" required autofocus>

                                @if ($errors->has('productprice'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('productprice') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('productserial') ? ' has-error' : '' }}">
                            <label for="productserial" class="col-md-4 control-label">Product Serial No:</label>

                            <div class="col-md-6">
                                <input id="productserial" type="text" class="form-control" name="productserial" value="{{ old('productserial') }}" required autofocus>

                                @if ($errors->has('productserial'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('productserial') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('productstatus') ? ' has-error' : '' }}">
                            <label for="productstatus" class="col-md-4 control-label">Product Status</label>

                            <div class="col-md-6">
                            <select class="form-control" name="productselection" id="productselection">
                            <option value="active" selected="selected">Active</option>
                            <option value="inactive" >Inactive</option>
                                
                            </select>                                
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('productimage') ? ' has-error' : '' }}" >
                            <label for="productimage" class="col-md-4 control-label">Product Image</label>

                            <div class="col-md-6" style="border: none;">
                                <input id="productimage" type="file" class="form-control" name="productimage" value="" style="border: none;" required autofocus>

                                @if ($errors->has('productimage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('productimage') }}</strong>
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
@section('main_content')

@endsection
@section('footer')
    <div class="container-fluid" style="  background-color: #3385ff;position: absolute;width:100%; height:auto;bottom:0%;
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
