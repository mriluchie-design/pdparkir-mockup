<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                   Form Setoran Customer PLB
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
				&nbsp;
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pencarian</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-6">
                                <label>Nama Kolektor :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">HARIS DAENG PAWA</option>
                                     
                                  </select>
                            </div>
						<div class="col-lg-3">
                          <label>Bulan :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Januari</option>
                                      <option value="2">Februari</option>
                                      <option value="3">Maret</option>
                                      <option value="4">April</option>
                                      <option value="5">Mei</option>
                                      <option value="6">Juni</option>
                                      <option value="7">Juli</option>
                                      <option value="8">Agustus</option>
                                      <option value="9">September</option>
                                      <option value="10">Oktober</option>
                                      <option value="11">November</option>
                                      <option value="12">Desember</option>
                                      
                                  </select>
                        </div>
						<div class="col-lg-3">
                          <label>Tahun :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">2024</option>
                                      <option value="2">2023</option>
                                      <option value="3">2022</option>
                                     
                                      
                                  </select>
                        </div>
                        </div>
						
						<br>
						<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
						  




											</div>
											</div>


									</div>
									</div>
									
									
									




     <div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Transaksi</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
					  
						
					  <div class="col-lg-4">
                          <label class="">ID Transaksi :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="001/TRANS/PLB/1/2025">
                        </div>
						
						 
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
					  
						
					  <div class="col-lg-4">
                          <label class="">Total Data :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="tercentang 49 dari total 49">
                        </div>
						 <div class="col-lg-4">
                          <label class="">Tanggal Setoran :</label>
                          <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                        </div>
						 <div class="col-lg-4">
                          <label class="">Total Target :</label>
                          <div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
						  <div class="col-lg-4" >
                          <label>Total Setoran Sebelumnya :</label>
                          <div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div>
                        </div>
						<div class="col-lg-4" >
                          <label style="color:#a2050c">Jumlah Yang Harus Dibayar :</label>
                          <div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div>
                        </div>
						<div class="col-lg-4">
                          <label style="color:#a2050c">Total Sisa Setoran :</label>
                          <div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000" aria-describedby="basic-addon1">
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Customer PLB</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
											<div class="col-lg-4">
                                <label>Cari Customer :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">BPJS Kesehatan</option>
                                      <option value="1" selected="">BPJS Ketenagakerjaan</option>
                                     
                                  </select>
                            </div>
                            </div>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" bgcolor="#f7fcff">ID<br>Invoice PLB</th>
											  
											  <th width="8%" bgcolor="#f7fcff">Nama Customer</th>
											  <th width="13%" bgcolor="#f7fcff">Alamat<br></th>
											  <th width="12%" bgcolor="#f7fcff">Tarif Pengelolaan<br>( / Bulan )</th>
											  <th width="12%" bgcolor="#f7fcff">Nilai Setoran</th>
											  <th width="12%" bgcolor="#f7fcff">Sisa Setoran</th>
											  <th width="7%" bgcolor="#f7fcff">Pembayaran</th>
											  <th width="1%" bgcolor="#f7fcff">Waktu Setoran</th>
											  <th width="1%" bgcolor="#f7fcff">Kasir</th>
											    <th width="1%" bgcolor="#f7fcff">#</th>
											    <th width="1%" bgcolor="#f7fcff">Aksi</th>
									      </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td nowrap="nowrap" style="text-align:center">1837INVPLBIX25</td>
												<td style="text-align:left" nowrap>BPJS Ketenagakerjaan</td>
												<td style="text-align:left" nowrap>Jl. Urip Sumoharjo No 344</td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div width="1%" class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm"  disabled="disabled" placeholder="350.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div width="1%" class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm"  disabled="disabled" placeholder="350.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div width="1%" class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div></td>
												<td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
												<td style="text-align:center" nowrap>7 Oktober 2024<br />22:12:00 WITA</td>
												<td style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Nama Kasir<hr>Jabatan Kasir" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-setoran-customer.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
									      </tr>
										  <tr>
												<td id="kt_table_1">2</td>
												<td nowrap="nowrap" style="text-align:center">1838INVPLBIX25</td>
												<td style="text-align:left" nowrap>BPJS Kesehatan</td>
												<td style="text-align:left" nowrap>Jl. Urip Sumoharjo No 344</td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div width="1%" class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm"  disabled="disabled" placeholder="350.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div width="1%" class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm"  disabled="disabled" placeholder="350.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div width="1%" class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div></td>
												<td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="ID Reff : 01521531355135&lt;hr&gt;e-Wallet&lt;hr&gt;Gopay" data-html="true">Non Tunai</span></td>
												<td style="text-align:center" nowrap>7 Oktober 2024<br />22:12:00 WITA</td>
												<td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Online</span></td>
												<td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-setoran-customer.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
									      </tr>
										  <tr>
												<td id="kt_table_1">3</td>
												<td nowrap="nowrap" style="text-align:center">1839INVPLBIX25</td>
												<td style="text-align:left" nowrap>BPJS Hari Tua</td>
												<td style="text-align:left" nowrap>Jl. Urip Sumoharjo No 344</td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div width="1%" class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="11.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
												  </div></td>
												<td class="nilai"><div class="input-group input-group-sm">
															    <div class="input-group-prepend" ><span class="input-group-text input-group-sm" style="border-color:#ff0000" id="basic-addon2">Rp.</span></div>
															    <input style="text-align:right; border-color:#ff0000;" type="text" class="form-control form-control-sm" placeholder="11.000.000" aria-describedby="basic-addon1" />
															    <div class="input-group-append"><span class="input-group-text input-group-sm" style="border-color:#ff0000" id="basic-addon2">,-</span></div>
															    </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div width="1%" class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
												  </div></td>
												<td style="text-align:center" nowrap><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
												  <option value="1" selected="selected">Tunai</option>
												  <option value="2" data-toggle="modal" data-target="#modal_kantor">Non Tunai</option>
												  
											    </select></td>
												<td style="text-align:center" nowrap>-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-setoran-customer.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">4</td>
												<td nowrap="nowrap" style="text-align:center">1840INVPLBIX25</td>
												<td style="text-align:left" nowrap>BPJS Pensiunan</td>
												<td style="text-align:left" nowrap>Jl. Urip Sumoharjo No 344</td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div width="1%" class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon3">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon3">,-</span></div>
												  </div></td>
												<td class="nilai"><div class="input-group input-group-sm">
															    <div class="input-group-prepend" ><span class="input-group-text input-group-sm" style="border-color:#ff0000" id="basic-addon2">Rp.</span></div>
															    <input style="text-align:right; border-color:#ff0000;" type="text" class="form-control form-control-sm" placeholder="500.000" aria-describedby="basic-addon1" />
															    <div class="input-group-append"><span class="input-group-text input-group-sm" style="border-color:#ff0000" id="basic-addon2">,-</span></div>
															    </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div width="1%" class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon3">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon3">,-</span></div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><select name="select3" class="form-control kt-selectpicker" data-live-search="true">
												  <option value="1" selected="selected">Tunai</option>
												  <option value="2">Non Tunai</option>
											    </select></td>
												<td style="text-align:center" nowrap>-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-setoran-customer.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
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
					<!--begin::Modal 2-->
									<div class="modal fade" id="modal_kantor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list-1"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">FORM TAMBAH TARIF PLB</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
												<div class="col-lg-6">
                                <label>Jenis Kendaraan :</label>
    	                       
        							<select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Mobil</option>
														<option>Motor</option>
														
														</select>
        					
                            </div>
												<div class="col-lg-6">
														<label>Satuan Tarif :</label>
														<div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="100.000" aria-describedby="basic-addon1">
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>

												</div>

												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
												
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<button type="reset" class="btn btn-brand btn-sm">Simpan</button>
												</div>
											</div>




									</div>

									</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
							<!--End::Modal 2-->	 
						  
						
						
						  




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
