<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ asset('assets/img/user.png') }}" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>
                        fredrick</strong>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="{{route('pages.profile1')}}"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="{{route('app.inbox')}}"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('authentication.login')}}"><i class="icon-power"></i>Logout</a></li>
                    </ul>
            </div>
            <hr>
            <ul class="row list-unstyled">
                <li class="col-4">
                    <small>Sales</small>
                    <h6>456</h6>
                </li>
                <li class="col-4">
                    <small>Order</small>
                    <h6>1350</h6>
                </li>
                <li class="col-4">
                    <small>Revenue</small>
                    <h6>$2.13B</h6>
                </li>
            </ul>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a>
            </li>
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
                            <a href="#Dashboard" class="has-arrow"><i class="icon-home"></i><span>Dashboard</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'analytical' ? 'active' : null }}"><a
                                        href="{{route('dashboard.analytical')}}">Analytical</a></li>
                                <li class="{{ Request::segment(2) === 'demographic' ? 'active' : null }}"><a
                                        href="{{route('dashboard.demographic')}}">Demographic</a></li>
                                <li class="{{ Request::segment(2) === 'hospital' ? 'active' : null }}"><a
                                        href="{{route('dashboard.hospital')}}">Hospital</a></li>
                                <li class="{{ Request::segment(2) === 'university' ? 'active' : null }}"><a
                                        href="{{route('dashboard.university')}}">University</a></li>
                                <li class="{{ Request::segment(2) === 'real-estate' ? 'active' : null }}"><a
                                        href="{{route('dashboard.real-estate')}}">Real Estate</a></li>
                                <li class="{{ Request::segment(2) === 'project' ? 'active' : null }}"><a
                                        href="{{route('dashboard.project')}}">Project</a></li>
                                <li class="{{ Request::segment(2) === 'bitcoin' ? 'active' : null }}"><a
                                        href="{{route('dashboard.bitcoin')}}">Bitcoin</a></li>
                                <li class="{{ Request::segment(2) === 'ecommerce' ? 'active' : null }}"><a
                                        href="{{route('dashboard.ecommerce')}}">eCommerce</a></li>
                                <li class="{{ Request::segment(2) === 'iot' ? 'active' : null }}"><a
                                        href="{{route('dashboard.iot')}}">IoT</a></li>
                            </ul>
                        </li>
                        {{-- <li class="{{ Request::segment(1) === 'app' ? 'active' : null }}">
                        <a href="#App" class="has-arrow"><i class="icon-grid"></i> <span>App</span></a>
                        <ul>
                            <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a
                                    href="{{route('app.inbox')}}">Inbox</a></li>
                            <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a
                                    href="{{route('app.chat')}}">Chat</a></li>
                            <li class="{{ Request::segment(2) === 'calendar' ? 'active' : null }}"><a
                                    href="{{route('app.calendar')}}">Calendar</a></li>
                            <li class="{{ Request::segment(2) === 'contact-list' ? 'active' : null }}"><a
                                    href="{{route('app.contact-list')}}">Contact list</a></li>
                            <li class="{{ Request::segment(2) === 'contact-card' ? 'active' : null }}"><a
                                    href="{{route('app.contact-card')}}">Contact Card <span
                                        class="badge badge-warning float-right">New</span></a></li>
                            <li class="{{ Request::segment(2) === 'taskboard' ? 'active' : null }}"><a
                                    href="{{route('app.taskboard')}}">Taskboard</a></li>
                        </ul>
                        </li> --}}

                        {{-- Start new side bar --}}
                        <li class="{{ Request::segment(1) === 'property' ? 'active' : null }}">
                            <a href="#Property" class="has-arrow"><i class="icon-home"></i><span>Property</span></a>
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
                            {{-- <ul>
                                <li class="{{ Request::segment(2) === 'rooms-create' ? 'active' : null }}"><a
                                href="{{route('rooms.rooms-create')}}">Add
                                Room</a>
                        </li>
                    </ul> --}}
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
                    <li class="{{ Request::segment(1) === 'tenants' ? 'active' : null }}">
                        <a href="#Rooms" class="has-arrow"><i class="icon-users"></i><span>Bookings</span></a>
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
                        <a href="#Rooms" class="has-arrow"><i class="icon-users"></i><span>Payments</span></a>
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
                        <a href="#Rooms" class="has-arrow"><i class="icon-users"></i><span>Expenses</span></a>
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
                        <a href="#Rooms" class="has-arrow"><i class="icon-users"></i><span>User
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
                        <a href="#Rooms" class="has-arrow"><i class="icon-users"></i><span>Reports</span></a>
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
                        <a href="#Rooms" class="has-arrow"><i class="icon-users"></i><span>Settings</span></a>
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

                    <!-- End new sidebar -->
                    {{-- <li class="{{ Request::segment(1) === 'file-manager' ? 'active' : null }}">
                    <a href="#FileManager" class="has-arrow"><i class="icon-folder"></i> <span>File
                            Manager</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a
                                href="{{route('file-manager.dashboard')}}">Dashboard</a></li>
                        <li class="{{ Request::segment(2) === 'documents' ? 'active' : null }}"><a
                                href="{{route('file-manager.documents')}}">Documents</a></li>
                        <li class="{{ Request::segment(2) === 'media' ? 'active' : null }}"><a
                                href="{{route('file-manager.media')}}">Media</a></li>
                        <li class="{{ Request::segment(2) === 'image' ? 'active' : null }}"><a
                                href="{{route('file-manager.image')}}">Images</a></li>
                    </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'blog' ? 'active' : null }}">
                        <a href="#Blog" class="has-arrow"><i class="icon-globe"></i> <span>Blog</span></a>
                        <ul>
                            <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a
                                    href="{{route('blog.dashboard')}}">Dashboard</a></li>
                            <li class="{{ Request::segment(2) === 'new-post' ? 'active' : null }}"><a
                                    href="{{route('blog.new-post')}}">New Post</a></li>
                            <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a
                                    href="{{route('blog.list')}}">Blog List</a></li>
                            <li class="{{ Request::segment(2) === 'detail' ? 'active' : null }}"><a
                                    href="{{route('blog.detail')}}">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'ui-elements' ? 'active' : null }}">
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i> <span>UI
                                Elements</span></a>
                        <ul>
                            <li class="{{ Request::segment(2) === 'typography' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.typography')}}">Typography</a></li>
                            <li class="{{ Request::segment(2) === 'tabs' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.tabs')}}">Tabs</a></li>
                            <li class="{{ Request::segment(2) === 'buttons' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.buttons')}}">Buttons</a></li>
                            <li class="{{ Request::segment(2) === 'bootstrap' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.bootstrap')}}">Bootstrap UI</a></li>
                            <li class="{{ Request::segment(2) === 'icons' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.icons')}}">Icons</a></li>
                            <li class="{{ Request::segment(2) === 'notifications' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.notifications')}}">Notifications</a></li>
                            <li class="{{ Request::segment(2) === 'colors' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.colors')}}">Colors</a></li>
                            <li class="{{ Request::segment(2) === 'dialogs' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.dialogs')}}">Dialogs</a></li>
                            <li class="{{ Request::segment(2) === 'list-group' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.list-group')}}">List Group</a></li>
                            <li class="{{ Request::segment(2) === 'media-object' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.media-object')}}">Media Object</a></li>
                            <li class="{{ Request::segment(2) === 'modals' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.modals')}}">Modals</a></li>
                            <li class="{{ Request::segment(2) === 'nestable' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.nestable')}}">Nestable</a></li>
                            <li class="{{ Request::segment(2) === 'progress-bars' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.progress-bars')}}">Progress Bars</a></li>
                            <li class="{{ Request::segment(2) === 'range-sliders' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.range-sliders')}}">Range Sliders</a></li>
                            <li class="{{ Request::segment(2) === 'treeview' ? 'active' : null }}"><a
                                    href="{{route('ui-elements.treeview')}}">Treeview</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'widgets' ? 'active' : null }}">
                        <a href="#Widgets" class="has-arrow"><i class="icon-puzzle"></i> <span>Widgets</span></a>
                        <ul>
                            <li class="{{ Request::segment(2) === 'statistics' ? 'active' : null }}"><a
                                    href="{{route('widgets.statistics')}}">Statistics</a></li>
                            <li class="{{ Request::segment(2) === 'data' ? 'active' : null }}"><a
                                    href="{{route('widgets.data')}}">Data</a></li>
                            <li class="{{ Request::segment(2) === 'chart' ? 'active' : null }}"><a
                                    href="{{route('widgets.chart')}}">Chart</a></li>
                            <li class="{{ Request::segment(2) === 'weather' ? 'active' : null }}"><a
                                    href="{{route('widgets.weather')}}">Weather</a></li>
                            <li class="{{ Request::segment(2) === 'social' ? 'active' : null }}"><a
                                    href="{{route('widgets.social')}}">Social</a></li>
                            <li class="{{ Request::segment(2) === 'blog' ? 'active' : null }}"><a
                                    href="{{route('widgets.blog')}}">Blog</a></li>
                            <li class="{{ Request::segment(2) === 'ecommerce' ? 'active' : null }}"><a
                                    href="{{route('widgets.ecommerce')}}">eCommerce</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'authentication' ? 'active' : null }}">
                        <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i>
                            <span>Authentication</span></a>
                        <ul>
                            <li><a href="{{route('authentication.login')}}">Login</a></li>
                            <li><a href="{{route('authentication.register')}}">Register</a></li>
                            <li><a href="{{route('authentication.lockscreen')}}">Lockscreen</a></li>
                            <li><a href="{{route('authentication.forgot-password')}}">Forgot Password</a></li>
                            <li><a href="{{route('authentication.page404')}}">Page 404</a></li>
                            <li><a href="{{route('authentication.page403')}}">Page 403</a></li>
                            <li><a href="{{route('authentication.page500')}}">Page 500</a></li>
                            <li><a href="{{route('authentication.page503')}}">Page 503</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'pages' ? 'active' : null }}">
                        <a href="#Pages" class="has-arrow"><i class="icon-docs"></i> <span>Pages</span></a>
                        <ul>
                            <li class="{{ Request::segment(2) === 'blank-page' ? 'active' : null }}"><a
                                    href="{{route('pages.blank-page')}}">Blank Page</a> </li>
                            <li class="{{ Request::segment(2) === 'profile1' ? 'active' : null }}"><a
                                    href="{{route('pages.profile1')}}">Profile <span
                                        class="badge badge-default float-right">v1</span></a></li>
                            <li class="{{ Request::segment(2) === 'profile2' ? 'active' : null }}"><a
                                    href="{{route('pages.profile2')}}">Profile <span
                                        class="badge badge-warning float-right">v2</span></a></li>
                            <li class="{{ Request::segment(2) === 'image-gallery1' ? 'active' : null }}"><a
                                    href="{{route('pages.image-gallery1')}}">Image Gallery <span
                                        class="badge badge-default float-right">v1</span></a> </li>
                            <li class="{{ Request::segment(2) === 'image-gallery2' ? 'active' : null }}"><a
                                    href="{{route('pages.image-gallery2')}}">Image Gallery <span
                                        class="badge badge-warning float-right">v2</span></a> </li>
                            <li class="{{ Request::segment(2) === 'timeline' ? 'active' : null }}"><a
                                    href="{{route('pages.timeline')}}">Timeline</a></li>
                            <li class="{{ Request::segment(2) === 'horizontal-timeline' ? 'active' : null }}"><a
                                    href="{{route('pages.horizontal-timeline')}}">Horizontal Timeline</a></li>
                            <li class="{{ Request::segment(2) === 'pricing' ? 'active' : null }}"><a
                                    href="{{route('pages.pricing')}}">Pricing</a></li>
                            <li class="{{ Request::segment(2) === 'invoices1' ? 'active' : null }}"><a
                                    href="{{route('pages.invoices1')}}">Invoices</a></li>
                            <li class="{{ Request::segment(2) === 'invoices2' ? 'active' : null }}"><a
                                    href="{{route('pages.invoices2')}}">Invoices <span
                                        class="badge badge-warning float-right">v2</span></a></li>
                            <li class="{{ Request::segment(2) === 'search-results' ? 'active' : null }}"><a
                                    href="{{route('pages.search-results')}}">Search Results</a></li>
                            <li class="{{ Request::segment(2) === 'helper-classes' ? 'active' : null }}"><a
                                    href="{{route('pages.helper-classes')}}">Helper Classes</a></li>
                            <li class="{{ Request::segment(2) === 'teams-board' ? 'active' : null }}"><a
                                    href="{{route('pages.teams-board')}}">Teams Board</a></li>
                            <li class="{{ Request::segment(2) === 'project-list' ? 'active' : null }}"><a
                                    href="{{route('pages.project-list')}}">Projects List</a></li>
                            <li class="{{ Request::segment(2) === 'maintenance' ? 'active' : null }}"><a
                                    href="{{route('pages.maintenance')}}">Maintenance</a></li>
                            <li class="{{ Request::segment(2) === 'testimonials' ? 'active' : null }}"><a
                                    href="{{route('pages.testimonials')}}">Testimonials</a></li>
                            <li class="{{ Request::segment(2) === 'faq' ? 'active' : null }}"><a
                                    href="{{route('pages.faq')}}">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'forms' ? 'active' : null }}">
                        <a href="#forms" class="has-arrow"><i class="icon-pencil"></i> <span>Forms</span></a>
                        <ul>
                            <li class="{{ Request::segment(2) === 'validation' ? 'active' : null }}"><a
                                    href="{{route('forms.validation')}}">Form Validation</a></li>
                            <li class="{{ Request::segment(2) === 'advance-elements' ? 'active' : null }}"><a
                                    href="{{route('forms.advance-elements')}}">Advanced Elements</a></li>
                            <li class="{{ Request::segment(2) === 'basic-elements' ? 'active' : null }}"><a
                                    href="{{route('forms.basic-elements')}}">Basic Elements</a></li>
                            <li class="{{ Request::segment(2) === 'wizard' ? 'active' : null }}"><a
                                    href="{{route('forms.wizard')}}">Form Wizard</a></li>
                            <li class="{{ Request::segment(2) === 'dragdrop' ? 'active' : null }}"><a
                                    href="{{route('forms.dragdrop')}}">Drag &amp; Drop Upload</a></li>
                            <li class="{{ Request::segment(2) === 'cropping' ? 'active' : null }}"><a
                                    href="{{route('forms.cropping')}}">Image Cropping</a></li>
                            <li class="{{ Request::segment(2) === 'summernote' ? 'active' : null }}"><a
                                    href="{{route('forms.summernote')}}">Summernote</a></li>
                            <li class="{{ Request::segment(2) === 'editors' ? 'active' : null }}"><a
                                    href="{{route('forms.editors')}}">CKEditor</a></li>
                            <li class="{{ Request::segment(2) === 'markdown' ? 'active' : null }}"><a
                                    href="{{route('forms.markdown')}}">Markdown</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'table' ? 'active' : null }}">
                        <a href="#Tables" class="has-arrow"><i class="icon-tag"></i> <span>Tables</span></a>
                        <ul>
                            <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a
                                    href="{{route('table.basic')}}">Tables Example<span
                                        class="badge badge-info float-right">New</span></a> </li>
                            <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a
                                    href="{{route('table.normal')}}">Normal Tables</a> </li>
                            <li class="{{ Request::segment(2) === 'jquery-datatable' ? 'active' : null }}"><a
                                    href="{{route('table.jquery-datatable')}}">Jquery Datatables</a> </li>
                            <li class="{{ Request::segment(2) === 'editable' ? 'active' : null }}"><a
                                    href="{{route('table.editable')}}">Editable Tables</a> </li>
                            <li class="{{ Request::segment(2) === 'color' ? 'active' : null }}"><a
                                    href="{{route('table.color')}}">Tables Color</a> </li>
                            <li class="{{ Request::segment(2) === 'filter' ? 'active' : null }}"><a
                                    href="{{route('table.filter')}}">Table Filter <span
                                        class="badge badge-info float-right">New</span></a> </li>
                            <li class="{{ Request::segment(2) === 'dragger' ? 'active' : null }}"><a
                                    href="{{route('table.dragger')}}">Table dragger <span
                                        class="badge badge-info float-right">New</span></a> </li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'charts' ? 'active' : null }}">
                        <a href="#charts" class="has-arrow"><i class="icon-bar-chart"></i> <span>Charts</span></a>
                        <ul>
                            <li class="{{ Request::segment(2) === 'morris' ? 'active' : null }}"><a
                                    href="{{route('charts.morris')}}">Morris</a> </li>
                            <li class="{{ Request::segment(2) === 'flot' ? 'active' : null }}"><a
                                    href="{{route('charts.flot')}}">Flot</a> </li>
                            <li class="{{ Request::segment(2) === 'chartjs' ? 'active' : null }}"><a
                                    href="{{route('charts.chartjs')}}">ChartJS</a> </li>
                            <li class="{{ Request::segment(2) === 'jquery-knob' ? 'active' : null }}"><a
                                    href="{{route('charts.jquery-knob')}}">Jquery Knob</a> </li>
                            <li class="{{ Request::segment(2) === 'sparkline' ? 'active' : null }}"><a
                                    href="{{route('charts.sparkline')}}">Sparkline Chart</a></li>
                            <li class="{{ Request::segment(2) === 'peity' ? 'active' : null }}"><a
                                    href="{{route('charts.peity')}}">Peity</a></li>
                            <li class="{{ Request::segment(2) === 'c3' ? 'active' : null }}"><a
                                    href="{{route('charts.c3')}}">C3 Charts</a></li>
                            <li class="{{ Request::segment(2) === 'gauges' ? 'active' : null }}"><a
                                    href="{{route('charts.gauges')}}">Gauges</a></li>
                            <li class="{{ Request::segment(2) === 'echart' ? 'active' : null }}"><a
                                    href="{{route('charts.echart')}}">E Chart</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'map' ? 'active' : null }}">
                        <a href="#Maps" class="has-arrow"><i class="icon-map"></i> <span>Maps</span></a>
                        <ul>
                            <li class="{{ Request::segment(2) === 'yandex' ? 'active' : null }}"><a
                                    href="{{route('map.yandex')}}">Yandex Map</a></li>
                            <li class="{{ Request::segment(2) === 'jvector' ? 'active' : null }}"><a
                                    href="{{route('map.jvector')}}">jVector Map</a></li>
                        </ul>
                    </li> --}}
                    </ul>
                </nav>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="Chat">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('assets/img/xs/avatar4.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Chris Fox</span>
                                    <span class="message">Designer, Blogger</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('assets/img/xs/avatar5.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Joge Lucky</span>
                                    <span class="message">Java Developer</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('assets/img/xs/avatar2.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Isabella</span>
                                    <span class="message">CEO, Thememakker</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('assets/img/xs/avatar1.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Folisise Chosielie</span>
                                    <span class="message">Art director, Movie Cut</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('assets/img/xs/avatar3.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Alexander</span>
                                    <span class="message">Writter, Mag Editor</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
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
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
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