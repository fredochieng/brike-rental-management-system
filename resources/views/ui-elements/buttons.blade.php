@extends('layout.master')
@section('title', 'Buttons')
@section('parentPageTitle', 'UI Elements')


@section('content')

<div class="row clearfix button-area">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Buttons</h2>
            </div>
            <div class="body">
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-secondary">Secondary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-dark">Dark</button>                            
                <button type="button" class="btn btn-link">Link</button>
            </div>
            <div class="body">
                <h6>Disabled State</h6>
                <button type="button" class="btn btn-primary disabled">Primary</button>
                <button type="button" class="btn btn-secondary disabled">Secondary</button>
                <button type="button" class="btn btn-success disabled">Success</button>
                <button type="button" class="btn btn-danger disabled">Danger</button>
                <button type="button" class="btn btn-warning disabled">Warning</button>
                <button type="button" class="btn btn-info disabled">Info</button>
                <button type="button" class="btn btn-light disabled">Light</button>
                <button type="button" class="btn btn-dark disabled">Dark</button>                            
                <button type="button" class="btn btn-link disabled">Link</button>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Button tags</h2>
            </div>
            <div class="body">
                <a class="btn btn-primary" href="javascript:void(0);" role="button">Link</a>
                <button class="btn btn-primary" type="submit">Button</button>
                <input class="btn btn-primary" type="button" value="Input">
                <input class="btn btn-primary" type="submit" value="Submit">
                <input class="btn btn-primary" type="reset" value="Reset">
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Outline buttons</h2>
            </div>
            <div class="body">
                <button type="button" class="btn btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                <button type="button" class="btn btn-outline-success">Success</button>
                <button type="button" class="btn btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-outline-info">Info</button>
                <button type="button" class="btn btn-outline-light">Light</button>
                <button type="button" class="btn btn-outline-dark">Dark</button>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix button-area">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Button group</h2>
            </div>
            <div class="body">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary">Left</button>
                    <button type="button" class="btn btn-secondary">Middle</button>
                    <button type="button" class="btn btn-secondary">Right</button>
                </div>
                <hr>
                <h6>Button toolbar</h6>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary">1</button>
                        <button type="button" class="btn btn-secondary">2</button>
                        <button type="button" class="btn btn-secondary">3</button>
                        <button type="button" class="btn btn-secondary">4</button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-secondary">5</button>
                        <button type="button" class="btn btn-secondary">6</button>
                        <button type="button" class="btn btn-secondary">7</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-secondary">8</button>
                    </div>
                </div>
                <hr>
                <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary">1</button>
                        <button type="button" class="btn btn-secondary">2</button>
                        <button type="button" class="btn btn-secondary">3</button>
                        <button type="button" class="btn btn-secondary">4</button>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text" id="btnGroupAddon">@</div>
                        </div>
                        <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
                    </div>
                </div>
                <hr>
                <h6>Sizing</h6>
                <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                    <button type="button" class="btn btn-secondary">Left</button>
                    <button type="button" class="btn btn-secondary">Middle</button>
                    <button type="button" class="btn btn-secondary">Right</button>
                </div>
                <br><br>
                <div class="btn-group" role="group" aria-label="Default button group">
                    <button type="button" class="btn btn-secondary">Left</button>
                    <button type="button" class="btn btn-secondary">Middle</button>
                    <button type="button" class="btn btn-secondary">Right</button>
                </div>
                <br><br>
                <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" class="btn btn-secondary">Left</button>
                    <button type="button" class="btn btn-secondary">Middle</button>
                    <button type="button" class="btn btn-secondary">Right</button>
                </div>
                <hr>
                <h6>Nesting</h6>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-secondary">1</button>
                    <button type="button" class="btn btn-secondary">2</button>
                    
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                        <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix button-area">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <p class="demo-button">
                    <button type="button" class="btn btn-default"><i class="fa fa-plus-square"></i> <span>Default</span></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i> <span>Primary</span></button>
                    <button type="button" class="btn btn-info"><i class="fa fa-info-circle"></i> <span>Info</span></button>
                    <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-refresh fa-spin"></i> <span>Refreshing...</span></button>
                </p>
                <br>
                <p class="demo-button">
                    <button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> <span>Success</span></button>
                    <button type="button" class="btn btn-warning"><i class="fa fa-warning"></i> <span>Warning</span></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> <span>Danger</span></button>
                    <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-spinner fa-spin"></i> <span>Loading...</span></button>
                </p>
                <br>
                <p class="demo-button">
                    <button type="button" class="btn btn-danger"><i class="fa fa-heart"></i> <span>Love</span></button>
                    <button type="button" class="btn btn-danger"><span>Love</span> <i class="fa fa-heart"></i></button>
                    <button type="button" class="btn btn-danger"><span class="sr-only">Love</span> <i class="fa fa-heart"></i></button>
                </p>
                <br>
                <p class="demo-button">
                    <button type="button" class="btn btn-default" title="Refresh"><span class="sr-only">Refresh</span> <i class="fa fa-refresh"></i></button>
                    <button type="button" class="btn btn-default" title="Copy"><span class="sr-only">Copy</span> <i class="fa fa-files-o"></i></button>
                    <button type="button" class="btn btn-success" title="Save"><span class="sr-only">Save</span> <i class="fa fa-save"></i></button>
                    <button type="button" class="btn btn-danger" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                </p>
            </div>
        </div>
    </div>
</div>

@stop
