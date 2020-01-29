@extends('layout.master')
@section('title', 'Peity')
@section('parentPageTitle', 'Charts')


@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Mini Line Chart</h2>
            </div>
            <div class="body">                        
                <p class="margin-bottom-30">Mouse over the chart to see the tooltip</p>
                <span class="inlinesparkline" id="demo-sparkline-line1">26,68,35,38,53,95,114,87,114</span> &nbsp;&nbsp;&nbsp;
                <span class="inlinesparkline" id="demo-sparkline-line2">9,43,50,36,95,41,69,113,50</span> &nbsp;&nbsp;&nbsp;
                <span class="inlinesparkline" id="demo-sparkline-line3">5,43,66,73,50,102,40,92,59</span> &nbsp;&nbsp;&nbsp;
                <span class="inlinesparkline" id="demo-sparkline-line4">14,89,16,35,63,63,64,124,100</span> &nbsp;&nbsp;&nbsp;
                <span class="inlinesparkline" id="demo-sparkline-line5">38,13,36,62,98,48,93,60,75</span>&nbsp;&nbsp;&nbsp;
                <span class="inlinesparkline" id="demo-sparkline-line6">Loading...</span> &nbsp;&nbsp;&nbsp;
                <span class="inlinesparkline" id="demo-sparkline-line7">Loading...</span> &nbsp;&nbsp;&nbsp;
                <span class="inlinesparkline" id="demo-sparkline-line8">Loading...</span> &nbsp;&nbsp;&nbsp;
                <span class="inlinesparkline" id="demo-sparkline-line9">Loading...</span> &nbsp;&nbsp;&nbsp;
                <span class="inlinesparkline" id="demo-sparkline-line10">Loading...</span>                            
                <hr>
                <p>Composite Inline</p>
                <span id="demo-sparkline-compositeline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Mini Bar Chart</h2>
            </div>
            <div class="body">
                <span id="mini-bar-chart1" class="mini-bar-chart"></span> &nbsp;&nbsp;&nbsp;
                <span id="mini-bar-chart2" class="mini-bar-chart"></span> &nbsp;&nbsp;&nbsp;
                <span id="mini-bar-chart3" class="mini-bar-chart"></span> &nbsp;&nbsp;&nbsp;
                <span id="mini-bar-chart4" class="mini-bar-chart"></span> &nbsp;&nbsp;&nbsp;
                <span id="mini-bar-chart5" class="mini-bar-chart"></span>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <p>Negative values</p>
                        <span id="mini-bar-negative" class="mini-bar-chart">25, -10, 15, 35, -15, -5, 10, 20, 15</span>
                        <br>
                        <br>
                    </div>
                    <div class="col-md-4">
                        <p>Stacked</p>
                        <span id="mini-bar-stacked" class="mini-bar-chart">2:4, 5:7, 2:9, 4:8, 3:10, 4:10, 3:6, 5:8, 2:3</span>
                        <br>
                        <br>
                    </div>
                    <div class="col-md-4">
                        <p>Composite Bar</p>
                        <span id="demo-sparkline-compositebar">4,6,7,7,4,3,2,1,4</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="header">
                <h2>Mini Pie Chart</h2>
            </div>
            <div class="body">
                <span id="mini-pie-chart1">30, 15, 55</span> &nbsp;&nbsp;&nbsp;
                <span id="mini-pie-chart2">65, 25, 10</span> &nbsp;&nbsp;&nbsp;
                <span id="mini-pie-chart3">70, 30</span>
                <span id="mini-pie-chart4">20, 15, 65</span> &nbsp;&nbsp;&nbsp;
                <span id="mini-pie-chart5">60, 10, 30</span> &nbsp;&nbsp;&nbsp;
                <span id="mini-pie-chart6">15, 35, 50</span>
            </div>
        </div>
    </div>
</div>

@stop
