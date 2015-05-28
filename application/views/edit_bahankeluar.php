<br/><div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
<h3 class="page-header" align="center">EDIT BAHAN KELUAR
                    
                    </h3>
                </div>
                 <!-- end  page header -->
            </div>

            <div class="row">
            <div class="col-lg-12">
                    <div class="panel panel-default">
                     
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php echo base_url()?>brgklrs/editbahankeluar/<?=$brgklr['Kd_BahanKeluar']?>">
									    <div class="form-group">
                                            <label>Tanggal Keluar</label>
                                            <input class="form-control" name="tgl_keluar" value="<?=$brgklr['Tgl_Keluar']?>">
                                        </div>
										<div class="form-group">
                                            <label>Kode Pegawai</label>
                                            <input class="form-control" name="kd_pegawai" value="<?=$brgklr['Kd_Pegawai']?>">
                                        </div>
										<div class="form-group">
                                            <label name="Kd_jenis">Kode Jenis</label>
                                            <select class="form-control" name="kd_jenis">
											<?php 
												foreach($barang as $data){
											?>
											<option value='<?=$data['Kd_JenisBahan']?>'>
												<?=$data['Kd_JenisBahan']?>-&nbsp;<?=$data['Keterangan']?>
											</option>
											<?php
												}
											?>
											</select>
											<?php echo "<span style ='color:red;'>".form_error('kd_jenis')."</span>"?>
                                        </div>
										<div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" name="jumlah" value="<?=$brgklr['Jumlah']?>">
                                        </div>
										
										
                                      
                                        <button type="submit" class="btn btn-primary" name="submit">Edit</button>
                                        <button type="reset" class="btn btn-success">Reset</button>
                                    </form>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
   
</body>

</html>
