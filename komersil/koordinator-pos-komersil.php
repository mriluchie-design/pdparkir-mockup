<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>



      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Data Koordinator Pos Komersial

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
															<i class="kt-nav__link-icon fa fa-file-pdf"></i>
															<span class="kt-nav__link-text">PDF</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-excel"></i>
															<span class="kt-nav__link-text">Excel</span>

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
<div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
														<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
														<div class="alert-text">A simple primary alert—check it out!</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
													</div>

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
                            <div class="col-lg-2">
                                <label>Nama Pegawai :</label>
    	                        <div class="form-group">

					                         <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
					                       </div>
                            </div>
                            <div class="col-lg-2">
                                <label>Departemen :</label>

                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Umum</option>
                                      <option value="4">Keuangan dan Asset</option>
                                      <option value="5">Operasional</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label class="">Divisi :</label>
								 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Direksi</option>
                                      <option value="4">Umum dan Kepegawaian</option>
                                      <option value="5" selected="">Hukum dan Humas</option>
                                      <option value="6">Keuangan</option>
                                      <option value="12">Asset</option>
                                      <option value="12" >Pengelolaan</option>
                                      <option value="12" >Produksi</option>
                                      <option value="12" >Pengembangan</option>
                                      <option value="12" >Kerjasama</option>
                                  </select>

                            </div>
                            <div class="col-lg-2">
                                <label class="">Jabatan :</label>
								 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
									  <optgroup label="Direksi">
                                      <option value="2" selected="">Direktur Utama</option>
                                      <option value="2">Direktur Umum</option>
                                      <option value="2">Direktur Keuangan dan Asset</option>
                                      <option value="2">Direktur Operasional</option>
                                      <option value="2">Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     
                                  </select>

                            </div>
							
							<div class="col-lg-2">
                                <label class="">Kantor :</label>
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
                            </div>
                            </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
							<div class="col-lg-2">
                                <label class="">Tanggal Kontrak :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-2">
                                <label class="">Berakhir Kontrak :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-2">
                                <label>Zona :</label>
								
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
                                <label>POS :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">MANDAI SIANG</option>
                                      <option value="2">MANDAI MALAM</option>
                                      <option value="3">KAPASA</option>
                                      <option value="4">NIPA-NIPA</option>
                                      <option value="5">YOS SUDARSO</option>
                                      <option value="6">BTP</option>
                                      <option value="7">CHECK POINT</option>
                                      <option value="8">TEUKU UMAR</option>
                                      <option value="9">ALAUDDIN SIANG</option>
                                      <option value="10">ALAUDDIN MALAM</option>
                                      <option value="11">MALLENGKERI</option>
                                      <option value="12">HERTASNING</option>
                                      <option value="13">KASSI</option>
                                      <option value="14">BAROMBONG</option>
                                      <option value="15">WADUK</option>
                                  </select>
                            </div>

							
                        </div>
                    </div>
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
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
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="4%" rowspan="2" bgcolor="#f7fcff">Nama Lengkap</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">NIK</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Department</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Divisi</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Jabatan</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Kantor</th>
											  <th colspan="2" bgcolor="#f7fcff">Kontrak</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">WA</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Area Bertugas</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="5%" bgcolor="#f7fcff">Awal</th>
											  <th width="5%" bgcolor="#f7fcff">Berakhir</th>
											  <th width="3%" bgcolor="#feffed">Zona</th>
											  <th width="1%" bgcolor="#feffed">POS</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_1.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>UMAR MALIK, SE</td>
												<td style="text-align:left" nowrap>000 000 001</td>
												<td style="text-align:left" nowrap>Umum</td>
												<td style="text-align:left" nowrap>Umum dan Kepegawaian</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Kepegawaian</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td nowrap style="text-align:left">Biringkanaya</td>
												<td nowrap style="text-align:left">Mandai Malam</td>
<td style="text-align:center" nowrap><div class="kt-widget2__actions">
						<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
							<i class="flaticon-more-1"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
							<ul class="kt-nav">
							  <li class="kt-nav__item">
									  <div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-koordinator">
										  <i class="kt-nav__link-icon fa fa-archway"></"></i>
										  <span class="kt-nav__link-text">Tentukan Area Koordinator</span>
									  </div>
							    </li>

																		
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon fa fa-trash-alt"></i>
										<span class="kt-nav__link-text">Hapus</span>
									</a>
							    </li>
																		
						    </ul>
					    </div>
					</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">2</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>LEONY HESTI KILALA</td>
												<td style="text-align:left" nowrap>000 000 002</td>
												<td style="text-align:left" nowrap>Umum</td>
												<td style="text-align:left" nowrap>Hukum dan Humas</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Hukum</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td nowrap style="text-align:left">Biringkanaya</td>
												<td nowrap style="text-align:left">Mandai Malam</td>
<td style="text-align:center" nowrap><div class="kt-widget2__actions">
						<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
							<i class="flaticon-more-1"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
							<ul class="kt-nav">
							  <li class="kt-nav__item">
									  <div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-koordinator">
										  <i class="kt-nav__link-icon fa fa-archway"></"></i>
										  <span class="kt-nav__link-text">Tentukan Area Koordinator</span>
									  </div>
							    </li>

																		
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon fa fa-trash-alt"></i>
										<span class="kt-nav__link-text">Hapus</span>
									</a>
							    </li>
																		
						    </ul>
					    </div>
					</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">3</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_5.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>MUSLIMIN</td>
												<td style="text-align:left" nowrap>000 000 003</td>
												<td style="text-align:left" nowrap>Keuangan dan Asset</td>
												<td style="text-align:left" nowrap>Keuangan</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Keuangan</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td nowrap style="text-align:left">Biringkanaya</td>
												<td nowrap style="text-align:left">Kapasa</td>
