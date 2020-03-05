@extends('layouts.adminmaster')
@section('main_content')
  <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="color:blue; font-weight: bold;">Edit Product</div>                
                <div class="panel-body">                		
                    {!! Form::model($producttoedit, array('route'=>array('product.update',$producttoedit->id),'files'=>true,'method'=>'PUT')) !!}
                    <div class="col-md-7 col-md-offset-2">                    	
                		<div class="well well-sm">
                		{{ Form::label('productname','Name of Product') }}
                		{{ Form::text('product_name',null, ["class"=>'form-control',"name"=>'productname']) }}
						</div>
						<div class="well well-sm">
                		{{ Form::label('product_description','Description of Product') }}
                		{{ Form::text('product_description',null, ["class"=>'form-control',"name"=>'productdesc']) }}
                        </div>
						<div class="well well-sm">
                		{{ Form::label('product_price','Price of Product') }}
                		{{ Form::text('product_price',null, ["class"=>'form-control',"name"=>'productprice']) }}
 						</div>
						<div class="well well-sm">
							<div class="form-group">
                			@if($producttoedit->product_image)
                			<img src="{{ URL::to('/') }}/uploads/{{ $producttoedit->product_image }}" style="height: 100px; width: 100px; border: 1px solid grey;">
                			              			
                			@else
                			<p>No file upload</p>
                			@endif
                		</div>
                		{{ Form::label('product_image_name','Product Image') }}
                		{{ Form::file('product_image',null, ["class"=>'form-control',"name"=>'productimage' ]) }}
                		
                		</div>
						<div class="well well-sm">
		         		{{ Form::label('product_status','Product Status') }}
                		{{ Form::select('product_status',array('active' => 'Active', 'inactive' =>'Inactive')
                		) }}
                		</div>
						<div class="well well-sm">
                   		{{ Form::label('product_serial','Product Serial Number') }}
                		{{ Form::text('product_serial',null, ["class"=>'form-control',"name"=>'productserial']) }}
                		</div>
                		{{ Form::submit('Update', array('class' => 'btn btn-success')) }}
                		<a class="btn btn-danger " href="{{ route('admin.view') }}">Cancel</a>
                		             		
                	</div>
                    {!! Form::close()!!}
                </div>
            </div>

</div>
@endsection
<!-- @section('footer')
<!-- <div class="footer"> -->
  <!--  <div class="container-fluid" style=" color: black; background-color:#3385ff;position: absolute; ">
    <div class="row">
              <p align="center" style="padding-top:2%;">&copy; MaeroTechnology <?php echo date('Y');?></p>
        </div>
    </div> -->

@endsection -->
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