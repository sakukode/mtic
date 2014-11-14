<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Quotation</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-align-justify"></i> Table Quotation</h2>

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
                <!-- put your content here -->

                <?php if($this->session->flashdata('msgsuccess')): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('msgsuccess');?></div>
                <?php endif; ?>

                <?php if($this->session->flashdata('msgerror')): ?>
                <div class="alert alert-danger"><?php echo $this->session->flashdata('msgerror');?></div>
                <?php endif; ?>

                    <a href="<?php echo site_url('quotation/create');?>" class="btn btn-primary">Create New</a>
                    <div class="btn-group">
                    <button class="btn btn-default">With Selected</button>
                    <button class="btn dropdown-toggle btn-default" data-toggle="dropdown"><span class="caret"></span></button>
                    <ul class="dropdown-menu">                        
                        <li><a href="#" id="deleteall"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                    </ul>
                </div>

                <p></p>
                

               <table class="table table-striped table-bordered" id="quotation-table">
                <thead>
                <tr>
                    <th><input type="checkbox" name="check-all" id="selectall"></th>
                    <th>No Quotation</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
               </table>
            </div>
        </div>
    </div>
</div><!--/row-->
<script>
    $(document).ready(function() {
        /* Init Data Table */
        var oTable = $('#quotation-table').dataTable({
            "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-12'i><'col-md-12 center-block'p>>",
            "sPaginationType": "bootstrap",
             "sAjaxSource": '<?php echo site_url($path_table);?>',
                "bJQueryUI": false,
                "iDisplayStart ":20,
                "oLanguage": {
            "sProcessing": ""
            },
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page",
                "sInfo": 'Showing _END_ Sources.',
                "sInfoEmpty": 'No entries to show',
                "sEmptyTable": 'No found Quotation, <a href="<?php echo site_url('quotation/create');?>">please add at least one.</a>',
                "sProcessing": ""
            },
                "fnInitComplete": function() {
               // oTable.fnAdjustColumnSizing();
             },
            'fnServerData': function(sSource, aoData, fnCallback)
                {
                  $.ajax
                  ({
                    'dataType': 'json',
                    'type'    : 'POST',
                    'url'     : sSource,
                    'data'    : aoData,
                    'success' : fnCallback
                  });
                },
            "aoColumnDefs": [
                {
                    'bSortable' : false,
                    'aTargets' : [ 0,6 ]
                },
                { "sWidth": "160px", "aTargets": [ 6 ] }
            ]
        });

        /* proses delete row/baris */
        $( document ).on( "click", ".btn-del", function() {

            var conf = confirm("Are you sure delete this data?");
            var id = $(this).attr('id');
            if(conf){
               $.ajax({
               type: "GET",
               url: "<?php echo site_url('quotation/delete');?>",
               dataType : "json",
               data: "id="+id,
               success: function(data){
                   if(data.status == true){
                        location.reload();
                   }else {
                      alert('error system!');
                   }
               }
               });
            } 
        });

        /* proses delete row/baris yang terpilih(selected checkbox) */

        $("#deleteall").click(function() {
            /* Act on the event */
            var conf = confirm("Are you sure delete this selected data?");
            
            if(conf){
                var idArray = $('#quotation-table input[type=checkbox]:checked').map(function(_, el) {
                    return $(el).val();
                }).get();
                
                if(idArray != ''){
                        $.post("<?php echo site_url('quotation/delete_many');?>",{data:idArray},function(data){
                            if(data.status == true) {
                               location.reload();
                            }else if(data.status == false) {
                               alert(data.msg);
                               oTable.fnDraw();
                            }else {
                               alert("Error System"); 
                               oTable.fnDraw();
                            }  
                        },"json");
                }else {
                    alert("Error!,No data selected");    
                }

            } 
        });

        /* select all row/ pilih semua record/baris */

        $('#selectall').click(function(event) {  //on click 
            if(this.checked) { // check select status
                $('.checkbox-quo').each(function() { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"               
                });
            }else{
                $('.checkbox-quo').each(function() { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                       
                });         
            }
        });
    
    });
</script>