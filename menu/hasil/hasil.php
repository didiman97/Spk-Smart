<?php
$data=mysqli_query($conn, "SELECT * FROM data_kriteria");

?>
<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?menu">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Hasil</li>
    </ol>
</nav>
<h4>Normalisasi Data Kriteria</h4>
<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php

                    $no=1;
                    while ($row=mysqli_fetch_array($data)){
                        $k1=$row['K1'];
                        $k2=$row['K2'];
                        $k3=$row['K3'];
                        $k4=$row['K4'];
                        $k5=$row['K5'];
                        $hasil=$k1+$k2+$k3+$k4+$k5;
                    ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['K1']; ?></td>
                    <td><?php echo $row['K2']; ?></td>
                    <td><?php echo $row['K3']; ?></td>
                    <td><?php echo $row['K4']; ?></td>
                    <td><?php echo $row['K5']; ?></td>
                    <td><?php echo $hasil; ?></td>
                </tr>
                    <?php
                    }
                    ?>
            </tbody>
</table>
</div>
</div>
<br><br>


<h4>Normalisai Data Alternatif</h4>
<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Alternatif</th>
                    <th>Nama Alternatif</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $data=mysqli_query($conn, "SELECT * FROM data_kriteria");
                    $no=1;
                    while($row=mysqli_fetch_array($data)){
                        $k1=$row['K1'];
                        $k2=$row['K2'];
                        $k3=$row['K3'];
                        $k4=$row['K4'];
                        $k5=$row['K5'];
                        $utilitynamak1=100*(100-$k1)/(100-0);
                        $utilitynamak2=100*(100-$k2)/(100-0);
                        $utilitynamak3=100*(100-$k3)/(100-0);
                        $utilitynamak4=100*(100-$k4)/(100-0);
                        $utilitynamak5=100*(100-$k5)/(100-0);
                    ?>
                    <td><?php echo $no++?></td>
                    <td><?php echo $row['Kd_Alternatif']; ?></td>
                    <td><?php echo $row['Nama_Alternatif']; ?></td>
                    <td><?php echo $utilitynamak1; ?></td>
                    <td><?php echo $utilitynamak2; ?></td>
                    <td><?php echo $utilitynamak3; ?></td>
                    <td><?php echo $utilitynamak4; ?></td>
                    <td><?php echo $utilitynamak5; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<br>
<h4>Normalisasi Terbobot</h4>
<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $data=mysqli_query($conn, "SELECT * FROM data_kriteria");
                    $no=1;
                    while ($row=mysqli_fetch_array($data)){
                        $k1=$row['K1'];
                        $k2=$row['K2'];
                        $k3=$row['K3'];
                        $k4=$row['K4'];
                        $k5=$row['K5'];
                        $utilitynamak1=100*(100-$k1)/(100-0);
                        $utilitynamak2=100*(100-$k2)/(100-0);
                        $utilitynamak3=100*(100-$k3)/(100-0);
                        $utilitynamak4=100*(100-$k4)/(100-0);
                        $utilitynamak5=100*(100-$k5)/(100-0);
                        $wjtanggungan=0.30;
                        $wjuangmuka=0.30;
                        $wjkemampuan=0.15;
                        $wjaminan=0.15;
                        $wjkondisi=0.10;
                        $utilitykeseluruhan1=$utilitynamak1*$wjtanggungan;
                        $utilitykeseluruhan2=$utilitynamak2*$wjuangmuka;
                        $utilitykeseluruhan3=$utilitynamak3*$wjkemampuan;
                        $utilitykeseluruhan4=$utilitynamak4*$wjaminan;
                        $utilitykeseluruhan5=$utilitynamak5*$wjkondisi;
                        $total=$utilitykeseluruhan1+$utilitykeseluruhan2+$utilitykeseluruhan3+$utilitykeseluruhan4+$utilitykeseluruhan5;
                        
                    ?>

                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['Nama_Alternatif']; ?></td>
                    <td><?php echo $utilitynamak1 . " * ". $wjtanggungan . " = " .$utilitykeseluruhan1 ?></td>
                    <td><?php echo $utilitynamak2 . " * ". $wjuangmuka . " = " .$utilitykeseluruhan2 ?></td>
                    <td><?php echo $utilitynamak3 . " * ". $wjkemampuan . " = " .$utilitykeseluruhan3 ?></td>
                    <td><?php echo $utilitynamak4 . " * ". $wjaminan . " = " .$utilitykeseluruhan4 ?></td>
                    <td><?php echo $utilitynamak5 . " * ". $wjkondisi . " = " .$utilitykeseluruhan5 ?></td>
                    <td><?php echo $total; ?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>



<br>
<h4>Hasil Rank</h4>
<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>Total</th>
                    <th>Keputusan</th>
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

                    <td><?php echo $no++; ?></td>
                    <td><?php echo $nama ?></td>
                    <td><?php echo $total ?></td>
                    
                    <td class="text-center"><?php echo $row['Layak']; ?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<a href="?menu=hasil&aksi=print" class="btn btn-success btn-lg">Cetak</a>
<br>
<br>