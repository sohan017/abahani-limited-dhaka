<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{ Auth::user()->name }}</p>
				<a><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			@if(Auth::guard('bidder')->check())
			<li class="header">BIDDER MAIN NAVIGATION</li>
			<li>
				<a href="{{ route('bidder.dashboard')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Auction</span>
				</a>
			</li>
			<li>
				<a href="{{ route('bidder.player.sold')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Sold Player</span>
				</a>
			</li>
			<li>
				<a href="{{ route('bidder.my.player')}}">
					<i class="fa fa-dashboard"></i> 
					<span>My Player</span>
				</a>
			</li>
			
			@elseif(Auth::guard('coach')->check())
			<li class="header">COACH MAIN NAVIGATION</li>
			<li>
				<a href="{{ route('physio.dashboard')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{ route('coach.trainee')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Trainees</span>
				</a>
			</li>
			<li>
				<a href="{{ route('coach.player')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Players</span>
				</a>
			</li>
			<li>
				<a href="{{ route('coach.team')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Teams</span>
				</a>
			</li>
			<li>
				<a href="{{ route('coach.turnament')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Turnaments</span>
				</a>
			</li>
			@elseif(Auth::guard('physio')->check())
			<li class="header">PHYSIO MAIN NAVIGATION</li>
			<li>
				<a href="{{ route('physio.dashboard')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{ route('physio.playerfitness')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Playerfitness</span>
				</a>
			</li>
			<li>
				<a href="{{ route('physio.traineefitness')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Teaineefitness</span>
				</a>
			</li>
			<li>
				<a href="{{ route('physio.trainee')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Trainees</span>
				</a>
			</li>
			<li>
				<a href="{{ route('physio.player')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Players</span>
				</a>
			</li>
			<li>
				<a href="{{ route('physio.team')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Teams</span>
				</a>
			</li>
			<li>
				<a href="{{ route('physio.turnament')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Turnaments</span>
				</a>
			</li>
			@elseif(Auth::guard('player')->check())
			<li class="header">PLAYER MAIN NAVIGATION</li>
			<li>
				<a href="{{ route('player.dashboard')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{ route('player.trainee')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Trainees</span>
				</a>
			</li>
			<li>
				<a href="{{ route('player.player')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Players</span>
				</a>
			</li>
			<li>
				<a href="{{ route('player.team')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Teams</span>
				</a>
			</li>
			<li>
				<a href="{{ route('player.turnament')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Turnaments</span>
				</a>
			</li>
			@elseif(Auth::guard('subscriber')->check())
			<li class="header">SUBSCRIBER MAIN NAVIGATION</li>
			<li>
				<a href="{{ route('subscriber.dashboard')}}">
					<i class="fa fa-dashboard"></i> 
					<span>Order History</span>
				</a>
			</li>
			@elseif(Auth::guard('trainee')->check())
			<li class="header">TRAINEE MAIN NAVIGATION</li>
			@else
			<li class="header">ADMIN MAIN NAVIGATION</li>
			<li>
				<a href="{{ route('admin.admin.dashboard')}}">
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
					<li><a href="{{ route('admin.player.index')}}"><i class="fa fa-circle-o"></i> Player</a></li>
					<li><a href="{{ route('admin.playertype.index')}}"><i class="fa fa-circle-o"></i> Player Type</a></li>
					<li><a href="{{ route('admin.playerfitness.index')}}"><i class="fa fa-circle-o"></i> Player Fitness</a></li>
				</ul>
			</li>

			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Trainees</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ route('admin.trainee.index')}}"><i class="fa fa-circle-o"></i> Trainee</a></li>
					<li><a href="{{ route('admin.traineefitness.index')}}"><i class="fa fa-circle-o"></i> Trainee Fitness</a></li>
				</ul>
			</li>

			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Teams</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ route('admin.team.index')}}"><i class="fa fa-circle-o"></i> Team</a></li>
					<li><a href="{{ route('admin.physio.index')}}"><i class="fa fa-circle-o"></i> Physio</a></li>
					<li><a href="{{ route('admin.coach.index')}}"><i class="fa fa-circle-o"></i> Coach</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Turnaments</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ route('admin.turnament.index')}}"><i class="fa fa-circle-o"></i> Turnament</a></li>
					<li><a href="{{ route('admin.match.index')}}"><i class="fa fa-circle-o"></i> Match</a></li>
					<li><a href="{{ route('admin.matchvenue.index')}}"><i class="fa fa-circle-o"></i> Match venue</a></li>
					<li><a href="{{ route('admin.goal.index')}}"><i class="fa fa-circle-o"></i> Goal</a></li>
					<li><a href="{{ route('admin.oponentclub.index')}}"><i class="fa fa-circle-o"></i> Oponent Club</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Tickets</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ route('admin.ticket.index')}}"><i class="fa fa-circle-o"></i> Ticket</a></li>
					<li><a href="{{ route('admin.buyticket.index')}}"><i class="fa fa-circle-o"></i> Buy Ticket</a></li>
					<li><a href="{{ route('admin.discount.index')}}"><i class="fa fa-circle-o"></i> Discount</a></li>
					<li><a href="{{ route('admin.subscriber.index')}}"><i class="fa fa-circle-o"></i> Subscriber</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Auctions</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ route('admin.auction.index')}}"><i class="fa fa-circle-o"></i> Auction</a></li>
					<li><a href="{{ route('admin.playerauction.index')}}"><i class="fa fa-circle-o"></i> Player Auction</a></li>
					<li><a href="{{ route('admin.bid.index')}}"><i class="fa fa-circle-o"></i> Bid</a></li>
					<li><a href="{{ route('admin.bidder.index')}}"><i class="fa fa-circle-o"></i> Bidder</a></li>
				</ul>
			</li>
			@endif
			
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>