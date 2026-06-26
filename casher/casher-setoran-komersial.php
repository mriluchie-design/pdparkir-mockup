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
                    Terima Setoran Koordinator Pos
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Periode [ 01/02/2023 - 07/02/2023 ]</span>
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
                                <label>ID Koordinator :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								<div class="col-lg-2">
                                <label>Nama Koordinator :</label>
								
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
                                <label class="">Periode Setoran :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
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
							<div class="col-lg-1">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Sudah Setor</option>
                                      <option value="2">Belum Setor</option>
                                      
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Tipe Pembayaran :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Tunai</option>
                                      <option value="2">Non Tunai</option>
                                      
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
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">No</th>
											  
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="4%" rowspan="2" bgcolor="#f7fcff">Nama Koordinator POS</th>
											 
											  <th colspan="2" bgcolor="#f7fcff">Area Bertugas</th>
											  
											  <th width="1%" rowspan="2" bgcolor="#feffed">1</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">2</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">3</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">4</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">5</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">6</th>
											  <th width="1%" rowspan="2" bgcolor="#ffe0e0">7</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">8</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">9</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">10</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">11</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">12</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">13</th>
											  <th width="1%" rowspan="2" bgcolor="#ffe0e0">14</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">15</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">16</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">17</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">18</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">19</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">20</th>
											  <th width="1%" rowspan="2" bgcolor="#ffe0e0">21</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">22</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">23</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">24</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">25</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">26</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">27</th>
											  <th width="1%" rowspan="2" bgcolor="#ffe0e0">28</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">29</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">30</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="2%" bgcolor="#f7fcff">Zona</th>
											  <th width="2%" bgcolor="#f7fcff">POS</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_1.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>HARIS DG. PAWA</td>
												
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>Mandai Siang</td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
											  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
											 <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
											 <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">2</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_3.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>ARMAN</td>
											
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>Mandai Malam</td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_add_setoran" data-skin="" title="" data-html="true" data-original-title="Buat Setoran Kolektor"><i class="fa fa-hand-holding-usd"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">3</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_5.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>KASIM DG. BONTO</td>
												
												
											<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>Kapasa</td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">4</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>A. LUTFIA AGUSTINAPUTRI</td>
												
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>Nipa-Nipa</td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">5</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>BANI</td>
												
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>Yos Sudarso</td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
										  </tr>
<tr>
												<td id="kt_table_1">6</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_2.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Bungaranna, A.Md</td>
												
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>BTP</td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
										  </tr>
<tr>
												<td id="kt_table_1">7</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_13.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Agustian</td>
												
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>Check Point</td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
										  </tr>
