@extends('layout.master')
@section('title', 'Manage Property')
@section('parentPageTitle', 'Property')

@section('content')
{{-- <div class="col-lg-7 col-md-4 col-sm-12 text-right">
    <div class="inlineblock text-center m-r-15 m-l-15-sm">
        <span>Visitors</span>
    </div>
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <span>Visits</span>
    </div>
</div> --}}
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-info"><i class="fa fa-money"></i> </div>
                <div class="content">
                    <div class="text">Revenue Collections</div>
                    <h6 class="number">KES 530,000.00</h6>
                </div>
                <hr>
                <div class="icon text-info"><i class="fa fa-dollar"></i> </div>
                <div class="content">
                    <div class="text">Due Collections</div>
                    <h6 class="number">KES 140,000.00</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-warning"><i class="fa fa-home"></i> </div>
                <div class="content">
                    <div class="text">Total Rooms</div>
                    <h6 class="number">{{ $sum_total_rooms }} Rooms</h6>
                </div>
                <hr>
                <div class="icon text-warning"><i class="fa fa-graduation-cap"></i> </div>
                <div class="content">
                    <div class="text">Rented Rooms</div>
                    <h6 class="number">{{ $sum_total_rented_rooms }} Rooms</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-danger"><i class="fa fa-credit-card"></i> </div>
                <div class="content">
                    <div class="text">Vacant Rooms</div>
                    <h6 class="number">{{ $sum_total_vacant_rooms}} Rooms</h6>
                </div>
                <hr>
                <div class="icon text-danger"><i class="fa fa-university"></i> </div>
                <div class="content">
                    <div class="text">Property Variations</div>
                    <h6 class="number">{{ $tot_variations }} Variations</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-success"><i class="icon-users"></i> </div>
                <div class="content">
                    <div class="text">Total Tenants</div>
                    <h6 class="number">{{ $tot_tenants }} Tenants</h6>
                </div>
                <hr>
                <div class="icon text-success"><i class="fa fa-smile-o"></i> </div>
                <div class="content">
                    <div class="text">Total Expenses</div>
                    <h6 class="number">KES 120,000.00</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
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
                                            {{ number_format($item->monthly_rent), 2, '.', ','   }}</td>
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
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                        <thead class="thead-primary">
                            <tr>
                                <th>Transaction ID</th>
                                <th>Name</th>
                                <th>Account Number</th>
                                <th>Room Number</th>
                                <th>Amount Paid</th>
                                <th>Month & Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                                <td>Jan, 2010</td>
                            </tr>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                                <td>Jan, 2010</td>
                            </tr>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                                <td>Jan, 2010</td>
                            </tr>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                                <td>Jan, 2010</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('property.modals.modal-assign-room')
@stop
@section('js')

<script>
    $(function () {
        console.log('welcome fredrick....');
        });
</script>
@stop