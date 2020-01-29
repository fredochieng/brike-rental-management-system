@extends('layout.master')
@section('title', 'Invoices')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12 col-md-12">
        <div class="card invoice1">                        
            <div class="body">
                <div class="invoice-top clearfix">
                    <div class="logo">
                        <img src="../assets/img/sm/avatar1.jpg" alt="user" class="rounded-circle img-fluid">
                    </div>
                    <div class="info">
                        <h6>Michael Truong</h6>
                        <p> hello@michaeltruong.ca <br>
                            289-335-6503
                        </p>
                    </div>
                    <div class="title">
                        <h4>Invoice #1069</h4>
                        <p>Issued: May 27, 2018<br>
                            Payment Due: June 27, 2018
                        </p>
                    </div>
                </div>
                <hr>
                <div class="invoice-mid clearfix">

                    <div class="clientlogo">
                        <img src="../assets/img/sm/avatar2.jpg" alt="user" class="rounded-circle img-fluid">
                    </div>

                    <div class="info">
                        <h6>Client Name</h6>
                        <p>JohnDoe@gmail.com<br>
                            555-555-5555</p>
                        <h6>Project Description</h6>
                        <p>Proin cursus, dui non tincidunt elementum, tortor ex feugiat enim, at elementum enim quam vel purus. Curabitur semper malesuada urna ut suscipit.</p>
                    </div>   
                
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th>Hours</th>
                                <th>Rate</th>
                                <th style="width: 80px;">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Communication</td>
                                <td>5</td>
                                <td>$20</td>
                                <td>$100</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Asset Gathering</td>
                                <td>2</td>
                                <td>$25</td>
                                <td>$50</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Design Development</td>
                                <td>15</td>
                                <td>$10</td>
                                <td>$150</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Animation</td>
                                <td>8</td>
                                <td>$10</td>
                                <td>$80</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Development</td>
                                <td>10</td>
                                <td>$18</td>
                                <td>$180</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="row clearfix">
                    <div class="col-md-6">
                        <h5>Note</h5>
                        <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="m-b-0"><b>Sub-total:</b> 560.00</p>
                        <p class="m-b-0">Discout: 12.9%</p>
                        <p class="m-b-0">VAT: 12.9%</p>                                        
                        <h3 class="m-b-0 m-t-10">USD 560.00</h3>
                    </div>                                    
                    <div class="hidden-print col-md-12 text-right">
                        <hr>
                        <button class="btn btn-outline-secondary"><i class="icon-printer"></i></button>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop
