@extends('layouts.checkout')
@section('content') 
<div class=".container-fluid" style="margin-top: 1%;height: 80%;position: relative;  >
	<div class="col-md-8 col-md-offset-2" style="border: solid;margin-top: 1%;">
		 <div class="panel panel-default" >
	         <div class="panel-heading">
		       <h3 style="color: blue; font-weight: bold;" align="center">Checkout</h3>
		       	</div>
		       	<div class="panel-body">
		       	<div align="center" >
		       		<h3>Your Total: Ksh {{$totalamount}}</h3>
		       	</div>
		       	<div id="charge_error" class="alert alert danger {{ !Session::has('error')? 'hidden':''}}">
		       		{{ Session::get('error') }}
		       	</div>

		       		<div align="center" >
		       		 <a href="{{url('customer/checkout')}}" class="btn btn-success">Self Pick Products</a>
		       	   <a href="{{url('customer/checkout/compdelivery')}}" class="btn btn-success">To be Delivered</a>
		       	</div>
		       	<div>
		     	<div id="tobedeliveredbox">
		       		<form action="{{ route('product.checkout.delivered') }}" method="POST" id="checkout_form">
		       			 <input type="hidden" id="productprice" name="productprice" class="form-control" value="{{$totalamount}} " >
		       			<div class="row" >
		       				<div class="col-xs-10 col-sm-offset-1"  >
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="name">Name of Person:</label>
		       						<input type="text" id="name" class="form-control" required>
		       					</div>
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="idnumber">ID Number :</label>
		       						<input type="text" id="idnumber" class="form-control" required>
		       					</div>	
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="dateofdelivery">Date to be delivered:</label>
		       						<input type="text" id="dateofdelivery" class="form-control" required>
		       					</div>	
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="county">County:</label>
		       						<input type="text" id="county" class="form-control" required>
		       					</div>	
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="town">Town:</label>
		       						<input type="text" id="town" class="form-control" required>
		       					</div>	
		       						
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="address">Address:</label>
		       						<input type="text" id="address" class="form-control" required>
		       					</div>			       				
		       				<div class="form-group col-xs-8 col-sm-offset-5">
		       						{{ csrf_field() }}
		       						<button type="submit"  class="btn btn-primary">Buy Now</button>
		       					</div>	
		       			</div>
		       		</div>
		       		</form>
		       		
		       	</div>



		   
		       	</div>
		       	</div>
		       </div>

		</div>
	<!-- </div> -->
	
@endsection
@section('footer')
  <div class="container-fluid" style=" background-color: #3385ff;position: relative;width:100%; height:18%; ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class=".col-xs-12 .col-md-8" style="margin-top: 2%;">
                    <div class=".col-xs-6" style="border-left: 1px solid black; margin-left: 40%; background-color: #3385ff; color: maroon;">
                    <a href="" style="color: red; padding-left: 2%;">Contact Us</a> 
                    <br>
                    <a href="" style="color: red; padding-left: 2%;">Create Account</a>
                     <br>
                    <a href="" style="color: red; padding-left: 2%;">Contact Us</a>
                   
                </div>
          </div>
           <p align="center" style="padding-top:1%;">&copy; MaeroTechnology <?php echo date('Y');?></p>
        </div>
    </div>
</div>
@endsection
@section('javscripts')
  <script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/checkout.js') }}"></script>
<script type="text/javascript">
	$("#selfpick").click(
function(){

	$("#selfpickbox").show('slow');
	
});		

	$("#tobedeliv").click(
		function(){
	$('#selfpickbox').hide('slow');
	// $("tobedeliveredbox").show();
	$("#selfpickbox").load('tobedeliveredbox');
	// $( ".container" ).append( "h2" );
		});

// 	$('a.slick-hide').bind('click', function(){
//       var $div1 = $('#box1'), $div2 = $('#box2')
//       if ( $div2.is(':visible') ) {
//             $div2.hide();
//       } else if ( $div1.is(':visible') && $div2.is(':hidden) ) {
//             $div1.hide();
//       } else {
//             $div1.show();
//             $div2.show();
//       }
  
// });

  



	
</script>
@endsection
































