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
<h2>User Edit</h2>
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
<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> User Edit</a></li>
</ul>

@foreach ($user as $us)
<form  action="Userupdate" method="post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> 

<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


 <div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
 <input type="text" class="form-control" readonly placeholder="USER_ID" name="userid" id="userid" value="{{ $user[0]->USER_ID }}">
 </div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="FIRST_NAME" name="firstname" id="firstname" value="{{ $user[0]->FIRST_NAME }}">
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
 <input type="text" class="form-control" placeholder="LAST_NAME" name="lastname" id="lastname" value="{{ $user[0]->LAST_NAME }}">
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
<input type="Email" class="form-control" placeholder="EMAIL" name="email" id="email" value="{{ $user[0]->EMAIL }}">
</div>
<br>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
<input type="text" class="form-control" placeholder="PHONE" name="phone" id="phone" value="{{ $user[0]->PHONE }}">
</div>

 <select name="jobstatus" id="jobstatus" class="form-control pro-edt-select form-control-primary">
                                                        @if($user[0]->JOB_STATUS ==1)
                                                        
                                                        <option selected value="1">Active</option>
                                                        <option value="0">Non-Aktif</option>
                                                        @else
                                                        <option value="1">Active</option>
                                                        <option selected value="0">Non-Active</option>
                                                        @endif
                                                        </select>
<br>
<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
<input type="password" class="form-control" placeholder="PASSWORD" name="pass" id="pass" value="{{ $user[0]->PASSWORD }}">
</div>

<div class="input-group mg-b-pro-edt">
<span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
<input type="password" class="form-control" placeholder="Confirm Password" name="pass" id="copass" onkeyup="cekPass()">  
</div>
<p id="error" style="color:red"></p>
<br>




</div>

</div>
</div>
<br>
                                               <div class="text-center custom-pro-edt-ds">
                                                    
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save</button> 
                                              
<script>     
function cekPass()     
{         var pass = document.getElementById('pass').value;
         var copass = document.getElementById('copass').value;         
     var text = document.getElementById('error');         
 if(pass != copass)         
{             
text.style.color = 'red';             
text.innerHTML='Passwords do not match';         
}         
else         
{             
    text.style.color = 'green';             
text.innerHTML='Passwords match'; 

}              
}
 </script>
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