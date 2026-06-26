<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>
<!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-5.16081,119.395713),
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Rekap Setoran Kolektor PLB
                </h3>
            </div>
            <div class="kt-subheader__toolbar">
                <button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
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
                                <i class="kt-nav__link-icon fa fa-file-excel"></i><span class="kt-nav__link-text">Excel</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Nav-->
                </div>
               
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
	<div class="row">
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
            <div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
                <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                <div class="alert-text">A simple primary alert—check it out!</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <!-- end:: Alert -->

            <!--begin::Filter-->
			<div class="kt-portlet" id = "login_Box_Div" >
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Filter Data
						</h3>
					</div>
				</div>

				<!--begin::Form-->
				<form class="kt-form">
					<div class="kt-portlet__body">
                        <div class="form-group row">
						<div class="col-lg-1">
                                <label>Tahun :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">2025</option>
                                      <option value="2">2024</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Bulan :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Januari</option>
                                      <option value="2">Februari</option>
                                                                           
                                  </select>
                            </div>
						
							
                            
								
								<div class="col-lg-2">
                                <label class="">Tanggal Terima Setoran :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-2">
                                <label>Nama Kolektor :</label>
								
                                <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000000001 - Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">000000003 - Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000000002 - Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000000004 - Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000000005 - Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
    		                    </div>
								<div class="col-lg-2">
                                <label>Nama Customer :</label>
								
                                <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000000001 - Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">000000003 - Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000000002 - Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000000004 - Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000000005 - Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
    		                    </div>
							
							
							
							
							
							
							<div class="col-lg-1">
                                <label>Tipe Transaksi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Tunai</option>
                                      <option value="2">Non Tunai</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Pembayaran :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Tunai</option>
                                      <option value="2">Transfer Bank</option>
                                      <option value="2">Gopay</option>
                                      <option value="2">Ovo</option>
                                      <option value="2">Dana</option>
                                                                           
                                  </select>
                            </div>
							
							<div class="col-lg-2">
                                <label>Persetujuan Bendahara :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Sudah Disetujui</option>
                                      <option value="2">Belum Disetujui</option>
                                      
                                                                           
                                  </select>
                            </div>
							
    		                    </div>
								
								
                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							<div class="form-group row">
							<div class="col-lg-2">
                                <label>ID Transaksi :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
							<div class="col-lg-2">
                                <label>Invoice :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
							<div class="col-lg-2">
                                <label>Kwitansi :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
								
							
							<div class="col-lg-2">
                                <label>Nama Kasir :</label>
								
                                <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000000001 - Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">000000003 - Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000000002 - Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000000004 - Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000000005 - Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
    		                    </div>
								<div class="col-lg-2">
                                <label>Status Kasir :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Sudah Diterima</option>
                                      <option value="2">Belum Diterima</option>
                                      
                                                                           
                                  </select>
                            </div>
								
								
                            
							
							
							
                            </div>
							
							<br>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-brand btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->

			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">Tahun</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">Periode</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">Tanggal Terima Setoran<br /></th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">Kolektor</th>
											  <th colspan="3" bgcolor="#f7fcff">Customer</th>
											  <th colspan="7" bgcolor="#feffed">Transaksi</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Kasir</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">ID</th>
											  <th width="1%" bgcolor="#f7fcff">Nama</th>
											  <th width="15%" bgcolor="#f7fcff">Alamat</th>
											  <th width="1%" bgcolor="#feffed">Invoice</th>
											  <th width="1%" bgcolor="#feffed">Kwitansi</th>
											  <th width="1%" bgcolor="#feffed">ID</th>
											  <th width="1%" bgcolor="#feffed">Metode</th>
											  <th width="1%" bgcolor="#feffed">Provider</th>
											  <th width="20%" bgcolor="#feffed">Nominal Setoran</th>
											  <th width="1%" bgcolor="#feffed">Tipe</th>
									      </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td nowrap="nowrap" style="text-align:center">2025</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
												<td nowrap="nowrap" style="text-align:center">23 Januari 2025<br />23:27:00 WITA</td>
												<td nowrap="nowrap" style="text-align:left">Umar Malik, SE</td>
												<td nowrap="nowrap" style="text-align:center">000000001</td>
												<td nowrap="nowrap" style="text-align:left">BPJS Ketenagakerjaan</td>
												<td nowrap="nowrap" style="text-align:left">Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas J/9</td>
												<td nowrap="nowrap" style="text-align:center">14720IN-PLB112025</td>
												<td nowrap="nowrap" style="text-align:center">14966TKMPLB012025</td>
												<td nowrap="nowrap" style="text-align:center">0014966SKPLB012025</td>
												<td nowrap="nowrap" style="text-align:center">Cash</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>14.000.000,-</span> </div></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tunai</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Nama Penginput<hr>Jabatan Penginput" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
													<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		
																		
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">2</td>
												<td nowrap="nowrap" style="text-align:center">2024</td>
												<td nowrap="nowrap" style="text-align:center">Desember</td>
												<td nowrap="nowrap" style="text-align:center">23 Desember 2024<br />23:27:00 WITA</td>
												<td nowrap="nowrap" style="text-align:left">Leony Hesti Kilala</td>
												<td nowrap="nowrap" style="text-align:center">000000002</td>
												<td nowrap="nowrap" style="text-align:left">CV. AMANDA BROWNIES</td>
												<td nowrap="nowrap" style="text-align:left">Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas J/8</td>
												<td nowrap="nowrap" style="text-align:center">14721IN-PLB112024</td>
												<td nowrap="nowrap" style="text-align:center">14966TKMPLB012025</td>
												<td nowrap="nowrap" style="text-align:center">0014966SKPLB012025</td>
												<td nowrap="nowrap" style="text-align:center">Bank Transfer</td>
												<td nowrap="nowrap" style="text-align:center">Bank Central Asia</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>14.000.000,-</span> </div></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Non Tunai</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Nama Penginput<hr>Jabatan Penginput" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
													<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		
																		
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>