<tr>
												<td id="kt_table_1">8</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/300_6.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Sakirman</td>
												
												
												<td style="text-align:center" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>Teuku Umar</td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td><td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_setoran" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-hand-holding-usd"></i></button></td>
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
									<div class="modal fade" id="modal_view_setoran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SETORAN KOORDINATOR POS KOMERSIL KE KASIR - TUNAI - LUNAS</h3>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Koordinator POS</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Nama Koordinator POS</label>
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
									
												<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Setoran</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												<div class="col-lg-3">
                          <label>Tanggal Setoran :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023">

                        </div>
						<div class="col-lg-3">
                          <label>Waktu Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
												

						<div class="col-lg-3">
                          <label>ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0001TTKOM823">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-3">
                          <label>ID Pembayaran :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0003BTTKOM823">

                        </div>
						
						<div class="col-lg-3">
                                <div class="form-group">
      													<label>Tipe Transaksi :</label>
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Tunai">
                              	</div>
      												</div>
													<div class="col-lg-3">
                                <div class="form-group">
      													<label>Provider :</label>
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Tunai">
                              	</div>
      												</div>
													<div class="col-lg-3">
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
						<div class="form-group row">
												

												
													
												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
												
											</div>

										</div>

									</div>
									

									
									</div>
									
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Petugas Pos Komersil</div><br><br>
										<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff" rowspan="2">No</th>
															  <th colspan="2" bgcolor="#f7fcff">Petugas POS Komersil</th>
																<th colspan="2" bgcolor="#feffed">Area Bertugas</th>
																<th width="11%" rowspan="2" bgcolor="#feffed">Nilai Setoran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Penerima</th>
																<th colspan="3" bgcolor="#f7fcff">Pembayaran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
															</tr>
															<tr>
															  <th width="2%" bgcolor="#f7fcff">Foto</th>
															  <th width="15%" bgcolor="#f7fcff">Nama Lengkap</th>
															  <th width="12%" bgcolor="#feffed">Zona</th>
															  <th width="12%" bgcolor="#feffed">POS Komersil</th>
															  <th width="7%" bgcolor="#f7fcff">ID</th>
															  <th width="9%" bgcolor="#f7fcff">Tipe Transaksi</th>
															  <th width="1%" bgcolor="#f7fcff">Status</th>
														    </tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">1</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
															  <td class="nilai">Biringkanaya</td>
																<td class="nilai">Mandai Malam</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
																<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_2.jpg" alt="image" /></a></td>
																<td class="  text-center">125TTKOM212157</td>
															  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">2</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">LEONY HESTI KILALA</td>
															  <td class="nilai">Biringkanaya</td>
																<td class="nilai">Mandai Siang</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000004&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td class="  text-center">125TTKOM212158</td>
															  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">3</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000005&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_4.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">WIRA YUDHA SAKTI. D</td>
															   <td class="nilai">Biringkanaya</td>
															  <td class="nilai">Kapasa</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Online</span></td>
															  <td class="  text-center">127NTKOM212159                                                                                                                            
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="ID Reff : 01521531355135&lt;hr&gt;e-Wallet&lt;hr&gt;Gopay" data-html="true">Non Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">4</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000006&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">YUNUS TULAK, S.IP</td>
															   <td class="nilai">Biringkanaya</td>
															  <td class="nilai">Nipa-Nipa</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000007&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td class="  text-center">125TTKOM212160</td>
															  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">5</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000008&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_6.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">ANUGRAH. WL</td>
															   <td class="nilai">Biringkanaya</td>
															  <td class="nilai">Yos Sudarso</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par&lt;hr&gt;Staff Pengelolaan" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td class="  text-center">125TTKOM212161</td>
															  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">6</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par&lt;hr&gt;Staff Pengelolaan" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															   <td class="nilai">Wajo</td>
															  <td class="nilai">BTP</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par&lt;hr&gt;Staff Pengelolaan" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td class="  text-center">125TTKOM212162</td>
															  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
														  </tr>
														</tbody>
													</table>
						
						


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
												<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Setoran</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												

						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Tanggal Target :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23/10/2025">

                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Waktu Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-3">
                                <div class="form-group">
      													<label>Tipe Transaksi :</label>
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Non Tunai">
                              	</div>
      												</div>
      												</div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												

						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> ID Pembayaran :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Metode Pembayaran :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="eWallet">

                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Provider :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Gopay">

                        </div>
						<div class="col-lg-3">
                                <div class="form-group">
      													<label>ID Reff :</label>
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0121515153481586">
                              	</div>
      												</div>
						
						
						
						
						
                        </div>
						
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												

												<div class="col-lg-3">
														<label>Target Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-3">
														<label>Setoran Sebelumnya :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-3">
														<label class="kt-font-danger">Jumlah Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="500.000" aria-describedby="basic-addon1" disabled>
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
												<div class="col-lg-3">
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
																<th width="8%" rowspan="2" bgcolor="#f7fcff">Metode<br>Pembayaran</th>
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
															 <td class="  text-center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>
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
															  <td class="text-center" ><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>                                                              
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
															  <td class="text-center" ><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>                                                              
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
															  <td class="text-center" ><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>                                                              
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
															  <td class="text-center" ><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>                                                              
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
															  <td class="text-center" ><span class="kt-badge kt-badge--brand kt-badge--md kt-badge--inline kt-badge--rounded" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="ID Reff : 01521531355135" data-html="true">Non Tunai</span></td>
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
												<span class="kt-portlet__head-icon"><i class="flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">SETORAN KOLEKTOR KE KASIR - KURANG</h3>
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
									
												<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Setoran</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												

						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="0000001TKMTJU823">

                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Tanggal Target :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23/10/2025">

                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Waktu Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023 - 18:20 WITA">

                        </div>
						<div class="col-lg-3">
                          <label>Tipe Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="-">

                        </div>
						
						
						
						
						
                        </div>
						
						  
                       
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												

												<div class="col-lg-3">
														<label>Target Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-3">
														<label>Setoran Sebelumnya :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled="disabled" placeholder="200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-3">
														<label class="kt-font-danger">Jumlah Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" disabled placeholder="0" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
												<div class="col-lg-3">
														<label>Selisih Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
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
																<th width="8%" rowspan="2" bgcolor="#f7fcff">Metode<br>Pembayaran</th>
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
															 <td class="  text-center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>
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
															  <td class="text-center" ><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>                                                              
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
															  <td class="text-center" ><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>                                                              
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
															  <td class="text-center" ><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>                                                              
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
															  <td class="text-center" ><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>                                                              
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
															  <td class="text-center" ><span class="kt-badge kt-badge--brand kt-badge--md kt-badge--inline kt-badge--rounded" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="ID Reff : 01521531355135" data-html="true">Non Tunai</span></td>
															  <td class="text-center" ><i class="fa fa-check-circle text-success" data-toggle="kt-tooltip" data-skin="secondary" title="" data-original-title="Berhasil" data-html="true"></i>
</td>														      
														  </tr>
														</tbody>
													</table>

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
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>200.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>300.000,-</span> </div></td>
															  <td class="  text-center">24 Oktober 2025<hr>14:04:50 WITA
