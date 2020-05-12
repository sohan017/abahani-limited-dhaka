@extends('website.layouts.index')

@section('title') Home-Dhake Abahani  @endsection

@section('css') 

@endsection

@section('content')


<!-- Main content -->
<!--Banner Map Wrap Start-->
<div class="kode_banner_1">
	<div class="main_banner">
		<div>
			<!--Banner Thumb START-->
			<div class="thumb">
				<img src="{{ asset('website/extra-images/banner1.jpg')}}" alt="">
				<div class="container">
					<div class="banner_caption text-center">
						<span>Season Opening !!</span>     
						<h1>
							Dhaka Abahani <b>vs</b> Mhamedan
						</h1>
						<p>Sep 09, Bongobondhu Stadium Dhaka , BD</p>
						<a href="{{ route('ticket') }}" class="btn-1">Buy Tickets Now</a>
					</div>
				</div>
			</div>
			<!--Banner Thumb End-->
		</div>
		<div>
			<!--Banner Thumb START-->
			<div class="thumb">
				<img src="{{ asset('website/extra-images/banner2.jpg')}}" alt="">
				<div class="container">
					<div class="banner_caption text-left">
						<span>Season Opening !!</span>     
						<h1>
							Giant Sharks <b>vs</b> Flying Eagles
						</h1>
						<p>Sep 09, Aguana Stadium North London , UK</p>
						<a href="#" class="btn-1">Buy Tickets Now</a>
					</div>
				</div>
			</div>
			<!--Banner Thumb End-->
		</div>
		<div>
			<!--Banner Thumb START-->
			<div class="thumb">
				<img src="{{ asset('website/extra-images/banner3.jpg')}}" alt="">
				<div class="container">
					<div class="banner_caption text-right">
						<span>Season Opening !!</span>     
						<h1>
							Giant Sharks <b>vs</b> Flying Eagles
						</h1>
						<p>Sep 09, Aguana Stadium North London , UK</p>
						<a href="#" class="btn-1">Buy Tickets Now</a>
					</div>
				</div>
			</div>
			<!--Banner Thumb End-->
		</div>
	</div>
</div>
<!--Banner Map Wrap End-->
<div class="kf_ticker-wrap">
	<div class="container">
		<div class="kf_ticker">
			<span>Breaking News</span>
			<div class="kf_ticker_slider">
				<ul class="ticker">
					<li><p>Sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy </p></li>
					<li><p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy </p></li>
					<li><p>Sanctus est Lorem ipsum dolor sit amet. </p></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Main Content Wrap Start-->
<div class="kode_content_wrap">
	<!--Result Slider Start-->
	<div class="result_slide_wrap">
		<div class="result_slider">
@foreach(\App\Match::latest()->limit(6)->get() as $match)
	<div>
		<div class="kf_result_thumb">
			<span>{{ Carbon\Carbon::parse($match->date)->format('M d, Y') }} <em>{{ $match->time }} pm</em></span>
			<div class="kf_result">
				<div class="figure pull-left">
					<figure >
						<img src="{{ asset($match->team->logo )}}" alt="">
					</figure>
					<a href="#">{{ $match->team->name }}</a>
				</div>
				<span>vs</span>
				<div class="figure pull-right">
					<figure >
						<img src="{{ asset($match->opnentClub->logo)}}" alt="">
					</figure>
					<a href="#">{{ $match->opnentClub->name }}</a>
				</div>
			</div>
			<a href="#">{{ $match->matchVanue->name }}</a>
		</div>    
	</div>
