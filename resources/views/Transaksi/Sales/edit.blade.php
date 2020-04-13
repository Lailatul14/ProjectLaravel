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
<h2>Customer Edit</h2>
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
<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Customer Edit</a></li>

</ul>
											               @foreach ($customer as $cus)
                                             <form  action="Customerupdate" method="post">
                                                    {{ @csrf_field() }}
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                                  <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="CUSTOMER_ID" name="customerid" id="customerid"  value="{{ $cus->CUSTOMER_ID }}">
                                                    </div>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="FIRST_NAME" name="firstname" id="firstname" value="{{ $cus->FIRST_NAME}}">
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
 <input type="text" class="form-control" placeholder="LAST_NAME" name="lastname" id="lastname" value="{{ $cus->LAST_NAME }}">
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="PHONE" name="phone" id="phone" value="{{ $cus->PHONE }}">
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
<input type="Email" class="form-control" placeholder="EMAIL" name="email" id="email" value="{{ $cus->EMAIL }}">
</div>
       
</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

	<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="STREET" name="street" id="street" value="{{ $cus->STREET}}">
</div>
	
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="CITY" name="city" id="city" value="{{ $cus->CITY }}">
</div>
<!--div class="review-content-section">
<select name="select" class="form-control pro-edt-select form-control-primary">
<option value="opt1">State</option>
<option value="opt2">Nanggroe Aceh Darussalam</option>
<option value="opt3">Sumatera Utara </option>
<option value="opt4">Sumatera Barat </option>
<option value="opt5">Riau </option>
<option value="opt6"> Kepulauan Riau </option>
<option value="opt7">Jambi </option>
<option value="opt8">Bengkulu </option>
<option value="opt9">Sumatera Selatan </option>
<option value="opt10">Kepulauan Bangka Belitung </option>
<option value="opt11">Lampung </option>
<option value="opt12">Kepulauan Bangka Belitung </option>
<option value="opt13">Banten</option>
<option value="opt14">DKI Jakarta </option>
<option value="opt15">Jawa Barat </option>
<option value="opt16">Jawa Timur </option>
<option value="opt17">DI Yogyakarta</option>
<option value="opt17">Bali </option>
<option value="opt17">Nusa Tenggara Barat</option>
<option value="opt17">Nusa Tenggara Timur</option>
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
<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="STATE" name="state" id="state" value="{{ $cus->STATE }}">
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="ZIP_CODE" name="zipcode" id="zipcode" value="{{ $cus->ZIP_CODE }}">
</div>

</div>
</div>


												<div class="text-center custom-pro-edt-ds">
                                                    
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save</button>                                                    

                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard</button>
                                                </div> 
                                                
                                            </form>
                                             @endforeach
                                            
                                            

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

 @endsection