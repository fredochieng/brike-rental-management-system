@extends('layout.master')
@section('title', 'Widgets Data')
@section('parentPageTitle', 'Widgets')


@section('content')

<div class="row clearfix">

    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Feeds <small>Description text here...</small></h2>
            </div>
            <div class="body">                            
                <ul class="list-unstyled feeds_widget">
                    <li>
                        <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                        <div class="feeds-body">
                            <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                            <small>It will give a smart finishing to your site</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-user"></i></div>
                        <div class="feeds-body">
                            <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                            <small>I feel great! Thanks team</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                            <small>Your connection is not private</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-check"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                            <small>WE have fix all Design bug with Responsive</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                        <div class="feeds-body">
                            <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                            <small>You received a new oder from Tina.</small>
                        </div>
                    </li>                                   
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>Subscribe</h2>
            </div>
            <div class="body">
                <form>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Enter Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Enter Email" class="form-control">
                    </div>
                    <button class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>Followers</h2>
            </div>
            <div class="body">
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
                                <img class="media-object " src="../assets/img/xs/avatar4.jpg" alt="">
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
                                <img class="media-object " src="../assets/img/xs/avatar5.jpg" alt="">
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
                                <img class="media-object " src="../assets/img/xs/avatar2.jpg" alt="">
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
                                <img class="media-object " src="../assets/img/xs/avatar1.jpg" alt="">
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
                                <img class="media-object " src="../assets/img/xs/avatar3.jpg" alt="">
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
        </div>

        <div class="card">
            <div class="header">
                <h2>Resent Chat</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body text-center">
                <div class="cwidget-scroll">
                    <ul class="chat-widget m-r-5 clearfix">
                        <li class="left float-left">
                            <img src="../assets/img/xs/avatar2.jpg" class="rounded-circle" alt="">
                            <div class="chat-info">       
                                <span class="message">Hello, John<br>What is the update on Project X?</span>
                            </div>
                        </li>
                        <li class="right">
                            <img src="../assets/img/xs/avatar1.jpg" class="rounded-circle" alt="">
                            <div class="chat-info">
                                <span class="message">Hi, Alizee<br> It is almost completed. I will send you an email later today.</span>
                            </div>
                        </li>
                        <li class="left float-left">
                            <img src="../assets/img/xs/avatar2.jpg" class="rounded-circle" alt="">
                            <div class="chat-info">
                                <span class="message">That's great. Will catch you in evening.</span>
                            </div>
                        </li>
                        <li class="right">
                            <img src="../assets/img/xs/avatar1.jpg" class="rounded-circle" alt="">
                            <div class="chat-info">
                                <span class="message">Sure we'will have a blast today.</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="input-group p-t-15">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter text here...">
                </div>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>DS - Design Team <small>Ranking 2th</small></h2>                        
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <h6 class="m-b-15">Info about Design Team <span class="badge badge-success float-right">New</span></h6>                                
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <ul class="list-unstyled team-info m-t-20">
                    <li class="m-r-15"><small class="text-muted">Team</small></li>
                    <li><img src="../assets/img/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar3.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar4.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                </ul>
                <div class="progress progress-xs progress-transparent custom-color-blue">
                    <div class="progress-bar" data-transitiongoal="87"></div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <small>PROJECTS: 12</small>
                        <h6>BUDGET: 4,870 USD</h6>
                    </div>
                    <div class="col-5">
                        <div class="sparkline text-right m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#7460ee">2,5,8,3,5,7,1,6</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>Browser Stats</h2>
            </div>
            <div class="body">
                <table class="table m-b-0">
                    <tbody>
                        <tr>
                            <td>Google Chrome</td>
                            <td class="align-right"><span class="badge badge-info">40%</span></td>
                        </tr>
                        <tr>
                            <td>Mozila Firefox</td>
                            <td class="align-right"><span class="badge badge-danger">30%</span></td>
                        </tr>
                        <tr>
                            <td>Safari</td>
                            <td class="align-right"><span class="badge badge-default">15%</span></td>
                        </tr>
                        <tr>
                            <td>Internet Explorer</td>
                            <td class="align-right"><span class="badge badge-warning">15%</span></td>
                        </tr>                              
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>My Stats</h2>
            </div>
            <div class="body">
                <ul class=" list-unstyled basic-list">
                    <li><i class="icon-book-open m-r-5"></i> Active Projects <span class="badge badge-primary">21</span></li>
                    <li><i class="icon-list m-r-5"></i> Task Pending <span class="badge-purple badge">50</span></li>
                    <li><i class="fa fa-ticket m-r-5"></i> Support Tickets<span class="badge-success badge">9</span></li>
                    <li><i class="icon-tag m-r-5"></i> New Projects<span class="badge-info badge">7</span></li>
                </ul>
            </div>
        </div>
        
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Timeline</h2>
                <ul class="header-dropdown">
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="new_timeline">
                    <div class="header">
                        <div class="color-overlay">
                            <div class="day-number">8</div>
                            <div class="date-right">
                            <div class="day-name">Monday</div>
                            <div class="month">February 2018</div>
                            </div>
                        </div>                                
                    </div>
                    <ul>
                        <li>
                            <div class="bullet pink"></div>
                            <div class="time">11am</div>
                            <div class="desc">
                                <h3>Attendance</h3>
                                <h4>Computer Class</h4>
                            </div>
                        </li>
                        <li>
                            <div class="bullet green"></div>
                            <div class="time">12pm</div>
                            <div class="desc">
                                <h3>Design Team</h3>
                                <h4>Hangouts</h4>
                                <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                    <li><img src="http://via.placeholder.com/35x35" alt="Avatar"></li>
                                    <li><img src="http://via.placeholder.com/35x35" alt="Avatar"></li>
                                    <li><img src="http://via.placeholder.com/35x35" alt="Avatar"></li>
                                    <li><img src="http://via.placeholder.com/35x35" alt="Avatar"></li>                                            
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="bullet orange"></div>
                            <div class="time">1:30pm</div>
                            <div class="desc">
                                <h3>Lunch Break</h3>
                            </div>
                        </li>
                        <li>
                            <div class="bullet green"></div>
                            <div class="time">2pm</div>
                            <div class="desc">
                                <h3>Finish</h3>
                                <h4>Go to Home</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="list-group list-widget">
                    <a href="app-inbox.html" class="list-group-item">
                        <span class="badge badge-success">654</span>
                        <i class="fa fa-envelope text-muted"></i>Inbox</a>
                    <a href="javascript:void(0);" class="list-group-item">
                        <span class="badge badge-info">364</span>
                        <i class="fa fa-eye text-muted"></i> Profile visits</a>
                    <a href="javascript:void(0);" class="list-group-item">
                        <span class="badge badge-warning">12</span>
                        <i class="fa fa-phone text-muted"></i> Call</a>
                    <a href="javascript:void(0);" class="list-group-item">
                        <span class="badge badge-danger">54</span>
                        <i class="fa fa-comments-o text-muted"></i> Messages</a>
                    <a href="javascript:void(0);" class="list-group-item">
                        <span class="badge badge-warning">19</span>
                        <i class="fa fa-bookmark text-muted"></i> Bookmarks</a>
                    <a href="javascript:void(0);" class="list-group-item">
                        <span class="badge">56</span>
                        <i class="fa fa-bell text-muted"></i> Notifications</a>
                    <a href="javascript:void(0);" class="list-group-item">
                        <span class="badge badge-info">25</span>
                        <i class="fa fa-clock-o text-muted"></i> Watch</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Twitter Feed</h2>
            </div>
            <div class="body">
                <form>
                    <div class="form-group">
                        <textarea rows="4" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                    </div>
                    <button class="btn btn-primary">Tweet</button>
                    <a href="javascript:void(0);" class="float-right">13K users active</a>
                </form>
                <hr>
                <ul class="right_chat list-unstyled">
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">@Isabella <small class="float-right">1 hours ago</small></span>
                                    <span class="message">Contrary to popular belief, Lorem Ipsum is not simply random text</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">@Folisise Chosielie <small class="float-right">45 hours ago</small></span>
                                    <span class="message">There are many variations of passages of Lorem Ipsum available, but the majority</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">@Alexander <small class="float-right">1 day ago</small></span>
                                    <span class="message">It is a long established fact that a reader will be distracted</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>                        
                </ul>                            
            </div>
        </div>
        <div class="card pricing2">
            <div class="body">
                <div class="pricing-plan">
                    <img src="../assets/img/space-ship.png" alt="" class="pricing-img">
                    <h2 class="pricing-header">Ultima</h2>
                    <ul class="pricing-features">
                        <li>Responsive Design</li>
                        <li>Color Customization</li>
                        <li>HTML5 &amp; CSS3</li>
                        <li>Styled elements</li>
                    </ul>
                    <span class="pricing-price">$349</span>
                    <a href="javascript:void(0);" class="btn btn-outline-primary">Join Now</a>
                    </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12">

        <div class="card">
            <div class="header">
                <h2>Last comments</h2>
            </div>
            <div class="body">                           
                <ul class="right_chat list-unstyled">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Chris Fox <small class="float-right">Just now</small></span>
                                    <span class="message">Lorem ipsum Veniam aliquip culpa laboris minim tempor</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Joge Lucky <small class="float-right">38 minutes ago</small></span>
                                    <span class="message">Many desktop publishing packages and web page editors</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Isabella <small class="float-right">2 hours ago</small></span>
                                    <span class="message">Contrary to popular belief, Lorem Ipsum is not simply random text</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Folisise Chosielie <small class="float-right">32 hours ago</small></span>
                                    <span class="message">There are many variations of passages of Lorem Ipsum available, but the majority</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Alexander <small class="float-right">1 day ago</small></span>
                                    <span class="message">It is a long established fact that a reader will be distracted</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>                        
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>ToDo List <small>This Month task list</small></h2>
            </div>
            <div class="body todo_list">
                <ul class="list-unstyled mb-0">
                    <li>
                        <label class="fancy-checkbox mb-0">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Report Panel Usag</span>
                        </label>
                        <hr>
                    </li>
                    <li>
                        <label class="fancy-checkbox mb-0">
                            <input type="checkbox" name="checkbox">
                            <span>Report Panel Usag</span>
                        </label>
                        <hr>
                    </li>
                    <li>
                        <label class="fancy-checkbox mb-0">
                            <input type="checkbox" name="checkbox">
                            <span>New logo design for InfiniO</span>
                        </label>
                        <hr>
                    </li>
                    <li>
                        <label class="fancy-checkbox mb-0">
                            <input type="checkbox" name="checkbox">
                            <span>Design PSD files for InfiniO</span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h2>Referrals</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <ul class="list-unstyled list-referrals">
                    <li>
                        <p><span class="value">2301</span><span class="text-muted float-right">visits from Facebook</span></p>
                        <div class="progress progress-xs progress-transparent custom-color-blue">
                            <div class="progress-bar" data-transitiongoal="87"></div>
                        </div>
                    </li>
                    <li>
                        <p><span class="value">2107</span><span class="text-muted float-right">visits from Twitter</span></p>
                        <div class="progress progress-xs progress-transparent custom-color-purple">
                            <div class="progress-bar" data-transitiongoal="34"></div>
                        </div>
                    </li>                                
                    <li>
                        <p><span class="value">2308</span><span class="text-muted float-right">visits from Search</span></p>
                        <div class="progress progress-xs progress-transparent custom-color-yellow">
                            <div class="progress-bar" data-transitiongoal="54"></div>
                        </div>
                    </li>
                    <li>
                        <p><span class="value">1024</span><span class="text-muted float-right">visits from Affiliates</span></p>
                        <div class="progress progress-xs progress-transparent custom-color-green">
                            <div class="progress-bar" data-transitiongoal="67"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <ul class="pricing body">
                <li><big>Start</big></li>
                <li>Responsive Design</li>
                <li>Color Customization</li>
                <li>HTML5 &amp; CSS3</li>
                <li>Styled elements</li>
                <li>
                    <h3>$199</h3>
                    <span>per month</span>
                </li>
                <li><button class="btn btn-outline-secondary">Join Now</button></li>
            </ul>
        </div>

        <div class="card">
            <div class="header">
                <h2>Invoice</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-12">
                        <address>
                            <strong>ThemeMakker Inc.</strong> <small class="float-right">16/05/2018</small><br>
                            795 Folsom Ave, Suite 546<br>
                            San Francisco, CA 54656<br>
                            <abbr title="Phone">P:</abbr> (123) 456-34636
                        </address>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr><td></td>
                            <td></td>
                            <td><strong>$55</strong></td>
                        </tr></tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Simple Black Clock</td>
                                <td>$30</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Brone Candle</td>
                                <td>$25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12 align-right">
                        <button class="btn btn-warning"><i class="icon-printer"></i></button>
                        <button class="btn btn-primary">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@stop

@section('page-script')

    $('.progress .progress-bar').progressbar({
        display_text: 'none'
    });
    
@stop