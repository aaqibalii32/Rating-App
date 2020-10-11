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
    .responsive {
        width: 100%;
        height: auto;
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
    .float-right{
        direction: rtl;
    }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <center>
        <!-- <h3><?php echo $this->lang->line('fb_heading'); ?></h3><br> -->
        <!-- <p>all fields with * are eequired</p> -->
    </center>
    <div class="row">
        <?php echo form_open('rating/submit_rating/'); ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box  box-bottom" style="margin-top: 50px;">
                <div class="body-body box-pad">
                    <h2 style="margin:0px;" class="float-right">رأيك يهمنا !</h2>
                    <br>
                    <h6 class="required float-right">* Required</h6>
                </div>
            </div>

            <?php if($form_one['rating_type'] == 3){ ?>

            <div class="box  box-bottom float-right">
                <div class="box-header box-info">
                    <h5>نأسف لعدم رضاكم</h5>
                </div>
                <div class="body-body box-pad">
                    <p>
                        اترك تعليقك لسبب سوء الخدمة وسيتم تواصل ممثل فريق طلباتك خلال 24 ساعة
                    </p>
                    <p>
                        تابعنا على صفحتنا بالإنستقرام
                    </p>
                    <p>
                        <a href="https://www.instagram.com/tlbatk.ksa/"> https://www.instagram.com/tlbatk.ksa/</a>
                    </p>
                </div>
            </div>

            <div class="box  box-bottom float-right">
                <div class="body-body box-pad">
                    <div class="row clearfix">
                    <div class="col-md-6"></div>
                        <div class="col-md-6 float-right" style="font-size: 19px;">
                            <label for="rating_type" style="margin-bottom: 20px;"
                                class="control-label"><?php echo $this->lang->line('th_reason'); ?> <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                <textarea class="form-control" name="reason" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box  box-bottom float-right">
                <div class="body-body box-pad">
                    <div class="row clearfix">
                        <div class="col-md-6"></div>
                        <div class="col-md-6 float-right" style="font-size: 19px;">
                            <label for="rating_type" style="margin-bottom: 20px;"
                                class="control-label"><?php echo $this->lang->line('frm_mobileno'); ?> <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" id="phoneNo"  pattern="[1-9]{1}[0-9]{9}" class="form-control" name="mobile_no" required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="box  box-bottom">
                <div class="body-body box-pad">
                    <center>
                        <img src="<?php echo site_url('resources/img/gform.jpeg');?>" class="user-image responsive" height="400px"
                            alt="User Image">
                    </center>
                </div>
            </div>
            <div class="box">

                <div class="box-footer">
                    <button type="button" class="btn btn-success" id="backBtn">
                        Back
                    </button>
                    <button type="submit" class="btn btn-success">
                        Submit
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
        <?php echo form_close() ?>
    </div>

    <script type="text/javascript">
    $('#staff').select2({});

    jQuery(document).ready(function () {
      jQuery("#phoneNo").keypress(function (e) {
         var length = jQuery(this).val().length;
       if(length > 9) {
            return false;
       } else if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
       } else if((length == 0) && (e.which == 48)) {
            return false;
       }
      });
    });

    function goBack(){
        window.history.go();
    }
    $("#backBtn").click(function() {
        // history.back();
        window.history.go(-1);
    });
    $('#myform').submit(function(e) {
        if ($('#rating_type').val() == 3 && $('#reason').val() == '') {
            alert('Please give feedback before submitting');
            e.preventDefault();
            return;
        }

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