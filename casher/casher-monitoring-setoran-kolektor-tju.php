<?php require '../layouts/head.php' ?>
<?php require './layouts/header.php' ?>

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
											Data Rekap Target Kolektor
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
						                        <div class="col-lg-3">
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
												
												
												<div class="col-lg-1">
						                          <label>Bulan :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Januari</option>
						                              <option value="3">Februari</option>
						                              <option value="3">Maret</option>
						                              <option value="3">April</option>
						                              <option value="3">Mei</option>
						                              <option value="3">Juni</option>
						                              <option value="3">Juli</option>
						                              <option value="3">Agustus</option>
						                              <option value="3">September</option>
						                              <option value="3">Oktober</option>
						                              <option value="3">November</option>
						                              <option value="3">Desember</option>

						                          </select>
						                        </div>
												<div class="col-lg-1">
						                          <label>Status :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Sudah Diterima</option>
						                              <option value="2">Belum Ada Setoran</option>
						                              <option value="3">Setoran Lebih</option>
						                              <option value="3">Setoran Kurang</option>
						                              <option value="3">Titik Parkir Tutup</option>

						                          </select>
						                        </div>

						                      </div>


						                      </div>
																	<div class="kt-portlet__foot text-center">
																		<div class="kt-form__actions">
																			<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
																			<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
																		</div>
																	</div>
																</form>
															</div>

																<!--end::Form-->

							<div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">

                  <form class="kt-form" id="kt_form">
                  <div class="kt-portlet__body">
										<ul class="nav nav-pills nav-fill" role="tablist">
											<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="background:rgba(9, 97, 174, 0.1) !important; color:#0961ae !important">2025</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#">2022</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2021</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2020</a>
													</div>
												</li>
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#kt_tabs_3_1" >Januari</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Februari</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Maret</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">April</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Mei</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Juni</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Juli</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Agustus</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">September</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Oktober</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">November</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Desember</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_3_1" role="tabpanel">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
																<th width="2%" bgcolor="#f7fcff" rowspan="2">Foto</th>
																<th width="30%" bgcolor="#f7fcff" rowspan="2">Nama Kolektor</th>
																<th width="1%" bgcolor="#f7fcff">1</th>
																<th width="1%" bgcolor="#f7fcff">2</th>
																<th width="1%" bgcolor="#f7fcff">3</th>
																<th width="1%" bgcolor="#f7fcff">4</th>
																<th width="1%" bgcolor="#f7fcff">5</th>
																<th width="1%" bgcolor="#f7fcff">6</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">7</th>
																<th width="1%" bgcolor="#f7fcff">8</th>
																<th width="1%" bgcolor="#f7fcff">9</th>
																<th width="1%" bgcolor="#f7fcff">10</th>
																<th width="1%" bgcolor="#f7fcff">11</th>
																<th width="1%" bgcolor="#f7fcff">12</th>
																<th width="1%" bgcolor="#f7fcff">13</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">14</th>
																<th width="1%" bgcolor="#f7fcff">15</th>
																<th width="1%" bgcolor="#f7fcff">16</th>
																<th width="1%" bgcolor="#f7fcff">17</th>
																<th width="1%" bgcolor="#f7fcff">18</th>
																<th width="1%" bgcolor="#f7fcff">19</th>
																<th width="1%" bgcolor="#f7fcff">20</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">21</th>
																<th width="1%" bgcolor="#f7fcff">22</th>
																<th width="1%" bgcolor="#f7fcff">23</th>
																<th width="1%" bgcolor="#f7fcff">24</th>
																<th width="1%" bgcolor="#f7fcff">25</th>
																<th width="1%" bgcolor="#f7fcff">26</th>
																<th width="1%" bgcolor="#f7fcff">27</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">28</th>
																<th width="1%" bgcolor="#f7fcff">29</th>
																<th width="1%" bgcolor="#f7fcff">30</th>
																<th width="1%" bgcolor="#f7fcff">31</th>
															</tr>
															<tr>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td width="10%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true">
																		<img src="../assets/media/users/100_1.jpg" alt="image">
																	</a></td>
																<td align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td width="10%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 002" data-html="true">
																		<img src="../assets/media/users/100_7.jpg" alt="image">
																	</a></td>
																<td align="center" valign="middle" style="text-align:left">LEONY HESTI KILALA</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_add_setoran" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Kolektor"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td width="10%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 003" data-html="true">
																		<img src="../assets/media/users/100_5.jpg" alt="image">
																	</a></td>
																<td align="center" valign="middle" style="text-align:left">MUSLIMIN</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_add_setoran" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Kolektor"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td width="10%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_3.jpg" alt="image">
																	</a></td>
																<td align="center" valign="middle" style="text-align:left">HAERUL</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-warning btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran_kurang" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Kolektor"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td width="10%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_8.jpg" alt="image">
																	</a></td>
																<td align="center" valign="middle" style="text-align:left">WIRA YUDHA SAKTI. D</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td width="10%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_9.jpg" alt="image">
																	</a></td>
																<td align="center" valign="middle" style="text-align:left">RUDI RIVAI</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td width="10%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_13.jpg" alt="image">
																	</a></td>
																<td align="center" valign="middle" style="text-align:left">YUNUS TULAK, S.IP	</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															
															
															
														</tbody>
													</table>
