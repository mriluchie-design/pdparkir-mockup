<?php require '../layouts/head.php' ?>
<link href="../assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
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
											Detail Surat
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
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
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

								<!--begin: Form Wizard Nav -->
								<div class="kt-wizard-v4__nav">
									<div class="kt-wizard-v4__nav-items">

										<!--doc: Replace A tag with SPAN tag to disable the step link click -->
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-envelope"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Surat Masuk
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														1
													</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-browser"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Form
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Surat Masuk
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													2
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-user"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Penerima
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Surat Masuk
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-users-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Tembusan
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Surat Masuk
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													4
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-folder-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Berkas
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Surat Masuk
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													5
												</div>
											</div>
										</div>


									</div>
								</div>

								<!--end: Form Wizard Nav -->
								<div class="kt-portlet">
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<!--begin: Form Wizard Step 1-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet">
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 12px; right: -2px;">
												 Last Update 2022
											</div>
											<div class="kt-portlet__head-label">
												
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit-top">
											<img src="../assets/img/surat.png" />
										</div>
									</div>
							<!--end:: Portlet-->

									<!--begin::Portlet-->
										
                      </div>

                      </div>
                    </div>
							<!--end:: Portlet-->
										</div>



								</div>
														</div>
													</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
																<div class="row">
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Atribut Surat Masuk</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-6">
                          <label>Jenis Surat :</label>
                          <select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="2">Pribadi</option>
                              <option value="3">Surat Dinas</option>
                              <option value="3">Surat Edaran</option>
                              <option value="3">Surat Pemberitahuan</option>
                              <option value="3">Surat Pengantar</option>
                              <option value="3">Umum</option>
                              <option value="3">Undangan</option>
                          </select>
                        </div>
<div class="col-lg-6">
                          <label>Sifat Surat :</label>
                          <select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="2">Biasa</option>
                              <option value="3">Penting</option>
                              <option value="3">Rahasia</option>
                              <option value="3">Sangat Penting</option>
                              <option value="3">Segera</option>
                          </select>
                        </div>
                       
                        </div>
						
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-6">
                          <label>Asal Surat :</label>
                          <select class="form-control kt-selectpicker" disabled="disabled" data-live-search="true">
                              <option value="2">External</option>
                              <option value="3">Internal</option>
                              
                          </select>
                        </div>
<div class="col-lg-6">
                          <label>Klasifikasi Surat :</label>
                         <select class="form-control kt-select2 form-control-sm" id="kt_select2_4" name="param" disabled="disabled">
					 															<optgroup label="Hukum">
					 																<option value="AK">HK.001 - Undang Undang Dasar (UUD)/PERPU</option>
					 																<option value="AK">HK.002 - Peraturan Pemerintah</option>
					 																<option value="AK" selected>HK.101 - Peraturan Direksi</option>
					 																<option value="AK">HK.102 - Keputusan Direksi</option>
					 																
					 															</optgroup>
<optgroup label="Kesekretariatan dan Kehumasan">
					 																<option value="AK">Ketatausahaan</option>
					 																<option value="AK">Perpustakaan</option>
					 																
					 															</optgroup>
																				
					 														</select>
                        </div>
                       
                        </div>
						
                      </div>
                    </div>
							<!--end:: Portlet-->


										</div>
										<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Korespondensi Surat Masuk</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-6">
                          <label>No Surat Keluar :</label>
                          <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Cari Surat Keluar..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
                        </div>
                        </div>

						
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       

                       
                        </div>
						
                      </div>
                    </div>
							<!--end:: Portlet-->


										</div>
										<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Surat Masuk</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-6">
                          <label>No. Agenda Surat :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Generate">
                        </div>
<div class="col-lg-6">
                          <label class="">Tanggal Surat :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" disabled="disabled" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
                       
                        </div>
						
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-6">
                          <label class="">No Surat :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Isikan No. Surat">
                        </div>
<div class="col-lg-6">
                          <label>Tujuan Surat :</label>
                           <select class="form-control kt-select2 form-control-sm" id="kt_select2_3" name="param" disabled="disabled">
					 															<optgroup label="Direksi">
					 																<option value="AK">Maghfirah Sharifuddin Andy Omar, S.Psi</option>
					 																<option value="AK" selected>Deddy Rafsanjani, S.Sos</option>
					 																
					 															</optgroup>
