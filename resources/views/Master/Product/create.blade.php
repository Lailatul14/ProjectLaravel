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
<h2> Add Product </h2>
<p>Welcome to L'store <span class="bread-ntd">#eatforlife</span></p>
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
<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Add Product </a></li>

</ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="review-content-section">
						
<form action="Productstore" method="post">
 {{ @csrf_field() }}

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
<input type="text" class="form-control" disabled="" placeholder="Product ID" name="productid" id="productid">
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
<select type="text" class="form-control" placeholder="CATEGORY_ID" name="categorid" id="categorid">
  <option disabled="" selected="">Pilih Category</option>
@foreach ($categories as $cat)
@if($cat->CATEGORY_STATUS == 1)
<option value="{{ $cat->CATEGORY_ID }}">
  {{ $cat->CATEGORY_NAME }}
</option>
@else
<option value="{{ $cat->CATEGORY_ID }}" disabled>
  {{ $cat->CATEGORY_NAME }} (Non-Active)
</option>
@endif
@endforeach
</select>
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="Product Name" name="productname" id="productname">
</div>


<!--div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="Image" name="image" id="image">
</div-->



</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="review-content-section">

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
 <input type="text" class="form-control" placeholder="Product Price" name="price" id="price">
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
 <input type="text" class="form-control" placeholder="Product Stock" name="stock" id="stock">
</div>
<!--select name="select" class="form-control pro-edt-select form-control-primary">
<option value="opt1">Product Stock</option>
<option value="opt2">In Stock</option>
<option value="opt3">Low Stock</option>
<option value="opt4">Out Of Stock </option>

</select>

<br-->


<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
<input type="textarea" class="form-control" placeholder="Explanation" name="explanation" id="explanation"></input>
</div>
<br>


</div>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="text-center custom-pro-edt-ds">
	

<a href="Productindex">
  
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

