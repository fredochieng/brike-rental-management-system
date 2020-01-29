@extends('layout.master')
@section('title', 'Sortable Nestable')
@section('parentPageTitle', 'UI Elements')


@section('content')

<div class="row clearfix">

    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Nestable Handle</h2>
            </div>
            <div class="body">
                <div class="dd nestable-with-handle">
                    <ol class="dd-list">
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">Founder & Director</div>
                        </li>
                        <li class="dd-item dd3-item" data-id="2">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">Sales Lead</div>
                        </li>
                        <li class="dd-item dd3-item" data-id="3">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">Project Lead</div>
                            <ol class="dd-list">
                                <li class="dd-item dd3-item" data-id="4">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">UI UX Designer</div>
                                </li>
                                <li class="dd-item dd3-item" data-id="5">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">FrontEnd Developer</div>
                                </li>
                                <li class="dd-item dd3-item" data-id="6">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">Mobile Lead</div>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Nestable Handle with Badge</h2>
            </div>
            <div class="body">
                <div class="dd nestable-with-handle">
                    <ol class="dd-list">
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">Founder & Director <span class="badge badge-success float-right">1</span></div>
                        </li>
                        <li class="dd-item dd3-item" data-id="2">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">Sales Lead <span class="badge badge-info float-right">1</span></div>
                        </li>
                        <li class="dd-item dd3-item" data-id="3">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">Project Lead <span class="badge badge-warning float-right">1</span></div>
                            <ol class="dd-list">
                                <li class="dd-item dd3-item" data-id="4">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">UI UX Designer <span class="badge badge-warning float-right">3</span></div>
                                </li>
                                <li class="dd-item dd3-item" data-id="5">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">FrontEnd Developer <span class="badge badge-warning float-right">8</span></div>
                                </li>
                                <li class="dd-item dd3-item" data-id="6">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">Mobile Lead <span class="badge badge-warning float-right">2</span></div>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Sortable with Background</h2>
            </div>
            <div class="body">
                <div class="dd dd4">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle bg-primary">Founder & Director</div>
                        </li>                                
                        <li class="dd-item" data-id="2">
                            <div class="dd-handle bg-secondary">Sales Lead</div>
                        </li>
                        <li class="dd-item" data-id="3">
                            <div class="dd-handle bg-success">Angular Champ</div>
                        </li>
                        <li class="dd-item" data-id="4">
                            <div class="dd-handle bg-danger">eCommerce Master</div>
                        </li>
                        <li class="dd-item" data-id="5">
                            <div class="dd-handle bg-warning">FrontEnd Developer</div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Sortable With Task List</h2>
            </div>
            <div class="body todo_list">
                <div class="dd nestable-with-handle">
                    <ol class="dd-list">
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span><i class=" icon-calendar m-r-5"></i> Report Panel Usag</span>
                                </label>
                            </div>
                        </li>
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span><i class="icon-bell m-r-5"></i> New logo design for InfiniO project</span>
                                </label>
                            </div>
                        </li>
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Design PSD files for InfiniO <span class="badge badge-warning">1 Week</span></span>
                                </label>
                            </div>
                        </li>
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Deploy existing code to example.com</span>
                                </label>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>With Project List</h2>
            </div>
            <div class="body team_list">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">Desiger</div>
                            <div class="dd-content top_counter">
                                <div class="icon">
                                    <img src="../assets/img/xs/avatar1.jpg" class="rounded-circle" alt="">
                                </div>
                                <div class="content m-t-5">
                                    <div>UI UX Desiger</div>
                                    <h6>Tim Hank</h6>
                                </div>
                            </div>
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">Team Member</div>
                                    <div class="dd-content">
                                        <h6 class="m-b-15">Info about Design Team <span class="badge badge-success float-right">New</span></h6>                                
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <ul class="list-unstyled team-info m-t-20 m-b-20">
                                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                                            <li><img src="../assets/img/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                                            <li><img src="../assets/img/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                                            <li><img src="../assets/img/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                        </ul>
                                        <div class="progress-container l-black m-b-20">
                                            <span class="progress-badge">Prograss</span>
                                            <div class="progress">
                                                <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                                    <span class="progress-value">68%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <small>PROJECTS: 12</small>
                                                <h6>BUDGET: 4,870 USD</h6>
                                            </div>
                                            <div class="col-5">
                                                <div class="sparkline text-right m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#333333">2,5,8,3,5,7,1,6</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </li>
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">Sales</div>
                            <div class="dd-content top_counter">
                                <div class="icon">
                                    <img src="../assets/img/xs/avatar2.jpg" class="rounded-circle" alt="">
                                </div>
                                <div class="content m-t-5">
                                    <div>Sales Lead</div>
                                    <h6>Gary Camara</h6>
                                </div>
                            </div>
                        </li>
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">Developer</div>
                            <div class="dd-content top_counter">
                                <div class="icon">
                                    <img src="../assets/img/xs/avatar10.jpg" class="rounded-circle" alt="">
                                </div>
                                <div class="content m-t-5">
                                    <div>Project Lead</div>
                                    <h6>Fidel Tonn</h6>
                                </div>
                            </div>
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">FrontEnd Developer</div>
                                    <div class="dd-content">
                                        <ul class="list-unstyled team-info">
                                            <li><img src="../assets/img/xs/avatar5.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/img/xs/avatar6.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">PHP Expert</div>
                                    <div class="dd-content">
                                        <ul class="list-unstyled team-info">
                                            <li><img src="../assets/img/xs/avatar7.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/img/xs/avatar8.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/img/xs/avatar9.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/img/xs/avatar10.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Default Example <small>Drag & drop hierarchical list with mouse and touch compatibility</small> </h2>
            </div>
            <div class="body">
                <div class="clearfix m-b-20">
                    <div class="dd">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="1">
                                <div class="dd-handle">Item 1</div>
                            </li>
                            <li class="dd-item" data-id="2">
                                <div class="dd-handle">Item 2</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle">Item 3</div>
                                    </li>
                                    <li class="dd-item" data-id="4">
                                        <div class="dd-handle">Item 4</div>
                                    </li>
                                    <li class="dd-item" data-id="5">
                                        <div class="dd-handle">Item 5</div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="6">
                                                <div class="dd-handle">Item 6</div>
                                            </li>
                                            <li class="dd-item" data-id="7">
                                                <div class="dd-handle">Item 7</div>
                                            </li>
                                            <li class="dd-item" data-id="8">
                                                <div class="dd-handle">Item 8</div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="dd-item" data-id="9">
                                        <div class="dd-handle">Item 9</div>
                                    </li>
                                    <li class="dd-item" data-id="10">
                                        <div class="dd-handle">Item 10</div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="11">
                                <div class="dd-handle">Item 11</div>
                            </li>
                            <li class="dd-item" data-id="12">
                                <div class="dd-handle">Item 12</div>
                            </li>
                        </ol>
                    </div>
                </div>
                <b>Output JSON</b>
                <textarea cols="30" rows="3" class="form-control no-resize" readonly>[{"id":1},{"id":2,"children":[{"id":3},{"id":4},{"id":5,"children":[{"id":6},{"id":7},{"id":8}]},{"id":9},{"id":10}]},{"id":11},{"id":12}]</textarea>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Default Example with Dark<small>Drag & drop hierarchical list with mouse and touch compatibility</small> </h2>
            </div>
            <div class="body">
                <div class="clearfix m-b-20">
                    <div class="dd nestable-dark-theme">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="1">
                                <div class="dd-handle">Item 1</div>
                            </li>
                            <li class="dd-item" data-id="2">
                                <div class="dd-handle">Item 2</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle">Item 3</div>
                                    </li>
                                    <li class="dd-item" data-id="4">
                                        <div class="dd-handle">Item 4</div>
                                    </li>
                                    <li class="dd-item" data-id="5">
                                        <div class="dd-handle">Item 5</div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="6">
                                                <div class="dd-handle">Item 6</div>
                                            </li>
                                            <li class="dd-item" data-id="7">
                                                <div class="dd-handle">Item 7</div>
                                            </li>
                                            <li class="dd-item" data-id="8">
                                                <div class="dd-handle">Item 8</div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="dd-item" data-id="9">
                                        <div class="dd-handle">Item 9</div>
                                    </li>
                                    <li class="dd-item" data-id="10">
                                        <div class="dd-handle">Item 10</div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="11">
                                <div class="dd-handle">Item 11</div>
                            </li>
                            <li class="dd-item" data-id="12">
                                <div class="dd-handle">Item 12</div>
                            </li>
                        </ol>
                    </div>
                </div>
                <b>Output JSON</b>
                <textarea cols="30" rows="3" class="form-control no-resize" readonly>[{"id":1},{"id":2,"children":[{"id":3},{"id":4},{"id":5,"children":[{"id":6},{"id":7},{"id":8}]},{"id":9},{"id":10}]},{"id":11},{"id":12}]</textarea>
            </div>
        </div>
    </div>

</div>

@stop
