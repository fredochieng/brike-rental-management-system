@extends('layout.master')
@section('title', 'Image Gallery V2')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Light Gallery <small>All pictures taken from pexels.com</small></h2>
            </div>
            <div class="body">
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/1.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/2.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/2.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/3.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/3.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/4.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/4.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/5.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/5.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/6.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/6.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/7.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/7.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/8.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/8.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/9.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/9.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/10.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/10.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/11.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/11.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/12.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/12.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/13.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/13.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/14.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/14.jpg" alt=""> </a> </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="../assets/img/image-gallery/15.jpg" > <img class="img-fluid img-thumbnail" src="../assets/img/image-gallery/15.jpg" alt=""> </a> </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Video Gallery <small>All pictures taken from pexels.com</small></h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30" id="video-gallery">
                        <a href="https://www.youtube.com/watch?v=D0a0aNqTehM">
                            <img class="img-fluid img-thumbnail" src="https://www.youtube.com/watch?v=D0a0aNqTehM" alt="">
                        </a>
                    </div>                                
                </div>
            </div>
        </div>
    </div>

</div>

@stop

@section('page-script')

    $('#video-gallery').lightGallery(); 
    
@stop