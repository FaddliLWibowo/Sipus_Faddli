<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>SIPUS - Sistem Informasi Perpustakaan</title>
		<meta name="description" content="Static &amp; Dynamic Tables">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-responsive.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-skins.min.css">
	</head>

	<body style="" class="navbar-fixed breadcrumbs-fixed skin-3">
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-leaf"></i>
							Ace Admin
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="dark">
                            <a href="#">
                            <span class="system-time">
                                <span class="xinix-date">15/07/2013</span> 
                                | 
                                <span class="xinix-time">11:20:02
                                </span>
                            </span>
                            </a>
                        </li>
						<li class="dark">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" <script src="<?php echo base_url(); ?>assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo sessions("nama");?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>
			<div class="sidebar fixed" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li>
						<a href="<?php echo base_url(); ?>admin/admin">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url(); ?>admin/buku">
							<i class="icon-book"></i>
							<span class="menu-text"> Buku </span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url(); ?>admin/anggota">
							<i class="icon icon-user"></i>
							<span class="menu-text"> Anggota</span>
						</a>
					</li>

					<li >
						<a href="<?php echo base_url(); ?>admin/peminjaman">
							<i class="icon-list"></i>
							<span class="menu-text"> Peminjaman</span>
						</a>
					</li>

					<li >
						<a href="<?php echo base_url(); ?>admin/pengembalian">
							<i class="icon-exchange"></i>
							<span class="menu-text"> Pengembalian</span>
						</a>
					</li>

					<li >
						<a href="<?php echo base_url(); ?>admin/rules">
							<i class=" icon-cogs"></i>
							<span class="menu-text"> Rules</span>
						</a>
					</li>
					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-file-alt"></i>

							<span class="menu-text">
								Laporan
								<span class="badge badge-primary ">2</span>
							</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<?php echo base_url(); ?>admin/laporan_pengembalian">
									<i class="icon-double-angle-right"></i>
									Laporan Peminjaman
								</a>
							</li>

							<li>
								<a href="<?php echo base_url(); ?>admin/laporan_pengembalian">
									<i class="icon-double-angle-right"></i>
									Laporan Pengembalian
								</a>
							</li>
						</ul>
					</li>
					<li >
						<a href="<?php echo base_url(); ?>admin/bantuan">
							<i class=" icon-heart"></i>
							<span class="menu-text"> Bantuan</span>
						</a>
					</li>
				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src=<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src=<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url(); ?>assets/js/xn.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/ace.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.autosize-min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
				$(".chzn-select").chosen(); 
				$('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			});
		</script>
</body></html>