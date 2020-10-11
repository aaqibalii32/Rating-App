<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
						<th><?php echo $this->lang->line('frm_branch'); ?></th>
						<th><?php echo $this->lang->line('frm_firstname'); ?></th>
						<th><?php echo $this->lang->line('frm_lastname'); ?></th>
						<th><?php echo $this->lang->line('frm_mobileno'); ?></th>
						<th><?php echo $this->lang->line('frm_city'); ?></th>
						<th><?php echo $this->lang->line('frm_vehicle_type'); ?></th>
						<th><?php echo $this->lang->line('frm_model'); ?></th>
						<th><?php echo $this->lang->line('frm_isactive'); ?></th>
						<th><?php echo $this->lang->line('frm_user_link'); ?></th>
						<th><?php echo $this->lang->line('th_action'); ?></th>
                    </tr>
                    <?php foreach($users as $u){ ?>
                    <tr>
						<td><?php echo $u['branch']; ?></td>
						<td><?php echo $u['first_name']; ?></td>
						<td><?php echo $u['last_name']; ?></td>
						<td><?php echo $u['mobile_number']; ?></td>
						<td><?php echo $u['city']; ?></td>
						<td><?php echo $u['vehicle_type']; ?></td>
						<td><?php echo $u['model']; ?></td>
						<td><?php echo $u['is_active']; ?></td>
						<td><a href="<?php echo base_url('rating/add/'.$u['id']) ?>" target="_blank"><?php echo base_url('rating/add/'.$u['id']) ?></a></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a> 
                            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>               
            </div>
        </div>
    </div>
</div>
