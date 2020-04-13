@extends('admin/admin')
@section('konten')
<div class="single-product-tab-area mg-b-30">

<div class="single-pro-review-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-tab-pro-inner">
<ul id="myTab3" class="tab-review-design">
<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Edit Category </a></li>
</ul>
 
                                                 @foreach ($categories as $cat)
                                             <form  action="Categoryupdate" method="post">
                                                    {{ @csrf_field() }}

                                                    <input type="hidden" name="catid" value="{{ $cat->CATEGORY_ID }}">
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="review-content-section">
                                                
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <input type="text"  class="form-control" disabled="" placeholder="CATEGORY_ID" name="catid" id="catid" value=" {{ $cat->CATEGORY_ID }}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <input type="text" required="required" class="form-control" placeholder="CATEGORY_NAME" name="catna" id="catna" value=" {{ $cat->CATEGORY_NAME }}">
                                                    </div>

                                                    <select name="cstatus" id="cstatus" class="form-control pro-edt-select form-control-primary">
                                                        @if($cat->CATEGORY_STATUS ==1)
                                                        <option selected value="1">Active</option>
                                                        <option value="0">Non-Aktif</option>
                                                        @else
                                                        <option value="1">Active</option>
                                                        <option selected value="0">Non-Active</option>
                                                        @endif
                                                        </select>
                            
                                                    <br>

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