@endforeach
		</div>
	</div>
	<!--Result Slider End-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!--Featured Slider Start-->
					<div class="widget widget_ranking widget_league_table">
						<!--Heading 1 Start-->
						<h6 class="kf_hd1">
							<span>Club Team Table</span>
						</h6>
						<!--Heading 1 END-->
						<div class="kf_border">
							<!--Table Wrap Start-->
							<ul class="kf_table">
								<li class="table_head">
									<div class="team_name">
										<strong>Team</strong>
									</div>
									<div class="team_logo">
									</div>
									<div class="match_win">
										<strong>w</strong>
									</div>
									<div class="match_loss">
										<strong>l</strong>
									</div>
									<div class="team_point">
										<strong>pts</strong>
									</div>
								</li>
								<li>
									<div class="table_no">
										<span>1</span>
									</div>
									<div class="team_logo">
										<span><img src="{{ asset('website/images/team_logo.png')}}" alt=""></span>
										<a href="#">Ac milan</a>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="team_point">
										<span>99</span>
									</div>
								</li>
								<li>
									<div class="table_no">
										<span>2</span>
									</div>
									<div class="team_logo">
										<span><img src="{{ asset('website/images/team_logo2.png')}}" alt=""></span>
										<a href="#">Chelsae</a>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="team_point">
										<span>99</span>
									</div>
								</li>
								<li>
									<div class="table_no">
										<span>3</span>
									</div>
									<div class="team_logo">
										<span><img src="{{ asset('website/images/team_logo3.png')}}" alt=""></span>
										<a href="#">Real Madrid</a>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="team_point">
										<span>99</span>
									</div>
								</li>
								<li>
									<div class="table_no">
										<span>4</span>
									</div>
									<div class="team_logo">
										<span><img src="{{ asset('website/images/team_logo4.png')}}" alt=""></span>
										<a href="#">Bryan munich</a>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="team_point">
										<span>99</span>
									</div>
								</li>
								<li>
									<div class="table_no">
										<span>5</span>
									</div>
									<div class="team_logo">
										<span><img src="{{ asset('website/images/team_logo5.png')}}" alt=""></span>
										<a href="#">Sevilla FC</a>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="team_point">
										<span>99</span>
									</div>
								</li>
								<li>
									<div class="table_no">
										<span>6</span>
									</div>
									<div class="team_logo">
										<span><img src="{{ asset('website/images/team_logo6.png')}}" alt=""></span>
										<a href="#">Athletico Madris</a>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="team_point">
										<span>99</span>
									</div>
								</li>
								<li>
									<div class="table_no">
										<span>7</span>
									</div>
									<div class="team_logo">
										<span><img src="{{ asset('website/images/team_logo7.png')}}" alt=""></span>
										<a href="#">Valencia FC</a>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="team_point">
										<span>99</span>
									</div>
								</li>
								<li>
									<div class="table_no">
										<span>8</span>
									</div>
									<div class="team_logo">
										<span><img src="{{ asset('website/images/team_logo8.png')}}" alt=""></span>
										<a href="#">Real Belts</a>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="team_point">
										<span>99</span>
									</div>
								</li>
								<li>
									<div class="table_no">
										<span>9</span>
									</div>
									<div class="team_logo">
										<span><img src="{{ asset('website/images/team_logo9.png')}}" alt=""></span>
										<a href="#">FC barcelona</a>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="team_point">
										<span>99</span>
									</div>
								</li>
								<li>
									<div class="table_no">
										<span>10</span>
									</div>
									<div class="team_logo">
										<span><img src="{{ asset('website/images/team_logo10.png')}}" alt=""></span>
										<a href="#">malaga FC</a>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="match_win">
										<span>99</span>
									</div>
									<div class="team_point">
										<span>99</span>
									</div>
								</li>
							</ul>
							<!--Table Wrap End-->
						</div>
					</div>
					<!--Featured 3 Slider End-->
					<!--Featured 2 Slider Start-->

					<!--Featured 2 Wraper End-->
					<!--Add Banner Start-->

					<!--Add Banner End-->
					<!--Featured 4 Wraper Start-->

					<!--Featured 4 Wraper End-->
				</div>
				<aside class="col-md-4">
					<!--Widget Ranking Start-->

					<!--Widget Ranking End-->
					<!--Widget Ranking Start-->

					<!--Widget Ranking Start-->

					<!--Widget Ranking End-->
					<!--Widget Add 2 Strat-->
                        <!-- <div class="widget widget_add">
                            <div class="add_banner">
                                <a href="#"><img src="extra-images/add_banner2.jpg" alt=""></a>
                            </div>
                        </div> -->
                        <!--Widget Add 2 End-->
                        <!--Widget Next Match Start-->
                        @php
                        	$next_Match = \App\Match::first();
                        @endphp
                        <div class="widget widget_nextmatch">
                        	<!--Heading 1 Start-->
                        	<h6 class="kf_hd1">
                        		<span>Next Match</span>
                        	</h6>
                        	<!--Heading 1 END-->
                        	<div class="kf_border">
                        		<!--Widget Next Match Dec Start-->
                        		<div class="nextmatch_dec">
                        			<h6>Laliga Semi Finals at city stadium</h6>
                        			<span>{{ Carbon\Carbon::parse($next_Match->date)->format('l, jS M, Y,') }} {{ $next_Match->time }}</span>
                        			<div class="match_teams">
                        				<div class="pull-left">
                        					<a href="{{ route('ticket') }}"><img src="{{ asset($next_Match->team->logo )}}" alt=""></a>
                        				</div>
                        				<span>vs</span>
                        				<div class="pull-right">
                        					<a href="{{ route('ticket') }}"><img src="{{ asset($next_Match->opnentClub->logo)}}" alt=""></a>
                        				</div>
                        			</div>
                        			<a class="input-btn" href="{{ route('ticket') }}">Buy Tickets Now</a>
                        			<h5>Starting in</h5>
                        			<!--Widget COUNT Down Start-->
                        			<ul class="kf_countdown countdown">
                        				<li>
                        					<span class="minutes">{{ date('Y', strtotime($next_Match->date)) }}</span>
                        					<p class="minutes_ref">Year</p>
                        				</li>
                        				<li>
                        					<span class="hours">{{ date('m', strtotime($next_Match->date)) }}</span>
                        					<p class="hours_ref">Month</p>
                        				</li>
                        				<li>
                        					<span class="days">{{ date('d', strtotime($next_Match->date)) }}</span>
                        					<p class="days_ref">Date</p>
                        				</li>
                        			</ul>
                        			<!--Widget COUNT Down End-->
                        		</div>
                        		<!--Widget Next Match Dec End-->
                        	</div>
                        </div>
                        <!--Widget Next Match End-->
                        <!--Widget NewsLatter Start-->
                        
                        <!--Widget NewsLatter End-->
                        <!--Widget poll Start-->
                        <div class="widget widget_poll">
                        	<!--Heading 1 Start-->
                        	<h6 class="kf_hd1">
                        		<span>Trainee admission</span>
                        	</h6>
                        	<!--Heading 1 END-->
                        	<!--Pool Wrap Start-->
                        	<div class="kf_poll_dec">
                        		<h6>Do you want Jo admission In the Club?</h6>
                        		<!--Radio Wrap Start-->
                        		<div class="radio_style1">
                        			<label class="radio_dec">
                        				<span class="radio">
                        					<input name="foo" value="1" checked="" type="radio">
                        					<span class="radio-value" aria-hidden="true"></span>
                        				</span>
                        				<span>Trainee admission</span>
                        			</label>
                                    <!-- <label class="radio_dec">
                                        <span class="radio">
                                            <input name="foo" value="1" type="radio">
                                            <span class="radio-value" aria-hidden="true"></span>
                                        </span>
                                        <span>hristiano Ronaldo</span>
                                    </label>
                                    <label class="radio_dec">
                                        <span class="radio">
                                            <input name="foo" value="1" type="radio">
                                            <span class="radio-value" aria-hidden="true"></span>
                                        </span>
                                        <span>Van Ronnie</span>
                                    </label> -->
                                </div>
                                <!--Radio Wrap End-->
                                <input class="input-btn" type="button" value="admission">
                            </div>
                            <!--Pool Wrap End-->
                        </div>
                        <!--Widget poll End-->
                        <!--Widget Add 3 Strat-->
                        
                        <!--Widget Add 3 End-->
                    </aside>
                </div>
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->
    <!--ticker Wrap Start-->
    <div class="kf_ticker-wrap twitter_ticker">
    	<div class="container">
    		<div class="kf_ticker">
    			<span><i class="fa fa-twitter"></i></span>
    			<div class="kf_ticker_slider">
    				<ul class="ticker">
    					<li><p>Check out 'Be Clean - Cleaning Company, Maid Service & Laundry WordPress Theme' by kodeforest #themeforest <a href="#">https://t.co/nifHgDnXes</a></p></li>
    					<li><p>Laundry WordPress Theme' by kodeforest #themeforest <a href="#">https://t.co/nifHgDnXes</a></p></li>
    					<li><p>Check out 'Be Clean WordPress Theme' by kodeforest #themeforest <a href="#">https://t.co/nifHgDnXes</a></p></li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </div>
    <!--ticker Wrap End-->
    <!--Footer Wrap Start-->
    <!-- /.content -->

@endsection
