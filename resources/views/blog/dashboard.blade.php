@extends('layout.master')
@section('title', 'Dashboard')
@section('parentPageTitle', 'Blog')


@section('content')


<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card modal-open">
            <div class="body">
                <div class="number">
                    <h6><i class="fa fa-thumbs-o-up m-r-10"></i> Likes</h6>
                    <span>22,500</span>
                </div>
            </div>
            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
            data-line-Width="1" data-line-Color="#62a6ef" data-fill-Color="#62a6ef">2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4</div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card modal-open">
            <div class="body">
                <div class="number">
                    <h6><i class="fa fa-comments-o m-r-10"></i>Comments</h6>
                    <span>500</span>
                </div>
            </div>
            <div class="sparkline" data-type="bar" data-width="97%" data-height="50px" data-bar-Width="5"
            data-bar-Spacing="6" data-bar-Color="#e66d7e">2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4</div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card modal-open">
            <div class="body">
                <div class="number">
                    <h6><i class="fa fa-share-alt m-r-10"></i>Share</h6>
                    <span>2,215</span>
                </div>
            </div>
            <div class="sparkline text-left" data-type="line" data-width="100%" data-height="50px" data-line-Width="2" data-line-Color="#23c596"
                    data-fill-Color="transparent">12,4,6,15,5,5,5,6,8,9,7,2,11,5,4,8,17,10,18,0,2,0,1,8,3,8,9,6</div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card modal-open">
            <div class="body">
                <div class="number">
                    <h6><i class="fa fa-eye m-r-10"></i>View</h6>
                    <span>421,215</span>
                </div>
            </div>
            <div class="sparkline" data-type="bar" data-width="97%" data-height="50px" data-bar-Width="4"
            data-bar-Spacing="1" data-bar-Color="#f7cf5c">10,18,0,2,0,1,8,3,8,9,6,3,2,5,1,4,2,3,1,5,4,7,8,2,3,12,4,6,15,5,5,5,6,8,9,7,2,11,5,4,8,17,10,18,0,2,0,1,8,3,8,9,6,3,2,5,1,4,2,3,1,5,4,7,8,2,3,12,4,6,15,5,5,5,6,8,9,7,2,11,5,4,8,17</div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Categories Statistics</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5>2,048</h5>
                        <span>Total Leads</span>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5>521</h5>
                        <span>Connections</span>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5>73</h5>
                        <span>Articles</span>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5>23</h5>
                        <span>Categories</span>
                    </div>
                </div>
                <div id="line_chart" class="graph"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-xl-8 col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Visitors Statistics</h2>
            </div>
            <div class="body">
                <div class="row">                                
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-6">
                                <small>Page Views</small>
                                <h5 class="m-b-0">32,211,536</h5>
                            </div>
                            <div class="col-6">
                                <small>Site Visitors</small>
                                <h5 class="m-b-0">23,516</h5>
                            </div>
                        </div>
                        <div id="world-map-markers" class="m-t-30" style="height: 280px;"></div>
                    </div>
                    <div class="col-lg-6 col-md-12 visitors-chart text-center">
                        <div id="donut_chart" class="donut_chart m-b-30" style="height: 300px;"></div>
                    </div>
                </div>                        
            </div>                    
        </div>                
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Marketing Campaign <small>This Month </small></h2>                            
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
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
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <h5>Twitter</h5>
                <small>56% Increase</small>
                <hr>
                <input type="text" class="knob2" value="66" data-linecap="round" data-width="120" data-height="120" data-thickness="0.1" data-fgColor="#4CAF50" readonly>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <h5>Facebook</h5>
                <small>87% Increase</small>
                <hr>
                <input type="text" class="knob2" value="26" data-linecap="round" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#7b69ec" readonly>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <h5>Instagram</h5>
                <small>16% Increase</small>
                <hr>
                <input type="text" class="knob2" value="76" data-linecap="round" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#f9bd53" readonly>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body text-center">
                <h5>Google +</h5>
                <small>37% Increase</small>
                <hr>
                <input type="text" class="knob2" value="76" data-linecap="round" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#f9bd53" readonly>
            </div>
        </div>
    </div>
</div>

@stop
