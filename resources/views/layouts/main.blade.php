@include('admin.partials.headerscript')
	
@include('admin.partials.header')
	<!-- navigation -->
    <div class="row no-gutters">
		<div class="col-md-2">
			@include('admin.partials.nav')
        </div>
        <!-- slider -->
        <div class="col-md-8 offset-md-2">
			@include('admin.partials.carousel')		
        </div>
    </div>
	<div class="row">
       <div class="col-md-2">

       </div>
       <div class="col-md-10">
	   		@yield('content')
		</div>
	</div>
	<!-- Footer --> 
<footer class="page-footer font-small teal pt-4">

<!-- Footer Text -->
	<div class="container-fluid text-center text-md-left">

	<!-- Grid row -->
	<div class="row">

		<!-- Grid column -->
		<div class="col-md-10 mt-md-0 mt-5">

			<div class="social">
				<h2 class= font-weight-bold text-uppercase mb-4 ml-4><b>Follow Us</b></h2>
						<!-- Instagram -->
						<a href="https://www.instagram.com" target="blank" class="fa fa-instagram social"></a>
											
											
						<!-- Twitter -->
						<a href="https://www.twitter.com" target="blank" class="fa fa-twitter social"></a>
					
						<!-- Gmail-->
					
						<a href="https://www.gmail.com" target="blank" class="fa fa-envelope social"></a>

			</div>
			<div class="footer-copyright text-center py-3">© 2020 Copyright:
				<a href="https://Merokitab.com/"> Merokitab</a> 
			</div>
		
		</div>

		
		<!-- Grid column -->

		<hr class="clearfix w-100 d-md-none pb-3">

		<!-- Grid column -->
		<div class="col-md-2 mb-md-0 ">
			<!-- Content -->
			<p>
				Mero Kitab<br>
				Province No.3<br>
				<strong>Address:</strong> Bouddha,Kathmandu<br>
				<strong>Email:</strong>Merokitab@gmail.com<br>	
			</p>
		</div>
		<!-- Grid column -->

	</div>
	<!-- Grid row -->

	</div>
</footer>
</body>
</html>
	
		