<td style="text-align:center" nowrap><div class="kt-widget2__actions">
						<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
							<i class="flaticon-more-1"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
							<ul class="kt-nav">
							  <li class="kt-nav__item">
									  <div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-koordinator">
										  <i class="kt-nav__link-icon fa fa-archway"></"></i>
										  <span class="kt-nav__link-text">Tentukan Area Koordinator</span>
									  </div>
							    </li>

																		
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon fa fa-trash-alt"></i>
										<span class="kt-nav__link-text">Hapus</span>
									</a>
							    </li>
																		
						    </ul>
					    </div>
					</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">4</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_3.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>HAERUL</td>
												<td style="text-align:left" nowrap>000 000 004</td>
												<td style="text-align:left" nowrap>Keuangan dan Asset</td>
												<td style="text-align:left" nowrap>Asset</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Asset</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td nowrap style="text-align:left">Biringkanaya</td>
												<td nowrap style="text-align:left">Nipa-Nipa</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-koordinator">
																				<i class="kt-nav__link-icon fa fa-archway"></"></i>
																				<span class="kt-nav__link-text">Tentukan Area Koordinator</span>
																			</div>
																		</li>

																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">5</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_8.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>WIRA YUDHA SAKTI. D</td>
												<td style="text-align:left" nowrap>000 000 005</td>
												<td style="text-align:left" nowrap>Operasional</td>
												<td style="text-align:left" nowrap>Pengelolaan</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Pengelolaan</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td nowrap style="text-align:left">Biringkanaya</td>
												<td nowrap style="text-align:left">Yos Sudarso</td>   
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-koordinator">
																				<i class="kt-nav__link-icon fa fa-archway"></"></i>
																				<span class="kt-nav__link-text">Tentukan Area Koordinator</span>
																			</div>
																		</li>

																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">6</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>RUDI RIVAI</td>
												<td style="text-align:left" nowrap>000 000 006</td>
												<td style="text-align:left" nowrap>Operasional</td>
												<td style="text-align:left" nowrap>Produksi</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Produksi</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td nowrap style="text-align:left">Wajo</td>
												<td nowrap style="text-align:left">BTP</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-koordinator">
																				<i class="kt-nav__link-icon fa fa-archway"></"></i>
																				<span class="kt-nav__link-text">Tentukan Area Koordinator</span>
																			</div>
																		</li>

																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">7</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_13.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>YUNUS TULAK, S.IP</td>
												<td style="text-align:left" nowrap>000 000 007</td>
												<td style="text-align:left" nowrap>Pengembangan Usaha dan Kerjasama</td>
												<td style="text-align:left" nowrap>Pengembangan</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Pengembangan</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</span></td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td nowrap style="text-align:left">Biringkanaya</td>
												<td nowrap style="text-align:left">Check Point</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-koordinator">
																				<i class="kt-nav__link-icon fa fa-archway"></"></i>
																				<span class="kt-nav__link-text">Tentukan Area Koordinator</span>
																			</div>
																		</li>

																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
<tr>
												<td id="kt_table_1">8</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>ANUGRAH. WL</td>
												<td style="text-align:left" nowrap>000 000 008</td>
												<td style="text-align:left" nowrap>Pengembangan Usaha dan Kerjasama</td>
												<td style="text-align:left" nowrap>Kerjasama</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Kerjasama</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</span></td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td nowrap style="text-align:left">Wajo</td>
												<td nowrap style="text-align:left">Teuku Umar</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-koordinator">
																				<i class="kt-nav__link-icon fa fa-archway"></"></i>
																				<span class="kt-nav__link-text">Tentukan Area Koordinator</span>
																			</div>
																		</li>

																		
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-hapus.php" class="kt-nav__link">
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
<!--begin::Modal 1-->
									<div class="modal fade" id="modal-zona-koordinator" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">FORM ZONA TUGAS</h3>
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
														<label>Zona :</label>
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

												<div class="col-lg-6">
														<label>Pos :</label>
									<select class="form-control kt-selectpicker" data-live-search="true" multiple="multiple">
                                      <option value="1" selected="">MANDAI SIANG</option>
                                      <option value="2">MANDAI MALAM</option>
                                      <option value="3">KAPASA</option>
                                      <option value="4">NIPA-NIPA</option>
                                      <option value="5">YOS SUDARSO</option>
                                      <option value="6">BTP</option>
                                      <option value="7">CHECK POINT</option>
                                      <option value="8">TEUKU UMAR</option>
                                      <option value="9">ALAUDDIN SIANG</option>
                                      <option value="10">ALAUDDIN MALAM</option>
                                      <option value="11">MALLENGKERI</option>
                                      <option value="12">HERTASNING</option>
                                      <option value="13">KASSI</option>
                                      <option value="14">BAROMBONG</option>
                                      <option value="15">WADUK</option>
                                  </select>
														
													</div>


												</div>
												<br>
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
			

									</div>

									</div>
								</div>
								</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Assign Project Director</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pegawai :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >

												</div>


												</div>
												</div>

											</div>

									</div>
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 2-->
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
