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
    .float-right{
        direction: rtl;
    }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box  box-bottom float-right">
                <div class="body-body box-pad">
                    <h2 style="margin:0px;">رأيك يهمنا !</h2>
                    <br>
                    <h4>
                        شكراً لتقييمك .. لخدمتك مره أخرى اطلبني
                    </h4>
                    <h4>( <?php echo $_SESSION['userrname'] ?> )</h4>

                    <br> <br>

                    <h5>تابعنا على صفحتنا بالإنستقرام :</h5> 
                    <h5><a href="https://www.instagram.com/tlbatk.ksa/">https://www.instagram.com/tlbatk.ksa/</a> </h5>
                    <br><br>

                    <h5>للإقترحات أو الملاحظات :</h5> 
                    <h5><a href="http://cutt.us/0569933115">http://cutt.us/0569933115/</a> </h5><br><br>
                </div>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>

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