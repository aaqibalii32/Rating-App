<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Employee Add</h3>
            </div>
            <?php echo form_open('staff/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="branch" class="control-label"><?php echo $this->lang->line('frm_branch'); ?> <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select name="branch" id="branch" class="form-control">
                                <option value="">Select Branch </option>
                                <?php
                                foreach ($branch as $b) {
                                    $selected = ($b['id'] == $this->input->post('branch')) ? ' selected="selected"' : "";

                                    echo '<option value="' . $b['id'] . '" ' . $selected . '>' . $b['branch_name'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <label for="full_name" class="control-label"><span class="text-danger">*</span><?php echo $this->lang->line('frm_fullname'); ?></label>
                        <div class="form-group">
                            <input type="text" name="full_name" value="<?php echo $this->input->post('full_name'); ?>" class="form-control" id="full_name" />
                            <span class="text-danger"><?php echo form_error('full_name'); ?></span>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-3">
                        <label for="email" class="control-label"><span class="text-danger">*</span><?php echo $this->lang->line('email'); ?></label>
                        <div class="form-group">
                            <input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>
                    </div> -->
                        <!-- <div class="col-md-6">
                            <label for="rating_type" class="control-label"><span class="text-danger">*</span>Forename</label>
                            <div class="form-group">
                                <input type="text" name="forename" class="form-control"
                                    value="<?php echo $this->input->post('forename'); ?>" />
                                    <span class="text-danger"><?php echo form_error('forename'); ?></span>
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <label for="rating_type" class="control-label"><?php echo $this->lang->line('frm_firstname'); ?></label>
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control"
                                    value="<?php echo $this->input->post('first_name'); ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="rating_type" class="control-label"><?php echo $this->lang->line('frm_lastname'); ?></label>
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control"
                                    value="<?php echo $this->input->post('last_name'); ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="rating_type" class="control-label"><?php echo $this->lang->line('frm_mobileno'); ?></label>
                            <div class="form-group">
                                <input type="text" name="no" class="form-control"
                                    value="<?php echo $this->input->post('no'); ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="rating_type" class="control-label"><?php echo $this->lang->line('frm_city'); ?></label>
                            <div class="form-group">
                                <input type="text" name="city" class="form-control"
                                    value="<?php echo $this->input->post('city'); ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="rating_type" class="control-label"><?php echo $this->lang->line('frm_vehicle_type'); ?></label>
                            <div class="form-group">
                                <input type="text" name="v_type" class="form-control"
                                    value="<?php echo $this->input->post('v_type'); ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="rating_type" class="control-label"><?php echo $this->lang->line('frm_model'); ?></label>
                            <div class="form-group">
                                <input type="text" name="model" class="form-control"
                                    value="<?php echo $this->input->post('model'); ?>" />
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
<script type="text/javascript">
    $('#branch').select2({});
</script>