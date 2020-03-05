@extends('layouts.app')
@section('content')
<div>
  <section id="intro" style="border:1px solid #668cff;height: 90%;background-color: #e0e0eb;">
    <div class="intro-container">
      <!-- <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel"> -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

        <!-- <div class="carousel-inner" role="listbox"> -->
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
</div>
</div>
  </section>
   <!--==========================
    Intro Section
  ============================-->

 


     <section id="featured-services" style="margin-top: 1%;">
      <div class="container-fluid" style="border:solid white; ">
        <div class="row">
          <div class="col-lg-12" style="text-align: center;" >
            <i class="ion-ios-heart-outline"></i>
            <h2 class="title" style="font-weight: bold; font-style: italic;">Trusted for offering genuine </br> computer products and Services</h2>
             <h4 class="title" style="font-weight: bold; font-style: italic;">Connecting people and Business </br>with technology </h4>
            <!-- <span class="description">Trusted for offering genuine computer products</span> -->
          </div>

        </div>
      </div>
    </section>  <main id="main" style="background-color: white;">

          <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->
    </div>
  @endsection
   @section('footer')
  <div class="container-fluid" style="border:solid;background-color: #3385ff;clear: both;">
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
