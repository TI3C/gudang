
            <div class="row">
                <div class="col-lg-12">
<div align="right" style="float:right">

</div>
</div>

                <br />

                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            DATA MEMBER
                        </div>
						<br/>
						
						<br/><br/>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" style="width: 100%;" align="center">
                                    <thead >
                                        <tr >
                                            <th>No</th>
                                            <th>Kode Pegawai</th>
											<th>Nama</th>
                                            <th>Jenis Kelamin</th>
											<th>Telepon</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
											<th>Bagian</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
	$no = 1;
?>    
    <?php
	foreach($user as $data){
		echo "<tr align=center>
			<td>" . $no . "</td> 
			<td>" . $data['Kd_Pegawai'] . "</td>
			<td>" . $data['Nama'] . "</td>
			<td>" . $data['Jenis_Kelamin'] . "</td>
			<td>" . $data['Telpon'] . "</td>
			<td>" . $data['Alamat'] . "</td>
			<td>" . $data['Status'] . "</td>
			<td>" . $data['Bagian'] . "</td>
			<td> 
				 <a href=" . base_url() ."users/edituser/" .$data['Kd_Pegawai'].">Edit</a> | 
				 <a href=" . base_url() ."users/deleteuser/" .$data['Kd_Pegawai'].">Delete</a></td>
			</tr>";
			$no++;
	}
	?>
                                    </tbody>
                                </table>
         <div class='btn-group'>
                <a href="<?= base_url()?>users/adduser/" class='btn btn-success'>Tambah Data</a>
        </div>
                          </div>
                        </div>
                    </div>
                  
                </div>
                
            </div>
        </div>
       

    </div>
    
</body>

</html>