</td>
															 <td class="  text-center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>
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
															<tr>
															  <td align="center" valign="middle" style="text-align:left">2</td>
															  <td align="center" valign="middle" style="text-align:left">0044530SKTJU102025</td>
															  <td align="center" valign="middle" style="text-align:left"><span class="  text-center">24 Oktober 2025</span></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>300.000,-</span> </div></td>
																<td class="nilai"><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span> </div></td>
															  <td class="  text-center">25 Oktober 2025<hr>14:04:50 WITA
</td>
															 <td class="  text-center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Tunai</span>
															  <td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="left" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Yuni Saslia, SE&lt;hr&gt;Kasir TJU" data-html="true">
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>                                                           
															  <td style="text-align:center" nowrap=""><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-placement="top" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
															  
															  <td style="text-align:center" nowrap=""></td>                                                              
															</tr>
														</tbody>
													</table>
						
						


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
												<h3 class="kt-portlet__head-title kt-font-danger">DETAIL SETORAN KAS MASUK KOORDINATOR POS KOMERSIL</h3>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Koordinator POS</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Nama Koordinator POS</label>
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
									
												<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Setoran</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												<div class="form-group row">
												<div class="col-lg-3">
                          <label>Tanggal Setoran :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="23 Agustus 2023">

                        </div>
						<div class="col-lg-3">
                          <label>Waktu Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="">

                        </div>
												

						<div class="col-lg-3">
                          <label>ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-3">
                          <label>ID Pembayaran :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="">

                        </div>
						
						<div class="col-lg-3">
                                <div class="form-group">
      													<label>Tipe Transaksi :</label>
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="">
                              	</div>
      												</div>
													<div class="col-lg-3">
                                <div class="form-group">
      													<label>Provider :</label>
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="">
                              	</div>
      												</div>
													<div class="col-lg-3">
														<label class="kt-font-danger">Jumlah Setoran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1" disabled>
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
						
						
						
						
						
                        </div>
						
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												

												
													
												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
												
											</div>

										</div>

									</div>
									

									
									</div>
									
									<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Setoran Petugas Pos Komersil</div><br><br>
										<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff" rowspan="2">No</th>
															  <th colspan="2" bgcolor="#f7fcff">Petugas POS Komersil</th>
																<th colspan="2" bgcolor="#feffed">Area Bertugas</th>
																<th width="11%" rowspan="2" bgcolor="#feffed">Nilai Setoran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Penerima</th>
																<th colspan="3" bgcolor="#f7fcff">Pembayaran</th>
																<th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
															</tr>
															<tr>
															  <th width="2%" bgcolor="#f7fcff">Foto</th>
															  <th width="15%" bgcolor="#f7fcff">Nama Lengkap</th>
															  <th width="12%" bgcolor="#feffed">Zona</th>
															  <th width="12%" bgcolor="#feffed">POS Komersil</th>
															  <th width="7%" bgcolor="#f7fcff">ID</th>
															  <th width="9%" bgcolor="#f7fcff">Tipe Transaksi</th>
															  <th width="1%" bgcolor="#f7fcff">Status</th>
														    </tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">1</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
															  <td class="nilai">Biringkanaya</td>
																<td class="nilai">Mandai Malam</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
																<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_2.jpg" alt="image" /></a></td>
																<td class="  text-center">125TTKOM212157</td>
															  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">2</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">LEONY HESTI KILALA</td>
															  <td class="nilai">Biringkanaya</td>
																<td class="nilai">Mandai Siang</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000004&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td class="  text-center">125TTKOM212158</td>
															  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">3</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000005&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_4.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">WIRA YUDHA SAKTI. D</td>
															   <td class="nilai">Biringkanaya</td>
															  <td class="nilai">Kapasa</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Online</span></td>
															  <td class="  text-center">127NTKOM212159                                                                                                                            
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="ID Reff : 01521531355135&lt;hr&gt;e-Wallet&lt;hr&gt;Gopay" data-html="true">Non Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">4</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000006&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">YUNUS TULAK, S.IP</td>
															   <td class="nilai">Biringkanaya</td>
															  <td class="nilai">Nipa-Nipa</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000007&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td class="  text-center">125TTKOM212160</td>
															  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">5</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000008&lt;hr&gt;Koordinator Pos Komersil" data-html="true"><img src="../assets/media/users/100_6.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">ANUGRAH. WL</td>
															   <td class="nilai">Biringkanaya</td>
															  <td class="nilai">Yos Sudarso</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par&lt;hr&gt;Staff Pengelolaan" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td class="  text-center">125TTKOM212161</td>
															  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">6</td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par&lt;hr&gt;Staff Pengelolaan" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															   <td class="nilai">Wajo</td>
															  <td class="nilai">BTP</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par&lt;hr&gt;Staff Pengelolaan" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td class="  text-center">125TTKOM212162</td>
															  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
															  <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lunas</span></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="print-setoran-petugas-pos.php" type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Print Bukti Setoran" data-html="true" data-original-title="Print Bukti Setoran"><i class="fa fa-print"></i></a></td>
														  </tr>
														</tbody>
													</table>
						
						


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

