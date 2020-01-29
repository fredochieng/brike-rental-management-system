@extends('layout.master')
@section('title', 'Table Example')
@section('parentPageTitle', 'Table')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Basic Example 1</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table m-b-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Patients</th>
                                <th>Adress</th>
                                <th>START Date</th>
                                <th>END Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><span>John</span></td>
                                <td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
                                <td>Sept 13, 2017</td>
                                <td>Sept 16, 2017</td>
                                <td><span class="badge badge-success">Admit</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><span>Jack Bird</span></td>
                                <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                <td>Sept 13, 2017</td>
                                <td>Sept 22, 2017</td>
                                <td><span class="badge badge-default">Discharge</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><span>Dean Otto</span></td>
                                <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                <td>Sept 13, 2017</td>
                                <td>Sept 23, 2017</td>
                                <td><span class="badge badge-success">Admit</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><span>Jack Bird</span></td>
                                <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                <td>Sept 17, 2017</td>
                                <td>Sept 16, 2017</td>
                                <td><span class="badge badge-default">Discharge</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><span>Hughe L.</span></td>
                                <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                <td>Sept 18, 2017</td>
                                <td>Sept 18, 2017</td>
                                <td><span class="badge badge-success">Admit</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Basic Example 2</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0 c_list">
                        <thead>
                            <tr>
                                <th>
                                    <label class="fancy-checkbox">
                                        <input class="select-all" type="checkbox" name="checkbox">
                                        <span></span>
                                    </label>
                                </th>
                                <th>Name</th>                                    
                                <th>Phone</th>                                    
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                            <tr>
                                <td style="width: 50px;">
                                    <label class="fancy-checkbox">
                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img src="../assets/img/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">John Smith <span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-2583</span>
                                </td>                                   
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                </td>
                                <td>                                            
                                    <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="fancy-checkbox">
                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img src="../assets/img/xs/avatar3.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">Hossein Shams <span class="badge badge-info m-l-10 hidden-sm-down">Google</span></p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-5689</span>
                                </td>                                    
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="fancy-checkbox">
                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img src="../assets/img/xs/avatar9.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">Frank Camly</p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-9999</span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="fancy-checkbox">
                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <img src="../assets/img/xs/avatar10.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">Tim Hank<span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1212</span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Basic Example 3</h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-hover m-b-0">
                    <thead>
                        <tr>
                            <th>Media</th>
                            <th>Name</th>
                            <th>Spent</th>
                            <th>Change</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <i class="fa fa-facebook fa-2x"></i>
                            </td>
                            <td>
                                <h6 class="margin-0">Facebook Ads</h6>
                                <span>1.2k Likes, 418 Shares</span>
                            </td>
                            <td>
                                <h6 class="m-b-0">$ 402</h6>
                                <span class="text-muted">Spent</span>
                            </td>
                            <td class="text-right">
                                <div class="text-success">
                                    23 <i class="fa fa-long-arrow-up"></i>
                                </div>
                                <div class="text-muted">up</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-twitter fa-2x"></i>
                            </td>
                            <td>
                                <h6 class="margin-0">Twitter Ads</h6>
                                <span>1k Likes, 128 Shares</span>
                            </td>
                            <td>
                                <h6 class="m-b-0">$ 489</h6>
                                <span class="text-muted">Spent</span>
                            </td>
                            <td class="text-right">
                                <div class="text-danger">                                                    
                                    -9 <i class="fa fa-long-arrow-down"></i>
                                </div>
                                <div class="text-muted">down</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-instagram fa-2x"></i>
                            </td>
                            <td>
                                <h6 class="margin-0">Instagram Post</h6>
                                <span>1k Follows, 228 Likes</span>
                            </td>
                            <td>
                                <h6 class="mb-0">$ 718 </h6>
                                <span class="text-muted">Spent</span>
                            </td>
                            <td class="text-right">
                                <div class=" text-success">
                                    16 <i class="fa  fa-long-arrow-up"></i>
                                </div>
                                <div class="text-muted">up</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-linkedin fa-2x"></i>
                            </td>
                            <td>
                                <h6 class="margin-0">LinkedIn Post</h6>
                                <span>1k Follows, 228 Likes</span>
                            </td>
                            <td>
                                <h6 class="mb-0">$ 768</h6>
                                <span class="text-muted">Spent</span>
                            </td>
                            <td class="text-right">
                                <div class=" text-success">
                                    27 <i class="fa  fa-long-arrow-up"></i>
                                </div>
                                <div class="text-muted">up</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-google-plus-circle fa-2x"></i>
                            </td>
                            <td>
                                <h6 class="margin-0">Google +</h6>
                                <span>1k Follows, 228 Likes</span>
                            </td>
                            <td>
                                <h6 class="mb-0">$ 1768</h6>
                                <span class="text-muted">Spent</span>
                            </td>
                            <td class="text-right">
                                <div class=" text-success">
                                    27 <i class="fa fa-long-arrow-up"></i>
                                </div>
                                <div class="text-muted">up</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Basic Example 4</h2>
            </div>
            <div class="body table-responsive social_media_table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Media</th>
                            <th>Name</th>
                            <th>Like</th>
                            <th>Comments</th>
                            <th>Share</th>
                            <th>Members</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="social_icon linkedin"><i class="fa fa-linkedin"></i></span>
                            </td>
                            <td><span class="list-name">Linked In</span>
                                <span class="text-muted">Florida, United States</span>
                            </td>
                            <td>19K</td>
                            <td>14K</td>
                            <td>10K</td>
                            <td>
                                <span class="badge badge-success">2341</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="social_icon twitter-table"><i class="fa fa-twitter"></i></span>
                            </td>
                            <td><span class="list-name">Twitter</span>
                                <span class="text-muted">Arkansas, United States</span>
                            </td>
                            <td>7K</td>
                            <td>11K</td>
                            <td>21K</td>
                            <td>
                                <span class="badge badge-success">952</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="social_icon facebook"><i class="fa fa-facebook"></i></span>
                            </td>
                            <td><span class="list-name">Facebook</span>
                                <span class="text-muted">Illunois, United States</span>
                            </td>
                            <td>15K</td>
                            <td>18K</td>
                            <td>8K</td>
                            <td>
                                <span class="badge badge-success">6127</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="social_icon google"><i class="fa fa-google-plus"></i></span>
                            </td>
                            <td><span class="list-name">Google Plus</span>
                                <span class="text-muted">Arizona, United States</span>
                            </td>
                            <td>15K</td>
                            <td>18K</td>
                            <td>154</td>
                            <td>
                                <span class="badge badge-success">325</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="social_icon youtube"><i class="fa fa-youtube-play"></i></span>
                            </td>
                            <td><span class="list-name">YouTube</span>
                                <span class="text-muted">Alaska, United States</span>
                            </td>
                            <td>15K</td>
                            <td>18K</td>
                            <td>200</td>
                            <td>
                                <span class="badge badge-success">160</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Basic Example 5</h2>
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
                    <table class="table m-b-0 table-hover">
                        <thead>
                            <tr>                                    
                                <th>Application</th>
                                <th>Team</th>
                                <th>Change</th>
                                <th>Sales</th>                                    
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6>Alpino 4.1</h6>
                                    <span>WrapTheme To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/img/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/img/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/img/xs/avatar3.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#00c5dc"
                                    data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                                </td>
                                <td>11,200</td>
                                <td>$83</td>
                                <td><strong>$22,520</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Compass 2.0</h6>
                                    <span>WrapTheme To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/img/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/img/xs/avatar3.jpg" alt="Avatar"></li>                                                    
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#f4516c"
                                    data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                                </td>
                                <td>11,200</td>
                                <td>$66</td>
                                <td><strong>$13,205</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Nexa 1.1</h6>
                                    <span>WrapTheme To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/img/xs/avatar4.jpg" alt="Avatar"></li>                                                
                                        <li><img src="../assets/img/xs/avatar6.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#31db3d"
                                    data-fill-Color="transparent">7,3,2,1,5,4,6,8</div>
                                </td>
                                <td>12,080</td>
                                <td>$93</td>
                                <td><strong>$17,700</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Oreo 2.2</h6>
                                    <span>ThemeMakker To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/img/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/img/xs/avatar3.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/img/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/img/xs/avatar9.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#2d342e"
                                    data-fill-Color="transparent">3,1,2,5,4,6,2,3</div>
                                </td>
                                <td>18,200</td>
                                <td>$178</td>
                                <td><strong>$17,700</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Basic Example 6</h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-hover m-b-0">
                    <tbody>
                        <tr>
                            <th><i class="fa fa-circle text-success"></i></th>
                            <td>Twitter</td>
                            <td><span>862 Records</span></td>
                            <td>35% <i class="fa fa-caret-up "></i></td>
                            <td><span class="sparkbar">5,8,6,3,5,9,2</span></td>
                        </tr>
                        <tr>
                            <th><i class="fa fa-circle text-info"></i></th>
                            <td>Facebook</td>
                            <td><span>451 Records</span></td>
                            <td>15% <i class="fa fa-caret-up "></i></td>
                            <td><span class="sparkbar">8,2,1,5,-2,6,-4</span></td>
                        </tr>
                        <tr>
                            <th><i class="fa fa-circle text-warning"></i></th>
                            <td>Mailchimp</td>
                            <td><span>502 Records</span></td>
                            <td>20% <i class="fa fa-caret-down"></i></td>
                            <td><span class="sparkbar">2,3,3,-2,-8,4,8</span></td>
                        </tr>
                        <tr>
                            <th><i class="fa fa-circle text-danger"></i></th>
                            <td>Google</td>
                            <td><span>502 Records</span></td>
                            <td>20% <i class="fa fa-caret-up "></i></td>
                            <td><span class="sparkbar">5,5,5,6,3,2,1</span></td>
                        </tr>
                        <tr>
                            <th><i class="fa fa-circle "></i></th>
                            <td>Other</td>
                            <td><span>237 Records</span></td>
                            <td>10% <i class="fa fa-caret-down"></i></td>
                            <td><span class="sparkbar">5,8,6,3,5,9,2</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Basic Example 7</h2>
            </div>
            <div class="body table-responsive social_media_table">
                <table class="table table-hover m-b-0">
                    <tbody>
                        <tr>
                            <td>Twitter</td>
                            <td><span>862 Records</span></td>
                            <td><i class="icon-bubble text-info"><span class="m-l-5">241</span></i></td>
                            <td><i class="icon-like text-success"><span class="m-l-5">595</span></i></td>
                            <td style="width: 150px;">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td><span>451 Records</span></td>
                            <td><i class="icon-bubble text-info"><span class="m-l-5">540</span></i></td>
                            <td><i class="icon-like text-success"><span class="m-l-5">1K</span></i></td>
                            <td><div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>LinkedIn</td>
                            <td><span>502 Records</span></td>
                            <td><i class="icon-bubble text-info"><span class="m-l-5">102</span></i></td>
                            <td><i class="icon-like text-success"><span class="m-l-5">201</span></i></td>
                            <td><div class="progress progress-xs">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Google</td>
                            <td><span>502 Records</span></td>
                            <td><i class="icon-bubble text-info"><span class="m-l-5">21</span></i></td>
                            <td><i class="icon-like text-success"><span class="m-l-5">28</span></i></td>
                            <td><div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Other</td>
                            <td><span>237 Records</span></td>
                            <td><i class="icon-bubble text-info"><span class="m-l-5">9</span></i></td>
                            <td><i class="icon-like text-success"><span class="m-l-5">15</span></i></td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Basic Example 8</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table center-aligned-table">
                        <thead>
                        <tr>
                            <th>Order No</th>
                            <th>Product Name</th>
                            <th>Purchased On</th>
                            <th>Shipping Status</th>
                            <th>Payment Method</th>
                            <th>Payment Status</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Q01</td>
                            <td>Iphone 7</td>
                            <td>12 Jan 2018</td>
                            <td>Dispatched</td>
                            <td>Credit card</td>
                            <td><label class="badge">Approved</label></td>
                            <td><a href="javascript:void(0);" class="btn btn-success btn-sm">View Order</a></td>
                            <td><button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>Q02</td>
                            <td>Galaxy S8</td>
                            <td>18 Jan 2018</td>
                            <td>Dispatched</td>
                            <td>Internet banking</td>
                            <td><label class="badge">Pending</label></td>
                            <td><a href="javascript:void(0);" class="btn btn-success btn-sm">View Order</a></td>
                            <td><button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>Q03</td>
                            <td>Amazon Echo</td>
                            <td>22 Feb 2018</td>
                            <td>Dispatched</td>
                            <td>Credit card</td>
                            <td><label class="badge">Approved</label></td>
                            <td><a href="javascript:void(0);" class="btn btn-success btn-sm">View Order</a></td>
                            <td><button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>Q04</td>
                            <td>Google Pixel</td>
                            <td>22 Feb 2018</td>
                            <td>Dispatched</td>
                            <td>Cash on delivery</td>
                            <td><label class="badge">Rejected</label></td>
                            <td><a href="javascript:void(0);" class="btn btn-success btn-sm">View Order</a></td>
                            <td><button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>Q05</td>
                            <td>Mac Mini</td>
                            <td>8 March 2018</td>
                            <td>Dispatched</td>
                            <td>Debit card</td>
                            <td><label class="badge">Approved</label></td>
                            <td><a href="javascript:void(0);" class="btn btn-success btn-sm">View Order</a></td>
                            <td><button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@stop

@section('page-script')
    
    $('.sparkbar').sparkline('html', { type: 'bar' });

@stop