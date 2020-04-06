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
		@include('admin.partials.footerscript')
	
		