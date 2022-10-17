<?php 
if(isset($_GET['id'])){
    $Id = $_GET['id'];
    $sql1 = $conn->query("DELETE FROM data_kriteria WHERE Kd_Alternatif = '$Id'");
    $sql2 = $conn->query("DELETE FROM hasil WHERE Kd_Alternatif = '$Id'");
    if($sql1 && $sql2){
    echo "<script>
        alert('Data Berhasil Di Hapus. ');
        location.href='?menu=dtkriteria';
    </script>";
	}
}

?>