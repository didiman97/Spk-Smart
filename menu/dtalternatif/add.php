<?php
    if (isset($_POST["simpana"])) {

        $query = mysqli_query($conn, "SELECT max(Kd_Alternatif) as kodeal FROM data_alternatif");
        $data = mysqli_fetch_array($query);
        $kode = $data['kodeal'];
        $urutan = (int) substr($kode, 1, 3);
        $urutan++;
        $huruf = "A";
        $kode = $huruf . sprintf("%03s", $urutan);

        
        $tgl_permohonan = htmlspecialchars($_POST["tglpermohonan"]);
        $nama = htmlspecialchars($_POST["nama"]);
        $jk = htmlspecialchars($_POST["jk"]);
        $alamat = htmlspecialchars($_POST["alamat"]);
        $tgl_lahir = htmlspecialchars($_POST["tgllahir"]);
        $tprumah = htmlspecialchars($_POST["tprumah"]);
        $nlkredit = htmlspecialchars($_POST["nlkredit"]);
    
        $query = "INSERT INTO data_alternatif VALUES
        ('', '$kode', '$tgl_permohonan', '$nama', '$jk', '$alamat', '$tgl_lahir', '$tprumah', '$nlkredit')
        ";
        mysqli_query($conn, $query);

        if($query){
            echo "<script>
                alert('data berhasil ditambahkan');
                location.href = '?menu=dtalternatif';
            </script>";
        }else{
            echo "<script>
                alert('data gagal di tambahkan');
                location.href = '?menu=dtalternatif&aksi=add';
            </script>";
        }
    }
?>