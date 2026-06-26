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
											Monitoring Pembayaran Customer
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Periode Tahun : 2023</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


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
                                <label>Nama Customer :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
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
							<div class="col-lg-1">
                                <label>Wilayah :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">I</option>
                                      <option value="2">II</option>
                                      <option value="3">III</option>
                                      <option value="4">IV</option>
                                      <option value="5">V</option>
                                      <option value="6">VI</option>
                                      <option value="7">VII</option>
                                      <option value="8">VIII</option>
                                      <option value="9">IX</option>
                                      <option value="10">X</option>
                                      <option value="11">XI</option>
                                      <option value="12">XII</option>
                                      <option value="13">XIII</option>
                                      <option value="14">XIV</option>
                                      <option value="15">XV</option>
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Kolektor :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="1" selected="">HARIS DG. PAWA</option>
                                      <option value="2">ARMAN</option>
                                      <option value="3">KASIM DG. BONTO</option>
                                      <option value="4">A. LUTFIA AGUSTINAPUTRI</option>
                                      <option value="5">BANI</option>
                                      
                                  </select>
                            </div>
							
							
							
							
								<div class="col-lg-2">
                                <label>Metode Pembayaran :</label>
								
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Manual</option>
                                      <option value="2">Online</option>
                                      <option value="3">Belum Bayar</option>
                                     
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

																<!--end::Form-->

							<div class="row">
							<div class="col-lg-12">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Monitoring Pembayaran
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-sm dropdown-toggle" data-toggle="dropdown">
													2025
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														
														
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">2024</span>
															</a>
															
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">2023</span>
															</a>
															
														</li>
														
														
														
													</ul>
												</div>&nbsp;
												
										</div>
										</div>
										<div class="kt-portlet__body">
											<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
																<th width="1%" bgcolor="#f7fcff" rowspan="2">No</th>
																<th width="10%" bgcolor="#f7fcff" rowspan="2">Nama Customer</th>
																<th width="8%" bgcolor="#f7fcff" rowspan="2">Wil</th>
																<th width="10%" bgcolor="#f7fcff" rowspan="2">Alamat</th>
																<th width="1%" bgcolor="#f7fcff" rowspan="2">Kolektor</th>
																<th colspan="12" bgcolor="#f7fcff" style="border-bottom-width: 1px !important">2025</th>
																
																
															</tr>
															<tr>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JAN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">FEB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">MAR</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">APR</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">MEI</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">AGU</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEP</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">OKT</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">NOV</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">DES</td>
																
															</tr>
														</thead>
														<tbody>
															<tr>
																<td colspan="18" bgcolor="#feffe2">Biringkanaya</td>
															</tr>
															<tr>
															  <td valign="middle" style="text-align:right">1</td>
																<td align="center" valign="middle" style="text-align:left">CV. AMANDA BROWNIES</td>
																<td align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
															  <td align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
															  <td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	
															</tr>
															<tr>
															  <td width="1%" valign="middle" style="text-align:right">2</td>
																<td width="4%" align="center" valign="middle" style="text-align:left">BPJS KETENAGAKERJAAN</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
															  <td width="6%" align="center" valign="middle" style="text-align:left">Jl. Urip Sumoharjo</td>
															  <td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>BANK BTN<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" valign="middle" style="text-align:right">3</td>
																
																<td width="4%" align="center" valign="middle" style="text-align:left">PDAM</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
																<td width="6%" align="center" valign="middle" style="text-align:left">Jl. Racing Centre</td>
																<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : - <hr> Penerima Pembayaran : <hr>-" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" valign="middle" style="text-align:right">4</td>
																
																<td width="4%" align="center" valign="middle" style="text-align:left">CV. BROWCIL MAKASSAR</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
																<td width="6%" align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
																<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" valign="middle" style="text-align:right">5</td>
																
																<td width="4%" align="center" valign="middle" style="text-align:left">PT. KEISHA GLOW INDONESIA</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
																<td width="6%" align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
																<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>BANK BTN<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" valign="middle" style="text-align:right">6</td>
																
																<td width="4%" align="center" valign="middle" style="text-align:left">PT. CITRA KOSMETIK INDONESIA</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
																<td width="6%" align="center" valign="middle" style="text-align:left">Jl. Boulevard</td>
																<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : - <hr> Penerima Pembayaran : <hr>-" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" valign="middle" style="text-align:right">7</td>
																
																<td width="4%" align="center" valign="middle" style="text-align:left">CV. MBAK DAENG MAKASSAR</td>
																<td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
																<td width="6%" align="center" valign="middle" style="text-align:left">Jl. Abd. Daeng Sirua</td>
																<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- <hr> Pembayaran : Rp. 250.000,- <hr> Penerima Pembayaran : <hr>Sri Suhartini, SE<br>14:30:00 WITA" data-html="true"></button></td>
															</tr>
															<tr>
															  <td colspan="17" valign="middle" bgcolor="#feffe2" style="text-align:left">Bontoala</td>
														  </tr>
															<tr>
															  <td width="1%" valign="middle" style="text-align:right">1</td>
															  <td width="4%" align="center" valign="middle" style="text-align:left">CV. AMANDA BROWNIES</td>
															  <td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
															  <td width="6%" align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
															  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
														  </tr>
															<tr>
															  <td width="1%" valign="middle" style="text-align:right">2</td>
															  <td width="4%" align="center" valign="middle" style="text-align:left">BPJS KETENAGAKERJAAN</td>
															  <td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
															  <td width="6%" align="center" valign="middle" style="text-align:left">Jl. Urip Sumoharjo</td>
															  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;BANK BTN&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
														  </tr>
															<tr>
															  <td width="1%" valign="middle" style="text-align:right">3</td>
															  <td width="4%" align="center" valign="middle" style="text-align:left">PDAM</td>
															  <td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
															  <td width="6%" align="center" valign="middle" style="text-align:left">Jl. Racing Centre</td>
															  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : - &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;-" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
														  </tr>
															<tr>
															  <td width="1%" valign="middle" style="text-align:right">4</td>
															  <td width="4%" align="center" valign="middle" style="text-align:left">CV. BROWCIL MAKASSAR</td>
															  <td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
															  <td width="6%" align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
															  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
														  </tr>
															<tr>
															  <td width="1%" valign="middle" style="text-align:right">5</td>
															  <td width="4%" align="center" valign="middle" style="text-align:left">PT. KEISHA GLOW INDONESIA</td>
															  <td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
															  <td width="6%" align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
															  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;BANK BTN&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
														  </tr>
															<tr>
															  <td width="1%" valign="middle" style="text-align:right">6</td>
															  <td width="4%" align="center" valign="middle" style="text-align:left">PT. CITRA KOSMETIK INDONESIA</td>
															  <td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
															  <td width="6%" align="center" valign="middle" style="text-align:left">Jl. Boulevard</td>
															  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : - &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;-" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
														  </tr>
															<tr>
															  <td width="1%" valign="middle" style="text-align:right">7</td>
															  <td width="4%" align="center" valign="middle" style="text-align:left">CV. MBAK DAENG MAKASSAR</td>
															  <td width="1%" align="center" valign="middle" style="text-align:center">Nama Kelurahan</td>
															  <td width="6%" align="center" valign="middle" style="text-align:left">Jl. Abd. Daeng Sirua</td>
															  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000&lt;hr&gt;UMAR MALIK, SE&lt;hr&gt;082244444436" data-html="true"> <img src="../assets/media/users/100_11.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tarif : Rp. 250.000,- &lt;hr&gt; Pembayaran : Rp. 250.000,- &lt;hr&gt; Penerima Pembayaran : &lt;hr&gt;Sri Suhartini, SE&lt;br&gt;14:30:00 WITA" data-html="true"></button></td>
														  </tr>
															
															
															
														</tbody>
													</table>
													<label> Keterangan : </label>
					<div class="kt-section__content kt-section__content--solid mt-3">
            <span class="kt-badge kt-badge--success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Terbayar - Manual" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--primary kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Terbayar - Online" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Belum Terbayar" data-original-title="" title=""></span>
           
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
									</div>
						</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
