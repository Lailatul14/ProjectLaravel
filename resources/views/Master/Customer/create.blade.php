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
<h2>Add Customer </h2>
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
<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Add Customer</a></li>
</ul>

<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="review-content-section">

<form action="Customerstore" method="post">
{{ @csrf_field() }}

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
<input type="text" class="form-control" readonly="" placeholder="Customer ID" name="customerid" id="customerid">
</div>


<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="First Name"  name="firstname" id="firstname">
</div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
 <input type="text" class="form-control" placeholder="Last Name"  name="lastname" id="lastname">
</div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="Phone"  name="phone" id="phone">
</div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
<input type="Email" class="form-control" placeholder="Email"  name="email" id="email">
</div>
       


</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="review-content-section">
	
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="Street" name="street" id="street">
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="City"  name="city" id="city">
</div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="State"  name="state" id="state">
</div>
<!--select name="select" class="form-control pro-edt-select form-control-primary" >
<option value="opt1">State</option>
<option value="opt2">Indonesia</option>
<option value="opt3">Malaysia </option>
<option value="opt4">Singapura </option>
<option value="opt5">Brunai Darussalam </option>
<option value="opt6"> Thailand</option>
<option value="opt7">Filipina </option>
<option value="opt8">Myanmar </option>
<option value="opt9">Kamboja </option>
<option value="opt10">Laos</option>
</select>
<br>

<select name="select" class="form-control pro-edt-select form-control-primary">
<option value="opt1">City</option>
<option value="opt2">Bangkalan</option>
<option value="opt3">Blitar</option>
<option value="opt4">Bondowoso </option>
<option value="opt6"> Bojonegoro</option>
<option value="opt7"> Gresik </option>
<option value="opt8">Nganjuk </option>
<option value="opt9">Ngawi </option>
<option value="opt10">Madiun </option>
<option value="opt11">Mojokerto </option>
<option value="opt12">Malang  </option>
</select>
<br-->

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="Zip Code" name="zipcode" id="zipcode">
</div>

</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="text-center custom-pro-edt-ds">
 
<a href="Customerindex">
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