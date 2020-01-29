@extends('layout.master')
@section('title', 'University')
@section('parentPageTitle', 'Dashboard')


@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-info"><i class="fa fa-user"></i> </div>
                <div class="content">
                    <div class="text">Total Student</div>
                    <h5 class="number">530</h5>
                </div>
                <hr>
                <div class="icon text-warning"><i class="fa fa-user-circle"></i> </div>
                <div class="content">
                    <div class="text">Total Teacher</div>
                    <h5 class="number">14</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-warning"><i class="fa fa-tags"></i> </div>
                <div class="content">
                    <div class="text">Department</div>
                    <h5 class="number">7</h5>
                </div>
                <hr>
                <div class="icon"><i class="fa fa-graduation-cap"></i> </div>
                <div class="content">
                    <div class="text">Courses</div>
                    <h5 class="number">35</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-danger"><i class="fa fa-credit-card"></i> </div>
                <div class="content">
                    <div class="text">Expense</div>
                    <h5 class="number">$3205</h5>
                </div>
                <hr>
                <div class="icon text-success"><i class="fa fa-university"></i> </div>
                <div class="content">
                    <div class="text">Income</div>
                    <h5 class="number">$35,325</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon"><i class="fa fa-map-pin"></i> </div>
                <div class="content">
                    <div class="text">Our Center</div>
                    <h5 class="number">28</h5>
                </div>
                <hr>
                <div class="icon text-success"><i class="fa fa-smile-o"></i> </div>
                <div class="content">
                    <div class="text">Happy Clients</div>
                    <h5 class="number">528</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>University Survey</h2>
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
                <div class="row text-center">
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$231</h4>
                        <p class="text-muted margin-0"> Today's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$1,254</h4>
                        <p class="text-muted margin-0">This Week's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$3,298</h4>
                        <p class="text-muted margin-0">This Month's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$9,208</h4>
                        <p class="text-muted margin-0">This Year's</p>
                    </div>
                </div>
                <div id="m_bar_chart" class="graph m-t-20"></div>                            
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="header">
                <h2>Income Analysis<small>8% High then last month</small></h2>
            </div>
            <div class="body">                            
                <div class="sparkline-pie text-center">6,4,8</div>
                <div class="stats-report">
                    <div class="stat-item">
                    <h5>Science</h5>
                    <b class="col-black">84.60%</b></div>
                    <div class="stat-item">
                    <h5>Commerce</h5>
                    <b class="col-black">15.40%</b></div>
                    <div class="stat-item">
                    <h5>Atrs</h5>
                    <b class="col-black">5.10%</b></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="header">
                <h2>Science Department<small >All Earnings are in million $</small></h2>
                
            </div>
            <div class="body">
                <div class="sparkline" data-type="line" data-spot-Radius="2" data-highlight-Spot-Color="#445771" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="#445771" data-max-Spot-Color="#445771" data-spot-Color="#445771"
                    data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="#ffcd55"
                    data-fill-Color="#ffcd55"> 2,5,3,2,1,7,6,0,2</div>
                <div class="stats-report">
                    <div class="stat-item">
                    <h5>Overall</h5>
                    <b class="col-indigo">7,000</b></div>
                    <div class="stat-item">
                    <h5>2016</h5>
                    <b class="col-indigo">2,000</b></div>
                    <div class="stat-item">
                    <h5>2017</h5>
                    <b class="col-indigo">5,000</b></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="header">
                <h2>Commerce Department<small>All Earnings are in million $</small></h2>                            
            </div>
            <div class="body">                           
                <div class="sparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-Width="7" data-bar-Spacing="10" data-bar-Color="#02b5b2">2,8,3,4,6,2,3,8,7,6,5,2,1,8</div>
                <div class="stats-report">
                    <div class="stat-item">
                    <h5>Overall</h5>
                    <b class="col-indigo">3,200</b></div>
                    <div class="stat-item">
                    <h5>2016</h5>
                    <b class="col-indigo">1,200</b></div>
                    <div class="stat-item">
                    <h5>2017</h5>
                    <b class="col-indigo">2,000</b></div>
                </div>
            </div>
        </div>
    </div>                            
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>New Admission List</h2>
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
            <div class="table-responsive">
                <table class="table table-hover m-b-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Number</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="list-name">OU 00456</span></td>
                            <td>Joseph</td>
                            <td>25</td>
                            <td>70 Bowman St. South Windsor, CT 06074</td>
                            <td>404-447-6013</td>
                            <td><span class="badge badge-primary">MCA</span></td>
                        </tr>
                        <tr>
                            <td><span class="list-name">KU 00789</span></td>
                            <td>Cameron</td>
                            <td>27</td>
                            <td>123 6th St. Melbourne, FL 32904</td>
                            <td>404-447-4569</td>
                            <td><span class="badge badge-warning">Medical</span></td>
                        </tr>
                        <tr>
                            <td><span class="list-name">KU 00987</span></td>
                            <td>Alex</td>
                            <td>23</td>
                            <td>123 6th St. Melbourne, FL 32904</td>
                            <td>404-447-7412</td>
                            <td><span class="badge badge-info">M.COM</span></td>
                        </tr>
                        <tr>
                            <td><span class="list-name">OU 00951</span></td>
                            <td>James</td>
                            <td>23</td>
                            <td>44 Shirley Ave. West Chicago, IL 60185</td>
                            <td>404-447-2589</td>
                            <td><span class="badge badge-default">MBA</span></td>
                        </tr>
                        <tr>
                            <td><span class="list-name">OU 00456</span></td>
                            <td>Joseph</td>
                            <td>25</td>
                            <td>70 Bowman St. South Windsor, CT 06074</td>
                            <td>404-447-6013</td>
                            <td><span class="badge badge-primary">MCA</span></td>
                        </tr>
                        <tr>
                            <td><span class="list-name">OU 00953</span></td>
                            <td>charlie</td>
                            <td>21</td>
                            <td>123 6th St. Melbourne, FL 32904</td>
                            <td>404-447-9632</td>										
                            <td><span class="badge badge-success">BBA</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>           

