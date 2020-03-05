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
                <div class="panel-heading" style="color:blue;">List of Categories</div>
                <div class="panel-body">
                <div class="table-responsive">
                <table class="table table-condensed">
                <th>Category Id</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Category Status</th>
                <th>Option</th>                
                         <?php 
               foreach($category as $categ){
                ?>
                <tr>
              <td><?php echo $categ->id;?></td>
              <td><?php echo $categ->category_name;?></td> 
              <td><?php echo $categ->category_description;?></td>     
              <td><?php echo $categ->status;?></td>
              <td>
              <a href="category/edit/<?php echo $categ->id;?>">Edit</a> |
              <a href="category/delete/<?php echo $categ->id;?>">Delete</a>
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
                <a href="/admin/addcategory" class="btn btn-default" style="background-color: #3385ff; color: black;" >Add Category</a>
                <a href="/admin/home" class="btn btn-default" style="background-color: #3385ff; color: black;">Exit</a>
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
        active:4,
        animate:200,
        icons: icons
           } );
    </script>
@endsection
