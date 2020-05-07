 <header class="kode_header_2">

        <div class="container">
            <!--Logo Bar Start-->
            <div class="kode_logo_bar">
                <!--Logo Start-->
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('website/images/logo.png')}}" alt="">
                    </a>
                </div>
                <!--Logo Start-->
                <!--Navigation Wrap Start-->
                <div class="kode_navigation">
                    <!--Navigation Start-->
                    <ul class="nav">
                        <li><a href="{{ url('/') }}">home</a></li>
                        <li><a href="{{ route('ticket') }}">Ticket</a></li>
                        <li>
                            <a href="#">Register</a>
                            <ul>
                                <li><a href="{{ route('register.trainee') }}">Register Trainee</a></li>
                                <li><a href="{{ route('register.subscriber') }}">Register Subscriber</a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">Login</a>
                            <ul>
                                <li><a href="{{ route('login.bidder') }}">Bidder Login</a></li>
                                <li><a href="{{ route('login.coach') }}">Coach Login</a></li>
                                <li><a href="{{ route('login.physio') }}">Physio Login</a></li>
                                <li><a href="{{ route('login.player') }}">Player Login</a></li>
                                <li><a href="{{ route('login.subscriber') }}">Subscriber Login</a></li>
                                <li><a href="{{ route('login.trainee') }}">Trainee Login</a></li>
                                <li><a href="{{ route('login') }}">Admin Login</a></li>
                            </ul>
                        </li>
                       
                    </ul>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li><a href="index-2.html">home</a></li>
                            <li class="menu-item kode-parent-menu">
                                <a href="#">Fixtures & Results</a>
                                <ul class="dl-submenu">
                                    <li><a href="latest-result.html">latest result</a></li>
                                    <li><a href="team-schedule.html">teamschedule</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">blog</a>
                                <ul class="dl-submenu">
                                    <li>
                                        <a href="#">blog 1</a>
                                        <ul class="dl-submenu">
                                            <li><a href="blog-grid-2.html">blog 2</a></li>
                                            <li><a href="blog-grid-3.html">blog 3</a></li>
                                            <li><a href="blog-grid-4.html">blog 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">blog 2</a>
                                        <ul class="dl-submenu">
                                            <li><a href="blog2-grid-2.html">blog 2</a></li>
                                            <li><a href="blog2-grid-3.html">blog 3</a></li>
                                            <li><a href="blog2-grid-4.html">blog 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">blog 3</a>
                                        <ul class="dl-submenu">
                                            <li><a href="blog3-grid-2.html">blog 2</a></li>
                                            <li><a href="blog3-grid-3.html">blog 3</a></li>
                                            <li><a href="blog3-grid-4.html">blog 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-grid-with-sidebar.html">blog grid</a></li>
                                    <li><a href="blog-large-with-sidebar.html">blog large</a></li>
                                    <li><a href="blog-listing-with-sidebar.html">blog listing</a></li>
                                    <li><a href="blog-detail.html">blog detail</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">team</a>
                                <ul class="dl-submenu">
                                    <li><a href="team-overview.html">team overview</a></li>
                                    <li><a href="team-roster.html">team roster</a></li>
                                    <li><a href="team-schedule.html">team schedule</a></li>
                                    <li><a href="team-standing.html">team standing</a></li>
                                    <li><a href="team-comparison.html">team comparison</a></li>
                                    <li><a href="teamdetails.html">team details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">player</a>
                                <ul class="dl-submenu">
                                    <li><a href="player-detail.html">player detail</a></li>
                                <li><a href="players-standing.html">players standing</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">pages</a>
                                <ul class="dl-submenu">
                                    <li><a href="ticket.html">ticket</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="ticket-detail.html">ticket detail</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="comingsoon.html">comingsoon</a></li>
                                    <li><a href="widget.html">widget</a></li>
                                </ul>
                            </li>
                            <li><a href="contactus.html">contact us</a></li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                    <!--Navigation End-->
                    <a href="#" class="kf_cart">
                       <!--  <i class="fa fa-shopping-basket "></i>
                        <div class="text">
                            <span>Your Cart (03)</span>
                            <em>$1200.00</em>
                        </div> -->
                    </a>
                </div>
                <!--Navigation Wrap End-->
            </div>
            <!--Logo Bar End-->
        </div>
    </header>