<tr>

												<td id="kt_table_1">3</td>
												<td nowrap="nowrap" style="text-align:center">2024</td>
												<td nowrap="nowrap" style="text-align:center">November</td>
												<td nowrap="nowrap" style="text-align:center">23 November 2024<br />23:27:00 WITA</td>
												<td nowrap="nowrap" style="text-align:left">Muslimin</td>
												<td nowrap="nowrap" style="text-align:center">000000003</td>
												<td nowrap="nowrap" style="text-align:left">CV. BROWCIL MAKASSAR</td>
												<td nowrap="nowrap" style="text-align:left">Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas J/7</td>
												<td nowrap="nowrap" style="text-align:center">14722IN-PLB112024</td>
												<td nowrap="nowrap" style="text-align:center">14966TKMPLB012025</td>
												<td nowrap="nowrap" style="text-align:center">0014966SKPLB012025</td>
												<td nowrap="nowrap" style="text-align:center">GoPay</td>
												<td nowrap="nowrap" style="text-align:center">GoPay</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>14.000.000,-</span> </div></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Non Tunai</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Online</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		
																		
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
									    </tbody>
									</table>
                    <!--end: Datatable -->

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
			<!--begin::Modal 1-->
									<div class="modal fade" id="serah-terima-atribut" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ID CARD</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											
											
											
											
											
											
										</div>
									</div>
								</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									<a href="#" class="btn btn-label-primary btn-sm">
															<span>
																<i class="fa fa-print"></i>
																<span>Print ID Card</span>
															</span>
														</a>
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
			
												</div>
											</div>
												
												

									<!--end::Portlet-->
												</div>
											</div>
											</div>

									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="serah-terima-rompi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ROMPI</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											
											
											
											
											
											
										</div>
									</div>
								</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									<a href="#" class="btn btn-label-primary btn-sm">
															<span>
																<i class="fa fa-print"></i>
																<span>Print ID Card</span>
															</span>
														</a>
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
			
												</div>
											</div>
												
												

									<!--end::Portlet-->
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

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
