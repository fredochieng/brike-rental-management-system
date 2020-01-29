@extends('layout.master')
@section('title', 'Gallery')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Bootstrap 4 Gallery With Lightbox <small>All pictures taken from pexels.com</small></h2>
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
                <div class="gallery b4gallery" style="display:none;">
                    <img data-gallery-tag="tabe1" class="gallery-item" src="../assets/img/image-gallery/1.jpg" alt="" />
                    <div class="gallery-item h-100">
                        <div class="bg-danger d-flex flex-column text-warning justify-content-center align-items-center h-100 w-100 p-3">
                            <p class="lead m-0">I have no tag!</p>
                        </div>
                    </div>
                    <img data-gallery-tag="tabe2" class="gallery-item" src="../assets/img/image-gallery/2.jpg" alt="" />
                    <img data-gallery-tag="tabe3" class="gallery-item" src="../assets/img/image-gallery/3.jpg" alt="" />
                    <img data-gallery-tag="tabe2" class="gallery-item" src="../assets/img/image-gallery/4.jpg" alt="" />
                    <img data-gallery-tag="tabe4" class="gallery-item" src="../assets/img/image-gallery/5.jpg" alt="" />
                    <img data-gallery-tag="tabe1" class="gallery-item" src="../assets/img/image-gallery/6.jpg" alt="" />
                    <img data-gallery-tag="tabe4" class="gallery-item" src="../assets/img/image-gallery/7.jpg" alt="" />
                    <div class="gallery-item h-100">
                        <div class="bg-warning d-flex flex-column text-dark justify-content-center align-items-center h-100 w-100 p-3">
                            <p class="lead m-0">You can't filter me!</p>
                        </div>
                    </div>
                    <img data-gallery-tag="tabe1" class="gallery-item" src="../assets/img/image-gallery/8.jpg" alt="" />
                    <img data-gallery-tag="tabe3" class="gallery-item" src="../assets/img/image-gallery/9.jpg" alt="" />
                    <img data-gallery-tag="tabe2" class="gallery-item" src="../assets/img/image-gallery/10.jpg" alt="" />
                    <img data-gallery-tag="tabe1" class="gallery-item" src="../assets/img/image-gallery/11.jpg" alt="" />
                    <img data-gallery-tag="tabe3" class="gallery-item" src="../assets/img/image-gallery/12.jpg" alt="" />
                    <img data-gallery-tag="tabe4" class="gallery-item" src="../assets/img/image-gallery/13.jpg" alt="" />
                        <div class="gallery-item h-100">
                            <div class="bg-info d-flex flex-column text-warning justify-content-center align-items-center h-100 w-100 p-3">
                                <p class="lead m-0">Me neigher.</p>
                            </div>
                        </div>
                    <img data-gallery-tag="tabe1" class="gallery-item" src="../assets/img/image-gallery/14.jpg" alt="" />
                    <img data-gallery-tag="tabe4" class="gallery-item" src="../assets/img/image-gallery/15.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>

</div>

@stop
