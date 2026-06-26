<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                   Data Target Setoran Kolektor PLB
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
                                      <option value="1" selected="">2023</option>
                                      <option value="2">2022</option>
                                      <option value="3">2021</option>
                                      <option value="4">2020</option>
                                      <option value="5">2019</option>
                                      <option value="6">2018</option>
                                      <option value="7">2017</option>
                                      <option value="8">2016</option>
                                      <option value="9">2015</option>
                                      <option value="10">2014</option>
                                      <option value="11">2013</option>
                                      <option value="12">2012</option>
                                  </select>
    		                    </div>
							<div class="col-lg-2">
                                <label>Periode Bulan :</label>
								
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
						 
                            <div class="col-lg-2">
                                <label>Nama Kolektor PLB :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
                           
							<div class="col-lg-2">
                                <label>Zona Kerja :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Wilayah :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Bakung</option>
                                      <option value="2">Berua</option>
                                      <option value="3">Bulurokeng</option>
                                      <option value="4">Daya</option>
                                      <option value="5">Katimbang</option>
                                      <option value="6">Laikang</option>
                                      <option value="7">Paccerakkang</option>
                                      <option value="8">Pai</option>
                                      <option value="9">Sudiang</option>
                                      <option value="10">Sudiang Raya</option>
                                      <option value="11">Untia</option>
                                     
                                  </select>
                            </div>
							
								<div class="col-lg-2">
                                <label>Status Setoran :</label>
								
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Sesuai Target</option>
                                      <option value="2">Setoran Kurang</option>
                                      <option value="3">Belum Setor</option>
                                     
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
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">ID Kolektor</th>
											 
											  
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  
											  <th width="7%" rowspan="2" bgcolor="#f7fcff">Nama Kolektor</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">NIK</th>
											  <th colspan="2" bgcolor="#f7fcff">Area Bertugas</th>
											 <th colspan="3" bgcolor="#feffed">Target Setoran</th>
											  <th width="1%" colspan="2" bgcolor="#f7fcff">Status</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="2%" bgcolor="#f7fcff">Zona</th>
											  <th width="1%" bgcolor="#f7fcff">Wilayah</th>
											   <th width="1%" bgcolor="#feffed">Customer</th>
											   <th width="1%" bgcolor="#feffed">Bulan<br>Februari 2023</th>
										      <th width="1%" bgcolor="#feffed">Status</th>
											  
											  <th width="1%" bgcolor="#f7fcff">Pembayaran<br>Customer</th>
											  <th width="1%" bgcolor="#f7fcff">Team Reaksi Cepat</th>
											  
						                  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1" style="text-align:right">1</td>
												<td style="text-align:center" nowrap>001KPPMR0223</td>
												
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_1.jpg" alt="image">
													</a></td>
													

												<td style="text-align:left" nowrap>UMAR MALIK, SE</td>
												<td style="text-align:left" nowrap>000 000 001</td>
												
												<td style="text-align:left" nowrap>Biringkanaya</td>
												<td style="text-align:left" nowrap>Baru, Bulogading, Maloku</td>
												
												<td nowrap="nowrap" style="text-align:right">57</td>
												
														<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>22.125.000,-</span> </div></td>
														<td nowrap style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Sesuai Target</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Semua Terbayar" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Aksi" data-html="true"><i class="fa fa-clock"></i></button></td>
												
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="rekap-customer-plb-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Rekap Customer</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">2</td>
												<td style="text-align:center" nowrap>002KPPMR0223</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_3.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>LEONY HESTI KILALA</td>
												<td style="text-align:left" nowrap>000 000 002</td>
												
												<td nowrap style="text-align:left">Wajo</td>
												<td nowrap style="text-align:left">I, II, III, IV, V, VI, VII</td>
												<td nowrap="nowrap" style="text-align:right">174</td>
                                                <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>44.105.000,-</span> </div></td>
													
												
												<td nowrap style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline">Setoran Kurang</span></td>
												
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Kurang" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Aksi" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="rekap-customer-plb-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Rekap Customer</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">3</td>
												<td style="text-align:center" nowrap>003KPPMR0223</td>
												
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_5.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>MUSLIMIN</td>
												<td style="text-align:left" nowrap>000 000 003</td>
												
												<td nowrap style="text-align:left">Bontoala, Manggala, Wajo, <br>Mamajang, Mariso</td>
												<td nowrap style="text-align:left">Bontoala Parang, Borong, <br>Melayu Baru, Pattunuang, Mampu, <br>Ende, Baji Mappakasunggu, Bonto Biraeng, <br>Butung, Malimongan, Mariso, <br>Mario, Kunjung Mae, Tamarunang, <br>Melayu, Mattoangin</td>
												<td nowrap="nowrap" style="text-align:right">95</td>
                                                <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>40.250.000,-</span> </div></td>
												<td nowrap style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline">Belum Ada</span></td>
												
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Belum Ada Setoran" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Aksi" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="rekap-customer-plb-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Rekap Customer</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">4</td>
												<td style="text-align:center" nowrap>004KPPMR0223</td>
											
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>HAERUL</td>
												<td style="text-align:left" nowrap>000 000 004</td>
												
												<td nowrap style="text-align:left">Mariso, Ujung Pandang</td>
												<td nowrap style="text-align:left">Kunjung Mae, Bulogading, Baru, <br>Losari, Pisang Utara, Pisang Selatan, <br>Sawerigading, Maloku, Mangkura</td>
												<td nowrap="nowrap" style="text-align:right">142</td>
                                                 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>25.450.000,-</span> </div></td>
												<td nowrap style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline">Belum Ada</span></td>
												
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Belum Ada Setoran" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Sudah Ditindak Lanjut<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="rekap-customer-plb-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Rekap Customer</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">5</td>
												<td style="text-align:center" nowrap>005KPPMR0223</td>
											
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>WIRA YUDHA SAKTI. D</td>
												<td style="text-align:left" nowrap>000 000 005</td>
												
												<td nowrap style="text-align:left">Manggala, Panakkukang, <br>Rappocini</td>
												<td nowrap style="text-align:left">Antang, Bangkala, Batua, <br>Borong, Pandang, Paropo, <br>Manggala, Tamangapa, Kassi-kassi, <br>Masale, Biring Romang, <br>Bua Kana</td>
												<td nowrap="nowrap" style="text-align:right">29</td>
                                                <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>7.500.000,-</span> </div></td>
												<td nowrap style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline">Belum Ada</span></td>
												
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Belum Ada Setoran" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Sudah Ditindak Lanjut<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="rekap-customer-plb-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Rekap Customer</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">6</td>
												<td style="text-align:center" nowrap>006KPPMR0223</td>
											
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>RUDI RIVAI</td>
												<td style="text-align:left" nowrap>000 000 006</td>
												
												<td nowrap style="text-align:left">Bontoala, Mamajang, <br>Ujung Pandang, Makassar, <br>Tamalate</td>
												<td nowrap style="text-align:left">Gaddong, Bonto Lebang, Tamparang Keke, <br>Mangkura, Maricaya Selatan, Maricaya, <br>Bonto Biraeng, Mamajang Dalam, Bongaya, <br>Pa'baeng-baeng, Baji Mappakasunggu, Mamajang Luar, <br>Sambung Jawa, Parang, Labuang Baji</td>
												<td nowrap="nowrap" style="text-align:right">20</td>
                                                 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.750.000,-</span> </div></td>
												<td nowrap style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline">Belum Ada</span></td>
												
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Belum Ada Setoran" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Sudah Ditindak Lanjut<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="rekap-customer-plb-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Rekap Customer</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">7</td>
												<td style="text-align:center" nowrap>007KPPMR0223</td>
											
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>YUNUS TULAK, S.IP</td>
												<td style="text-align:left" nowrap>000 000 007</td>
												
												<td nowrap style="text-align:left">Manggala, Panakkukang, <br>Rappocini, Ujung Pandang</td>
												<td nowrap style="text-align:left">Batua, Masale, Karampuang, <br>Sinrijala, Pandang, Tamamaung, <br>Tello Baru, Tidung, Panaikang, <br>Pisang Utara, Paropo</td>
												<td nowrap="nowrap" style="text-align:right">126</td>
                                                 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>53.465.000,-</span> </div></td>
												<td nowrap style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline">Belum Ada</span></td>
												
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Belum Ada Setoran" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Sudah Ditindak Lanjut<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="rekap-customer-plb-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Rekap Customer</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">8</td>
												<td style="text-align:center" nowrap>008KPPMR0223</td>
											
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>ANUGRAH. WL</td>
												<td style="text-align:left" nowrap>000 000 008</td>
												
												<td nowrap style="text-align:left">Biringkanaya, Tamalanrea</td>
												<td nowrap style="text-align:left">Sudiang, Sudiang Raya, Tamalanrea, <br>Tamalanrea Jaya, Paccerakkang, Tamalanrea Indah</td>
												<td nowrap="nowrap" style="text-align:right">53</td>
                                                <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>16.700.000,-</span> </div></td>
												<td nowrap style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline">Belum Ada</span></td>
												
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Belum Ada Setoran" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Sudah Ditindak Lanjut<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="rekap-customer-plb-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Rekap Customer</span>
																			</a>
																		</li>
																		
																		
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
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
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
