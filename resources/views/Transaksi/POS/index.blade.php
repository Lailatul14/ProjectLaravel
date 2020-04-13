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
<h2>Point Of Sales</h2>
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

<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="review-content-section">

                                                  <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <input type="text" disabled="" class="form-control" placeholder="Category_ID">
                                                      
                                                    </div>
                                                    </div>
                                                </div>
                                              </div>
                                                                                 


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="review-content-section">

<select name="catid" id="catid" class="form-control pro-edt-select form-control-primary">
@foreach ($categories as $cat)
                        
                      <option value=" {{ $cat->CATEGORY_ID }}">
                        {{ $cat->CATEGORY_NAME }}
                      </option>
                      @endforeach

</select>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<div class="breadcomb-report">
  <button class="button" data-toggle="modal" data-target="#myModal" >Pilih Product</button>
  <table id="keranjang" width="100%" cellpadding="10px" bordercolorlight="#E8A7A8" border="2"> 
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
                           
                                  <thead>
                                    <th>ID</th>
                                    <th>Product_Name</th>
                                    <th>Jumlah</th>
                                    <th>Price</th>
                                    <th>Sub Total</th>
                                    <th>Action</th>
                                    
                                </thead>
                                

                                
<form>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><font color="#00FFFF">Pajak (10%)  </font></label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Rp. ">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label"><font color="#00FFFF">Discount</font></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabel" placeholder="Rp. ">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"><font color="#00FFFF">Total</font></label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Rp. ">
    </div>

<!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title">Product</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <table>
          <table width="100%" cellpadding="10px" bordercolorlight="#E8A7A8" border="2"> 
    <thead>
      <th width="295">Product ID</th>
      <th width="45">Category ID</th>
      <th width="212">Product Name</th>
      <th width="228">Product Price</th>
      <th width="228">Product Stock</th>
      <th width="228">Explanation</th>
    </thead>
    <tbody>
       @foreach ($product as $pro)
                                <tr onclick="pilihBarang({{ $pro -> PRODUCT_ID }})">
                                 
                                   <td>{{ $pro->PRODUCT_ID }}</td>
                                   <td>{{ $pro->CATEGORY_ID }}</td>
                                   <td>{{ $pro->PRODUCT_NAME }}</td>
                                   <td>{{ $pro->PRODUCT_PRICE }}</td>
                                   <td>{{ $pro->PRODUCT_STOCK }}</td>
                                   <td>{{ $pro->EXPLANATION }}</td>
                    </tr>
             @endforeach
    </tbody>
  </table>
        </div>
        
      </div>
    <!-- end of modal content -->                     
          </div>
        </div>
      </div>
</div>

<script>
  var barang = <?php echo json_encode($product); ?>;
  console.log(barang[0]["PRODUCT_NAME"]);
  var colnum=0;

  function getVal(event){
    if (event.keyCode === 13) {
      modal();
    }
  }
  function pilihBarang(id){
    var index;
    for(var i=0;i<barang.length;i++){
      if(barang[i]["PRODUCT_ID"]==id){
        console.log(barang[i]);
        index=i;
        break;
      }
    }
    $("#myModal").modal("hide");

    var table = document.getElementById("keranjang");
    var row = table.insertRow(table.rows.length);
    row.setAttribute('id','col'+colnum);
    var id = 'col'+colnum;
    colnum++;

    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    console.log(index);
    cell1.innerHTML = '<input type="hidden" name="name[]" value="'+barang[index]["PRODUCT_NAME"]+'">'+barang[index]["PRODUCT_NAME"];
    cell2.innerHTML = '<input type="number" name="qty[]" value="1" oninput="recount('+barang[index]["PRODUCT_ID"]+')" id="qty'+barang[index]["PRODUCT_ID"]+'">';    
    cell3.innerHTML = '<input type="hidden" id="harga'+barang[index]["PRODUCT_ID"]+'" name="harga[]" value="'+barang[index]["PRODUCT_PRICE"]+'">'+barang[index]["PRODUCT_PRICE"];
    cell4.innerHTML = '<input type="hidden" class="subtotal" name="subtotal[]" value="'+barang[index]["PRODUCT_PRICE"]+'" id="subtotal'+barang[index]["PRODUCT_ID"]+'"><span id="subtotalval'+barang[index]["PRODUCT_ID"]+'">'+barang[index]["PRODUCT_PRICE"]+'</span>';
    cell5.innerHTML = '<button onclick="hapusEl(\''+index+'\')">Del</button>';

    total();
    
  }
  function lm(i){
    var min =  document.getElementById("qty"+i).value;
    if(min <= 1){

    }else{
    min--;
    document.getElementById("qty"+i).value = min;
    recount(i);
    }
  }
  function ln(i){
    var plus =  document.getElementById("qty"+i).value;
    console.log(plus);
    plus++;
    document.getElementById("qty"+i).value = plus;
    console.log(plus);
    recount(i);
  }
  function total(){
    var subtotals = document.getElementsByClassName("subtotal");
    var total = 0;
    for(var i=0; i<subtotals.length;++i){
      total += Number(subtotals[i].value); 
    }
    document.getElementById("subtotal-val").value = total;
    var disc = document.getElementById("discount").value;
    total = parseInt(110/100*total)-Number(disc);
    document.getElementById("total-val").value = total;

  }

  function recount(id){

    var price = document.getElementById("harga"+id).value;
    var sembarang = document.getElementById("qty"+id).value;

    var lego = Number(price*sembarang); 
    document.getElementById("subtotal"+id).value = lego;
    document.getElementById("subtotalval"+id).innerHTML = lego;
    total();
  }

  function modal(){
    $("#myModal").modal("show");
    document.getElementById("myText").value = "";
  }
  function hapusEl(idCol) {
    document.getElementById(idCol).remove();
    total();
  }
</script>
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
</div>
</div>
</div>


@endsection