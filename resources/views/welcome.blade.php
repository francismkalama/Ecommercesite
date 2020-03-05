@extends('layouts.app')
@section('content')  
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ URL::to('/') }}/slider/hpstore.jpg" alt="Los Angeles">
      <div class="carousel-caption" style="padding:0;position: absolute;width: 40%; height:10%; top: 47%; left:1%;">          
          <a href="{{ route('shop.empty') }}" class="btn btn-primary btn-bg">Shop Now</a>         
        </div>
    </div>

    <div class="item">
      <img src="{{ URL::to('/') }}/slider/hp2store.jpg" alt="Chicago">
      <div class="carousel-caption" style="padding:0;position: absolute;width: 40%; height:10%; top: 47%; left:1%;">          
          <a href="{{ route('shop.empty') }}" class="btn btn-primary btn-bg">Shop Now </a>         
        </div>
    </div>

    <div class="item">
      <img src="{{ URL::to('/') }}/slider/hp3store.jpg" alt="New York">
      <div class="carousel-caption" style="padding:0;position: absolute;width: auto; height:10%; top: 47%; left:1%;">          
          <a href="{{ route('shop.empty') }}" class="btn btn-primary btn-bg">Shop Now</a>         
        </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
    <span class="sr-only">Next</span>
  </a>
    
  </div>
   @endsection

  @section('footer')
  <div class="container-fluid" style="  background-color: #3385ff;position: absolute;width:100%; height:26%;bottom: 0; padding-top:1%;

    ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class=".col-xs-12 .col-md-8" style="margin-top: 2%; ">
                    <div class=".col-xs-6" style="border-left: 1px solid black; margin-left: 40%; background-color: #3385ff; color: maroon;">
                    <a href="" style="color: red; padding-left: 2%;">Contact Us</a> 
                    <br>
                    <a href="" style="color: red; padding-left: 2%;">Create Account</a>
                     <br>
                    <a href="" style="color: red; padding-left: 2%;">Contact Us</a>
                   
                </div>
          </div>
           <p align="center" style="padding-top:2%;">&copy; MaeroTechnology <?php echo date('Y');?></p>
        </div>
    </div>
</div>

@endsection
<!-- </body>

</html> -->
