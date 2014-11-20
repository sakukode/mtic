<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Quotation</a>
        </li>
        <li>
            Create
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
                        <div class="box-content" id="box-content" tab-index="-1">

                           
            
                    <h3>Master Quotation</h3>

                    <hr>
                    <form class="form-horizontal" method="POST" action="<?php echo site_url('quotation/save_master');?>" id="form-quotation">
                        <div class="form-group">
                            <label class="col-sm-2 control-label label-custom">Group Sales</label>
                            <div class="col-sm-3">
                                <select class="form-control" id="group-sales" name="group-sales" data-placeholder="Choose a Group Sales">
                                    <option value=""></option>
                                </select>
                            </div>
                            <label class="col-sm-2 control-label label-custom">Type Order</label>
                            <div class="col-sm-3">
                                <select class="form-control" id="type-order" name="type-order" data-placeholder="Choose a Type Order">
                                    <option vale=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label label-custom">No Quotation</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" value="<?php echo $no;?>" readonly name="no-quotation[]">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" readonly value="MTI-MRK" name="no-quotation[]">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" readonly id="no-quotation-3" name="no-quotation[]">
                            </div>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" readonly id="no-quotation-4" name="no-quotation[]">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" readonly id="no-quotation-5" name="no-quotation[]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label label-custom">Date Quotation</label>
                            <div class="col-sm-3">
                                <input id="date-quotation" type="text" class="form-control datepicker" name="date-quotation">
                            </div> 
                            <label class="col-sm-2 control-label label-custom">To</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="customer" data-placeholder="Choose a Customer" name="customer">
                                 <option value=""></option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">Remarks</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="re">
                        </div>
                        <label class="col-sm-2 control-label label-custom">Attention</label>
                        <label class="col-sm-5 control-label label-custom text-info" id="attention"></label>
                    </div>
                    

                    <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">Sales</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="sales" data-placeholder="Choose a Sales" name="sales">
                                <option value=""></option>     
                            </select>
                        </div>
                        <label class="col-sm-2 control-label label-custom">Address</label>
                        <label class="col-sm-5 control-label label-custom text-info" id="address"></label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5"></div>
                        <label class="col-sm-2 control-label label-custom">Phone/Fax</label>
                        <label class="col-sm-5 control-label label-custom text-info" id="phone-fax"></label>
                        
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5"></div>
                        <label class="col-sm-2 control-label label-custom">CC</label>
                        <label class="col-sm-5 control-label label-custom text-info" id="cc"></label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5"></div>
                        <label class="col-sm-2 control-label label-custom">Email</label>
                        <label class="col-sm-5 control-label label-custom text-info" id="email"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">Terms & Condition</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" readonly name="terms"><?php echo $terms; ?></textarea>
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
                                <th>Size</th>    <!-- tambah script size -->
                                <th>Price</th>
                                <th>Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="hidden" name="rowNo" value="" id="rowNo"> 
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
                                <!-- tambah script size -->
                                <td width="120">
                                    <input type="text" class="form-control input-detail" name="size" id="size">
                                </td>
                                <td width="120px">
                                    <input type="text" class="form-control input-number" name="item-price" id="item-price" value="0">
                                </td>
                                <td width="80px">
                                    <input type="text" class="form-control input-number" id="qty" name="qty" value="1" onkeyup="subtotal()">
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
                                        <option value="percent">Percent %</option>
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
                        </tbody>
                        <thead>
                            <tr>
                                <th>Discount Amount</th>
                                <th>Discount Percent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input onchange="subtotal()" onkeyup="getDiscount()" readonly type="text" class="form-control input-number" id="disc-amount" name="disc-amount" value="0">
                                </td>
                                <td>
                                    <input onchange="subtotal()" onkeyup="getDiscount()" readonly type="text" class="form-control input-number" id="disc-percent" name="disc-percent" value="0">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <button id="add-row" class="btn btn-primary" type="button" onclick="addList()"><i class="glyphicon glyphicon-plus"></i> add</button>
                    <button id="delete-row" class="btn btn-warning" type="button"><i class="glyphicon glyphicon-minus"></i> delete</button>
                    <button id="update-row" class="btn btn-success" type="button" value="edit"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
                    <button id="clear-row" class="btn btn-default" type="button" onclick="clearFormDetail()"><i class="glyphicon glyphicon-remove"></i> Clear</button>
                    <hr>
                    <table class="table table-bordered" id="table-detail">
                        <thead>
                            <tr>
                                <th>Type Product</th>
                                <th>Type Chasis</th>
                                <th>Item</th>
                                <th>Size</th> <!-- tambah script size -->
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Disc Amount</th>
                                <th>Disc Percent</th>
                                <th>Amount</th>
                                <th>Remarks</th>
                                <th>Drawing</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <div class="col-sm-6"></div>
                        <label class="col-sm-2 control-label label-custom">SubTotal</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="sub-total" id="sub-total" readonly value="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6"></div>
                        <label class="col-sm-2 control-label label-custom">Discount</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="discount-hdr" id="discount-hdr" onkeyup="totalHdr(this.value)" value="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6"></div>
                        <label class="col-sm-2 control-label label-custom">PPN (10%)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="ppn" readonly id="ppn">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6"></div>
                        <label class="col-sm-2 control-label label-custom">Total</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="total" value="0" readonly id="total">
                        </div>
                    </div>
                    <hr>
                    <!-- Validation Error Form -->
                    <div class="alert alert-danger" style="display:none" id="form-error">

                    </div>
                    
                        <?php if($this->session->flashdata('msgsuccess')): ?>
                            <div class="alert alert-success"><?php echo $this->session->flashdata('msgsuccess');?></div>
                        <?php endif; ?>

                        <?php if($this->session->flashdata('msgerror')): ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('msgerror');?></div>
                        <?php endif; ?>
                    <div class="box-footer">
                        <a href="<?php echo site_url('quotation');?>" class="btn btn-default">Back to list</a>
                        <button class="btn btn-success" type="submit">Save Quotation</button>
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

    $('body').scrollTop(0);

    // numbering format
    //$('amount').number( true, 2 );
    $('#item-price').number( true, 2, ',', '.' );
    $('#amount').number( true, 2, ',', '.'  );
    $('#sub-total').number( true, 2, ',', '.'  );
    $('#ppn').number( true, 2, ',', '.'  );
    $('#discount-hdr').number( true, 2, ',', '.'  );
    $('#total').number( true, 2, ',', '.'  );
    
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

    /* End Script */
    
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

    /* End Script */

    /* delete selected rows */
    $("#delete-row").click(function() {
        var anSelected = fnGetSelected( oTable );
            if ( anSelected.length !== 0 ) {
            oTable.fnDeleteRow( anSelected[0] );
            getTotal();
        }
    });

    /* End Script */

    /* date picker */
    $(".datepicker").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
    });

    /* End Script */

    /* button clear */
    $("#clear-row").click(function() {
        /* Act on the event */
         var icon = '<i class="glyphicon glyphicon-pencil"></i>';
        $("#add-row").removeAttr('disabled');
        $("#delete-row").removeAttr('disabled');
        $("#update-row").val('edit');
        $("#update-row").html(icon+' Edit');
    });

    /* end Script */

    /* set Discount Input */

    $("#disc-option").change(function() {
        /* Act on the event */
        var opt = $(this).val();

        $("#disc-amount").val(0);
        $("#disc-percent").val(0);

        if(opt == 'amount') {
            $("#disc-amount").removeAttr('readonly');
            $("#disc-percent").attr('readonly','readonly');
        }else if(opt == 'percent') {
            $("#disc-amount").attr('readonly','readonly');
            $("#disc-percent").removeAttr('readonly');
        }else{
            $("#disc-option").focus();
        }
    });

    /* End Script */

    /* get data for combo box quotation header */

    // Group Sales Combo Box
    
    $("#group-sales").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_groupsales');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

    // Type Order Combo Box
    
    $("#type-order").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_typeorder');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

    // Customer Combo Box
    
    $("#customer").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_customer');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

    // Sales Combo Box
    $("#sales").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_sales');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

    /* End Script */

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

    /* End Script */

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
    /* End Script */

    /* get data for combo box quotation detail */

    //Type Chasis Combo Box
    $("#type-chasis").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_typechasis');?>"
    },{
    loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>",
    });

    //Type Product Combo Box
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

    //Drawing Combo box
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

            subtotal();
        }
    });
    /* End Script */

    /* get amount */

    $("#item-price").keyup(function() {
        /* Act on the event */
        /* Act on the event */
        if($(this).val() != "") {
            subtotal();     
        }else{
            return false;
        }
    });

    /* End Script */

    /* submit form quotation header */

    $("#form-quotation").submit(function(event) {
        /* Act on the event */
        event.preventDefault();

        clearNotif();

        var productidArray = [];
        chasisidArray  = [];
        drawidArray    = [];

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

        $.each( oTable.fnGetData(), function(i, row){
              secondCellArray.push(chasisidArray[i]);  //index 0
              secondCellArray.push(productidArray[i]); //index 1
              secondCellArray.push(row[3]); //index 2
              secondCellArray.push(row[4]); //index 3
              secondCellArray.push(row[5]); //index 4
              secondCellArray.push(row[6]); //index 5
              secondCellArray.push(row[7]); //index 6
              secondCellArray.push(row[8]); //index 7
              secondCellArray.push(row[9]); //index 8
              secondCellArray.push(drawidArray[i]); //index 9

              firstsCellArray.push(secondCellArray);

              secondCellArray = [];

          });

        $.post(this.action, $(this).serialize(), function(data, textStatus, xhr) {
            /*optional stuff to do after success */
            if(data.status == true) {
                var lastid = data.lastid;
                if(lastid != ''){
                    //Post Quotation Detail
                    $.post("<?php echo site_url('quotation/save_detail');?>",{data:firstsCellArray,quotationid:lastid},function(){
                        location.reload();
                    }); 

                }
            }else {
                var icon = "<i class='glyphicon glyphicon-remove-circle'></i> Error Process:";

                $("#form-error").html(icon+'<br>'+data.msg);
                $("#form-error").slideDown();
            }
        },"json");
    });
    /*End Script */


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

                
                var rowInput = anSelected[0];
                var row = oTable.fnGetData(anSelected[0]);
                var idRow = oTable.fnGetPosition(anSelected[0]); 


                var typeProduct = $(rowInput).find('td:eq(0)').text();
                chasisID    = $(rowInput).find('input[name^="chasisid"]').val();
                chasisName  = $(rowInput).find('td:eq(1)').text();
                itemID      = $(rowInput).find('input[name^="productid"]').val();
                itemName    = $(rowInput).find('td:eq(2)').text();
                drawID      = $(rowInput).find('input[name^="drawid"]').val();
                drawName    = $(rowInput).find('td:eq(10)').text();

                

                
                $("#rowNo").val(idRow);
                $("#type-product").val(typeProduct).trigger('chosen:updated');
                $("#type-chasis option:selected").val(chasisID).text(chasisName).trigger('chosen:updated');
                $("#drawing option:selected").val(drawID).text(drawName).trigger('chosen:updated');
                $("#item").append('<option value="'+itemID+'" selected>'+itemName+'</option>');
                $("#size").val(row[3]); //tambah script size
                $("#item-price").val(row[4]); 
                $("#qty").val(row[5]);
                $("#disc-option").val('').trigger('chosen:updated');
                $("#disc-amount").val(row[6])
                $("#disc-percent").val(row[7]);
                $("#amount").val(row[8]);
                $("#remarks").val(row[9]);
                

                $("#delete-row").attr('disabled', 'disabled');
                $("#add-row").attr('disabled', 'disabled'); 
                

            }        
        }else if(action === 'change') {

            var icon = '<i class="glyphicon glyphicon-pencil"></i>';
            var idRow = $("#rowNo").val();
            updateRow(idRow);
            $("#delete-row").removeAttr('disabled');
            $("#add-row").removeAttr('disabled');
            $(this).val('edit');
            $(this).html(icon+'Edit');    
        }
    });

});

