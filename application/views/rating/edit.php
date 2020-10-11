<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Rating Edit</h3>
            </div>
			<?php echo form_open('rating/edit/'.$rating['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
				<div class="col-md-3">
						<label for="rating_type" class="control-label">Staff <span class="text-danger">*</span></label>
						<div class="form-group">
							<select name="staff" id="staff" class="form-control">
								<option value="">Select Staff </option>
								<?php 
								foreach($staff as $s)
								{
									$selected = ($s['id'] == $rating['user_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$s['id'].'" '.$selected.'>'.$s['full_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<label for="rating_type" class="control-label">Rating Category <span class="text-danger">*</span></label>
						<div class="form-group">
							<select name="rating_type" class="form-control">
								<option value="">select rating_category</option>
								<?php 
								foreach($all_rating_category as $rating_category)
								{
									$selected = ($rating_category['id'] == $rating['rating_type']) ? ' selected="selected"' : "";

									echo '<option value="'.$rating_category['id'].'" '.$selected.'>'.$rating_category['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<label for="reason" class="control-label">Reason</label>
						<div class="form-group">
							<textarea name="reason" class="form-control" id="reason"><?php echo ($this->input->post('reason') ? $this->input->post('reason') : $rating['reason']); ?></textarea>
						</div>
					</div>
					<!-- <div class="col-md-3">
						<label for="user_id" class="control-label"><span class="text-danger">*</span>User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo ($this->input->post('user_id') ? $this->input->post('user_id') : $rating['user_id']); ?>" class="form-control" id="user_id" />
							<span class="text-danger"><?php echo form_error('user_id');?></span>
						</div>
					</div> -->
					<!-- <div class="col-md-3">
						<label for="added_by" class="control-label">Added By</label>
						<div class="form-group">
							<input type="text" name="added_by" value="<?php echo ($this->input->post('added_by') ? $this->input->post('added_by') : $rating['added_by']); ?>" class="form-control" id="added_by" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo ($this->input->post('date_created') ? $this->input->post('date_created') : $rating['date_created']); ?>" class="form-control" id="date_created" />
						</div>
					</div> -->
					
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>