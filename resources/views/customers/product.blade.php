@extends('layouts.customermaster')
@section('side_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading" >List of Category </div>
                <div class="panel-body">
                    
                <?php foreach($category as $categ){ 
                    ?>
                    <h5 style="color: white;"><a href="{{url('customer/view_products/categ/ ')}}<?php echo $categ->id;?>"><?php echo $categ->category_name;?></a></h5>
                    <?php 
                  } ?>
                
                                
                </div>
            </div>
        </div>
          <div class="col-md-9 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading" style="color:blue;">Products</div>
                <div class="panel-body">
                @if(empty($product)) 
                 <div>No Products are added under this category</div>       

              
                    @else
                     
                <?php foreach($product as $pdct){                   
                    ?> 
                    <div class="col-md-3 col-md-offset-0">
                    <div class="panel panel-default thumbnail">
                    <div class="panel-heading" style="color:blue;"><?php echo $pdct->product_name;?></div>
                    <div class="panel-body">
                    <img src="{{ URL::to('/') }}/uploads/<?php echo $pdct->product_image;?>" style="width: 60%; height: 40%;">
                    <div>
                    <div>
                        <h6 style="text-decoration: underline;">Product description</h6>
                      <span class="text-info" style="font-size: 80%;"><?php echo $pdct->product_description;?></span>
                    </div>
                    <div class="clearfix">
                       <div class="pull-left"><span>Price: Ksh <?php echo $pdct->product_price;?> </span></div><br>
                        <a href="{{route('product.addtocart', [ 'categ'=>$pdct->category_id , 'id' => $pdct->id])}}" class="btn btn-sm btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Add to Cart</a></div>
                    </div>
                    </div>
                    </div>
                    </div>

                    <?php 

                    }?>
                    @endif
                                
            </div>
            </div>

        </div>
        </div>
</div>
@endsection
@section('main_content')
@endsection
@section('footer')
<div class="footer">    
    <div class="container-fluid" style=" color: black; background-color: #3385ff;position: absolute; width: 100%;padding-top: 4%;
  bottom:-1000px;
  left: 0;
 "
  >
    <div class="row">
              <p align="center" style="padding-top:2%;">&copy; MaeroTechnology <?php echo date('Y');?></p>
        </div>
    </div></div>
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
