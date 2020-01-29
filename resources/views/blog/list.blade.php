@extends('layout.master')
@section('title', 'Blog List')
@section('parentPageTitle', 'Blog')


@section('content')

<div class="row clearfix blog-page">
    <div class="col-lg-8 col-md-12 left-box">
        <div class="card single_post">
            <div class="body">
                <div class="img-post">
                    <img class="d-block img-fluid" src="{{asset('assets/img/blog/blog-page-1.jpg')}}" alt="First slide">
                </div>
                <h3><a href="{{route('blog.detail')}}">All photographs are accurate</a></h3>
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

        <div class="card single_post">
            <div class="body">
                <div class="img-post">
                    <img class="d-block img-fluid" src="{{asset('assets/img/blog/blog-page-2.jpg')}}" alt="">
                </div>
                <h3><a href="{{route('blog.detail')}}">All photographs are accurate</a></h3>
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

        <div class="card single_post">
            <div class="body">
                <div class="img-post">
                    <img class="d-block img-fluid" src="{{asset('assets/img/blog/blog-page-3.jpg')}}" alt="">
                </div>
                <h3><a href="{{route('blog.detail')}}">All photographs are accurate</a></h3>
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

        <div class="card single_post">
            <div class="body">
                <div class="img-post">
                    <img class="d-block img-fluid" src="{{asset('assets/img/blog/blog-page-4.jpg')}}" alt="">
                </div>
                <h3><a href="{{route('blog.detail')}}">All photographs are accurate</a></h3>
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
                                
        <ul class="pagination pagination-primary">
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
        </ul>                
    </div>
    <div class="col-lg-4 col-md-12 right-box">
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
        <div class="card">
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
                <h2>Popular Posts</h2>                        
            </div>
            <div class="body widget popular-post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single_post">
                            <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                            <span>jun 22, 2018</span>
                            <div class="img-post">
                                <img src="{{asset('assets/img/blog/blog-page-2.jpg')}}" alt="Awesome Image">                                        
                            </div>                                            
                        </div>
                        <div class="single_post">
                            <p class="m-b-0">new rules, more cars, more races</p>
                            <span>jun 8, 2018</span>
                            <div class="img-post">
                                <img src="{{asset('assets/img/blog/blog-page-3.jpg')}}" alt="Awesome Image">                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Instagram Post</h2>
            </div>
            <div class="body widget">
                <ul class="list-unstyled instagram-plugin m-b-0">
                    <li><a href="javascript:void(0);"><img src="{{asset('assets/img/blog/05-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('assets/img/blog/06-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('assets/img/blog/07-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('assets/img/blog/08-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('assets/img/blog/09-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('assets/img/blog/10-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('assets/img/blog/11-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('assets/img/blog/12-img.jpg')}}" alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="{{asset('assets/img/blog/13-img.jpg')}}" alt="image description"></a></li>
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

@stop
