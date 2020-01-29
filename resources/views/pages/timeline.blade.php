@extends('layout.master')
@section('title', 'Timeline')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="timeline-item green" date-is="20-04-2018 - Today">
                    <h5>Hello, 'Im a single div responsive timeline without media Queries!</h5>
                    <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA</span>
                    <div class="msg">
                        <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                        <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                        <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="icon-bubbles"></i> Comment</a>
                        <div class="collapse m-t-10" id="collapseExample">
                            <div class="well">
                                <form>
                                    <div class="form-group">
                                        <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                    </div>
                                    <button class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item blue" date-is="19-04-2018 - Yesterday">
                    <h5>Oeehhh, that's awesome.. Me too!</h5>
                    <span><a href="javascript:void(0);" title="">Katherine Lumaad</a> Oakland, CA</span>
                    <div class="msg">
                        <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                        <div class="timeline_img m-b-20">
                            <img class="w-25" src="../assets/img/blog/blog-page-4.jpg" alt="Awesome Image">
                            <img class="w-25" src="../assets/img/blog/blog-page-2.jpg" alt="Awesome Image">
                        </div>
                        <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                        <a role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="icon-bubbles"></i> Comment</a>
                        <div class="collapse m-t-10" id="collapseExample1">
                            <div class="well">
                                <form>
                                    <div class="form-group">
                                        <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                    </div>
                                    <button class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item warning" date-is="21-02-2018">
                    <h5>An Engineer Explains Why You Should Always Order the Larger Pizza</h5>
                    <span><a href="javascript:void(0);" title="">Gary Camara</a> San Francisco, CA</span>
                    <div class="msg">
                        <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                        <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                        <a role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="icon-bubbles"></i> Comment</a>
                        <div class="collapse m-t-10" id="collapseExample2">
                            <div class="well">
                                <form>
                                    <div class="form-group">
                                        <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                    </div>
                                    <button class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop
