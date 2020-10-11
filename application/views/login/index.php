<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ratingapp - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .login-form {
        width: 340px;
        margin: 50px auto;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="login-form">
        <?php if($this->session->flashdata('error')){ ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>

            <strong>
                <i class="fa fa-times"></i>
                Error!
            </strong>

            <?=$this->session->flashdata('error') ?>
        </div>
        <?php } ?>
        <?php if( $this->session->userdata('reset')){ ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>

            <strong>
                <i class="fa fa-times"></i>
                This is Your Password
            </strong>

            <?=$this->session->userdata('reset') ?>
        </div>
        <?php } ?>

        <?php echo form_open('login/authenticate') ?>
        <h2 class="text-center"><img src="<?php echo base_url('resources/img/gform.jpeg'); ?>" height="90px"width="90px"> <?php echo $this->lang->line('login'); ?></h2>
        <div class="form-group">
            <label>
                <?php echo $this->lang->line('key_email'); ?>
            </label>
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" />
        </div>
        <div class="form-group mt-3">
            <label>
                <?php echo $this->lang->line('key_password'); ?>
            </label>
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group mt-3">
            <label>
                <?php echo $this->lang->line('language_key'); ?>
            </label>
            <select class="form-control" name="langauge_selector" id="langauge_selector">
                <?php if(isset($_SESSION['lang_login'])){ ?>
                    <?php if($_SESSION['lang_login'] == "en"){ ?>
                        <option value="en" selected>English </option>
                        <option value="ar">Arabic </option>
                    <?php } else{ ?>
                        <option value="en">English </option>
                        <option value="ar" selected>Arabic </option>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="en" selected>English </option>
                    <option value="ar">Arabic </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"><?php echo $this->lang->line('login'); ?></button>
        </div>
        <?php echo form_close()?>
        </form>

    </div>

    <script>
        $("#langauge_selector").on('change', function(){
            var id = $("#langauge_selector").val();
            var url ="<?php echo base_url('login/lang_translator') ?>"+"/"+id;

            console.log(url);
            window.location.href = url;
        });
    </script>
</body>

</html>