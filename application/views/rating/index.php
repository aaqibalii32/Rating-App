<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ratings Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('rating/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Employee</th>
                        <th>Rating Type</th>
                        <th>Customer</th>
                        <th>Reason</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($ratings as $r) { ?>
                        <tr>
                            <td><?php echo $r['id']; ?></td>
                            <td><?php echo $r['user_id']; ?></td>
                            <td><?php echo $r['rating_type']; ?></td>
                            <td><?php echo $r['added_by']; ?></td>
                            <td><?php echo $r['reason']; ?></td>
                            <td><?php echo $r['date_created']; ?></td>
                            <td>
                                <a href="<?php echo site_url('rating/edit/' . $r['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> </a>
                                <a href="<?php echo site_url('rating/remove/' . $r['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>