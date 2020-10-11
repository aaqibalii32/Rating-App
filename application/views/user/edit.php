<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">User Edit</h3>
            </div>
            <?php echo form_open('user/edit/'.$user['id']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-3">
                        <label for="branch_id" class="control-label"><span
                                class="text-danger">*</span><?php echo $this->lang->line('frm_branch'); ?></label>
                        <div class="form-group">
                            <select name="branch_id" class="form-control">
                                <!-- <option value="">select branch</option> -->
                                <?php 
								foreach($all_branch as $branch)
								{
									$selected = ($branch['id'] == $user['branch_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$branch['id'].'" '.$selected.'>'.$branch['branch_name'].'</option>';
								} 
								?>
                            </select>
                            <span class="text-danger"><?php echo form_error('branch_id');?></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="first_name" class="control-label"><span
                                class="text-danger">*</span><?php echo $this->lang->line('frm_firstname'); ?></label>
                        <div class="form-group">
                            <input type="text" name="first_name"
                                value="<?php echo ($this->input->post('first_name') ? $this->input->post('first_name') : $user['first_name']); ?>"
                                class="form-control" id="first_name" />
                            <span class="text-danger"><?php echo form_error('first_name');?></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="last_name" class="control-label"><span
                                class="text-danger">*</span><?php echo $this->lang->line('frm_lastname'); ?></label>
                        <div class="form-group">
                            <input type="text" name="last_name"
                                value="<?php echo ($this->input->post('last_name') ? $this->input->post('last_name') : $user['last_name']); ?>"
                                class="form-control" id="last_name" />
                            <span class="text-danger"><?php echo form_error('last_name');?></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="mobile_number"
                            class="control-label"><?php echo $this->lang->line('frm_mobileno'); ?></label>
                        <div class="form-group">
                            <input type="text" name="mobile_number"
                                value="<?php echo ($this->input->post('mobile_number') ? $this->input->post('mobile_number') : $user['mobile_number']); ?>"
                                class="form-control" id="mobile_number" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="city" class="control-label"><?php echo $this->lang->line('frm_city'); ?></label>
                        <div class="form-group">
                            <input type="text" name="city"
                                value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $user['city']); ?>"
                                class="form-control" id="city" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="vehicle_type"
                            class="control-label"><?php echo $this->lang->line('frm_vehicle_type'); ?></label>
                        <div class="form-group">
                            <input type="text" name="vehicle_type"
                                value="<?php echo ($this->input->post('vehicle_type') ? $this->input->post('vehicle_type') : $user['vehicle_type']); ?>"
                                class="form-control" id="vehicle_type" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="model" class="control-label"><?php echo $this->lang->line('frm_model'); ?></label>
                        <div class="form-group">
                            <input type="text" name="model"
                                value="<?php echo ($this->input->post('model') ? $this->input->post('model') : $user['model']); ?>"
                                class="form-control" id="model" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="model"
                            class="control-label"><?php echo $this->lang->line('frm_isactive'); ?></label>
                        <div class="form-group">
						<input type="checkbox" name="is_active" value="1" <?php echo ($user['is_active']==1 ? 'checked="checked"' : ''); ?> />
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