<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">User</a>
        </li>
        <li>
            Form
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> User</h2>

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
                <h3>Add Data</h3>
                <hr>
                <form class="form-horizontal" method="POST" action="<?php echo site_url('user/save');?>" id="user-form">
                    <div class="form-group">
                            <label class="col-sm-2 control-label label-custom">Firstname</label>
                            <div class="col-sm-3">
                                <input type="text" name="firstname" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label label-custom">Lastname</label>
                            <div class="col-sm-3">
                                <input type="text" name="lastname" class="form-control">
                            </div>
                    </div>
                    <div class="form-group">
                            <label class="col-sm-2 control-label label-custom">Email</label>
                            <div class="col-sm-3">
                                <input type="text" name="email" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label label-custom">Username</label>
                            <div class="col-sm-3">
                                <input type="text" name="username" class="form-control">
                            </div>
                    </div>
                    <div class="form-group">
                            <label class="col-sm-2 control-label label-custom">Password</label>
                            <div class="col-sm-3">
                                <input type="password" name="password" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label label-custom">Password Confirm</label>
                            <div class="col-sm-3">
                                <input type="password" name="password-conf" class="form-control">
                            </div>
                    </div>
                    <div class="form-group">
                            <label class="col-sm-2 control-label label-custom">Phone</label>
                            <div class="col-sm-3">
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label label-custom">Job</label>
                            <div class="col-sm-3">
                                <input type="text" name="job" class="form-control">
                            </div>
                    </div>
                    <div class="form-group">
                            <label class="col-sm-2 control-label label-custom">Level/Group</label>
                            <div class="col-sm-3">
                                 <select class="form-control combo" data-rel="chosen" data-placeholder="Choose a Option" name="group">
                                        <option value=""></option>
                                        <?php
                                        if($group != null):
                                        foreach($group as $row):
                                        ?>
                                        <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                        <?php 
                                            endforeach;
                                            endif;
                                        ?>
                                </select>
                            </div>
                    </div>
                    <hr>
                     <!-- Validation Error Form -->
                    <div class="alert alert-danger" style="display:none" id="form-error" tab-index="-1">

                    </div>
                        <?php if($this->session->flashdata('msgsuccess')): ?>
                            <div class="alert alert-success"><?php echo $this->session->flashdata('msgsuccess');?></div>
                        <?php endif; ?>

                        <?php if($this->session->flashdata('msgerror')): ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('msgerror');?></div>
                        <?php endif; ?>
                    <div class="box-footer">
                    <a href="" class="btn btn-default">Back to list</a>
                    <button type="submit" class="btn btn-success">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--/row-->
<script>
    $(document).ready(function() {

        $("#user-form").submit(function(event) {
            /* Act on the event */
            clearNotif();
            $.post(this.action, $(this).serialize(), function(data, textStatus, xhr) {
                /*optional stuff to do after success */
                if(data.status == true) {
                    location.reload();
                }else {
                    var icon = "<i class='glyphicon glyphicon-remove-circle'></i> Error Process:";

                    $("#form-error").html(icon+'<br>'+data.msg);
                    $("#form-error").slideDown();
                    $("#form-error").focus();
                }
            },"json");
            return false;
        });
    });

    function clearNotif()
    {
        $("#form-error").html("");
        $("#form-error").slideUp("fast");
    }
</script>