@include('layouts.header')


<div class="container-fluid">
	<div class="top-nav">
		
			<ul class="nav nav-pills navbar-left">
			  	<li role="presentation"><a href="/add_client">Add Client</a></li>
			  	<li role="presentation"><a href="/add_project">Add Project</a></li>
			  	<li role="presentation"><a href="/add_service">Add Service</a></li>
			  	<li role="presentation"><a href="/register">Add User</a></li>
			</ul>
			<div class="logout">
				<ul class="navbar-right">
					<li><a class="log" href="#"><i class="fa fa-user"></i> @if ($currentUser){{$currentUser->first_name}}  {{$currentUser->last_name}}@endif&nbsp; <i class="fa fa-sort-desc"></i></a>
						<ul class="dropdown">
							<li><a href="/logout"><i class="fa fa-power-off"></i>Log Out</a></li>

							<li class="disabled"><a href="#"><i class="fa fa-wrench"></i>Settings</a></li> 
						</ul>
					</li>
				</ul>
				<div class="clear"></div>
			</div><!--End Logout-->
		</div><!--End Top Nav-->
	 
	<div class="sidebar fill">
		<div class="dashboard-nav">
			<img class="logo-dashboard" src="{{URL::asset('images/logo-xs.png')}}"/>
			<p>Welcome, @if ($currentUser){{ $currentUser->first_name }}@endif</p>
			<ul class="nav nav-stacked">
			  	<!-- <li role="presentation" class="active"><a href="/"><i class="fa fa-dashboard"></i>Dashboard</a></li> -->
			  	<li role="presentation"><a href="/clients"><i class="fa fa-user"></i>Clients</a></li>
			  	<li role="presentation"><a href="/projects"><i class="fa fa-folder-open"></i>Projects</a></li>
			  	<li role="presentation"><a href="/services"><i class="fa fa-cogs"></i>Services</a></li>
			  	<li role="presentation"><a href="/users"><i class="fa fa-group"></i>Users</a></li>
			</ul>
		</div>
	</div>
	<div class="main">
		<div class="row">
			<div class="alert-welcome col-lg-3">
				@include('flash::message')

			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				@yield('content')
			</div>
		</div>
	</div>
	<div class="clear"></div>
	
	


</div>

@include('layouts.footer')