<br>
					<label> Keterangan : </label>
					
					<button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Setoran Lunas" data-original-title="" title=""><i class="fa fa-hand-holding-usd"></i></button>
					<button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Belum Ada Setoran" data-original-title="" title=""><i class="fa fa-hand-holding-usd"></i></button>
					<button type="button" class="btn btn-outline-warning btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Setoran Kurang" data-original-title="" title=""><i class="fa fa-hand-holding-usd"></i></button>
					<button type="button" class="btn kt-badge--unified-brand btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"><i class="fa fa-hand-holding-usd"></i></button>
            
			

												</div>
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

                  </form>
                  </div>
						</div>

									<!--end: Datatable -->
<!--begin::Modal 1-->
									<div class="modal fade" id="modal_view_setoran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-danger flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-bold">DATA SETORAN KOLEKTOR TEPI JALAN UMUM KE KASIR</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">LUNAS</span>&nbsp;&nbsp;
											<a href="#" class="btn btn-outline-brand btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Print

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
												
									<div class="row">
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kasir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Nama Kasir</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-6">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
                        </div>
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Nama Kolektor</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-6">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
                        </div>
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									</div>
									<div class="row">
												
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Setoran</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												

						<div class="col-lg-6">
                          <label>Tanggal Target :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023">

                        </div>
						<div class="col-lg-6">
                          <label>ID Tagihan :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="00001BKTJU102025">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						

						<div class="col-lg-6">
                          <label>Target Setoran :</label>
                         <div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="25.000.000" aria-describedby="basic-addon1">
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>

                        </div>
                        
						<div class="col-lg-6">
                          <label><span style="color:#ff0000"> Sisa Setoran :</span></label>
                         <div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1">
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>

                        </div>
						
						
						
						
						
						
                        
						
						
						
						
						
						
						
						
						
                        </div>
													
												
											</div>

										</div>

									</div>
									

									
									</div>
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kas Masuk</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												

						
						

						
						
						
						
						
						
						
                        
						
						
						<div class="col-lg-12">
                          <label>Akun Kas Masuk :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="41.01.01 - Pendapatan Parkir Tepi Jalan Umum (TJU)">

                        </div>
						
						
						
						
						
						
                        </div>
													
												
											</div>

										</div>

									</div>
									

									
									</div>
									
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Kolektor Ke Kasir</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff">No</th>
																<th width="4%" bgcolor="#f7fcff">ID Pembayaran</th>
																<th width="10%" bgcolor="#f7fcff">Waktu Setoran<br>
																  Ke Kasir</th>
																<th width="5%" bgcolor="#f7fcff">Tipe Transaksi</th>
																<th width="8%" bgcolor="#f7fcff">Metode<br>Pembayaran</th>
																<th width="1%" bgcolor="#f7fcff">Provider</th>
																<th width="5%" bgcolor="#feffed">Nilai Setoran</th>
																<th width="1%" bgcolor="#f7fcff">Kasir Penerima</th>
																<th width="1%" bgcolor="#f7fcff">Bendahara</th>
																<th width="1%" bgcolor="#f7fcff">Aksi</th>
															</tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">1</td>
															  <td align="center" valign="middle" style="text-align:left">00001PKTTJU102025</td>
															  <td class="  text-center">25 Oktober 2025<hr>14:04:50 WITA
