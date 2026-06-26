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
											Detail Nota Dinas
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
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
                     
							
								<!--end: Form Wizard Nav -->
								
											<div class="row">
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Atribut Nota Dinas</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  <div class="col-lg-6">
                          <label>No. Nota Dinas</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="001/NODIN">
                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>Dari :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum">
                        </div>
<div class="col-lg-6">
                          <label>Kepada :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">
                        </div>
                       
                        </div>
						
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Perihal :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengadaan Map Perumda Parkir">
                        </div>

                       
                        </div>
						
                      </div>
                    </div>
							<!--end:: Portlet-->


										</div>
										<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pembuat Nota Dinas</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-4">
                          <label>Nama Pegawai :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">
                        </div>
						<div class="col-lg-4">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>
						<div class="col-lg-4">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
                        </div>

						
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-4">
                          <label>Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian">
                        </div>
						<div class="col-lg-4">
                          <label>Bagian :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum">
                        </div>
						<div class="col-lg-4">
                          <label>Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian">
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
                          <label>Ringkasan Nota Dinas :</label>
                          <textarea class="form-control" id="exampleTextarea" disabled="disabled" rows="10"></textarea>
                        </div>
                      </div>
                      </div>
                    </div>
							<!--end:: Portlet-->
										</div>
										<div class="col-xl-3">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lampiran</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          
                          <label>Lampiran Nota Dinas :</label>
                            <div><a href="#" class="btn btn-outline-primary btn-sm 	m-btn m-btn--icon">
															<span>
																<i class="fa fa-archive"></i>
																<span>Download File</span>
															</span>
														</a>
                        </div>
                        </div>
                        </div>
                      </div>

                      </div>
                    </div>
					<div class="col-xl-6">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Catatan Direktur Utama</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          
                          <textarea class="form-control" id="exampleTextarea" disabled="disabled" rows="10"></textarea>
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
