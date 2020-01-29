@extends('layout.master')
@section('title', 'Bootstrap')
@section('parentPageTitle', 'UI Elements')


@section('page-styles')
<style>
    .highlight{
        background-color: #f8f9fa;
        padding: 20px;
    }
    .highlight pre code {
        font-size: inherit;
        color: #212529;
    }
    .nt {
        color: #2f6f9f;
    }
    .na {
        color: #4f9fcf;
    }
    .s {
        color: #d44950;
    }
    pre.prettyprint {
        background-color: #eee;
        border: 0px;
        margin: 0;        
        padding: 20px;
        text-align: left;
    }

    .atv,
    .str {
        color: #05AE0E;
    }

    .tag,
    .pln,
    .kwd {
        color: #3472F7;
    }

    .atn {
        color: #2C93FF;
    }

    .pln {
        color: #333;
    }

    .com {
        color: #999;
    }
</style>
@stop

@section('content')
            
<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Alert Messages</h2>
            </div>
            <div class="body">
                <div class="alert alert-primary" role="alert">A simple primary alert—check it out!</div>
                <div class="alert alert-secondary" role="alert">A simple secondary alert—check it out!</div>
                <div class="alert alert-success" role="alert">A simple success alert—check it out!</div>
                <div class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>
                <div class="alert alert-warning" role="alert">A simple warning alert—check it out!</div>
                <div class="alert alert-info" role="alert">A simple info alert—check it out!</div>
                <div class="alert alert-light" role="alert">A simple light alert—check it out!</div>
                <div class="alert alert-dark" role="alert">A simple dark alert—check it out!</div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Alert Messages with Link</h2>
            </div>
            <div class="body">
                <div class="alert alert-primary" role="alert">
                    A simple primary alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-secondary" role="alert">
                    A simple secondary alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-success" role="alert">
                    A simple success alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-danger" role="alert">
                    A simple danger alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-warning" role="alert">
                    A simple warning alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-info" role="alert">
                    A simple info alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-light" role="alert">
                    A simple light alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-dark" role="alert">
                    A simple dark alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Alert Messages With Icon</h2>
            </div>
            <div class="body">
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-info-circle"></i> The system is running well
                </div>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-check-circle"></i> Your settings have been succesfully saved
                </div>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-warning"></i> Warning, check your permission settings
                </div>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-times-circle"></i> Your account has been suspended
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Labels</h2>                        
            </div>
            <div class="body">                        
                <p>We restyled the default options for labels and we added the filled class, that can be used in any combination.</p>
                <span class="badge badge-default">Default</span>
                <span class="badge badge-primary">Primary</span>
                <span class="badge badge-success">Success</span>
                <span class="badge badge-info">Info</span>
                <span class="badge badge-warning">Warning</span>
                <span class="badge badge-danger">Danger</span>
                <hr>
                <pre class="prettyprint prettyprinted"><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-default"</span><span class="tag">&gt;</span><span class="pln">Default</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-primary"</span><span class="tag">&gt;</span><span class="pln">Primary</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-success"</span><span class="tag">&gt;</span><span class="pln">Success</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-info"</span><span class="tag">&gt;</span><span class="pln">Info</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-warning"</span><span class="tag">&gt;</span><span class="pln">Warning</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-danger"</span><span class="tag">&gt;</span><span class="pln">Danger</span><span class="tag">&lt;/span&gt;</span></pre>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Modals</h2>
            </div>
            <div class="body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">modal with button</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Vertically centered</button>

                <!-- larg modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="myLargeModalLabel">Large modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Woohoo, you're reading this text in a modal!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Small modal -->
                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="mySmallModalLabel">Small modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Woohoo, you're reading this text in a modal!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal with btn -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Woohoo, you're reading this text in a modal!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vertically centered -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Cras mattis consectetur orbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Accordion</h2>
            </div>
            <div class="body">
                <div class="accordion" id="accordion">
                    <div>
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                                </button>
                            </h5>
                        </div>                                
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h6>Accordion Link</h6>
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Link with href
                            </a>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Button with data-target
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-6 col-md-12">
                        <div>
                            <h6>Multiple targets Accordion</h6>
                            <p>
                                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                            </p>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Pagination</h2>
            </div>
            <div class="body">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>
                </nav>
                <hr>
                <h6>Working with icons</h6>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="javascript:void(0);" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                </nav>
                <hr>
                <h6>Disabled and active states</h6>
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0);" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item active">
                        <a class="page-link" href="javascript:void(0);">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Tooltips</h2>
            </div>
            <div class="body">
                <div class="demo-button">
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on the right">Tooltip on the right</button>                                
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on the left">Tooltip on the left</button>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on the top">Tooltip on the top</button>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on the bottom">Tooltip on the bottom</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Popovers</h2>
            </div>
            <div class="body">
                <div class="demo-button">
                    <button type="button" class="btn btn-sm btn-default" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Popover on Click</button>
                    <button type="button" class="btn btn-sm btn-default" data-toggle="popover" data-trigger="hover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Popover on Hover</button>
                    <button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Popover on left</button>
                    <button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Popover on right</button>
                    <button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Popover on top</button>
                    <button type="button" class="btn btn-default btn-sm" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Popover on bottom</button>                                
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Position</h2>
            </div>
            <div class="body">
                <h6>Common values</h6>
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"position-static"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"position-relative"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"position-absolute"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"position-fixed"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"position-sticky"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>
                <hr>
                <h6>Sticky top</h6>
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"sticky-top"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>
                <div class="p-3 mb-2 bg-primary text-white sticky-top">.sticky-top</div>
                <hr>
                <h6>Fixed top</h6>
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fixed-bottom"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>
                <hr>
                <h6>Fixed bottom</h6>
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fixed-bottom"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Borders</h2>
            </div>
            <div class="body bd-example-border-utils">
                <span class="border"></span>
                <span class="border-top"></span>
                <span class="border-right"></span>
                <span class="border-bottom"></span>
                <span class="border-left"></span>
                <hr>
                <h6>Subtractive</h6>
                <span class="border-0"></span>
                <span class="border-top-0"></span>
                <span class="border-right-0"></span>
                <span class="border-bottom-0"></span>
                <span class="border-left-0"></span>
                <hr>
                <h6>Border color</h6>
                <span class="border border-primary"></span>
                <span class="border border-secondary"></span>
                <span class="border border-success"></span>
                <span class="border border-danger"></span>
                <span class="border border-warning"></span>
                <span class="border border-info"></span>
                <span class="border border-light"></span>
                <span class="border border-dark"></span>
                <span class="border border-white"></span>
                <hr>
                <h6>Border-radius</h6>
                <img src="http://via.placeholder.com/100x100" alt="..." class="rounded" />
                <img src="http://via.placeholder.com/100x100" alt="..." class="rounded-top" />
                <img src="http://via.placeholder.com/100x100" alt="..." class="rounded-right" />
                <img src="http://via.placeholder.com/100x100" alt="..." class="rounded-bottom" />
                <img src="http://via.placeholder.com/100x100" alt="..." class="rounded-left" />
                <img src="http://via.placeholder.com/100x100" alt="..." class="rounded-circle" />
                <img src="http://via.placeholder.com/100x100" alt="..." class="rounded-0" />
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Shadows</h2>
            </div>
            <div class="body">
                <div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
                <div class="shadow-sm p-3 mb-5 bg-white rounded">Small shadow</div>
                <div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div>
                <div class="shadow-lg p-3 mb-5 bg-white rounded">Larger shadow</div>
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"shadow-none p-3 mb-5 bg-light rounded"</span><span class="nt">&gt;</span>No shadow<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"shadow-sm p-3 mb-5 bg-white rounded"</span><span class="nt">&gt;</span>Small shadow<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"shadow p-3 mb-5 bg-white rounded"</span><span class="nt">&gt;</span>Regular shadow<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"shadow-lg p-3 mb-5 bg-white rounded"</span><span class="nt">&gt;</span>Larger shadow<span class="nt">&lt;/div&gt;</span></code></pre></figure>
            </div>
        </div>
    </div>
</div>

@stop
