<?php 
    if (isset($_POST['batal'])) {
        header('Location:?menu=dtkriteria');
    }elseif (isset($_POST['update'])) {

        $Id = htmlspecialchars($_POST['id']);
        $kdalternatif = htmlspecialchars($_POST['kdalternatif']);
        $k1 = htmlspecialchars($_POST['k1']);
        $k2 = htmlspecialchars($_POST['k2']);
        $k3 = htmlspecialchars($_POST['k3']);
        $k4 = htmlspecialchars($_POST['k4']);
        $k5 = htmlspecialchars($_POST['k5']);
    
        $queryu = "UPDATE data_kriteria SET
        K1 = '$k1',
        K2 = '$k2',
        K3 = '$k3',
        K4 = '$k4',
        K5 = '$k5'
        WHERE No = '$Id'";
        mysqli_query($conn, $queryu);

        $queryi = "UPDATE hasil SET
        K1 = '$k1',
        K2 = '$k2',
        K3 = '$k3',
        K4 = '$k4',
        K5 = '$k5'
        WHERE Kd_Alternatif = '$kdalternatif'";
        mysqli_query($conn, $queryi);

        if($queryu){
            echo "<script>
                alert('data berhasil di ubah');
                location.href = '?menu=dtkriteria';
            </script>";
        }else{
            echo "<script>
                alert('data gagal di ubah');
                location.href = '?menu=dtkriteria&aksi=updateprocess';
            </script>";
        }
    }

?>