<optgroup label="Bagian Umum dan Kepegawaian">
					 																<option value="AK">Maghfirah Sharifuddin Andy Omar, S.Psi</option>
					 																<option value="AK" selected>Deddy Rafsanjani, S.Sos</option>
					 																
					 															</optgroup>
																				<optgroup label="Bagian Hukum dan Humas">
					 																<option value="AK">Maghfirah Sharifuddin Andy Omar, S.Psi</option>
					 																<option value="AK" selected>Deddy Rafsanjani, S.Sos</option>
					 																
					 															</optgroup>
																				<optgroup label="Bagian Keuangan">
					 																<option value="AK">Maghfirah Sharifuddin Andy Omar, S.Psi</option>
					 																<option value="AK" selected>Deddy Rafsanjani, S.Sos</option>
					 																
					 															</optgroup>
																				<optgroup label="Bagian Asset">
					 																<option value="AK">Maghfirah Sharifuddin Andy Omar, S.Psi</option>
					 																<option value="AK" selected>Deddy Rafsanjani, S.Sos</option>
					 																
					 															</optgroup>
																				<optgroup label="Bagian Pengelolaan">
					 																<option value="AK">Maghfirah Sharifuddin Andy Omar, S.Psi</option>
					 																<option value="AK" selected>Deddy Rafsanjani, S.Sos</option>
					 																
					 															</optgroup>
																				<optgroup label="Bagian Produksi">
					 																<option value="AK">Maghfirah Sharifuddin Andy Omar, S.Psi</option>
					 																<option value="AK" selected>Deddy Rafsanjani, S.Sos</option>
					 																
					 															</optgroup>
																				<optgroup label="Bagian Pengembangan">
					 																<option value="AK">Maghfirah Sharifuddin Andy Omar, S.Psi</option>
					 																<option value="AK" selected>Deddy Rafsanjani, S.Sos</option>
					 																
					 															</optgroup>
																				<optgroup label="Bagian Kerjasama">
					 																<option value="AK">Maghfirah Sharifuddin Andy Omar, S.Psi</option>
					 																<option value="AK" selected>Deddy Rafsanjani, S.Sos</option>
					 																
					 															</optgroup>
					 														</select>
                        </div>
                       
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label class="">Perihal:</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Isikan No. Surat">
                        </div>
<div class="col-lg-6">
                          <label>Lampiran Surat :</label>
                           <div class="dropzone dropzone-default dropzone-brand dz-clickable" disabled="disabled" id="kt_dropzone_1">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
													</div>
												</div>
                        </div>
                       
                        </div>
						
                      </div>
                    </div>
							<!--end:: Portlet-->


										</div>
										<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Keterangan</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Ringkasan Surat :</label>
                          <textarea class="form-control" disabled="disabled" id="exampleTextarea" rows="15"></textarea>
                        </div>
                      </div>
                      </div>
                    </div>
							<!--end:: Portlet-->
										</div>
										<div class="col-xl-3">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">File Soft Copy</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Upload Surat Masuk :</label>
                          <div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
													</div>
												</div>
                        </div>
                      </div>

                      </div>
                    </div>
							<!--end:: Portlet-->


										</div>



								</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="4%" bgcolor="#f7fcff">Nama</th>
												<th width="2%" bgcolor="#f7fcff">NIP</th>
												<th width="2%" bgcolor="#f7fcff">Jabatan</th>
												<th width="2%" bgcolor="#f7fcff">Divisi</th>
												<th width="2%" bgcolor="#f7fcff">Tanggal Terima</th>
												
											</tr>
											
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center">1</td>
												<td style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:center">220187222222<td>
												<td style="text-align:center">Direksi</td>
												<td style="text-align:center">Jumat, 28 Juli 2017</td>
												
										  </tr>
											<tr>
												<td style="text-align:center" >2</td>
												<td style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:center">220187222222<td>
												<td style="text-align:center">Direksi</td>
												<td style="text-align:center">Jumat, 28 Juli 2017</td>
												
										  </tr>
										</tbody>
									</table>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="4%" bgcolor="#f7fcff">Nama</th>
												<th width="2%" bgcolor="#f7fcff">NIP</th>
												<th width="2%" bgcolor="#f7fcff">Jabatan</th>
												<th width="2%" bgcolor="#f7fcff">Divisi</th>
												
											</tr>
											
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center">1</td>
												<td style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:center">220187222222<td>
												<td style="text-align:center">Direksi</td>
												
										  </tr>
											
										</tbody>
									</table>

													<!--end: Form Wizard Step 4-->
													<!--begin: Form Wizard Step 5-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="4%" bgcolor="#f7fcff">Nama</th>
												<th width="2%" bgcolor="#f7fcff">NIP</th>
												<th width="2%" bgcolor="#f7fcff">Jabatan</th>
												<th width="2%" bgcolor="#f7fcff">Divisi</th>
												
											</tr>
											
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center">1</td>
												<td style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:center">220187222222<td>
												<td style="text-align:center">Direksi</td>
												
										  </tr>
											
										</tbody>
									</table>

													<!--end: Form Wizard Step 5-->

													
												</form>

												<!--end: Form Wizard Form-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


                    </div>

									</div>
									</div>

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
<script src="../assets/dist/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./../assets/js/pages/custom/wizard/wizard-4.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
