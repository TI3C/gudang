<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                <br/>
                </div>
                 <!-- end  page header -->
            </div>
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            LIST BARANG READY
                        </div>
						<br/>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" style="width: 80%;" align="center">
                                    <thead >
                                        <tr >
                                            <th>No</th>
                                            <th>Kode Jenis Bahan</th>
                                            <th>Keterangan</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>                                  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
	$no = 1;
?>    
    <?php
	foreach($barang as $data){
		echo "<tr align=center>
			<td>" . $no . "</td> 
			<td>" . $data['Kd_JenisBahan'] . "</td>
			<td>" . $data['Keterangan'] . "</td>
			<td>" . $data['Jumlah'] . "</td>
			<td>" . $data['Satuan'] . "</td>
			</tr>";
			$no++;
	}
	?>
                                    </tbody>
                                </table>
                          </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>
                
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
   
</body>

</html>
