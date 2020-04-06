<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li>
				<a href="{{ route('admin.dashboard')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Dashboard</span>
				</a>
			</li>

			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Players</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ route('player.index')}}"><i class="fa fa-circle-o"></i> Player</a></li>
					<li><a href="{{ route('playertype.index')}}"><i class="fa fa-circle-o"></i> Player Type</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ route('trainee.index')}}">
					<i class="fa fa-book"></i> 
					<span>Trainee</span>
				</a>
			</li>
			<li>
				<a href="{{ route('coach.index')}}">
					<i class="fa fa-book"></i> 
					<span>Coach</span>
				</a>
			</li>
			<li>
				<a href="{{ route('physio.index')}}">
					<i class="fa fa-book"></i> 
					<span>Physio</span>
				</a>
			</li>
			<li>
				<a href="{{ route('team.index')}}">
					<i class="fa fa-book"></i> 
					<span>Team</span>
				</a>
			</li>
			<li>
				<a href="{{ route('turnament.index')}}">
					<i class="fa fa-book"></i> 
					<span>Turnament</span>
				</a>
			</li>
			<li>
				<a href="{{ route('matchvenue.index')}}">
					<i class="fa fa-book"></i> 
					<span>Match venue</span>
				</a>
			</li>
			<li>
				<a href="{{ route('match.index')}}">
					<i class="fa fa-book"></i> 
					<span>Match</span>
				</a>
			</li>
			<li>
				<a href="{{ route('goal.index')}}">
					<i class="fa fa-book"></i> 
					<span>Goal</span>
				</a>
			</li>
			
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>