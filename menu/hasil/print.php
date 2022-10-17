<br>
    <center>
        <div class="row">
            <div class="col-md-4">
                <img class="float-right" src="assets/img/logo.png" alt="J. City" class="img-thumbnail" width="200px" height="75px">
            </div>
            <div class="col-md-6">
            <h6><b>JEWEL RESIDENCE</b></h6>
            <p>l. Sidorukun No.149 A, Pulo Brayan Darat II<br>
            Kec. Medan Tim., Kota Medan, Sumatera Utara 20237</p>

            </div>
        </div>
    </center>
    <br>
<center>
    <div class="col-md-10">
        <div class="table-responsive">
            <table class="table table-striped table-bordered responsive">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Alternatif</th>
                        <th>Hasil</th>
                        <th>Layak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $hasilrank=mysqli_query($conn, "SELECT * FROM hasil ORDER BY Total ASC");
                        $no=1;
                        $rank=1;
                        $huruf="RANK";
                        while ($row=mysqli_fetch_array($hasilrank)){
                            $nama = $row['Nama'];
                            $total = $row['Total'];
                            
                        ?>

                        <td class="text-center"><?php echo $no++; ?></td>
                        <td><?php echo $nama ?></td>
                        <td class="text-center"><?php echo $total ?></td>
                        <td class="text-center"><?php echo $row['Layak']; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</center>
<script>
    window.print();
</script>
