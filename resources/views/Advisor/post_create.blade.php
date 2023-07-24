<!DOCTYPE html>
<html lang="en">
<head>
	<title>House Rental System</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/icon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('./css/font-awesome.min.cs')}}s"/>
	<link rel="stylesheet" href="{{asset('./css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('./css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('./css/style.css')}}"/>

    <!-- {{asset('./')}} -->

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top" style="background-color: green;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							+8801818933608
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							rentalsystem@gmail.com
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
						</div>
						<div class="user-panel">
							<a href="#" id="registerbutton"><i class="fa fa-user-circle-o"></i> Register</a>
							<a href="#" id="logbutton"><i class="fa fa-sign-in"></i> Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img style="margin-top: -40px; opacity: 70%;" src="" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="{{route('about')}}">About Us</a></li>
							<li><a href="{{route('postpage')}}">Houses</a></li>
							<li><a href="{{route('blog')}}">Post</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/bg.jpg">
		<div class="container text-white">
			<h2>Post</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="container">
	<div class="site-breadcrumb">
		<div class="d-flex justify-content-between">
		<div class="container">
			<a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Post</span>
		</div>
		<div class="d-flex">

		<a href="{{route('landlord.post.create')}}" class="btn btn-primary">View Post</a>

		</div>
	

		</div>
	</div>
	</div>
	

	<!-- page -->
	<section class="page-section blog-page">
		<div class="container">
        <form action="{{route('post')}}" method="post" autocomplete="off" enctype="multipart/form-data">
           @csrf
              @if ($errors->any())
                  <div class="alert alert-danger alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    @foreach ($errors->all() as $error)
                      <div class="glyphicon glyphicon-warning-sign">&nbsp</div><b>{{ $error }}</b>
                      <br />
                    @endforeach
                  </div>
                  @if(Session::has('msg'))
			              <span style="background-color:black; padding:10px; color:white; font-weight:bold; border-radius=10px;">{{Session('msg')}}</span>
              	  @endif
                @endif
          <div class="md-form pb-3">
            <input type="text" name="area"  id="Form-pass5" class="form-control validate white-text" placeholder="e.g 1500">
            <label data-error="wrong" data-success="right" for="Form-pass5">Area</label>
          </div>
          <div class="md-form pb-3">
            <input type="text" name="garage" autocomplete="off" placeholder="e.g 5 " id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Garage</label>
          </div>
          <div class="md-form pb-3">
            <input type="text" name="bath" autocomplete="off" placeholder="e.g 8 " id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Bathroom</label>
          </div>
          <div class="md-form pb-3">
            <input type="text" name="bed"  autocomplete="off" placeholder="e.g 3 " id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Bedroom</label>
          </div>
          <div class="md-form pb-3">
            <input type="text" name="ownername" autocomplete="off" placeholder="e.g Mahfujur" id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Owner Name</label>
          </div>
          <div class="md-form pb-3">
            <input type="text" name="rent" autocomplete="off" placeholder="e.g 15,000" id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Monthly Rent</label>
          </div>
          <div class="md-form pb-3">
            <input type="text" name="city" autocomplete="off" placeholder="e.g Dhaka" id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">City</label>
          </div>
          <div class="md-form pb-3">
            <select name="state" style="border-radius: 5px;border: none;padding: 10px 271px 10px 0;">
              <option value="Punjab">Banani</option>
              <option value="Sindh">Gulshan</option>
              <option value="Kpk">Baridhara</option>
              <option value="Blochistan">Uttara</option>
            </select> <br>
            <label data-error="wrong" data-success="right" for="Form-pass5"> Select State</label>
          </div>
          <div class="md-form pb-3">
            <input type="text" name="address" autocomplete="off" placeholder="e.g Baridhara house no. 12A" id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Address</label>
          </div>
          <div class="md-form pb-3">
            <textarea type="text" rows="4" cols="50" autocomplete="off" name="des" placeholder="e.g This is very beautifull house." id="Form-pass5" class="form-control validate white-text"></textarea>
            <label data-error="wrong" data-success="right" for="Form-pass5">Description</label>
          </div>
          <div class="md-form pb-3">
            <input type="file" rows="4" cols="50" autocomplete="off" name="img" >
          </div>
       
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit"  class="btn btn-success btn-block btn-rounded z-depth-1">Post</button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
		  </form>
   
    
			<div class="site-pagination">
				<span>1</span>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#"><i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</section>
	<!-- page end -->


	<!-- Clients section -->
	<div class="clients-section">
		<div class="container">
			<div class="clients-slider owl-carousel" style="background-color:blue;">
				<a href="#">
					<img src="img/partner/1.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/2.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/3.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/4.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/5.png" alt="">
				</a>
			</div>
		</div>
	</div>
	<!-- Clients section end -->


	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/logo.png" alt="">
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>Dhanmondi 9/A, Dhaka, 1205.</p>
						<p><i class="fa fa-phone"></i>+8801818933608</p>
						<p><i class="fa fa-envelope"></i>www.rentallands.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR PLACES</h5>
						<ul>
							<li><a href="">Banani</a></li>
							<li><a href="">Gulshan</a></li>
							<li><a href="">Baridhara</a></li>
							<li><a href="">Uttara</a></li>
							<li><a href="">Dhanmondi</a></li>
						</ul>
						<ul>
							<li><a href="">Rampura</a></li>
							<li><a href="">Purbachal</a></li>
							<li><a href="">Mirpur</a></li>
							<li><a href="">Shyamoli</a></li>
							<li><a href="">Mohammadpur</a></li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="{{route('blog')}}">About Us</a></li>
							<li><a href="{{route('postpage')}}">Houses</a></li>
							<li><a href="{{route('blog')}}">Blog</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
					</ul>
				</div>
				<span style="color:white">Online House Rental System. All Rights Reserved</span>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

