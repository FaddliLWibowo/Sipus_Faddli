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
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
							<div class="row-fluid">
								<h3 class="header smaller lighter "></h3>
								<div class="widget-header widget-hea1der-small header-color-dark">
									<h5>Data Buku</h5>
									<div class="widget-toolbar no-border">
									<?php echo form_open("admin/buku/search"); ?>
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
										<a href="<?php echo base_url(); ?>admin/buku/add" class="btn btn-small btn-primary">
										<i class="icon-plus icon-white"></i> Tambah Buku
										</a>
									</div>
								</div>
  									<table id="sample-table-2" class="table table-striped table-bordered table-hover">
										<thead>
      										<tr>
        										<th>No.</th>
       						 					<th>Kode Buku</th>
        										<th>Judul</th>
        										<th>Pengarang</th>
												<th>Penerbit</th>
												<th>Halaman</th>
												<th>Rak</th>
       						 					<th>Stock</th>
												<th>Aksi</th>
      										</tr>
    									</thead>
    									<tbody>
											<?php
												$no=$tot+1;
												foreach($buku->result_array() as $f)
											{
											?>
    										<tr>
       											<td ><?php echo $no; ?></td>
        										<td ><?php echo $f['Kode_Buku']; ?></td>
        										<td ><?php echo $f['Judul']; ?></td>
        										<td ><?php echo $f['Pengarang']; ?></td>
        										<td ><?php echo $f['Penerbit']; ?></td>
        										<td ><?php echo $f['Halaman']; ?></td>
        										<td ><?php echo $f['Rak']; ?></td>
        										<td ><?php echo $f['Stock']; ?></td>
	    									<td>
	        									<div class="hidden-phone visible-desktop action-buttons">
													<a class="blue" href="<?php echo base_url(); ?>admin/buku/detail/<?php echo $f['ID_Buku']; ?>">
														<i class="icon-zoom-in bigger-130"></i>
													</a>

													<a class="green" href="<?php echo base_url(); ?>admin/buku/edit/<?php echo $f['ID_Buku']; ?>">
														<i class="icon-pencil bigger-130"></i>
													</a>

													<a class="red" href="<?php echo base_url(); ?>admin/buku/delete/<?php echo $f['ID_Buku']; ?>"onClick="return confirm('Anda yakin..???');">
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
									<div class="pagination pagination-centered">
										<ul>
											<?php
												echo $paginator;
											?>
										</ul>
									</div>
									<div class="row-fluid">
										<div id="footer" class="span12">
											<p align="center"><?php echo $GLOBALS['site_footer']; ?></p>
										</div>
									</div>
							</div>	