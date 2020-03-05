@extends('layouts.app')
@section('content')
<div align="center">
    <h4>ABOUT US</h4>
	<p>Maero Technology was started in 2008 under the look or management of francis mkalama</p>
</div>
@endsection
@yield('footer')
<div class="container-fluid" style="  background-color: #800000;position: absolute;width:100%; height:25%;bottom: 0;

    ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class=".col-xs-12 .col-md-8" style="margin-top: 2%; ">
                    <div class=".col-xs-6" style="border-left: 1px solid black; margin-left: 40%; background-color: #000000; color: maroon;">
                    <a href="" style="color: #cccccc; padding-left: 2%;">Contact Us</a> 
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>