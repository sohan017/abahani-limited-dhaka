@extends('layouts.auth')

@section('content')


    <div class="register-box">
        <div class="register-logo">
            <a href="{{ route('home')}}"><b>Abahani Limited </b>Dhaka</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">{{  __(ucwords($url) . ' Register') }}</p>

            <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                @csrf
                @if($url == "subscriber")

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter you name" name="name" value="{{ old('name') }}" required autocomplete="name">
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control @error('contact_num') is-invalid @enderror" placeholder="Enter Contact Number" name="contact_num" value="{{ old('contact_num') }}" required autocomplete="contact_num">
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>

                        @error('contact_num')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Enter Address" name="address" value="{{ old('address') }}" required autocomplete="address">
                        <span class="glyphicon glyphicon-home form-control-feedback"></span>

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                @elseif($url == "trainee")
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
                        <input type="text" class="form-control @error('contact_num') is-invalid @enderror" placeholder="Contact number" name="contact_num" value="{{ old('contact_num') }}" required autocomplete="contact_num" autofocus>
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>

                        @error('contact_num')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group has-feedback">
                        <select name="gender" id="gender" class="form-control @error('birth_certificet_number') is-invalid @enderror" required>
                            <option value="male" {{ old('gender') == "male" ? "selected" : "" }}>Male</option>
                            <option value="female" {{ old('gender') == "female" ? "selected" : "" }}>Female</option>
                            <option value="other" {{ old('gender') == "other" ? "selected" : "" }}>Other</option>
                        </select>
                        
                        <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>

                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="address" name="address" value="{{ old('address') }}" required autocomplete="address">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control @error('city') is-invalid @enderror" placeholder="city" name="city" value="{{ old('city') }}" required autocomplete="city">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control @error('state') is-invalid @enderror" placeholder="state" name="state" value="{{ old('state') }}" required autocomplete="state">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control @error('country') is-invalid @enderror" placeholder="Country" name="country" value="{{ old('country') }}" required autocomplete="country">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group has-feedback">
                        <input type="date" class="form-control @error('dob') is-invalid @enderror" placeholder="Date of Birth" name="dob" value="{{ old('dob') }}" required autocomplete="dob">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    

                @endif
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
