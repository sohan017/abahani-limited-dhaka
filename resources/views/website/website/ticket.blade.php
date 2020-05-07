@extends('website.layouts.index')
@section('title') Ticket-Dhake Abahani  @endsection

@section('css') 

@endsection

@section('content')
    <!--Banner Map Wrap Start-->
    <!--Header 2 Wrap End-->
    <!--Inner Banner Start-->
    <div class="innner_banner">
        <div class="container">
            <h3>ticket</h3>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">match</a></li>
                <li class="active"><span>ticket</span></li>
            </ul>
        </div>
    </div>
    <!--Inner Banner End-->
    <div class="kode_content_wrap">
        <section>
            <div class="container">
                <div class="kf_ticket2_wrap">
                    <ul>
@foreach(\App\Match::get() as $match)
<li>
    <!--Ticket 2 Start-->
    <div class="ticket_dec2">
        <span class="ticket_date">
            <b>{{ Carbon\Carbon::parse($match->date)->format('d') }}</b>
            <small>{{ Carbon\Carbon::parse($match->date)->format('M, Y') }}</small>
        </span>
        <div class="kf_opponents_wrap2">
            <div class="kf_opponents_wrap">
                <p>{{ $match->turnament->name }}</p>
                <div class="kf_opponents_dec">
                    <span><img src="{{ asset($match->team->logo )}}" alt=""></span>
                    <div class="text">
                        <h6><a href="#">{{ $match->team->name }}</a></h6>
                        <span class="icon_tag"><i class="fa fa-calendar-plus-o"></i>{{ Carbon\Carbon::parse($match->date)->format('d M, Y') }}, {{ $match->time }}</span>
                    </div>
                </div>
                <div class="kf_opponents_gols">
                    <h5>vs</h5>
                </div>
                <div class="kf_opponents_dec span_right">
                    <span><img src="{{ asset('website/extra-images/opponent3.png')}}" alt=""></span>
                    <div class="text">
                        <h6><a href="#">{{ $match->opnentClub->name }}</a></h6>
                        <span class="icon_tag">{{ $match->matchVanue->name }}<i class="fa fa-map-marker"></i></span>
                    </div>
                </div>
            </div>
            <div class="ticket_button">
                <a href="{{ route('ticketdetail',$match->id) }}" id="custom_by_ticket">Buy Ticket </a>
            </div>
        </div>
    </div>
    <!--Ticket 2 End-->
</li>
@endforeach
                    </ul>

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
@endsection