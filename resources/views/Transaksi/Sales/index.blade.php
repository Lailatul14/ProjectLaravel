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
<h2>User List</h2>
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
                            <h4>User List</h4>
                            <div class="add-product">
                                <a href="Usercreate"> Add user</a>
                             </div>
                            <table>
                              <thead>
                                <tr>
                                    <th>User_ID</th>
                                    <th>First_Name</th>
                                    <th>Last_name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Password</th>
                                    <th>Job Status</th>
                                    <th>Action</th>
                                </tr>
                                 
                                 </thead>
                              <tbody>
                                
                                @foreach ($user as $us)
                                <tr>
                                  
                                   
                                   <td>{{ $us->USER_ID }}</td>
                                   <td>{{ $us->FIRST_NAME }}</td>
                                   <td>{{ $us->LAST_NAME }}</td>
                                   <td>{{ $us->EMAIL }}</td>
                                   <td>{{ $us->PHONE }}</td>
                                   <td>{{ $us->PASSWORD }}</td>
                                   <td>{{ $us->JOB_STATUS }}</td>
                                    <td>

                                        <a href="Useredit{{ $us->USER_ID }}">
                                          <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit"></li>
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                          </button>
                                        </a>
                                          
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" class="pd-setting-ed" data-original-title="Trash"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                      </tr>

                                        @endforeach
                                      </tbody>
                                    </table>
                                        <!-- Modal -->
                                                 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLongTitle"><u><font color=#191970>DELETE USER DATA</font></u></h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      <br>
                                                         <h5><font color=#191970>Are you sure to delete this data?</font></h5> 
                                                      </div>
                                                      
                                                       <div class="modal-footer">
                                                       <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                       
                                                       <a href="Userdestroy/{{ $us->USER_ID}}"> <button type="button" class="btn btn-success">Yes</button></a>
                                                      </div>

                                                    </div>
                                                  </div>
                                                </div>

                                            <!-- /Modal -->


                     

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