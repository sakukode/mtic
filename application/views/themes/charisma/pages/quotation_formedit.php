<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Quotation</a>
        </li>
        <li>
            Edit
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Transaction</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                
                <?php if($this->session->flashdata('msgsuccess')): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('msgsuccess');?></div>
                <?php endif; ?>

                <?php if($this->session->flashdata('msgerror')): ?>
                <div class="alert alert-danger"><?php echo $this->session->flashdata('msgerror');?></div>
                <?php endif; ?>

                <h3>Master Quotation</h3>
                
                <hr>
                <form class="form-horizontal" method="POST" action="<?php echo site_url('quotation/update_master');?>" id="form-quotation">
                    <input type="hidden" name="quotation-id" value="<?php echo $quotationhdr->TxnQuotHdrID;?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">Group Sales</label>
                        <div class="col-sm-3">
                                <select class="form-control" id="group-sales" name="group-sales" data-placeholder="Choose a Group Sales">
                                    <option value=""></option>
                                    <option value="<?php echo $quotationhdr->MstGRPSalesID;?>" selected><?php echo $quotationhdr->groupsales;?></option>
                                </select>
                        </div>
                        <label class="col-sm-2 control-label label-custom">Type Order</label>
                        <div class="col-sm-3">
                                <select class="form-control" id="type-order" name="type-order" data-placeholder="Choose a Type Order">
                                    <option vale=""></option>
                                    <option value="<?php echo $quotationhdr->MstTypeOrderID;?>" selected><?php echo $quotationhdr->typeorder;?></option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php 
                        $no_array = $quotationhdr->TxnQuotHdrNo;
                        $no = explode("/", $no_array);
                        ?>
                        <label class="col-sm-2 control-label label-custom">No Quotation</label>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" value="<?php echo $no[0];?>" readonly name="no-quotation[]">
                        </div>
                         <div class="col-sm-2">
                            <input type="text" class="form-control" readonly value="MTI-MRK" name="no-quotation[]">
                        </div>
                         <div class="col-sm-2">
                            <input type="text" class="form-control" value="<?php echo $no[2];?>" readonly id="no-quotation-3" name="no-quotation[]">
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" value="<?php echo $no[3];?>" readonly id="no-quotation-4" name="no-quotation[]">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" value="<?php echo $no[4];?>" readonly id="no-quotation-5" name="no-quotation[]">
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control" name="no-quotation[]">
                                <option value="REV1">REV1</option>
                                <option value="REV2">REV2</option>
                                <option value="REV3">REV3</option>
                                <option value="REV4">REV4</option>
                                <option value="REV5">REV5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">Date Quotation</label>
                        <div class="col-sm-3">
                            <input id="date-quotation" type="text" class="form-control datepicker" name="date-quotation" value="<?php echo $quotationhdr->TxnQuotHdrDate;?>">
                        </div> 
                        <label class="col-sm-2 control-label label-custom">To</label>
                        <div class="col-sm-4">
                                <select class="form-control" id="customer" data-placeholder="Choose a Customer" name="customer">
                                   <option value=""></option>
                                   <option value="<?php echo $quotationhdr->MstCustID;?>" selected><?php echo $quotationhdr->cust_name;?></option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">Remarks</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="re" value="<?php echo $quotationhdr->TxnQuotHdrRemarks?>">
                        </div>
                        <label class="col-sm-2 control-label label-custom">Attention</label>
                        <label class="col-sm-5 control-label label-custom text-info" id="attention"><?php echo $quotationhdr->attention;?></label>
                    </div>
                    
                   
                    <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">Sales</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="sales" data-placeholder="Choose a Sales" name="sales">
                                <option value=""></option> 
                                <option value="<?php echo $quotationhdr->MstSalesPICID;?>" selected><?php echo $quotationhdr->sales;?></option>    
                            </select>
                        </div>
                        <label class="col-sm-2 control-label label-custom">Address</label>
                        <label class="col-sm-5 control-label label-custom text-info" id="address">
                            <?php 
                            echo $quotationhdr->addr1;
                            if($quotationhdr->addr2 != '') echo '<br>'.$quotationhdr->addr2;
                            if($quotationhdr->addr3 != '') echo '<br>'.$quotationhdr->addr3;
                            ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5"></div>
                        <label class="col-sm-2 control-label label-custom">Phone/Fax</label>
                        <label class="col-sm-5 control-label label-custom text-info" id="phone-fax"><?php echo $quotationhdr->notelp.' / '.$quotationhdr->fax;?></label>
                        
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5"></div>
                        <label class="col-sm-2 control-label label-custom">CC</label>
                        <label class="col-sm-5 control-label label-custom text-info" id="cc"><?php echo $quotationhdr->cc;?></label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5"></div>
                        <label class="col-sm-2 control-label label-custom">Email</label>
                        <label class="col-sm-5 control-label label-custom text-info" id="email">
                            <?php 
                            echo $quotationhdr->email1;
                            if($quotationhdr->email2 != '') echo '<br>'.$quotationhdr->email2;
                            if($quotationhdr->email3 != '') echo '<br>'.$quotationhdr->email3;
                            ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">Terms & Condition</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" readonly name="terms"><?php echo $quotationhdr->TxnQuotHdrTermsTxt;?></textarea>
                        </div>
                    </div>

                <!-- detail transaction -->
                
                <h3>Detail Quotation</h3>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type Product</th>
                            <th>Type Chasis</th>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Qty</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="hidden" name="rowNo" value="" id="rowNo"> 
                                <input type="hidden" name="detailid" value="" id="detailid"> 
                                <select class="form-control combo-detail-2" data-rel="chosen" data-placeholder="Choose a Option" id="type-product" name="type-product">
                                    <option value=""></option>
                                    <option value="PRODUCT">PRODUCT</option>
                                    <option value="PART">PART</option>
                                    <option value="MATERIAL">MATERIAL</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control combo-detail" data-placeholder="Choose a Option" id="type-chasis" name="type-chasis">
                                    <option value=""></option>
                                </select>
                            </td>
                            <td width="300">
                                <select class="form-control input-detail" data-placeholder="Choose a Option" id="item" name="item">
                                    <option value="" disabled selected>No Item</option>
                                </select>
                            </td>
                            <td width="180px">
                                <input type="text" class="form-control input-number" name="item-price" id="item-price" value="0">
                            </td>
                            <td width="80px">
                                <input type="text" class="form-control input-number" id="qty" name="qty" value="1" onkeyup="subtotal(this.value)">
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th>Disc Option</th>
                            <th>Amount</th>
                            <th>Remarks</th>
                            <th>Select Drawing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select class="form-control combo-detail-2" data-placeholder="Choose a Option" name="disc-option" id="disc-option" data-rel="chosen">
                                    <option value=""></option>
                                    <option value="amount">Amount</option>
                                    <option value="percent">Percent</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" value="0" class="form-control" name="amount" id="amount" readonly>
                            </td>
                             <td>
                                <input type="text" class="form-control input-detail" name="remarks" id="remarks">
                            </td>
                            <td colspan="2">
                                <select class="form-control combo-detail" data-placeholder="Choose a Option" name="drawing" id="drawing">
                                    <option value=""></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control input-number" id="discount" name="discount" value="0">
                            </td>
                        </tr>
                    </tbody>
                </table>
    
                <button id="add-row" class="btn btn-primary" type="button" onclick="addList()"><i class="glyphicon glyphicon-plus"></i> add</button>
                <button id="delete-row" class="btn btn-warning" type="button"><i class="glyphicon glyphicon-minus"></i> delete</button>
                <button id="update-row" class="btn btn-success" type="button" value="edit"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
                <button id="clear-row" class="btn btn-default" type="button"><i class="glyphicon glyphicon-remove"></i> Clear</button>
                <hr>
                <table class="table table-bordered" id="table-detail">
                    <thead>
                        <tr>
                            <th>Type Product</th>
                            <th>Type Chasis</th>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Disc Option</th>
                            <th>Discount</th>
                            <th>Amount</th>
                            <th>Remarks</th>
                            <th>Drawing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($quotationdtl as $row):
                        ?>
                        <tr>
                            <td><input type="hidden" value="<?php echo $row->TxnQuotDtlID;?>" name="rowid[]"><?php echo $row->MstProductTypeProduct;?></td>
                            <td><input type="hidden" value="<?php echo $row->MstChasID;?>" name="chasisid[]"><?php echo $row->MStChasMaker.' '.$row->MStChasModel.' '.$row->MStChasType;?></td>
                            <td><input type="hidden" value="<?php echo $row->MstProductID;?>" name="productid[]"><?php echo $row->MstProductType.' '.$row->MstProductVariant.' '.$row->MstProductGroupingSize;?></td>
                            <td><?php echo $row->TxnQuotDtlUnitPrice;?></td>
                            <td><?php echo $row->TxnQuotDtlQty;?></td>
                            <?php 
                            if($row->TxnQuotDtlDiscAm != 0 && $row->TxnQuotDtlDiscPrs == 0 ):
                            ?>
                            <td><?php echo 'Amount'; ?></td>
                            <td><?php echo $row->TxnQuotDtlDiscAm;?></td>
                            <?php elseif($row->TxnQuotDtlDiscAm == 0 && $row->TxnQuotDtlDiscPrs != 0 ): ?>
                            <td><?php echo 'Percent';?></td>
                            <td><?php echo $row->TxnQuotDtlDiscPrs;?></td>    
                            <?php else: ?>
                            <td><?php echo '';?></td>
                            <td><?php echo '';?></td>
                            <?php endif; ?>
                            <td><?php echo $row->TxnQuotDtlTotAm;?></td>
                            <td><?php echo $row->TxnQuotDtlRemarks;?></td>
                            <td><input type="hidden" value="<?php echo $row->TxnDrawID;?>" name="drawid[]"><?php echo $row->TxnDrawNo;?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
                <div class="form-group">
                    <div class="col-sm-6"></div>
                    <label class="col-sm-2 control-label label-custom">SubTotal</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="sub-total" id="sub-total" readonly value="<?php echo $quotationhdr->TxnQuotHdrSubTotal;?>">
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-6"></div>
                    <label class="col-sm-2 control-label label-custom">Discount</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="discount-hdr" id="discount-hdr" onkeyup="totalHdr(this.value)" value="<?php echo $quotationhdr->TxnQuotHdrDiscount;?>">
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-6"></div>
                    <label class="col-sm-2 control-label label-custom">PPN (10%)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="ppn" readonly id="ppn" value="<?php echo $quotationhdr->TxnQuotHdrPpn;?>">
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-6"></div>
                    <label class="col-sm-2 control-label label-custom">Total</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="total" readonly id="total" value="<?php echo $quotationhdr->TxnQuotHdrTotal;?>">
                    </div>
                </div>
                <hr>
                <div class="box-footer">
                    <a href="<?php echo site_url('quotation');?>" class="btn btn-default">Back to list</a>
                    <button class="btn btn-success" type="submit">Update Quotation</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
