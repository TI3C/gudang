<br/><div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
<h3 class="page-header" align="center">EDIT MEMBER
                    
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
                                    <form role="form" method="post" action="<?php echo base_url()?>users/edituser/<?=$user['Kd_Pegawai']?>">
									    <div class="form-group">
											<label>Nama</label>
                                            <input class="form-control" name="nama" value="<?=$user['Nama']?>">
                                        </div>
										<div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" value="<?=$user['Jenis_Kelamin']?>">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" name="telpon" value="<?=$user['Telpon']?>">
                                        </div>						
										<div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?=$user['Alamat']?>">
                                        </div>
										<div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status" value="<?=$user['Status']?>">
                                                <option>Belum Menikah</option>
                                                <option>Menikah</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label>Bagian</label>
                                            <select class="form-control" name="bagian" value="<?=$user['Bagian']?>">
                                                <option>Gudang</option>
                                                <option>Kepegawaian</option>
                                                <option>Produksi</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" value="<?=$user['username']?>">
                                        </div>						
										<div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" value="<?=$user['password']?>">
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
