@extends('layouts.adminmaster')
@section('main_content')
  <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="color:blue; font-weight: bold;">Edit Category</div>                
                <div class="panel-body">                		
                    {!! Form::model($categoryedit, array('route'=>array('category.update',$categoryedit->id))) !!}
                    <div class="col-md-7 col-md-offset-2">                    	
                		<div class="well well-sm">
                		{{ Form::label('categoryname','Name of Product') }}
                		{{ Form::text('category_name',null, ["class"=>'form-control',"name"=>'categoryname']) }}
						</div>
						<div class="well well-sm">
                		{{ Form::label('category_description','Description of Product') }}
                		{{ Form::text('category_description',null, ["class"=>'form-control',"name"=>'categorydesc']) }}
                        </div>					
						<div class="well well-sm">
		         		{{ Form::label('product_status','Product Status') }}
                		{{ Form::select('product_status',array('active' => 'Active', 'inactive' =>'Inactive')
                		) }}
                		</div>						
                		{{ Form::submit('Update', array('class' => 'btn btn-success')) }}
                		<a class="btn btn-danger " href="{{ route('admin.viewcateg') }}">Cancel</a>
                		             		
                	</div>
                    {!! Form::close()!!}
                </div>
            </div>

</div>
@endsection

<!-- <div class="footer"> -->
  <!--  <div class="container-fluid" style=" color: black; background-color:#3385ff;position: absolute; ">
    <div class="row">
              <p align="center" style="padding-top:2%;">&copy; MaeroTechnology <?php echo date('Y');?></p>
        </div>
    </div> 

-->
@section('footer') 
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