<!-- detail transaction -->
<script>
$(function() {

    /* Init Data Table */
    var oTable = $('#table-detail').dataTable({
        "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-12'i><'col-md-12 center-block'p>>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
            "sLengthMenu": "_MENU_ records per page"
        }
    });

    $( "#table-detail tbody" ).on( "click", "tr", function() {
        $(this).toggleClass('info row_selected');
    } );
 
    
    
    /* Filter textbox only numbers */
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    /* Filter textbox only numbers */
    $("#discount-hdr").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    /* delete selected rows */
    $("#delete-row").click(function() {
       var anSelected = fnGetSelected( oTable );
        if ( anSelected.length !== 0 ) {
            oTable.fnDeleteRow( anSelected[0] );
            getTotal();
        }
    });

    /* date picker */
    $(".datepicker").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
    });

    /* get data for combo box quotation header */

    $("#group-sales").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_groupsales');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

    $("#type-order").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_typeorder');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

    $("#customer").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_customer');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

    $("#sales").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_sales');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

  

    /* generate no quotation */

    $("#group-sales").change(function() {
        /* Act on the event */
        var groupSales = $("#group-sales option:selected").text();

        $("#no-quotation-3").val(groupSales);
    });

    $("#date-quotation").change(function() {
        var dateQuotation = $(this).val();

        var str   = dateQuotation.split("-");
            year  = str[2];
            month = str[1];

        var monthRoman = decimalToRoman(month);
        $("#no-quotation-5").val(year);
        $("#no-quotation-4").val(monthRoman);
    });

    /* set label customer */
    $("#customer").change(function() {
        /* Act on the event */

        var id = $(this).val();
        $.ajax({
            url: "<?php echo site_url('quotation/get_detailcustomer');?>",
            type: 'GET',
            dataType: 'json',
            data: {id: id},
            success: function(data) {
                if(data) {

                    $("#attention").html(data.attention);

                    if(data.address1 != null) {
                       $("#address").html(data.address1);
                    }

                    if(data.address2 != null) {
                        $("#address").append('<br>'+data.address2);
                    }

                    if(data.address3 != null) {
                        $("#address").append('<br>'+data.address3);
                    }

                    if(data.email1 != null) {
                       $("#email").html(data.email1);
                    }

                    if(data.email2 != null) {
                        $("#email").append('<br>'+data.email2);
                    }

                    if(data.email3 != null) {
                        $("#email").append('<br>'+data.email3);
                    }
                    
                    $("#phone-fax").html(data.phone+' / '+data.fax);
                    $("#cc").html(data.cc);
                    
                }
            }
        }); 
    });

    /* get data for combo box quotation detail */

    $("#type-chasis").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_typechasis');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>",
    });

    $("#type-product").change(function() {
        /* Act on the event */
        var type = $(this).val();

        if(type != null) {
            $.ajax({
                url: "<?php echo site_url('quotation/get_product');?>",
                type: 'GET',
                dataType: 'json',
                data: {type: type},
                success: function(data) {
                        $("#item").empty();
                        $("#item").append('<option value="" disabled selected>Choose a Option</option>');
                        $(data).each(function()
                        {
                            var option = $('<option />');
                            option.attr('value', this.productid).text(this.producttype+' '+this.productvariant+' '+this.productsize);

                            $('#item').append(option);
                        });
                }
            });
            
        }
    });

    $("#drawing").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_drawing');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>",
    });

    /* get price item */

    $("#item").change(function() {
        /* Act on the event */
        var productID = $(this).val();

        if(productID != null) {
            $.ajax({
                url: "<?php echo site_url('quotation/get_detailproduct');?>",
                type: 'GET',
                dataType: 'json',
                data: {id: productID},
                success: function(data) {
                    $("#item-price").val(data.unitprice);
                }
            });
         
            var qty = $("#qty").val();
            subtotal(qty);
        }

    });

    /* get amount */

    $("#item-price").keyup(function() {
        /* Act on the event */
        /* Act on the event */
        if($(this).val() != "") {
            var qty = $("#qty").val();
            subtotal(qty);     
        }else{
            return false;
        }
    });

    $("#discount").keyup(function() {
        /* Act on the event */
        if($(this).val() != "") {
            var qty = $("#qty").val();
            subtotal(qty);     
        }else{
            return false;
        }
    });

    /* submit form quotation header and quotation detail*/

    $("#form-quotation").submit(function(event) {
        /* Act on the event */
        event.preventDefault();

        var productidArray = [];
            chasisidArray  = [];
            drawidArray    = [];
            rowidArray     = [];

        $('input[name^="rowid"]').each(function() {
            rowidArray.push($(this).val());
        });

        $('input[name^="productid"]').each(function() {
          productidArray.push($(this).val());
        });

        $('input[name^="chasisid"]').each(function() {
          chasisidArray.push($(this).val());
        });

        $('input[name^="drawid"]').each(function() {
          drawidArray.push($(this).val());
        });

        var firstsCellArray=[];
        var secondCellArray=[];
        var discAmount;
        var discPercent;

        $.each( oTable.fnGetData(), function(i, row){
          secondCellArray.push(rowidArray[i]); // index 0
          secondCellArray.push(chasisidArray[i]);  //index 1
          secondCellArray.push(productidArray[i]); //index 2
          secondCellArray.push(row[3]); //index 3
          secondCellArray.push(row[4]); //index 4

          if(row[5] == 'Amount') {
             discAmount  = row[6];
          }else {
            discAmount = 0;
          }

          if(row[5] == 'Percent') {
             discPercent = row[6];
          }else {
             discPercent = 0;
          }

          secondCellArray.push(discAmount); // index 5
          secondCellArray.push(discPercent); // index 6
          secondCellArray.push(row[7]); //index 7
          secondCellArray.push(row[8]); //index 8
          secondCellArray.push(drawidArray[i]); //index 9

          firstsCellArray.push(secondCellArray);

          secondCellArray = [];

        });

        $.post(this.action, $(this).serialize(), function(data, textStatus, xhr) {
            /*optional stuff to do after success */
            var lastid = data.lastid;
            if(lastid != ''){
                
                $.post("<?php echo site_url('quotation/update_detail');?>",{data:firstsCellArray,quotationid:lastid},function(){
                    location.reload();
                }); 
            
            }
        },"json");
    });

    /*
        Clear select row & form
    */
   
    $("#clear-row").click(function() {
        /* Act on the event */
        clearFormDetail();
    });
   


    /* proses edit & update detail item */
    $("#update-row").click(function() {
        /* Act on the event */
        var action = $(this).val();

        

        if(action === 'edit'){

            var anSelected = fnGetSelected( oTable );   
            
            if ( anSelected.length === 1 ) {
                 /* change status button */
                
                var icon = '<i class="glyphicon glyphicon-ok"></i>';
                $(this).val("change");
                $(this).html(icon+" Finish");    

                /* reset combobox */
                $('.combo-detail').empty(); //remove all child nodes
                var newOption = $('<option value=""></option>');
                $('.combo-detail').append(newOption);
                $('.combo-detail').trigger("chosen:updated");

                       
                var rowInput = anSelected[0];
                var row = oTable.fnGetData(anSelected[0]);
                var idRow = oTable.fnGetPosition(anSelected[0]); 

                var rowid       = $(rowInput).find('input[name^="rowid"]').val();
                    typeProduct = $(rowInput).find('td:eq(0)').text();
                    chasisID    = $(rowInput).find('input[name^="chasisid"]').val();
                    chasisName  = $(rowInput).find('td:eq(1)').text();
                    itemID      = $(rowInput).find('input[name^="productid"]').val();
                    itemName    = $(rowInput).find('td:eq(2)').text();
                    drawID      = $(rowInput).find('input[name^="drawid"]').val();
                    drawName    = $(rowInput).find('td:eq(9)').text();

                
                $("#detailid").val(rowid);
                $("#rowNo").val(idRow);
                $("#type-product option:selected").val(typeProduct).text(typeProduct).trigger('chosen:updated');
                $("#type-chasis option:selected").val(chasisID).text(chasisName).trigger('chosen:updated');
                $("#item").append('<option value="'+itemID+'" selected>'+itemName+'</option>');
                $("#item-price").val(row[3]);
                $("#qty").val(row[4]);
                $("#disc-option option:selected").val(row[5]).text(row[5]).trigger('chosen:updated');
                $("#discount").val(row[6]);
                $("#amount").val(row[7]);
                $("#remarks").val(row[8]);
                $("#drawing option:selected").val(drawID).text(drawName).trigger('chosen:updated');

                $("#delete-row").attr('disabled', 'disabled');
                $("#add-row").attr('disabled', 'disabled'); 
                
               
            }        
        }else if(action === 'change') {

            var icon = '<i class="glyphicon glyphicon-pencil"></i>';
            var idRow = $("#rowNo").val();
            $(".combo-detail").trigger("chosen:updated");
            updateRow(idRow);
            $("#delete-row").removeAttr('disabled');
            $("#add-row").removeAttr('disabled');
            $(this).val('edit');
            $(this).html(icon+'Edit');    
        }
    });

});

