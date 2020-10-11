<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Branch Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('branch/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
						<th><?php echo $this->lang->line('frm_branch_name'); ?></th>
						<th><?php echo $this->lang->line('frm_branch_address'); ?></th>
                        <!-- <th>Role Id</th> -->
                        <!-- <th>Is Active</th> -->
						<!-- <th>Date Created</th> -->
						<th><?php echo $this->lang->line('th_action'); ?></th>
                    </tr>
                    <?php foreach($branch as $s){ ?>
                    <tr>
						<td><?php echo $s['branch_name']; ?></td>
                        <td><?php echo $s['address']; ?></td>
                        <!-- <td><?php echo $s['role_id']; ?></td> -->
                        <!-- <td><?php echo $s['is_active']; ?></td> -->
						<!-- <td><?php echo $s['date_created']; ?></td> -->
						<td>
                            <a href="<?php echo site_url('branch/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> </a> 
                            <a href="<?php echo site_url('branch/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> </a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>          
            </div>
        </div>
    </div>
</div>
