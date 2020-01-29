@extends('layout.master')
@section('title', 'eCommerce')
@section('parentPageTitle', 'Widgets')


@section('content')

<div class="row clearfix">

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <div class="receipt-left">
                            <img class="img-fluid" src="../assets/img/user.png" style="width: 71px; border-radius: 43px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 text-right">
                        <h5>ThemeMakker.</h5>
                        <p class="mb-0">+91 12345-6789 <i class="fa fa-phone"></i></p>
                        <p class="mb-0">info@gmail.com <i class="fa fa-envelope-o"></i></p>
                        <p>USA <i class="fa fa-location-arrow"></i></p>
                    </div>
                </div>                    
                <div class="row clearfix">                                
                    <div class="col-lg-8 col-md-12">
                        <h5>Alizee Thomas <small>&nbsp; | &nbsp; Lucky Number : 123</small></h5>
                        <p class="mb-0"><b>Mobile :</b> +91 12345-6789</p>
                        <p class="mb-0"><b>Email :</b> info@gmail.com</p>
                        <p><b>Address :</b> NewYork, USA</p>
                    </div>
                    <div class="col-lg-4 col-md-12 text-right">
                        <h3>Receipt</h3>
                    </div>
                </div>                    
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Description</th>
                                <th class="text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-9">Payment for August 2016</td>
                                <td class="col-md-3 text-right"><i class="fa fa-inr"></i> 15,000/-</td>
                            </tr>
                            <tr>
                                <td class="col-md-9">Payment for June 2016</td>
                                <td class="col-md-3 text-right"><i class="fa fa-inr"></i> 6,00/-</td>
                            </tr>
                            <tr>
                                <td class="col-md-9">Payment for May 2016</td>
                                <td class="col-md-3 text-right"><i class="fa fa-inr"></i> 35,00/-</td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <p>Total Amount:</p>
                                    <p>Late Fees:</p>
                                    <p>Payable Amount:</p>
                                    <p>Balance Due:</p>
                                </td>
                                <td class="text-right">
                                    <p><strong><i class="fa fa-inr"></i> 65,500/-</strong></p>
                                    <p><strong><i class="fa fa-inr"></i> 500/-</strong></p>
                                    <p><strong><i class="fa fa-inr"></i> 1300/-</strong></p>
                                    <p><strong><i class="fa fa-inr"></i> 9500/-</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <h6>Total:</h6>
                                </td>
                                <td class="text-danger text-right">
                                    <h6><i class="fa fa-inr"></i> 31.566/-</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>                    
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12">
                        <p class="mb-0"><b>Date :</b> 15 May 2018</p>
                        <h6 class="mb-0 text-muted">Thank you for your business!</h6>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h5>Signature</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>New Customer Ratings </h2>
            </div>
            <div class="body">
                <ul class="row list-unstyled c_review">
                    <li class="col-12">
                        <div class="avatar">
                            <a href="javascript:void(0);"><img class="rounded" src="../assets/img/sm/avatar2.jpg" alt="user" width="60"></a>
                        </div>                                
                        <div class="comment-action">
                            <h6 class="c_name">Hossein Shams</h6>
                            <p class="c_msg m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                            <div class="badge badge-info">iPhone 8</div>
                            <span class="m-l-10">
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                            </span>
                            <small class="comment-date float-sm-right">Dec 21, 2017</small>
                        </div>                                
                    </li>
                    <li class="col-12">
                        <div class="avatar">
                            <a href="javascript:void(0);"><img class="rounded" src="../assets/img/sm/avatar3.jpg" alt="user" width="60"></a>
                        </div>                                
                        <div class="comment-action">
                            <h6 class="c_name">Tim Hank</h6>
                            <p class="c_msg m-b-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                            <div class="badge badge-info">Nokia 8</div>
                            <span class="m-l-10">
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                            </span>
                            <small class="comment-date float-sm-right">Dec 18, 2017</small>
                        </div>                                
                    </li>
                    <li class="col-12">
                        <div class="avatar">
                            <a href="javascript:void(0);"><img class="rounded" src="../assets/img/sm/avatar5.jpg" alt="user" width="60"></a>
                        </div>                                
                        <div class="comment-action">
                            <h6 class="c_name">Gary Camara</h6>
                            <p class="c_msg m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            <div class="badge badge-info">HTC U11</div>
                            <span class="m-l-10">
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="icon-star text-warning"></i></a>
                                <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                            </span>
                            <small class="comment-date float-sm-right">Dec 13, 2017</small>
                        </div>                                
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="../assets/img/sm/avatar4.jpg" class="rounded">
                        <div class="review-block-name"><a href="javascript:void(0);">Herman</a></div>
                        <span>Jun 22, 2018<br>1 day ago</span>
                    </div>
                    <div class="col-sm-9">
                        <div class="m-b-10">
                            <button class="btn btn-warning btn-sm" type="submit"><i class="icon-star text-light"></i></button>
                            <button class="btn btn-warning btn-sm" type="submit"><i class="icon-star text-light"></i></button>
                            <button class="btn btn-warning btn-sm" type="submit"><i class="icon-star text-light"></i></button>
                            <button class="btn btn-warning btn-sm" type="submit"><i class="icon-star text-light"></i></button>
                            <button class="btn btn-warning btn-sm" type="submit"><i class="icon-star text-light"></i></button>
                        </div>
                        <h6>this was nice in buy</h6>
                        <p>this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="card product_item">
                    <div class="body">
                        <div class="cp_img">
                            <img src="../assets/img/ecommerce/1.png" alt="Product" class="img-fluid">
                            <div class="hover">
                                <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-eye"></i></a>
                                <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-basket"></i></a>
                            </div>
                        </div>
                        <div class="product_details">
                            <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">$16.00</li>
                                <li class="new_price">$13.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div class="top-bar">
                            <span>$12.95</span>
                            <span class="float-right icon-heart"></span>
                        </div>
                        <img src="../assets/img/ecommerce/wireless-red-quarter.jpg" class="img-fluid" />
                        <div class="title">BEATS HEADPHONE <span class="icon-basket float-right"></span></div>
                        <hr>
                        <div class="footer">
                            <span class="badge badge-default">RED</span>
                            <span class="badge badge-default">BEATS</span>
                            <span class="badge badge-default">HEADPHONE</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card average_rating">
                    <div class="header">
                        <h2>Average user rating</h2>
                    </div>
                    <div class="body">                            
                        <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
                        <button class="btn btn-warning btn-sm" type="submit"><i class="icon-star"></i></button>
                        <button class="btn btn-warning btn-sm" type="submit"><i class="icon-star"></i></button>
                        <button class="btn btn-warning btn-sm" type="submit"><i class="icon-star"></i></button>
                        <button class="btn btn-outline-warning btn-sm" type="submit"><i class="icon-star"></i></button>
                        <button class="btn btn-outline-warning btn-sm" type="submit"><i class="icon-star"></i></button>
                    </div>
                </div>
                <div class="card average_rating">
                    <div class="header">
                        <h2>Rating breakdown</h2>
                    </div>
                    <div class="body clearfix">
                        <div class="float-left">
                            <div class="float-left" style="width:35px; line-height:1;">
                                <div style="height:9px; margin:5px 0;">5 <span class="icon-star"></span></div>
                            </div>
                            <div class="float-left" style="width:180px;">
                                <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right" style="margin-left:10px;">1</div>
                        </div>
                        <div class="float-left">
                            <div class="float-left" style="width:35px; line-height:1;">
                                <div style="height:9px; margin:5px 0;">4 <span class="icon-star"></span></div>
                            </div>
                            <div class="float-left" style="width:180px;">
                                <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right" style="margin-left:10px;">1</div>
                        </div>
                        <div class="float-left">
                            <div class="float-left" style="width:35px; line-height:1;">
                                <div style="height:9px; margin:5px 0;">3 <span class="icon-star"></span></div>
                            </div>
                            <div class="float-left" style="width:180px;">
                                <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right" style="margin-left:10px;">0</div>
                        </div>
                        <div class="float-left">
                            <div class="float-left" style="width:35px; line-height:1;">
                                <div style="height:9px; margin:5px 0;">2 <span class="icon-star"></span></div>
                            </div>
                            <div class="float-left" style="width:180px;">
                                <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right" style="margin-left:10px;">0</div>
                        </div>
                        <div class="float-left">
                            <div class="float-left" style="width:35px; line-height:1;">
                                <div style="height:9px; margin:5px 0;">1 <span class="icon-star"></span></div>
                            </div>
                            <div class="float-left" style="width:180px;">
                                <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right" style="margin-left:10px;">0</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div class="top-bar">
                            <span>$56.25</span>
                            <span class="float-right icon-heart"></span>
                        </div>
                        <img src="../assets/img/ecommerce/Canon-70-200mm.jpg" class="img-fluid" />
                        <div class="title">CAMERA LENS<span class="icon-basket float-right"></span></div>
                        <hr>
                        <div class="footer">
                            <span class="badge badge-default">CAMERA</span>
                            <span class="badge badge-default">GADGET</span>
                            <span class="badge badge-default">LENS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Payment form1</h2>
            </div>                    
            <div class="body">
                <p>
                    <img src="../assets/img/ecommerce/mastercard.png" class="m-r-5">
                    <img src="../assets/img/ecommerce/visa-card.png" class="m-r-5">
                    <img src="../assets/img/ecommerce/paypal.png">
                </p>
                <p class="alert alert-success">Some text success or error</p>                            
                <form role="form">
                    <div class="form-group">
                        <label for="username">Full name (on the card)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="cardNumber">Card number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                            </div>
                            <input type="text" class="form-control" name="cardNumber" placeholder="">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label><span class="hidden-xs">Expiration</span> </label>
                                <div class="form-inline">
                                    <select class="form-control" style="width:45%">
                                        <option>MM</option>
                                        <option>01 - Janiary</option>
                                        <option>02 - February</option>
                                        <option>03 - February</option>
                                    </select>
                                    <span style="width:10%; text-align: center"> / </span>
                                    <select class="form-control" style="width:45%">
                                        <option>YY</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                <input class="form-control" required="" type="text">
                            </div>
                        </div>
                    </div>
                    <button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Paymetn form2</h2>
            </div>
            <div class="body">
                <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                    <li class="nav-item"><a class="nav-link active show" data-toggle="pill" href="#nav-tab-card"><i class="fa fa-credit-card"></i> Credit Card</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#nav-tab-paypal"><i class="fa fa-paypal"></i>  Paypal</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#nav-tab-bank"><i class="fa fa-university"></i>  Bank Transfer</a></li>
                </ul>                            
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="nav-tab-card">
                        <p class="alert alert-success">Some text success or error</p>
                        <form role="form">
                            <div class="form-group">
                                <label for="username">Full name (on the card)</label>
                                <input type="text" class="form-control" name="username" placeholder="" required="">
                            </div>
                        
                            <div class="form-group">
                                <label for="cardNumber">Card number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="cardNumber" placeholder="">
                                    <div class="input-group-append">
                                        <span class="input-group-text text-muted">
                                            <i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp; 
                                            <i class="fa fa-cc-mastercard"></i> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label><span class="hidden-xs">Expiration</span> </label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="MM" name="">
                                            <input type="number" class="form-control" placeholder="YY" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                        <input type="number" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-tab-paypal">
                        <p>Paypal is easiest way to pay online</p>
                        <p><button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i> Log in my Paypal </button></p>
                        <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <div class="tab-pane fade" id="nav-tab-bank">
                        <p>Bank accaunt details</p>
                        <dl class="param">
                            <dt>BANK: </dt>
                            <dd> THE WORLD BANK</dd>
                        </dl>
                        <dl class="param">
                            <dt>Accaunt number: </dt>
                            <dd> 12345678912345</dd>
                        </dl>
                        <dl class="param">
                            <dt>IBAN: </dt>
                            <dd> 123456789</dd>
                        </dl>
                        <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card product_item_list">
            <div class="header">
                <h2>Product List</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th data-breakpoints="sm xs">Detail</th>
                                <th data-breakpoints="xs">Amount</th>
                                <th data-breakpoints="xs md">Stock</th>
                                <th data-breakpoints="sm xs md">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="../assets/img/ecommerce/1.png" width="48" alt="Product img"></td>
                                <td><h5>Simple Black Clock</h5></td>
                                <td><span class="text-muted">randomised words even slightly believable</span></td>
                                <td>$16.00</td>
                                <td><span class="col-green">In Stock</span></td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-danger"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/img/ecommerce/10.png" width="48" alt="Product img"></td>
                                <td><h5>Brone Candle</h5></td>
                                <td><span class="text-muted">It is a long established  will be distracted</span></td>
                                <td>$15.00</td>
                                <td><span class="col-amber">Low Stock</span></td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-danger"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/img/ecommerce/11.png" width="48" alt="Product img"></td>
                                <td><h5>Wood Simple Clock</h5></td>
                                <td><span class="text-muted">There passages of Lorem Ipsum available</span></td>
                                <td>$16.00</td>
                                <td><span class="col-amber">Low Stock</span></td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-danger"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/img/ecommerce/5.png" width="48" alt="Product img"></td>
                                <td><h5>Unero Small Bag</h5></td>
                                <td><span class="text-muted">It is a long established fact that a distracted</span></td>
                                <td>$23.00</td>
                                <td><span class="col-red">Out Of Stock</span></td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-danger"><i class="icon-trash"></i></a>
                                </td>
                            </tr>      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="preview col-lg-4 col-md-12">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="product_1"><img src="../assets/img/ecommerce/1.png" class="img-fluid" /></div>
                            <div class="tab-pane" id="product_2"><img src="../assets/img/ecommerce/2.png" class="img-fluid"/></div>
                            <div class="tab-pane" id="product_3"><img src="../assets/img/ecommerce/3.png" class="img-fluid"/></div>
                            <div class="tab-pane" id="product_4"><img src="../assets/img/ecommerce/4.png" class="img-fluid"/></div>
                            <div class="tab-pane" id="product_5"><img src="../assets/img/ecommerce/5.png" class="img-fluid"/></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#product_1"><img src="../assets/img/ecommerce/1.png" class="img-fluid" /></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_2"><img src="../assets/img/ecommerce/2.png" class="img-fluid"/></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_3"><img src="../assets/img/ecommerce/3.png" class="img-fluid"/></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_4"><img src="../assets/img/ecommerce/4.png" class="img-fluid"/></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_5"><img src="../assets/img/ecommerce/5.png" class="img-fluid"/></a></li>                                    
                        </ul>                
                    </div>
                    <div class="details col-lg-8 col-md-12">
                        <h3 class="product-title m-b-0">Simple Black Clock</h3>                                    
                        <div class="rating">
                            <div class="stars">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-muted"></span>
                            </div>
                            <span class="m-l-10">41 reviews</span>
                        </div>
                        <hr>
                        <h5 class="price m-t-0">Current Price: <span class="text-warning">$180</span></h5>
                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p class="vote"><strong>78%</strong> of buyers enjoyed this product! <strong>(23 votes)</strong></p>
                        <h5 class="sizes">sizes:
                            <span class="size" title="small">s</span>
                            <span class="size" title="medium">m</span>
                            <span class="size" title="large">l</span>
                            <span class="size" title="xtra large">xl</span>
                        </h5>
                        <h5 class="colors">colors:
                            <span class="color bg-warning not-available"  title="Not In store"></span>
                            <span class="color bg-success"></span>
                            <span class="color bg-primary"></span>
                        </h5>
                        <hr>
                        <div class="action">
                            <button class="btn btn-primary" type="button">Add to Cart</button>
                            <button class="btn btn-danger" type="button"><span class="icon-heart"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card product_item_list product-order-list">
            <div class="header">
                <h2>Product Order List</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th data-breakpoints="sm xs">Order ID</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th data-breakpoints="xs">Amount</th>
                                <th>Date</th>
                                <th data-breakpoints="xs md">Status</th>
                                <th data-breakpoints="sm xs md">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Smith</td>
                                <td>#291989</td>
                                <td><img src="../assets/img/ecommerce/1.png" width="48" alt="Product img"></td>
                                <td><h5>Simple Black Clock</h5></td>
                                <td>$16.00</td>
                                <td>01-05-2018</td>
                                <td><span class="badge badge-success bg-success text-white">Paid</span></td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hossein Shams</td>
                                <td>#291990</td>
                                <td><img src="../assets/img/ecommerce/10.png" width="48" alt="Product img"></td>
                                <td><h5>Brone Candle</h5></td>
                                <td>$15.00</td>
                                <td>7-05-2018</td>
                                <td><span class="badge badge-danger bg-danger text-white">Failed</span></td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Maryam Amiri</td>
                                <td>#291991</td>
                                <td><img src="../assets/img/ecommerce/11.png" width="48" alt="Product img"></td>
                                <td><h5>Wood Simple Clock</h5></td>
                                <td>$16.00</td>
                                <td>09-05-2018</td>
                                <td><span class="badge badge-success bg-success text-white">Paid</span></td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tim Hank</td>
                                <td>#291992</td>
                                <td><img src="../assets/img/ecommerce/5.png" width="48" alt="Product img"></td>
                                <td><h5>Unero Small Bag</h5></td>
                                <td>$23.00</td>
                                <td>14-05-2018</td>
                                <td><span class="badge badge-warning bg-warning text-white">Pending</span></td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-trash"></i></a>
                                </td>
                            </tr>      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>                    
    </div>

</div>

@stop