function subtotal(qty){

    var price       = $("#item-price").val();
    var discount    = $("#discount").val();

    var discOption  = $("#disc-option").val();

    if(discOption == 'percent') {
        totalDiscount = (parseInt(discount)/100)*parseInt(price);
    }else {
        totalDiscount = parseInt(discount);
    }
        
    var sub = (parseInt(qty)*parseInt(price))-totalDiscount;

    if(!isNaN(sub)){
        $("#amount").val(sub);    
    }else {
        $("#amount").val(0);
    }   
}



function addList() {
    
    var productID = $("#item").val();
        chasisID  = $("#type-chasis").val();
        drawID    = $("#drawing").val();

        inputID      = '<input type="hidden" value="" name="rowid[]">';
        inputProduct = '<input type="hidden" value="'+productID+'" name="productid[]">';
        inputChasis  = '<input type="hidden" value="'+chasisID+'" name="chasisid[]">';
        inputDraw    = '<input type="hidden" value="'+drawID+'" name="drawid[]">';

    $('#table-detail').dataTable().fnAddData( [
        inputID+$('#type-product option:selected').text(),
        inputChasis+$('#type-chasis option:selected').text(),
        inputProduct+$('#item option:selected').text(),
        $('#item-price').val(),
        $('#qty').val(),
        $('#disc-option').val(),
        $('#discount').val(),
        $('#amount').val(),
        $('#remarks').val(),
        inputDraw+$('#drawing option:selected').text(),
         ] );
   
    clearFormDetail();
    $("#type-product").focus();

    getTotal();
}

