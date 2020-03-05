<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('E&R', 'E&R') }}</title>

    <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

<script src="https://use.fontawesome.com/4eddefe7ce.js"></script>

</head>
<body>

    <div id="container-fluid" style="height: auto;">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #3385ff;font-weight: bold;">
            <div class="container" >
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
                           
                            <li><a href="{{ route('login') }}" style="color: black;">Login</a></li>
                            <li><a href="{{ route('register') }}" style="color: black;">Register</a></li>
                                  <li><a href="{{ route('product.shopingcart') }}" style="color: black;"><i class="fa fa-cart-plus" aria-hidden="true"></i>
Your Cart (<span class="badge" style="color: red;background-color: #3385ff;"> {{Session::has('cart') ? Session::get('cart')->total_quantity : 0}} </span>)</a></li>

                        @else
                         <li><a href="{{ url('/aboutus') }}"  style="color: black;" id="nav_link">About Us</a></li>
                            <li><a href="{{ url('/index') }}" style="color: black;">Home</a></li>
                              <li><a href="{{ route('product.shopingcart') }}" style="color: black;"><i class="fa fa-cart-plus" aria-hidden="true"></i>
Your Cart (<span class="badge" style="color: red;background-color: #3385ff;"> {{Session::has('cart') ? Session::get('cart')->total_quantity : 0}} </span>)</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: black;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
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
        <div id="body" style="width: 100%;"> 
      <div  class="col-md-12 col-md-offset-0" style="float: left;">
        <div class="col-md-8">
          @yield('main_content')   
        </div>              
       <div class="col-md-3" style="float:left;">
       @yield('side_content') 
       </div>
        </div> 
                    
        </div>
       </div>   
 <!-- <div id="footer"> -->
            @yield('footer') 
            <div id="footer">
             </div>
        <!-- </div> -->
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script > 
   $(document).ready(function(){
    // function getTotalprice(){
            var subtotal = parseInt($("#subtotal").text());
            var shippingcharges = parseInt($("#shippingcost").text());
            var total = subtotal + shippingcharges;
              $('#carttotal').html(total);
           
        
   });      
       
   </script> 
 @yield('javascript')
  
</body>
</html>