</td>
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="ID Reff : 01521531355135" data-html="true">Non Tunai</span></td>
															 <td style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">e-Wallet</button></td>
															 <td nowrap="" style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">Gopay</button></td>
															 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000.000,-</span> </div></td>
															  <td style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">Online</button></td>                                                          
															  <td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-placement="left" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;Yuni Saslia, SE&lt;br&gt;31 Desember 2018 - 14:30 WITA">
													<i class="fa flaticon2-check-mark"></i>
												</span></td>
															  
															  <td style="text-align:center" nowrap=""><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="print-tanda-terima-kolektor-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>                                                              
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">2</td>
															  <td align="center" valign="middle" style="text-align:left">00002PKNTJU102025</td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
</td>
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															 <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															 <td nowrap="" style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000.000,-</span> </div></td>
															  <td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="left" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Yuni Saslia, SE&lt;hr&gt;Kasir TJU" data-html="true">
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>                                                           
															  <td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-placement="left" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;Yuni Saslia, SE&lt;br&gt;31 Desember 2018 - 14:30 WITA">
													<i class="fa flaticon2-check-mark"></i>
												</span></td>
															  
															  <td style="text-align:center" nowrap=""><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="print-tanda-terima-kolektor-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>                                                              
															</tr>
														</tbody>
													</table>
						
						


											</div>

										</div>

									</div>
									

									
									</div>
									
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Jukir Ke Kolektor</div><br><br>
										<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff" rowspan="2">No</th>
																<th width="20%" bgcolor="#f7fcff" rowspan="2">Nama Jukir</th>
																<th width="16%" bgcolor="#f7fcff" rowspan="2">Titik Parkir</th>
																<th colspan="2" bgcolor="#feffed">Target</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Tagihan</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Nilai<br>Setoran</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Sisa<br>Setoran</th>
																<th width="12%" rowspan="2" bgcolor="#f7fcff">Waktu Setoran<br>Ke Kolektor</th>
																<th width="10%" rowspan="2" bgcolor="#f7fcff">Metode<br>Pembayaran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Status</th>
															</tr>
															<tr>
															  <th width="8%" bgcolor="#feffed">24 Oktober 2025</th>
															  <th width="8%" bgcolor="#feffed">Setoran Sebelumnya</th>
															</tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">1</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;">
																  <span>Rp.</span>
																  <span>10.000,-</span>
  </div>
</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span> </div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
</td>
															 <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
														    </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">2</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:05:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">3</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">4</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:06:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">5</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:07:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">6</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:08:50 WITA
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="ID Reff : 01521531355135<hr>e-Wallet<hr>Gopay" data-html="true">Non Tunai</span></td>
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
</td>														      
														  </tr>
														</tbody>
													</table>

									</div>
									

									
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
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_view_setoran_lebih" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SETORAN KOLEKTOR KE KASIR - NON TUNAI - LUNAS</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Print

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
												
									<div class="row">
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kasir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Nama Kasir</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-6">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
                        </div>
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Nama Kolektor</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-6">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
                        </div>
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									</div>
									<div class="row">
												<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Setoran</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												
						
						
						
						
						
                       
						
						
						
						
						<div class="form-group row">
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Tanggal Target :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23/10/2025">

                        </div>
												

												<div class="col-lg-6">
														<label>Target Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
													<div class="col-lg-6">
														<label>Setoran Sebelumnya :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-6">
														<label>Selisih Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
													<div class="col-lg-6">
														<label class="kt-font-danger">Jumlah Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="500.000" aria-describedby="basic-addon1" disabled>
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
												
											</div>

										</div>

									</div>
									</div>
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kas Masuk</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Waktu Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-4">
                                <div class="form-group">
      													<label>Tipe Transaksi :</label>
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Non Tunai">
                              	</div>
      												</div>
													<div class="col-lg-8">
                                <div class="form-group">
      													<label>Akun Kas Masuk :</label>
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="41.01.01 - Pendapatan Parkir Tepi Jalan Umum (TJU)">
                              	</div>
      												</div>
      												</div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Pembayaran :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Metode Pembayaran :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="eWallet">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Provider :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Gopay">

                        </div>
						<div class="col-lg-8">
                                <div class="form-group">
      													<label>ID Reff :</label>
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0121515153481586">
                              	</div>
      												</div>
						
						
						
						
						
                        </div>
						
						
						
											
												
											</div>

										</div>

									</div>
									

									
									</div>
									<div class="row">
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Jukir Ke Kolektor</div><br><br>
										<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff" rowspan="2">No</th>
																<th width="15%" bgcolor="#f7fcff" rowspan="2">Nama Jukir</th>
																<th width="15%" bgcolor="#f7fcff" rowspan="2">Titik Parkir</th>
																<th colspan="2" bgcolor="#feffed">Target</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Tagihan</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Nilai<br>Setoran</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Sisa<br>Setoran</th>
																<th width="10%" rowspan="2" bgcolor="#f7fcff">Waktu Setoran<br>Ke Kolektor</th>
																<th width="9%" rowspan="2" bgcolor="#f7fcff">Metode<br>Pembayaran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Status</th>
															</tr>
															<tr>
															  <th width="8%" bgcolor="#feffed">24 Oktober 2025</th>
															  <th width="8%" bgcolor="#feffed">Setoran Sebelumnya</th>
															</tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">1</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;">
																  <span>Rp.</span>
																  <span>10.000,-</span>
  </div>
