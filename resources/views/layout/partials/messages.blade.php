<br>
@if(session('success'))
<div class="col-lg-2 col-md-12"></div>
<center>
    <div class="col-lg-6 col-md-12">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
            {{session('success')}}
        </div>
    </div>
</center>
@endif

@if(session('error'))
<div class="col-lg-2 col-md-12"></div>
<center>
    <div class="col-lg-8 col-md-12">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
            {{session('error')}}
        </div>
    </div>
</center>
<div class="col-lg-2 col-md-12"></div>
@endif