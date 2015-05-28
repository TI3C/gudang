<br/><div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                </div>
                 <!-- end  page header -->
            </div>
<br/><br/>	
			
            <div class="row">
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            FORM TAMBAH BAHAN KELUAR
                        </div>
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6" >
                                    
                                    <form role="form" method="post" action="<?php echo base_url()?>brgklrs/addbahankeluar" enctype="multipart/form-data" >
									    <div class="form-group">
                                            <label name="Kd_bahankeluar">Kode Bahan Keluar</label>
                                            <input class="form-control" placeholder="Masukkan Kode Bahan Masuk" name="kd_bahankeluar">
                                            <?php echo "<span style ='color:red;'>".form_error('kd_bahankeluar')."</span>"?>
                                        </div>
                                        <div class="form-group">
                                            <label name="Tgl_keluar">Tanggal Keluar</label>
                                            <input class="form-control" placeholder="Tanggal Keluar Bahan" name="tgl_keluar" type="date">
                                            <?php echo "<span style ='color:red;'>".form_error('tgl_keluar')."</span>"?>
                                        </div>
										<div class="form-group">
                                            <label name="Kd_Pegawai">Kode Pegawai</label>
                                            <input class="form-control" name="kd_pegawai">
                                            <?php echo "<span style ='color:red;'>".form_error('kd_pegawai')."</span>"?>
                                        </div>
                                        <div class="form-group">
                                            <label name="Kd_jenis">Kode Jenis</label>
                                            <select class="form-control" placeholder="Masukkan Kode Jenis" name="kd_jenis">
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
                                            <label name="Jumlah">Jumlah</label>
                                            <input class="form-control" placeholder="Masukkan Jumlah Bahan" name="jumlah">
                                            <?php echo "<span style ='color:red;'>".form_error('jumlah')."</span>"?>
                                        </div>
										<button type="submit" class="btn btn-primary" name="submit">Tambah</button>
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
