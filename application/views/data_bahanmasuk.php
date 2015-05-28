
            <div class="row">
                <div class="col-lg-12">
<div align="right" style="float:right">

</div>
</div>

                <br />

                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            DATA BAHAN MASUK
                        </div>
						<br/>
						
						<br/>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" style="width: 80%;" align="center">
                                    <thead >
                                        <tr >
                                            <th>No</th>
                                            <th>Kode Bahan</th>
                                            <th>Tanggal Masuk</th>
											<th>Nominal</th>
                                            <th>Jumlah</th>
											<th>Kode Jenis</th>
											<th>Kode Pemasok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
	$no = 1;
?>    
    <?php
	foreach($brgmsk as $data){
		echo "<tr align=center>
			<td>" . $no . "</td> 
			<td>" . $data['Kd_Bahan'] . "</td>
			<td>" . $data['Tgl_Beli'] . "</td>
			<td>" . $data['Nominal'] . "</td>
			<td>" . $data['Jumlah'] . "</td>
			<td>" . $data['Kd_JenisBahan'] . "</td>
			<td>" . $data['Kd_Pemasok'] . "</td>
			<td> 
				 <a href=" . base_url() ."brgmsks/editbahanmasuk/" .$data['Kd_Bahan'].">Edit</a>
			</tr>";
			$no++;
	}
	?>
                                    </tbody>
                                </table>
        <center><div class='btn-group'>
                <a href="<?= base_url()?>brgmsks/addbahanmasuk/"" class='btn btn-success'>Tambah Data</a>
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
