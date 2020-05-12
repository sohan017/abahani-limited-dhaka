@extends('website.layouts.index')
@section('title') Ticket Detail-Dhake Abahani @endsection

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
                        <span><i class="fa fa-calendar-minus-o"></i>{{ Carbon\Carbon::parse($ticket->match->date)->format('l,  jS F, Y') }}</span>
                    </div>
                    <div class="tkt_date">
                        <span><i class="fa fa-street-view"></i>{{ $ticket->match->matchVanue->name }}</span>
                    </div>
                </div>
                <ul class="kf_table2">
                    @include('partial.notification')
                    <form action="{{ route('ticketbuy') }}" method="post" style="width: 160%">
                        @csrf
                        <input type="hidden" name="id" value="{{ $ticket->id }}">
                        <input type="hidden" name="type" value="normal">
                        <li>
                            <div class="tkt_pkg">
                                <span>
                                    <i class="fa fa-ticket"></i>
                                    <strong>Normal Ticket</strong>
                                    <small>This ticket is for unlimited persons.</small>
                                </span>
                            </div>
                            <div class="tkt_price">
                                <em>${{ $ticket->normal_price }}</em>
                            </div>
                            <div class="tkt_qty">
                                <label>total persons :</label>
                                <div class="numbers-row">
                                    <input class="kf_trigger" name="qty" id="totalpersons" value="1" type="text" min="1" max="5">
                                </div>
                            </div>
                            <div class="tkt_qty">
                                <input type="text" name="coupon">
                            </div>
                            <div class="tkt_btn">
                                <button type="submit" class="input-btn">Buy now</button>
                            </div>
                        </li>
                    </form>

                    <form action="{{ route('ticketbuy') }}" method="post" style="width: 160%">
                        @csrf
                        <input type="hidden" name="id" value="{{ $ticket->id }}">
                        <input type="hidden" name="type" value="classic">
                        <li>
                            <div class="tkt_pkg">
                                <span>
                                    <i class="fa fa-ticket"></i>
                                    <strong>Classic Ticket</strong>
                                    <small>This ticket is for unlimited persons.</small>
                                </span>
                            </div>
                            <div class="tkt_price">
                                <em>${{ $ticket->classic_price }}</em>
                            </div>
                            <div class="tkt_qty">
                                <label>total persons :</label>
                                <div class="numbers-row">
                                    <input class="kf_trigger" name="qty" id="totalpersons" value="1" type="text" min="1" max="4">
                                </div>
                            </div>
                            <div class="tkt_qty">
                                <input type="text" name="coupon">
                            </div>
                            <div class="tkt_btn">
                                <button type="submit" class="input-btn">Buy now</button>
                            </div>
                        </li>
                    </form>


                    <form action="{{ route('ticketbuy') }}" method="post" style="width: 160%">
                        @csrf
                        <input type="hidden" name="id" value="{{ $ticket->id }}">
                        <input type="hidden" name="type" value="vip">
                        <li>
                            <div class="tkt_pkg">
                                <span>
                                    <i class="fa fa-ticket"></i>
                                    <strong>Vip Ticket</strong>
                                    <small>This ticket is for unlimited persons.</small>
                                </span>
                            </div>
                            <div class="tkt_price">
                                <em>${{ $ticket->vip_price }}</em>
                            </div>
                            <div class="tkt_qty">
                                <label>total persons :</label>
                                <div class="numbers-row">
                                    <input class="kf_trigger" name="qty" id="totalpersons" value="1" type="text" min="1" max="2">
                                </div>
                            </div>
                            <div class="tkt_qty">
                                <input type="text" name="coupon">
                            </div>
                            <div class="tkt_btn">
                                <button type="submit" class="input-btn">Buy now</button>
                            </div>
                        </li>
                    </form>

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
                    <li>
                        <p>Check out 'Be Clean - Cleaning Company, Maid Service & Laundry WordPress Theme' by kodeforest #themeforest <a href="#">https://t.co/nifHgDnXes</a></p>
                    </li>
                    <li>
                        <p>Laundry WordPress Theme' by kodeforest #themeforest <a href="#">https://t.co/nifHgDnXes</a></p>
                    </li>
                    <li>
                        <p>Check out 'Be Clean WordPress Theme' by kodeforest #themeforest <a href="#">https://t.co/nifHgDnXes</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--ticker Wrap End-->
<!--Footer Wrap Start-->
@endsection