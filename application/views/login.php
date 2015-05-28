<!--<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Gudang</title>


<body>
<center>
    
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">-->
                    <h2><center>SISTEM LOGIN GUDANG</center></h2>
                    
               <!-- </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                <form action="<?php echo base_url(); ?>c_login" method="post" role="form">
                    
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="name">Username</label>
                                <input class="form-control" name="username" placeholder="Masukkan Username" type="text">
                                 <?php echo "<span style ='color:red;'>".form_error('username')."</span>"?>
                          
                            </div>
							<br/>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="email">Password</label>
                                <input class="form-control" name="password" placeholder="Masukkan Password" type="password">
                                 <?php echo "<span style ='color:red;'>".form_error('password')."</span>"?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-lg btn-success">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    
    
            </div>
</center>

    <script src="<?php echo base_url()?>freelancer/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url()?>freelancer/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>freelancer/js/classie.js"></script>
    <script src="<?php echo base_url()?>freelancer/js/cbpAnimatedHeader.js"></script>
    <script src="<?php echo base_url()?>freelancer/js/freelancer.js"></script>
</body>
</html>-->
<head>
 <!--<link href="<?= base_url()?>temp_1/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?= base_url()?>temp_1/css/stylish-portfolio.css" rel="stylesheet">
 <link href="<?= base_url()?>temp_1/css/main.css" rel="stylesheet">
 <link href="<?= base_url()?>temp_1/css/responsive.css" rel="stylesheet">-->
	<link href="<?= base_url()?>temp_1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/main.css" rel="stylesheet">
    <link href="<?= base_url()?>temp_1/css/responsive.css" rel="stylesheet">
 </head>

 <div class="col-md-4 col-lg-offset-4 table-responsive" style="background:#0066CC">
<h2>Login</h2>

<body class="header">
<form action="" method="post">
<div class="form-group"><?php echo form_error('username'); ?>
<p>Username :<input type="text" name="username" placeholder="username" class="form-control"/></p>
</div>

<div class="form-group">
<p>Password :<input type="password" name="password" placeholder="password" class="form-control"/></p>
</div>

<!--<p>Username :<input type="text" name="username"/></p>
<p>Password :<input type="password" name="password"/></p>
<!--<p>User Type :
	<select name="user_type">
	<option value="" selected="selected">---</option>
	<option value="admin">admin</option>
	<option value="author">author</option>
	<option value="user">user</option>
	</select>-->
<p><input type="submit" class="btn btn-primary" value="Login" /></p>
</form>
</body>