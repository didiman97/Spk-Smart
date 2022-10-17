<?php 
    if (isset($_POST['batal'])) {
        header('Location:?menu=dtalternatif');
    }elseif (isset($_POST['update'])) {

        $Id = htmlspecialchars($_POST['id']);
        $kdalternatif = htmlspecialchars($_POST['kdalternatif']);
        $tgl_permohonan = htmlspecialchars($_POST["tglpermohonan"]);
        $nama = htmlspecialchars($_POST["nama"]);
        $jk = htmlspecialchars($_POST["jk"]);
        $alamat = htmlspecialchars($_POST["alamat"]);
        $tgl_lahir = htmlspecialchars($_POST["tgllahir"]);
        $tprumah = htmlspecialchars($_POST["tprumah"]);
        $nlkredit = htmlspecialchars($_POST["nlkredit"]);
    
        $queryu = "UPDATE data_alternatif SET
        Tgl_Permohonan = '$tgl_permohonan',
        Nama_Alternatif = '$nama',
        JK = '$jk',
        Alamat = '$alamat',
        Tgl_Lahir = '$tgl_lahir',
        Tipe_Rumah = '$tprumah',
        Nilai_Kredit = '$nlkredit'
        WHERE No = '$Id'";
        mysqli_query($conn, $queryu);

        $updatek = "UPDATE data_kriteria SET
        Nama_Alternatif = '$nama'
        WHERE Kd_Alternatif = '$kdalternatif'";
        mysqli_query($conn, $updatek);

        $updateh = "UPDATE hasil SET
        Nama = '$nama'
        WHERE Kd_Alternatif = '$kdalternatif'";
        mysqli_query($conn, $updateh);

        if($queryu){
            echo "<script>
                alert('data berhasil di ubah');
                location.href = '?menu=dtalternatif';
            </script>";
        }else{
            echo "<script>
                alert('data gagal di ubah');
                location.href = '?menu=dtalternatif&aksi=updateprocess';
            </script>";
        }
    }

?>