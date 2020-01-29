@extends('layout.master')
@section('title', 'Widgets Blog')
@section('parentPageTitle', 'Widgets')


@section('content')

<div class="row clearfix">

    <div class="col-lg-6 col-md-12">
        <div class="card single_post">
            <div class="body">
                <div class="img-post">
                    <img class="d-block img-fluid" src="../assets/img/blog/blog-page-1.jpg" alt="First slide">
                </div>
                <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
            </div>
            <div class="footer">
                <div class="actions">
                    <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                </div>
                <ul class="stats">
                    <li><a href="javascript:void(0);">General</a></li>
                    <li><a href="javascript:void(0);" class="icon-heart">28</a></li>
                    <li><a href="javascript:void(0);" class="icon-bubbles">128</a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Leave a reply <small>Your email address will not be published. Required fields are marked*</small></h2>
            </div>
            <div class="body">
                <div class="comment-form">
                    <form class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                        </div>                                
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>New Post</h2>
            </div>
            <div class="body">
                <div class="new_post">
                    <div class="form-group">
                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                    </div>
                    <div class="post-toolbar-b">
                        <button class="btn btn-warning"><i class="icon-paper-clip text-light"></i></button>
                        <button class="btn btn-warning"><i class="icon-camera text-light"></i></button>
                        <button class="btn btn-primary">Post</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card single_post2">
            <img class="img-fluid" src="../assets/img/blog/blog-page-3.jpg" alt="img">
            <div class="body">                    
                <div class="content">
                    <div class="actions_sidebar">
                        <a href="javascript:void(0)"><i class="icon-share"></i></a>
                        <a href="javascript:void(0)"><i class="icon-heart"></i><span>5</span></a>
                        <a href="javascript:void(0)"><i class="icon-bubble"></i><span>8</span></a>
                    </div>
                    <h4 class="title">All photographs are accurate</h4>
                    <p class="date">
                        <small>Jun 15, 2018</small>
                    </p>
                    <p class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    <a class="btn btn-primary" href="javascript:void(0)">READ MORE</a>
                </div>
            </div>
            
        </div>                    
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Comments</h2>
            </div>
            <div class="body">
                <ul class="comment-reply list-unstyled">
                    <li class="row clearfix">
                        <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="../assets/img/sm/avatar2.jpg" alt="Awesome Image"></div>
                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                            <h5 class="m-b-0">Gigi Hadid </h5>
                            <p>Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p>
                            <ul class="list-inline">
                                <li><a href="javascript:void(0);">Mar 09 2018</a></li>
                                <li><a href="javascript:void(0);">Reply</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="row clearfix">
                        <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="../assets/img/sm/avatar3.jpg" alt="Awesome Image"></div>
                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                            <h5 class="m-b-0">Christian Louboutin</h5>
                            <p>Great tutorial but few issues with it? If i try open post i get following errors. Please can you help me?</p>
                            <ul class="list-inline">
                                <li><a href="javascript:void(0);">Mar 12 2018</a></li>
                                <li><a href="javascript:void(0);">Reply</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="row clearfix">
                        <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="../assets/img/sm/avatar4.jpg" alt="Awesome Image"></div>
                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                            <h5 class="m-b-0">Kendall Jenner</h5>
                            <p>Very nice and informative article. In all the years I've done small and side-projects as a freelancer, I've ran into a few problems here and there.</p>
                            <ul class="list-inline">
                                <li><a href="javascript:void(0);">Mar 20 2018</a></li>
                                <li><a href="javascript:void(0);">Reply</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>                                        
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="card right-box">
            <div class="header">
                <h2>Categories Clouds</h2>
            </div>
            <div class="body widget">
                <ul class="list-unstyled categories-clouds m-b-0">
                    <li><a href="javascript:void(0);">eCommerce</a></li>
                    <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                    <li><a href="javascript:void(0);">Creative UX</a></li>
                    <li><a href="javascript:void(0);">Wordpress</a></li>
                    <li><a href="javascript:void(0);">Angular JS</a></li>
                    <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                    <li><a href="javascript:void(0);">Website Design</a></li>
                    <li><a href="javascript:void(0);">HTML5</a></li>
                    <li><a href="javascript:void(0);">Infographics</a></li>
                    <li><a href="javascript:void(0);">Wordpress Development</a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Email Newsletter <small>Get our products/news earlier than others, let’s get in touch.</small></h2>
            </div>
            <div class="body widget newsletter">                        
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Email">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Social Counter</h2>
            </div>
            <div class="body social_counter">                        
                <ul class=" list-unstyled basic-list">
                    <li><i class="fa fa-facebook-square m-r-5"></i> FaceBook <span class="badge badge-primary">16,785</span></li>
                    <li><i class="fa fa-twitter-square m-r-5"></i> Twitter <span class="badge-purple badge">2,365</span></li>
                    <li><i class="fa fa-linkedin-square m-r-5"></i> Linkedin<span class="badge-success badge">9,021</span></li>
                    <li><i class="fa fa-google-plus-square m-r-5"></i> Google Plus<span class="badge-info badge">725</span></li>
                    <li><i class="fa fa-behance-square m-r-5"></i> Behance<span class="badge-info badge">1,725</span></li>
                    <li><i class="fa fa-dribbble m-r-5"></i> Dribbble<span class="badge-info badge">11,725</span></li>
                </ul>
            </div>
        </div>
        <div class="card right-box">
            <div class="header">
                <h2>Instagram Post</h2>
            </div>
            <div class="body widget">
                <ul class="list-unstyled instagram-plugin m-b-0">
                    <li><a href="javascript:void(0);"><img src="../assets/img/blog/05-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/img/blog/06-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/img/blog/07-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/img/blog/08-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/img/blog/09-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/img/blog/10-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/img/blog/11-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/img/blog/12-img.jpg" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="../assets/img/blog/13-img.jpg" alt="image description"></a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>About Me</h2>
            </div>
            <div class="body text-center">
                <div class="profile-image m-b-15"> <img src="../assets/img/user.png" class="rounded-circle" alt=""> </div>
                <div>
                    <h4 class="m-b-0"><strong>Alizee</strong> Thomas</h4>
                    <span>Washington, d.c.</span>
                </div>
                <div class="m-t-15">
                    <button class="btn btn-primary">Follow</button>
                    <button class="btn btn-outline-secondary">Message</button>
                </div>                            
            </div>
        </div>
    </div>

    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="body search">
                <div class="input-group m-b-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </div>
        </div>
        <div class="card single_post">
            <div class="body pb-0">
                <h3 class="m-t-0 m-b-5"><a href="blog-details.html">All photographs are accurate. None of them is the truth</a></h3>
                <ul class="meta">
                    <li><a href="javascript:void(0);"><i class="icon-user text-primary"></i>Posted By: John Smith</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-tag text-success"></i>Photography</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-bubbles text-warning"></i>Comments: 3</a></li>
                </ul>
            </div>                    
            <div class="body">
                <div class="img-post m-b-15">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="../assets/img/blog/blog-page-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="../assets/img/blog/blog-page-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="../assets/img/blog/blog-page-3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                <a href="blog-details.html" title="read more" class="btn btn-info m-t-20">Read More</a>                        
            </div>
        </div>
    </div>

</div>

@stop
