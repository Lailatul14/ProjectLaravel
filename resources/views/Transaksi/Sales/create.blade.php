@extends('admin/admin')
@section('konten')

<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<div class="breadcomb-wp">
<div class="breadcomb-icon">
<i class="icon nalika-home"></i>
</div>
<div class="breadcomb-ctn">
<h2>Add Sales </h2>
<p>Welcome to L"store <span class="bread-ntd">#eatForLife</span></p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<div class="breadcomb-report">
<button data-toggle="tooltip" data-placement="left" title="" class="btn" data-original-title="Download Report"><i class="icon nalika-download"></i></button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 </div>
 <div class="single-product-tab-area mg-b-30">

<div class="single-pro-review-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-tab-pro-inner">
<ul id="myTab3" class="tab-review-design">
<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Add Sales</a></li>

</ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="review-content-section">
												
												<form action="Salesstore" method="post">
                                                    {{ @csrf_field() }}
                                                  <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" disabled="" placeholder="User_ID" name="userid" id="userid">
                                                    </div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="First Name" name="firstname" id="firstname">
</div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
 <input type="text" class="form-control" placeholder="Last Name" name="lastname" id="lastname">
</div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
<input type="Email" class="form-control" placeholder="Email" name="email" id="email">
</div>


   
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="review-content-section">
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="Phone" name="phone" id="phone">
</div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="password" name="pass" id="pass">
</div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="Job Status" name="jobstatus" id="jobstatus">
</div>

</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="text-center custom-pro-edt-ds">
    <a href="Userindex">
<button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Add
</button></a>

<button type="button" class="btn btn-ctl-bt waves-effect waves-light">Cancel
</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


            @endsection