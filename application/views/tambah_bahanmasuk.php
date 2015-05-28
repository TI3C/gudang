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
                            FORM TAMBAH BAHAN MASUK
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6" >
                                    
                                    <form role="form" method="post" action="<?php echo base_url()?>brgmsks/addbahanmasuk" enctype="multipart/form-data" >
									    <div class="form-group">
                                            <label name="Kd_bahan">Kode Bahan Masuk</label>
                                            <input class="form-control" placeholder="Masukkan Kode Bahan Masuk" name="kd_bahan">
                                            <?php echo "<span style ='color:red;'>".form_error('kd_bahan')."</span>"?>
                                        </div>
                                        <div class="form-group">
                                            <label name="Tgl_masuk">Tanggal Masuk</label>
                                            <input class="form-control" placeholder="Tanggal Masuk Bahan" name="tgl_masuk" type="date">
                                            <?php echo "<span style ='color:red;'>".form_error('tgl_masuk')."</span>"?>
                                        </div>
										<div class="form-group">
                                            <label name="Nominal">Nominal</label>
                                            <input class="form-control" placeholder="Masukkan Nominal Harga" name="nominal">
                                            <?php echo "<span style ='color:red;'>".form_error('nominal')."</span>"?>
                                        </div>
										<div class="form-group">
                                            <label name="Jumlah">Jumlah</label>
                                            <input class="form-control" placeholder="Masukkan Jumlah Bahan" name="jumlah">
                                            <?php echo "<span style ='color:red;'>".form_error('jumlah')."</span>"?>
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
                                            <label name="Kd_pemasok">Kode Pemasok</label>
                                            <input class="form-control" placeholder="Masukkan Kode Pemasok" name="kd_pemasok">
                                            <?php echo "<span style ='color:red;'>".form_error('kd_pemasok')."</span>"?>
                                        </div>
										  
                                        <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                                        <button type="reset" class="btn btn-success">Reset</button>
                                    </form>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                 
                
            </div>
        </div>
   

    </div>

   
</body>

</html>
