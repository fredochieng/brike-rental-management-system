@extends('layout.master')
@section('title', 'Manage Property')
@section('parentPageTitle', 'Property')

@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body">
                <h5>{{ $currency_symbol }} {{ $sum_tot_prop_rent_payments, 2, '.',','}} <i
                        class="fa fa-money float-right icon text-primary"></i></h5>
                <span>Rent Income</span>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-blue m-b-0">
                <div class="progress-bar" data-transitiongoal="64"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body">
                <h5>{{ $currency_symbol}} {{ $rent_arrears_amount }}<i
                        class="fa fa-dollar float-right icon text-primary"></i></h5>
                <span>Rent Arrears</span>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-purple m-b-0">
                <div class="progress-bar" data-transitiongoal="67"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body">
                <h5>{{ $sum_total_rooms }} Rooms <i class="fa fa-building-o float-right icon text-primary"></i></h5>
                <span>Total Rooms</span>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-green m-b-0">
                <div class="progress-bar" data-transitiongoal="89"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body">
                <h5>{{ $sum_total_rented_rooms }} Rooms <i class="fa fa-home float-right icon text-primary"></i></h5>
                <span>Rented Rooms</span>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-yellow m-b-0">
                <div class="progress-bar" data-transitiongoal="89"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body">
                <h5>{{ $sum_total_vacant_rooms}} Rooms <i class=" fa fa-building float-right icon text-primary"></i>
                </h5>
                <span>Vacant Rooms</span>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-blue m-b-0">
                <div class="progress-bar" data-transitiongoal="68"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body">
                <h5>{{ $tot_variations }} Variations <i class="icon-loop float-right icon text-primary"
                        style="font-weight:bolder"></i></h5>
                <span>Property Variations</span>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-purple m-b-0">
                <div class="progress-bar" data-transitiongoal="64"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body">
                <h5>{{ $tot_tenants }} Tenants <i class="icon-user-follow float-right icon text-primary"
                        style="font-weight:bolder"></i>
                </h5>
                <span>Total Tenants</span>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-green m-b-0">
                <div class="progress-bar" data-transitiongoal="67"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body">
                <h5>KES 158,856.00 <i class=" fa fa-money float-right icon text-primary"></i></h5>
                <span>Total Expenses</span>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-yellow m-b-0">
                <div class="progress-bar" data-transitiongoal="68"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <a href="#addVariationValueModal" data-toggle="modal"
                    data-target="#addVariationValueModal_{{ $property->property_id }}"
                    class="btn btn-warning pull-left"><i class="icon-plus"></i> ADD VARIATION VALUE
                </a>
                <a href="#addAnotherTenantModal" data-toggle="modal" data-target="#addAnotherTenantModal"
                    class="btn btn-primary" style="margin-left:40px"><i class="icon-plus"></i> UNASSIGN TENANT
                </a>
                <a href="#addAnotherTenantModal" data-toggle="modal" data-target="#addAnotherTenantModal"
                    class="btn btn-success" style="margin-left:310px"><i class="icon-plus"></i> ADD ANOTHER TENANT
                </a>
                <a href="#assignRoomModal" data-toggle="modal" data-target="#assignRoomModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ASSIGN ROOM
                </a>
                <ul class="nav nav-tabs-new2">
                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab"
                            href="#Home-new2">Variations</a>
                    </li>

                    {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-new2">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Contact-new2">Contact</a></li> --}}
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="Home-new2">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Total Rooms</th>
                                        <th>Rented Rooms</th>
                                        <th>Vacant Rooms</th>
                                        <th>Rent per month</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($variation_values as $count => $item)
                                    <tr>
                                        <td>{{ $count + 1 }}</td>
                                        <td>{{ $item->var_name }}</td>
                                        <td>{{ $item->tot_rooms }} Rooms</td>
                                        <td>{{ $item->booked_rooms }} Rooms</td>
                                        <td>{{ $item->vacant_rooms }} Rooms</td>
                                        <td>{{ $currency_symbol  }}
                                            {{ number_format($item->monthly_rent, 2, '.', ',')}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="Profile-new2">
                        <h6>{{ $property->prop_name }} - Rooms</h6>
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                            lomo
                            retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed
                            craft
                            beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                            banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever
                            gluten-free, carles pitchfork biodiesel </p>
                    </div>
                    <div class="tab-pane" id="Contact-new2">
                        <h6>Contact</h6>
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                            four
                            loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer
                            mlkshk
                            aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore
                            aesthetic magna delectus mollit. Keytar helvetica</p>
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
                <h2>Recent Payments</h2>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        style="font-size:13px">
                        <thead class="thead-primary">
                            <tr>
                                <th>Transaction ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Room</th>
                                <th>Name</th>
                                <th>Tenant Phone</th>
                                <th>Status</th>
                                <th>Paid At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $item)
                            <tr>
                                <td>{{ $item->trans_id}}</td>
                                <td>{{ $currency_symbol }} {{number_format($item->trans_amount, 2, '.', ',')}}</td>
                                <td>{{ $item->msisdn}}</td>
                                <td>{{ $item->first_name}} {{ $item->last_name }}</td>
                                <td>{{ $item->bill_ref_no}}</td>
                                <td>{{ $item->t_name}}</td>
                                <td>{{ $item->t_phone}}</td>
                                @if ($item->cron_processed == 1)
                                    <td><span class="badge badge-success">Processed</span></td>
                                @elseif($item->cron_processed == 0)
                                    <td><span class="badge badge-danger">Pending</span></td>
                                @endif
                                <td>{{ $item->trans_created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('property.modals.modal-assign-room')
@include('property.modals.modal-add-another-tenant')
@include('property.modals.modal-add-variation-value')
@stop