</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
</td>
															 <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
														    </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">2</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:05:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">3</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">4</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:06:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                             
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">5</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:07:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">6</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:08:50 WITA
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="ID Reff : 01521531355135" data-html="true">Non Tunai</span></td>
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
</td>														      
														  </tr>
														</tbody>
													</table>

									</div>
									</div>
									

									
									</div>
									<div class="row">
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Kolektor Ke Kasir</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff">No</th>
																<th width="10%" bgcolor="#f7fcff">ID Transaksi</th>
																<th width="9%" bgcolor="#f7fcff">Tanggal Target</th>
																<th width="8%" bgcolor="#feffed">Target<br>Setoran</th>
																<th width="8%" bgcolor="#feffed">Nilai<br>Setoran</th>
																<th width="8%" bgcolor="#feffed">Sisa<br>Setoran</th>
																<th width="10%" bgcolor="#f7fcff">Waktu Setoran<br>
																  Ke Kasir</th>
																<th width="8%" bgcolor="#f7fcff">Metode<br>Pembayaran</th>
																<th width="1%" bgcolor="#f7fcff">Kasir Penerima</th>
																<th width="1%" bgcolor="#f7fcff">Bendahara</th>
																<th width="1%" bgcolor="#f7fcff">Aksi</th>
															</tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">1</td>
															  <td align="center" valign="middle" style="text-align:left">0034530SKTJU102025</td>
															  <td align="center" valign="middle" style="text-align:left"><span class="  text-center">24 Oktober 2025</span></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span> </div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
</td>
															 <td class="  text-center"><span class="kt-badge kt-badge--brand kt-badge--md kt-badge--inline kt-badge--rounded">Non Tunai</span>
															  <td style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">Gopay</button></td>                                                          
															  <td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-placement="left" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;Yuni Saslia, SE&lt;br&gt;31 Desember 2018 - 14:30 WITA">
													<i class="fa flaticon2-check-mark"></i>
												</span></td>
															  
															  <td style="text-align:center" nowrap=""><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="print-tanda-terima-kolektor-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>                                                              
															</tr>
														</tbody>
													</table>
						
						


											</div>

										</div>

									</div>
									

									
									</div>
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
									<div class="modal fade" id="modal_view_setoran_kurang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-danger flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-bold">DATA SETORAN KOLEKTOR TEPI JALAN UMUM KE KASIR</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">SETORAN KURANG</span>&nbsp;&nbsp;
											<a href="#" class="btn btn-outline-brand btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Print

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
												
									<div class="row">
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kasir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Nama Kasir</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-6">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
                        </div>
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Nama Kolektor</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-6">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
                        </div>
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									</div>
									<div class="row">
												
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Setoran</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												

						<div class="col-lg-6">
                          <label>Tanggal Target :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023">

                        </div>
						<div class="col-lg-6">
                          <label>ID Tagihan :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="00001BKTJU102025">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						

						<div class="col-lg-6">
                          <label>Target Setoran :</label>
                         <div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="25.000.000" aria-describedby="basic-addon1">
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>

                        </div>
                        
						<div class="col-lg-6">
                          <label><span style="color:#ff0000"> Sisa Setoran :</span></label>
                         <div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="5.000.000" aria-describedby="basic-addon1">
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>

                        </div>
						
						
						
						
						
						
                        
						
						
						
						
						
						
						
						
						
                        </div>
													
												
											</div>

										</div>

									</div>
									

									
									</div>
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kas Masuk</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												

						
						

						
						
						
						
						
						
						
                        
						
						
						<div class="col-lg-12">
                          <label>Akun Kas Masuk :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="41.01.01 - Pendapatan Parkir Tepi Jalan Umum (TJU)">

                        </div>
						
						
						
						
						
						
                        </div>
													
												
											</div>

										</div>

									</div>
									

									
									</div>
									
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Kolektor Ke Kasir</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff">No</th>
																<th width="4%" bgcolor="#f7fcff">ID Pembayaran</th>
																<th width="10%" bgcolor="#f7fcff">Waktu Setoran<br>
																  Ke Kasir</th>
																<th width="5%" bgcolor="#f7fcff">Tipe Transaksi</th>
																<th width="8%" bgcolor="#f7fcff">Metode<br>Pembayaran</th>
																<th width="1%" bgcolor="#f7fcff">Provider</th>
																<th width="5%" bgcolor="#feffed">Nilai Setoran</th>
																<th width="1%" bgcolor="#f7fcff">Kasir Penerima</th>
																<th width="1%" bgcolor="#f7fcff">Bendahara</th>
																<th width="1%" bgcolor="#f7fcff">Aksi</th>
															</tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">1</td>
															  <td align="center" valign="middle" style="text-align:left">00001PKTTJU102025</td>
															  <td class="  text-center">25 Oktober 2025<hr>14:04:50 WITA
