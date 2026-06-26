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
											Detail Pengunjung
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
                      <div class="row">
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Pengunjung</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-4">
                          <label>No Identitas ( KTP / SIM ) :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7371123001864515">
                        </div>

                        <div class="col-lg-4">
                          <label>Nama Lengkap :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">
                        </div>

                        <div class="col-lg-4">
                          <label>No. Tlp / WA :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="082244444436">
                        </div>
						 
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  <div class="form-group row">
                       <div class="col-lg-4">
                          <label>Alamat:</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Jl. Toddopuli Raya Timur">
                        </div>

                        <div class="col-lg-4">
                          <label>&nbsp;</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kompleks Villa Surya Mas J/9">
                        </div>

                        <div class="col-lg-2">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="005">
                        </div>
						<div class="col-lg-2">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="003">
                        </div>
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                        <div class="col-lg-4">
                          <label>Kelurahan :</label>
                       <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Borong">
                        </div>
                        <div class="col-lg-4">
                          <label class="">Kecamatan :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Manggala">
                      </div>
					  <div class="col-lg-4">
                          <label class="">File KTP :</label>
                           <div>
                      <a href="#" class="btn btn-brand m-btn btn-sm 	m-btn m-btn--icon">
															<span>
																<i class="la la-arrow-circle-o-down"></i>
																<span>Download File</span>
															</span>
														</a>
                        </div>
                      </div>
                        </div>
                        
                      </div>
                    </div>
							<!--end:: Portlet-->

									
										</div>


								<div class="col-xl-3">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kunjungan</div><br>
										<div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-6">
                          <label>Tanggal :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12 Agustus 2023">
                        </div>
						 <div class="col-lg-6">
                          <label>Jam Datang :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="14:30:00 WITA">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Department :</label>
<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Bagian :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                        </div>
						
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Nama Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE">
                        </div>
                     
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Maksud Kunjungan :</label>
                          <textarea class="form-control" id="exampleTextarea" disabled="disabled" rows="4">Silaturahmi</textarea>
                        </div>
						
                        </div>
						
						 

					 

						 
                    

						 
                     
                      </div>
					  
                        

									<!--end::Portlet-->
								</div>
								</div>
								<div class="col-xl-3">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pejabat Pembuat</div><br>
										<div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-7">
                          <label>Nama Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">
                        </div>
						<div class="col-lg-5">
                          <label>NIP Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>
                        </div>
						 

					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Department :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
						
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Bagian :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan">
                        </div>
						
                      </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Pemetaan dan Pengembangan">
                        </div>
						
                      </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-6">
                          <label>Pangkat / Golongan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pena">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                      </div>
                     
                      </div>
                        

									<!--end::Portlet-->
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
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
