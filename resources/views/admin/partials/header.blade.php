<header>
		<div class="header-top">
			<div class="row d-flex">
				<div class="col-md-4 logo-wrapper">
					<a href="{{url('/home')}}"><img src="/img/logo.png" alt="logo" class="logo" /></a>
				</div>
				<div class="col-md-5 search-form">
					<div class="input-group mt-1">
						<input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<span class=""><i class="fa fa-search" aria-hidden="false"></i></span>
						</div>
					</div>
				</div>
				<div class="col-sm-2 scart">
					<a href="{{route('cart.index')}}">
					<i class="fa fa-shopping-cart"></i>
					Cart
					<span>{{Cart::count()}}</span>
				</div> 
				
				
				<div class="col-md-7">
					<nav class="navbar navbar-expand-sm header-list mt-2 justify-content-end pr-5">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="{{url('/home')}}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('deposits.create')}}">Deposit Book</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('donates.create')}}">Donation</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="{{url('/login')}}">Login</a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link" href="{{url('/sells/create')}}">Sell</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/admin')}}">Admin</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/about')}}">About Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('contacts.create')}}">Contact Us</a>
							</li>
							<?php if(Auth::check()){ ?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
									<div class="dropdown-menu" aria-labelledby="dropdown01">
										<a style="color: black;" class="dropdown-item" href="#">{{Auth::user()->first_name}}</a>
										<a style="color: black;" class="dropdown-item" href="{{url('/logout')}}">Logout</a>
										<a style="color: black;" class="dropdown-item" href="{{url('/')}}/profile">Profile</a>
									</div>
								</li>
            				<?php }else{ ?>
            					<li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Login</a></li>
           					<?php }?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
    </header>