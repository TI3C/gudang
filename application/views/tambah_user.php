<br/><div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                </div>
                 <!-- end  page header -->
            </div>

            <div class="row">
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            FORM TAMBAH MEMBER
                        </div>
						<br/>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6" >
                                    
                                    <form role="form" method="post" action="<?php echo base_url()?>users/adduser" enctype="multipart/form-data" >
									    <div class="form-group">
                                            <label name="Kd_pegawai">Kode Pegawai</label>
                                            <input class="form-control" placeholder="Masukkan Kode Pegawai" name="kd_pegawai">
                                            <?php echo "<span style ='color:red;'>".form_error('kd_pegawai')."</span>"?>
                                        </div>
                                        <div class="form-group">
                                            <label name="Nama">Nama</label>
                                            <input class="form-control" placeholder="Masukkan Nama" name="nama" type="date">
                                            <?php echo "<span style ='color:red;'>".form_error('nama')."</span>"?>
                                        </div>
										<div class="form-group">
                                            <label name="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label name="Telpon">Telepon</label>
                                            <input class="form-control" placeholder="Masukkan Nomor Telepon" name="telpon">
                                            <?php echo "<span style ='color:red;'>".form_error('telpon')."</span>"?>
                                        </div>                                
                                        <div class="form-group">
                                            <label name="Alamat">Alamat</label>
                                            <input class="form-control" placeholder="Masukkan Alamat" name="alamat">
                                            <?php echo "<span style ='color:red;'>".form_error('alamat')."</span>"?>
                                        </div>
										<div class="form-group">
                                            <label name="Status">Status</label>
                                            <select class="form-control" name="status">
                                                <option>Belum Menikah</option>
                                                <option>Menikah</option>
											</select>
                                        </div>
										<div class="form-group">
                                            <label name="Bagian">Bagian</label>
                                            <select class="form-control" name="bagian">
                                                <option>Gudang</option>
                                                <option>Kepegawaian</option>
                                                <option>Produksi</option>
											</select>
                                        </div>										
                                        <div class="form-group">
                                            <label name="Username">Username</label>
                                            <input class="form-control" placeholder="Masukkan Username" name="username">
                                            <?php echo "<span style ='color:red;'>".form_error('username')."</span>"?>
                                        </div>
										<div class="form-group">
                                            <label name="Password">Password</label>
                                            <input class="form-control" placeholder="Masukkan Password" name="password">
                                            <?php echo "<span style ='color:red;'>".form_error('password')."</span>"?>
                                        </div>                                
                                        <div class="form-group">
                                            <label name="Level">Level</label>
                                             <select class="form-control" name="level">
                                                <option>ADMIN</option>
                                                <option>USER</option>
											</select>
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
