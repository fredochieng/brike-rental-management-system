@extends('layout.master')
@section('title', 'Editable')
@section('parentPageTitle', 'Table')


@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Editable Tables <small>You can edit any columns except header/footer</small></h2>
            </div>
            <div class="body">
                <table id="mainTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Cost</th>
                            <th>Profit</th>
                            <th>Fun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Car</td>
                            <td>100</td>
                            <td>200</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Bike</td>
                            <td>330</td>
                            <td>240</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Plane</td>
                            <td>430</td>
                            <td>540</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Yacht</td>
                            <td>100</td>
                            <td>200</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Segway</td>
                            <td>330</td>
                            <td>240</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th><strong>TOTAL</strong></th>
                            <th>1290</th>
                            <th>1420</th>
                            <th>5</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