<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob2" value="66" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#4CAF50" readonly>                        
                        <h6 class="m-t-10">Satisfaction Rate</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob2" value="26" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                        <h6 class="m-t-10">Admission in Commerce</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob2" value="76" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                        <h6 class="m-t-10">Admission in Science</h6>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-8">
        <div class="card visitors-map">
            <div class="header">
                <h2>Our Location</h2>
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
                <div class="row clearfix">
                    <div class="col-lg-4 col-sm-6 col-6">
                        <span><i class="m-r-5 fa fa-map-marker"></i> America</span>
                        <h4>53</h4>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-6">
                        <span><i class="m-r-5 fa fa-map-marker"></i> Canada</span>
                        <h4>23</h4>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-6">
                        <span><i class="m-r-5 fa fa-map-marker"></i> UK</span>
                        <h4>17</h4>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-6">
                        <span><i class="m-r-5 fa fa-map-marker"></i> India</span>
                        <h4>102</h4>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-6">
                        <span><i class="m-r-5 fa fa-map-marker"></i> Australia</span>
                        <h4>27</h4>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-6">
                        <span><i class="m-r-5 fa fa-map-marker"></i> Other</span>
                        <h4>13</h4>
                    </div>
                </div>
                <div id="world-map-markers2" style="height: 300px;" class="jvector-map m-t-20"></div>
            </div>
        </div>
    </div>                
</div>

<div class="row clearfix">
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Exam Toppers</h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>First Name</th>
                            <th>Charts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dean Otto</td>
                            <td>
                                <span class="sparkbar">5,8,6,3,-5,9,2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>K. Thornton</td>
                            <td>
                            <span class="sparkbar">10,-8,-9,3,5,8,5</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Kane D.</td>
                            <td>
                                <span class="sparkbar">7,5,9,3,5,2,5</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Jack Bird</td>
                            <td>
                                <span class="sparkbar">10,8,1,-3,-3,-8,7</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Hughe L.</td>
                            <td>
                                <span class="sparkbar">2,8,9,8,5,1,5</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Jack Bird</td>
                            <td>
                                <span class="sparkbar">1,8,2,3,9,8,5</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Hughe L.</td>
                            <td>
                                <span class="sparkbar">10,8,-1,-3,2,8,-5</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Timeline</h2>
                <ul class="header-dropdown">                            
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
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
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Attendance</h2>                            
            </div>
            <div class="body">
                <ul class=" list-unstyled basic-list">
                    <li>Mark Otto <span class="badge badge-primary">21%</span></li>
                    <li>Jacob Thornton <span class="badge-purple badge">50%</span></li>
                    <li>Jacob Thornton<span class="badge-success badge">90%</span></li>
                    <li>M. Arthur <span class="badge-info badge">75%</span></li>
                    <li>Jacob Thornton <span class="badge-warning badge">60%</span></li>
                    <li>M. Arthur <span class="badge-success badge">91%</span></li>
                    <li>Jacob Thornton<span class="badge-success badge">90%</span></li>
                    <li>M. Arthur <span class="badge-info badge">75%</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@stop
