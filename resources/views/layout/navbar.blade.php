<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div>

        <div class="navbar-brand">
            <a href="{{route('dashboard')}}" class="img-responsive logo">
                {{-- <img src="{{ asset('assets/img/logo.svg') }}"
                alt="Rental Management" class="img-responsive logo"> --}}
                Rental Management
            </a>
        </div>

        <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="Search here..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>

            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i
                                class="icon-equalizer"></i></a>
                        <ul class="dropdown-menu user-menu menu-icon">
                            <li class="menu-heading">QUICK LINKS</li>
                            <li><a href="{{route('rent.payments')}}"><i class="icon-note"></i> <span>Payments</span></a>
                            </li>
                            <li><a href="{{route('assignments.room-assignments')}}"><i class="icon-equalizer"></i>
                                    <span>Room Assignments</span></a></li>

                            <li><a href="{{route('rent-payments.trackers')}}"><i class="icon-lock"></i> <span>Rent
                                        Payment
                                        Trackers</span></a></li>
                            <li><a href="{{route('messages.sms-list')}}"><i class="icon-envelope"></i> <span>Bulk
                                        SMS</span></a>
                            </li>
                            <li><a href="{{route('messages.sms-list')}}"><i class="icon-user"></i> <span>Profile
                                    </span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ URL::route('logout') }}" class="icon-menu"><i class="icon-logout"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>