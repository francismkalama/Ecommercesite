@extends('layouts.cartmaster')
 @section('main_content') 


<div class="row col-md-offset-3" >
	<div id="" class="alert alert-success" style="display: hidden;">
		{{ Session::get('error') }}
	</div>
	
</div>

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


 @endsection
 @section('javascript')
 <script type="text/javascript">
        $("#side_links").accordion({
        active:1,
        animate:200
           } );

        
    </script>
@endsection
