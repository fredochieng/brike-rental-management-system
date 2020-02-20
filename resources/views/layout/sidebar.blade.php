<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ asset('assets/img/user.png') }}" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?php $user = \Auth::user();                  			print_r($user->name);
                                                                                            		?></span></strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{route('pages.profile1')}}"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('authentication.login')}}"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <hr>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a>
            </li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i
                        class="icon-question"></i></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">

                        <li class="{{ Request::segment(1) === 'dashboard' ? 'active' : null }}">
                            <a href="{{route('dashboard')}}"><i class="icon-home"></i><span>
                                    Dashboard</span></a>
                        </li>

                        <li class="{{ Request::segment(1) === 'property' ? 'active' : null }}">
                            <a href="#Property" class="has-arrow"><i class="icon-list"></i><span>Property</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'property-list' ? 'active' : null }}"><a
                                        href="{{route('property.property-list')}}">Property
                                        Listing</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'property-create' ? 'active' : null }}"><a
                                        href="{{route('property.property-create')}}">Add
                                        Property</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'categories' ? 'active' : null }}"><a
                                        href="{{route('property.categories')}}">
                                        Property Categories</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'variations' ? 'active' : null }}"><a
                                        href="{{route('property.variations')}}">
                                        Property Variations</a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::segment(1) === 'rooms' ? 'active' : null }}">
                            <a href="#Rooms" class="has-arrow"><i class="icon-grid"></i><span>Rooms</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'rooms-list' ? 'active' : null }}"><a
                                        href="{{route('rooms.rooms-list')}}">
                                        Room Listing</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'room-adjustments' ? 'active' : null }}"><a
                                        href="{{route('rooms.room-adjustments')}}">
                                        Room Adjustments</a></li>
                            </ul>

                        </li>

                        <li class="{{ Request::segment(1) === 'tenants' ? 'active' : null }}">
                            <a href="#Rooms" class="has-arrow"><i class="icon-users"></i><span>Tenants</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-list' ? 'active' : null }}"><a
                                        href="{{route('tenants.tenants-list')}}">
                                        Tenant Listing</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-create' ? 'active' : null }}"><a
                                        href="{{route('tenants.tenants-create')}}">Add
                                        Tenant</a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::segment(2) === 'room-assignments' ? 'active' : null }}">
                            <a href="{{route('assignments.room-assignments')}}"><i class="icon-tag"></i><span>Room
                                    Assignments</span></a>
                        </li>

                        <li class="{{ Request::segment(1) === 'payments' ? 'active' : null }}">
                            <a href="#Rooms" class="has-arrow"><i class="fa fa-money"></i><span>Payments</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'payments' ? 'active' : null }}"><a
                                        href="{{route('rent.payments')}}">
                                        Payments</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'rent-tracker' ? 'active' : null }}">
                            <a href="#RentTracker" class="has-arrow"><i class="icon-screen-desktop"></i><span>Rent
                                    Payment
                                    Tracker</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'payments' ? 'active' : null }}"><a
                                        href="{{route('rent-payments.trackers')}}">
                                        All Rent Trackers</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'payments' ? 'active' : null }}"><a
                                        href="{{route('rent-payments.full-payments')}}">
                                        Full Payments</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-create' ? 'active' : null }}"><a
                                        href="{{route('rent-payments.partial-payments')}}">Partial
                                        Payments</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-create' ? 'active' : null }}"><a
                                        href="{{route('rent-payments.rent-arrears')}}">Rent
                                        Arrears</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'tenants' ? 'active' : null }}">
                            <a href="#Rooms" class="has-arrow"><i class="icon-credit-card"></i><span>Expenses</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-list' ? 'active' : null }}"><a
                                        href="{{route('tenants.tenants-list')}}">
                                        Tenant Listing</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-create' ? 'active' : null }}"><a
                                        href="{{route('tenants.tenants-create')}}">Add
                                        Tenant</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'tenants' ? 'active' : null }}">
                            <a href="#Rooms" class="has-arrow"><i class="icon-user-follow"></i><span>User
                                    Management</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-list' ? 'active' : null }}"><a
                                        href="{{route('tenants.tenants-list')}}">
                                        Tenant Listing</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-create' ? 'active' : null }}"><a
                                        href="{{route('tenants.tenants-create')}}">Add
                                        Tenant</a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::segment(1) === 'tenants' ? 'active' : null }}">
                            <a href="#Rooms" class="has-arrow"><i class="icon-bar-chart"></i><span>Reports</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-list' ? 'active' : null }}"><a
                                        href="{{route('tenants.tenants-list')}}">
                                        Tenant Listing</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-create' ? 'active' : null }}"><a
                                        href="{{route('tenants.tenants-create')}}">Add
                                        Tenant</a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::segment(1) === 'tenants-create' ? 'active' : null }}">
                            <a href="#Rooms" class="has-arrow"><i class="icon-settings"></i><span>Settings</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-list' ? 'active' : null }}"><a
                                        href="{{route('tenants.tenants-list')}}">
                                        Tenant Listing</a></li>
                            </ul>
                            <ul>
                                <li class="{{ Request::segment(2) === 'tenants-create' ? 'active' : null }}"><a
                                        href="{{route('tenants.tenants-create')}}">Add
                                        Tenant</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled">
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span>
                    </li>
                </ul>
                <hr>
                <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Report Panel Usag</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Email Redirect</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Notifications</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Auto Updates</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Location Permission</span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO PAY</li>
                    <li><a href="javascript:void(0);">MPESA Paybill</a></li>
                    <li><a href="javascript:void(0);">Paybill No-----> 43635433</a></li>
                    <li><a href="javascript:void(0);">Account No-----> Phone Number </a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                    <li class="menu-button m-t-30">
                        <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need
                            Help?</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>