</td>
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="ID Reff : 01521531355135" data-html="true">Non Tunai</span></td>
															 <td style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">e-Wallet</button></td>
															 <td nowrap="" style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">Gopay</button></td>
															 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000.000,-</span> </div></td>
															  <td style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">Online</button></td>                                                          
															  <td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-placement="left" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;Yuni Saslia, SE&lt;br&gt;31 Desember 2018 - 14:30 WITA">
													<i class="fa flaticon2-check-mark"></i>
												</span></td>
															  
															  <td style="text-align:center" nowrap=""><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="print-tanda-terima-kolektor-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>                                                              
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">2</td>
															  <td align="center" valign="middle" style="text-align:left">00002PKNTJU102025</td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
</td>
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															 <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															 <td nowrap="" style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000.000,-</span> </div></td>
															  <td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="left" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Yuni Saslia, SE&lt;hr&gt;Kasir TJU" data-html="true">
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>                                                           
															  <td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-placement="left" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;Yuni Saslia, SE&lt;br&gt;31 Desember 2018 - 14:30 WITA">
													<i class="fa flaticon2-check-mark"></i>
												</span></td>
															  
															  <td style="text-align:center" nowrap=""><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="print-tanda-terima-kolektor-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>                                                              
															</tr>
														</tbody>
													</table>
						
						


											</div>

										</div>

									</div>
									

									
									</div>
									
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Jukir Ke Kolektor</div><br><br>
										<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff" rowspan="2">No</th>
																<th width="20%" bgcolor="#f7fcff" rowspan="2">Nama Jukir</th>
																<th width="16%" bgcolor="#f7fcff" rowspan="2">Titik Parkir</th>
																<th colspan="2" bgcolor="#feffed">Target</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Tagihan</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Nilai<br>Setoran</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Sisa<br>Setoran</th>
																<th width="12%" rowspan="2" bgcolor="#f7fcff">Waktu Setoran<br>Ke Kolektor</th>
																<th width="10%" rowspan="2" bgcolor="#f7fcff">Metode<br>Pembayaran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Status</th>
															</tr>
															<tr>
															  <th width="8%" bgcolor="#feffed">24 Oktober 2025</th>
															  <th width="8%" bgcolor="#feffed">Setoran Sebelumnya</th>
															</tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">1</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;">
																  <span>Rp.</span>
																  <span>10.000,-</span>
  </div>
