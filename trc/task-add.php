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
											Form Buat Tugas Baru
									</h3>

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
					
					<div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pejabat Pembuat Tugas</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-3">
                          <label>Nama Pejabat :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Nama Pegawai">
                        </div>
						
<div class="col-lg-1">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-1">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
                       
                       <div class="col-lg-2">
                          <label>Department :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                        </div>
						 <div class="col-lg-2">
                          <label>Bagian :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                        </div>
						
<div class="col-lg-3">
                          <label>Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">
                        </div>
						
                       
                        </div>
						
                      </div>
					  
                    </div>
					
					<div class="row">
					<div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pemberi Tugas</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-3">
                          <label>Nama Pejabat :</label>
                           <div class="form-group">

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
                        </div>
						
<div class="col-lg-1">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-1">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
                       
                       <div class="col-lg-2">
                          <label>Department :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                        </div>
						 <div class="col-lg-2">
                          <label>Bagian :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                        </div>
						
<div class="col-lg-3">
                          <label>Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">
                        </div>
						
                       
                        </div>
						
                      </div>
                    </div>
                    </div>
					<div class="col-lg-8">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pelaksana Tugas</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       
						<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="2%" bgcolor="#f7fcff">Nama Pegawai</td>
																									<td width="4%" bgcolor="#f7fcff">Department</td>
																									<td width="6%" bgcolor="#f7fcff">Bagian</td>
																									<td width="15%" bgcolor="#f7fcff">Jabatan</td>
																									<td width="1%" bgcolor="#f7fcff">Status Pegawai</td>
																									<td width="2%" bgcolor="#f7fcff">Kantor</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:center">
																										<div class="form-group">

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
					                       </div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									</tr>
																								<tr>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:center">
																										<div class="form-group">

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
					                       </div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum"></td>
   <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									</tr>
																								<tr>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:center">
																										<div class="form-group">

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
					                       </div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum"></td>
   <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									</tr>
																								
																								<tr>
																								  <td style="text-align:center">4</td>
																									<td style="text-align:center">
																										<div class="form-group">

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
					                       </div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha dan Kerjasama"></td>
   <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									</tr>
																								
																								

																								<tr data-repeater-item>
																								  <td style="text-align:center">5</td>
																									<td style="text-align:center">
																										<div class="form-group">

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
					                       </div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
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
						
                      </div>
                    </div>
                    </div>
					<div class="col-lg-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Uraian Tugas</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  <div class="col-lg-6">
                          <label class="">No. Surat Tugas :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="097/TASK/PMR/XII/2023">
                        </div>
						<div class="col-lg-6">
                          <label class="">Kategori Tugas :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
							                              <option value="2">Keuangan</option>
							                              <option value="3">Operasional</option>
							                              <option value="3">Administrasi</option>
							                              <option value="4">Kepegawaian</option>
							                              <option value="4">Team Reaksi Cepat</option>
							                          </select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
					  <div class="col-lg-6">
                          <label class="">Tanggal Awal Tugas :</label>
                          <div class="input-group">
							                        <input type="text" class="form-control kt_datepicker_2_modal" readonly="" placeholder="Select date">
							                        <div class="input-group-append">
							                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
							                        </div>
							                      </div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Tanggal Akhir Tugas :</label>
                          <div class="input-group">
							                        <input type="text" class="form-control kt_datepicker_2_modal" readonly="" placeholder="Select date">
							                        <div class="input-group-append">
							                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
							                        </div>
							                      </div>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  <div class="form-group row">
						
                        <div class="col-lg-12">
                          <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Uraian</td>
																								   <td width="80px" bgcolor="#f7fcff">Bobot</td>
																								   <td width="50px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Uraian Tugas 1"></textarea></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="10"></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Uraian Tugas 2"></textarea></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="10"></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
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
