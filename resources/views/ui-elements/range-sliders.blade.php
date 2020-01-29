@extends('layout.master')
@section('title', 'Range Sliders')
@section('parentPageTitle', 'UI Elements')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Round Range Sliders Default</h2>
            </div>
            <div class="body text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h6>Default</h6>
                        <div id="slider"></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h6>Min Range</h6>
                        <div id="min_range"></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h6>Range</h6>
                        <div id="r_range"></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h6>startAngle and endAngle</h6>
                        <div id="startAngle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Round Range Sliders <small>Different Theming and Appearances</small></h2>
            </div>
            <div class="body text-center">
                <div class="row">                                
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div id="appearance1"></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div id="appearance2"></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div id="appearance3"></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div id="appearance4"></div>
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
                <h2>Material Design Style Range Sliders</h2>
            </div>
            <div class="body">
                <input type="range" max="100" value="0">
                <input type="range" max="100" value="50">
                <input type="range" max="100" value="100">
                <input type="range" max="100" value="0" class="focused">
                <input type="range" max="100" value="50" class="focused">
                <input type="range" max="100" value="100" class="focused">
                <input type="range" max="100" value="0" class="clicked">
                <input type="range" max="100" value="50" class="clicked">
                <input type="range" max="100" value="100" class="clicked">
                <input type="range" max="100" value="0" class="disabled">
                <input type="range" max="100" value="50" class="disabled">
                <input type="range" max="100" value="100" class="disabled">
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Tabs With Only Icon Title</h2>
            </div>
            <div class="body">
                    <div class="irs-demo m-b-30"> <b>Start without params</b>
                        <input type="text" id="range_01" value="" />
                    </div>
                    <div class="irs-demo m-b-30"> <b>Set min value, max value and start point</b>
                        <input type="text" id="range_02" value="" />
                    </div>
                    <div class="irs-demo m-b-30"> <b>Set type to double and specify range, also showing grid and adding prefix "$"</b>
                        <input type="text" id="range_03" value="" />
                    </div>
                    <div class="irs-demo m-b-30"> <b>Set up range with negative values</b>
                        <input type="text" id="range_04" value="" />
                    </div>
                    <div class="irs-demo m-b-30"> <b>Using step 250</b>
                        <input type="text" id="range_05" value="" />
                    </div>
                    <div class="irs-demo m-b-30"> <b>Set up range with fractional values, using fractional step</b>
                        <input type="text" id="range_06" value="" />
                    </div>
                    <div class="irs-demo m-b-30"> <b>Set up you own numbers</b>
                        <input type="text" id="range_07" value="" />
                    </div>
                    <div class="irs-demo m-b-30"> <b>Using any strings as your values</b>
                        <input type="text" id="range_08" value="" />
                    </div>
                    <div class="irs-demo m-b-30"> <b>One more example with strings</b>
                        <input type="text" id="range_09" value="" />
                    </div>
                    <div class="irs-demo m-b-30"> <b>No prettify. Big numbers are ugly and unreadable</b>
                        <input type="text" id="range_10" value="" />
                    </div>
                </div>
        </div>
    </div>
    
</div>

@stop
