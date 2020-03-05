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

        <div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Customer Orders</div>
                <div class="panel-body" >
            <div class="table-responsive">
               <table class="table">
                <thead>
                    <tr>
                     <th>id</th>
                     <th>Customer Name</th>
                     <th>Email</th>
                     <th>Ordered Products</th>
                     <th>Total No ordered</th>
                     <th>Tt Ordered Price</th>
                     <th>Delivery</th>
                     <th>Address</th>
                     <th>Delivery date</th>
                    </tr>                    
                </thead>
                   <tbody> 
            <?php $ordercount = 1; ?>                
            @foreach($customeroders as $customeroder)
            <tr>
                <th><?php echo $ordercount++; ?></th>
                 <th>{{ $customeroder->name}}</th>
                   <th>{{ $customeroder->email}}</th>
                   <th>                    
                    <?php  $custcarts =
                   unserialize($customeroder->cartdetails);
                   $cartarray = $custcarts->items;
                   foreach ($cartarray as $cartarray ) {
                    ?>
                   <span>
                         <?php
                    echo $cartarray['item']['product_name']."\n";                  }                 
                   ?> 
               </span>                     
                   
                </th>
                <th>{{ $customeroder->Noofproducts}}</th>
                <th>{{ $customeroder->totalorderprice}}</th>
                <th>{{ $customeroder->modeofcollection}}</th>

            </tr>
 @endforeach  
                   </tbody>                   
               </table>
           </div>


                </div>
            </div>
        </div>
    </div>
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
         active:1,
        animate:200,     
    icons: icons
           } );
    </script>
@endsection
