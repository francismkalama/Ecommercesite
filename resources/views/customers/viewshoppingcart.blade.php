@extends('layouts.cartmaster')
 @section('main_content') 
@if(Session::has('cart'))
<div class=".container-fluid">
	<div class="col-md-11 col-md-offset-1" >
	<div class="panel panel-default" >
	<div class="panel-heading">
	<h5 style="font-weight: bold; color: blue;">Products on Your shopping cart</h5>		
	</div>
	<div class="panel-body">
<div class="">
<table class="table">
	<th>Product Name</th>
	<th>Product Price</th>
	<th>Action</th>
	<th>Product Quantity</th>
	@foreach($products as $product)
	<tbody>
	<tr>
	<td><span><a href="">{{$product['item']['product_name']}}</a></span></td>	
	<td><span style="">Kshs: {{$product['price']}}</span>	</td>
	<td>
	<div class="btn-group">
		<button type="button" class="btn btn-primary btn-xs dropdown-toggle"  data-toggle="dropdown">
		Action <span class="caret"></span></button>	
		<ul class="dropdown-menu">
			<li><a href="{{ url('/shoppingcart/reduceby',['id'=>$product['item']['id']])}}">Reduce 1 </a></li>
			<li><a href="{{ url('/shoppingcart/reduceall',['id'=>$product['item']['id']])}}">Reduce All </a></li>
		</ul>	
		</div>
		
	</td>
	<td><span class="badge">{{$product['qty']}}</span></td>
	</tr>
	</tbody>
	 @section('side_content')
	 <div id="total" class="col-md-12 col-md-offset-0" >	
	<table class="table">
		<thead><h5><strong>Cart Summary</strong></h5></thead>
		<tbody>
		<tr>
		<td>Sub Total: </td>
		<td>Kshs:<span id="subtotal" style="color: red;">{{$totalprice}}</span></td>
		</tr>
		<tr>
			<td>Shippping Cost: </td>
			<td>Kshs:<span id="shippingcost">0</span></td>
		</tr>
		<tr>
			<td>Total : </td>
			<td><span id='carttotal' style="color: red;"></span></td>
		</tr>			
		</tbody>

	</table>
	
	<a href="{{url('customer/checkout')}}" class="btn btn-success btn-sm active">Checkout</a>
</div>
@endsection
		@endforeach	
	
</table>



	
		
	</div>	
		
	</div>
		
	</div>

	
	</div>
	

</div>


@else
<div class=".container-fluid col-md-offset-3">
	<div class="col-md-11 col-md-offset-1" >
	<div class="panel panel-default" >
	<div class="panel-heading">
	<h5 style="font-weight: bold; color: blue;">Products on Your shopping cart</h5>		
	</div>
	<div class="panel-body">
	You have no Item on your Shopping cart	<a href=" {{ route('shop.empty') }}">Start shopping</a>
	</div>		
	</div>	
	</div>
</div>
@endif 

 @endsection
 @section('javascript')
 <script type="text/javascript">
        $("#side_links").accordion({
        active:1,
        animate:200
           } );

        
    </script>
@endsection
