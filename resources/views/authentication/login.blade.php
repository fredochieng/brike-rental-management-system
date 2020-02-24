@extends('layout.authentication')
@section('title', 'Login')


@section('content')

<div class="vertical-align-wrap">
    <div class="vertical-align-middle auth-main">
        <div class="auth-box">
            <div class="top">
                {{-- <img src="{{url('/')}}/assets/img/logo-whites.svg" alt="Lucid"> --}}
                {{-- Brike Rental Managemnt System --}}
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Login to your account</p>
                </div>
                <div class="body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p>
                            {{ $errors->first('email') }}
                            {{ $errors->first('password') }}
                        </p>
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Email</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                class="form-control" id="email" name="email" value="{{ old('email') }}"
                                placeholder="Email">

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input type="password" class="form-control" id="signin-password" name="password"
                                placeholder="Password">
                        </div>
                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox">
                                <span>Remember me</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                        <div class="bottom">
                            {{-- <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a
                                    href="{{route('authentication.forgot-password')}}">Forgot password?</a></span> --}}
                            {{-- <span>Don't have an account? <a
                                    href="{{route('authentication.register')}}">Register</a></span> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop