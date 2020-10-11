<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Branch Edit</h3>
            </div>
            <?php echo form_open('branch/edit/'.$branch['id']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-3">
                        <label for="branch_name" class="control-label"><span class="text-danger">*</span><?php echo $this->lang->line('frm_branch_name'); ?></label>
                        <div class="form-group">
                            <input type="text" name="branch_name"
                                value="<?php echo ($this->input->post('branch_name') ? $this->input->post('branch_name') : $branch['branch_name']); ?>"
                                class="form-control" id="branch_name" />
                            <span class="text-danger"><?php echo form_error('branch_name');?></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="address" class="control-label"><span class="text-danger">*</span><?php echo $this->lang->line('frm_branch_address'); ?></label>
                        <div class="form-group">
                            <input type="text" name="address"
                                value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $branch['address']); ?>"
                                class="form-control" id="address" />
                            <span class="text-danger"><?php echo form_error('address');?></span>
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