function updateRow(rowIndex) {

    var id = parseInt(rowIndex);
    
    var productID = $("#item").val();
        chasisID  = $("#type-chasis").val();
        drawID    = $("#drawing").val();
        rowID     = $("#detailid").val();

        inputID      = '<input type="hidden" value="'+rowID+'" name="rowid[]">';
        inputProduct = '<input type="hidden" value="'+productID+'" name="productid[]">';
        inputChasis  = '<input type="hidden" value="'+chasisID+'" name="chasisid[]">';
        inputDraw    = '<input type="hidden" value="'+drawID+'" name="drawid[]">';

        $("#table-detail").dataTable().fnUpdate( [
        inputID+$('#type-product option:selected').text(),
        inputChasis+$('#type-chasis option:selected').text(),
        inputProduct+$('#item option:selected').text(),
        $('#item-price').val(),
        $('#qty').val(),
        $('#disc-option option:selected').text(),
        $('#discount').val(),
        $('#amount').val(),
        $('#remarks').val(),
        inputDraw+$('#drawing option:selected').text(),
         ], id );
   
        clearFormDetail();

        getTotal();
}

function getTotal(){
      oTable = $('#table-detail').dataTable();
      
      var totitem = oTable.fnSettings().fnRecordsTotal();

      var tothrg = 0;
     
      $.each( oTable.fnGetData(), function(i, row){
        tothrg += parseInt(row[7])

      });

     if(!isNaN(tothrg)) {
        $("#sub-total").val(tothrg);   
     }

     var ppn = 10/100 * tothrg;

     if(!isNaN(ppn)) {
        $("#ppn").val(ppn);
     }

     var disc = $("#discount-hdr").val();

     totalHdr(disc);     
}

