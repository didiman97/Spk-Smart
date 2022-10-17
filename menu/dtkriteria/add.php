<?php
    if (isset($_POST["simpank"])) {

        $query = mysqli_query($conn, "SELECT max(Kd_Kriteria) as kodeal FROM data_kriteria");
        $data = mysqli_fetch_array($query);
        $kode = $data['kodeal'];
        $urutan = (int) substr($kode, 3, 3);
        $urutan++;
        $huruf = "SPK";
        $kode = $huruf . sprintf("%03s", $urutan);

        $kdalternatif = htmlspecialchars($_POST["kdalternatif"]);
        $nmalt = htmlspecialchars($_POST["nmalt"]);
        $k1 = htmlspecialchars($_POST["k1"]);
        $k2 = htmlspecialchars($_POST["k2"]);
        $k3 = htmlspecialchars($_POST["k3"]);
        $k4 = htmlspecialchars($_POST["k4"]);
        $k5 = htmlspecialchars($_POST["k5"]);


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
        
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_kriteria WHERE Kd_Alternatif='$kdalternatif'"));
        if ($cek > 0) {
            echo "<script>
            alert('data sudah ada');
            location.href = '?menu=dtkriteria';
            </script>";
        }else{
            $query = "INSERT INTO data_kriteria VALUES 
                        ('', '$kode', '$kdalternatif', '$nmalt', '$k1', '$k2', '$k3', '$k4', '$k5')";
            mysqli_query($conn, $query);

            $query1 = "INSERT INTO hasil VALUES 
            ('','$kdalternatif','$nmalt', '$utilitykeseluruhan1', '$utilitykeseluruhan2', '$utilitykeseluruhan3', 
            '$utilitykeseluruhan4', '$utilitykeseluruhan5', '$total')";
            mysqli_query($conn, $query1);

            if($query && $query1){
                echo "<script>
                    alert('data berhasil ditambahkan');
                    location.href = '?menu=dtkriteria';
                </script>";
            }else{
                echo "<script>
                    alert('data gagal di tambahkan');
                    location.href = '?menu=dtkriteria&aksi=add';
                </script>";
            }
        }
    }
?>