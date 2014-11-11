<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Quotation</a>
        </li>
        <li>
            Detail
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-star-empty"></i> Detail Quotation</h2>

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
                <table>
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->TxnQuotHdrNo;?></td>
                    </tr>
                    <tr>
                        <td>Re</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                     <tr>
                        <td>To</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                     <tr>
                        <td>Attn</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phone/Fax</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                     <tr>
                        <td>Cc</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                     <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ITEM</th>
                            <th>QTY ORDER</th>
                            <th>PRICE / UNIT</th>
                            <th>AMOUNT</th>
                            <th>REMARKS</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div><!--/row-->