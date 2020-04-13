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
<h2> Product Edit</h2>
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
<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Edit</a></li>
</ul>

@foreach ($product as $pro)
<form  action="Productupdate" method="post">
{{ @csrf_field() }}

<input type="hidden" name="productid" value="{{ $pro->PRODUCT_ID }}">

<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="review-content-section">
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
<input type="text" class="form-control" disabled="Product_id" placeholder="PRODUCT_ID" name="productid" id="productid" value="{{ $pro->PRODUCT_ID }}">
</div>
<!--select name="select" class="form-control pro-edt-select form-control-primary">
<option value="opt1">Category</option>
<option value="opt2">Makanan</option>
<option value="opt3">Minuman</option>
<option value="opt4">Camilan</option>

</select>
<br-->


<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
<select type="text" class="form-control" placeholder="CATEGORY" name="categorid" id="categorid">
  <option disabled="">Pilih Category</option>
@foreach ($categories as $cat)
@if($cat->CATEGORY_STATUS == $pro->CATEGORY_ID)  
<option value="{{ $cat->CATEGORY_ID }}" disabled >
  {{ $cat->CATEGORY_NAME }} (Non-Active)
</option>
@else 
<option value="{{ $cat->CATEGORY_ID }}" >
  {{ $cat->CATEGORY_NAME }} 
</option>
@endif
@endforeach
</select>
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="PRODUCT_NAME"  name="productname" id="productname" value="{{ $pro->PRODUCT_NAME }} "> 
</div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
 <input type="text" class="form-control" placeholder="PRODUCT_PRICE" name="price" id="price" value="{{ $pro->PRODUCT_PRICE }}">
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
 <input type="text" class="form-control" placeholder="PRODUCT_STOCK" name="stock" id="stock" value="{{ $pro->PRODUCT_STOCK }}">
</div>

<select name="pstatus" id="pstatus" class="form-control pro-edt-select form-control-primary">
                                                        @if($pro->PRODUCT_STATUS == 1)
                                                        <option selected value="1">Active</option>
                                                        <option value="0">Non-Aktif</option>
                                                        @else
                                                        <option value="1">Active</option>
                                                        <option selected value="0">Non-Active</option>
                                                        @endif
                                                        </select>
                                                        <br>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="EXPLANATION" name="explanation" id="explanation" value="{{ $pro->EXPLANATION }}"></input>
</div>
</div>


</div>
</div>
</div>
<br>
<!--select name="select" class="form-control pro-edt-select form-control-primary">
<option value="opt1">Product Stock</option>
<option value="opt2">In Stock</option>
<option value="opt3">Low Stock</option>
<option value="opt4">Out Of Stock </option>
</select>
<br-->

                        <div class="text-center custom-pro-edt-ds">
                                                    
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save</button>
                                                    
                                                    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                              <script>
                            $(document).ready(function(){
                             $("button").click(function(){
                                $("input").remove();
                                });
                            });
                            </script-->
                                  
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light" >Discard</button></a>
                                                </div> 
                                                @endforeach
                                            </form>
                                             
                                            
                                            

</div>
</div>
</div>
</div>
</div>
</div>





 @endsection