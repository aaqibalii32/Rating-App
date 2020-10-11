<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Change Password</h3>
            </div>
            <?php echo form_open('login/change_password/'.$staff['id']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-3">
                        <label for="first_name" class="control-label"><?php echo $this->lang->line('frm_fullname'); ?> </label>
                        <div class="form-group">
                            <input type="text" name="first_name" disabled value="<?php echo ($this->input->post('firstname') ? $this->input->post('firstname') : $staff['full_name']); ?>"
                                class="form-control" id="first_name" />
                            <span class="text-danger"><?php echo form_error('first_name');?></span>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <label for="address" class="control-label"><?php echo $this->lang->line('frm_email'); ?></label>
                        <div class="form-group">
                            <input type="text" name="address" value="<?php echo $this->input->post('address'); ?>"
                                class="form-control" id="address" />
                            <span class="text-danger"><?php echo form_error('address');?></span>
                        </div>
                    </div> -->
                    <div class="col-md-3">
                        <label for="password" class="control-label"><?php echo $this->lang->line('key_password'); ?> <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input type="password" name="password" value="<?php echo $this->input->post('password'); ?>"
                                class="form-control" id="password" />
                            <span class="text-danger"><?php echo form_error('password');?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> <?php echo $this->lang->line('btn_save'); ?>
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>