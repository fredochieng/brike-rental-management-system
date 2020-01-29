@extends('layout.master')
@section('title', 'Social')
@section('parentPageTitle', 'Widgets')


@section('content')
<div class="row clearfix">

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>New Post</h2>
            </div>
            <div class="body">
                <div class="form-group">
                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                </div>
                <div class="align-right">
                    <button class="btn btn-warning"><i class="icon-paper-clip text-light"></i></button>
                    <button class="btn btn-warning"><i class="icon-camera text-light"></i></button>
                    <button class="btn btn-primary">Post</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <h5>Twitter</h5>
                <small>56% Increase</small>
                <hr>
                <input type="text" class="knob2" value="66" data-linecap="round" data-width="115" data-height="115" data-thickness="0.2" data-fgColor="#4CAF50" readonly>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <h5>Facebook</h5>
                <small>87% Increase</small>
                <hr>
                <input type="text" class="knob2" value="26" data-linecap="round" data-width="115" data-height="115" data-thickness="0.2" data-fgColor="#7b69ec" readonly>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-4 col-md-12">
        <div class="card member-card">
            <div class="header bg-info">
                <h4 class="m-t-10 text-light">Eliana Smith</h4>
            </div>
            <div class="member-img">
                <a href="javascript:void(0);"><img src="../assets/img/lg/avatar2.jpg" class="rounded-circle" alt="profile-image"></a>
            </div>
            <div class="body">
                <div class="col-12">
                    <ul class="social-links list-unstyled">
                        <li><a title="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                        <li><a title="twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                        <li><a title="instagram" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h5>418</h5>
                        <small>Followers</small>
                    </div>
                    <div class="col-4">
                        <h5>205</h5>
                        <small>Comments</small>
                    </div>
                    <div class="col-4">
                        <h5>656</h5>
                        <small>Tweets</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body w_user">
                <img class="rounded-circle" src="../assets/img/sm/avatar4.jpg" alt="">
                <div class="wid-u-info">
                    <h5>Fidel Tonn</h5>
                    <p class="text-muted m-b-0">123 6th St. Melbourne, <br>FL 32904</p>                            
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h5 class="m-b-0">270</h5>
                        <small>Followers</small>
                    </div>
                    <div class="col-4">
                        <h5 class="m-b-0">310</h5>
                        <small>Following</small>
                    </div>
                    <div class="col-4">
                        <h5 class="m-b-0">908</h5>
                        <small>Liks</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="carousel slide google w_feed" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <i class="fa fa-google-plus fa-2x"></i>
                        <p>18th Feb</p>
                        <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form WrapTheme</i></div>
                    </div>
                    <div class="carousel-item">
                        <i class="fa fa-google-plus fa-2x"></i>
                        <p>28th Mar</p>
                        <h4>Now Get <span>50% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form ThemeMakker</i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="card overflowhidden">
            <div class="body top_counter bg-success">
                <div class="icon bg-transparent">
                    <img src="../assets/img/xs/avatar2.jpg" class="rounded-circle" alt="">
                </div>
                <div class="content text-light">
                    <div>Team Leader</div>
                    <h6>Maryam Amiri</h6>
                </div>
            </div>
            <div class="body">
                <div class="list-group list-widget">
                    <a href="javascript:void(0);" class="list-group-item">
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
                <ul class="right_chat list-unstyled mb-0">
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
                            <div class="media mb-0">
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
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="card w_social2 overflowhidden">
                <div class="pw_img">
                <img class="img-fluid" src="../assets/img/auth_bg.jpg" alt="About the image">
            </div>
            <div class="pw_content">
                <div class="pw_header top_counter">
                    <div class="icon bg-transparent">
                        <img src="../assets/img/xs/avatar5.jpg" class="rounded-circle" alt="">
                    </div>
                    <div class="content">
                        <div>Designer</div>
                        <h6>@Maryam Amiri</h6>
                    </div>
                </div>
                <div class="pw_meta">
                    <div class="row">
                        <div class="col-4">
                            <h5>18K</h5>
                            <small>Followers</small>
                        </div>
                        <div class="col-4">
                            <h5>532</h5>
                            <small>Following</small>
                        </div>
                        <div class="col-4">
                            <h5>656</h5>
                            <small>Tweets</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="carousel slide twitter w_feed" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <i class="fa fa-twitter fa-2x"></i>
                        <p>23th Feb</p>
                        <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form ThemeMakker</i></div>
                    </div>
                    <div class="carousel-item">
                        <i class="fa fa-twitter fa-2x"></i>
                        <p>25th Jan</p>
                        <h4>Now Get <span>50% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form WrapTheme</i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="carousel slide facebook w_feed" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <i class="fa fa-facebook fa-2x"></i>
                        <p>20th Jan</p>
                        <h4>Now Get <span>50% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form Theme</i></div>
                    </div>
                    <div class="carousel-item">
                        <i class="fa fa-facebook fa-2x"></i>
                        <p>23th Feb</p>
                        <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form Theme</i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-md-12 col-lg-8">
        <div class="card">
            <div class="header">
                <h2>Social Media</h2>                            
            </div>
            <div class="body">
                <div class="table-responsive social_media_table">
                    <table class="table table-hover">
                        <thead class="thead-dark">
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
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Followers</h2>
            </div>
            <div class="body">                            
                <ul class="right_chat w_followers list-unstyled mb-0">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">@Chris Fox</span>
                                    <span class="message">Designer, Blogger</span>
                                    <span class="badge badge-outline status"></span>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">@Joge Lucky</span>
                                    <span class="message">Java Developer</span>
                                    <span class="badge badge-outline status"></span>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">@Isabella</span>
                                    <span class="message">CEO, Thememakker</span>
                                    <span class="badge badge-outline status"></span>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">@Folisise Chosielie</span>
                                    <span class="message">Art director, Movie Cut</span>
                                    <span class="badge badge-outline status"></span>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">@Alexander</span>
                                    <span class="message">Writter, Mag Editor</span>
                                    <span class="badge badge-outline status"></span>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar10.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">@Folisise Chosielie</span>
                                    <span class="message">Art director, Movie Cut</span>
                                    <span class="badge badge-outline status"></span>
                                    <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix w_social3">

    <div class="col-lg-4 col-md-4 col-6">
        <div class="card facebook-widget">
            <div class="icon"><i class="fa fa-facebook"></i></div>
            <div class="content">
                <div class="text">Like</div>
                <div class="number">123</div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-6">
        <div class="card instagram-widget">
            <div class="icon"><i class="fa fa-instagram"></i></div>
            <div class="content">
                <div class="text">Followers</div>
                <div class="number">231</div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-6">
        <div class="card twitter-widget">
            <div class="icon"><i class="fa fa-twitter"></i></div>
            <div class="content">
                <div class="text">Followers</div>
                <div class="number">31</div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-6">
        <div class="card google-widget">
            <div class="icon"><i class="fa fa-google"></i></div>
            <div class="content">
                <div class="text">Like</div>
                <div class="number">254</div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-6">
        <div class="card linkedin-widget">
            <div class="icon"><i class="fa fa-linkedin"></i></div>
            <div class="content">
                <div class="text">Followers</div>
                <div class="number">2510</div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-6">
        <div class="card behance-widget">
            <div class="icon"><i class="fa fa-behance"></i></div>
            <div class="content">
                <div class="text">Project</div>
                <div class="number">121</div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Stories</h2>
            </div>
            <div class="body">                            
                <ul class="right_chat list-unstyled mb-0">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar6.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Watt Mark</span>
                                    <span class="message">21 hours ago</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/img/xs/avatar7.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Jay Morgan</span>
                                    <span class="message">3 hours ago</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media mb-0">
                                <img class="media-object " src="../assets/img/xs/avatar8.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Genelia Perkins</span>
                                    <span class="message">3 hours ago</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-8 col-md-12">
        <div class="card w_profile">
            <div class="body">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="profile-image float-md-right"> <img src="../assets/img/user.png" alt=""> </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <h4 class="m-t-0 m-b-0"><strong>Alizee</strong> Thomas</h4>
                        <span class="job_post">Ui UX Designer</span>
                        <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        <p class="social-icon">
                            <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                            <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                            <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                            <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                            <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <h5>18K</h5>
                                <small>Followers</small>
                            </div>
                            <div class="col-4">
                                <h5>532</h5>
                                <small>Following</small>
                            </div>
                            <div class="col-4">
                                <h5>656</h5>
                                <small>Tweets</small>
                            </div>
                        </div>
                        <div class="m-t-15">
                            <button class="btn btn-primary">Follow</button>
                            <button class="btn btn-success">Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop

@section('page-script')

    $(function() {
        "use strict";

        $('.knob2').knob({
            'format' : function (value) {
                return value + '%';
            }
        });
    });
    
@stop