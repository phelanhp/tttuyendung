<style>

</style>
<header id="header">

	<h1 id="site-logo">
		<a class="logo" href="/">
			Start<span>work</span>
		</a>
	</h1>

	<a href="javascript:;" data-toggle="collapse" data-target=".top-bar-collapse" id="top-bar-toggle" class="navbar-toggle collapsed">
		<i class="fa fa-cog"></i>
	</a>

	<a href="javascript:;" data-toggle="collapse" data-target=".sidebar-collapse" id="sidebar-toggle" class="navbar-toggle collapsed">
		<i class="fa fa-reorder"></i>
	</a>

</header> <!-- header -->

<nav id="top-bar" class="collapse top-bar-collapse">

		<ul class="nav navbar-nav pull-left">
			<li class="">
				<a href="./index.html">
					<i class="fa fa-home"></i>
					Home
				</a>
			</li>

		</ul>

		<ul class="nav navbar-nav pull-right">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
					<i class="fa fa-user"></i>
		        	{{ Auth::guard('admins')->user()->name ?? NULL }}
		        	<span class="caret"></span>
		    	</a>

		    	<ul class="dropdown-menu" role="menu">
			        <li>
			        	<a href="./page-profile.html">
			        		<i class="fa fa-user"></i>
			        		&nbsp;&nbsp;My Profile
			        	</a>
			        </li>
			        <li>
			        	<a href="./page-calendar.html">
			        		<i class="fa fa-calendar"></i>
			        		&nbsp;&nbsp;My Calendar
			        	</a>
			        </li>
			        <li>
			        	<a href="./page-settings.html">
			        		<i class="fa fa-cogs"></i>
			        		&nbsp;&nbsp;Settings
			        	</a>
			        </li>
			        <li class="divider"></li>
			        <li>
			        	<a href="{{ route('get.logout') }}">
			        		<i class="fa fa-sign-out"></i>
			        		&nbsp;&nbsp;Logout
			        	</a>
			        </li>
		    	</ul>
		    </li>
		</ul>

	</nav> <!-- /#top-bar -->
