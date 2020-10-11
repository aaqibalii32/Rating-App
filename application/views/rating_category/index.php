<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Rating Category Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('rating_category/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($rating_category as $r){ ?>
                    <tr>
						<td><?php echo $r['name']; ?></td>
						<td>
                            <a href="<?php echo site_url('rating_category/edit/'.$r['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> </a> 
                            <a href="<?php echo site_url('rating_category/remove/'.$r['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
