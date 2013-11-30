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
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
							<div class="row-fluid">
								<h3 class="header smaller lighter "></h3>
								<div class="widget-header widget-hea1der-small header-color-dark">
									<h5>Data Anggota</h5>
									<div class="widget-toolbar no-border">
									<?php echo form_open("admin/anggota/search"); ?>
									<form class="form-search" />
										<input name="cari" type="text" class="input-medium search-query" placeholder="Masukkan kata kunci"/>
											<button class="btn btn-purple btn-small">
												Search
												<i class="icon-search icon-on-right bigger-110"></i>
											</button>
									</form>		
									<?php echo form_close(); ?>		
									</div>
									<div class="widget-toolbar no-border">
										<a href="<?php echo base_url(); ?>admin/anggota/add" class="btn btn-small btn-primary">
										<i class="icon-plus icon-white"></i> Tambah Anggota
										</a>
									</div>
								</div>
								<?php echo form_open_multipart('admin/anggota/delete_all'); ?>
  									<table id="sample-table-2" class="table table-striped table-bordered table-hover">
										<thead>
      										<tr>
      											<th class="center">
													<label>
														<input type="checkbox" />
														<span class="lbl"></span>
													</label>
												</th>
        										<th>No.</th>
       						 					<th>Kode Anggota</th>
        										<th>Nama</th>
        										<th>Username</th>
												<th>Jenis Kelamin</th>
												<th>Alamat</th>
       						 					<th>Tanggal Daftar</th>
       						 					<th>No Telp</th>
												<th>Aksi</th>
      										</tr>
    									</thead>
    									<tbody>
											<?php
												$no=$tot+1;
												foreach($anggota->result_array() as $f)
											{
											?>
    										<tr>
    											<td class="center">
													<label>
														<input value=<?php echo $f['ID_Anggota']; ?> name="chk[]" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</td>
       											<td ><?php echo $no; ?></td>
        										<td ><?php echo $f['Kode_Anggota']; ?></td>
        										<td ><?php echo $f['Nama']; ?></td>
        										<td ><?php echo $f['Username']; ?></td>
        										<td ><?php echo $f['Jenis_Kelamin']; ?></td>
        										<td ><?php echo $f['Alamat']; ?></td>
        										<td ><?php echo tanggal($f['Tanggal_Daftar']); ?></td>
        										<td ><?php echo $f['No_Telepon']; ?></td>
	    									<td>
	        									<div class="hidden-phone visible-desktop action-buttons">
													<a class="blue" href="<?php echo base_url(); ?>admin/anggota/detail/<?php echo $f['ID_Anggota']; ?>">
														<i class="icon-zoom-in bigger-130"></i>
													</a>

													<a class="green" href="<?php echo base_url(); ?>admin/anggota/edit/<?php echo $f['ID_Anggota']; ?>">
														<i class="icon-pencil bigger-130"></i>
													</a>

													<a class="red" href="<?php echo base_url(); ?>admin/anggota/delete/<?php echo $f['ID_Anggota']; ?>"onClick="return confirm('Anda yakin..???');">
														<i class="icon-trash bigger-130"></i>
													</a>
												</div>
											</td>
    										</tr>
												<?php
	 												$no++;
	 												}
	 											?>
										</tbody>
									</table>
									<div class="control-group">
											<div class="controls">
			  									<button type="submit" class="btn btn-primary">Hapus Data</button>
											</div>
		  								</div>
									<div class="pagination pagination-centered">
										<ul>
											<?php
												echo $paginator;
											?>
										</ul>
									</div>
									<?php echo form_close(); ?>
									<div class="row-fluid">
										<div id="footer" class="span12">
											<p align="center"><?php echo $GLOBALS['site_footer']; ?></p>
										</div>
									</div>
							</div>	