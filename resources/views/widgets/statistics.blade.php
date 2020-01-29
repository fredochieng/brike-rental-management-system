@extends('layout.master')
@section('title', 'Widgets Statistics')
@section('parentPageTitle', 'Widgets')


@section('content')

<div class="row clearfix">

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card text-center bg-info">
            <div class="body">
                <div class="p-15 text-light">
                    <h3>521</h3>
                    <span>New items</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card text-center bg-secondary">
            <div class="body">
                <div class="p-15 text-light">
                    <h3>902</h3>
                    <span>Uploads</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card text-center bg-warning">
            <div class="body">
                <div class="p-15 text-light">
                    <h3>1,025</h3>
                    <span>Feeds</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card text-center bg-dark">
            <div class="body">
                <div class="p-15 text-light">
                    <h3>318</h3>
                    <span>Comments</span>
                </div>
            </div>
        </div>
    </div>  

</div>

<div class="row clearfix">

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card number-chart">
            <div class="body">
                <div class="number">
                    <h6>EARNINGS</h6>
                    <span>$22,500</span>
                </div>
                <small class="text-muted">19% compared to last week</small>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
            data-line-Width="1" data-line-Color="#f79647" data-fill-Color="#fac091">1,4,1,3,7,1</div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card number-chart">
            <div class="body">
                <div class="number">
                    <h6>SALES</h6>
                    <span>$500</span>
                </div>
                <small class="text-muted">19% compared to last week</small>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
            data-line-Width="1" data-line-Color="#604a7b" data-fill-Color="#a092b0">1,4,2,3,6,2</div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card number-chart">
            <div class="body">
                <div class="number">
                    <h6>VISITS</h6>
                    <span>$21,215</span>
                </div>
                <small class="text-muted">19% compared to last week</small>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
            data-line-Width="1" data-line-Color="#4aacc5" data-fill-Color="#92cddc">1,4,2,3,1,5</div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card number-chart">
            <div class="body">
                <div class="number">
                    <h6>LIKES</h6>
                    <span>$421,215</span>
                </div>
                <small class="text-muted">19% compared to last week</small>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
            data-line-Width="1" data-line-Color="#4f81bc" data-fill-Color="#95b3d7">1,3,5,1,4,2</div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card modal-open">
            <div class="body">
                <div class="number">
                    <h6><i class="fa fa-thumbs-o-up m-r-10"></i> Likes</h6>
                    <span>22,500</span>
                </div>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
            data-line-Width="1" data-line-Color="#62a6ef" data-fill-Color="#62a6ef">2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4</div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card modal-open">
            <div class="body">
                <div class="number">
                    <h6><i class="fa fa-comments-o m-r-10"></i>Comments</h6>
                    <span>500</span>
                </div>
            </div>
            <div class="sparkline" data-type="bar" data-width="97%" data-height="50px" data-bar-Width="5"
            data-bar-Spacing="6" data-bar-Color="#e66d7e">2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4</div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card modal-open">
            <div class="body">
                <div class="number">
                    <h6><i class="fa fa-share-alt m-r-10"></i>Share</h6>
                    <span>2,215</span>
                </div>
            </div>
            <div class="sparkline text-left" data-type="line" data-width="100%" data-height="50px" data-line-Width="2" data-line-Color="#23c596"
                    data-fill-Color="transparent">12,4,6,15,5,5,5,6,8,9,7,2,11,5,4,8,17,10,18,0,2,0,1,8,3,8,9,6</div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card modal-open">
            <div class="body">
                <div class="number">
                    <h6><i class="fa fa-eye m-r-10"></i>View</h6>
                    <span>421,215</span>
                </div>
            </div>
            <div class="sparkline" data-type="bar" data-width="97%" data-height="50px" data-bar-Width="4"
            data-bar-Spacing="1" data-bar-Color="#f7cf5c">10,18,0,2,0,1,8,3,8,9,6,3,2,5,1,4,2,3,1,5,4,7,8,2,3,12,4,6,15,5,5,5,6,8,9,7,2,11,5,4,8,17,10,18,0,2,0,1,8,3,8,9,6,3,2,5,1,4,2,3,1,5,4,7,8,2,3,12,4,6,15,5,5,5,6,8,9,7,2,11,5,4,8,17</div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-3 col-md-6">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                </div>
                <div class="content">
                    <div class="text">Population</div>
                    <div class="number">4,254</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-pie">30, 35, 25, 8</div>
                </div>
                <div class="content">
                    <div class="text">Usage</div>
                    <div class="number">98%</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                </div>
                <div class="content">
                    <div class="text">Page Views</div>
                    <div class="number">1,195</div>
                </div>
            </div>
        </div>
    </div> 

    <div class="col-lg-3 col-md-6">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                </div>
                <div class="content">
                    <div class="text">Growth</div>                            
                    <div class="number">$1,243</div>
                </div>
            </div>
        </div>
    </div>   

</div>

