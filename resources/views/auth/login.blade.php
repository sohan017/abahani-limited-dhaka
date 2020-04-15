@extends('layouts.auth')

@section('content')


    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('home')}}"><b>Abahani Limited </b>Dhaka</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">{{ isset($url) ? ucwords($url) : "Admin"}} {{ __('Login') }}</p>

                @isset($url)
            <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                @else
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @endisset
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a> <br>
            @endif
            
            @if(isset($url) && ($url == "subscriber"))
                <a href="{{ route('register.subscriber') }}" class="text-center">Register a new membership</a>
            @elseif(isset($url) && ($url == "trainee"))
                <a href="{{ route('register.trainee') }}" class="text-center">Register a new membership</a>
            @endif

        </div>
        <!-- /.login-box-body -->
    </div>
@endsection
