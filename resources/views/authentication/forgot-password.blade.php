@extends('layout.authentication')
@section('title', 'Forget Password')

@section('content')

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
                    <p>Please enter your email address below to receive instructions for resetting password.</p>
                    <form class="form-auth-small" action="{{route('password.reset')}}" method="post">
                        {!! csrf_field() !!}
                        {{-- <form method="POST" action="{{ url('reset_password_with_token') }}"> --}}
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Email address">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">RESET PASSWORD</button>
                        <div class="bottom">
                            <span class="helper-text">Know your password? <a
                                    href="{{route('authentication.login')}}">Login</a></span>
                        </div>
                    </form>
                    {{-- {{ Form::close() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>

@stop