function subtotal() {

    var qty     = $("#qty").val();
        price   = $("#item-price").val();
        discAm  = $("#disc-amount").val();

    if(qty != '' && price != '') {

        var amount = (parseInt(price)-parseInt(discAm))*parseInt(qty);

        if(!isNaN(amount)) {

            $("#amount").val(amount);
        }
    }
}

function getDiscount() {

    var opt     = $("#disc-option").val();
        price   = $("#item-price").val();
    if(opt == 'amount' && price != '' && price != 0) {

        var discAm  = $("#disc-amount").val();
        var discPrs = (parseInt(discAm)/parseInt(price))*100;

        if(!isNaN(discPrs)) { $("#disc-percent").val(discPrs.toFixed(2)); }

    }else if(opt == 'percent' && price != '' && price != 0) {

        var discPrs = $("#disc-percent").val();
        var discAm  = (parseInt(discPrs)/100)*parseInt(price);

        console.log(discPrs);
        if(!isNaN(discAm)) { $("#disc-amount").val(discAm); }
    }
}



function addList() {
    var productID = $("#item").val();
    chasisID  = $("#type-chasis").val();
    drawID    = $("#drawing").val();

    inputProduct = '<input type="hidden" value="'+productID+'" name="productid[]">';
    inputChasis  = '<input type="hidden" value="'+chasisID+'" name="chasisid[]">';
    inputDraw    = '<input type="hidden" value="'+drawID+'" name="drawid[]">';

    $('#table-detail').dataTable().fnAddData( [
        $('#type-product option:selected').text(),
        inputChasis+$('#type-chasis option:selected').text(),
        inputProduct+$('#item option:selected').text(),
        $('#size').val(), //tambah script size
        $('#item-price').val(),
        $('#qty').val(),
        $('#disc-amount').val(),
        $('#disc-percent').val(),
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


    inputProduct = '<input type="hidden" value="'+productID+'" name="productid[]">';
    inputChasis  = '<input type="hidden" value="'+chasisID+'" name="chasisid[]">';
    inputDraw    = '<input type="hidden" value="'+drawID+'" name="drawid[]">';

    $("#table-detail").dataTable().fnUpdate( [
        $('#type-product option:selected').text(),
        inputChasis+$('#type-chasis option:selected').text(),
        inputProduct+$('#item option:selected').text(),
        $('#size').val(), //tambah script size
        $('#item-price').val(),
        $('#qty').val(),
        $('#disc-amount').val(),
        $('#disc-percent').val(),
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
    tothrg += parseInt(row[8])

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
    /* reset combobox */
    $('.combo-detail').empty(); //remove all child nodes
    var comboDetail  = $('<option value=""></option>');
    $('.combo-detail').append(comboDetail);
    $('.combo-detail').trigger("chosen:updated");
    $('.combo-detail-2').val('');
    $('.combo-detail-2').trigger("chosen:updated");
    //$(".combo-detail-2").val('').trigger('chosen:updated');
    $(".combo-detail option:selected").text('').trigger('chosen:updated');
    //$(".combo-detail").val('').trigger("chosen:updated");
    //$("#disc-option").val('').trigger("chosen:updated");
    $(".input-detail").val('');
    $(".input-number").val(0);
    $("#amount").val(0);
    $("#qty").val(1);
    $("#item option:selected").val('').text('No Item');
    $("#disc-amount").attr('readonly', 'readonly');
    $("#disc-percent").attr('readonly', 'readonly');
}
function clearNotif()
{
    $("#form-error").html("");
    $("#form-error").slideUp("fast");
}
</script>


