@extends('layout.master')
@section('title', 'Treeview')
@section('parentPageTitle', 'UI Elements')


@section('content')

<div class="row clealfix">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Bootstrap treeview</h2>
            </div>
            <div class="body">
                <div class="row clealfix">
                    <div class="col-lg-4 col-md-6">
                        <h6>Default</h6>
                        <div class="example-warp">
                            <div id="treeview1"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>Collapsed</h6>
                        <div class="example-warp">                                        
                            <div id="treeview2"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>Expanded</h6>
                        <div class="example-warp">                                        
                            <div id="treeview3"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
                <div class="row clealfix">
                    <div class="col-lg-4 col-md-6">
                        <h6>Custom Icons</h6>
                        <div class="example-warp">                                        
                            <div id="treeview4"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>Tags as Badges</h6>
                        <div class="example-warp">                                        
                            <div id="treeview5"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>Checkable Tree</h6>
                        <div class="example-warp">                                        
                            <div id="treeview6"></div>
                        </div>
                    </div>
                        <div class="col-12">
                        <hr>
                    </div>
                </div>
                <div class="row clealfix">
                    <div class="col-lg-4 col-md-6">
                        <h6>Searchable Tree</h6>
                        <div class="example-warp">                                        
                            <form>
                                <div class="form-group">
                                    <input type="input" class="form-control" id="input-search" placeholder="Search tree..." value="">
                                    <!-- <button type="button" class="btn btn-success" id="btn-search">Search</button> -->
                                </div>
                            </form>
                            <div id="treeview7"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>Selectable Tree</h6>
                        <div class="example-warp">                                        
                            <div id="treeview8"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>Json Data</h6>
                        <div class="example-warp">
                            <div id="treeview9"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">

        <div class="card">
            <div class="header">
                <h2>Treeview Official</h2>
            </div>
            <div class="body">
                <div class="row clealfix">
                    
                    <div class="col-md-6">
                        <h6>Sample node</h6>
                        <div class="example-warp">                                        
                            <p>use <code>jQuery('#jstree').jstree();</code> to element.</p>
                            <div id="treeExample1" class="demo"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6>Selected node</h6>
                        <div class="example-warp">                                        
                            <p>use <code>data-jstree='{"selected":true}'</code> to selected node.</p>
                            <div id="treeExample2" class="demo">
                                <ul>
                                    <li data-jstree='{"opened":true}'>Root Node
                                        <ul>
                                            <li data-jstree='{"selected":true}'>Selected node</li>
                                            <li>Simple node</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6>Different icon format</h6>
                        <div class="example-warp">                                        
                            <p>use <code>data-jstree='{"icon":"icon-name"}'</code> to selected node.</p>
                            <div id="treeExample3">
                                <ul>
                                <li data-jstree='{"opened":true}'>Root Node
                                    <ul>
                                        <li data-jstree='{"icon" : "jstree-file"}'>file icon node</li>
                                        <li data-jstree='{"icon" : "icon-folder"}'>custom icon node</li>
                                        <li data-jstree='{"icon" : "//jstree.com/tree.png"}'>internet icon node</li>
                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6>Disabled node</h6>
                        <div class="example-warp">                                        
                            <p>use <code>data-jstree='{"disabled":true}'</code> to selected node.</p>
                            <div id="treeExample4">
                                <ul>
                                <li data-jstree='{"opened":true}'>Root Node
                                    <ul>
                                        <li data-jstree='{"disabled":true}'>disabled node</li>
                                        <li>simple node</li>
                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <h6>JSON demo</h6>
                        <div class="example-warp">
                            <div id="treeExample5" class="demo"></div>
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <h6>Ajax demo</h6>
                        <div class="example-warp">
                            <div id="treeExample6" class="demo"></div>
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <h6>Callback function data demo</h6>
                        <div class="example-warp">
                            <div id="treeExample7" class="demo"></div>
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <h6>Interaction and events demo</h6>
                        <div class="example-warp">
                            <button id="evts_button">select node with id 1</button> <em>either click the button or a node in the tree</em>
                            <div id="treeExample8" class="demo"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6>Checkbox plugin</h6>
                        <div class="example-warp">
                            <p>use <code>"plugins":["checkbox"]</code> to make checkbox jstree.</p>
                            <div id="treeExample9" class="demo">
                                <ul>
                                    <li data-jstree='{"opened":true}'>Root node
                                        <ul>
                                            <li>Child node 1</li>
                                            <li>Child node 2</li>
                                        </ul>
                                    </li>
                                </ul>                        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6>Drag and drop plugin</h6>
                        <div class="example-warp">
                            <p>use <code>"plugins":["dnd"]</code> to make checkbox jstree.</p>
                            <div id="treeExample10" class="demo">
                                <ul>
                                    <li data-jstree='{"opened":true}'>Root node
                                        <ul>
                                            <li>Child node 1</li>
                                            <li>Child node 2</li>
                                        </ul>
                                    </li>
                                    <li>Root node 2</li>
                                </ul>                                          
                            </div>
                        </div>
                    </div>

                    </div>
            </div>
        </div>

    </div>
    
</div>

@stop