<div class="row clearfix">

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#00ced1">1,2,2,3,3,4,4,5,5,6,6,5,5,4,4,3,3,2,2,1</div>
                <h3 class="m-b-0">457 512</h3>
                <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#e4d354">1,2,2,3,3,4,4,5,5,6,6,5,5,4,4,3,3,2,2,1</div>
                <h3 class="m-b-0">236 512</h3>
                <small class="displayblock">13% Average <i class="zmdi zmdi-trending-down"></i></small>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#7cb5ec">1,2,3,4,5,4,3,2,1,2,3,4,5,6,7,8,7,6,5,4</div>
                <h3 class="m-b-0">236 512</h3>
                <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#f15c80">8,7,6,5,4,3,2,2,3,4,5,6,7,8,7,6,5,4</div>
                <h3 class="m-b-0">236 512</h3>
                <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-info"><i class="fa fa-building"></i> </div>
                <div class="content">
                    <div class="text">Properties</div>
                    <h5 class="number">53,251</h5>
                </div>
            </div>                        
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-warning"><i class="fa fa-area-chart"></i> </div>
                <div class="content">
                    <div class="text">Growth</div>
                    <h5 class="number">62%</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-danger"><i class="fa fa-shopping-cart"></i> </div>
                <div class="content">
                    <div class="text">Total Sales</div>
                    <h5 class="number">$3205</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-12">
        <div class="card top_counter">
            <div class="body">
                <div class="icon"><i class="fa fa-tag"></i> </div>
                <div class="content">
                    <div class="text">Rented</div>
                    <h5 class="number">3,217</h5>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
        <div class="card tasks_report">
            <div class="body">
                <input type="text" class="knob" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#26dad2" readonly>                        
                <h6 class="m-t-20">Satisfaction Rate</h6>
                <p class="displayblock m-b-0">47% Average <i class="zmdi zmdi-trending-up"></i></p>                        
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
        <div class="card tasks_report">
            <div class="body">
                <input type="text" class="knob" value="26" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                <h6 class="m-t-20">Project Panding</h6>
                <p class="displayblock m-b-0">13% Average <i class="zmdi zmdi-trending-down"></i></p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
        <div class="card tasks_report">
            <div class="body">
                <input type="text" class="knob" value="76" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                <h6 class="m-t-20">Productivity Goal</h6>
                <p class="displayblock m-b-0">75% Average <i class="zmdi zmdi-trending-up"></i></p>
                
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
        <div class="card tasks_report">
            <div class="body">
                <input type="text" class="knob" value="88" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#00adef" readonly>
                <h6 class="m-t-20">Total Revenue</h6>
                <p class="displayblock m-b-0">54% Average <i class="zmdi zmdi-trending-up"></i></p>
            </div>
        </div>
    </div>  

</div>

<div class="row clearfix">

    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
        <div class="card overflowhidden">
            <div class="body">
                <h2 class="m-t-0 m-b-5">501</h2>
                <p class="text-muted">Orders Received</p>
            </div>
            <span id="linecustom1">1,4,2,6,5,2,3,8,5,2</span>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
        <div class="card overflowhidden">
            <div class="body">
                <h2 class="m-t-0 m-b-5">2501</h2>
                <p class="text-muted ">Total Sales</p>                        
            </div>
            <span id="linecustom2">2,9,5,5,8,5,4,2,6</span>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
        <div class="card overflowhidden">
            <div class="body">
                <h2 class="m-t-0 m-b-5">6051</h2>
                <p class="text-muted">Total Profit</p>                        
            </div>
            <span id="linecustom3">1,5,3,6,6,3,6,8,4,2</span>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="m-t-0">Server</h5>
                        <small class="text-small">6% higher than last month</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">62%</h2>
                        <small class="info">of 1Tb</small>
                    </div>
                    <div class="col-12">
                        <div class="progress m-t-20">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="m-t-0">Traffic</h5>
                        <small class="text-small">4% higher than last month</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">78</h2>
                        <small class="info">of 1Tb</small>
                    </div>
                    <div class="col-12">
                        <div class="progress m-t-20">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="m-t-0">Email</h5>
                        <small class="text-small">Total Registered email</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">31</h2>
                        <small class="info">of 100</small>
                    </div>
                    <div class="col-12">
                        <div class="progress m-t-20" >
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="m-t-0">Domians</h5>
                        <small class="text-small">Total registered Domain</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">2</h2>
                        <small class="info">of 10</small>
                    </div>
                    <div class="col-12">
                        <div class="progress m-t-20">
                        <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card text-center">
            <div class="body">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="body">
                            <i class="fa fa-eye fa-2x"></i>
                            <h4>2,365</h4>
                            <span>Post View</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="body">
                            <i class="fa fa-thumbs-o-up fa-2x"></i>
                            <h4>365</h4>
                            <span>Likes</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="body">
                            <i class="fa fa-comments fa-2x"></i>
                            <h4>65</h4>
                            <span>Comments</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="body">
                            <i class="fa fa-user fa-2x"></i>
                            <h4>2,055</h4>
                            <span>Profile Views</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop

@section('page-script')

    $('.knob').knob({
        draw: function() {
            // "tron" case
            if (this.$.data('skin') == 'tron') {

                var a = this.angle(this.cv) // Angle
                    ,
                    sa = this.startAngle // Previous start angle
                    ,
                    sat = this.startAngle // Start angle
                    ,
                    ea // Previous end angle
                    , eat = sat + a // End angle
                    ,
                    r = true;

                this.g.lineWidth = this.lineWidth;

                this.o.cursor &&
                    (sat = eat - 0.3) &&
                    (eat = eat + 0.3);

                if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor &&
                        (sa = ea - 0.3) &&
                        (ea = ea + 0.3);
                    this.g.beginPath();
                    this.g.strokeStyle = this.previousColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });

     $('#linecustom1').sparkline('html',{
        height: '55px',
        width: '100%',
        lineColor: '#a095e5',
        fillColor: '#a095e5',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#e2a8df',
        spotRadius: 0
    });

    $('#linecustom2').sparkline('html',{
        height: '55px',
        width: '100%',
        lineColor: '#75c3f2',
        fillColor: '#75c3f2',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#8dbfe0',
        spotRadius: 0
    });

    $('#linecustom3').sparkline('html',{	
        height: '55px',
        width: '100%',
        lineColor: '#fc7b92',
        fillColor: '#fc7b92',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#e0b89d',
        spotRadius: 0
    });

@stop