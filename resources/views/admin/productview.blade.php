@extends('layouts.adminmaster')
@section('side_content')
<div class="container-fluid" style="margin-top: 2%;">
    <div class="row">
        <div class="col-md-2">
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
    
            <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading" style="color:blue;">View Products</div>
                <div class="panel-body">
                <div class="table-responsive">
                <table class="table table-condensed"  >
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Category</th>
                <th>Serial Number</th>
                <th>Product Price</th>
                <th>Product Image</th>
                <th>Product Status</th>
                <th>Option</th>                
                         <?php 
               foreach($products as $prodct){
                ?>
                <tr>
              <td><?php echo $prodct->id;?></td>
              <td><?php echo $prodct->product_name;?></td> 
              <td><?php echo $prodct->product_description;?></td> 
              <td><?php echo $prodct->category_name;?></td>
              <td><?php echo $prodct->product_serial;?></td>  
              <td><?php echo $prodct->product_price;?></td>  
              <td><img src="{{ URL::to('/') }}/uploads/<?php echo $prodct->product_image;?>" width="50px" height="50px" ></td>
             
              <td><?php echo $prodct->product_status;?></td>
              <td>
              <a href="product/edit/<?php echo $prodct->id;?>">Edit</a> |
              <a href="product/delete/id=<?php echo $prodct->id;?>">Delete</a>
              </td>  
              </tr>
                    <?php
               }
               ?>                
                </table> 
                </div>
                </div>
            </div>
            <div class="col-md-12 col-md-offset-5">
                <a href="/admin/addproduct" class="btn btn-default" style="background-color: #3385ff; color: black;" >Add product</a>
                <a href="/admin/home" class="btn btn-default" style="background-color: #3385ff; color: black;">Exit</a>
            </div>
        </div>
        </div>
</div>
@endsection
@section('main_content')

@endsection
@section('footer')
<div class="footer">
    <div class="container-fluid" style=" color: black; background-color: #3385ff;position: absolute; right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;">
    <div class="row">
              <p align="center" style="padding-top:2%;">&copy; postandsale <?php echo date('Y');?></p>
        </div>
    </div></div>
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