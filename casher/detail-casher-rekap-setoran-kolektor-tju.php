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
                    Detail Penerimaan Setoran Kolektor
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											YUNUS TULAK, S.IP [ Nama Kolektor ]</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


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
                <div class="alert-text">Notifikasi Sistem!</div>
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
                                <label class="">Periode Target :</label>
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
                                <label>Titik Parkir :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
							<div class="col-lg-1">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Sudah Setor</option>
                                      <option value="2">Belum Setor</option>
                                      <option value="2">Kurang Setor</option>
                                      
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
				<div class="form-group row">
				
					  <div class="col-lg-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Kolektor</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  
						
					  <div class="col-lg-4">
                          <label class="">ID Kolektor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="34978TKMTJU102025">
                        </div>
						 <div class="col-lg-8">
                          <label class="">Nama Kolektor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="YUNUS TULAK, S.IP">
                        </div>
						 
                        </div>
						
						
                      </div>
                      </div>
                      </div>
					  <div class="col-lg-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Setoran</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  
						
					  <div class="col-lg-4">
                          <label class="">ID Transaksi :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="34978TKMTJU102025">
                        </div>
						<div class="col-lg-4">
                          <label class="">Waktu Transaksi :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="06/11/2025 - 21:09:00 WITA">
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
						  <div class="col-lg-4">
                          <label class="">Setoran Sebelumnya :</label>
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
<div class="row">
					  <div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Jukir</div><br><br>
										 <div class="kt-portlet__body">
										
											<div class="tab-content">
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" rowspan="2" bgcolor="#f7fcff">No</th>
															  <th width="13%" rowspan="2" bgcolor="#f7fcff">Nama Jukir</th>
															  <th width="16%" rowspan="2" bgcolor="#f7fcff">Titik Parkir</th>
															  <th colspan="4" bgcolor="#feffed">Setoran</th>
															  <th colspan="5" bgcolor="#f7fcff">Pembayaran</th>
															  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
															</tr>
															<tr>
															  <th width="7%" bgcolor="#feffed">Target</th>
															  <th width="7%" bgcolor="#feffed">Sebelumnya</th>
															  <th width="7%" bgcolor="#feffed">Jumlah</th>
															  <th width="7%" bgcolor="#feffed">Sisa</th>
															  <th width="1%" bgcolor="#f7fcff">Penerima</th>
															  <th width="7%" bgcolor="#f7fcff">Waktu</th>
															  <th width="6%" bgcolor="#f7fcff">ID</th>
															  <th width="7%" bgcolor="#f7fcff">Tipe</th>
															  <th width="3%" bgcolor="#f7fcff">Status</th>
											              </tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">1</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.000.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.000.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
																<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="WIRA YUDHA SAKTI. D&lt;hr&gt;Kolektor Tepi Jalan Umum" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
																<td class="  text-center">06/11/2025<br>21:13:00 WITA</td>
																<td class="  text-center">34978PTTJU102025</td>
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
</td>
															  <td class="  text-center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Lunas</span>
</td>
															  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#detail-setoran-jukir-lunas" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-tanda-terima-jukir-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-setoran-jukir-kasir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">2</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.000.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="WIRA YUDHA SAKTI. D&lt;hr&gt;Kolektor Tepi Jalan Umum" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
															  <td class="  text-center">06/11/2025<br>21:12:00 WITA</td>
															  <td class="  text-center">34977PTTJU102025</td>
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															  <td class="  text-center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline kt-badge--rounded">Kurang</span></td>
															  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#detail-setoran-jukir-kurang" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-tanda-terima-jukir-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-setoran-jukir-kasir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">3</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Online</span></td>
															  <td class="  text-center">06/11/2025<br>21:11:00 WITA</td>
															  <td class="text-center">34976PTTJU102025</td>                                                            
															  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="ID Reff : 01521531355135<hr>e-Wallet<hr>Gopay" data-html="true">Non Tunai</span></td>
															  
															  <td class="  text-center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Lunas</span>
															  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-setoran-jukir-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-tanda-terima-jukir-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-setoran-jukir-kasir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">4</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="WIRA YUDHA SAKTI. D&lt;hr&gt;Kolektor Tepi Jalan Umum" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
															  <td class="  text-center">06/11/2025<br>21:10:00 WITA</td>
															  <td class="text-center">34975PTTJU102025</td>
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															  <td class="  text-center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Lunas</span></td>
															  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-setoran-jukir-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-tanda-terima-jukir-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-setoran-jukir-kasir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">5</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="WIRA YUDHA SAKTI. D&lt;hr&gt;Kolektor Tepi Jalan Umum" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
															  <td class="  text-center">06/11/2025<br>21:09:00 WITA</td>
															  <td class="text-center">34974PTTJU102025</td>
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															  <td class="  text-center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Lunas</span></td>
															  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-setoran-jukir-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-tanda-terima-jukir-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-setoran-jukir-kasir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">6</td>
															  <td align="center" valign="middle" style="text-align:left">ADITYA BAMBANG HERMAWAN</td>
															  <td align="center" valign="middle" style="text-align:left">DEPAN IKAN BAKAR (PASAR SENGGOL)</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000,-</span> </div></td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000,-</span> </div></td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="WIRA YUDHA SAKTI. D&lt;hr&gt;Kolektor Tepi Jalan Umum" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
															  <td class="  text-center">06/11/2025<br>21:08:00 WITA</td>
															  <td class="text-center">34973PTTJU102025</td>
															  <td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
															  <td class="  text-center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline kt-badge--rounded">Lunas</span></td>
															  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-setoran-jukir-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-tanda-terima-jukir-tju.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print Tanda Terima</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-setoran-jukir-kasir.php" class="kt-nav__link">
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

					
                    </div>

                  </form>
                  </div>
                      </div>
                      </div>
                      </div>
					<!--begin: Datatable -->
					
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

                <!--begin::Modal 1-->
									<div class="modal fade" id="detail-setoran-jukir-lunas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
									<div class="modal-content">
									<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-danger flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-bold">TEPI JALAN UMUM - DATA SETORAN JUKIR KE KOLEKTOR</h3>
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
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000" aria-describedby="basic-addon1">
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
															 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.000.000,-</span> </div></td>
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
															 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.000.000,-</span> </div></td>
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
									<div class="modal fade" id="detail-setoran-jukir-kurang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
									<div class="modal-content">
									<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-danger flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-bold">TEPI JALAN UMUM - DATA SETORAN JUKIR KE KOLEKTOR</h3>
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
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000" aria-describedby="basic-addon1">
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
												  </div>

                        </div>
                        
						<div class="col-lg-6">
                          <label><span style="color:#ff0000"> Sisa Setoran :</span></label>
                         <div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
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
															 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>500.000,-</span> </div></td>
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
															 <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.000.000,-</span> </div></td>
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