function totalHdr(disc) {

    var subTotal = $("#sub-total").val();
        ppn      = 10/100 * parseInt(subTotal);

    if(disc != '') {
        var total = parseInt(subTotal) + ppn - disc;

        if(!isNaN(total)) {
            $("#total").val(total);
        }    
    }
    
 }

/* Get the rows which are currently selected */
function fnGetSelected( oTableLocal )
{
    return oTableLocal.$('tr.row_selected');
}

/* convert to roman number */
var roman = new Array(); 
roman = ["M","CM","D","CD","C","XC","L","XL","X","IX","V","IV","I"]; 
var decimal = new Array(); 
decimal = [1000,900,500,400,100,90,50,40,10,9,5,4,1]; 
function decimalToRoman(value) { 
  if (value <= 0 || value >= 4000) return value; 
    var romanNumeral = ""; 
    for (var i=0; i<roman.length; i++) { 
      while (value >= decimal[i]) {  
        value -= decimal[i]; 
        romanNumeral += roman[i]; 
      } 
    } 
    return romanNumeral; 
}

function clearFormDetail()
{
    $(".combo-detail-2").val('').trigger('chosen:updated');
    $(".combo-detail option:selected").text('').trigger('chosen:updated');
    $(".combo-detail").val('').trigger("chosen:updated");
    $(".input-detail").val('');
    $(".input-number").val(0);
    $("#amount").val(0);
    $("#qty").val(1);
    $("#item option:selected").val('').text('No Item');
}
</script>


