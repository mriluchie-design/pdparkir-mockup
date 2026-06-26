<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    History Perubahan Target Pendapatan Jukir Insidentil
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
			<div class="kt-subheader__group" id="kt_subheader_search">
				<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
					HARIS DAENG PAWA [ Nama Mitra Jukir ] </span>
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
				<a href="#" class="btn btn-label btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali
                        <script>
function goBack() {
  window.history.back();
}
</script>
											</a>
                
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
						 <div class="col-lg-2">
                                <label>ID Mitra :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
                            <div class="col-lg-2">
                                <label>Nama Mitra :</label>
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
                                <label>Titik :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
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
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">ID<br>Target Pendapatan</th>
											  
											  <th colspan="14" bgcolor="#feffed">Target Pendapatan</th>
											  <th width="2%" colspan="2" bgcolor="#f7fcff">Penetapan<br>Target Pendapatan</th>
											 
											  <th width="1%" colspan="3" bgcolor="#f7fcff">Disposisi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" colspan="2" bgcolor="#feffed">Senin</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Selasa</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Rabu</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Kamis</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Jumat</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Sabtu</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Minggu</th>
											  <th bgcolor="#f7fcff">Dibuat</th>
											  <th bgcolor="#f7fcff">Terakhir Diubah</th>
											  
											  <th width="1%" bgcolor="#f7fcff">Kepala Seksi TJU</th>
											  <th width="1%" bgcolor="#f7fcff">Kepala Bagian Pengelolaan</th>
											  <th width="1%" bgcolor="#f7fcff">Direktur Operasional</th>
						                  </tr>
										</thead>
										<tbody>
											
										  <tr>
												<td id="kt_table_1" style="text-align:right">1</td>
												<td style="text-align:center">00009TPI823</td>
											
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td style="text-align:right" nowrap>25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td nowrap style="text-align:center">23/01/2023<br>06:00:00</td>
												<td nowrap style="text-align:center">24/01/2023<br>06:00:00</td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">2</td>
												<td style="text-align:center">00001TPI824</td>
											
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td style="text-align:right" nowrap>25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td nowrap style="text-align:center">12/01/2023<br>06:00:00</td>
												<td nowrap style="text-align:center">22/01/2023<br>06:00:00</td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												
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
