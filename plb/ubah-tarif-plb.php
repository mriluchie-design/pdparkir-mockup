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
											Form Ubah Tarif
									</h3>
<span class="kt-subheader__separator kt-subheader__separator--v"></span>
			<div class="kt-subheader__group" id="kt_subheader_search">
				<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
					[ Nama Customer ] </span>
				<form class="kt-margin-l-20" id="kt_subheader_search_form">
				</form>
			</div>
		</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="mutasi-pegawai.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
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
							<!--begin:: Portlet-->
              <div class="row">
              <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

                    <div class="kt-portlet__body">
                      <div class="row">
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Customer</div><br><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						 <div class="col-lg-6">
                          <label>ID Customer :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="000000001" disabled>
                        </div>
						<div class="col-lg-6">
                          <label>ID Customer :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="000000001" disabled>
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                      
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Badan Usaha :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="BPJS Ketenagakerjaan" disabled>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Tipe Badan Usaha :</label>
                           <input type="text" class="form-control form-control-sm" placeholder="PT" disabled>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Tipe Customer :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Platinum" disabled>
                        </div>
                        </div>
						
						
						
					 
                    
									 
                      </div>	
					  
					   

<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-4">
					                           <label>Email :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx" disabled>
					                         </div>
						<div class="col-lg-4">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>
                          <div class="form-group">
                       <input type="text" class="form-control form-control-sm" placeholder="0822151553" disabled>
                      </div>
                      </div>
					  <div class="col-lg-4">
                          <label class="">Whatsapp :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="0822151553" disabled>
                      </div>
                      </div>
                      </div>
					   <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="form-group row">
					  

									
						<div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> NPWP :</label>
                          <div class="form-group">
                         <input type="text" class="form-control form-control-sm" placeholder="0000000000" disabled>
                      </div>
                      </div>
					  

									</div>
									</div>
									</div>
									
                    </div>
					<div class="col-xl-7">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kesepakatan Lama</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

											<div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="3%" bgcolor="#f7fcff">Jenis<br>Kendaraan</td>
																									<td width="1%" bgcolor="#f7fcff">Daya<br>Tampung</td>
																									<td width="11%" bgcolor="#f7fcff">Satuan Tarif</td>
																									<td width="5%" bgcolor="#f7fcff">Durasi</td>
																									<td width="12%" bgcolor="#f7fcff">Nominal</td>
																									
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr>
																								  <td style="text-align:center">1</td>
																								  <td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="Roda 2" disabled></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="2" disabled></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2 Durasi"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																								  <td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="Roda 4" disabled></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="2" disabled></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2 Durasi"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								

																								
																							</tbody>
																							
																						</table>
                                          </div>
													<table class="table table-responsive  table-hover table-checkable" id="kt_table_2">
  <tr>
    <td width="24%" style="text-align:right" bgcolor="#f7fcff"><b>TOTAL KEWAJIBAN PERBULAN</b></td>
    <td width="12%" bgcolor="#f7fcff" colspan="-4" style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    </tr>
  
 
</table>
									</div>
									</div>
									</div>

									<!--end::Portlet-->


								
								
								
					
					
					
					
								
					
                    </div>
					<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Badan Usaha</div><br><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     <div class="form-group row">
                      
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Jl. Urip Sumoharjo" disabled>
                        </div>
						<div class="col-lg-4">
                          <label>Kode Pos :</label>
                           <input type="text" class="form-control form-control-sm" placeholder="90000" disabled>
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-8">
                          <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        </div>
						<div class="col-lg-4">
                          <button type="button" class="btn btn-sm btn-brand" data-toggle="modal" data-target="#modal_peta">Lihat Peta</button>
                        </div>
						
						
						
                        </div>
						
						
					 
                    
									 
					  
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-6">
					                           <label>Latitude :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="-6.193125" disabled>
					                         </div>
						<div class="col-lg-6">
                          <label class="">Longitude :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="106.821810" disabled>
                      </div>
                      </div>
					  
					  
                      </div>
					  
					  
					
									</div>
									
									</div>
									
									
                    </div>
					<div class="form-group row">
					
					
                    </div>
                    </div>
					
					
					
					
					
					
					
					
								
					
										<div class="col-xl-7">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kesepakatan Baru</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

											<div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="3%" bgcolor="#f7fcff">Jenis<br>Kendaraan</td>
																									<td width="1%" bgcolor="#f7fcff">Daya<br>Tampung</td>
																									<td width="11%" bgcolor="#f7fcff">Satuan Tarif</td>
																									<td width="5%" bgcolor="#f7fcff">Durasi</td>
																									<td width="12%" bgcolor="#f7fcff">Nominal</td>
																									<td width="5%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr>
																								  <td style="text-align:center">1</td>
																								  <td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Roda 2</option>
                              <option value="AK">Roda 4</option>
                            </select></td>
																									<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="2"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2 Durasi"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																								  <td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Roda 2</option>
                              <option value="AK" selected>Roda 4</option>
                            </select></td>
																									<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="2"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2 Durasi"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								

																								
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="7">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
													<table class="table table-responsive  table-hover table-checkable" id="kt_table_2">
  <tr>
    <td width="24%" style="text-align:right" bgcolor="#f7fcff"><b>TOTAL KEWAJIBAN PERBULAN</b></td>
    <td width="12%" bgcolor="#f7fcff" colspan="-4" style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    </tr>
  
 
</table>
									</div>
									</div>
									</div>

									<!--end::Portlet-->


								
								
								
					
					
					
					
								
					
                    </div>
					
					
					
					
					
								
					
                    </div>
					
							<!--end:: Portlet-->
							
					
					
							<!--end:: Portlet-->


										</div>
        </div>
            </div>


									<!--End::Portlet-->
								</div>

									<!--end:: Widgets/Notifications-->
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>

						<!-- end:: Content -->
					</div>

  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>
<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
