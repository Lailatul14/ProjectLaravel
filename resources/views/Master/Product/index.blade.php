@extends('admin/admin')
@section('konten')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<div class="breadcomb-wp">
<div class="breadcomb-icon">
<i class="icon nalika-home"></i>
</div>
<div class="breadcomb-ctn">
<h2>Product List</h2>
<p>Welcome to L'store <span class="bread-ntd"><br>#
eat for life</span></p>

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
<div class="product-status mg-b-30">
<div class="container-fluid">
<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="Productcreate">Add Product</a>
                            </div>
                            <table>
                              <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Categories</th>
                                    <th>Product Name</th>
                                    <th>Price</th> 
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Explanation</th>
                                    <th>Action</th>
                                </tr>
                              </thead>

                              <tbody> 

                                @foreach ($product as $pro)
                                <tr>
                                 
                                   <td>{{ $pro->PRODUCT_ID }}</td>
                                   <td>{{ $pro->CATEGORY_ID }}</td>
                                   <td>{{ $pro->PRODUCT_NAME }}</td>
                                   <td>{{ $pro->PRODUCT_PRICE }}</td>
                                   <td>{{ $pro->PRODUCT_STOCK }}</td>
                                   <td><span class="label {{ ($pro->PRODUCT_STATUS == 1) ? 'label-primary' : 'label-danger' }}">{{ ($pro->PRODUCT_STATUS == 1) ? 'Active' : 'Non-Active' }}</span></td>
                                   <td>{{ $pro->EXPLANATION }}</td>


                                    <td>

                                    
                                        <a href="Productedit{{ $pro->PRODUCT_ID }}">
                                          <button type="submit" data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit">                                           
                                           <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                         </button>
                                        </a>
                                        </td>
                                    </tr>

                                     @endforeach
                                      </tbody>
                                    </table>
                                       

                              
                           
                <div class="custom-pagination">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            @endsection