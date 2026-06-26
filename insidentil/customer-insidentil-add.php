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
											Form Tambah Customer Insidentil
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Customer</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						 <div class="col-lg-6">
                          <label>ID Customer Insidentil :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="0000001CI823" disabled>
                        </div>
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                      
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Badan Usaha :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Tipe Badan Usaha :</label>
                           <select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>PT</option>
														<option>CV</option>
														<option>Koperasi</option>
														<option>Firma</option>
														</select>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Tipe Customer :</label>
                           <select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Silver</option>
														<option>Gold</option>
														<option>Platinum</option>
														</select>
                        </div>
                        </div>
						
						
						
					 
                    
									 
                      </div>	
					  
					   

<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-4">
					                           <label>Email :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx">
					                         </div>
						<div class="col-lg-4">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  <div class="col-lg-4">
                          <label class="">Whatsapp :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
                      </div>
					   <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="form-group row">
					  

									
						<div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> NPWP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  <div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Logo Badan Usaha :</label>
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
					<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Badan Usaha</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="Jl. Toddopuli Raya Timur">

                        </div>
						
						
						
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-12">
                         <input type="text" class="form-control form-control-sm"  placeholder="Jl. Toddopuli Raya Timur">

                        </div>
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Kode Pos</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="90000">

                        </div>
						<div class="col-lg-3">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="003">
                        </div>
						<div class="col-lg-3">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="005">
                        </div>
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                        <div class="col-lg-6">
                          
                                <label>Kecamatan :</label>
								
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
						<div class="col-lg-6">
                          
                                <label>Kelurahan :</label>
								
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

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                        <div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> Kota :</label>
                        <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Makassar</option>
                                      <option value="2">Maros</option>
                                     
                                  </select>
                      </div>
						<div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> No. Handphone :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm"  placeholder="082244444436">
                      </div>
                        </div>

                        </div>




											</div>

										</div>

									</div>
									

									
									</div>
									<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Zonasi Customer</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
								 <div class="form-group row">
								<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Titik Parkir :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>			
                        </div>			
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>						
                     <div class="form-group row">
                      
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Alamat Titik Parkir :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <label>Kode Pos :</label>
                           <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-8">
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <button type="button" class="btn btn-sm btn-brand" data-toggle="modal" data-target="#modal_peta">Lihat Peta</button>
                        </div>
						
						
						
                        </div>
						
						
					 
                    
									 
					  
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-6">
					                           <label>Latitude :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="">
					                         </div>
						<div class="col-lg-6">
                          <label class="">Longitude :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  
					  
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-6">
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
						<div class="col-lg-6">
                          <label class="">Wilayah :</label>
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
					  
					  
                      </div>
						
						
					 
                    
									 
					  

					  
					  
					
									</div>
									
									</div>
									
									
                    </div>
					<div class="form-group row">
					
					
                    </div>
                    </div>
					<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Penanggung Jawab</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     <div class="form-group row">
                      
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> No. Identitas KTP :</label>
                           <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                            <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Pimpinan</option>
                              <option value="3">Direktur Utama</option>
                              <option value="3">Direktur</option>
                              <option value="3">Lainnya</option>

                          </select>
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Alamat :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-4">
                          <label>Kode Pos :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
						
						
                        </div>
						
						
					 
                    
									 
					  
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-4">
					                           <label>Email :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx">
					                         </div>
						<div class="col-lg-4">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  <div class="col-lg-4">
                          <label class="">Whatsapp :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto Badan Usaha</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     <div class="form-group row">
                      
						<div class="col-lg-12">
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
