			<div class="main-content">
				<div class="breadcrumbs fixed" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="<?php echo base_url(); ?>admin/admin">Dashboard</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Anggota</li>
					</ul><!--.breadcrumb-->
				</div>
				<div class="page-content">
					<div class="page-header position-relative">
					</div><!--/.page-header-->
					<div class="row-fluid">
						<div class="span12">
						<?php echo form_open_multipart('admin/anggota/save','class="form-horizontal"'); ?>
							<!--PAGE CONTENT BEGINS-->
							<div class="row-fluid">
							<form class="form-horizontal" />
								<div class="control-group">
									<label class="control-label">Kode Anggota</label>
									<div class="controls">
										<input type="text" value="<?php echo $Kode_Anggota; ?>" name="Kode_Anggota" required="required" class="span6" placeholder="Kode Anggota" readonly="true"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nama</label>
									<div class="controls">
										<input type="text" value="<?php echo $Nama; ?>" name="Nama" required="required" class="span6" placeholder="Nama" readonly="true"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" value="<?php echo $Username; ?>" name="Username" required="required" class="span6" placeholder="Username" readonly="true"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="text" value="<?php echo $Password; ?>" name="Password" required="required" class="span6" placeholder="Password" readonly="true"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Jenis_Kelamin</label>
									<div class="controls">
										<input type="text" value="<?php echo $Jenis_Kelamin; ?>" name="Jenis_Kelamin" required="required" class="span6" placeholder="Jenis_Kelamin" readonly="true"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Alamat</label>
									<div class="controls">
										<input type="text" value="<?php echo $Alamat; ?>" name="Alamat" required="required" class="span6" placeholder="Alamat" readonly="true"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Tanggal_Daftar</label>
									<div class="controls">
										<input type="text" value="<?php echo $Tanggal_Daftar; ?>" name="Tanggal_Daftar" required="required" class="span6 date-picker" data-date-format="yyyy-mm-dd" placeholder="Tanggal_Daftar" readonly="true"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">No_Telepon</label>
									<div class="controls">
										<input type="text" value="<?php echo $No_Telepon; ?>" name="No_Telepon" required="required" class="span6" placeholder="No_Telepon" readonly="true"/>
									</div>
								</div>
								<input type="hidden" name="id_param" value="<?php echo $ID_Param; ?>">
								<input type="hidden" name="status" value="<?php echo $status; ?>">
								<div class="control-group">
									<div class="controls">
			  							<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/anggota/index/<?php  ?>">Kembali</a>
									</div>
		  						</div>
								</div>
							</form>
							<?php echo form_close(); ?>
							</div><!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->
				<div class="row-fluid">
					<div id="footer" class="span12">
						<p align="center"><?php echo $GLOBALS['site_footer']; ?></p>
					</div>
				</div>	
			</div>	