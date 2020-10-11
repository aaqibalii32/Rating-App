<!-- <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                Please navigate to the appropriate controller / action to open the associated function with your generated code.
                </h3>
            </div>
        </div>
    </div>
</div> -->
<div class="box">
    <div class="row">
        <?php echo form_open('dashboard/index'); ?>
        <div class="box-body">
            <!-- <div class="col-md-1">
                <label style="margin-top:5px;">Search</label>
            </div> -->
            <div class="col-md-3">
                <div class="form-group">
                    <?php echo $this->lang->line('frm_branch'); ?> :
                    <select name="branch" id="branch" class="form-control">
                        <?php
                        foreach ($branch as $b) {
                            $selected = ($b['id'] == $branch_id) ? ' selected="selected"' : "";

                            echo '<option value="' . $b['id'] . '" ' . $selected . '>' . $b['branch_name'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <?php echo $this->lang->line('frm_staff'); ?> :
                <select name="staff[]" id="staff" class="form-control" multiple="multiple">
                    <!-- <option value="0">Select Branch First</option> -->
                    <?php
                    foreach ($staff as $s) {
                        $selected = in_array($s['id'], $staff_id) ? ' selected="selected"' : "";

                        echo '<option value="' . $s['id'] . '" ' . $selected . '>' . $s['first_name'] .' '. $s['last_name'] .'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-2">
                <?php echo $this->lang->line('frm_datefrom'); ?> :
                <input type="date" name="date_from" id="date_from" value="<?php echo ($this->input->post('date_from') ? $this->input->post('date_from') : $date_from) ?>" class="form-control" />

            </div>
            <div class="col-md-2">
                <?php echo $this->lang->line('frm_dateto'); ?>:
                <input type="date" name="date_to" id="date_to" value="<?php echo ($this->input->post('date_to') ? $this->input->post('date_to') : $date_to) ?>" class="form-control" />
            </div>
            <div class="col-md-1">
                <button class="btn btn-primary" style="margin-top:20px;"><?php echo $this->lang->line('btn_search'); ?></button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $this->lang->line('frm_all_rating'); ?></h3>
                <div class="box-tools">
                    <!-- <a href="<?php echo site_url('rating/add'); ?>" class="btn btn-success btn-sm">Add</a>  -->
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th><?php echo $this->lang->line('th_employee'); ?></th>
                                <th><?php echo $this->lang->line('th_rating'); ?></th>
                                <th><?php echo $this->lang->line('frm_mobileno'); ?></th>
                                <th><?php echo $this->lang->line('th_reason'); ?></th>
                                <th><?php echo $this->lang->line('frm_date_created'); ?></th>
                                <!-- <th>Actions</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ratings as $r) { ?>
                                <tr>
                                    <td><?php echo $r['id']; ?></td>
                                    <td><?php echo $r['user_id']; ?></td>
                                    <td><?php echo $r['rating_type']; ?></td>
                                    <td><?php echo $r['mobile_no']; ?></td>
                                    <td><?php echo $r['reason']; ?></td>
                                    <td><?php echo $r['date_created']; ?></td>
                                    <!-- <td>
                            <a href="<?php echo site_url('dashboard/view/' . $r['id']); ?>" class="btn btn-info btn-xs">View</a> 
                        </td> -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#branch').select2({});
    $('#staff').select2({});
    $("#branch").change(function() {
        debugger;
        var branch_id = $('#branch').val();
        if (branch_id != '') {
            $.ajax({
                type: 'GET',
                url: '<?php echo site_url('staff/getstaffbyBranch/') ?>' + branch_id,
                async: true,
                dataType: 'json',
                success: function(data) {
                    if (data.success == 1) {
                        $('#staff').empty();
                        if (data.list.length == 0) {
                            // $('<option/>', {
                            //     'value': '',
                            //     'text': '--No Staff added for this Branch--'
                            // }).appendTo('#staff');
                            // $('#ajaxLoaderDiv').hide();
                            return;
                        }
                        // $('<option/>', {
                        //     'value': '',
                        //     'text': '--Select Staff--'
                        // }).appendTo('#staff');

                        jQuery.each(data.list, function() {
                            $('<option/>', {
                                'value': this.id,
                                'text': this.full_name
                            }).appendTo('#staff');
                        });
                        // $('#ajaxLoaderDiv').hide();
                    }
                }
            });
        } else {
            $('#staff').empty();
            // $('<option/>', {
            //     'value': '',
            //     'text': 'Select Branch First'
            // }).appendTo('#staff');
        }
    })
    // $("#r_category").change(function() {
    //     debugger;
    //     var rcid = parseInt($("#r_category").val());
    //     window.location.href = '<?php echo base_url('dashboard/rc/') ?>' + rcid;
    // });
    // $("#staff").change(function() {
    //     window.location.href = '<?php echo base_url('dashboard/staff/') ?>' + $("#staff").val();
    // });
    // $("#period").change(function() {
    //     window.location.href = '<?php echo base_url('dashboard/period/') ?>' + $("#period").val();
    // });
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        colReorder: true,
        responsive: true,
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        "pageLength": 30,
        // "pagingType": "full_numbers",
        buttons: [{
                extend: 'excelHtml5',
                text: 'Export to Excel',
                titleAttr: 'Export to Excel'
            }
            // {
            //     extend: 'csvHtml5',
            //     // text: '<i class="btn btn-info fas fa-file"> .csv </i> ',
            //     titleAttr: 'CSV'
            // },
            // {
            //     extend: 'pdfHtml5',
            //     // text: '<i class="btn btn-danger fas fa-file-pdf">.pdf</i>',
            //     titleAttr: 'PDF'
            // }
        ]
    });
</script>