<!-- Modal for Button-->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/login.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> UP</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
        
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <a href="{{route('signupadvisor')}} "><button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Landlord</button></a>
            </div>
            <!--Grid column-->
          </div>
		  <!--Grid row-->
		    <!--Grid row-->
			<div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <a href="{{route('signuptenet')}} "><button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Tenant</button></a>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
              <p  class="font-small white-text d-flex justify-content-end">Have an account? <a href="#" id="loginform" class="green-text ml-1 font-weight-bold">
                  Log in</a></p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->

        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal for Button -->
<!-- Modal Login -->	
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
	<!--Content-->
	@if(Session::has('msg'))
			<span style="background-color:black; padding:10px; color:white; font-weight:bold; border-radius=10px;">{{Session('msg')}}</span>
	@endif
    <div class="modal-content card card-image" style="background-image: url('img/login.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> In</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
		  <form action="{{route('login')}}" method="post" autocomplete="off">
		  @csrf
		@if ($errors->any())
			<div class="alert alert-danger alert-dismissable">
				<a class="panel-close close" data-dismiss="alert">×</a>
				@foreach ($errors->all() as $error)
					<div class="glyphicon glyphicon-warning-sign">&nbsp</div><b>{{ $error }}</b>
					<br />
				@endforeach
			</div>
		@endif
          <div class="md-form mb-5">
            <input type="email" name="email" id="Form-email5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-email5">Your email</label>
          </div>
          <div class="md-form pb-3">
            <input type="password" name="pass"  id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Your password</label>
          </div>
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">Sign in</button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
		  </form>
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
              <p  class="font-small white-text d-flex justify-content-end">Create Account? <a href="#" id="createsignup" class="green-text ml-1 font-weight-bold">
                  Signup</a></p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal for signin-->


	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('./js/jquery-3.2.1.min.js')}} "></script>
	<script src="{{asset('./js/bootstrap.min.js')}} "></script>
	<script src="{{asset('./js/owl.carousel.min.js')}} "></script>
	<script src="{{asset('./js/masonry.pkgd.min.js')}} "></script>
	<script src="{{asset('./js/magnific-popup.min.js')}} "></script>
	<script src="{{asset('./js/main.js')}} "></script>

	<script> 
		$('#registerbutton').on('click', function() {
    //  alert("hello"); 
     $('#register').modal('show');  
 });
 $('#logbutton').on('click', function() {
    //  alert("hello"); 
     $('#login').modal('show');  
 });
 $('#createsignup').on('click', function() {
	//  alert("hello"); 
	$('#login').modal('hide');
     $('#register').modal('show');  
 });
 $('#loginform').on('click', function() {
	//  alert("hello"); 
	$('#register').modal('hide');
     $('#login').modal('show');  
 });
	</script>



</body>
</html>