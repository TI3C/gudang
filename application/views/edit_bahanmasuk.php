<br/><div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
<h3 class="page-header" align="center">EDIT BAHAN MASUK
                    
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
                                    <form role="form" method="post" action="<?php echo base_url()?>brgmsks/editbahanmasuk/<?=$brgmsk['Kd_Bahan']?>">
									    <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input class="form-control" name="tgl_masuk" value="<?=$brgmsk['Tgl_Beli']?>">
                                        </div>
										<div class="form-group">
                                            <label>Nominal</label>
                                            <input class="form-control" name="nominal" value="<?=$brgmsk['Nominal']?>">
                                        </div>
										<div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" name="jumlah" value="<?=$brgmsk['Jumlah']?>">
                                        </div>
										<div class="form-group">
                                            <label name="Kd_jenis">Kode Jenis</label>
                                            <select class="form-control" placeholder="Masukkan Kode Jenis" name="kd_jenis">
<?php                                            	foreach($barang as $data){
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
                                            <label>Kode Pemasok</label>
                                            <input class="form-control" name="kd_pemasok" value="<?=$brgmsk['Kd_Pemasok']?>">
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
