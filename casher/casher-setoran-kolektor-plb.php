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
                                <label>Kolektor PLB :</label>
								
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

																<!--end::Form-->

							<div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">

                  <form class="kt-form" id="kt_form">
                  <div class="kt-portlet__body">
										<ul class="nav nav-pills nav-fill" role="tablist">
											<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="background:#5d78ff !important; color:#fff !important">2025</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#">2022</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2021</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2020</a>
													</div>
												</li>
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#kt_tabs_3_1" >KESELURUHAN</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">SUDAH TERBAYAR</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">BELUM TERBAYAR</a>
												</li>
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_3_1" role="tabpanel">
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
																<th width="1%" bgcolor="#f7fcff" rowspan="2">No</th>
																<th colspan="3" bgcolor="#f7fcff">Kolektor Bertugas</th>
																<th width="15%" bgcolor="#f7fcff" rowspan="2">Nama Customer</th>
																<th width="20%" bgcolor="#f7fcff" rowspan="2">Alamat</th>
																<th colspan="12" bgcolor="#f7fcff" style="border-bottom-width: 1px !important">2023</th>
																
																
															</tr>
															<tr>
															  <th width="3%" bgcolor="#f7fcff">ID</th>
															  <th width="2%" bgcolor="#f7fcff">Foto</th>
															  <th width="12%" bgcolor="#f7fcff">Nama</th>
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
																<td colspan="19" bgcolor="#feffe2">Biringkanaya</td>
															</tr>
															<tr>
															  <td valign="middle" style="text-align:right">1</td>
															  <td align="center" valign="middle" style="text-align:left">00001KPLB823</td>
															  <td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"> <img src="../assets/media/users/100_1.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
															  <td align="center" valign="middle" style="text-align:left">CV. AMANDA BROWNIES</td>
															  <td align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	
															</tr>
															<tr>
															  <td valign="middle" style="text-align:right">2</td>
															  <td align="center" valign="middle" style="text-align:left">00001KPLB823</td>
															  <td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
															  <td align="center" valign="middle" style="text-align:left">BPJS KETENAGAKERJAAN</td>
															  <td align="center" valign="middle" style="text-align:left">Jl. Urip Sumoharjo</td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-info btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran_non_tunai" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td valign="middle" style="text-align:right">3</td>
																<td align="center" valign="middle" style="text-align:left">00001KPLB823</td>
																<td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
																<td align="center" valign="middle" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
																<td align="center" valign="middle" style="text-align:left">PDAM</td>
																<td align="center" valign="middle" style="text-align:left">Jl. Racing Centre</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_add_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td valign="middle" style="text-align:right">4</td>
																<td align="center" valign="middle" style="text-align:left">00001KPLB823</td>
																<td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
																<td align="center" valign="middle" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
																<td align="center" valign="middle" style="text-align:left">CV. BROWCIL MAKASSAR</td>
																<td align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td valign="middle" style="text-align:right">5</td>
																<td align="center" valign="middle" style="text-align:left">00001KPLB823</td>
																<td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
																<td align="center" valign="middle" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
																<td align="center" valign="middle" style="text-align:left">PT. KEISHA GLOW INDONESIA</td>
																<td align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-info btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran_non_tunai" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td valign="middle" style="text-align:right">6</td>
																<td align="center" valign="middle" style="text-align:left">00001KPLB823</td>
																<td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
																<td align="center" valign="middle" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
																<td align="center" valign="middle" style="text-align:left">PT. CITRA KOSMETIK INDONESIA</td>
																<td align="center" valign="middle" style="text-align:left">Jl. Boulevard</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_add_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
																<td valign="middle" style="text-align:right">7</td>
																<td align="center" valign="middle" style="text-align:left">00001KPLB823</td>
																<td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
																<td align="center" valign="middle" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
																<td align="center" valign="middle" style="text-align:left">CV. MBAK DAENG MAKASSAR</td>
																<td align="center" valign="middle" style="text-align:left">Jl. Abd. Daeng Sirua</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	
															</tr>
															<tr>
															  <td colspan="18" valign="middle" bgcolor="#feffe2" style="text-align:left">Bontoala</td>
														  </tr>
															<tr>
															  <td valign="middle" style="text-align:right">1</td>
															  <td align="center" valign="middle" style="text-align:left">00002KPLB823</td>
															  <td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
															  <td align="center" valign="middle" style="text-align:left">CV. AMANDA BROWNIES</td>
															  <td align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	
															</tr>
															<tr>
															  <td valign="middle" style="text-align:right">2</td>
															  <td align="center" valign="middle" style="text-align:left">00002KPLB823</td>
															  <td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
															  <td align="center" valign="middle" style="text-align:left">BPJS KETENAGAKERJAAN</td>
															  <td align="center" valign="middle" style="text-align:left">Jl. Urip Sumoharjo</td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-info btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran_non_tunai" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
															  <td valign="middle" style="text-align:right">3</td>
															  <td align="center" valign="middle" style="text-align:left">00002KPLB823</td>
															  <td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
															  <td align="center" valign="middle" style="text-align:left">PDAM</td>
															  <td align="center" valign="middle" style="text-align:left">Jl. Racing Centre</td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_add_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
															  <td valign="middle" style="text-align:right">4</td>
															  <td align="center" valign="middle" style="text-align:left">00002KPLB823</td>
															  <td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
															  <td align="center" valign="middle" style="text-align:left">CV. BROWCIL MAKASSAR</td>
															  <td align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	
															</tr>
															<tr>
															  <td valign="middle" style="text-align:right">5</td>
															  <td align="center" valign="middle" style="text-align:left">00002KPLB823</td>
															  <td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
															  <td align="center" valign="middle" style="text-align:left">PT. KEISHA GLOW INDONESIA</td>
															  <td align="center" valign="middle" style="text-align:left">Jl. A.P. Pettarani</td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-info btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran_non_tunai" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
															  <td valign="middle" style="text-align:right">6</td>
															  <td align="center" valign="middle" style="text-align:left">00002KPLB823</td>
															  <td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
															  <td align="center" valign="middle" style="text-align:left">PT. CITRA KOSMETIK INDONESIA</td>
															  <td align="center" valign="middle" style="text-align:left">Jl. Boulevard</td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_add_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															</tr>
															<tr>
															  <td valign="middle" style="text-align:right">7</td>
															  <td align="center" valign="middle" style="text-align:left">00002KPLB823</td>
															  <td align="center" valign="middle" style="text-align:left"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
															  <td align="center" valign="middle" style="text-align:left">CV. MBAK DAENG MAKASSAR</td>
															  <td align="center" valign="middle" style="text-align:left">Jl. Abd. Daeng Sirua</td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
																	
															</tr>
															
															
															
														</tbody>
													</table>

					<label> Keterangan : </label>
					<div class="kt-section__content kt-section__content--solid mt-3">
					<button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Terbayar - Tunai" data-original-title="" title=""><i class="fa fa-hand-holding-usd"></i></button>
					<button type="button" class="btn btn-outline-info btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Terbayar - Online" data-original-title="" title=""><i class="fa fa-hand-holding-usd"></i></button>
					<button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="kt-popover" data-placement="top" data-content="Belum Terbayar" data-original-title="" title=""><i class="fa fa-hand-holding-usd"></i></button>
           
          </div>

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
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-bold">DETAIL SETORAN KAS MASUK - KOLEKTOR PLB - TUNAI</h3>
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
									<div class="col-xl-8">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kas Masuk</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001SKPLB823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Waktu Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Jenis Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Tunai">

                        </div>
						
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-4">
					   <label>Nama Kasir</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-4">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												

												<div class="col-lg-4">
														<label>Target Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Setoran Kas Masuk :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
												<div class="col-lg-4">
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
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor PLB</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-12">
                          <label>NIP Pegawai :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
					   <div class="col-lg-12">
					   <label>Nama Kolektor PLB</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Customer</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Setoran Customer :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001SCPLB823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Customer :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001CPLB823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nama Customer :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="PT. CITRA KOSMETIK INDONESIA">

                        </div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Zona :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Biringkanaya">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wilayah :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Biringkanaya">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Alamat :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Jl. Abd. Daeng Sirua">

                        </div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tanggal Tagihan Customer :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tanggal Setoran Customer :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="25 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tarif Setoran Customer :</label>
                        <div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="50.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>

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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Customer</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" rowspan="2" bgcolor="#f7fcff">No</th>
																<th width="15%" rowspan="2" bgcolor="#f7fcff">Waktu Setoran</th>
																<th width="15%" rowspan="2" bgcolor="#f7fcff">ID Transaksi</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Tarif Pengelolaan</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Nilai<br>Setoran</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Sisa<br>Setoran</th>
																<th colspan="3" bgcolor="#f7fcff">Pembayaran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Status</th>
															</tr>
															<tr>
															  <th width="8%" bgcolor="#f7fcff">ID</th>
															  <th width="8%" bgcolor="#f7fcff">Metode</th>
															  <th width="1%" bgcolor="#f7fcff">Provider</th>
													      </tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">1</td>
															  <td class="  text-center">24 Oktober 2025
															    <hr />
															    14:04:50 WITA </td>
															  <td align="center" valign="middle" style="text-align:left">0000001SCPLB823</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td class="  text-center">0000001PTPLB823</td>                                                              
															 <td class="  text-center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span></td>
															  <td class="text-center" >  <span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span> </td>                                                           
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
														    </tr>
														</tbody>
													</table>
						
						


											</div>

										</div>

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
															  <th width="1%" rowspan="2" bgcolor="#f7fcff">No</th>
																<th width="15%" rowspan="2" bgcolor="#f7fcff">Waktu Setoran</th>
																<th width="15%" rowspan="2" bgcolor="#f7fcff">ID Transaksi</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Tarif Pengelolaan</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Nilai<br>Setoran</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Sisa<br>Setoran</th>
																<th colspan="3" bgcolor="#f7fcff">Pembayaran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Status</th>
															</tr>
															<tr>
															  <th width="8%" bgcolor="#f7fcff">ID</th>
															  <th width="8%" bgcolor="#f7fcff">Metode</th>
															  <th width="1%" bgcolor="#f7fcff">Provider</th>
													      </tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">1</td>
															  <td class="  text-center">24 Oktober 2025
															    <hr />
															    14:04:50 WITA </td>
															  <td align="center" valign="middle" style="text-align:left">0000001SKPLB823</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td class="  text-center">0000001PTPLB823</td>                                                             
															 <td class="text-center" >Tunai</td>
															  <td class="text-center" >Tunai</td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
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
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_view_setoran_non_tunai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DETAIL SETORAN KAS MASUK - KOLEKTOR PLB - NON TUNAI</h3>
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
									<div class="col-xl-8">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kas Masuk</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001SKPLB823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Waktu Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tipe Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Non Tunai">

                        </div>
						
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-4">
					   <label>Nama Kasir</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-4">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												

												<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Kode Akun Kas Masuk :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="11.02.01 - BANK BTN">

                        </div>
													
												

												</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												

												<div class="col-lg-4">
														<label>Target Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Setoran Kas Masuk :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
												<div class="col-lg-4">
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
						
											</div>
											
						
											</div>
									
										</div>
										

									

									
									</div>
									<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor PLB</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-12">
                          <label>NIP Pegawai :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
					   <div class="col-lg-12">
					   <label>Nama Kolektor PLB</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Customer</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Setoran Customer :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001SCPLB823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Customer :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001CPLB823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nama Customer :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="PT. CITRA KOSMETIK INDONESIA">

                        </div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Zona :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Biringkanaya">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wilayah :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Biringkanaya">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Alamat :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Jl. Abd. Daeng Sirua">

                        </div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tanggal Tagihan Customer :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tanggal Setoran Customer :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="25 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tarif Setoran Customer :</label>
                        <div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="50.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>

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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Customer</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" rowspan="2" bgcolor="#f7fcff">No</th>
																<th width="15%" rowspan="2" bgcolor="#f7fcff">Waktu Setoran</th>
																<th width="15%" rowspan="2" bgcolor="#f7fcff">ID Transaksi</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Tarif Pengelolaan</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Nilai<br>Setoran</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Sisa<br>Setoran</th>
																<th colspan="3" bgcolor="#f7fcff">Pembayaran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Status</th>
															</tr>
															<tr>
															  <th width="8%" bgcolor="#f7fcff">ID</th>
															  <th width="10%" bgcolor="#f7fcff">Metode</th>
															  <th width="1%" bgcolor="#f7fcff">Provider</th>
													      </tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">1</td>
															  <td class="  text-center">24 Oktober 2025
															    <hr />
															    14:04:50 WITA </td>
															  <td align="center" valign="middle" style="text-align:left">0000001SCPLB823</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td class="  text-center">0000001PTPLB823</td>                                                              
															 <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Transfer Bank</span></td>
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="ID Reff : 01521531355135" data-html="true">BTN</span></td>                                                           
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
														    </tr>
														</tbody>
													</table>
						
						


											</div>

										</div>

									</div>
									

									
									</div>
												
												

												
												</div>
												<div class="row">
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Kolektor PLB Ke Kasir</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" rowspan="2" bgcolor="#f7fcff">No</th>
																<th width="15%" rowspan="2" bgcolor="#f7fcff">Waktu Setoran</th>
																<th width="15%" rowspan="2" bgcolor="#f7fcff">ID Transaksi</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Tarif Pengelolaan</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Nilai<br>Setoran</th>
																<th width="8%" rowspan="2" bgcolor="#feffed">Sisa<br>Setoran</th>
																<th colspan="3" bgcolor="#f7fcff">Pembayaran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Status</th>
															</tr>
															<tr>
															  <th width="8%" bgcolor="#f7fcff">ID</th>
															  <th width="8%" bgcolor="#f7fcff">Metode</th>
															  <th width="1%" bgcolor="#f7fcff">Provider</th>
													      </tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:left">1</td>
															  <td class="  text-center">24 Oktober 2025
															    <hr />
															    14:04:50 WITA </td>
															  <td align="center" valign="middle" style="text-align:left">0000001SKPLB823</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>10.000,-</span> </div></td>
															  <td class="  text-center">0000001PTPLB823</td>                                                             
															 <td class="text-center" >Tunai</td>
															  <td class="text-center" >Tunai</td>                                                              
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
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
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">FORM KAS MASUK - SETORAN KOLEKTOR TJU - KURANG</h3>
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
												<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kas Masuk</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Waktu Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-4">
					   <label>Nama Kasir</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-4">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												

												<div class="col-lg-4">
														<label>Target Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Setoran Kas Masuk :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="400.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
												<div class="col-lg-4">
														<label>Selisih Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="-100.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>

												</div>
						
						



											</div>

										</div>

									</div>
									

									
									</div>
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Kolektor :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nama Kolektor :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> NIP :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						
						
						
						
                        </div>
						
						


											</div>

										</div>

									</div>
									

									
									</div>
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Setoran Jukir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Jukir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nama Jukir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Zona :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wilayah :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tanggal Tagihan Jukir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tanggal Setoran Jukir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nilai Setoran Jukir :</label>
                        <div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="50.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>

                        </div>
						
						
						
						
						
						
						
                        </div>
						
						
						
						
						


											</div>
											

										</div>

									</div>
									

									
									</div>
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Approval</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Kolektor :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nama Kolektor :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> NIP :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						
						
						
						
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
							<!--End::Modal 2-->
							<!--begin::Modal 3-->
									<div class="modal fade" id="modal_add_setoran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">FORM SETORAN KAS MASUK - KOLEKTOR PLB</h3>
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
												<div class="col-xl-12">
												<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kasir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-4">
					   <label>Nama Kasir</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
						<div class="col-lg-4">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
						
						
						
                        </div>
						
						
						
						
						
												
                              
											</div>

										</div>

									</div>

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kas Masuk</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKPLB823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Kode Akun Kas Masuk :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="11.02.01 - BANK BTN">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Waktu Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						
						
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Tipe Transaksi :</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-secondary btn-square btn-sm col-lg-4" id="hide1">Tunai</button>&nbsp;
      													
                                <button type="button" class="btn btn-secondary btn-square btn-sm col-lg-4" id="show">Non Tunai</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>
                              <div class="form-group row tampil">
                                <div class="col-lg-12">
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                  <div class="form-group row">
    													
													<div class="col-lg-4">
														<label class="kt-font-danger">Tipe Pembayaran :</label>
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Virtual Account</option>
														<option>QRIS</option>
														<option>Transfer Bank</option>
														<option>Gopay</option>
														<option>ShopeePay</option>
														
														</select>
													</div>
												<div class="col-lg-4">
														<label>Upload Bukti :</label>
														<div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div>
													</div>
                          </div>
						



											</div>
											</div>
                       
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												

												<div class="col-lg-4">
														<label>Target Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Setoran Kas Masuk :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
												<div class="col-lg-4">
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
												
												
											</div>

									</div>
									

									
									</div>
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Kolektor :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nama Kolektor :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> NIP :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						
						
						
						
                        </div>
						
						


											</div>

										</div>

									</div>
									

									
									</div>
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Setoran Jukir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> ID Jukir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nama Jukir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Zona :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wilayah :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">

						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tanggal Tagihan Jukir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tanggal Setoran Jukir :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nilai Setoran Jukir :</label>
                        <div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="50.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>

                        </div>
						
						
						
						
						
						
						
                        </div>
						
						
						
						
						


											</div>
											

										</div>

									</div>
									

									
									</div>
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Approval</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Fingerprint Kasir :</label>
														<div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
													<div class="dropzone-msg dz-message needsclick">
														<span class="dropzone-msg-desc">&nbsp;</span>
													</div>
												</div>
													</div>
												<div class="col-lg-4">
														<label>Fingerprint Kolektor :</label>
														<div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
													<div class="dropzone-msg dz-message needsclick">
														<span class="dropzone-msg-desc">&nbsp;</span>
													</div>
												</div>

												</div>
												<div class="col-lg-4">
														<label>Keterangan Tambahan :</label>
														<textarea class="form-control" id="exampleTextarea" rows="6" placeholder="Belum Normal"></textarea>

												</div>

												</div>
						
						


											</div>

										</div>

									</div>
									

									
									</div>
												
												

												
												</div>
									
									
													

												</div>
												
												<div class="kt-portlet__foot kt-align-right">
												<div class="">

													<button type="reset" class="btn btn-brand btn-sm" id="kt_sweetalert_demo_8" >Kirim</button>
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