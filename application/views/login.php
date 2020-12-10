<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Sistem</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

	<style>
		#login-form{
			border:1px solid gray;
			border-radius:10px;
			
		}
	</style>

</head>

<body style="background:gray">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container col-md-4">
            <div class="login-content">
                <div class="login-logo">
                    <a href="">
                        <img class="align-content" src="<?php echo base_url() ?>assets/images/user.png" alt="" width="150px">
                    </a>
                </div>
                <div id="login-form" class="login-form">
                    <form method="post" action="<?php echo base_url()."dashboard/login" ?>">
						<!--<div class="form-group">
                            <label>Tahun akademik</label>
                            <select name="tahun" class="form-control" required>
								<option value="" selected disabled>Pilih tahun</option>
								<option value="2019-2020">2019-2020</option>
								<option value="2020-2021">2020-2021</option>
							</select>
                        </div>-->
                        <div class="form-group">
                            <label>Username</label>
                            <input style="text-align:center" type="text" name="username" class="form-control" autocomplete="off" autofocus required>
                        </div>
                            <div class="form-group">
                            <label>Password</label>
                            <input style="text-align:center" type="password" name="password" class="form-control" required>
                        </div>
                            <div class="checkbox">
                            <!--<label>
                                <input type="checkbox"> Remember Me
                            </label>-->
                            

                            </div>
                                <button type="submit" name="login" class="btn btn-info btn-flat m-b-30 m-t-30">Login</button>
								
                                <!--<center><a href="#">Lupa Password?</a></center>-->
								
								<br><br>
                               
                                <!--<div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url() ?>/assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/assets/js/main.js"></script>


</body>

</html>
