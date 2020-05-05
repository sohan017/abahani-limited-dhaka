@extends('website.layouts.index')
@section('title') Ticket Detail-Dhake Abahani  @endsection

@section('css') 

@endsection

@section('content')
    <!--Banner Map Wrap Start-->
    <div class="innner_banner">
        <div class="container">
            <h3>ticket detail</h3>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><span>ticket detail</span></li>
            </ul>
        </div>
    </div>
    <!--Inner Banner End-->
    <div class="kode_content_wrap">
        <section class="nextmatch_page">
            <div class="container">
                <div class="kf_ticketdetail">
                    <div class="ticketdetail_hd">
                        <div class="tkt_date">
                            <span><i class="fa fa-calendar-minus-o"></i>Saturday , 15th October, 2016</span>
                        </div>
                        <div class="tkt_date">
                            <span><i class="fa fa-street-view"></i>Soccer stadium, Dubai United Arab Emriates</span>
                        </div>
                    </div>
                    <ul class="kf_table2">
                        <li>
                            <div class="tkt_pkg">
                                <span>
                                    <i class="fa fa-ticket"></i>
                                    <strong>Standard Ticket</strong>
                                    <small>This ticket is for unlimited persons.</small>
                                </span>
                            </div> 
                            <div class="tkt_price">
                                <em>$199.00</em>
                            </div>
                            <div class="tkt_qty">
                                <label>total persons :</label>
                                <div class="numbers-row">
                                    <input class="kf_trigger" name="family" id="totalpersons" value="0" type="text">
                                </div>
                            </div>
                            <div class="tkt_btn">
                                <a href="#" class="input-btn ">Buy now</a>
                            </div>
                        </li>
                        <li>
                            <div class="tkt_pkg">
                                <span>
                                    <i class="fa fa-ticket"></i>
                                    <strong>Family Ticket</strong>
                                    <small>This ticket is only for family Maxium 4 person Are Allowed.</small>
                                </span>
                            </div> 
                            <div class="tkt_price">
                                <em>$299.00</em>
                            </div>
                            <div class="tkt_qty">
                                <label>total persons :</label>
                                <div class="numbers-row">
                                    <input class="kf_trigger" name="standard" id="totalpersons2" value="0" type="text">
                                </div>
                            </div>
                            <div class="tkt_btn">
                                <a href="#" class="input-btn ">Buy now</a>
                            </div>
                        </li>
                        <li>
                            <div class="tkt_pkg">
                                <span>
                                    <i class="fa fa-ticket"></i>
                                    <strong>Vip Ticket</strong>
                                    <small>This ticket is only  for a  single person .</small>
                                </span>
                            </div> 
                            <div class="tkt_price">
                                <em>$599.00</em>
                            </div>
                            <div class="tkt_qty">
                                <label>total persons :</label>
                                <div class="numbers-row">
                                    <input class="kf_trigger" name="vip" id="totalpersons4" value="0" type="text">
                                </div>
                            </div>
                            <div class="tkt_btn">
                                <a href="#" class="input-btn ">Buy now</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="nextmatch_wrap">
                    <div class="nextmatch_dec">
                        <h6>Laliga Semi Finals at city stadium</h6>
                        <span>Friday, 10th Sep, 2016, 16:00GMT</span>
                        <div class="match_teams">
                            <div class="pull-left">
                                <a href="#"><img src="images/team_logo11.png" alt=""></a>
                                <h5>Chicago Bulls</h5>
                            </div>
                            <span>vs</span>
                            <div class="pull-right">
                                <a href="#"><img src="images/team_logo12.png" alt=""></a>
                                <h5>Chicago Bulls</h5>
                            </div>
                        </div>
                        <strong class="input-btn"><i class="fa fa-clock-o"></i>2 : 45 P.M</strong>
                        <h5>Quarter final</h5>
                    </div>
                </div>
                <!--Kf Pagination Start-->
                <div class="kode-pagination text-center">
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers border_none" href="#">...</a>
                    <a class="page-numbers" href="#">18</a>
                    <a class="page-numbers" href="#">19</a>
                    <a class="page-numbers" href="#">20</a>
                </div>
                <!--Kf Pagination End-->
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
@endsection