</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span> </div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
</td>
															 <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
														    </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">2</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:05:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">3</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">4</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:06:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">5</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:07:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">6</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:08:50 WITA
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="ID Reff : 01521531355135<hr>e-Wallet<hr>Gopay" data-html="true">Non Tunai</span></td>
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
</td>														      
														  </tr>
														</tbody>
													</table>

									</div>
									

									
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
							<!--begin::Modal 3-->
									<div class="modal fade" id="modal_add_setoran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-danger flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-bold">DATA SETORAN KOLEKTOR TEPI JALAN UMUM KE KASIR</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">BELUM ADA SETORAN</span>&nbsp;&nbsp;
											<a href="#" class="btn btn-outline-brand btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Print

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
												
									<div class="row">
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kasir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Nama Kasir</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-6">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
                        </div>
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Nama Kolektor</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-6">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
                        </div>
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									</div>
									<div class="row">
												
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Setoran</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												

						<div class="col-lg-6">
                          <label>Tanggal Target :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023">

                        </div>
						

						<div class="col-lg-6">
                          <label>Target Setoran :</label>
                         <div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="25.000.000" aria-describedby="basic-addon1">
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label><span style="color:#ff0000"> Sisa Setoran :</span></label>
                         <div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="25.000.000" aria-describedby="basic-addon1">
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>

                        </div>
						
						
						
						
						
						
                        
						
						
						
						
						
						
						
						
						
                        </div>
													
												
											</div>

										</div>

									</div>
									

									
									</div>
									<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kas Masuk</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												

						
						

						
						
						
						
						
						
						
                        
						
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Akun Kas Masuk :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="-">

                        </div>
						
						
						
						
						
						
                        </div>
													
												
											</div>

										</div>

									</div>
									

									
									</div>
									
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Kolektor Ke Kasir</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff">No</th>
																<th width="4%" bgcolor="#f7fcff">ID Transaksi</th>
																<th width="10%" bgcolor="#f7fcff">Waktu Setoran<br>
																  Ke Kasir</th>
																<th width="5%" bgcolor="#f7fcff">Tipe Transaksi</th>
																<th width="8%" bgcolor="#f7fcff">Metode<br>Pembayaran</th>
																<th width="1%" bgcolor="#f7fcff">Provider</th>
																<th width="5%" bgcolor="#feffed">Nilai Setoran</th>
																<th width="1%" bgcolor="#f7fcff">Kasir Penerima</th>
																<th width="1%" bgcolor="#f7fcff">Bendahara</th>
																<th width="1%" bgcolor="#f7fcff">Aksi</th>
															</tr>
														</thead>
														<tbody>
															<tr>
															  <td colspan="10" align="center" valign="middle" style="text-align:center">- Belum Ada Data Setoran -</td>
														    </tr>
														</tbody>
													</table>
						
						


											</div>

										</div>

									</div>
									

									
									</div>
									
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Jukir Ke Kolektor</div><br><br>
										<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff" rowspan="2">No</th>
																<th width="15%" bgcolor="#f7fcff" rowspan="2">Nama Jukir</th>
																<th width="15%" bgcolor="#f7fcff" rowspan="2">Titik Parkir</th>
																<th colspan="2" bgcolor="#feffed">Target</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Tagihan</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Nilai<br>Setoran</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Sisa<br>Setoran</th>
																<th width="10%" rowspan="2" bgcolor="#f7fcff">Waktu Setoran<br>Ke Kolektor</th>
																<th width="9%" rowspan="2" bgcolor="#f7fcff">Metode<br>Pembayaran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Status</th>
															</tr>
															<tr>
															  <th width="8%" bgcolor="#feffed">24 Oktober 2025</th>
															  <th width="8%" bgcolor="#feffed">Setoran Sebelumnya</th>
															</tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">1</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;">
																  <span>Rp.</span>
																  <span>10.000,-</span>
  </div>
</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
</td>
															 <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
														    </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">2</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:05:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">3</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">4</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:06:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">5</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:07:50 WITA
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>														      
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">6</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span></div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:08:50 WITA
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="ID Reff : 01521531355135&lt;hr&gt;e-Wallet&lt;hr&gt;Gopay" data-html="true">Non Tunai</span></td>
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
</td>														      
														  </tr>
														</tbody>
													</table>

									</div>
									

									
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
												
												
									
												
												

									<!--end::Portlet-->
												</div>
											</div>
											</div>

									</div>
									</div>

            </div>


<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/file-upload/dropzonejs.js" type="text/javascript"></script>
<script src="../assets/dist/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="../assets/dist/js/global/integration/plugins/dropzone.init.js" type="text/javascript"></script>
<script src="../assets/js/pages/components/calendar/calendar-cuti.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script>
$("#show").click(function(){
    $(".tampil").show();
  });
  $("#hide1").click(function(){
      $(".tampil").hide();
    });
    $("#hide2").click(function(){
        $(".tampil").hide();
      });
</script>
<?php require '../layouts/foot.php' ?>

