@extends('layout.master')
@section('title', 'Manage Tenant')
@section('parentPageTitle', 'Tenant')


@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="number count-to" data-from="0" data-to="128" data-speed="2000"
                            data-fresh-interval="700">{{ $currency_symbol }} {{ $sum_tot_payments }}</h3>
                        <p class="text-muted">Rent Payments</p>
                        <div class="progress progress-xs">
                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                aria-valuemax="100" style="width: 46%;"></div>
                        </div>
                        <small>46% of total rent payment</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="number count-to" data-from="0" data-to="128" data-speed="2000"
                            data-fresh-interval="700">KES
                            20,000.00</h3>
                        <p class="text-muted">Rent Arrears</p>
                        <div class="progress progress-xs">
                            <div class="progress-bar l-green" role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                aria-valuemax="100" style="width: 14%;"></div>
                        </div>
                        <small>14% of total arrears</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="number count-to" data-from="0" data-to="128" data-speed="2000"
                            data-fresh-interval="700">{{ $tenancy_period }} Months</h3>
                        <p class="text-muted">Tenancy Period</p>
                        <div class="progress progress-xs">
                            <div class="progress-bar l-purple" role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>Change 27%</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Tenant Details</h2>
            </div>
            <div class="body">
                <table class="table m-b-0">
                    <tbody>
                        <tr>
                            <td><strong>Tenant Name</strong></td>
                            <td class="align-right">
                                {{ $tenant->t_name }}
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Phone Number</strong></td>
                            <td class="align-right">{{ $tenant->t_phone }}</td>
                        </tr>
                        <tr>
                            <td><strong>ID/Reg Number</strong></td>
                            <td class="align-right">{{ $tenant->t_id_no }}</td>
                        </tr>
                        <tr>
                            <td><strong>Email Address</strong></td>
                            <td class="align-right">{{ $tenant->t_email }}</td>
                        </tr>
                        <tr>
                            <td><strong>Alt Phone Number</strong></td>
                            <td class="align-right">{{ $tenant->t_alt_phone}}</td>
                        </tr>
                        <tr>
                            <td><strong>Property Name</strong></td>
                            <td class="align-right">{{ $tenant->prop_name }}</td>
                        </tr>

                        <tr>
                            <td><strong>Room Variation</strong></td>
                            <td class="align-right">{{ $room_assignment->var_name_value }}</td>
                        </tr>
                        <tr>
                            <td><strong>Room Number</strong></td>
                            <td class="align-right">{{ $room_assignment->room_no }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tenancy Start Date</strong></td>
                            <td class="align-right">{{ $room_assignment->r_start_date }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tenancy End Date</strong></td>
                            @if ($room_assignment->r_end_date == '')
                            <td class="align-right" style="color:green">Still an active tenant</td>
                            @else
                            <td class="align-right">{{ $room_assignment->r_end_date }}
                            </td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body text-center">
                        <h5>Rent Deposit</h5>
                        <h6>KES 16,000.00</h6>
                        <hr>
                        <input type="text" class="knob2" value="66" data-linecap="round" data-width="115"
                            data-height="131" data-thickness="0.2" data-fgColor="#4CAF50" readonly>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <ul class="list-unstyled feeds_widget">
                            @if ($room_assignment->r_end_date == '')
                            <li>
                                <div class="feeds-left"><i class="icon-logout"></i></div>
                                <div class="feeds-body">
                                    <a href="#" data-toggle="modal" disabled
                                        data-target="#unassignRoomModal_{{$tenant->tenant_id}}" data-backdrop="static"
                                        data-keyboard="false" class="title"><strong>Unassign
                                            Room</strong></a>
                                    <small>End of tenancy</small>
                                </div>
                            </li>
                            @else
                            <li>
                                <div class="feeds-left"><i class="icon-logout"></i></div>
                                <div class="feeds-body">
                                    <a href="#" data-toggle="modal" disabled
                                        data-target="#reactivateTenantModal_{{$tenant->tenant_id}}"
                                        data-backdrop="static" data-keyboard="false" class="title"><strong>Reactivate
                                            tenant</strong></a>
                                    <small>Activate tenant again</small>
                                </div>
                            </li>
                            @endif
                            <li>
                                <div class="feeds-left"><i class="icon-refresh"></i></div>
                                <div class="feeds-body">
                                    <a href="https://www.google.com/" class="title"><strong>Reassign Room</strong></a>
                                    <small>Assign another room</small>
                                </div>
                            </li>
                            <li>
                                <div class="feeds-left"><i class="icon-energy"></i></div>
                                <div class="feeds-body">
                                    <a href="https://www.google.com/" class="title"><strong>Unassign Room</strong></a>
                                    <small>End tenancy of the tenant</small>
                                </div>
                            </li>
                        </ul>
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
                <h2>Rent Payments</h2>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:10px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        style="font-size:13px">
                        <thead class="thead-primary">
                            <tr style="font-size:12px">
                                <th>Transaction ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Account Number</th>
                                <th>Tenant Name</th>
                                <th>Tenant Phone</th>
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
                                <td>{{ $item->trans_date}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('tenants.modals.modal-unassign-room')
@include('tenants.modals.modal-reactivate-tenant')
@stop
@section('page-script')

$('.knob').knob({
draw: function() {
// "tron" case
if (this.$.data('skin') == 'tron') {

var a = this.angle(this.cv) // Angle
,
sa = this.startAngle // Previous start angle
,
sat = this.startAngle // Start angle
,
ea // Previous end angle
, eat = sat + a // End angle
,
r = true;

this.g.lineWidth = this.lineWidth;

this.o.cursor &&
(sat = eat - 0.3) &&
(eat = eat + 0.3);

if (this.o.displayPrevious) {
ea = this.startAngle + this.angle(this.value);
this.o.cursor &&
(sa = ea - 0.3) &&
(ea = ea + 0.3);
this.g.beginPath();
this.g.strokeStyle = this.previousColor;
this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
this.g.stroke();
}

this.g.beginPath();
this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
this.g.stroke();

this.g.lineWidth = 2;
this.g.beginPath();
this.g.strokeStyle = this.o.fgColor;
this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI,
false);
this.g.stroke();

return false;
}
}
});

$('#linecustom1').sparkline('html',{
height: '55px',
width: '100%',
lineColor: '#a095e5',
fillColor: '#a095e5',
minSpotColor: true,
maxSpotColor: true,
spotColor: '#e2a8df',
spotRadius: 0
});

$('#linecustom2').sparkline('html',{
height: '55px',
width: '100%',
lineColor: '#75c3f2',
fillColor: '#75c3f2',
minSpotColor: true,
maxSpotColor: true,
spotColor: '#8dbfe0',
spotRadius: 0
});

$('#linecustom3').sparkline('html',{
height: '55px',
width: '100%',
lineColor: '#fc7b92',
fillColor: '#fc7b92',
minSpotColor: true,
maxSpotColor: true,
spotColor: '#e0b89d',
spotRadius: 0
});

@stop