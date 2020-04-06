@extends('layouts.auth')

@section('content')


    <div class="register-box">
        <div class="register-logo">
            <a href="{{ route('home')}}"><b>Admin</b>LTE</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">{{  __(ucwords($url) . ' Register') }}</p>

            <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                @csrf
                @if($url == "subscriber")

                    <div class="form-group has-feedback">
                        <input 
                            type="text" 
                            class="form-control @error('weight') is-invalid @enderror" 
                            placeholder="Weight" 
                            name="weight" 
                            value="{{ old('weight') }}" 
                            required 
                            autocomplete="weight">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        @error('weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                @elseif($url == "trainee")

                    <div class="form-group has-feedback">
                        <input 
                            type="text" 
                            class="form-control @error('weight') is-invalid @enderror" 
                            placeholder="Weight" 
                            name="weight" 
                            value="{{ old('weight') }}" 
                            required 
                            autocomplete="weight">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        @error('weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                @endif
                <div class="form-group has-feedback">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"  name="password" required autocomplete="new-password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required autocomplete="new-password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            
            @isset($url)
            <a href="{{ route('login') }}/{{ $url }}" class="text-center">I already have a membership</a>
            @else
            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
            @endisset
        </div>
        <!-- /.form-box -->
    </div>
@endsection
