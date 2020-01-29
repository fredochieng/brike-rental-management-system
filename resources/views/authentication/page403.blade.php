@extends('layout.authentication')
@section('title', '403')


@section('content')

<div class="vertical-align-wrap">
	<div class="vertical-align-middle auth-main">
		<div class="auth-box">
            <div class="top">
                <img src="{{url('/')}}/assets/img/logo-white.svg" alt="Lucid">
            </div>
			<div class="card">
                <div class="header">
                    <h3>
                        <span class="clearfix title">
                            <span class="number left">Error</span> <span class="text">403 <br/>Forbiddon Error!</span>
                        </span>
                    </h3>
                </div>
                <div class="body">
                    <p>You don't have permission to access / on this server.</p>
                    <div class="margin-top-30">
                        <a href="javascript:history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> <span>Go Back</span></a>
                        <a href="{{route('dashboard.analytical')}}" class="btn btn-primary"><i class="fa fa-home"></i> <span>Home</span></a>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>

@stop