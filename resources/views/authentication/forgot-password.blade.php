@extends('layout.authentication')
@section('title', 'Forgot Password')

@section('content')

@include('layout.partials.messages')
<div class="vertical-align-wrap">
    <div class="vertical-align-middle auth-main">
        <div class="auth-box">
            <div class="top">
                <h3>Rentals Management System</h3>
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Recover my password</p>
                </div>
                <div class="body">
                    <p>Please enter your phone number to receive OTP to reset your password.</p>
                    <form class="form-auth-small" action="{{route('reset.password-otp')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="phone" required
                                placeholder="Phone Number">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Send Password Reset OTP</button>
                        <div class="bottom">
                            <span class="helper-text">Know your password? <a
                                    href="{{route('authentication.login')}}">Login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop