{{-- <div class="modal fade in" id="viewPropertyModal_{{ $item->property_id}}">
<div class=" modal-dialog modal-lg" style="width:90%">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="title" id="defaultModalLabel">View Property</h6>
        </div>
        {!! Form::open(['url' => action('PropertyVariationsController@store'), 'method' => 'post'])
        !!}
        <div class="modal-body">
            <input type="text" name="interview_id" value="{{ $item->property_id }}" {{ csrf_field() }} <div
                class="table-responsive">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="body">
                        <ul class="nav nav-tabs-new2">
                            <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab"
                                    href="#details" aria-expanded="true">Details</a></li>
                            <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#history"
                                    aria-expanded="false">History</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6">
                                        <address>
                                            <strong>{{ $item->prop_name }}.</strong><br>
                                            795 Folsom Ave, Suite 546<br>
                                            San Francisco, CA 54656<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-34636
                                        </address>
                                    </div>
                                    <div class="col-md-6 col-sm-6 text-right">
                                        <p class="m-b-0"><strong>Order Date: </strong> Jun 15, 2018</p>
                                        <p class="m-b-0"><strong>Order Status: </strong> <span
                                                class="badge badge-warning m-b-0">Pending</span></p>
                                        <p><strong>Order ID: </strong> #123456</p>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="thead-success">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Variations</th>
                                                        <th>Total Rooms</th>
                                                        <th>Vacant Rooms</th>
                                                        <th>Booked Rooms</th>
                                                        <th>Rent (KES)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>One Bedroom</td>
                                                        <td>40 Rooms</td>
                                                        <td>20 Rooms</td>
                                                        <td>20 Rooms</td>
                                                        <td>KES 10,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Two Bedroom</td>
                                                        <td>50 Rooms</td>
                                                        <td>23 Rooms</td>
                                                        <td>27 Rooms</td>
                                                        <td>KES 20,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Three Bedroom</td>
                                                        <td>20 Rooms</td>
                                                        <td>10 Rooms</td>
                                                        <td>10 Rooms</td>
                                                        <td>KES 30,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Add variation</button>
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>
</div> --}}

<div class="modal fade" id="viewPropertyModal_{{ $item->property_id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">{{ $item->prop_name}}</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <ul class="nav nav-tabs-new2">
                                    <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab"
                                            href="#details" aria-expanded="true">Details</a></li>
                                    <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab"
                                            href="#history" aria-expanded="false">History</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-6">
                                                <address>
                                                    <strong>ThemeMakker Inc.</strong><br>
                                                    795 Folsom Ave, Suite 546<br>
                                                    San Francisco, CA 54656<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-34636
                                                </address>
                                            </div>
                                            <div class="col-md-6 col-sm-6 text-right">
                                                <p class="m-b-0"><strong>Order Date: </strong> Jun 15, 2018</p>
                                                <p class="m-b-0"><strong>Order Status: </strong> <span
                                                        class="badge badge-warning m-b-0">Pending</span></p>
                                                <p><strong>Order ID: </strong> #123456</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>