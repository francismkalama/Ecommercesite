<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta content="" name="keywords">
  <meta content="" name="description">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('E&R', 'E&R') }}</title>
     <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
 <style type="text/css">
   #header{
 background-color: #3385ff;
 height: 2%;
 margin-top: 4px;
   }
   .scrollto{
    text-decoration: none;
   }
   #page_menu{
color: black;

   }
  
 </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
    #nav_link{color:blue;}
    .myslider {display:none;}
    ..carousel-indicators li{background-color: red;}
    .carousel-indicators .active {background-color: #3385ff;
}
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://use.fontawesome.com/4eddefe7ce.js"></script>
</head>
<body>
    <div id="container-fluid" style="height: auto;">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #3385ff; font-weight: bold;">
            <div class="container-fluid" >
                <div class="navbar-header" style="width: 30%;">
                  

                    <!-- Branding Image -->
                     <a class="navbar-brand" href="{{ url('/index') }}" style="color: black;margin-left: 0px; font-size: 2vw; font-weight: bold;">
                        {{ config('E&R', 'E&R') }}
                    </a>
<a class="navbar-brand" href="{{ url('/index') }}" style="color: black;padding-left: 3%;font-weight: bold;margin-left: 5%; font-size: 2vw;">
                        {{ config('ELCY&ROBIN', 'ELCY&ROBIN') }}
                    </a>


                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed nav navbar-nav navbar-left" data-toggle="collapse"   data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                    
                </div>
<div></div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/aboutus') }}"  style="color: black;" id="nav_link">About Us</a></li>
                            <li><a href="{{ url('/index') }}" style="color: black;">Home</a></li>
                            <li class="dropdown">
                                <a href="pnservices" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: black;">
                                   Products <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu"> 
                                    @if(count($category)>0)
                                    @foreach($category as $categ)
                                   <a href="{{url('customer/view_products/categ/ ')}}{{$categ->id}}">{{$categ->category_name }}</a><br>
                                    @endforeach
                                    
                                    @else
                                 <span>Currently there are no Category</span>   
                                    @endif
                                </ul>                               
                                
                            
                            <li>
                                   <li class="dropdown">
                                <a href="pnservices" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: black;">
                                  Services <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu"> 
                                    @if(count($category)>0)
                                    @foreach($category as $categ)
                                   <a href="{{url('customer/view_products/categ/ ')}}{{$categ->id}}">{{$categ->category_name }}</a><br>
                                    @endforeach
                                    
                                    @else
                                 <span>Currently there are no Category</span>   
                                    @endif
                                </ul>                               
                                
                            
                            <li>
                               
                             <li><a href="{{ route('product.shopingcart') }}" style="color: black;"><i class="fa fa-cart-plus" aria-hidden="true"></i>
Your Cart (<span class="badge" style="color: red;background-color: #3385ff;"> {{Session::has('cart') ? Session::get('cart')->total_quantity : 0}} </span>)</a></li>

                        @else
                         <li><a href="{{ url('/aboutus') }}"  style="color: black;" id="nav_link">About Us</a></li>
                            <li><a href="{{ url('/index') }}" style="color: black;">Home</a></li>
                            <li class="dropdown">
                                <a href="pnservices" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: black;">
                                   Products and Services<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu"> 
                                    @if(count($category)>0)
                                    @foreach($category as $categ)
                                   <a href="{{url('customer/view_products/categ/ ')}}{{$categ->id}}">{{$categ->category_name }}</a><br>
                                    @endforeach
                                    
                                    @else
                                 <span>Currently there are no Category</span>   
                                    @endif
                                </ul>                               
                                
                            
                            <li>
                            
                             <li><a href="{{ route('product.shopingcart') }}" style="color: black;"><i class="fa fa-cart-plus" aria-hidden="true"></i>
Your Cart (<span class="badge" style="color: red;background-color: #3385ff;"> {{Session::has('cart') ? Session::get('cart')->total_quantity : 0}} </span>)</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: black;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" >
                                  <li style="border-bottom: 1px solid #3385ff;padding-bottom: 6%;"><a href="">Purchase History</a></li>

                                    <li style="padding-top: 6%;">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>                                        
                                    </li>
                                    
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
         <div class="container-fluid" style="margin: 0;background-color: #cccccc;" >
                <!-- <div class="navbar-header"> -->
                    @if(Auth::guest())
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{ route('login') }}" style="text-decoration: underline;color: blue;padding:0;margin-left:10%;">Login </a></li> 
                      <li style="text-decoration: underline;color: blue;">|<li>
                     <li><a href="{{ route('register') }}" style="text-decoration: underline;color: blue;padding:0;margin-left:10%;margin-right:20%;"> Register</a></li>   
                    </ul>
                    @else
                   <span style="float: right;color: red;">Logged in as {{ Auth::user()->name }}</span>  
                    
                    @endif
                             <!-- </div> -->
            </div>
        

         </div>        
            @yield('content') 
       <div></div>
         

            @yield('footer') 
             <div id="footer">
             </div>
                 <script src="{{ asset('js/app.js') }}"></script>
                 <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
                 <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
    <script>
        var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsById("myslider");
  // if (n > x.length) {slideIndex = 1}    
  // if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}   
  x[slideIndex-1].style.display = "block";  
   setTimeout(showDivs, 2000);

}
    </script>

</body>
</html>
