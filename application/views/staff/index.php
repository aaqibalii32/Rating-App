<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $this->lang->line('th_employee_listing'); ?></h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('staff/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Forename</th>
                        <th><?php echo $this->lang->line('frm_firstname'); ?></th>
                        <th><?php echo $this->lang->line('frm_lastname'); ?></th>
                        <th><?php echo $this->lang->line('frm_mobileno'); ?></th>
                        <th><?php echo $this->lang->line('frm_city'); ?></th>
                        <th><?php echo $this->lang->line('frm_vehicle_type'); ?></th>
                        <th><?php echo $this->lang->line('frm_model'); ?></th>
                         <th><?php echo $this->lang->line('frm_branch'); ?></th>
						<th><?php echo $this->lang->line('email'); ?></th>
                       
                        <th><?php echo $this->lang->line('frm_user_link'); ?></th>
						<th><?php echo $this->lang->line('frm_date_created'); ?></th>
						<th><?php echo $this->lang->line('th_action'); ?></th>
                    </tr>
                    <?php foreach($staff as $s){ ?>
                    <tr>
                        <td><?php echo $s['forename']; ?></td>
                        <td><?php echo $s['first_name']; ?></td>
                        <td><?php echo $s['last_name']; ?></td>
                        <td><?php echo $s['mobile_no']; ?></td>
                        <td><?php echo $s['city']; ?></td>
                        <td><?php echo $s['vehicle_type']; ?></td>
                        <td><?php echo $s['model']; ?></td>
                        <td><?php echo $s['branch_name']; ?></td>
                        <td><?php echo $s['email']; ?></td>
                        <td><a href="<?php echo base_url('rating/add/'.$s['id']) ?>"><?php echo base_url('customer/rating/'.$s['id']) ?></a></td>
						<td><?php echo $s['date_created']; ?></td>
						<td>
                            <a href="<?php echo site_url('staff/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> </a> 
                            <a href="<?php echo site_url('staff/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> </a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
