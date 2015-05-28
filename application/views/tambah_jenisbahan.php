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
                            FORM TAMBAH JENIS BAHAN
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6" >
                                    
                                    <form role="form" method="post" action="<?php echo base_url()?>barangs/addjenisbahan" enctype="multipart/form-data" >
									    <div class="form-group">
                                            <label name="Kd_jenis">Kode Jenis</label>
                                            <input class="form-control" placeholder="Masukkan Kode Jenis" name="kd_jenis">
                                            <?php echo "<span style ='color:red;'>".form_error('kd_jenis')."</span>"?>
                                        </div>
                                        <div class="form-group">
                                            <label name="Keterangan">Keterangan</label>
                                            <input class="form-control" placeholder="Masukkan Keterangan Bahan" name="keterangan">
                                            <?php echo "<span style ='color:red;'>".form_error('namabarang')."</span>"?>
                                        </div>
                                        <div class="form-group">
                                            <label name="Jumlah">Jumlah</label>
                                            <input class="form-control" placeholder="Masukkan Jumlah Barang" name="jumlah" value="0" readonly>
                                            <?php echo "<span style ='color:red;'>".form_error('jumlah')."</span>"?>
                                        </div>
                                        <div class="form-group">
                                            <label name="Satuan">Satuan</label>
                                            <input class="form-control" placeholder="Tulis Satuan Bahan" name="satuan">
                                            <?php echo "<span style ='color:red;'>".form_error('satuan')."</span>"?>
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
