@extends('layout.master')
@section('title', 'Typography')
@section('parentPageTitle', 'UI Elements')


@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Header </h2>
            </div>
            <div class="body">
                <h1>Dashboard Heading 1</h1>
                <h2>Dashboard Heading 2</h2>
                <h3>Dashboard Heading 3</h3>
                <h4>Dashboard Heading 4</h4>
                <h5>Dashboard Heading 5</h5>
                <h6>Dashboard Heading 6</h6>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Paragraph</h2>
            </div>
            <div class="body">
                <p>Appropriately benchmark web-enabled bandwidth and functionalized leadership skills. Conveniently syndicate global opportunities without interactive methods of empowerment. Collaboratively conceptualize user-centric e-tailers for visionary methodologies. Dramatically myocardinate. Phosfluorescently disintermediate unique resources whereas reliable mindshare. Competently optimize client-focused infrastructures vis-a-vis e-business human capital. Uniquely formulate sustainable benefits whereas functional results. Energistically myocardinate bleeding-edge e-business.</p>
                <hr>
                <h6>Blockquote Primary</h6>
                <blockquote>
                    <p class="blockquote blockquote-primary">
                        "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                        <br>
                        <br>
                        <small>
                            - ThemeMakker
                        </small>
                    </p>
                </blockquote>

                <h6>Blockquote Info</h6>
                <blockquote>
                    <p class="blockquote blockquote-info">
                        "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                        <br>
                        <br>
                        <small>
                            - ThemeMakker
                        </small>
                    </p>
                </blockquote>
                
                <h6>Blockquote Danger</h6>
                <blockquote>
                    <p class="blockquote blockquote-danger">
                        "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                        <br>
                        <br>
                        <small>
                            - ThemeMakker
                        </small>
                    </p>
                </blockquote>
                <hr>
                <div class="row clearfix">
                    <div class="col-md-3">
                        <p class="align-left"> <b>Align Left</b> </p>
                        <div class="align-left"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                    <div class="col-md-3">
                        <p class="align-center"> <b>Align Center</b> </p>
                        <div class="align-center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                    <div class="col-md-3">
                        <p class="align-right"> <b>Align Right</b> </p>
                        <div class="align-right"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                    <div class="col-md-3">
                        <p class="align-justify"> <b>Align Justify</b> </p>
                        <div class="align-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Text Style</h2>
            </div>
            <div class="body">
                <p class="text-muted"><code>.text-muted</code> Convey meaning through color with a handful of emphasis utility classes.</p>
                <p class="text-primary"><code>.text-primary</code> Convey meaning through color with a handful of emphasis utility classes.</p>
                <p class="text-success"><code>.text-success</code> Convey meaning through color with a handful of emphasis utility classes.</p>
                <p class="text-info"><code>.text-info</code> Convey meaning through color with a handful of emphasis utility classes.</p>
                <p class="text-warning"><code>.text-warning</code> Convey meaning through color with a handful of emphasis utility classes.</p>
                <p class="text-danger"><code>.text-danger</code> Convey meaning through color with a handful of emphasis utility classes.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Other Style</h2>
            </div>
            <div class="body">
                <p>You can use the mark tag to
                    <mark>highlight</mark> text.</p>
                <p>
                    <del>This line of text is meant to be treated as deleted text.</del>
                </p>
                <p class="text-lowercase"><code>.text-lowercase</code> Lowercased text.</p>
                <p class="text-uppercase"><code class="text-lowercase">.text-uppercase</code> Uppercased text.</p>
                <p class="text-capitalize"><code class="text-lowercase">.text-capitalized</code> Capitalized text.</p>                            
                <p>Make a paragraph stand out by adding <code>.lead</code></p>
                <p class="lead">Objectively re-engineer maintainable total linkage after proactive intellectual capital. Dynamically evolve best-of-breed e-services for user-centric customer.</p>                            
            </div>
        </div>
    </div>
</div>

@stop
