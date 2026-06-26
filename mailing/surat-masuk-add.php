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
											Form Surat Masuk
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="surat-masuk.php" class="btn btn-label-primary btn-sm">
					<i class="flaticon-reply"></i> Kembali</button>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
				&nbsp;
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Simpan Data</span>
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
                     
							
								<!--end: Form Wizard Nav -->
								
											<div class="row">
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Atribut Surat Masuk</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-6">
                          <label>Jenis Surat :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
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
                          <select class="form-control kt-selectpicker" data-live-search="true">
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
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">External</option>
                              <option value="3">Internal</option>
                              
                          </select>
                        </div>
<div class="col-lg-6">
                          <label>Klasifikasi Surat :</label>
                         <select class="form-control kt-select2 form-control-sm" id="kt_select2_4" name="param">
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
										<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Korespondensi Surat Masuk</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>No Surat Keluar :</label>
                          <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Cari Surat Keluar..." id="generalSearch">
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
										<div class="col-xl-3">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">File Soft Copy</div><br>
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
										<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Surat Masuk</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-3">
                          <label>No. Agenda Surat :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HM.003/12/3/2017">
                        </div>
<div class="col-lg-3">
                          <label class="">Tanggal Surat :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Pengirim :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="Isikan Pengirim Surat">
                        </div>
                       
                        </div>
						
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-6">
                          <label class="">No Surat :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="Isikan No. Surat">
                        </div>
<div class="col-lg-6">
                          <label>Tujuan Surat :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">
                        </div>
                       
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label class="">Perihal:</label>
                         <input type="text" class="form-control form-control-sm" placeholder="Isikan Perihal Surat">
                        </div>

                       
                        </div>
						
                      </div>
                    </div>
							<!--end:: Portlet-->


										</div>
										<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Keterangan</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Ringkasan Surat :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="10"></textarea>
                        </div>
                      </div>
                      </div>
                    </div>
					
							<!--end:: Portlet-->
										</div>

										
										<div class="col-xl-3">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lampiran Surat</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Upload Surat Masuk :</label>
                          <div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_3">
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

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													

												<!--end: Form Wizard Form-->
											</div>
										</div>
									</div>
								</div>
							</div>
					


                    </div>
					<!--begin::Modal 1-->
									
							<!--End::Modal 2-->

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
<?php require '../layouts/foot.php' ?>
