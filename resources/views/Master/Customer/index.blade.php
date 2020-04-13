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
<h2>Customer List</h2>
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
                            <h4>Customer List</h4>
                            <div class="add-product">
                                <a href="Customercreate"> Add Customer</a>
                            </div>
                            <table>
                              <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>First_Name</th>
                                    <th>Last_name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip_code</th>
                                    <th>Status</th>
                                    <th>Edit Data</th>
                                </tr>
                              </thead>

                              <tbody> 

                                @foreach ($customer as $cus)
                                <tr>
                                   
                                   <td>{{ $cus->CUSTOMER_ID }}</td>
                                   <td>{{ $cus->FIRST_NAME }}</td>
                                   <td>{{ $cus->LAST_NAME }}</td>
                                   <td>{{ $cus->PHONE }}</td>
                                   <td>{{ $cus->EMAIL }}</td>
                                   <td>{{ $cus->STREET }}</td>
                                   <td>{{ $cus->CITY }}</td>
                                   <td>{{ $cus->STATE }}</td>
                                   <td>{{ $cus->ZIP_CODE }}</td>
                                   <td><span class="label {{ ($cus->CUSTOMER_STATUS == 1) ? 'label-primary' : 'label-danger' }}">{{ ($cus->CUSTOMER_STATUS  == 1) ? 'Active' : 'Non-Active' }}</span></td>
                                  
                                    <td>
                               
                                        <a href="Customeredit{{ $cus->CUSTOMER_ID }}">
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