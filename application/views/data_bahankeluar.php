
            <div class="row">
                <div class="col-lg-12">
<div align="right" style="float:right">

</div>
</div>

                <br />
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            DATA BAHAN KELUAR
                        </div>
						<br/>
						
						<br/>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" style="width: 80%;" align="center">
                                    <thead >
                                        <tr >
                                            <th>No</th>
                                            <th>Kode Bahan Keluar</th>
                                            <th>Tanggal Keluar</th>
											<th>Kode Pegawai</th>
											<th>Kode Jenis</th>
											<th>Jumlah Keluar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tbody>
                                        
										
	<?php
	$no = 1;
	?>    
    <?php
	foreach($brgklr as $data){
		echo "<tr align=center>
			<td>" . $no . "</td> 
			<td>" . $data['Kd_BahanKeluar'] . "</td>
			<td>" . $data['Tgl_Keluar'] . "</td>
			<td>" . $data['Kd_Pegawai'] . "</td>
			<td>" . $data['Kd_JenisBahan'] . "</td>
			<td>" . $data['Jumlah'] . "</td>
			
			<td> 
				 <a href=" . base_url() ."brgklrs/editbahankeluar/" .$data['Kd_BahanKeluar'].">Edit</a> | 
				 <a href=" . base_url() ."brgklrs/deletebahankeluar/" .$data['Kd_BahanKeluar'].">Delete</a></td>
			</tr>";
			$no++;
	}
	?>
                                    </tbody>
                                </table>
        <center><div class='btn-group'>
                <a href="<?= base_url()?>brgklrs/addbahankeluar/" class='btn btn-success'>Tambah Data</a>
        </div></center>
                          </div>
                        </div>
                    </div>
              
                </div>
                
            </div>
        </div>

    </div>

</body>

</html>
