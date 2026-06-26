<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                   Detail Setoran Kolektor PLB
                </h3>
            </div>
			<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="#.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
											
				
			</div>
			<div class="kt-subheader__toolbar">
                
                <a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
                    <i class="flaticon2-printer"></i> Export Data</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-pdf"></i><span class="kt-nav__link-text">PDF</span>
                            </a>
                          </li>
						  <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-pdf"></i><span class="kt-nav__link-text">Tanda Terima</span>
                            </a>
                          </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-excel"></i><span class="kt-nav__link-text">Excel</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Nav-->
                </div>
               
            </div>
		</div>
            
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
 <div class="row">
            <!-- end:: Alert -->
			<div class="col-lg-12">
                      <div class="row">
								
<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Setoran</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                                <label>Nama Kolektor :</label>
								
                               <input type="text" class="form-control form-control-sm" placeholder="HARIS DG PAWA" disabled>
                            </div>
						<div class="col-lg-2">
                          <label>Periode Bulan :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Oktober" disabled>
                        </div>
						<div class="col-lg-2">
                          <label>Tahun :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="2024" disabled>
                        </div>
						<div class="col-lg-4">
                          <label>Total Customer :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="2" disabled>
                        </div>
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">

						<div class="col-lg-4">
                                <label>ID Transaksi :</label>
								
                               <input type="text" class="form-control form-control-sm" placeholder="0001INVPLB1123" disabled>
                            </div>
						<div class="col-lg-4">
                                <label>Tanggal Penerimaan Setoran :</label>
								
                               <input type="text" class="form-control form-control-sm" placeholder="8 Oktober 2024" disabled>
                            </div>
						<div class="col-lg-4">
                          <label>Total Setoran :</label>
                          <div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="20.000.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div>
                        </div>
                        </div>
						  
						
						  




											</div>
											</div>


									</div>
									</div>
									
									
									




     
										
										<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Setoran Customer PLB</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" bgcolor="#f7fcff">Invoice</th>
											  <th width="1%" bgcolor="#f7fcff">Kwitansi</th>
											  
											  <th width="5%" bgcolor="#f7fcff">Nama Customer</th>
											  <th width="10%" bgcolor="#f7fcff">Alamat<br></th>
											  <th width="4%" bgcolor="#f7fcff">Tarif Pengelolaan<br>( / Bulan )</th>
											  <th width="4%" bgcolor="#f7fcff">Nilai Setoran</th>
											  <th width="4%" bgcolor="#f7fcff">Sisa Setoran</th>
											  <th width="5%" bgcolor="#f7fcff">Tipe Transaksi</th>
											  <th width="1%" bgcolor="#f7fcff">Metode</th>
											  <th width="1%" bgcolor="#f7fcff">Provider</th>
											  <th width="1%" bgcolor="#f7fcff">Dibuat Oleh</th>
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>
									      </tr>
										</thead>
										<tbody>
										  <tr>
												<td id="kt_table_1">1</td>
												<td style="text-align:center" nowrap>14722IN-PLB112024</td>
												<td style="text-align:center" nowrap>14966TKMPLB012025</td>
												<td style="text-align:left" nowrap>BPJS Kesehatan</td>
												<td style="text-align:left" nowrap>Jl. Urip Sumoharjo No 344</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>300.000,-</span> </div></td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>100.000,-</span> </div></td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>200.000,-</span> </div></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
												<td width="1%" style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Nama Penginput<hr>Jabatan Penginput" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap=""><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="print-tanda-terima-customer-plb.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-setoran-kolektor-plb-kasir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		
																	</ul>
																</div>
															</div></td>  
										  </tr>
										  <tr>
												<td id="kt_table_1">2</td>
												<td style="text-align:center" nowrap>14723IN-PLB112024</td>
												<td style="text-align:center" nowrap>14967TKMPLB012025</td>
												<td style="text-align:left" nowrap>BPJS Ketenagakerjaan</td>
												<td style="text-align:left" nowrap>Jl. Urip Sumoharjo No 345</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>14.000.000,-</span> </div></td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>14.000.000,-</span> </div></td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
												<td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="ID Reff : 01521531355135&lt;hr&gt;e-Wallet&lt;hr&gt;Gopay" data-html="true">Non Tunai</span></td>
												<td nowrap="nowrap" style="text-align:center">e-Wallet</td>
												<td nowrap="nowrap" style="text-align:center">GoPay</td>
												<td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Online</span></td>
												<td style="text-align:center" nowrap=""><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="print-tanda-terima-customer-plb.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-setoran-kolektor-plb-kasir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		
																	</ul>
																</div>
															</div></td>  
										  </tr>
									    </tbody>
									</table>
									<!-- begin:: pageline -->
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="kt-pagination  kt-pagination--danger">
						<select class="form-control kt-font-danger" style="width: 60px">
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="30">30</option>
								<option value="50">50</option>
								<option value="100">100</option>
							</select>
							<span class="pagination__desc">
								Menampilkan 10 dari 230 Data
							</span>
							<div class="kt-pagination__toolbar">
								<ul class="kt-pagination__links">
								<li class="kt-pagination__link--first">
									<a href="#"><i class="fa fa-angle-double-left kt-font-danger"></i></a>
								</li>
								<li class="kt-pagination__link--next">
									<a href="#"><i class="fa fa-angle-left kt-font-danger"></i></a>
								</li>
								<li>
									<a href="#">...</a>
								</li>
								<li>
									<a href="#">29</a>
								</li>
								<li class="kt-pagination__link--active">
									<a href="#">30</a>
								</li>
								<li>
									<a href="#">31</a>
								</li>
								<li>
									<a href="#">32</a>
								</li>
								<li>
									<a href="#">33</a>
								</li>
								<li>
									<a href="#">34</a>
								</li>
								<li>
									<a href="#">...</a>
								</li>
								<li class="kt-pagination__link--prev">
									<a href="#"><i class="fa fa-angle-right kt-font-danger"></i></a>
								</li>
								<li class="kt-pagination__link--last">
									<a href="#"><i class="fa fa-angle-double-right kt-font-danger"></i></a>
								</li>
							</ul>
							</div>
						</div>
                    <!-- end:: pageline -->
						 
						  
						
						
						  




											</div>
											</div>


									</div>
									
									


										</div>
										</div>
										</div>
										
				
				
			<!--end:: Widgets/Stats-->
			

			
				
        </div>
        </div>
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
