@extends('layout.master')
@section('title', 'Manage Room')
@section('parentPageTitle', 'Room')


@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row clearfix">

            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card overflowhidden">
                    <div class="body">
                        <h5 class="m-t-0 m-b-5">{{ $tot_tenants }}</h5>
                        <p class="text-muted">Total tenants</p>
                    </div>
                    <span id="linecustom1">1,4,2,6,5,2,3,8,5,2</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card overflowhidden">
                    <div class="body">
                        <h5 class="m-t-0 m-b-5">{{ $currency_symbol }} {{ number_format($tot_payments, 2, '.', ',') }}
                        </h5>
                        <p class="text-muted ">Revenue income</p>
                    </div>
                    <span id="linecustom2">2,9,5,5,8,5,4,2,6</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card overflowhidden">
                    <div class="body">
                        <h5 class="m-t-0 m-b-5">{{ $currency_symbol}} {{ $rent_arrears_amount }}</h5>
                        <p class="text-muted">Rent arrears</p>
                    </div>
                    <span id="linecustom3">1,5,3,6,6,3,6,8,4,2</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card overflowhidden">
                    <div class="body">
                        <h5 class="m-t-0 m-b-5">KES 60,501.00</h5>
                        <p class="text-muted">Unpaid deposit</p>
                    </div>
                    <span id="linecustom4">1,5,3,6,6,3,6,8,4,2</span>
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
                        style="font-size:11px">
                        <thead class="thead-primary">
                        <tr style="font-size:11px">
                                <th>Trans ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Account No</th>
                                <th>Tenant Name</th>
                                <th>Tenant Phone</th>
                                <th>Status</th>
                                <th>Paid At</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($payments as $count => $item)
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
                                <td>{{ $item->trans_date}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Active Tenants</h2>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:10px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        style="font-size:13px">
                        <thead class="thead-primary">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>ID/Reg No</th>
                                <th>Tenancy Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($room_assignments as $item)
                            <tr>
                                <td>{{ $item->t_name}}</td>
                                <td>{{ $item->t_phone}}</td>
                                <td>{{ $item->t_id_no}}</td>
                                <td>{{ $item->r_start_date}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

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
this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
this.g.stroke();

return false;
}
}
});

$('#linecustom1').sparkline('html',{
height: '25px',
width: '100%',
lineColor: '#a095e5',
fillColor: '#a095e5',
minSpotColor: true,
maxSpotColor: true,
spotColor: '#e2a8df',
spotRadius: 0
});

$('#linecustom2').sparkline('html',{
height: '25px',
width: '100%',
lineColor: '#75c3f2',
fillColor: '#75c3f2',
minSpotColor: true,
maxSpotColor: true,
spotColor: '#8dbfe0',
spotRadius: 0
});

$('#linecustom3').sparkline('html',{
height: '25px',
width: '100%',
lineColor: '#fc7b92',
fillColor: '#fc7b92',
minSpotColor: true,
maxSpotColor: true,
spotColor: '#e0b89d',
spotRadius: 0
});

$('#linecustom4').sparkline('html',{
height: '25px',
width: '100%',
lineColor: '#006600',
fillColor: '#006600',
minSpotColor: true,
maxSpotColor: true,
spotColor: '#e0b89d',
spotRadius: 0
});

@stop