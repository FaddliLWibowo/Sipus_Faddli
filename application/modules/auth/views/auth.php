<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login SIPUS - Sistem Informasi Perpustakaan</title>
        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
        <link rel="stylesheet" href="assets/css/ace.min.css" />
        <link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body class="login-layout">
        <div class="main-container container-fluid">
            <div class="main-content">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="login-container">
                            <div class="row-fluid">
                                <div class="center">
                                    <h4 class="blue">&copy; SIPUS - SMA PLUS BINA BANGSA</h4>
                                </div>
                            </div>
                            <div class="space-6"></div>
                            <div class="row-fluid">
                                <div class="position-relative">
                                    <div id="login-box" class="login-box visible widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <h4 class="header blue lighter bigger">
                                                    <i class="icon-coffee green"></i>
                                                    Please Enter Your Information
                                                </h4>
                                                <div class="space-6"></div>
                                                <?php echo form_open('auth/index'); ?>
                                                <form />
                                                    <fieldset>
                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" class="span12" required="required" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" />
                                                                <i class="icon-user"></i>
                                                            </span>
                                                        </label>

                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="password" class="span12" required="required" name="password" placeholder="Password" />
                                                                <i class="icon-lock"></i>
                                                            </span>
                                                        </label>
                                                        </label>
                                                           <span class="block input-icon input-icon-right">
                                                                <select name="stts" class="span12" value="<?php echo set_value('stts'); ?>" required="required">
                                                                <option placeholder="">-- Pilih Status --</option>
                                                                <option value="administrator">Admin</option>
                                                                <option value="guru">Guru</option>
                                                                <option value="siswa">Siswa</option>
                                                                </select>
                                                            </span>
                                                        </label>       
                                                        <div class="space"></div>

                                                        <div class="clearfix">
                                                            <label class="inline">
                                                                <input type="checkbox" />
                                                                <span class="lbl"> Remember Me</span>
                                                            </label>

                                                            <button class="width-35 pull-right btn btn-small btn-primary">
                                                                <i class="icon-key"></i>
                                                                Login
                                                            </button>
                                                        </div>

                                                        <div class="space-4"></div>
                                                    </fieldset>
                                                </form>
                                                <?php echo form_close(); ?>
                                                <div class="social-or-login center">
                                                    <span class="bigger-110">Or Login Using</span>
                                                </div>

                                                <div class="social-login center">
                                                    <a class="btn btn-primary">
                                                        <i class="icon-facebook"></i>
                                                    </a>

                                                    <a class="btn btn-info">
                                                        <i class="icon-twitter"></i>
                                                    </a>

                                                    <a class="btn btn-danger">
                                                        <i class="icon-google-plus"></i>
                                                    </a>
                                                </div>
                                            </div><!--/widget-main-->

                                            <div class="toolbar clearfix">
                                                <div>
                                                    <a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
                                                        I want to register
                                                        <i class="icon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!--/widget-body-->
                                    </div><!--/login-box-->

                                    <div id="forgot-box" class="forgot-box widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <h4 class="header red lighter bigger">
                                                    <i class="icon-key"></i>
                                                    Retrieve Password
                                                </h4>

                                                <div class="space-6"></div>
                                                <p>
                                                    Enter your email and to receive instructions
                                                </p>

                                                <form />
                                                    <fieldset>
                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="email" class="span12" placeholder="Email" />
                                                                <i class="icon-envelope"></i>
                                                            </span>
                                                        </label>

                                                        <div class="clearfix">
                                                            <button onclick="return false;" class="width-35 pull-right btn btn-small btn-danger">
                                                                <i class="icon-lightbulb"></i>
                                                                Send Me!
                                                            </button>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div><!--/widget-main-->

                                            <div class="toolbar center">
                                                <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                                    Back to login
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div><!--/widget-body-->
                                    </div><!--/forgot-box-->

                                    <div id="signup-box" class="signup-box widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <h4 class="header green lighter bigger">
                                                    <i class="icon-group blue"></i>
                                                    New User Registration
                                                </h4>

                                                <div class="space-6"></div>
                                                <p> Enter your details to begin: </p>

                                                <form />
                                                    <fieldset>
                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="email" class="span12" placeholder="Email" />
                                                                <i class="icon-envelope"></i>
                                                            </span>
                                                        </label>

                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" class="span12" placeholder="Username" />
                                                                <i class="icon-user"></i>
                                                            </span>
                                                        </label>

                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="password" class="span12" placeholder="Password" />
                                                                <i class="icon-lock"></i>
                                                            </span>
                                                        </label>

                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="password" class="span12" placeholder="Repeat password" />
                                                                <i class="icon-retweet"></i>
                                                            </span>
                                                        </label>
                                                        <div class="space-24"></div>

                                                        <div class="clearfix">
                                                            <button type="reset" class="width-30 pull-left btn btn-small">
                                                                <i class="icon-refresh"></i>
                                                                Reset
                                                            </button>

                                                            <button onclick="return false;" class="width-65 pull-right btn btn-small btn-success">
                                                                Register
                                                                <i class="icon-arrow-right icon-on-right"></i>
                                                            </button>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>

                                            <div class="toolbar center">
                                                <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                                    <i class="icon-arrow-left"></i>
                                                    Back to login
                                                </a>
                                            </div>
                                        </div><!--/widget-body-->
                                    </div><!--/signup-box-->
                                </div><!--/position-relative-->
                            </div>
                        </div>
                    </div><!--/.span-->
                </div><!--/.row-fluid-->
            </div>
        </div><!--/.main-container-->

        <!--basic scripts-->

        <!--[if !IE]>-->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

        <!--<![endif]-->

        <!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

        <!--[if !IE]>-->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
        </script>

        <!--<![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

        <script type="text/javascript">
            if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!--page specific plugin scripts-->

        <!--ace scripts-->

        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

        <!--inline scripts related to this page-->

        <script type="text/javascript">
            function show_box(id) {
             $('.widget-box.visible').removeClass('visible');
             $('#'+id).addClass('visible');
            }
        </script>
    </body>
</html>
<?php
$jarak = 7;
echo "Tanggal hari ini : <b>";
echo date("d-m-Y");
echo "</b>";
echo "<br/><b>$jarak</b> hari lagi dari tanggal hari ini adalah : <b>";
//menentukan timestamp 7 hari selanjutnya.
$akan = mktime(0, 0, 0, date("m"), date("d") + $jarak, date("Y"));
//Menampilkan hasil dari timestamp.
echo date("d-m-Y", $akan);
echo "</b>";
echo "<br/><b>$jarak</b> hari yang lalu dari tanggal hari ini adalah : <b>";
//menentukan timestamp 7 hari sebelumnya.
$lalu = mktime(0, 0, 0, date("m"), date("d") - $jarak, date("Y"));
//Menampilkan hasil dari timestamp.
echo date("d-m-Y", $lalu);
echo "</b>";
?>
