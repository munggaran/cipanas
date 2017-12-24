
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

	<link href="<?=base_url();?>img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="<?=base_url();?>img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="<?=base_url();?>img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="<?=base_url();?>img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="<?=base_url();?>img/favicon.png" rel="icon" type="image/png">
	<link href="<?=base_url();?>img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="<?=base_url();?>css/separate/pages/login.min.css">
    <link rel="stylesheet" href="<?=base_url();?>css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>css/main.css">
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <?php echo form_open("auth/login",'class="sign-box"');?>
                    <div class="sign-avatar">
                        <img src="<?=base_url();?>img/avatar-sign.png" alt="">
                    </div>
                    <header class="sign-title"><?php echo lang('login_heading');?></header>
                    <?php if ($message!='') echo'<div class="form-error-text-block" id="infoMessage">'.$message.'</div>'; ?>
                    <p><?php echo lang('login_subheading');?></p>                    
                    <div class="form-group">
                        <input type="text" name="identity" value="" id="identity" class="form-control" placeholder="E-Mail/Username"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" value="" id="password" class="form-control" placeholder="Password"/>         
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" name="remember" value="1"  id="remember"/>
                            <?php echo lang('login_remember_label', 'remember');?>
                        </div>
                        <div class="float-right reset">
                            <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
                        </div>
                    </div>
                    <button type="submit" name="submit" value="Login" class="btn btn-rounded">Sign in</button>
                    <p class="sign-note">New to our website? <a href="sign-up.html">Sign up</a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                <?php echo form_close();?>
            </div>
        </div>
    </div><!--.page-center-->



<script src="<?=base_url();?>js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="<?=base_url();?>js/lib/popper/popper.min.js"></script>
<script src="<?=base_url();?>js/lib/tether/tether.min.js"></script>
<script src="<?=base_url();?>js/lib/bootstrap/bootstrap.min.js"></script>
<script src="<?=base_url();?>js/plugins.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="<?=base_url();?>js/app.js"></script>
</body>
</html>






