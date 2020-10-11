<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ratingapp</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js'); ?>"></script>

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('resources/css/custom.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css'); ?>">
    <script src="<?= base_url('resources/js/select2.min.js') ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('resources/css/') ?>select2.min.css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('resources/css/') ?>dataTables.bootstrap.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"> </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"> </script>
    <style>
    body {
        background: #F5F8D7;
    }

    .box {
        position: relative;
        border-radius: 3px;
        background: #FFFFFF;
        border-top: 3px solid #FFFFFF;
        margin-bottom: 20px;
        width: 100%;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    }

    .box-bottom {
        margin-bottom: 10px;
    }

    .box-pad {
        padding: 20px;
    }

    .required {
        color: red;
    }
    .responsive {
        width: 100%;
        height: auto;
    }
    .float-right{
        direction: rtl;
    }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <center>
        <h3><?php echo $this->lang->line('fb_heading'); ?></h3 <br>
        <!-- <p>all fields with * are eequired</p> -->
    </center>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box box-info box-bottom">
                <div class="body-body box-pad ">
                    <h2 style="margin:0px;" class="float-right">رأيك يهمنا !</h2>
                    <br>
                    <h6 class="required float-right">* Required</h6>
                </div>
            </div>

            <div class="box box-info box-bottom">
                <div class="body-body box-pad">
                    <center>
                        <img src="<?php echo site_url('resources/img/gform.jpeg');?>" class="user-image responsive" height="300px"
                            alt="User Image">
                    </center>

                </div>
            </div>

            <div class="box">
                <!-- <div class="box-header with-border">
					<h3 class="box-title"></h3>
				</div> -->
                <?php echo form_open('rating/add/' . $staff_id, array('id' => 'myform')); ?>
                <div class="box-body box-pad">
                    <div class="row clearfix ">
                        <div class="col-md-12 float-right" style="font-size: 19px;">
                            <label for="rating_type" style="margin-bottom: 20px;"
                                class="control-label"><?php echo $this->lang->line('frm_rating_category'); ?> <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="radio" name="rating_type" style="margin-left: 5px;"
                                    value="1" /><?php echo $this->lang->line('fb_excelent'); ?> <br /><br />
                                <input type="radio" name="rating_type" value="2" style="margin-left: 5px;" />
                                <?php echo $this->lang->line('fb_good'); ?> <br /><br />
                                <input type="radio" name="rating_type" style="margin-left: 5px;"
                                    value="3" /><?php echo $this->lang->line('fb_bad'); ?><br /><br />

                            </div>
                        </div>

                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">
                        <!-- <i class="fa fa-check"></i>  -->
                        <!-- <?php echo $this->lang->line('btn_continue'); ?> -->
                        Next
                    </button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    <script type="text/javascript">
    $('#staff').select2({});
    $('#myform').submit(function(e) {
    });
    </script>
    <script src="<?php echo site_url('resources/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo site_url('resources/js/fastclick.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo site_url('resources/js/app.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo site_url('resources/js/demo.js'); ?>"></script>
    <!-- DatePicker -->
    <script src="<?php echo site_url('resources/js/moment.js'); ?>"></script>
    <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script src="<?php echo site_url('resources/js/global.js'); ?>"></script>
</body>

</html>