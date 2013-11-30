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
						<li class="active">Buku</li>
					</ul><!--.breadcrumb-->
				</div>
				<div class="page-content">
					<div class="page-header position-relative">
					</div><!--/.page-header-->
					<div class="row-fluid">
						<div class="span12">
						<?php echo form_open_multipart('admin/buku/save','class="form-horizontal"'); ?>
							<!--PAGE CONTENT BEGINS-->
							<div class="row-fluid">
							<form class="form-horizontal" />
								<div class="control-group">
									<label class="control-label">Kode Buku</label>
									<div class="controls">
										<input type="text" value="<?php echo $Kode_Buku; ?>" name="Kode_Buku" required="required" class="span6" placeholder="Kode Buku" readonly="true"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Judul</label>
									<div class="controls">
										<input type="text" value="<?php echo $Judul; ?>" name="Judul" required="required" class="span6" placeholder="Judul" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Pengarang</label>
									<div class="controls">
										<input type="text" value="<?php echo $Pengarang; ?>" name="Pengarang" required="required" class="span6" placeholder="Pengarang" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Penerbit</label>
									<div class="controls">
										<input type="text" value="<?php echo $Penerbit; ?>" name="Penerbit" required="required" class="span6" placeholder="Penerbit" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Halaman</label>
									<div class="controls">
										<input type="text" value="<?php echo $Halaman; ?>" name="Halaman" required="required" class="span6" placeholder="Halaman" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Rak</label>
									<div class="controls">
										<input type="text" value="<?php echo $Rak; ?>" name="Rak" required="required" class="span6" placeholder="Rak" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Stock</label>
									<div class="controls">
										<input type="text" value="<?php echo $Stock; ?>" name="Stock" required="required" class="span6" placeholder="Stock" />
									</div>
								</div>
								<input type="hidden" name="id_param" value="<?php echo $ID_Param; ?>">
								<input type="hidden" name="status" value="<?php echo $status; ?>">
								<div class="control-group">
									<div class="controls">
			  							<button type="submit" class="btn btn-primary">Simpan Data</button>
			  							<button type="reset" class="btn">Hapus Data</button>
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